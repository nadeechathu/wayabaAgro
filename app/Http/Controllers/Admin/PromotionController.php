<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promotion;
use App\Models\Product;
use App\Models\UserLog;
use App\Jobs\DeactivateExpiredPromotions;
use Auth;

class PromotionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){

        $hasPermission = Auth::user()->hasPermission('view_promotions');

        if($hasPermission){

            $searchKey = $request->searchKey;

            $promotions = Promotion::getPromotionsForFilters($searchKey);

            return view('admin.promotions_and_discounts.all_promotions',compact('promotions','searchKey'));

        }else{
            return redirect('admin/not_allowed');
        }
   

    }

    public function createPromotion(Request $request){

        $hasPermission = Auth::user()->hasPermission('add_promotions');

        if($hasPermission){

            $promotion = new Promotion;

            $promotion->title = $request->title;
            $promotion->description = $request->description;
            $promotion->promotion_tag = $request->promotion_tag;
            $promotion->discount_type = $request->discount_type;
            $promotion->discount = $request->discount;
            $promotion->type = $request->type;
            $promotion->starts_at = $request->starts_at;
            $promotion->ends_at = $request->ends_at;

            Promotion::create($promotion->toArray());

            if(Auth::user()){
                //saving user log
                UserLog::saveUserLog(Auth::user()->id, "New promotion created","New promotion ".$request->title." created");
            } 


            return back()->with('success','Promotion created successfully !');

        }else{
            return redirect('admin/not_allowed');
        }

    }

    public function editPromotion(Request $request){

        $hasPermission = Auth::user()->hasPermission('edit_promotions');

        if($hasPermission){

            $promotion = Promotion::where('id',$request->promotion_id)->get()->first();

            if($promotion != null){

                $promotion->title = $request->title;
                $promotion->description = $request->description;
                $promotion->promotion_tag = $request->promotion_tag;
                $promotion->discount_type = $request->discount_type;
                $promotion->discount = $request->discount;
                $promotion->type = $request->type;
                $promotion->starts_at = $request->starts_at;
                $promotion->ends_at = $request->ends_at;

                $promotion->save();

                if(Auth::user()){
                    //saving user log
                    UserLog::saveUserLog(Auth::user()->id, "Promotion updated","Promotion ".$request->title." updated");
                } 
    
                return back()->with('success','Promotion updated successfully !');


            }else{

                return back()->with('error','Could not find the promotion details.');
            }         



        }else{
            return redirect('admin/not_allowed');
        }

    }

    public function removePromotion($id){

        $hasPermission = Auth::user()->hasPermission('delete_promotions');

        if($hasPermission){

            $promotion = Promotion::where('id',$id)->get()->first();

            if(Auth::user()){
                //saving user log
                UserLog::saveUserLog(Auth::user()->id, "Promotion removed","Promotion ".$promotion->title." removed");
            } 

            Product::where('promotion_id',$id)->update(['promotion_id' => null]);

            Promotion::where('id',$id)->delete();

            return back()->with('success','Promotion removed successfully !');        



        }else{
            return redirect('admin/not_allowed');
        }

    }

    
    public function changePromotionStatus($id){

        try{

            $hasPermission = Auth::user()->hasPermission('edit_promotions');

            if($hasPermission){

                $promotion = Promotion::where('id',$id)->get()->first();

                $msg = null;

                if($promotion != null){

                    if($promotion->status == 0){
                        $promotion->status = 1;
                        $msg = "Promotion activated successfully !";
                    }else{
                        $msg = "Promotion deactivated successfully !";
                        $promotion->status = 0;
                    }

                    $promotion->save();

                    if(Auth::user()){
                        //saving user log
                        UserLog::saveUserLog(Auth::user()->id, "Promotion status changed","Promotion ".$promotion->title." status changed to ".$promotion->status);
                    } 

                    return back()->with('success',$msg);               

                }else{

                    return back()->with('error','Could not find the promotion.');
                }

                
            }else{
                return redirect('admin/not_allowed');
            }
           

        }catch(\Exception $exception){
            
            $error = $exception->getMessage().' - line - '.$exception->getLine();
            return view('frontend.errors.error_500',compact('error'));

    }
}

public function assignPromotionForProductUI(Request $request){

    $hasPermission = Auth::user()->hasPermission('assign_promotions');

    if($hasPermission){

        $searchKey = $request->searchKey;
        $products = Product::getProductForFilters($searchKey, 0, null);
        $promotions = Promotion::where('status',1)->get();

        return view('admin.promotions_and_discounts.assign_promotions',compact('promotions','products','searchKey'));

          
    }else{
        return redirect('admin/not_allowed');
    }
} 

public function assignPromotionForProduct(Request $request){

        $hasPermission = Auth::user()->hasPermission('assign_promotions');

        if($hasPermission){

            $product = Product::where('id',$request->product_id)->get()->first();

            if($product != null){

                $product->promotion_id = $request->selected_promotion;
                $product->save();

                $promotion = Promotion::where('id',$request->selected_promotion)->get()->first();

                if(Auth::user()){
                    //saving user log
                    UserLog::saveUserLog(Auth::user()->id, "Promotion assigned to product","Promotion ".$promotion->title." assigned to ".$product->product_name);
                } 

                return back()->with('success','Promotion assigned successfully !');   


            }else{
                return back()->with('error','Could not find the product.');
            }

              
        }else{
            return redirect('admin/not_allowed');
        }
} 

public function removePromotionForProduct($id){

    $hasPermission = Auth::user()->hasPermission('assign_promotions');

    if($hasPermission){

        $product = Product::where('id',$id)->get()->first();

        if($product != null){

            
            $promotion = Promotion::where('id',$product->promotion_id)->get()->first();

            $product->promotion_id = null;
            $product->save();

            if(Auth::user()){
                //saving user log
                UserLog::saveUserLog(Auth::user()->id, "Promotion removedfrom product","Promotion ".$promotion->title." removed from ".$product->product_name);
            } 

            return back()->with('success','Promotion removed from hamper successfully !');   


        }else{
            return back()->with('error','Could not find the product.');
        }

          
    }else{
        return redirect('admin/not_allowed');
    }
} 

public function deactivateExpiredPromotions(){
    
    DeactivateExpiredPromotions::dispatch();

    return "job running";
}
}
