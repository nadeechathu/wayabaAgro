@extends('admin.layouts.app')

@section('content')
<div>
   <!-- Breadcrumbs-->
   <div class="bg-white border-bottom py-3 mb-5">
      <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
         <nav class="mb-0" aria-label="breadcrumb">
            <h3 class="m-0">All Orders</h3>
         </nav>
         <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
            <ol class="breadcrumb m-0">
               <li class="breadcrumb-item"><a href="#">Admin</a></li>
               <li class="breadcrumb-item active" aria-current="page">All Orders</li>
            </ol>
         </div>
      </div>
   </div>
   <!-- / Breadcrumbs-->
   <section class="container-fluid">
      <div class="card">
         <div class="card-header">
            @include('admin.common.alerts')
            <form action="{{route('orders.preOrders.all')}}" method="get">
            <div class="row">
             
               <div class="col-md-6">
               </div>
               <div class="col-md-6">
                        <div class="input-group">
                            <input type="search" class="form-control" name="searchKey" placeholder="Customer Name" 
                            value="{{$searchKey}}">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    
               </div>             
            </div>
            </form><br/>
            <div class="row">
                <div class="table-responsive-sm">
                <table class="table table-bordered">
                    <thead class="table-light">
                      <tr>
                        
                           <th>Requested On</th>
                          <th>Customer Name</th>
                           <th>Phone Number</th>
                           <th>Product Name</th>
                           <th>Quantity</th>
                           <th>Status</th>
                           <th>Stock Alert</th>
                           <th style="width:20%;">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ( $preOrders as $preOrder)

                     <tr>
                        
                        <td>{{$preOrder->created_at}}</td>
                        <td>{{$preOrder->customer_name}}</td>
                        <td>{{$preOrder->phone_number}}</td>
                        <td>{{$preOrder->variant != null ? $preOrder->variant->variant_name : '-'}}</td>
                        <td>{{$preOrder->quantity}}</td>
                       
                        <td>
                           @if ($preOrder->status == 1)
                           <span class="badge bg-dark">New</span>
                           @else
                           <span class="badge bg-secondary">Old</span>
                           @endif
                        </td>
                        <td>
                           @if ($preOrder->stock_alert_sent == 1)
                           <span class="badge bg-success">Sent</span>
                           @else
                           <span class="badge bg-danger">Not Sent</span>
                           @endif
                        </td>
                     <td>
                        @include('admin.orders.components.pre_order_view')
                        @include('admin.orders.components.remove_pre_order')
                     </td>

                     </tr>
                     @endforeach

                    </tbody>
                  </table>
                  <div class="d-felx justify-content-center">

                  {{$preOrders->links()}}

                  </div>
            </div>
        </div>
         </div>
      </div>
   </section>
</div>
@endsection
