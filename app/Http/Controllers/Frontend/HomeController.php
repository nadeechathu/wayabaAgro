<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use App\Models\Image;
use App\Models\Country;
use App\Models\Advertisement;
use App\Models\Brand;
use App\Models\UserSubscription;
use Session;

class HomeController extends Controller
{


    public function index()
    {
        // $products = Product::with('images','promotion','featuredImage','categories','variants')->where('featured',1)->where('status',1)->limit(12)->paginate(env("RECORDS_PER_PAGE"));
        $selectedCountry = Session::get('selectedCountry');

        $new_products = Product::with('images', 'promotion', 'featuredImage', 'categories', 'variants','countries','exportImages','exportFeaturedImage')
        ->whereHas('countries', function($query) use($selectedCountry) {

            if($selectedCountry == null){

                $query;

            }else{

                $query->where('countries.country_code',$selectedCountry);

                

            }

        }) 
        ->where('status', 1)->orderBy('created_at', 'desc')->limit(12)->get();

     
        $featured_products = Product::with('images','promotion','featuredImage','categories','variants','countries','exportImages','exportFeaturedImage')->where('status',1)
        ->where('export_product',1)->orderBy('created_at','desc')->get();
              
        $countries=Country::where('status', 1)->get();


        $treading_products = Product::with('images', 'promotion', 'featuredImage', 'categories', 'variants','countries','exportImages','exportFeaturedImage')
        ->whereHas('countries', function($query) use($selectedCountry) {

            if($selectedCountry == null){

                $query;

            }else{

                $query->where('countries.country_code',$selectedCountry);

                

            }

        }) 
        ->where('new_arrival', 1)->where('status', 1)->orderBy('created_at', 'desc')->limit(8)->get();

        $categories = Category::where('type', Category::PRODUCT)->get();

        $sliderImages = Image::getSliderImages();
        $advertisements = Advertisement::where('status', 1)->limit(2)->get();

        $content = [];

        $content['countries'] = $countries;

        // foreach($products as $product){
        //     $product->product_rating = Product::getPoductRating($product->id);
        // }

        // foreach($new_products as $product){
        //     $product->product_rating = Product::getPoductRating($product->id);
        // }

        // $brands = Brand::where('brand_status',1)->get();


        return view('frontend.home',compact('categories','featured_products','new_products','sliderImages','advertisements','treading_products','countries'));
    }

    public function subscribe(Request $request)
    {

        try {

            $subscription = UserSubscription::where('email', $request->email)->get()->first();

            if ($subscription == null) {

                $subscription = new UserSubscription;

                $subscription->email = $request->email;

                $subscription = UserSubscription::create($subscription->toArray());


                return back()->with('success', 'Subscription added successfully !');
            } else {

                return back()->with('warning', 'User already subscribed');
            }
        } catch (\Exception $exception) {

            $error = $exception->getMessage() . ' - line - ' . $exception->getLine();
            return view('frontend.errors.error_500', compact('error'));
        }
    }



    public function singleProduct()
    {
        return view('frontend.products.single_product.single_product');
    }



    public function mainSearch(Request $request)
    {
        $searchKey = $request->searchKey;

        Session::put('searchKey', $searchKey);

        $products = Product::with('images', 'categories', 'promotion', 'featuredImage','exportImages','exportFeaturedImage')
            ->where('status', 1)
            ->where('product_name', 'like', '%' . $searchKey . '%')
            ->paginate(env("RECORDS_PER_PAGE"));

        $categories = Category::where('type', Category::PRODUCT)->get();

        return view('frontend.shop.shop', compact('products', 'categories', 'searchKey'));
    }
    public function loginRegister()
    {

        return view('auth.login_register');
    }

     public function submitCountry(Request $request )
     {

        $countryId =$request->selected_country;

        $country = Country::where('id', $countryId)->get()->first();
      
        Session::put('selectedCountry',$country->country_code);
       
        
        return back();    
       

     }
}
