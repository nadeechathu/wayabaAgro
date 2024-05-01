
<!DOCTYPE html>
<html>
    <head>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            font-size : 0.9rem;
        }
        .text {
            margin :1rem;
        }


.table-div {
    margin:5px;
}

.headings {
    font-size:1.2rem;
}
#orders {
  
  border-collapse: collapse;
  
  width: 100%;
}

#orders td {
  border: 1px solid #ddd;
  vertical-align: top;

  /* padding: 8px; */
}

#orders th {
  border: 1px solid #ddd;
  vertical-align: top;
  font-size:1.2rem;
  /* padding: 8px; */
}

#orders tr:nth-child(even){background-color: #f2f2f2;}

#orders tr:hover {background-color: #ddd;}

#orders th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #ececec;
  color: black;
}
.table-heading {
    width:33%;
}
.title {
    font-size : 1.5rem;
}
</style>
    </head>
<body>

<h2 class="title">Order - {{$order->tracking_number}} - {{$order->orderStatus->status_name}}</h2><hr/><br/>
<table class="table text-center" id="orders">
                            <thead>
                               <tr >
                                  <th scope="col" class="table-heading">Customer Details</th>
                                  <th scope="col" class="table-heading">Billing Details</th>
                                  <th scope="col" class="table-heading">Shipping Details</th>
                                 
                               </tr>
                            </thead>
                            <tbody>
                            <tr>
                                     <td>
                                     @if ($customer != null)
                                     <p class="text">{{$customer->first_name}} {{$customer->last_name}},</p>
    <p class="text">{{$customer->phone}},</p>
    <p class="text">{{$customer->email}},</p>
    <p class="text">{{$customer->address}}</p>
    @endif
                                     </td>
                                     <td>
                                     @if ($order->billingAddress != null)
                                     <p class="text">{{$order->billingAddress->first_name}} {{$order->billingAddress->last_name}},</p>
    <p class="text">{{$order->billingAddress->phone}},</p>
    <p class="text">{{$order->billingAddress->email}},</p>
    <p class="text">{{$order->billingAddress->address_line1}} {{$order->billingAddress->address_line2}},</p>
    <p class="text">{{$order->billingAddress->city}},</p>
    <p class="text">{{$order->billingAddress->zip}},</p>
    <p class="text">{{$order->billingAddress->country}}</p>
    @endif
                                     </td>
                                     <td>
                                     @if ($order->shippingAddress != null)
                                     <p class="text">{{$order->shippingAddress->first_name}} {{$order->shippingAddress->last_name}},</p>
    <p class="text">{{$order->shippingAddress->phone}},</p>
    <p class="text">{{$order->shippingAddress->email}},</p>
    <p class="text">{{$order->shippingAddress->address_line1}} {{$order->shippingAddress->address_line2}},</p>
    <p class="text">{{$order->shippingAddress->city}},</p>
    <p class="text">{{$order->shippingAddress->zip}},</p>
    <p class="text">{{$order->shippingAddress->country}}</p>
    @endif
                                     </td>
                                     
                                  </tr>

                            </tbody>
                         </table>
<br/>
                         <table class="table text-center" id="orders">
                            <thead>
                               <tr >
                                  <th class="table-heading">Payment Method</th>
                                  <th class="table-heading">Shipping Method</th>
                                  <th class="table-heading" style="width:60%;">Order Summary</th>
                                 
                               </tr>
                            </thead>
                            <tbody>
                            <tr>
                                     <td>
                                     <p class="text">{{$order->payment_method}}</p>
                                     </td>
                                     <td>
                                     <p class="text">Standard Shipping</p>
                                     </td>
                                     <td>
                                     <div class="text">
                                    <div class="col-md-5">Tracking Number : {{$order->tracking_number}}</div>
                                    
                                 </div>
                                 <div>
                                    <div class="text">Subtotal : {{$commonContent['currencySymbol']['description']}} {{$order->sub_total}}</div>
                                 </div>
                                 <div>
                                    <div class="text">Shipping Cost : {{$commonContent['currencySymbol']['description']}} {{$order->shipping_cost}}</div>
                                 </div>
                                 <div>
                                    <div class="text">Discount : {{$commonContent['currencySymbol']['description']}} {{$order->discount}}</div>
                                 </div>
                                 <div>
                                    <div class="text">Total : {{$commonContent['currencySymbol']['description']}} {{$order->order_total}}</div>
                                 </div>
                                 <div>
                                    <div class="text">Weight : {{$order->total_weight}} kg</div>
                                 </div>

                                 @if ($order->zone != null)
                                 <div>
                                    <div class="text">Zone : {{$order->zone->zone_name}}</div>
                                 </div>
                                 @endif
                                     </td>
                                     
                                  </tr>

                            </tbody>
                         </table>


<div class="table-div">
<h5 class="headings">Order Items</h5><hr/>

<table class="table text-center" id="orders">
                            <thead>
                               <tr >
                                  <th scope="col" class="table-heading">Product</th>
                                  <th scope="col" class="table-heading">Quantity</th>
                                  <th scope="col" class="table-heading">Unit Price</th>
                                  <th scope="col" class="table-heading">Subtotal</th>
                                  <!-- <th scope="col" class="table-heading">Discount</th> -->
                                  <th scope="col" class="table-heading">Weight (kg)</th>
                               </tr>
                            </thead>
                            <tbody>
                               @foreach ($order->orderItems as $orderItem)

                                  <tr>
                                     <td>{{$orderItem->hamper->hamper_name}}</td>
                                     <td>{{$orderItem->hamper_quantity}}</td>
                                     <td>{{$orderItem->unit_price}}</td>
                                     <td>{{$orderItem->unit_price * $orderItem->hamper_quantity}}</td>
                                     <!-- <td>{{$orderItem->discount}}</td> -->
                                     <td>{{$orderItem->weight}}</td>
                                  </tr>
                               @endforeach

                            </tbody>
                         </table>
 
</div>
<br><br>
<div class="table-div">
   <p>Notes - {{$order->notes}}</p>
</div>

</body>
</html>

