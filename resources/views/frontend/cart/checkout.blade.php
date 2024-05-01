@extends('frontend.app')
<link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/css/intlTelInput.css" rel="stylesheet" media="screen">

<style>
   .loader {
  border: 5px solid #f3f3f3;
  border-radius: 50%;
  border-top: 5px solid #a48006;
  width: 50px;
  height: 50px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 0.7s linear infinite;
  margin-top:20px;
}
.intl-tel-input {
   width:100%;
}
.phone-number {
   border-radius : 5px !important;
   line-height:22px !important;
}

.js-example-basic-single,.select2  {
   width:100% !important;
   line-height:22px !important;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
}
</style>
@section('content')




{{-- <div class="container-fluid breadcrumb-bgColor">
    <div class="container">
       <div class="row">
          <!-- Breadcrumbs-->
          <div class="col-12  py-3">
             <div class="d-flex justify-content-start align-items-center">
                <ol class="breadcrumb m-0">
                   <li class="breadcrumb-item"><a class="breadcrumb-home" href="{{ url('/') }}">Home</a></li>
                   <li class="breadcrumb-item active breadcrumb-active" aria-current="page">Checkout</li>
                </ol>
             </div>
          </div>
       </div>
    </div>
 </div> --}}
 <!-- / Breadcrumbs-->








<!-- / Breadcrumbs-->
<div class="container-fluid checkout-wrapper border-top  padding-10em">
   <div class="container py-xl-5 py-3">
      <div class="row font-red-hat">
         <div class="col-12 pb-xl-3 pb-2">
            <h2 class="font-36 green-text font-Nerko">CHECKOUT</h2>

            <div class="row">
               <div class="col-md-12">
                  @include('frontend.common.alerts')
               </div>
            </div>

            @isset($type)

            @if ($type == 'billing')
                <input type="text" hidden id="flag"/>
            @elseif($type == 'shipping')
                <input type="text" hidden id="summary"/>
            @endif

            @endisset

         </div>
         <div class="col-12 col-xl-9 checkout-left ">
            <ul class="nav nav-pills checkout-nav" id="pills-tab" role="tablist">

               <li class="nav-item me-3" role="presentation">
                  <button class="nav-link text-start fw-normal active checkout-nav-btn noClick" id="tab-billingAddress" data-bs-toggle="pill" data-bs-target="#tab-billing" type="button" role="tab" aria-controls="tab-billing" aria-selected="false">Billing Address</button>
               </li>
               <li class="nav-item me-3" role="presentation">
                <button class="nav-link text-start fw-normal  checkout-nav-btn noClick" id="tab-shippingAddress" data-bs-toggle="pill" data-bs-target="#tab-shipping" type="button" role="tab" aria-controls="tab-shipping" aria-selected="true">Delivery Address</button>
             </li>
             <li class="nav-item" role="presentation">
                  <button class="nav-link text-start fw-normal checkout-nav-btn noClick" id="pills-summary-tab" data-bs-toggle="pill" data-bs-target="#pills-summary" type="button" role="tab" aria-controls="pills-summary" aria-selected="false">Summary</button>
               </li>

            </ul>
            <div class="tab-content py-5" id="pills-tabContent">

               <div class="tab-pane fade show active" id="tab-billing" role="tabpanel" aria-labelledby="tab-billingAddress">
                  <form action="{{route('web.addCheckoutAddresses')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" hidden name="type" value="billing">
                     <div class="row">
                         <div class="form-group col-xl-6 col-12">
                           <label for="" class="pb-2 font-15 font-Asap fw-normal black-text">First Name *</label>
                           <input type="text" class="form-control input-check" placeholder="First Name"  name="firstName" value="@if($billing_address) {{ $billing_address['firstName'] }}@endif" required>
                           <input type="text" class="billing-id" hidden name="id" value="@if($billing_address) {{ $billing_address['id'] }}@endif">
                        </div>
                         <div class="form-group col-xl-6 col-12">
                           <label for="" class="pb-2 font-15 font-Asap fw-normal black-text">Last Name *</label>
                           <input type="text" class="form-control input-check" name="lastName" value="@if($billing_address) {{ $billing_address['lastName'] }}@endif" placeholder="Last Name" required>
                        </div>
                     </div>
                     <div class="row py-xl-2">
                         <div class="form-group col-xl-6 col-12">
                           <label for="" class="pb-2 font-15 font-Asap fw-normal black-text">Email *</label>
                           <input type="text" class="form-control input-check" name="email" value="@if($billing_address) {{ $billing_address['email'] }}@endif" placeholder="Email" required>
                        </div>
                         <div class="form-group col-xl-6 col-12">
                           <label for="" class="pb-2 font-15 font-Asap fw-normal black-text">Company *</label>
                           <input type="text" class="form-control input-check" name="company" value="@if($billing_address) {{ $billing_address['company'] }}@endif"  placeholder="Company" required>
                        </div>
                     </div>
                     <div class="row py-xl-2">
                         <div class="form-group col-xl-6 col-12">
                           <label for="" class="pb-2 font-15 font-Asap fw-normal black-text">Address Line 1 *</label>
                           <input type="text" class="form-control input-check" name="addressLine1" value="@if($billing_address) {{ $billing_address['addressLine1'] }}@endif"  placeholder="Address" required>
                        </div>
                        <div class="form-group col-xl-6 col-12">
                           <label for="" class="pb-2 font-15 font-Asap fw-normal black-text">Address Line 2</label>
                           <input type="text" class="form-control input-check" name="addressLine2" value="@if($billing_address) {{ $billing_address['addressLine2'] }}@endif"  placeholder="Address" >
                        </div>

                     </div>
                     <div class="row py-xl-2">
                         <div class="form-group col-xl-6 col-12">
                           <label for="" class="pb-2 font-15 font-Asap fw-normal black-text">City *</label>
                           {{-- <input type="text" class="form-control input-check" name="city"  value="@if($billing_address) {{ $billing_address['city'] }}@endif" placeholder="City" required> --}}
                           <select name="city" id="cityBill" class="form-control js-example-basic-single" required onChange="getZipCodeForCity('cityBill','zipCodeBill')">
                              @foreach ($zones as $zone)
                                 @if ($billing_address)
                                    @if ($billing_address['city'] == $zone->zone_name)
                                       <option selected value="{{$zone->zone_name}}">{{$zone->zone_name}}</option>
                                    @else
                                    <option value="{{$zone->zone_name}}">{{$zone->zone_name}}</option>
                                    @endif
                                 @else
                                 <option value="{{$zone->zone_name}}">{{$zone->zone_name}}</option>
                                 @endif
                              @endforeach
                           </select>
                        </div>
                         <div class="form-group col-xl-6 col-12">
                           <label for="" class="pb-2 font-15 font-Asap fw-normal black-text">Postal Code *</label><br/>
                           <input type="text" class="form-control input-check" name="zipCodeBill" id="zipCodeBill" value="@if($billing_address) {{ $billing_address['zipCode'] }}@endif" placeholder="Postal Code" readonly required>

                           {{-- <select name="zipCodeBill" id="zipCodeBill" class="form-control js-example-basic-single" required>
                              @foreach ($zones as $zone)
                                 @if ($billing_address)
                                    @if ($billing_address['zipCode'] == $zone->zip_code)
                                       <option selected value="{{$zone->zip_code}}">{{$zone->zip_code}}</option>
                                    @else
                                    <option value="{{$zone->zip_code}}">{{$zone->zip_code}}</option>
                                    @endif
                                 @else
                                 <option value="{{$zone->zip_code}}">{{$zone->zip_code}}</option>
                                 @endif
                              @endforeach
                           </select> --}}
                        </div>
                     </div>

                     <div class="row py-xl-2">
                     <div class="form-group col-xl-6 col-12">
                           <label for="" class="pb-2 font-15 font-Asap fw-normal black-text">State *</label>
                           <input type="text" class="form-control input-check" name="state" value="@if($billing_address) {{ $billing_address['state'] }}@endif" placeholder="State" required>
                        </div>
                        <div class="form-group col-xl-6 col-12">
                           <label for="" class="pb-2 font-15 font-Asap fw-normal black-text">Country *</label>
                           <select class="form-control js-example-basic-single" name="country" required>
                              @if ($billing_address)

                                 @foreach ($countries as $country)
                                    <option value="{{$country->country_name}}" {{$country->country_name == $billing_address['country'] ? 'selected' : '' }}>{{$country->country_name}}</option>
                                 @endforeach
                                 
                              @else

                                 @foreach ($countries as $country)
                                    <option value="{{$country->country_name}}">{{$country->country_name}}</option>
                                 @endforeach
                                 
                              @endif
                            
                           </select>
                        </div>

                     </div>

                     <div class="row py-xl-2">

                         <div class="form-group col-xl-6 col-12">
                           <label for="" class="pb-2 font-15 font-Asap fw-normal black-text">Billing Phone Number * <span class="text-danger">(Enter without country code)</span></label><br/>
                           {{-- <input type="tel" class="form-control js-input-mobile input-check" maxlength="11" id="billing-phone" onChange="removeCountryCode('billing-phone')"
                           name="phone" value="@if($billing_address) {{ $billing_address['phone'] }} @endif" oninput="this.value = this.value.replace(/[^0-9.+]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Phone Number" required> --}}
                       <input type="tel" id="billing-phone" class="form-control js-input-mobile input-check" maxlength="11" name="phone" value="@if($billing_address) {{ $billing_address['phone'] }} @endif" oninput="this.value = this.value.replace(/[^0-9.+]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Phone Number" required>
                     
                        </div>


                        <div class="row py-xl-2">
                            <div class="form-group col-xl-6 col-12">


                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="use_as_shipping" id="enable-shipping">
                                <label for="" class="pb-2 font-15 font-Asap fw-normal black-text">Use Current  Billing address as Delivery address</label>
                              </div>
                           </div>

                        </div>

                     </div>

                     <button type="submit" class="btn font-15 text-white fw-normal rounded-3 green-bg py-2 btn-se border  border-2 border-success border-1 mt-2 w-25 submit-btn" id="checkout-submit">Continue</button>
                  </form>
               </div>

               <div class="tab-pane fade " id="tab-shipping" role="tabpanel" aria-labelledby="tab-shippingAddress">
                <form action="{{route('web.addCheckoutAddresses')}}" method="POST" enctype="multipart/form-data">
                  @csrf


                   <input type="text" hidden name="type" value="shipping">
                   <div class="row">
                      <div class="form-group col-xl-6 col-12">
                         <label for="" class="pb-2 font-15 font-Asap fw-normal black-text">First Name *</label>
                         <input type="text" class="form-control input-check" name="firstName"
                         value="@if($shipping_address) {{ $shipping_address['firstName'] }}@endif" placeholder="First Name" required>
                         <input type="text" hidden name="id" class="shipping-id" value="@if($shipping_address) {{ $shipping_address['id'] }}@endif">
                      </div>
                       <div class="form-group col-xl-6 col-12">
                         <label for="" class="pb-2 font-15 font-Asap fw-normal black-text">Last Name *</label>
                         <input type="text" class="form-control input-check" name="lastName" value="@if($shipping_address) {{ $shipping_address['lastName'] }}@endif" placeholder="Last Name" required>
                      </div>
                   </div>
                   <div class="row py-xl-2">
                       <div class="form-group col-xl-6 col-12">
                         <label for="" class="pb-2 font-15 font-Asap fw-normal black-text">Email *</label>
                     <input type="text" class="form-control input-check" name="email" value="@if($shipping_address) {{ $shipping_address['email'] }}@endif" placeholder="Email" required>
                      </div>
                       <div class="form-group col-xl-6 col-12">
                         <label for="" class="pb-2 font-15 font-Asap fw-normal black-text">Company *</label>
                         <input type="text" class="form-control input-check" name="company" value="@if($shipping_address) {{ $shipping_address['company'] }}@endif"  placeholder="Company" required>
                      </div>
                   </div>
                   <div class="row py-xl-2">
                       <div class="form-group col-xl-6 col-12">
                         <label for="" class="pb-2 font-15 font-Asap fw-normal black-text">Address Line 1 *</label>
                         <input type="text" class="form-control input-check" name="addressLine1" value="@if($shipping_address) {{ $shipping_address['addressLine1'] }}@endif"  placeholder="Address" required>
                      </div>
                      <div class="form-group col-xl-6 col-12">
                         <label for="" class="pb-2 font-15 font-Asap fw-normal black-text">Address Line 2</label>
                         <input type="text" class="form-control input-check" name="addressLine2" value="@if($shipping_address) {{ $shipping_address['addressLine2'] }}@endif"  placeholder="Address">
                      </div>

                   </div>
                   <div class="row py-xl-2">
                       <div class="form-group col-xl-6 col-12">
                         <label for="" class="pb-2 font-15 font-Asap fw-normal black-text">City *</label>
                         {{-- <input type="text" class="form-control input-check" name="city"  value="@if($shipping_address) {{ $shipping_address['city'] }}@endif" placeholder="City" required> --}}
                         <select name="city" id="cityShip" class="form-control js-example-basic-single" required onChange="getZipCodeForCity('cityShip','zipCodeShip')">
                              @foreach ($zones as $zone)
                                 @if ($shipping_address)
                                    @if ($shipping_address['city'] == $zone->zone_name)
                                       <option selected value="{{$zone->zone_name}}">{{$zone->zone_name}}</option>
                                    @else
                                    <option value="{{$zone->zone_name}}">{{$zone->zone_name}}</option>
                                    @endif
                                 @else
                                 <option value="{{$zone->zone_name}}">{{$zone->zone_name}}</option>
                                 @endif
                              @endforeach
                           </select>
                      </div>
                       <div class="form-group col-xl-6 col-12">
                         <label for="" class="pb-2 font-15 font-Asap fw-normal black-text">Postal Code *</label><br/>
                         <input type="text" class="form-control input-check" name="zipCodeShip" id="zipCodeShip"  value="@if($shipping_address) {{ $shipping_address['zipCode'] }}@endif" placeholder="Postal code" required readonly>

                         {{-- <select name="zipCodeShip" id="zipCodeShip" class="form-control js-example-basic-single" required>
                              @foreach ($zones as $zone)
                                 @if ($shipping_address)
                                    @if ($shipping_address['zipCode'] == $zone->zip_code)
                                       <option selected value="{{$zone->zip_code}}">{{$zone->zip_code}}</option>
                                    @else
                                    <option value="{{$zone->zip_code}}">{{$zone->zip_code}}</option>
                                    @endif
                                 @else
                                 <option value="{{$zone->zip_code}}">{{$zone->zip_code}}</option>
                                 @endif
                              @endforeach
                           </select>  --}}                    
                        </div>
                   </div>
                   <div class="row py-xl-2">

                   <div class="form-group col-xl-6 col-12">
                  <label for="" class="pb-2 font-15 font-Asap fw-normal black-text">State *</label>
                  <input type="text" class="form-control input-check" name="state" value="@if($shipping_address) {{ $shipping_address['state'] }}@endif"  placeholder="State" required>
                  </div>
                       <div class="form-group col-xl-6 col-12">
                         <label for="" class="pb-2 font-15 font-Asap fw-normal black-text">Country *</label>
                         <select class="form-control js-example-basic-single" name="country" required>
                         @if ($shipping_address)

                           @foreach ($countries as $country)
                              <option value="{{$country->country_name}}" {{$country->country_name == $shipping_address['country'] ? 'selected' : '' }}>{{$country->country_name}}</option>
                           @endforeach

                           @else

                           @foreach ($countries as $country)
                              <option value="{{$country->country_name}}">{{$country->country_name}}</option>
                           @endforeach

                           @endif

                         </select>
                      </div>


                      </div>

                      <div class="row py-xl-2">



                  <div class="form-group col-xl-6 col-12">
                  <label for="" class="pb-2 font-15 font-Asap fw-normal black-text">Delivery Phone Number * <span class="text-danger">(Enter without country code)</span></label>
                  {{-- <input type="tel" class="form-control js-input-mobile input-check" maxlength="11" id="shiping-phone" onChange="removeCountryCode('shiping-phone')"
                  name="phone" value="@if($shipping_address) {{ $shipping_address['phone'] }}@endif" oninput="this.value = this.value.replace(/[^0-9.+]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Phone Number" required> --}}
                  <input type="tel" id="shiping-phone" class="form-control js-input-mobile input-check" maxlength="11" name="phone" value="@if($shipping_address) {{ $shipping_address['phone'] }}@endif" oninput="this.value = this.value.replace(/[^0-9.+]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Phone Number" required>
                  </div>
                  </div>




                   <button type="submit" class="btn  font-15 text-white fw-normal rounded-3 green-bg py-2 btn-se border  border-2 border-success border-1 mt-2 w-25 submit-btn">Continue</button>
                </form>
             </div>


               <div class="tab-pane fade" id="pills-summary" role="tabpanel" aria-labelledby="pills-summary-tab">


               @if(session()->has('cart') && count(session()->get('cart')) > 0)

               <h3 class="heading-h3 font-36 green-text font-Nerko">Items In Your Cart</h3><br>
               <div class="table-responsive table-cart ">
                  <table class="table table-bordered">
                     <thead class="text-center font-15 font-Asap fw-normal black-text ">
                        <tr >
                           <th>Image</th>
                           <th>Product Name</th>
                           <th>Product Price</th>
                           <th>Quantity</th>
                           <th>Sub Total</th>
                        </tr>
                     </thead>
                     <tbody>
                     @foreach($cart as $item)
                        <tr>
                           <td>
                              <img style="width:100px;" src="{{ asset($item['image']) }}"  alt=""/>
                           </td>
                           <td style="vertical-align:middle;">
                              <h4 class="heding-model-top font-18 fw-bolder black-text">{{ $item['product_variant']->variant_name }}</h4>
                           </td>
                           <td style="vertical-align:middle;">
                              <p class="font-15 font-Asap fw-normal text-dark">{{$commonContent['currencySymbol']['description']}}<span id="summary-item-unit-price-{{ $item['product_id'] }}">{{ number_format($item['unit_price'],2) }}<span></p>
                           </td>
                           <td style="vertical-align:middle;">
                              <p class="font-15 font-Asap fw-normal text-dark"><span id="summery-item-total-{{ $item['product_id'] }}">{{ $item['qty']}}</span></p>
                           </td>
                           <td style="vertical-align:middle;">
                              <p class="font-15 font-Asap fw-normal text-dark">{{$commonContent['currencySymbol']['description']}} <span id="summery-item-total-{{ $item['product_id'] }}">{{ number_format($item['total_price'],2)}}</span></p>
                           </td>
                        </tr>
                     @endforeach
                     </tbody>
                  </table>
               </div>
               @endif


                  <div class="row  pt-4">
                   <div class="col-md-12">
                   <h3 class="heading-h3 card-title font-22 text-center fw-bold  pb-2">Order Notes & Summary</h3>
                     <p class="heding-model-top font-15 font-Asap fw-normal text-dark pb-2"> Please write a note for the receiver</p>
                     <textarea class="form-control" id="order-notes-input" name="order_notes" rows="3"></textarea>
                   </div>
                  </div>
                  <div class="row  pt-4">

                       <div class="col-lg-6 col-12 border-end"><h3 class="heading-h3  card-title font-22  fw-bold  pb-2">Delivery Details</h3>
                        <div class="row py-1 border-bottom">
                            <div class="col-4"><p class="font-15 font-Asap fw-bolder text-dark pb-2">Name</p></div>
                            <div class="col-8"><p class="font-15 font-Asap fw-nomal text-dark pb-2">{{$shipping_address != null ? $shipping_address['firstName'].' '.$shipping_address['lastName'] : ''}}</p></div>
                        </div>
                        <div class="row py-1 border-bottom">
                            <div class="col-4"><p class="font-15 font-Asap fw-bolder text-dark pb-2">Email</p></div>
                            <div class="col-8"><p class="font-15 font-Asap fw-nomal text-dark pb-2">{{$shipping_address != null ? $shipping_address['email'] : ''}}</p></div>
                        </div>
                        <div class="row py-1 border-bottom">
                            <div class="col-4"><p class="font-15 font-Asap fw-bolder text-dark pb-2">Delivery Phone</p></div>
                            <div class="col-8"><p class="font-15 font-Asap fw-nomal text-dark pb-2">{{$shipping_address != null ? $shipping_address['phone'] : ''}}</p></div>
                        </div>
                        <div class="row py-1 border-bottom">
                            <div class="col-4"><p class="font-15 font-Asap fw-bolder text-dark pb-2">Address</p></div>
                            <div class="col-8"><p class="font-15 font-Asap fw-nomal text-dark pb-2">{{$shipping_address != null ? $shipping_address['addressLine1'].', '.$shipping_address['addressLine2'] : ''}}</p></div>
                        </div>
                        <div class="row py-1 border-bottom">
                            <div class="col-4"><p class="font-15 font-Asap fw-bolder text-dark pb-2">City</p></div>
                            <div class="col-8"><p class="font-15 font-Asap fw-nomal text-dark pb-2">{{$shipping_address != null ? $shipping_address['city'] : ''}}</p></div>
                        </div>
                        <div class="row py-1 border-bottom">
                            <div class="col-4"><p class="font-15 font-Asap fw-bolder text-dark pb-2">Postal Code</p></div>
                            <div class="col-8"><p class="font-15 font-Asap fw-nomal text-dark pb-2">{{$shipping_address != null ? $shipping_address['zipCode'] : ''}}</p></div>
                        </div>
                        <div class="row py-1 border-bottom">
                            <div class="col-4"><p class="font-15 font-Asap fw-bolder text-dark pb-2">State</p></div>
                            <div class="col-8"><p class="font-15 font-Asap fw-nomal text-dark pb-2">{{$shipping_address != null ? $shipping_address['state'] : ''}}</p></div>
                        </div>
                        <div class="row py-1 border-bottom">
                            <div class="col-4"><p class="font-15 font-Asap fw-bolder text-dark pb-2">Country</p></div>
                            <div class="col-8"><p class="font-15 font-Asap fw-nomal text-dark pb-2">{{$shipping_address != null ? $shipping_address['country'] : ''}}</p></div>
                        </div>
                    </div>
                       <div class="col-lg-6 col-12 "><h3 class="heading-h3  card-title font-22 fw-bold  pb-2">Billing Details</h3>

                        <div class="row py-1 border-bottom">
                            <div class="col-4"><p class="font-15 font-Asap fw-bolder text-dark pb-2">Name</p></div>
                            <div class="col-8"><p class="font-15 font-Asap fw-nomal text-dark pb-2">{{$billing_address != null ? $billing_address['firstName'] : ''}} {{$billing_address != null ? $billing_address['lastName'] : ''}}</p></div>
                        </div>
                         <div class="row py-1 border-bottom">
                            <div class="col-4"><p class="font-15 font-Asap fw-bolder text-dark pb-2">Email</p></div>
                            <div class="col-8"><p class="font-15 font-Asap fw-nomal text-dark pb-2">{{$billing_address != null ? $billing_address['email'] : ''}}</p></div>
                        </div>
                        <div class="row py-1 border-bottom">
                            <div class="col-4"><p class="font-15 font-Asap fw-bolder text-dark pb-2">Billing Phone </p></div>
                            <div class="col-8"><p class="font-15 font-Asap fw-nomal text-dark pb-2">{{$billing_address != null ? $billing_address['phone'] : ''}}</p></div>
                        </div>
                        <div class="row py-1 border-bottom">
                            <div class="col-4"><p class="font-15 font-Asap fw-bolder text-dark pb-2">Address</p></div>
                            <div class="col-8"><p class="font-15 font-Asap fw-nomal text-dark pb-2">{{$billing_address != null ? $billing_address['addressLine1'].', '.$billing_address['addressLine2'] : ''}}</p></div>
                        </div>
                        <div class="row py-1 border-bottom">
                            <div class="col-4"><p class="font-15 font-Asap fw-bolder text-dark pb-2">City</p></div>
                            <div class="col-8"><p class="font-15 font-Asap fw-nomal text-dark pb-2">{{$billing_address != null ? $billing_address['city'] : ''}}</p></div>
                        </div>
                        <div class="row py-1 border-bottom">
                            <div class="col-4"><p class="font-15 font-Asap fw-bolder text-dark pb-2">Postal Code</p></div>
                            <div class="col-8"><p class="font-15 font-Asap fw-nomal text-dark pb-2">{{$billing_address != null ? $billing_address['zipCode'] : ''}}</p></div>
                        </div>
                        <div class="row py-1 border-bottom">
                            <div class="col-4"><p class="font-15 font-Asap fw-bolder text-dark pb-2">State</p></div>
                            <div class="col-8"><p class="font-15 font-Asap fw-nomal text-dark pb-2">{{$billing_address != null ? $billing_address['state'] : ''}}</p></div>
                        </div>
                        <div class="row py-1 border-bottom">
                            <div class="col-4"><p class="font-15 font-Asap fw-bolder text-dark pb-2">Country</p></div>
                            <div class="col-8"><p class="font-15 font-Asap fw-nomal text-dark pb-2">{{$billing_address != null ? $billing_address['country'] : ''}}</p></div>
                        </div>
                    </div>

                  </div>


                  <div class="row pt-4">
                     <h3 class="heading-h3  card-title font-22 fw-bold  pb-2">Payment Methods</h3>

                     <p class="heding-model-top summary-p fw-normal"></p>
                     <div class="row">

                        <div class="form-check">
                           <input type="radio" class="font-15 font-Asap fw-nomal text-dark pb-2" checked="checked" name="cash_on_delivery" value="cod" id="cash_on_delivery"> Cash On Delivery<br/><br/>
                           <!-- <img class="pay-icon" src="{{ asset('images/frontend/images/payment.png') }}"  alt=""/> -->
                        </div>
                        <div class="form-check">
                        @if ($shipping_address != null and $billing_address != null)

                        <input class="font-15 font-Asap fw-bolder"" type="checkbox" value="" id="terms-checked" onClick="swithTermsConditions()"> <b>I Accept the <a href="{{route('web.home.pages','terms-conditions')}}" class="font-15 font-Asap fw-normal green-text  black-hover" target="_blank">Terms and Conditions</a></b>
                        @else
                        <p class="text-danger">Please fill billing and shipping details before proceeding.</p>
                        @endif
                     </div>

                     </div>
                     <div class="row">
                        <div class="col-md-4">
                           <button id="place-order-btn" type="submit" style="display:none;" class="btn btn-primary mt-4 w-xl-25 w-100 submit-btn btn btn font-15 text-white fw-normal rounded-3 green-bg py-2 btn-se border  border-2 border-success border-1 mt-2 w-25 submit-btn">Buy Now</button>

                        </div>
                        <div class="col-md-4">
                        <div class="loader" style="display:none;" id="order-now-loader"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 col-xl-3 checkout-right">
            <div class="card">
                <h5 class="card-title font-22 text-center fw-bold green-text py-3">ORDER SUMMARY</h5>
                <div class="card-body py-2">
                   <div class="row">
                     <div class="col-6">
                         <p class="font-15 font-Asap fw-bolder text-dark ">Total</p>
                      </div>
                      <div class="col-6 text-right">
                         <p class="font-15 font-Asap fw-normal text-dark">{{$commonContent['currencySymbol']['description']}} <span id="checkout-total">{{ number_format(Session::get('cartValues')['sub_total'],2) }}</span></p>
                      </div>
                   </div>
                </div>
                <div class="card-body py-2">
                   <div class="row">
                      <div class="col-6">
                         <p class="font-15 font-Asap fw-bolder text-dark">Discount</p>
                      </div>
                      <div class="col-6 text-right">
                         <p class="font-15 font-Asap fw-normal text-dark">{{$commonContent['currencySymbol']['description']}} {{number_format(Session::get('cartValues')['discount'],2)}}</p>
                      </div>
                   </div>
                </div>
                <div class="card-body py-2">
                   <div class="row">
                      <div class="col-6">
                         <p class="font-15 font-Asap fw-bolder text-dark">Shipping Cost</p>
                      </div>
                      <div class="col-6 text-right">
                         <p class="font-15 font-Asap fw-normal text-dark">{{$commonContent['currencySymbol']['description']}} {{ number_format(Session::get('cartValues')['shipping_cost'],2) }}</p>
                      </div>
                   </div>
                </div>
                <div class="card-footer ">
                   <div class="row pt-2">
                      <div class="col-6">
                         <p class="font-15 font-Asap fw-bolder text-dark">Total</p>
                      </div>
                      <div class="col-6 text-right">
                         <p class="font-15 font-Asap fw-normal text-dark">{{$commonContent['currencySymbol']['description']}} {{ number_format(Session::get('cartValues')['cart_total'],2) }}</p>
                      </div>
                   </div>
                </div>
             </div>
         </div>
      </div>
   </div>
</div>


@endsection

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
<script>



    $( document ).ready(function() {
     $('.js-example-basic-single').select2();

         $(".phone-number").intlTelInput({
            initialCountry: "lk",
         });
        let flagElm = document.getElementById('flag');
        let summaryElm = document.getElementById('summary');

        if(flagElm !== null){
            document.getElementById('tab-shippingAddress').click();
        }
        else if(summaryElm !== null)
        {
            document.getElementById('pills-summary-tab').click();
        }

});

function swithTermsConditions(){

let orderPlaceBtn = document.getElementById('place-order-btn');

let checked = document.getElementById("terms-checked").checked;

if(checked){
   orderPlaceBtn.style.display = "block";
}else{
   orderPlaceBtn.style.display = "none";
}



}

function removeCountryCode(Id){

   var mobileElm =document.getElementById(Id);
   var value = mobileElm.value;

   if(value !== null){
      var mobile = '';
      if(value.charAt(0) == '+' || value.charAt(0)=='0'){
         mobile = value.replace(/[^a-zA-Z0-9+]/g, "").substr(3);
      }
      else {
         mobile = value.replace(/[^a-zA-Z0-9]/g, "");
      }

      mobileElm.value = mobile;

      console.log('phone ==> ',mobile);
   }
}
   </script>
   <!-- Common JS -->
   <script src="{{ asset('js/common.js') }}"></script>
   @endsection
