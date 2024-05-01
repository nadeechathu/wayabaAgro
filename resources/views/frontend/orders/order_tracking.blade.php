@extends('frontend.app')
@section('content')

<div class="container-fluid padding-10em font-Asap ">
   <div class="container font-red-hat  py-5">
      <div class="row">
         <div class="col-12">
            <div class="d-flex justify-content-center mb-5">
               <div class="card ">
                  <div class="card-body item-title border border-success shadow-lg order-traking-title">
                     <h2 class="mb-0 text-center font-36  fw-bolder">Order Tracking - {{$orderDetails->tracking_number	}}</h2>
                  </div>
               </div>
            </div>
         </div>  
         <div class="col-12 pb-4 order-traking-div">


            <div class="row justify-content-between">
               <div class="order-tracking col-lg-2 {{$orderDetails->order_status >= 1 ? 'completed' : ''}}" >
                  <i class="fal fa-file-alt rounded-circle {{$orderDetails->order_status >= 1 ? 'order-active' : 'order-deactive'}}"></i>
                  <h5 class="">Pending</h5>
               </div>
               @if($orderDetails->order_status < 6)
               <div class="order-tracking col-lg-2 {{$orderDetails->order_status >= 2 ? 'completed' : ''}}" >
                  <i class="fal fa-box-check rounded-circle {{$orderDetails->order_status >= 2 ? 'order-active' : 'order-deactive'}}"></i>

                  <h5 class="">Confirmed</h5>
               </div>
               <div class="order-tracking col-lg-2 {{$orderDetails->order_status >= 3 ? 'completed' : ''}}">
                <i class="fal fa-shipping-fast rounded-circle {{$orderDetails->order_status >= 3 ? 'order-active' : 'order-deactive'}}"></i>
                  <h5 class="">In Process</h5>
               </div>
               <div class="order-tracking col-lg-2 {{$orderDetails->order_status >= 4 ? 'completed' : ''}}">
                <i class="fal fa-shipping-fast rounded-circle {{$orderDetails->order_status >= 4 ? 'order-active' : 'order-deactive'}}"></i>
                  <h5 class="">Dispatched</h5>
               </div>
               <div class="order-tracking col-lg-2 {{$orderDetails->order_status >= 5 ? 'completed' : ''}}">
                  <i class="fal fa-file-invoice rounded-circle {{$orderDetails->order_status >= 5 ? 'order-active' : 'order-deactive'}}"></i>
                  <h5 class="">Fulfilled</h5>
               </div>
               @endif
               <div class="order-tracking col-lg-2 {{$orderDetails->order_status >= 6 ? 'completed' : ''}} {{$orderDetails->order_status >= 6 ? ' d-block ' : ' d-none '}}">
                  <i class="fal fa-file-invoice rounded-circle {{$orderDetails->order_status >= 6 ? 'order-active' : 'order-deactive'}}"></i>
                  <h5 class="">Cancellation Requested</h5>
               </div>
             <div class="order-tracking col-lg-2 {{$orderDetails->order_status >= 7 ? 'completed' : ''}} {{$orderDetails->order_status >= 6 ? ' d-block ' : ' d-none '}}">
                <i class="fal fa-ban rounded-circle {{$orderDetails->order_status >= 7 ? 'order-active' : 'order-deactive'}} "></i>
                <h5 class="">Cancelled</h5>
             </div>
             <div class="order-tracking col-lg-2 {{$orderDetails->order_status >= 8 ? 'completed' : ''}} {{$orderDetails->order_status >= 6 ? ' d-block ' : ' d-none '}}">
                  <i class="fal fa-file-invoice rounded-circle {{$orderDetails->order_status >= 8 ? 'order-active' : 'order-deactive'}}"></i>
                  <h5 class="">Refund Requested</h5>
            </div>
             <div class="order-tracking col-lg-2 {{$orderDetails->order_status >= 9 ? 'completed' : ''}} {{$orderDetails->order_status >= 6 ? ' d-block ' : ' d-none '}}">
                <i class="fal fa-ban rounded-circle {{$orderDetails->order_status >= 9 ? 'order-active' : 'order-deactive'}} "></i>
                <h5 class="">Refunded</h5>
             </div>

            </div>
         </div>
         <div class="col-12 px-0">
            <div class="card text-dark bg-light mb-3" >
               <div class="card-header  green-bg ">
                  <h4 class="text-white mb-0 pt-1 fw-bold green-text ">
                     Order Details - {{$orderDetails->id}}
                  </h4>
               </div>
               <div class="card-body border border-success order-details">
                  <div class="row">
                     <div class="col-lg-4 col-12">
                        <div class="card border-gray mb-3">
                           <div class="card-header account-view">
                              <h5 class="mb-0">Customer Details</h5>
                           </div>
                           <div class="card-body text-dark py-2">
                              <p class="summary-p  mb-1">{{$orderDetails->customer->first_name}} {{$orderDetails->customer->last_name}}</p>
                              <p class="summary-p  mb-1">{{$orderDetails->customer->email}}</p>
                              <p class="summary-p  mb-1">{{$orderDetails->customer->phone}}</p>
                              <p class="summary-p  mb-1">{{$orderDetails->customer->address}}</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-12">
                        <div class="card border-gray mb-3">
                           <div class="card-header account-view">
                              <h5 class="mb-0">Billing Details</h5>
                           </div>
                           <div class="card-body text-dark py-2">
                              <p class="summary-p  mb-1">{{$orderDetails->billingAddress->first_name}} {{$orderDetails->billingAddress->last_name}},</p>
                              <p class="summary-p  mb-1">{{$orderDetails->billingAddress->phone}},</p>
                              <p class="summary-p  mb-1">{{$orderDetails->billingAddress->email}},</p>
                              <p class="summary-p  mb-1">{{$orderDetails->billingAddress->address_line1}} {{$orderDetails->billingAddress->address_line2}},</p>
                              <p class="summary-p  mb-1">{{$orderDetails->billingAddress->city}},</p>
                              <p class="summary-p  mb-1">{{$orderDetails->billingAddress->zip}},</p>
                              <p class="summary-p  mb-1">{{$orderDetails->billingAddress->country}}</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-12">
                        <div class="card border-gray mb-3">
                           <div class="card-header account-view">
                              <h5 class="mb-0">Shipping Details</h5>
                           </div>
                           <div class="card-body text-dark py-2">
                              <p class="summary-p  mb-1">{{$orderDetails->shippingAddress->first_name}} {{$orderDetails->shippingAddress->last_name}},</p>
                              <p class="summary-p  mb-1">{{$orderDetails->shippingAddress->phone}},</p>
                              <p class="summary-p  mb-1">{{$orderDetails->shippingAddress->email}},</p>
                              <p class="summary-p  mb-1">{{$orderDetails->shippingAddress->address_line1}} {{$orderDetails->shippingAddress->address_line2}},</p>
                              <p class="summary-p  mb-1">{{$orderDetails->shippingAddress->city}},</p>
                              <p class="summary-p  mb-1">{{$orderDetails->shippingAddress->zip}},</p>
                              <p class="summary-p  mb-1">{{$orderDetails->shippingAddress->country}}</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="card  border-gray  mb-3">
                           <div class="card-header account-view">
                              <h5 class="mb-0">Payment Method</h5>
                           </div>
                           <div class="card-body text-dark py-2">
                              <p class="summary-p  mb-1">{{$orderDetails->payment_method}}</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-12">
                        <div class="card  border-gray  mb-3">
                           <div class="card-header account-view">
                              <h5 class="mb-0">
                                 Shipping Method
                              </h5>
                           </div>
                           <div class="card-body text-dark py-2">
                              <p class="summary-p  mb-1">

                              @if ($orderDetails->shipping_cost > 0)
                                 Standard Shipping
                              @else
                                 Free Shipping
                              @endif
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-12">
                        <div class="card  border-gray  mb-3">
                           <div class="card-header account-view">
                              <h5 class="mb-0">
                                 Order Summary
                              </h5>
                           </div>
                           <div class="card-body text-dark py-2">
                              <p class="summary-p  mb-1">Tracking Number : {{$orderDetails->tracking_number}}</p>
                              <p class="summary-p font-red-hat fw-bolder blue-color  mb-1">Subtotal : {{$commonContent['currencySymbol']['description']}} {{number_format($orderDetails->sub_total,2)}}</p>
                              <p class="summary-p  mb-1">Shipping Cost : {{$commonContent['currencySymbol']['description']}} {{number_format($orderDetails->shipping_cost,2)}}</p>
                              <p class="summary-p  mb-1">Discount: {{$commonContent['currencySymbol']['description']}} {{number_format($orderDetails->discount,2)}}</p>
                              <p class="summary-p  mb-1">Total : {{$commonContent['currencySymbol']['description']}} {{number_format($orderDetails->order_total,2)}}</p>
                              <p class="summary-p  mb-1">Weight : {{$orderDetails->total_weight}} Kg</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row pt-4 summary-tbl">
                     <div class="col-12 pt-2">
                        <div class="table-responsive">
                        <table class="table text-center">
                           <thead class="border-bottom border-start-0 border-top-0 border-2 border-end-0 bg-gray-inner">
                              <tr >
                                 <th scope="col" class="fw-bold admin-small-h6 font-red-hat brown-text">Image</th>
                                 <th scope="col" class="fw-bold admin-small-h6 font-red-hat brown-text">Product</th>
                                 <th scope="col" class="fw-bold admin-small-h6 font-red-hat brown-text">Quantity</th>
                                 <th scope="col" class="fw-bold admin-small-h6 font-red-hat brown-text">Unit Price ({{$commonContent['currencySymbol']['description']}})</th>
                                 <th scope="col" class="fw-bold admin-small-h6 font-red-hat brown-text">Subtotal ({{$commonContent['currencySymbol']['description']}})</th>
                                 <!-- <th scope="col" class="text-dark fw-bold admin-small-h6">Discount</th> -->
                                 <th scope="col" class="fw-bold admin-small-h6 font-red-hat brown-text">Weight (kg)</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach ($orderDetails->orderItems as $orderItem)
                              <tr>
                                 <td class="py-3"><img src="{{asset($orderItem->product->images[0]->src)}}"  class="img-thumbnail" style="width:90px;" alt=""></td>
                                 <td class="pt-lg-5 pt-2 blue-color fw-bold admin-small-h6 font-red-hat">{{$orderItem->product->product_name}}</td>
                                 <td class="pt-lg-5 pt-2 blue-color fw-bold admin-small-h6 font-red-hat">{{$orderItem->quantity}}</td>
                                 <td class="pt-lg-5 pt-2  blue-color fw-bold admin-small-h6 font-red-hat">{{number_format($orderItem->unit_price,2)}}</td>
                                 <td class="pt-lg-5 pt-2  blue-color fw-bold admin-small-h6 font-red-hat">{{number_format($orderItem->unit_price * $orderItem->quantity,2)}}</td>
                                 <!-- <td>{{$orderItem->discount}}</td> -->
                                 <td class="pt-lg-5 pt-2  blue-color fw-bold admin-small-h6 font-red-hat">{{$orderItem->weight}}</td>
                              </tr>
                              @endforeach
                           </tbody>
                        </table>
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
@endsection

