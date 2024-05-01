<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = ['id','slug','product_name','product_code','product_description','status','is_approved','weight','unit_price','selling_price','weight_unit','image_url','promotion_id','packing_cost','export_product','short_description','product_rating','brand_id','new_arrival','child_category_id','sub_category_id','category_id','bulk_price','bulk_quantity'];

    public function variants(){
        return $this->hasMany(Variant::class)->with('inventory','inventoryHistories')->where('status',1);
    }
    public function allVariants(){
        return $this->hasMany(Variant::class)->with('inventory','inventoryHistories');
    }
    public function images(){
        return $this->hasMany(ProductImage::class)->where('image_type',0);
    }
    public function featuredImage(){
        return $this->hasOne(ProductImage::class)->where('is_featured',1)->where('image_type',0);
    }

    public function exportImages(){
        return $this->hasMany(ProductImage::class)->where('image_type',1);
    }
    public function exportFeaturedImage(){
        return $this->hasOne(ProductImage::class)->where('is_featured',1)->where('image_type',1);
    }

    public function reviews(){
        return $this->hasMany(Review::class)->with('customer')->orderBy('created_at','desc');
    }

    public function inventoryHistories(){
        return $this->hasMany(ProductInventoryHistory::class)->with('order','user')->orderBy('id','desc');
    }

    public function inventory(){
        return $this->hasOne(ProductInventory::class);
    }

    public function categories(){
        return $this->belongsTo(ChildCategory::class,'child_category_id','id');
    }

    public function linkedProducts(){
        return $this->belongsToMany(Product::class, 'linked_products','parent_product_id','linked_product_id')->with('images');

    }

    public function promotion(){
        return $this->belongsTo(Promotion::class,'promotion_id','id')->where('status',1);
    }

    public function assignedPromotion(){
        return $this->belongsTo(Promotion::class,'promotion_id','id');
    }

    public function brand(){
        return $this->belongsTo(Brand::class,'brand_id','id');
    }

    public function countries(){
        return $this->belongsToMany(Country::class, 'product_has_countries');
    }

    public static function getPoductRating($productId){
        $reviews = Review::where('product_id',$productId)->get();

        $productRate = 0;

        if(sizeof($reviews) > 0){

            $totalReviews = 0;
            $totalReviewsCount = 478; //(252+124+40+29+33)
    
            foreach($reviews as $review){
                $totalReviews = $totalReviews + $review->review_rating;
            }
    
            $productRate = $totalReviews / sizeof($reviews);

        }

       


        return ceil($productRate);
    }

    public static function getProductForFilters($searchKey){

        return Product::with('images','reviews','variants','brand','countries')->where('product_name','like','%'.$searchKey.'%')->orderBy('id','desc')
        ->paginate(env("RECORDS_PER_PAGE"));
    }

    public static function getProductForDownload($searchKey){

        return Product::with('images','inventory','variants')->where('product_name','like','%'.$searchKey.'%')->orderBy('id','desc')->get();
    }

    public static function reserveInventoryForOrderItems($orderId){

        $order = Order::with('orderItems')->where('id',$orderId)->get()->first();
        $userId = null;

        if(Auth::user()){
            $userId = Auth::user()->id;
        }


        foreach($order->orderItems as $orderItem){

            //order item is a hamper

            $product = Product::where('id',$orderItem->product_id)->get()->first();
            $productVariant = Variant::with('inventory')->where('product_id',$orderItem->product_id)->where('id',$orderItem->variant_id)->get()->first();

            $allItemsFulfilled = true;

            if($product != null and $productVariant != null){

                if($productVariant->inventory->master_quantity < $orderItem->quantity){
                    $allItemsFulfilled = false;
                    break;
                }


            }


        }

        if($allItemsFulfilled){

            foreach($order->orderItems as $orderItem){

                //order item is a hamper

                $inventory = ProductInventory::where('product_id',$orderItem->product_id)->where('variant_id',$orderItem->variant_id)->get()->first();
                $orderItemQuantity = $orderItem->quantity;
                $actualReservedQuantity = 0;

                if($inventory != null){

                    $inventory->master_quantity = $inventory->master_quantity - (int)$orderItem->quantity;
                    $inventory->reserved_quantity = $inventory->reserved_quantity + (int)$orderItem->quantity;

                    $inventory->save();

                    $orderItem->actual_reserved_quantity = $orderItem->quantity;
                    $orderItem->is_reserved = 1;

                    $orderItem->save();

                    //save inventory history

                    ProductInventoryHistory::saveProductInventoryHistory($orderItem->product_id,$orderItem->variant_id,"reserve",-$orderItem->quantity,$inventory->master_quantity, $orderItem->quantity,$userId,$orderId,$order->tracking_number);
                }



            }
        }

        if($allItemsFulfilled){
            $order->inventory_status = 1;
            $order->save();
        }

        return $allItemsFulfilled;

    }

    public static function returnInventoryOfCancelledOrder($orderId){

        $order = Order::with('orderItems')->where('id',$orderId)->get()->first();


        foreach($order->orderItems as $orderItem){

            //order item is a hamper

            $product = Product::where('id',$orderItem->product_id)->get()->first();
            $orderItemQuantity = $orderItem->quantity;
            $actualReservedQuantity = 0;

            if($product != null){

                $productInventory = ProductInventory::where('product_id',$product->id)->where('variant_id',$orderItem->variant_id)->get()->first();
                

                $productInventoryHistory = ProductInventoryHistory::where('order_id',$orderId)
                ->where('product_id',$product->id)->where('variant_id',$orderItem->variant_id)->get()->first();


                $productInventory->master_quantity = $productInventory->master_quantity + abs($productInventoryHistory->quantity);

                $productInventory->reserved_quantity = $productInventory->reserved_quantity - abs($productInventoryHistory->quantity);

                $runningQuantity = $productInventory->master_quantity;

                $productInventory->save();

                //saving single product inventory log

                $savedHistory = ProductInventoryHistory::saveProductInventoryHistory($product->id, $orderItem->variant_id,"return",abs($productInventoryHistory->quantity),$productInventory->master_quantity, 0,Auth::user()->id,$orderId,$order->tracking_number);



            }


        }

        //marking order as reserved
        $order->inventory_status = 2;
        $order->save();



    }
}
