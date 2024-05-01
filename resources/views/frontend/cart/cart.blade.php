@extends('frontend.app')
@section('content')
<!-- Breadcrumbs-->


{{-- <div class="container-fluid breadcrumb-bgColor">
    <div class="container">
       <div class="row">
          <!-- Breadcrumbs-->
          <div class="col-12  py-3">
             <div class="d-flex justify-content-start align-items-center">
                <ol class="breadcrumb m-0">
                   <li class="breadcrumb-item"><a class="breadcrumb-home" href="{{ url('/') }}">Home</a></li>
                   <li class="breadcrumb-item active breadcrumb-active" aria-current="page">Shopping Cart</li>
                </ol>
             </div>
          </div>
       </div>
    </div>
 </div> --}}
 <!-- / Breadcrumbs-->


<div class="container-fluid checkout-wrapper border-top padding-10em">
<div class="container py-xl-5 py-3">
   <div id="sec-internal" class="row">
      <div class="col-xl-8 col-12 pb-3">
         <div class="row">
            <div class="col-xl-6 col-lg-6 col-9 text-left">

               <h2 class="font-36 green-text font-Nerko">Shopping Cart</h2>
            </div>
            <div class="col-xl-6 col-lg-6 col-3 text-end">
               <p class="summary-p pt-xl-3 pt-2 fw-bold text-muted">
                  @if(session()->has('cart') && count(session()->get('cart')) > 0)
                (   {{ count(session()->get('cart')) }} Item )
                  @endif
               </p>
            </div>
         </div>
      </div>
      <div class="col-4 pb-3 d-none d-sm-block">
      </div>
      <div class="col-12">
         <div class="row">
            <div class="col-xl-8 px-0">
               <!-- <div class="row">
                  <div class="col-xl-2 col-3">
                     <img class="img-thumbnail mt-xl-3" src="{{ asset('images/frontend/images/footer-logo.png') }}"  alt=""
                        />
                  </div>
                  <div class="col-xl-3 col-6 py-xl-4">
                     <p class="summary-p mb-1"><a href="">All Categories</a></p>
                     <h4 class="heding-model-top">Product Name</h4>
                  </div>
                  <div class="col-xl-2 col-3 py-xl-5 py-3">
                     <p class="summary-total fw-normal"">Rs.660.00</p>
                  </div>
                  <div class="col-xl-2 col-4 py-xl-5 py-3">

                      <div class="input-group">
                        <input type="button" class="btn btn-outline-secondary quty-btn" value="-" id="mins" onclick="minus()">
                        <input type="text" class="form-control px-1"  value="1" id="count" disabled>

                        <input type="button" class="btn btn-outline-secondary quty-btn" value="+" id="plus" onclick="plus()">
                    </div>


                    </div>
                  <div class="col-xl-2 col-4 py-xl-5 py-3">
                     <p class="summary-total fw-normal"">Rs.660.00</p>
                  </div>
                  <div class="col-xl-1 col-4 py-xl-5 py-3 text-center">
                     <a href=""> <i class="fas fa-times-circle text-danger delect-btn mt-1"></i></a>
                  </div>
                  </div> -->
               @if(session()->has('cart') && count(session()->get('cart')) > 0)
               <div class="table-responsive table-cart font-red-hat">
               <table class="table table-bordered table-striped">
                     <thead class="text-center font-15 font-Asap fw-normal black-text">
                        <tr>
                           <th>Image</th>
                           <th>Product Name</th>
                           <th>Product Price</th>
                           <th>Quantity</th>
                           <th>Sub Total</th>
                           <th>Actions</th>
                        </tr>
                     </thead>
                     <tbody class="font-15 font-Asap fw-normal black-text">
                     @foreach($cart as $item)
                        <tr>
                           <td>
                              <img style="width:100px;" src="{{ asset($item['image']) }}"  alt=""/>
                           </td>
                           <td style="vertical-align:middle;">
                           {{-- <p class="summary-p mb-1"><a href="">{{ $item['categories']}}</a></p> --}}
                           <h4 class="heding-model-top "><a class="font-18 fw-bolder black-text black-hover" href="{{route('web.shop.product',$item['product_id'])}}">{{ $item['title'] }}</a></h4>
                           </td>
                           <td style="vertical-align:middle;">
                              <p class="summary-total fw-normal font-15">{{$commonContent['currencySymbol']['description']}}<span id="summary-item-unit-price-{{ $item['product_id'] }}">{{ number_format($item['unit_price'],2) }}<span></p>
                              @if($item['product_variant']['bulk_quantity'] != null)
                                 @if($item['qty'] >= $item['product_variant']['bulk_quantity'])
                                 <p class="text-danger"><small>Bulk Price</small></p>
                                 @endif
                              @endif
                           </td>
                           <td style="vertical-align:middle;">
                              <div class="qyt-div input-group">
                                 <div class="button-container input-group">
                                    <button id="btn_min_cart"  title="{{ $item['product_id'].','.$item['variant_id'] }}" class="btn quty-btn cart-qty-minus " type="button" value="-">-</button>
                                    <input type="text" name="qty" class="form-control px-1 qty-filed text-center " maxlength="12" value="{{ $item['qty'] }}" disabled>
                                    <button id="btn_plus_cart"  title="{{ $item['product_id'].','.$item['variant_id'] }}" class="btn quty-btn cart-qty-plus " type="button" value="+">+</button>


                                </div>

                              </div>
                           </td>
                           <td style="vertical-align:middle;" >
                              <p class="summary-total fw-normal font-14">{{$commonContent['currencySymbol']['description']}} <span id="summery-item-total-{{ $item['product_id'] }}">{{ number_format($item['total_price'],2)}}</span></p>
                           </td>
                           <td style="vertical-align:middle;" class="text-center">
                           <a class="cart-item-remove-btn btn_min_cart mini_cart_remove_btn fs-5" href="" title="{{ $item['product_id'].','.$item['variant_id'] }}"> <i class="fas fa-trash text-danger delect-btn"></i></a>
                           </td>
                        </tr>
                        <tr class="">
                           <td colspan="6">
                           <p class="text-danger"><small>{{isset($item['alert_msg']) ? $item['alert_msg'] : ''}}</small></p>
                           </td>
                        </tr>
                     @endforeach
                     </tbody>
                  </table>
               </div>




               @else
               <div class="row border-top pt-2">
                  <div class="alert alert-warning " role="alert">
                  <p class="text-center font-36 green-text fw-bolder">  Cart is empty</p>
                  </div>
               </div>
               @endif
               <!-- <div class="row border-top pt-2">
                  <div class="col-xl-2 col-3">
                     <img class="img-thumbnail mt-xl-3" src="{{ asset('images/frontend/images/footer-logo.png') }}"  alt=""
                        />
                  </div>
                  <div class="col-xl-3 col-6 py-xl-4">
                     <p class="summary-p mb-1"><a href="">All Categories</a></p>
                     <h4 class="heding-model-top">Product Name</h4>
                  </div>
                  <div class="col-xl-2 col-3 py-xl-5 py-3">
                     <p class="summary-total fw-normal"">Rs.660.00</p>
                  </div>
                  <div class="col-xl-2 col-4 py-xl-5 py-3">

                    <div class="input-group">
                        <input type="button" class="btn btn-outline-secondary quty-btn" value="-" id="mins" onclick="minus()">
                        <input type="text" class="form-control px-1"  value="1" id="count" disabled>

                        <input type="button" class="btn btn-outline-secondary quty-btn" value="+" id="plus" onclick="plus()">
                    </div>

                  </div>
                  <div class="col-xl-2 col-4 py-xl-5 py-3">
                     <p class="summary-total fw-normal"">Rs.660.00</p>
                  </div>
                  <div class="col-xl-1 col-4 py-xl-5 py-3 text-center">
                     <a href=""> <i class="fas fa-times-circle text-danger delect-btn mt-1"></i></a>
                  </div>
                  </div> -->
               <div class="row border-top pt-2">
                  <div class="col-12">
                     @if(session()->has('cart') && count(session()->get('cart')) > 0)
                     <a href="{{ route('web.shop') }}" class="btn rounded-3 font-20 font-Asap border border-danger py-2 border-1 fw-bolder w-25 text-black bg-white hover-btn btn-mobile submit-btn">Continue Shopping </a>
                     @endif
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-12">
               {{--
               <div class="row">
                  <div class="col-12 text-center">
                     <button type="submit" class="btn btn-primary mb-3 w-75 submit-btn">Update Cart</button>
                  </div>
               </div>
               --}}
               <div class="bg-light  px-lg-3  font-red-hat">
                  <div class="card">
                     <h5 class="card-title font-22 text-center fw-bold green-text  py-3">ORDER SUMMARY</h5>
                     <div class="card-body py-2">
                        <div class="row">
                           <div class="col-6">
                              <p class="summary-p  font-15 font-Asap fw-bolder">Sub Total	</p>
                           </div>
                           <div class="col-6 text-right">

                              <p class="summary-price fw-normal">{{$commonContent['currencySymbol']['description']}} <span id="order-summery-sub-total">{{number_format(Session::get('cartValues')['sub_total'],2)}}</span></p>

                           </div>
                        </div>
                        <div class="row">
                           <div class="col-6">
                              <p class="summary-p  font-15 font-Asap fw-bolder">Discount	</p>
                           </div>
                           <div class="col-6 text-right">

                              <p class="summary-price fw-normal">{{$commonContent['currencySymbol']['description']}} <span id="order-summery-sub-total">{{number_format(Session::get('cartValues')['discount'],2)}}</span></p>

                           </div>
                        </div>
                     </div>
                     <div class="card-body py-2 pb-0">
                        <!-- <div class="row">
                           <div class="col-6">
                              <p class="summary-p fw-bold">Discount</p>
                           </div>
                           <div class="col-6 text-right">
                              <p class="summary-price fw-normal">10%</p>
                           </div>
                           </div> -->
                     </div>
                     @if ($commonContent['couponsEnabled']['description'] == 1)
                        
                   
                     <form action="{{route('web.cart.coupon.add')}}" method="post">
                        {{csrf_field()}}
                     <div class="card-body py-2 pt-0">
                        <div id="add-coupon" class="row">
                           <div class="col-12">
                             
                              <p class="font-15 font-Asap fw-normal black-text pb-2"> Add Coupon Code </p>
                           </div>
                        </div>
                        
                        <div class="row">
                           <div class="col-12">
                              <input type="text" class="form-control input-check border-1" name="coupon_name" id="coupon_name" value="{{Session::get('couponName')}}" placeholder="Coupon Name">
                           </div>
                           
                           <div class="col-12">
                              <p class="text-danger">{{Session::get('couponMessage')}}</p>
                           </div>
                           <div class="col-12">
                              <button id="coupon-btn-apply" type="submit" class="btn  my-3 submit-btn coupon-btn-apply
                             rounded-3 font-20 font-Asap border border-danger py-1 border-1 fw-bolder w-100   text-black bg-white hover-btn btn-mobile  " value="">Apply Coupon</button>
                           </div>
                        </div>
                     </div>
                     </form>
                     @endif
                     <div class="card-footer">
                        <div class="row pt-3">
                           <div class="col-6">
                              <p class="summary-total font-15 font-Asap fw-normal black-text">Total</p>
                           </div>
                           <div class="col-6 text-right">

                              <p class="summary-total font-15 font-Asap fw-bolder black-text"> {{$commonContent['currencySymbol']['description']}} <span id="order-summery-total">
                                {{number_format(Session::get('cartValues')['cart_total'],2)}}
                                 </span>
                           </div>
                        </div>

                        <div class="row pt-2">
                  <div class="col-12">
                     @if(session()->has('cart') && count(session()->get('cart')) > 0)

                     @if (Auth::user())
                     <a href="{{url('cart/checkout')}}"class="btn submit-btn w-100 
                     rounded-3 font-20 font-Asap border border-danger py-1 border-1 fw-bolder  text-black bg-white hover-btn btn-mobile" id="cart-checkout-btn">Proceed To Checkout</a>
                     @else

                     @include('frontend.cart.components.checkout_login')

                     @endif
                    
                     @include('frontend.cart.components.download_quotation')
                     @endif
                  </div>
               </div>
                     </div>
                  </div>
               </div>
              
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
   var incrementPlus;
   var incrementMinus;

   var buttonPlus = $(".cart-qty-plus");
   var buttonMinus = $(".cart-qty-minus");

   var incrementPlus = buttonPlus.click(function () {
     var $n = $(this).
     parent(".button-container").
     parent(".qyt-div").
     find(".qty-filed");
     $n.val(Number($n.val()) + 1);
   });

   var incrementMinus = buttonMinus.click(function () {
     var $n = $(this).
     parent(".button-container").
     parent(".qyt-div").
     find(".qty-filed");
     var amount = Number($n.val());
     if (amount > 0) {
       $n.val(amount - 1);
     }
   });
   //# sourceURL=pen.js

</script>
@endsection
