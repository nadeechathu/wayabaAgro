<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\User;
use App\Models\UserLog;
use App\Models\Address;
use App\Models\Product;
use App\Models\Zone;
use App\Models\GeneralSetting;
use App\Models\Order;
use App\Models\Country;
use App\Models\CustomerAddress;
use App\Models\Customer;
use App\Models\Wishlist;
use App\Models\Coupon;
use App\Models\Quotation;
use App\Models\QuotationItem;
use App\Models\Variant;
use App\Models\ProductInventory;
use PDF;
use Auth;

class CartController extends Controller
{
    // add to cart
    public function addToCart(Request $request)

    
    {
      
        $product = Product::with('images','promotion')->where('id',$request->product_id)->get()->first();
        $productVariant = Variant::where('product_id',$request->product_id)->where('id',$request->variant_id)->get()->first();
        $productInventory = ProductInventory::where('product_id',$request->product_id)->where('id',$request->variant_id)->get()->first();
   
        $product_price = $productVariant->selling_price;
        $discounted_price = $productVariant->selling_price;
        $msg = '';
     
        //promotions are not applied for bulk orders
        if($productVariant->bulk_quantity != null){
            if($request->quantity >= $productVariant->bulk_quantity){

                $product_price = $productVariant->bulk_price;
                $discounted_price = $productVariant->bulk_price;

            }else{

                if($product->promotion != null){

                    if($product->promotion->discount_type == 0){
                        $discounted_price = $product_price - $product->promotion->discount;
                    }else{
                        $discounted_price = $product_price - ($product_price * $product->promotion->discount / 100);
                    }

                }
            }

        }else{

            if($product->promotion != null){

                if($product->promotion->discount_type == 0){
                    $discounted_price = $product_price - $product->promotion->discount;
                }else{
                    $discounted_price = $product_price - ($product_price * $product->promotion->discount / 100);
                }

            }
            
        }


        $quantity = 1;
        if($request->quantity != null){
            
            if($request->quantity >= $productInventory->master_quantity){

                $quantity = $productInventory->master_quantity;

            }else{

                $quantity = $request->quantity;
            }
        }

        $unit_price = $discounted_price;


        if($productVariant->bulk_quantity != null){

            if($productInventory->master_quantity >= $productVariant->bulk_quantity){

                if($quantity >= $productVariant->bulk_quantity){

                    $unit_price = $productVariant->bulk_price;

                }else{

                    $unit_price = $discounted_price;
                }

            }else{

                $unit_price = $discounted_price;

                
            }

        }else{

            $unit_price = $discounted_price;

            

        }


        $total_price = $unit_price*$quantity;
        $cart = session()->has('cart') ? session()->get('cart') : [];
 
        // $quantity = $request->quantity;

        if (array_key_exists($request->variant_id, $cart)) {

           
            $response = $this->checkProductQuantity(new Request(array('productId' => $request->product_id, 'requestedQty' => $cart[$request->variant_id]['qty'] + $quantity, 'variantId' => $request->variant_id)));
         

            if(!$response['status']){
                $quantity = $response['qty'];
                $msg = $response['message'];
            }else{
                $msg =  $productVariant->variant_name.' Added to cart';
                
            }

            $cart[$request->variant_id]['qty'] =  $cart[$request->variant_id]['qty'] + $quantity;

            if($productVariant->bulk_quantity != null){

                if($productInventory->master_quantity >= $productVariant->bulk_quantity){
    
                    if($cart[$request->variant_id]['qty'] >= $productVariant->bulk_quantity){
    
                        $unit_price = $productVariant->bulk_price;
    
                    }else{
    
                        $unit_price = $discounted_price;
                    }
    
                }else{
    
                    $unit_price = $discounted_price;
    
                    
                }
    
            }else{
    
                $unit_price = $discounted_price;
    
                
    
            }

            $cart[$request->variant_id]['unit_price'] =  $unit_price;
            
            $cart[$request->variant_id]['total_price'] =  $cart[$request->variant_id]['qty'] * $unit_price;
        } else {
            $response = $this->checkProductQuantity(new Request(array('productId' => $request->product_id, 'requestedQty' => $quantity, 'variantId' => $request->variant_id)));

            if(!$response['status']){
                $quantity = $response['qty'];
                $msg = $response['message'];
            }
            else{
                $msg =  $productVariant->variant_name.' added to cart';
                
                if(Auth::user()){
                    //saving user log
                    UserLog::saveUserLog(Auth::user()->id, "Add item to cart", "Added ".$product->product_name.' '.$productVariant->variant_name." to cart");
                }
            }
            $cart[$request->variant_id] = [
                'image' => $product->images[0]->src,
                'product_id' => $request->product_id,
                'variant_id' => $request->variant_id,
                'description' => 'description',
                // 'categories' => $request->product_categories,
                'title' => $product->product_name.' '.$productVariant->variant_name,
                'qty' => $quantity,
                'unit_price' => $unit_price,
                'total_price' => $total_price,
                'product_variant' => $productVariant
            ];
        }

        session(['cart' => $cart]);
        $response = $this->calculateCartTotal($cart);

        Session::put('cartValues',$response);

        //for coupons
        $response = Order::calculateCouponDiscounts(Session::get('couponName'));

        $minicart = view('frontend.cart.minicart')->render();
        
        
        return response(['success' => true, 'msg' => $msg, 'minicart' => $minicart, 'qty' => $cart[$request->variant_id]['qty']]);
    }

    public function checkProductQuantity(Request $request){
       
        $productId = $request->productId;
        $variantId = $request->variantId;
        $quantity = $request->requestedQty;

        $product = Product::where('id',$productId)->get()->first();
        $productVariant = Variant::with('inventory')->where('product_id',$productId)->where('id',$variantId)->get()->first();
     
        $message = null;
        $status = true;

        if($quantity > $productVariant->inventory->master_quantity){
            $quantity = $productVariant->inventory->master_quantity;
            $message = "Available product quantity is ".$productVariant->inventory->master_quantity;
            $status = false;
        }

        return array(
            'status' => $status,
            'message' => $message,
            'qty' => $productVariant->inventory->master_quantity
        );
    }

    public function getVariantDataForId(Request $request){

        $variant = Variant::with('inventory')->where('id',$request->variantId)->get()->first();
        $product = Product::with('promotion')->where('id',$request->productId)->get()->first();

        if($variant != null){

            return array(
                'status' => true,
                'variant' => $variant,
                'product' => $product
            );

        }else{

            return array(
                'status' => false,
                'variant' => null,
                'product' => null
            );
        }
    }

    public function miniCartRemove(Request $request)
    {
        
        $cart = session()->has('cart') ? session()->get('cart') : [];
        
        
        if (array_key_exists($request->item_id, $cart)) {
            if(Auth::user()){
                //saving user log
                UserLog::saveUserLog(Auth::user()->id, "Remove item from cart", "Removed ".$cart[$request->item_id]['title']." from cart");
            } 
            unset($cart[$request->item_id]);
        } 
        session(['cart' => $cart]);
        $response = $this->calculateCartTotal($cart);

        Session::put('cartValues',$response);

        //for coupons
        $response = Order::calculateCouponDiscounts(Session::get('couponName'));
        
        $minicart = view('frontend.cart.minicart')->render();
              
        return response(['success' => true, 'msg' => 'Product removed successfully ', 'minicart' => $minicart]);
    }

    public function cartAddByOne(Request $request)
    {

       
        $msg = '';
        $cart = session()->has('cart') ? session()->get('cart') : [];

        $newQuantity = $cart[$request->item_id]['qty'] + 1;

        $variant = Variant::where('id',$request->item_id)->get()->first();
         
        $product = Product::with('inventory')->where('id',$variant->product_id)->get()->first();
 
     
        $cart[$request->item_id]['alert_msg'] = '';

       

        if($newQuantity > $product->inventory->master_quantity){

            $msg = "Cannot increase quantity. Available product quantity is ".$product->inventory->master_quantity;
            $cart[$request->item_id]['alert_msg'] = $msg;

        }else{

            if (array_key_exists($request->item_id, $cart)) {
                $cart[$request->item_id]['qty'] = $cart[$request->item_id]['qty'] + 1;

                if($cart[$request->item_id]['product_variant']['bulk_quantity'] != null){

                    if( $cart[$request->item_id]['qty'] >= $cart[$request->item_id]['product_variant']['bulk_quantity']){

                        $cart[$request->item_id]['total_price'] =  $cart[$request->item_id]['qty'] * $cart[$request->item_id]['product_variant']['bulk_price'];
                        $cart[$request->item_id]['unit_price'] = $variant->bulk_price;

                    }else{
                        $cart[$request->item_id]['unit_price'] = $variant->selling_price;
                        $cart[$request->item_id]['total_price'] =  $cart[$request->item_id]['qty'] * $cart[$request->item_id]['unit_price'];
                        
                    }

                    
                }else{
                    $cart[$request->item_id]['unit_price'] = $variant->selling_price;
                    $cart[$request->item_id]['total_price'] =  $cart[$request->item_id]['qty'] * $cart[$request->item_id]['unit_price'];
                    
                }
                
            } 

            $msg = 'Product quantity increased by one';
        }

        
        session(['cart' => $cart]);
        $item_total_price = $cart[$request->item_id]['total_price'];
        $subtotal = $cart[$request->item_id]['unit_price']+str_replace(",", "", $request->sub_total) ;
        $subtotal=number_format($subtotal,2);
        

        $response = $this->calculateCartTotal($cart);


        Session::put('cartValues',$response);

        //for coupons
        $response = Order::calculateCouponDiscounts(Session::get('couponName'));

        $minicart = view('frontend.cart.minicart')->render();

        return response(['success' => true, 'msg' => $msg, 'minicart' => $minicart, 'subtotal'=>$subtotal, 'item_total_price' =>$item_total_price , 'qty' => $cart[$request->item_id]['qty']]);
    }

    public function cartRemoveByOne(Request $request)
    {
        $cart = session()->has('cart') ? session()->get('cart') : [];

        
        $cart[$request->item_id]['alert_msg'] = '';

        $qty = 0;
        if (array_key_exists($request->item_id, $cart)) {
            if($cart[$request->item_id]['qty'] == 1){
                // unset($cart[$request->item_id]);
                $qty = 1;
            }else{
                $cart[$request->item_id]['qty'] = $cart[$request->item_id]['qty'] - 1;

                if($cart[$request->item_id]['product_variant']['bulk_quantity'] != null){

                    if($cart[$request->item_id]['qty'] >= $cart[$request->item_id]['product_variant']['bulk_quantity']){

                        $cart[$request->item_id]['total_price'] =  $cart[$request->item_id]['qty'] * $cart[$request->item_id]['product_variant']['bulk_price'];
                        $cart[$request->item_id]['unit_price'] = $cart[$request->item_id]['product_variant']['bulk_price'];

                    }else{
                        $cart[$request->item_id]['unit_price'] = $cart[$request->item_id]['product_variant']['selling_price'];
                        $cart[$request->item_id]['total_price'] =  $cart[$request->item_id]['qty'] * $cart[$request->item_id]['unit_price'];
                    }

                }else{
                    $cart[$request->item_id]['unit_price'] = $cart[$request->item_id]['product_variant']['selling_price'];
                    $cart[$request->item_id]['total_price'] =  $cart[$request->item_id]['qty'] * $cart[$request->item_id]['unit_price'];
                }

                
                $qty = $cart[$request->item_id]['qty'];
            }
            
        } 
        session(['cart' => $cart]);
        $item_total_price = $cart[$request->item_id]['total_price'];
        $subtotal = str_replace(",", "", $request->sub_total) - $cart[$request->item_id]['unit_price'];
        $subtotal=number_format($subtotal,2);
        
        $response = $this->calculateCartTotal($cart);

        Session::put('cartValues',$response);

        //for coupons
        $response = Order::calculateCouponDiscounts(Session::get('couponName'));

        $minicart = view('frontend.cart.minicart')->render();

        return response(['success' => true, 'msg' => 'Product quantity decreased by one', 'minicart' => $minicart, 'subtotal'=>$subtotal, 'item_total_price'=>$item_total_price ,'qty' => $qty]);
    }

    public function proceedToCheckout(Request $request){
        
        Session::put('cart_final_total', $request->cart_final_total);
    }

    public function calculateCartTotal($cart){  

        return Order::calculateCartTotal($cart);
    }



    public function cart(){
        
      
        Session::forget('shippingAddress');
        Session::forget('billingAddress');
        $cart = session()->has('cart') ? session()->get('cart') : [];
        $response = $this->calculateCartTotal($cart);

        Session::put('cartValues',$response);

        $response = Order::calculateCouponDiscounts(Session::get('couponName'));
     
        $fromCart = 1;
     
        return view('frontend.cart.cart',compact('cart','fromCart'));
    }

    public function checkout(){
        $cart = session()->has('cart') ? session()->get('cart') : [];
        $zones = Zone::all();

        if(Auth::user()){
            
            if(Auth::user()){
                //saving user log
                UserLog::saveUserLog(Auth::user()->id, "Proceed to checkout", "Proceeded to cart checkout");
            } 
            $user_id = Auth::user()->id;
            $customer =Customer::where('user_id',$user_id)->get()->first();
            $cart_total = Session::get('cart_final_total');
            $billing_address =  CustomerAddress::where('customer_id',$customer->id)->where('type',0)->where('active_status',1)->get()->first();
            $shipping_address =  CustomerAddress::where('customer_id',$customer->id)->where('type',1)->where('active_status',1)->get()->first();

            $billAddress = null;
            $shipAddress = null;

            if($billing_address != null){

                $billAddress = array(
                    'firstName' => $billing_address->first_name,
                    'lastName' => $billing_address->last_name,
                    'email' => $billing_address->email,
                    'company' => $billing_address->company,
                    'addressLine1' => $billing_address->address_line1,
                    'addressLine2' => $billing_address->address_line2,
                    'city' => $billing_address->city,
                    'zipCode' => $billing_address->zip,
                    'country' => $billing_address->country,
                    'phone' => $billing_address->phone,
                    'id' => $billing_address->id,
                    'state' => $billing_address->state
                );

            }

            if($shipping_address != null){

                $shipAddress = array(
                    'firstName' => $shipping_address->first_name,
                    'lastName' => $shipping_address->last_name,
                    'email' => $shipping_address->email,
                    'company' => $shipping_address->company,
                    'addressLine1' => $shipping_address->address_line1,
                    'addressLine2' => $shipping_address->address_line2,
                    'city' => $shipping_address->city,
                    'zipCode' => $shipping_address->zip,
                    'country' => $shipping_address->country,
                    'phone' => $shipping_address->phone,
                    'id' => $shipping_address->id,
                    'state' => $shipping_address->state
                );
            }
            

            Session::put('shippingAddress',$shipping_address);
            Session::put('billingAddress',$billing_address);

            $billing_address = $billAddress;
            $shipping_address = $shipAddress;

            $countries = Country::where('status',1)->get();
            
            return view('frontend.cart.checkout',compact('billing_address','cart_total','shipping_address','cart','zones','countries'));
        }else{


            $billing_address = null;
            $shipping_address = null;

            if(Session::get('billingAddress') != null){
                $billing_address = Session::get('billingAddress');
            }

            if(Session::get('shippingAddress') != null){
                $shipping_address = Session::get('shippingAddress');
            }
            
            Session::put('shippingAddress',$shipping_address);
            Session::put('billingAddress',$billing_address);
           
            $cart_total = Session::get('cart_final_total');

            $cart_total = 0.00;

            foreach($cart as $cart_item){
                $cart_total = $cart_total + $cart_item['total_price'];
            }

            $cart_total = number_format($cart_total,2);
            Session::put('cart_final_total',$cart_total);

            $countries = Country::where('status',1)->get();
           
            return view('frontend.cart.checkout',compact('billing_address','cart_total','shipping_address','cart','zones','countries'));
        }
    }

    
    // add to cart
    public function addCheckoutAddresses(Request $request)
    {  

        $postFix = 'Bill';

        if($request->type == 'shipping'){
            $postFix = 'Ship';
        }

        $this->validate($request, [
            'firstName'=>'required',
            'lastName'=>'required',
            'email'=>'required','email',
            'company'=>'required',
            'addressLine1'=>'required',
            'addressLine2'=>'required',
            'city'=>'required',
            'country'=>'required',
            'phone'=>'required',
            'zipCode'.$postFix=>'required',
            'state' => 'required'
        ]);
               


        $phone = str_replace(' ','',$request->phone);
        
        $zones = Zone::all();

        $shipping_address = Session::get('shippingAddress');
        $billing_address = Session::get('billingAddress');
        
        $cart = session()->has('cart') ? session()->get('cart') : [];
        if(Auth::user()){
            $user_id = Auth::user()->id;
            // $billing_address =  Address::select('*')->where('type',1)->find($user_id);
            // $shipping_address =  Address::select('*')->where('user_id',$user_id)->where('type',0)->first();
            
        }
        
        $cart_total = Session::get('cart_final_total');
        $address = $request->all();
        $country = "Sri Lanka";
        $address['phone'] = $phone;
        
        if($request->type == 'shipping'){

            //shipping address
            $address['zipCode'] = $address['zipCodeShip'];
            Session::put('shippingAddress',$address);

            $shipping_address = $address;

            $response = $this->calculateCartTotal($cart);

            Session::put('cartValues',$response);

            

        }else if($request->type == 'billing'){

            //billing address
            $address['zipCode'] = $address['zipCodeBill'];
            Session::put('billingAddress',$address);

            if(isset($request->use_as_shipping)){
                Session::put('shippingAddress',$address);
                $shipping_address = $address;

                $response = $this->calculateCartTotal($cart);

                Session::put('cartValues',$response);
            }else{
                Session::put('shippingAddress',null);
                $shipping_address = null;
            }

            $billing_address = $address;

        }
        // dd(Session::get('billingAddress'));
        $type= $request->type;
        $shippingAddressEnable = $request->use_as_shipping;

        
        //for coupons
        $response = Order::calculateCouponDiscounts(Session::get('couponName'));


        if(Auth::user()){
            $addressType = "billing";
            if($type == "shipping"){
                $addressType = "shipping";
            }
            //saving user log
            UserLog::saveUserLog(Auth::user()->id, "Checkout ".$addressType." address added", $type == 0 ? "billing" : "shipping"." address updated");
        } 

        $countries = Country::where('status',1)->get();
        
        return view('frontend.cart.checkout',compact('type','address','billing_address','shipping_address','cart_total','cart','shippingAddressEnable','zones','countries'));



    }

    public function addToWishlist(Request $request){

        try{

            $customer = Customer::where('user_id',Auth::user()->id)->get()->first();

            if($customer != null){

                $wishlistItem = Wishlist::where('customer_id',$customer->id)
                ->where('product_id',$request->product_id)->get()->first();

                if($wishlistItem != null){

                    return array(
                        'status' => true,
                        'message' => 'This product is already available in your wishlist.'
                    );


                }else{
                    $wishlistItem = new Wishlist;
                    
                    $wishlistItem->customer_id = $customer->id;
                    $wishlistItem->product_id = $request->product_id;

                    Wishlist::create($wishlistItem->toArray());

                    
                    $product = Product::where('id',$request->product_id)->get()->first();
                    if(Auth::user()){
                        //saving user log
                        UserLog::saveUserLog(Auth::user()->id, "Added item to wishlist", "Added ".$product->product_name." to wishlist");
                    } 
                    return array(
                        'status' => true,
                        'message' => 'Product added to your wishlist.'
                    );
                }

               

            }else{
                
                return array(
                    'status' => false,
                    'message' => 'Could not find the customer.'
                );
            }

        }catch(\Exception $exception){

            return array(
                'status' => false,
                'message' => $exception->getMessage()
            );
        }
    }

    public function removeFromWishlist(Request $request){

        try{

            $customer = Customer::where('user_id',Auth::user()->id)->get()->first();
            
            if($customer != null){
                
                Wishlist::where('customer_id',$customer->id)->where('product_id',$request->product_id)->delete();
                 
                $product = Product::where('id',$request->product_id)->get()->first();
                if(Auth::user()){
                    //saving user log
                    UserLog::saveUserLog(Auth::user()->id, "Removed item from wishlist", "Removed ".$product->product_name." from wishlist");
                } 

                return array(
                    'status' => true,
                    'message' => 'Product removed from your wishlist.'
                );

                

            }else{
                 
                return array(
                    'status' => false,
                    'message' => 'Could not find the customer.'
                );
            }

        }catch(\Exception $exception){

            return array(
                'status' => false,
                'message' => $exception->getMessage()
            );
        }

    }

    public function applyCoupon(Request $request){

        try{

            $cart = session()->has('cart') ? session()->get('cart') : [];
            
            $response = Order::calculateCouponDiscounts($request->coupon_name);
            
            $fromCart = 1;
            return view('frontend.cart.cart',compact('cart','fromCart'));
            

        }catch(\Exception $exception){

            $error = $exception->getMessage().' - line - '.$exception->getLine();
            return view('frontend.errors.error_500',compact('error'));

        }

    }

    public function getCityForCityName(Request $request){

        $city = Zone::where('zone_name',$request->city)->get()->first();

        if($city != null){

            return response()->json([
                'status' => true,
                'payload' => $city
            ]);

        }else{
            return response()->json([
                'status' => false,
                'payload' => null
            ]);

        }
    }

    public function getCartQuotation(Request $request){

        $cart = session()->has('cart') ? session()->get('cart') : [];

      
        if($cart != null){
            
            $total_price = 0.0;
            $total_weight = 0.0;

            $reference_number = "QUO".date('YmdHis').rand(10,100);

            //saving quotation

            $quotation = new Quotation;
            $quotation->reference_number = $reference_number;
            $quotation->user_id = Auth::user() != null ? Auth::user()->id : null;
            $quotation->customer_name = $request->customer_name;
            $quotation->company_name = $request->company_name;
            $quotation->address = $request->customer_address;
            $quotation->email_address = $request->email_address;
            $quotation->quotation_total = $total_price;
            $quotation->weight = $total_weight;
            
            $savedQuotation = Quotation::create($quotation->toArray());

            foreach($cart as $cartItem){
                $product = Product::where('id',$cartItem['product_id'])->get()->first();
                $total_price = $total_price + $cartItem['total_price'];
                $total_weight = $total_weight + $product->weight;

                //saving quotation item
                $quotationItem = new QuotationItem;

                $quotationItem->quotation_id = $savedQuotation->id;
                $quotationItem->product_id = $product->id;
                $quotationItem->product_name = $product->product_name;
                $quotationItem->unit_price = $product->unit_price;
                $quotationItem->quantity = $cartItem['qty'];
                $quotationItem->sub_total = $cartItem['total_price'];

                $savedQuotationItem = QuotationItem::create($quotationItem->toArray());

            }

            Quotation::where('id',$savedQuotation->id)->update(['quotation_total' => $total_price, 'weight' => $total_weight]);
            
            $quotation = Quotation::with('quotationItems')->where('id',$savedQuotation->id)->get()->first();

            $siteLogo = GeneralSetting::getSettingByKey('site_logo');

            $logo = "data:image/png;base64,".base64_encode(file_get_contents($siteLogo->description));  

            // return view('frontend/cart/templates/cart_quotation',compact('cart','total_price','logo','total_weight'));

            $pdf = PDF::loadView('admin/orders/templates/cart_quotation',compact('quotation','logo'));

            $pdf->setPaper('A4', 'potrait');
            
            return $pdf->download($reference_number.'.pdf');

        }else{
            return back()->with('error','Cart is empty');
        }

    }

}
