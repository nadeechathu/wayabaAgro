<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\UserLog;
use Auth;

class AdvertisementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){

        $hasPermission = Auth::user()->hasPermission('view_advertisements');

        if($hasPermission){

            $searchKey = $request->searchKey;

            $advertisements = Advertisement::getAdvertisementsForFilters($searchKey);

            return view('admin.advertisements.all_advertisements',compact('advertisements','searchKey'));

        }else{
            return redirect('admin/not_allowed');
        }


    }

    public function addAdvertisement(Request $request){

        try{

            $hasPermission = Auth::user()->hasPermission('add_advertisements');

            if($hasPermission){

                $advertisement = new Advertisement;

                $advertisement->title = $request->title;
                $advertisement->description = $request->description;

                if($request->image != null){

                    $destinationPath = 'images/uploads/advertisements/' . date('Y') . '/' . date('m') . '/'; // upload path
                    $ImageName = date('YmdHis').$request->image->getClientOriginalName();
                    $request->image->move($destinationPath, $ImageName);

                    $advertisement->image_src = $destinationPath.$ImageName;
                }

                Advertisement::create($advertisement->toArray());

                if(Auth::user()){
                    //saving user log
                    UserLog::saveUserLog(Auth::user()->id, "New advertisement added", "New advertisement ".$advertisement->title." added");
                }

                return back()->with('success','Advertisement created successfully !');

            }else{
                return redirect('admin/not_allowed');
            }


        }catch(\Exception $exception){

            $error = $exception->getMessage().' - line - '.$exception->getLine();
            return view('frontend.errors.error_500',compact('error'));

        }

    }

    public function editAdvertisement(Request $request){

        try{

            $hasPermission = Auth::user()->hasPermission('edit_advertisements');

            if($hasPermission){

                $advertisement = Advertisement::where('id',$request->advertisement_id)->get()->first();

                if($advertisement != null){

                    $advertisement->title = $request->title;
                    $advertisement->description = $request->description;

                    if($request->image != null){

                        $destinationPath = 'images/uploads/advertisements/' . date('Y') . '/' . date('m') . '/'; // upload path
                        $ImageName = date('YmdHis').$request->image->getClientOriginalName();
                        $request->image->move($destinationPath, $ImageName);

                        $advertisement->image_src = $destinationPath.$ImageName;
                    }

                    $advertisement->save();

                    if(Auth::user()){
                        //saving user log
                        UserLog::saveUserLog(Auth::user()->id, "New advertisement updated","Advertisement ".$advertisement->title." updated");
                    }

                    return back()->with('success','Advertisement updated successfully !');

                }else{
                    return back()->with('error','Could not find the advertisement.');
                }



            }else{
                return redirect('admin/not_allowed');
            }


        }catch(\Exception $exception){

            $error = $exception->getMessage().' - line - '.$exception->getLine();
            return view('frontend.errors.error_500',compact('error'));

        }

    }

    public function removeAdvertisement($id){

        try{

            $hasPermission = Auth::user()->hasPermission('delete_advertisements');

            if($hasPermission){

                $advertisement = Advertisement::where('id',$id)->get()->first();

                if(Auth::user()){
                    //saving user log
                    UserLog::saveUserLog(Auth::user()->id, "Advertisement removed","Advertisement ".$advertisement->title." removed");
                }

                $advertisement = Advertisement::where('id',$id)->delete();

                return back()->with('success','Advertisement removed successfully !');


            }else{
                return redirect('admin/not_allowed');
            }


        }catch(\Exception $exception){

            $error = $exception->getMessage().' - line - '.$exception->getLine();
            return view('frontend.errors.error_500',compact('error'));

        }

    }

    public function changeAdvertisementStatus($id){

        try{

            $hasPermission = Auth::user()->hasPermission('edit_advertisements');

            if($hasPermission){

                $advertisement = Advertisement::where('id',$id)->get()->first();

                $msg = null;

                if($advertisement != null){

                    if($advertisement->status == 0){
                        $advertisement->status = 1;
                        $msg = "Advertisement activated successfully ";
                    }else{
                        $msg = "Advertisement deactivated successfully ";
                        $advertisement->status = 0;
                    }

                    if(Auth::user()){
                        //saving user log
                        UserLog::saveUserLog(Auth::user()->id, $msg,"Advertisement ".$advertisement->title." status changed");
                    }

                    $advertisement->save();

                    return back()->with('success',$msg);

                }else{

                    return back()->with('error','Could not find the advertisement.');
                }


            }else{
                return redirect('admin/not_allowed');
            }


        }catch(\Exception $exception){

            $error = $exception->getMessage().' - line - '.$exception->getLine();
            return view('frontend.errors.error_500',compact('error'));

    }
}
}
