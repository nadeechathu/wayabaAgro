<?php

namespace App\Http\Controllers\APIControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\APIModels\GeneralSetting;
use App\Models\APIModels\Image;
use App\Models\APIModels\Page;
use App\Models\APIModels\Category;
use App\Models\APIModels\SiteSetting;
use App\Models\APIModels\UserSubscription;
use Log;

class HomeAPIController extends Controller
{
    public function getAllHomeContent(){

        Log::channel('pages_api_log')->info("[Home Content API] ====> Received request to fetch all home content data");

        $response = response()->json([]);

        try{

            $sliderImages = Image::getSliderImages();
            $siteName = GeneralSetting::getSettingByKey('site_name');
            $siteDescription = GeneralSetting::getSettingByKey('site_description');
            $siteLogo = GeneralSetting::getSettingByKey('site_logo');
            $analytics = GeneralSetting::getSettingByKey('analytics');

            $siteSettings = SiteSetting::all()->keyBy('section');

            $pages = Page::getAllVisiblePages();
            $categories = Category::with('subCategories')->where('type',0)->get();

            $content = [];

            $content['sliderImages'] = $sliderImages;
            $content['siteName'] = $siteName;
            $content['siteDescription'] = $siteDescription;
            $content['siteLogo'] = $siteLogo;
            $content['pages'] = $pages;
            $content['categories'] = $categories;
            $content['analytics'] = $analytics;
            $content['siteSettings'] = $siteSettings;
            

            $response = response()->json([
                'status' => 'success',
                'message' => 'home content',
                'payload' => $content
            ]);

        }catch(\Exception $exception){

            Log::channel('pages_api_log')->info("[Home Content API] ====> Error occured when fetching all home content data - error == ".$exception->getMessage().' - line - '.$exception->getLine());

            $response = response()->json([
                'status' => 'failed',
                'message' => 'error occured',
                'payload' => $exception->getMessage().' - line - '.$exception->getLine()
            ]);

        }

        Log::channel('pages_api_log')->info("[Home Content API] ====> Returning response == ".json_encode($response));


        return $response;
    }

    public function subscribe(Request $request){

        $response = response()->json([]);

        try{

            $subscription = UserSubscription::where('email',$request->email)->get()->first();

            if($subscription == null){

                $subscription = new UserSubscription;

                $subscription->email = $request->email;
    
                $subscription = UserSubscription::create($subscription->toArray());
    
                
                $response = response()->json([
                    'status' => 'success',
                    'message' => 'subscription success',
                    'payload' => $subscription
                ]);

            }else{

                $response = response()->json([
                    'status' => 'success',
                    'message' => 'already subscribed',
                    'payload' => $subscription
                ]);
            }
           

        }catch(\Exception $exception){


            $response = response()->json([
                'status' => 'failed',
                'message' => 'error occured',
                'payload' => $exception->getMessage().' - line - '.$exception->getLine()
            ]);

        }


        return $response;

    }
}
