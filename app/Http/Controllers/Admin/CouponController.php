<?php

namespace App\Http\Controllers\Admin;
use App\Models\Coupon;
use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class CouponController extends Controller
{
   

    public function index(Request $request){

        $hasPermission = Auth::user()->hasPermission('view_coupons');

        if($hasPermission){

            $searchKey = $request->searchKey;
            $coupon_details = Coupon::getCouponForFilters($searchKey);


            return view('admin.marketing.all_coupons',compact('coupon_details','searchKey'));

        }else{

            return redirect('admin/not_allowed');

       }

    }


    public function addcoupon(Request $request)
    {

        $hasPermission = Auth::user()->hasPermission('add_coupons');

        if($hasPermission){

            try{

                $newCoupon= new Permission();

                $newCoupon->status = $request->status;
                $newCoupon->coupon_type = $request->coupon_type;
                $newCoupon->coupon_value = $request->coupon_value;
                $newCoupon->coupon_name = $request->coupon_name;
                $newCoupon->coupon_code = 0;
                $newCoupon->expiry_date = $request->expiry_date;

                Coupon::create($newCoupon->toArray());

                return back()->with('success','Coupon created successfully !');

            }catch(\Exception $exception){

                return back()->with('error','Error occured - '.$exception->getMessage());
            }

        }else{

             return redirect('admin/not_allowed');

        }

    }




    public function updateCoupon(Request $request)
    {

        $updateCoupon = Coupon::find($request->coupon_id);

        if ($updateCoupon != null)
        {

            $updateCoupon->status = $request->status;
            $updateCoupon->coupon_type = $request->coupon_type;
            $updateCoupon->coupon_value = $request->coupon_value;
            $updateCoupon->coupon_name = $request->coupon_name;
            $updateCoupon->expiry_date = $request->expiry_date;

            $updateCoupon->save();

            return back()->with('success', 'Coupon updated successfully !');
        }
        else
        {
            return back()
                ->with('error', 'Could not find the Coupon');
        }
    }


    public function removeCoupon(Request $request)
    {
        $coupon = Coupon::find($request->coupon_id)->get()->first();
        
        if ($coupon != null)
        {
            $coupon = Coupon::where('id', $request->coupon_id)->delete();

            return back()->with('success', 'Coupon removed successfully !');
        }
        else
        {
            return back()
                ->with('error', 'Could not find the site Coupon');
        }
    }





    public function checkcouponName(Request $request){

        $name = $request->couponName;
        $id = $request->couponId;
        $coupon = Coupon::where('coupon_name',$name)->get()->first();


        if($coupon == null){

            return array(
                'status' => true,
                'message' => 'Can use the name'
            );

        }else{

            if($coupon->id == $id){
                return array(
                    'status' => true,
                    'message' => 'Can use the name'
                );
            }else{

                return array(
                    'status' => false,
                    'message' => 'Coupon exists for the name. Please use a different name',
                    'coupon' => $coupon
                );
            }


        }
    }












}
