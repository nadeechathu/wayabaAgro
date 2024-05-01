<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\Customer;
use App\Models\Review;
use App\Models\Brand;
use App\Models\Variant;
use App\Models\Promotion;
use App\Models\ProductInquiry;
use App\Models\EmailSender;
use App\Jobs\DeactivateExpiredPromotions;
use Auth;
use Share;
use Session;

class ProductController extends Controller
{
    
    public function shop(Request $request){

        $searchKey = $request->searchKey;
        $selectedCategory = $request->selected_category;
        $selectedBrand = $request->selected_brand;
        $selectedCountry = Session::get('selectedCountry');
    

        $products = Product::with('images','promotion','featuredImage','reviews','countries')
        // ->where('featured',1)
        ->where(function($query) use ($selectedCategory){

            if($selectedCategory != null){
                $query->where('category_id',$selectedCategory);
            }else{
                $query;
            }
        })
        ->where(function($query) use ($selectedBrand){

             if($selectedBrand != null){
                 $query->where('category_id', $selectedBrand);
             }
             else{
                $query;
             }
        })
        ->whereHas('countries', function($query) use($selectedCountry) {

            if($selectedCountry == null){

                $query;

            }else{

                $query->where('countries.country_code',$selectedCountry);

                

            }

        })
        ->where('status',1)
        ->where('product_name','like','%'.$searchKey.'%')
        ->paginate(env("RECORDS_PER_PAGE"));

        foreach($products as $product){
            $product->product_rating = Product::getPoductRating($product->id);
        }

        $categories = Category::where('type',Category::PRODUCT)->where('status',1)->get();
        $brands = Brand::where('brand_status',1)->get();
       

        return view('frontend.shop.shop',compact('products','categories','searchKey','brands','selectedCategory','selectedBrand'));
    }

    public function ShowStockClearanceProducts(Request $request){

        $searchKey = $request->searchKey;

        $stockClearancePromotion = Promotion::with('products')->where('type',2)->get()->first();

        $products = $stockClearancePromotion->products()->where('product_name','like','%'.$searchKey.'%')->paginate(env("RECORDS_PER_PAGE"));

        foreach($products as $product){
            $product->product_rating = Product::getPoductRating($product->id);
        }

        return view('frontend.shop.stock_clearance',compact('products','searchKey','stockClearancePromotion'));
        
    }

    public function getProductForSlug($slug, Request $request){

        try{

            $productId = $request->product_id;
            $variantId = $request->varient_selector;
            
            $product = Product::with('images','categories','linkedProducts','promotion','featuredImage','inventory','reviews','variants')->where('slug',$slug)->get()->first();

            if($product != null){


                    $selectedVariant = $product->variants[0];

                    if($variantId != null){

                        $selectedVariant = Variant::with('inventory')->where('id',$variantId)->get()->first();

                    }

                    
                    $product->product_rating = Product::getPoductRating($product->id);

                    $shareComponent = Share::page(
                        route('web.shop.product', ['slug' => $product->slug  ]),
                        $product->product_name,

                    )
                    ->facebook()
                    ->twitter()
                    ->linkedin()        
                    ->whatsapp();

                    $relatedProducts = Product::with('images','categories','linkedProducts','promotion','featuredImage','inventory','reviews')
                        
                        ->where('status',1)
                        ->where('category_id', $product->category_id)
                        ->whereNotIn('id',[$product->id])
                        ->limit(8)->get();

            

                    return view('frontend.products.single_product',compact('product','shareComponent','relatedProducts','selectedVariant'));


            }else{

                    return view('frontend.errors.error_404');
                    
            }

        }catch(\Exception $exception){
dd($exception);
            $error = $exception->getMessage().' - line - '.$exception->getLine();
            return view('frontend.errors.error_500',compact('error'));

        }

    }

    public function saveProductReviews(Request $request){
        // dd($request->all());

        try{

            $productId = $request->product_id;
            $customerId = null;
            $rating = $request->rating;
            $reviewDescription = $request->review;

            if(Auth::user()){
                $customer = Customer::where('user_id',Auth::user()->id)->get()->first();

                if($customer != null){
                    $customerId = $customer->id;
                }
            }

            $review = new Review;

            $review->product_id = $productId;
            $review->customer_id = $customerId;
            $review->review_rating = $rating;
            $review->review_description = $reviewDescription;
            $review->review_status = 1;

            $score = 0;

            if($rating == "5"){

                $score = 252;

            }elseif($rating == "4"){

                $score = 124;

            }elseif($rating == "3"){

                $score = 40;

            }elseif($rating == "2"){

                $score = 29;

            }else{
                $score = 33;
            }

            $review->score = $score;

            $savedReview = Review::create($review->toArray());

            return back()->with('success','Thank you for your valueble feedback');

        }catch(\Exception $exception){

            $error = $exception->getMessage().' - line - '.$exception->getLine();
            return view('frontend.errors.error_500',compact('error'));

        }


    }

    public function getProductsForCategory(Request $request, $slug){

        try{

            $searchKey = $request->searchKey;

            $product_category = ChildCategory::with('products')->where('slug',$slug)->get()->first();

            $metaContent = array(
                'page_title' => $product_category->page_title,
                'meta_tag_description' => $product_category->meta_tag_description,
                'meta_keywords' => $product_category->meta_keywords,
                'canonical_url' => $product_category->canonical_url
            );


            $products = $product_category->products()->where('product_name','like','%'.$searchKey.'%')->paginate(env("RECORDS_PER_PAGE"));

            foreach($products as $product){
                $product->product_rating = Product::getPoductRating($product->id);
            }

            return view('frontend.categories.shop_category',compact('product_category','metaContent','products','searchKey'));

        }catch(\Exception $exception){

            $error = $exception->getMessage().' - line - '.$exception->getLine();
            return view('frontend.errors.error_404',compact('error'));
        }
    }

    public function deactivateExpiredPromotions(){
    
        DeactivateExpiredPromotions::dispatch();
    
        return "job running";
    }

    public function storeProductInquiry(Request $request){
   
        try{
            $validated = $request->validate([
                'customer_name' => ['required', 'max:255'],
                'phone' => ['required', 'digits:10'],
                'email' => ['required','email'],
                'address' => ['required'],
                // 'country_id' => ['required'],
                // 'product_id' => ['required'],
                // 'variant_selector' => ['required']
            ]);

            $productInquiry = new ProductInquiry;

            $productInquiry->product_id = $request->product_id;
            $productInquiry->variant_id = $request->variant_selector;
            $productInquiry->customer_name = $request->customer_name;
            $productInquiry->phone = $request->phone;
            $productInquiry->email = $request->email;
            $productInquiry->product_name = $request->product_name;
            $productInquiry->address = $request->address;
            $productInquiry->country_id = $request->country_id;
            $productInquiry->notes = $request->notes;
            $productInquiry->quantity = $request->quantity;
            $productInquiry->product_name = $request->product_name;

            $savedProductInquiry = ProductInquiry::create($productInquiry->toArray());

            EmailSender::sendProductInquryEmail($savedProductInquiry->id);

            return back()->with('success','Your product inquiry has been submitted. We will contact you shortly.');

        }catch(\Exception $exception){
            // dd($exception);
            $error = $exception->getMessage().' - line - '.$exception->getLine();
            return view('frontend.errors.error_500',compact('error'));

        }



    }

    public function getSelectedVariant($slug,Request $request){

        try{

            $productId = $request->product_id;
            $variantId = $request->variant_selector;

            $product = Product::with('images','categories','linkedProducts','promotion','featuredImage','inventory','reviews','variants')->where('slug',$slug)->get()->first();
            

            if($product != null){

                    $selectedVariant = $product->variants[0];

                    if($variantId != null){

                        $selectedVariant = Variant::with('inventory')->where('product_id',$productId)->where('variant_id',$variantId)->get()->first();

                    }
                    $product->product_rating = Product::getPoductRating($product->id);

                    $shareComponent = Share::page(
                        route('web.shop.product', ['slug' => $product->slug  ]),
                        $product->product_name,

                    )
                    ->facebook()
                    ->twitter()
                    ->linkedin()        
                    ->whatsapp();

                    $relatedProducts = Product::with('images','categories','linkedProducts','promotion','featuredImage','inventory','reviews' )
                        
                        ->where('status',1)
                        ->where('category_id', $product->category_id)
                        ->whereNotIn('id',[$product->id])
                        ->limit(8)->get();

            

                    return view('frontend.products.single_product',compact('product','shareComponent','relatedProducts','selectedVariant'));


            }else{

                    return view('frontend.errors.error_404');
                    
            }


        }catch(\Exception $exception){
            dd($exception);
            $error = $exception->getMessage().' - line - '.$exception->getLine();
            return view('frontend.errors.error_500',compact('error'));

        }
    }

}
