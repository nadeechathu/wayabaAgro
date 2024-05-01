<!-- Button trigger modal -->
<button type="button" class="btn btn-dark btn-sm text-white"  data-bs-toggle="modal" data-bs-target="{{'#quick-view-'.$order->id}}">
   <i class="fas fa-eye"> View</i>
   </button>
   <!-- Modal -->
   <div class="modal fade" id="{{'quick-view-'.$order->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" style="max-width:1000px;">
         <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Order Details - {{$order->id}} - @include('admin.orders.components.order_statuses')</h5>
                     <div class=""><button type="button" class="btn-close mt-1" data-bs-dismiss="modal" aria-label="Close"></button></div>

            </div>
            <div class="modal-body">

                  <div class="col-12 ">
                     <div class="row">
                        @if ($customer != null)
                           <div class="col-lg-4 col-12  text-start">
                              <h5 class="pb-lg-2 fw-bold">Customer Details</h5>
                              <p class="admin-small-p fw-bold mb-1">{{$customer->first_name}} {{$customer->last_name}},</p>
                              <p class="admin-small-p fw-bold mb-1">{{$customer->phone}},</p>
                              <p class="admin-small-p fw-bold mb-1">{{$customer->email}},</p>
                              <p class="admin-small-p fw-bold mb-1">{{$customer->address}}</p>
                           </div>
                        @endif

                        @if ($order->billingAddress != null)
                        <div class="col-lg-4 col-12  text-start">
                              <h5 class="pb-lg-2 pt-lg-0 pt-3 fw-bold">Billing Details</h5>
                              <p class="admin-small-p fw-bold mb-1">{{$order->billingAddress->first_name}} {{$order->billingAddress->last_name}},</p>
                              <p class="admin-small-p fw-bold mb-1">{{$order->billingAddress->phone}},</p>
                              <p class="admin-small-p fw-bold mb-1">{{$order->billingAddress->email}},</p>
                              <p class="admin-small-p fw-bold mb-1">{{$order->billingAddress->address_line1}} {{$order->billingAddress->address_line2}},</p>
                              <p class="admin-small-p fw-bold mb-1">{{$order->billingAddress->city}},</p>
                              <p class="admin-small-p fw-bold mb-1">{{$order->billingAddress->zip}},</p>
                              <p class="admin-small-p fw-bold mb-1">{{$order->billingAddress->country}}</p>
                           </div>
                        @endif

                        @if ($order->shippingAddress != null)
                        <div class="col-lg-4 col-12  text-start">
                              <h5 class="pb-lg-2 pt-lg-0 pt-3 fw-bold">Shipping Details</h5>
                              <p class="admin-small-p fw-bold mb-1">{{$order->shippingAddress->first_name}} {{$order->shippingAddress->last_name}},</p>
                              <p class="admin-small-p fw-bold mb-1">{{$order->shippingAddress->phone}},</p>
                              <p class="admin-small-p fw-bold mb-1">{{$order->shippingAddress->email}},</p>
                              <p class="admin-small-p fw-bold mb-1">{{$order->shippingAddress->address_line1}} {{$order->shippingAddress->address_line2}},</p>
                              <p class="admin-small-p fw-bold mb-1">{{$order->shippingAddress->city}},</p>
                              <p class="admin-small-p fw-bold mb-1">{{$order->shippingAddress->zip}},</p>
                              <p class="admin-small-p fw-bold mb-1">{{$order->shippingAddress->country}}</p>
                           </div>
                        @endif




                     </div><br class="d-none d-sm-block"><br class="d-none d-sm-block">
                     <div class="row">
                        <div class="col-12">
                           <div class="row">

                            <div class="col-lg-4 col-12  text-start">
                                 <h5 class="pb-lg-2 pt-lg-0 pt-3 fw-bold">Payment Method</h5>
                                 <p class="admin-small-p fw-bold mb-1">{{$order->payment_method}}</p>

                              </div>
                              <div class="col-lg-4 col-12  text-start">

                                 <h5 class="pb-lg-2 pt-lg-0 pt-3 fw-bold">Shipping Method</h5>
                                 <p class="admin-small-p fw-bold mb-1">
                                    @if ($order->shipping_cost > 0)
                                       Standard Shipping
                                    @else
                                       Free Shipping
                                    @endif
                                 </p>
                              </div>
                              <div class="col-lg-4 col-12  text-start">
                                 <h5 class="pb-lg-2 pt-lg-0 pt-3 fw-bold">Order Summary</h5>
                                 <div class="row admin-small-p fw-bold mb-1">
                                    <div class="col-5">Tracking Number</div>
                                    <div class="col-7">: {{$order->tracking_number}}</div>
                                 </div>
                                 <div class="row admin-small-p fw-bold mb-1">
                                    <div class="col-5">Subtotal</div>
                                    <div class="col-7">: {{$commonContent['currencySymbol']['description']}} {{number_format($order->sub_total,2)}}</div>
                                 </div>
                                 <div class="row admin-small-p fw-bold mb-1">
                                    <div class="col-5">Shipping Cost</div>
                                    <div class="col-7">: {{$commonContent['currencySymbol']['description']}} {{number_format($order->shipping_cost,2)}}</div>
                                 </div>
                                 <div class="row admin-small-p fw-bold mb-1">
                                    <div class="col-5">Discount</div>
                                    <div class="col-7">: {{$commonContent['currencySymbol']['description']}} {{number_format($order->discount,2)}}</div>
                                 </div>
                                 <div class="row admin-small-p fw-bold mb-1">
                                    <div class="col-5">Total</div>
                                    <div class="col-7">: {{$commonContent['currencySymbol']['description']}} {{number_format($order->order_total,2)}}</div>
                                 </div>
                                 <div class="row admin-small-p fw-bold mb-1">
                                    <div class="col-5">Weight</div>
                                    <div class="col-7">: {{$order->total_weight}} kg</div>
                                 </div>

                                 @if ($order->zone != null)
                                 <div class="row admin-small-p fw-bold mb-1">
                                    <div class="col-5">Zone</div>
                                    <div class="col-7">: {{$order->zone->zone_name}}</div>
                                 </div>
                                 @endif
                                 @if ($order->coupon_id != null)
                                 <div class="row admin-small-p fw-bold mb-1">
                                    <div class="col-5 text-danger">Coupon Discount</div>
                                    <div class="col-7 text-danger">: {{$order->coupon_discount}}</div>
                                 </div>
                                 @endif
                              </div>

                           </div>
                           <div class="row">
                              <div class="col-md-12">
                              <h5 class="pb-lg-2 pt-lg-0 pt-3 fw-bold">Order Notes</h5>
                              <p>
                                 @if ($order->notes != null)
                                 {{$order->notes}}
                                 @else
                                    -
                                 @endif
                              </p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <hr/>
                     <div class="row">

                     <div class="col-12 pt-2">
                     <h5 class="pb-lg-2 fw-bold">Order Items</h5>
                     <div class="table-responsive table-cart">

                        <table class="table table-bordered table-striped">
                              <thead>
                                 <tr >
                                    <th scope="col" class="text-dark fw-bold admin-small-h6">Image</th>
                                    <th scope="col" class="text-dark fw-bold admin-small-h6">Product</th>
                                    <th scope="col" class="text-dark fw-bold admin-small-h6">Quantity</th>
                                    <th scope="col" class="text-dark fw-bold admin-small-h6">Unit Price ({{$commonContent['currencySymbol']['description']}})</th>
                                    <th scope="col" class="text-dark fw-bold admin-small-h6">Subtotal ({{$commonContent['currencySymbol']['description']}})</th>
                                    <!-- <th scope="col" class="text-dark fw-bold admin-small-h6">Discount</th> -->
                                    <th scope="col" class="text-dark fw-bold admin-small-h6">Weight (kg)</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 @foreach ($order->orderItems as $orderItem)

                                    <tr>
                                       <td><img src="{{$orderItem->product != null ? asset($orderItem->product->images[0]->src) : ''}}" style="width:70px;" alt=""></td>
                                       <td>{{$orderItem->product_name}}</td>
                                       <td>{{$orderItem->quantity}}</td>
                                       <td>{{number_format($orderItem->unit_price,2)}}</td>
                                       <td>{{number_format($orderItem->unit_price * $orderItem->quantity,2)}}</td>
                                       <!-- <td>{{$orderItem->discount}}</td> -->
                                       <td>{{$orderItem->weight}}</td>
                                    </tr>
                                 @endforeach

                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
            <a href="{{route('order.download',$order->id)}}"><button type="button" class="btn btn-danger px-4 py-2 text-white " id="{{'btnPrint'.$order->id}}" ><i class="fa fa-download mr-2"></i>Download Receipt</button></a>
            <button type="button" class="btn btn-secondary px-4 py-2 " data-bs-dismiss="modal" aria-label="Close">Close</button>

            </div>
         </div>
      </div>
   </div>
