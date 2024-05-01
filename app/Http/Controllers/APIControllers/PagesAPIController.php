<?php

namespace App\Http\Controllers\APIControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\APIModels\Page;
use Log;

class PagesAPIController extends Controller
{
    public function getAllVisiblePages(Request $request){

        Log::channel('pages_api_log')->info("[All Visible Pages API] ====> Received request to fetch all visible pages - request data == ".json_encode($request->all()));

        $response = response()->json([]);

        try{

            $pages = Page::getAllVisiblePages();

            $response = response()->json([
                'status' => 'success',
                'message' => 'all visible pages',
                'payload' => $pages
            ]);

        }catch(\Exception $exception){

            Log::channel('pages_api_log')->info("[All Visible Pages API] ====>  Error occured when fetching all visible pages == ".$exception->getMessage().' - line - '.$exception->getLine());

            $response = response()->json([
                'status' => 'failed',
                'message' => 'error occured',
                'payload' => $exception->getMessage().' - line - '.$exception->getLine()
            ]);

        }

        Log::channel('posts_api_log')->info("[All Visible Pages API] ====>  Returning response == ".json_encode($response));

        return $response;

    }

    public function getAllPages(Request $request){


        Log::channel('pages_api_log')->info("[All Pages API] ====> Received request to fetch all pages - request data == ".json_encode($request->all()));

        $response = response()->json([]);

        try{

            $pages = Page::getAllPages();

            $response = response()->json([
                'status' => 'success',
                'message' => 'all available pages',
                'payload' => $pages
            ]);

        }catch(\Exception $exception){

            Log::channel('pages_api_log')->info("[All Pages API] ====>  Error occured when fetching all pages == ".$exception->getMessage().' - line - '.$exception->getLine());

            $response = response()->json([
                'status' => 'failed',
                'message' => 'error occured',
                'payload' => $exception->getMessage().' - line - '.$exception->getLine()
            ]);

        }

        Log::channel('posts_api_log')->info("[All Pages API] ====>  Returning response == ".json_encode($response));

        return $response;

    }

    public function getPageForSlug($slug){


        Log::channel('pages_api_log')->info("[Get Page API] ====> Received request to fetch page for slug - request slug == ".$slug);

        $response = response()->json([]);

        try{

            $page = Page::getAllPageForSlug($slug);

            if($page){

                $response = response()->json([
                    'status' => 'success',
                    'message' => 'page for slug - '.$slug,
                    'payload' => $page
                ]);

            }else{

                $response = response()->json([
                    'status' => 'failed',
                    'message' => 'could not find the page for slug - '.$slug,
                    'payload' => null
                ]);

            }

            

        }catch(\Exception $exception){

            Log::channel('pages_api_log')->info("[Get Page API] ====>  Error occured when fetching page for slug == ".$exception->getMessage().' - line - '.$exception->getLine());

            $response = response()->json([
                'status' => 'failed',
                'message' => 'error occured',
                'payload' => $exception->getMessage().' - line - '.$exception->getLine()
            ]);

        }

        Log::channel('posts_api_log')->info("[Get Page API] ====>  Returning response == ".json_encode($response));

        return $response;

    }
}
