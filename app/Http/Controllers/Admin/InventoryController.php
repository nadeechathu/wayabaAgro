<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\ProductInventory;
use App\Models\UserLog;
use App\Models\Variant;
use App\Models\ProductInventoryHistory;
use App\Jobs\SendLowStockAlert;
use App\Models\EmailSender;
use App\Models\PreOrder;
use Auth;

class InventoryController extends Controller
{
    public function index(Request $request){

        $hasPermission = Auth::user()->hasPermission('view_inventory');

        if($hasPermission){

            try{

                $searchKey = $request->searchKey;

                $products = Product::getProductForFilters($searchKey);

                if($request->download == null){

                    return view('admin.inventory.all_inventory',compact('searchKey','products'));


                }else{

                    $productsToDownload = Product::getProductForDownload($searchKey);
                    return $this->downloadProductInventory($productsToDownload);

                }




            }catch(\Exception $exception){

                $error = $exception->getMessage();
                return view('admin.errors.error_500',compact('error'));
            }

        }else{
           return redirect('admin/not_allowed');
        }


    }

    public function update(Request $request){



        $hasPermission = Auth::user()->hasPermission('update_inventory');

        if($hasPermission){

            try{

                $stockInCount = $request->stock_in_count;
                $productId = $request->product_id;
                $variantId = $request->variant_id;

                $inventory = ProductInventory::where('product_id',$productId)->where('variant_id',$variantId)->get()->first();

                if($inventory != null){

                    $inventory->master_quantity = $inventory->master_quantity + (int)$stockInCount;

                    $inventory->save();

                    //saving product inventory history

                    $savedHistory = ProductInventoryHistory::saveProductInventoryHistory($productId,$variantId,"stock-in",$stockInCount,$inventory->master_quantity, 0,Auth::user()->id,null,null);

                    $product = Product::where('id',$productId)->get()->first();

                    if(Auth::user()){
                        //saving user log
                        UserLog::saveUserLog(Auth::user()->id, "Product inventory updated","Product ".$product->product_name." inventory updated with ".$stockInCount." items");
                    }

                    $preorders = PreOrder::where('product_id',$productId)->where('variant_id',$variantId)->where('stock_alert_sent',0)->get();

                    foreach($preorders as $preorder){

                        EmailSender::sendPreOrderStockInEmail($preorder->id);
                    }

                    return back()->with('success','Inventory updated successfully !');
                }else{

                    return back()->with('error','Could not find the inventory for the product');
                }


            }catch(\Exception $exception){

                $error = $exception->getMessage();
                return view('admin.errors.error_500',compact('error'));
            }

        }else{
           return redirect('admin/not_allowed');
        }


    }




    public function showProductInventoryHistory(Request $request){

        $hasPermission = Auth::user()->hasPermission('view_inventory');

        if($hasPermission){

            $searchKey = $request->searchKey;
            $products = Product::with('variants')
            ->where('product_name','like','%'.$searchKey.'%')->paginate(env("RECORDS_PER_PAGE"));



            return view('admin.inventory.product_inventory_history',compact('searchKey','products'));

        }else{
           return redirect('admin/not_allowed');
        }
    }




    public function downloadProductInventoryHistory($id){


        $productId = explode(',',$id)[0];
        $variantId = explode(',',$id)[1];

        $product = Product::where('id',$productId)->get()->first();

        $fileName = $product->product_name.'-inventory_log.csv';
        $variant = Variant::with('inventoryHistories')->where('id',$variantId)->get()->first();
       

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('RECORDED DATE', 'ORDER TRACKING NUMBER', 'PRODUCT NAME', 'VARIANT NAME', 'OPERATION', 'QUANTITY', 'RUNNING QUANTITY', 'ACTUAL RESERVED QUANTITY','PROCESSED BY');

        
        $callback = function() use($product, $columns, $variant) {
          
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);
 
            foreach ($variant->inventoryHistories as $history) {

                $trackingNumber = '-';

                if($history->order_number != null){
                    $trackingNumber = $history->order_number;
                }

                $user_name = '-';

                if($history->processed_by != null){
                    $user = User::where('id',$history->processed_by)->get()->first();
                    if($user != null){
                        $user_name = $user->first_name.' '.$user->last_name;
                    }
                }

                $row['RECORDED DATE']  = $history->created_at;
                $row['ORDER TRACKING NUMBER']    = $trackingNumber;
                $row['PRODUCT NAME']    = $product->product_name;
                $row['VARIANT NAME']    = $variant->variant_name;
                $row['OPERATION']    = $history->operation;
                $row['QUANTITY']  = $history->quantity;
                $row['RUNNING QUANTITY']  = $history->running_quantity;
                $row['ACTUAL RESERVED QUANTITY']  = $history->actual_reserved_quantity;
                $row['PROCESSED BY']  = $user_name;

                fputcsv($file, array($row['RECORDED DATE'], $row['ORDER TRACKING NUMBER'], $row['PRODUCT NAME'], $row['VARIANT NAME'], $row['OPERATION'], $row['QUANTITY'], $row['RUNNING QUANTITY'], $row['ACTUAL RESERVED QUANTITY'], $row['PROCESSED BY']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
        

    }

    public function downloadProductInventory($products){

        $fileName = date('Y_m_d').'_product_inventory.csv';

                    $headers = array(
                        "Content-type"        => "text/csv",
                        "Content-Disposition" => "attachment; filename=$fileName",
                        "Pragma"              => "no-cache",
                        "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
                        "Expires"             => "0"
                    );

                    $columns = array('PRODUCT NAME', 'VARIANT NAME', 'PRODUCT CODE', 'STATUS', 'INVENTORY STATUS', 'AVAILABLE QUANTITY', 'RESERVED QUANTITY', 'STOCK OUT QUANTITY', 'WEIGHT', 'SELLING PRICE', 'UNIT PRICE');

                    $callback = function() use($products, $columns) {
                        $file = fopen('php://output', 'w');
                        fputcsv($file, $columns);

                        foreach ($products as $product) {

                            foreach($product->variants as $variant){

                                $inventoryStatus = "Out of Stock";
                                $productStatus = "Draft";
    
                                if($variant->inventory->master_quantity > 0){
    
                                    $inventoryStatus = "In Stock";
                                }
    
                                if($variant->status == 1){
    
                                    $productStatus = "Active";
                                }
    
    
                                $row['PRODUCT NAME']  = $product->product_name;
                                $row['VARIANT NAME']  = $variant->variant_name;
                                $row['PRODUCT CODE']    = $product->product_code;
                                $row['STATUS']    = $productStatus;
                                $row['INVENTORY STATUS']    = $inventoryStatus;
                                $row['AVAILABLE QUANTITY']  = $product->inventory->master_quantity;
                                $row['RESERVED QUANTITY']  = $product->inventory->reserved_quantity;
                                $row['STOCK OUT QUANTITY']  = $product->inventory->stock_out_quantity;
                                $row['WEIGHT']    = $product->weight.' '.$product->weight_unit;
                                $row['SELLING PRICE']    = $product->selling_price;
                                $row['UNIT PRICE']    = $product->unit_price;
    
                                fputcsv($file, array($row['PRODUCT NAME'], $row['VARIANT NAME'], $row['PRODUCT CODE'], $row['STATUS'],  $row['INVENTORY STATUS'], $row['AVAILABLE QUANTITY'], $row['RESERVED QUANTITY'], $row['STOCK OUT QUANTITY'], $row['WEIGHT'], $row['SELLING PRICE'], $row['UNIT PRICE']));
                            
                            }

                            }

                        fclose($file);
                    };

                    return response()->stream($callback, 200, $headers);



    }

    public function sendLowStockAlerts(){

        SendLowStockAlert::dispatch();

        return "job running";
    }


}
