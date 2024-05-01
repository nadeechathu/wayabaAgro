@extends('admin.layouts.app')

@section('content')



<div>
        <!-- Breadcrumbs-->
        <div class="bg-white border-bottom py-3 mb-5">
          <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
            <h3 class="m-0">Edit Order - {{$order->id}} - {{$order->tracking_number}}</h3>

          </nav>
          <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
          <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="./index.html">Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Orders</li>
              </ol>
          </div>
          </div>
        </div>        <!-- / Breadcrumbs-->


        <section class="container-fluid">

        <div class="card">
              <div class="card-header">
                @include('admin.common.alerts')
               
               </div>
              <div class="card-body">
              
              <div class="accordion" id="accordionExample">
@if ($order->billingAddress != null)
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Edit Billing Address
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <form action="{{route('orders.edit.addresses')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <input type="text" hidden name="type" value="0">
          <input type="text" hidden name="address_id" value="{{$order->billingAddress->id}}">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="billing_first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="billing_first_name" name="first_name" value="{{$order->billingAddress->first_name}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="billing_last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="billing_last_name" name="last_name" value="{{$order->billingAddress->last_name}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="billing_lemail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="billing_email" name="email" value="{{$order->billingAddress->email}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="billing_phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="billing_phone" name="phone" value="{{$order->billingAddress->phone}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="billing_company" class="form-label">Company</label>
                        <input type="text" class="form-control" id="billing_company" name="company" value="{{$order->billingAddress->company}}" required>
                    </div>
                   
                   
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="billing_address_line1" class="form-label">Address Line 1</label>
                        <input type="text" class="form-control" id="billing_address_line1" name="address_line1" value="{{$order->billingAddress->address_line1}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="billing_address_line2" class="form-label">Address Line 2</label>
                        <input type="text" class="form-control" id="billing_address_line2" name="address_line2" value="{{$order->billingAddress->address_line2}}">
                    </div>
                    <div class="mb-3">
                        <label for="billing_zip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="billing_zip" name="zip" value="{{$order->billingAddress->zip}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="billing_city" class="form-label">City</label>
                        <input type="text" class="form-control" id="billing_city" name="city" value="{{$order->billingAddress->city}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="billing_country" class="form-label">Country</label>
                        <input type="text" class="form-control" id="billing_country" name="country" value="{{$order->billingAddress->country}}" required>
                    </div>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Update Billing Details</button>
        </form>
      </div>
    </div>
  </div>
@endif
  @if ($order->shippingAddress != null)
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Edit Shipping Address
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <form action="{{route('orders.edit.addresses')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <input type="text" hidden name="type" value="1">
          <input type="text" hidden name="address_id" value="{{$order->shippingAddress->id}}">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="shipping_first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="shipping_first_name" name="first_name" value="{{$order->shippingAddress->first_name}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="shipping_last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="shipping_last_name" name="last_name" value="{{$order->shippingAddress->last_name}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="shipping_email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="shipping_email" name="email" value="{{$order->shippingAddress->email}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="shipping_phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="shipping_phone" name="phone" value="{{$order->shippingAddress->phone}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="shipping_company" class="form-label">Company</label>
                        <input type="text" class="form-control" id="shipping_company" name="company" value="{{$order->shippingAddress->company}}" required>
                    </div>
                   
                   
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="shipping_address_line1" class="form-label">Address Line 1</label>
                        <input type="text" class="form-control" id="shipping_address_line1" name="address_line1" value="{{$order->shippingAddress->address_line1}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="shipping_address_line2" class="form-label">Address Line 2</label>
                        <input type="text" class="form-control" id="shipping_address_line2" name="address_line2" value="{{$order->shippingAddress->address_line2}}">
                    </div>
                    <div class="mb-3">
                        <label for="shipping_zip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="shipping_zip" name="zip" value="{{$order->shippingAddress->zip}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="shipping_city" class="form-label">City</label>
                        <input type="text" class="form-control" id="shipping_city" name="city" value="{{$order->shippingAddress->city}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="shipping_country" class="form-label">Country</label>
                        <input type="text" class="form-control" id="shipping_country" name="country" value="{{$order->shippingAddress->country}}" required>
                    </div>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Update Shipping Details</button>
        </form>
      </div>
    </div>
  </div>    
  @endif
  @if ($order->customer != null)
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Edit Customer Details
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <form action="{{route('orders.edit.customer')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <input type="text" hidden name="customer_id" value="{{$order->customer->id}}">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="customer_first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="customer_first_name" name="customer_first_name" value="{{$order->customer->first_name}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="customer_last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="customer_last_name" name="customer_last_name" value="{{$order->customer->last_name}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="customer_email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="customer_email" name="customer_email" value="{{$order->customer->email}}" required>
                    </div>
                    
                   
                   
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="customer_address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="customer_address" name="customer_address" value="{{$order->customer->address}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="customer_phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="customer_phone" name="customer_phone" value="{{$order->customer->phone}}">
                    </div>
                   
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Update Customer Details</button>
        </form>
      </div>
    </div>
  </div>
@endif
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Edit Order Items
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
                            <table class="table table-striped">
                              <thead>
                                 <tr >
                                    <th scope="col" class="text-dark fw-bold admin-small-h6">Image</th>
                                    <th scope="col" class="text-dark fw-bold admin-small-h6">Product</th>
                                    <th scope="col" class="text-dark fw-bold admin-small-h6">Quantity</th>
                                    <th scope="col" class="text-dark fw-bold admin-small-h6">Unit Price</th>
                                    <th scope="col" class="text-dark fw-bold admin-small-h6">Subtotal</th>
                                    <th scope="col" class="text-dark fw-bold admin-small-h6">Discount</th>
                                    <th scope="col" class="text-dark fw-bold admin-small-h6">Weight</th>
                                    <th scope="col" class="text-dark fw-bold admin-small-h6">Actions</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 @foreach ($order->orderItems as $orderItem)
                                 
                                    <tr>
                                       <td><img src="{{asset($orderItem->product->images[0]->src)}}" style="width:70px;" alt=""></td>
                                       <td>{{$orderItem->product_name}}</td>
                                       <td>{{$orderItem->quantity}}</td>
                                       <td>{{$orderItem->unit_price}}</td>
                                       <td>{{$orderItem->unit_price * $orderItem->quantity}}</td>
                                       <td>{{$orderItem->discount}}</td>
                                       <td>{{$orderItem->weight}}</td>
                                       <td>
                                           @include('admin.orders.components.edit_order_item_quantity')

                                           @include('admin.orders.components.remove_item')
                                       </td>
                                    </tr>
                                 @endforeach
                               
                              </tbody>
                           </table>
      </div>
    </div>
  </div>
</div>


              </div>
              <!-- /.card-body -->
              <div class="card-footer">
             
                  </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </section>
  </div>

@endsection
