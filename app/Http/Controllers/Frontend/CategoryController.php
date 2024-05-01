<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\ChildCategory;

class CategoryController extends Controller
{
    public function getProductsForCategory($slug){

        $categories = Category::where('type',Category::PRODUCT)->get();

        $category = Category::with('hampers')->where('slug',$slug)->get()->first();

        return view('frontend.categories.shop_category',compact('category','categories'));
    }

    public function singlePageCategories(){

        $categories = ChildCategory::where('type',Category::PRODUCT)->where('status',1)->get();
        return view('frontend.categories.view_category',compact('categories'));
    }
}
