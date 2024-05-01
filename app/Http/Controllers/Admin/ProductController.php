<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductInventory;
use App\Models\MeasurementUnit;
use App\Models\UserLog;
use App\Models\Category;
use App\Models\Review;
use App\Models\Brand;
use App\Models\SubCategory;
use App\Models\ChildCategory;
use App\Models\ProductInventoryHistory;
use App\Models\Variant;
use App\Models\ProductCountry;
use App\Models\Country;
use Auth;
use DB;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    public function index(Request $request)
    {
       
        $hasPermission = Auth::user()->hasPermission("view_products");

        if ($hasPermission) {
            $searchKey = $request->searchKey;
            $products = Product::getProductForFilters($searchKey);

            foreach($products as $product){
                $product->product_rating = Product::getPoductRating($product->id);
            }

            $allProducts = Product::all();

            $units = MeasurementUnit::all();

            $maximumId = Product::max("id");
          
            $newProductCode = "PRO1";

            if ($maximumId != null) {
                $maximumId = $maximumId + 1;
                $newProductCode = "PRO" . $maximumId;
            }

            $categories = Category::where('type',Category::PRODUCT)->get();
            $brands = Brand::where('brand_status',1)->get();
            $countries = Country::where('status',1)->get();


            return view('admin.product.all_products',compact('searchKey','products','newProductCode','units','allProducts','categories','brands','countries'));

        }else{
           return redirect('admin/not_allowed');
        }
    }

    public function newProductUI(){

        $hasPermission = Auth::user()->hasPermission("add_products");

        if ($hasPermission) {
           

            $units = MeasurementUnit::all();

            $maximumId = Product::max("id");

            $newProductCode = "PRO1";

            if ($maximumId != null) {
                $maximumId = $maximumId + 1;
                $newProductCode = "PRO" . $maximumId;
            }

            $categories = Category::where('status',1)->where('type',Category::PRODUCT)->get();
            $brands = Brand::where('brand_status',1)->get();
            $countries = Country::where('status',1)->get();


            return view('admin.product.new_product',compact('newProductCode','units','categories','brands','countries'));

        }else{
           return redirect('admin/not_allowed');
        }

    }

    public function editProductUI($id){

        $hasPermission = Auth::user()->hasPermission("edit_products");

        if ($hasPermission) {
           
            $product = Product::with('images','inventory','reviews','countries')->where('id',$id)->get()->first();

            $units = MeasurementUnit::all();           

            $categories = Category::where('status',1)->where('type',Category::PRODUCT)->get();
            // $subCategories = SubCategory::where('status',1)->where('category_id',$product->category_id)->get();
            // $childCategories = ChildCategory::where('status',1)->where('sub_category_id',$product->sub_category_id)->where('type',ChildCategory::PRODUCT)->get();

            $brands = Brand::where('brand_status',1)->get();
            $countries = Country::where('status',1)->get();


            return view('admin.product.edit_product',compact('product','units','categories','brands','countries'));

        }else{
           return redirect('admin/not_allowed');
        }

    }

    public function store(Request $request)
    {
        // dd($request->all());
        $hasPermission = Auth::user()->hasPermission("add_products");

        if ($hasPermission) {
            $this->validate(
                $request,
                [
                    "product_name" => [
                        "required",
                        "string",
                        "max:255",
                        "unique:products",
                    ],
                    "product_description" => ["required"],
                    // "unit_price" => ["required"],
                    // "selling_price" => ["required"],
                    // "weight" => ["required"],
                ],
                [
                    "product_name.unique" => "Product name should be unique",
                    "product_description.required" =>
                        "Product description required",
                    // "unit_price.required" => "Product unit price required",
                    // "selling_price.required" =>
                    //     "Product selling price required",
                    // "weight.required" => "Product weight required",
                ]
            );

            $product = new Product();

            $product->product_name = $request->product_name;
            $product->product_code = $request->product_code;
            $product->product_description = $request->product_description;
            // $product->unit_price = $request->unit_price;
            // $product->selling_price = $request->selling_price;
            $product->status = 1;
            // $product->weight = $request->weight;
            $product->export_product = $request->export_product;
            $product->weight_unit = $request->weight_unit;
            $product->short_description = $request->short_description;
            $product->brand_id = $request->brand_id;
            $product->new_arrival = $request->new_arrival;          
            $product->category_id = $request->category_id;
            $product->slug = $request->slug;
            

            $savedProduct = Product::create($product->toArray());

            $productId = $savedProduct->id;
            // dd($productId);

            

            //end creating product inventory

            $imageCount = 0;

            if ($request->src != null) {
                foreach ($request->src as $file) {
                    $destinationPath =
                        "images/uploads/product/" .
                        date("Y") .
                        "/" .
                        date("m") .
                        "/"; // upload path
                    $ImageName =
                        date("YmdHis").$imageCount. $file->getClientOriginalName();
                    $file->move($destinationPath, $ImageName);

                    DB::table("product_images")->insert([
                        "product_id" => $productId,
                        "src" => $destinationPath . $ImageName,
                    ]);

                    $imageCount++;
                }
            }

            if ($request->featured_image != null) {
                $destinationPath ="images/uploads/product/" .date("Y") ."/" .date("m") . "/"; // upload path
                

                $ImageName = date("YmdHis") .$imageCount.$request->featured_image->getClientOriginalName();

                $request->featured_image->move($destinationPath, $ImageName);

                $featuredImage = ProductImage::where("product_id", $product->id)
                    ->where("is_featured", 1)
                    ->get()
                    ->first();

                if ($featuredImage != null) {
                    $featuredImage->src = $destinationPath . $ImageName;
                    $featuredImage->save();
                } else {
                    DB::table("product_images")->insert([
                        "product_id" => $productId,
                        "src" => $destinationPath . $ImageName,
                        "is_featured" => 1,
                    ]);
                }
            }

            //export images adding
            $imageCount = 0;

            if ($request->export_images != null) {
                foreach ($request->export_images as $file) {
                    $destinationPath =
                        "images/uploads/product/" .
                        date("Y") .
                        "/" .
                        date("m") .
                        "/"; // upload path
                    $ImageName =
                        'export_'.date("YmdHis").$imageCount. $file->getClientOriginalName();
                    $file->move($destinationPath, $ImageName);

                    DB::table("product_images")->insert([
                        "product_id" => $productId,
                        "src" => $destinationPath . $ImageName,
                        "image_type" => 1
                    ]);

                    $imageCount++;
                }
            }

            if ($request->export_featured_image != null) {
                $destinationPath ="images/uploads/product/" .date("Y") ."/" .date("m") . "/"; // upload path
                

                $ImageName = 'export_'.date("YmdHis") .$imageCount.$request->export_featured_image->getClientOriginalName();

                $request->export_featured_image->move($destinationPath, $ImageName);

                $featuredImage = ProductImage::where("product_id", $product->id)
                    ->where("is_featured", 1)
                    ->get()
                    ->first();

                if ($featuredImage != null) {
                    $featuredImage->src = $destinationPath . $ImageName;
                    $featuredImage->image_type = 1;
                    $featuredImage->save();
                } else {
                    DB::table("product_images")->insert([
                        "product_id" => $productId,
                        "src" => $destinationPath . $ImageName,
                        "is_featured" => 1,
                        "image_type" => 1
                    ]);
                }
            }

            //assigning countries to the product
            if($request->countries != null){

                $savedProduct->countries()->attach($request->countries);
            }

            

            if (Auth::user()) {
                //saving user log
                UserLog::saveUserLog(
                    Auth::user()->id,
                    "New single product added",
                    "New single product " . $request->product_name . " added"
                );
            }

            return back()->with("success", "Product created successfully !");
        }
    }
    public function update(Request $request)
    {
        
        $hasPermission = Auth::user()->hasPermission("edit_products");

        if ($hasPermission) {
            $this->validate(
                $request,
                [
                    "product_name" => [
                        "required",
                        "string",
                        "max:255",
                        "unique:products,product_name," . $request->product_id,
                    ],
                    "product_description" => ["required"],
                    // "unit_price" => ["required"],
                    // "selling_price" => ["required"],
                    // "weight" => ["required"],
                ],
                [
                    "product_name.unique" => "Product name should be unique",
                    "product_description.required" =>
                        "Product description required",
                    // "unit_price.required" => "Product unit price required",
                    // "selling_price.required" =>
                    //     "Product selling price required",
                    // "weight.required" => "Product weight required",
                ]
            );

            $product = Product::where("id", $request->product_id)
                ->get()
                ->first();

            if ($product != null) {
                $product->product_name = $request->product_name;
                $product->product_code = $request->product_code;
                $product->product_description = $request->product_description;
                // $product->unit_price = $request->unit_price;
                // $product->selling_price = $request->selling_price;
                // $product->weight = $request->weight;
                $product->export_product = $request->export_product;
                $product->weight_unit = $request->weight_unit;
                $product->short_description = $request->short_description;
                $product->brand_id = $request->brand_id;
                $product->new_arrival = $request->new_arrival;               
                $product->category_id = $request->category_id;
                $product->slug = $request->slug;

                $product->save();

                //removing images if images needs to remove

                $image_ids = [];
                $removed_images = explode(",", $request->removed_images);

                if ($request->image_ids != null) {
                    foreach ($request->image_ids as $id) {
                        if (!in_array($id, $removed_images)) {
                            array_push($image_ids, $id);
                        }
                    }
                }

                ProductImage::destroy($removed_images);
                $imageCount = 0;
                if ($request->image_ids != null) {
                    foreach ($request->image_ids as $image_id) {
                        $image_name = "image_upload_" . $image_id;

                        if ($request->$image_name != null) {
                            $image = ProductImage::find($image_id);

                            if ($image != null) {
                                $destinationPath =
                                    "images/uploads/product/" .
                                    date("Y") .
                                    "/" .
                                    date("m") .
                                    "/"; // upload path
                                $ImageName =
                                    date("YmdHis") .$imageCount.
                                    $request->$image_name->getClientOriginalName() .
                                    "." .
                                    $request->$image_name->getClientOriginalExtension();
                                $request->$image_name->move(
                                    $destinationPath,
                                    $ImageName
                                );
                                $image->src = $destinationPath . $ImageName;
                                $image->save();
                            }
                        }

                        $imageCount++;
                    }
                }


                if ($request->src != null) {
                    foreach ($request->src as $file) {
                        $destinationPath =
                            "images/uploads/product/" .
                            date("Y") .
                            "/" .
                            date("m") .
                            "/"; // upload path
                        $ImageName =
                            date("YmdHis").$imageCount . $file->getClientOriginalName();
                        $file->move($destinationPath, $ImageName);

                        DB::table("product_images")->insert([
                            "product_id" => $product->id,
                            "src" => $destinationPath . $ImageName,
                        ]);

                        $imageCount++;
                    }
                }

                if ($request->featured_image != null) {
                    $destinationPath =
                        "images/uploads/product/" .
                        date("Y") .
                        "/" .
                        date("m") .
                        "/"; // upload path
                    $ImageName =
                        date("YmdHis") .$imageCount.
                        $request->featured_image->getClientOriginalName();
    
                    $request->featured_image->move($destinationPath, $ImageName);
    
                    $featuredImage = ProductImage::where("product_id", $product->id)
                        ->where("is_featured", 1)
                        ->where("image_type", 0)
                        ->get()
                        ->first();
    
                    if ($featuredImage != null) {
                        $featuredImage->src = $destinationPath . $ImageName;
                        $featuredImage->save();
                    } else {
                        DB::table("product_images")->insert([
                            "product_id" => $product->id,
                            "src" => $destinationPath . $ImageName,
                            "is_featured" => 1,
                        ]);
                    }
                }

                //export images adding
                $imageCount = 0;

                if ($request->export_images != null) {
                    foreach ($request->export_images as $file) {
                        $destinationPath =
                            "images/uploads/product/" .
                            date("Y") .
                            "/" .
                            date("m") .
                            "/"; // upload path
                        $ImageName =
                            'export_'.date("YmdHis").$imageCount. $file->getClientOriginalName();
                        $file->move($destinationPath, $ImageName);
    
                        DB::table("product_images")->insert([
                            "product_id" => $product->id,
                            "src" => $destinationPath . $ImageName,
                            "image_type" => 1
                        ]);
    
                        $imageCount++;
                    }
                }
    
                if ($request->export_featured_image != null) {
                    $destinationPath ="images/uploads/product/" .date("Y") ."/" .date("m") . "/"; // upload path
                    
    
                    $ImageName = 'export_'.date("YmdHis") .$imageCount.$request->export_featured_image->getClientOriginalName();
    
                    $request->export_featured_image->move($destinationPath, $ImageName);
    
                    $featuredImage = ProductImage::where("product_id", $product->id)
                        ->where("is_featured", 1)
                        ->where("image_type", 1)
                        ->get()
                        ->first();
    
                    if ($featuredImage != null) {
                        $featuredImage->src = $destinationPath . $ImageName;
                        $featuredImage->image_type = 1;
                        $featuredImage->save();
                    } else {
                        DB::table("product_images")->insert([
                            "product_id" => $product->id,
                            "src" => $destinationPath . $ImageName,
                            "is_featured" => 1,
                            "image_type" => 1
                        ]);
                    }
                }
    

                //assigning countries to the product
                if($request->countries != null){

                    $product->countries()->detach();
                    $product->countries()->attach($request->countries);
                }


                if (Auth::user()) {
                    //saving user log
                    UserLog::saveUserLog(
                        Auth::user()->id,
                        "Single product updated",
                        "Single product " . $request->product_name . " updated"
                    );
                }

                return back()->with(
                    "success",
                    "Product updated successfully !"
                );
            } else {
                return back()->with("error", "Could not find the Product");
            }
        } else {
            return redirect("admin/not_allowed");
        }
    }

    public function activateDeactivateProduct($id)
    {
        $hasPermission = Auth::user()->hasPermission("edit_products");

        if ($hasPermission) {
            try {
                $product = Product::where("id", $id)
                    ->get()
                    ->first();
                $msg = "";

                if ($product->status == 0) {
                    $product->status = 1;
                    $msg = "Product activated successfully !";
                } else {
                    $product->status = 0;
                    $msg = "Product deactivated successfully !";
                }

                $product->save();

                if (Auth::user()) {
                    //saving user log
                    UserLog::saveUserLog(
                        Auth::user()->id,
                        "Product status changed",
                        "Product " .
                            $product->product_name .
                            " status changed to " .
                            $product->status
                    );
                }

                return back()->with("success", $msg);
            } catch (\Exception $exception) {
                $error = $exception->getMessage();
                return view("admin.errors.error_500", compact("error"));
            }
        } else {
            return redirect("admin/not_allowed");
        }
    }

    public function remove($id)
    {
        $hasPermission = Auth::user()->hasPermission("delete_products");

        if ($hasPermission) {
            try {
                $product = Product::where("id", $id)
                    ->get()
                    ->first();
                if (Auth::user()) {
                    //saving user log
                    UserLog::saveUserLog(
                        Auth::user()->id,
                        "Product removed",
                        "Product " . $product->product_name . " removed"
                    );
                }

                
                ProductImage::where("product_id", $id)->delete();
                Variant::where("product_id", $id)->delete();
                ProductInventory::where("product_id", $id)->delete();
                ProductInventoryHistory::where("product_id", $id)->delete();
                Product::where("id", $id)->delete();
                //ProductInventory::where("product_id", $id)->delete();

                return back()->with(
                    "success",
                    "Product removed successfully !"
                );
            } catch (\Exception $exception) {
                $error = $exception->getMessage();
                return view("admin.errors.error_500", compact("error"));
            }
        } else {
            return redirect("admin/not_allowed");
        }
    }

    public function removeProductImage($id)
    {
        $hasPermission = Auth::user()->hasPermission("delete_products");

        if ($hasPermission) {
            try {
                ProductImage::where("id", $id)->delete();

                return back()->with(
                    "success",
                    "Product image removed successfully !"
                );
            } catch (\Exception $exception) {
                $error = $exception->getMessage();
                return view("admin.errors.error_500", compact("error"));
            }
        } else {
            return redirect("admin/not_allowed");
        }
    }

    public function addRelatedProducts(Request $request)
    {
        $product = Product::where("id", $request->product_id)
            ->get()
            ->first();

        if ($product != null) {
            $product->linkedProducts()->detach();
            $product->linkedProducts()->attach($request->related_product_ids);

            $product->save();

            if (Auth::user()) {
                //saving user log
                UserLog::saveUserLog(
                    Auth::user()->id,
                    "Product updated with related products",
                    "Product " .
                        $product->product_name .
                        " updated with related products"
                );
            }

            return back()->with(
                "success",
                "Related products updated successfully !"
            );
        } else {
            return back()->with("error", "Product not found.");
        }
    }

    public function getProductForId($id)
    {
        $product = Product::with("images")
            ->where("id", $id)
            ->get()
            ->first();

        return response()->json([
            "status" => true,
            "payload" => $product,
            "image_url" => asset($product->images[0]->src),
        ]);
    }

    public function checkproductName(Request $request)
    {
        $name = $request->productName;

        $product = Product::where("product_name", $name)
            ->get()
            ->first();

        if ($product == null) {
            return [
                "status" => true,
                "message" => "Can use the name",
            ];
        } else {
            if ($product->id == $request->productId) {
                return [
                    "status" => true,
                    "message" => "Can use the name",
                ];
            } else {
                return [
                    "status" => false,
                    "message" =>
                        "Product exists for the name. Please use a different name",
                    "product" => $product,
                ];
            }
        }
    }

    public function getReviewsForProduct($id, Request $request)
    {
        $searchKey = $request->searchKey;

        $product = Product::with("reviews")
            ->where("id", $id)
            ->get()
            ->first();

        $reviews = $product->reviews()->paginate(env("RECORDS_PER_PAGE"));

        return view(
            "admin.product.product_reviews",
            compact("product", "searchKey", "reviews")
        );
    }

    public function reviewStatusChange($id)
    {
        $hasPermission = Auth::user()->hasPermission("change_review_status");

        if ($hasPermission) {
            try {
                $review = Review::where("id", $id)
                    ->get()
                    ->first();
                $msg = "";

                if ($review->review_status == 0) {
                    $review->review_status = 1;
                    $msg =
                        "Review status changed to show status successfully !";
                } else {
                    $review->review_status = 0;
                    $msg =
                        "Review status changed to hidden status successfully !";
                }

                $review->save();

                if (Auth::user()) {
                    //saving user log
                    UserLog::saveUserLog(
                        Auth::user()->id,
                        "Review status changed",
                        "Review " .
                            $review->id .
                            " status changed to " .
                            $review->review_status
                    );
                }

                return back()->with("success", $msg);
            } catch (\Exception $exception) {
                $error = $exception->getMessage();
                return view("admin.errors.error_500", compact("error"));
            }
        } else {
            return redirect("admin/not_allowed");
        }
    }

 
    public function getbrand(Request $request)
    {
        $searchKey = $request->searchKey;
        $brand_details = Brand::getBrandsForFilters($searchKey);
        
        return view("admin.brands.all_brands", compact("brand_details","searchKey"));
    }

    public function addBrand(Request $request)
    {
        $request->validate([
            "brand_name" => "required",
            "brand_logo" =>
                "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);

        $imageUrl = null;

        if ($request->brand_logo != null) {
            $destinationPath = "images/uploads/brands/"; // upload path
            $ImageName =
                date("YmdHis") . $request->brand_logo->getClientOriginalName();
            $request->brand_logo->move($destinationPath, $ImageName);

            $imageUrl = $destinationPath . $ImageName;
        }

        $brand = new Brand();

        $brand->brand_name = $request->brand_name;
        $brand->brand_logo = $imageUrl;
        $brand->brand_status = 1;

        Brand::create($brand->toArray());

        return back()->with("success", "Brand created successfully.");
    }

    public function updateBrand(Request $request)
    {
        $brand = Brand::where("id", $request->brand_id)
            ->get()
            ->first();

        $request->validate([
            "brand_name" => "required",
            "brand_logo" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);

       
        $imageUrl = null;

        if ($request->brand_logo != null) {
            $destinationPath = "images/uploads/brands/"; // upload path
            $ImageName = date("YmdHis") . $request->brand_logo->getClientOriginalName();
            $request->brand_logo->move($destinationPath, $ImageName);

            $imageUrl = $destinationPath . $ImageName;
        }

        $brand->brand_name = $request->brand_name;
        $brand->brand_logo = $imageUrl;
        $brand->brand_status = 1;
        $brand->save();
        

        return back()->with("success", "Brand Update successfully.");
    }

    public function removeBrand(Request $request)
    {
        $brand = Brand::where('id', $request->brand_id)->get()->first();

        if ($brand != null)
        {
            $brand = Brand::where('id', $request->brand_id)->delete();
            return back()->with('success', 'Site Brand removed successfully !');
        }
        else
        {
            return back()->with('error', 'Could not find the site Brand');
        }
    }

    public function getCountryForId($id){

        try{

            $country = Country::where('id',$id)->get()->first();

            if($country != null){

                return response()->json([
                    'status' => true,
                    'payload' => $country,
                    'message' => 'success'
                ]);
            }else{

                return response()->json([
                    'status' => false,
                    'payload' => null,
                    'message' => 'Country not found'
                ]);
            }

        }catch(\Exception $exception){

            return response()->json([
                'status' => false,
                'payload' => null,
                'message' => $exception->getMessage()
            ]);
        }
    }

       
}
