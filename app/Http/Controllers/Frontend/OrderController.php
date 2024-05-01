<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Customer;
use App\Models\Address;
use App\Models\Hamper;
use App\Models\UserLog;
use App\Models\EmailSender;
use Session;
use Auth;


class OrderController extends Controller
{
    public function placeOrder(Request $request){
        $billingAddress = Session::get('billingAddress');
        $shippingAddress =  Session::get('shippingAddress');
        $cart = session()->has('cart') ? session()->get('cart') : [];


        $order = Order::calculateCartTotal($cart);



        Session::put('cartValues',$order);

        //for coupons
        $response = Order::calculateCouponDiscounts(Session::get('couponName'));

        $orderItems = $order['cartItems'];

        $orderData = array(
            "order" => Session::get('cartValues'),
            "shippingAddress" => $shippingAddress,
            "billingAddress" => $billingAddress,
            "lineItems" => $orderItems,
            "orderNotes" => $request->order_notes
        );



        try {

            //saving order to text file in storage/app/
            $fileName = date('Y_m_d_H_i_s').'.txt';
            Storage::disk('local')->put($fileName, json_encode($orderData));

            $response = Order::placeOrder(new Request($orderData));

            if($response['status']){
                Session::forget('billingAddress');
                Session::forget('shippingAddress');
                Session::forget('cart');
                Session::forget('couponName');

                if(Auth::user()){
                    //saving user log
                    UserLog::saveUserLog(Auth::user()->id, "Order placed", "Placed customer order");
                } 
                
                return $response;

            }else{
                $error = $response['message'];
                return $response;
                //return view('admin.errors.error_500',compact('error'));
            }

        }catch(\Exception $exception){

           
            $error = $exception->getMessage().' - line - '.$exception->getLine();
            return array(
                'status' => false,
                'message' => $error,
                'url' => null
            );
            //return view('admin.errors.error_500',compact('error'));
        }


    }





    public function getOrderTracking($id){


        $orderDetails= Order::with('orderItems','customer','billingAddress','shippingAddress','orderStatusHistories')->where('tracking_number',$id)->first();
        
        if( $orderDetails != null){
         
            return view('frontend.orders.order_tracking',compact('orderDetails'));
        }
        else{
            // $error = $exception->getMessage() . ' - line - ' . $exception->getLine();
            return view('frontend.errors.error_404');
        }  

        
    }





}
