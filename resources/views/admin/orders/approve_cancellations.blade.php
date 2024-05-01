@extends('admin.layouts.app')
@section('content')
<div>
   <!-- Breadcrumbs-->
   <div class="bg-white border-bottom py-3 mb-5">
      <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
         <nav class="mb-0" aria-label="breadcrumb">
            <h3 class="m-0">Approve Order Cancellations</h3>
         </nav>
         <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
            <ol class="breadcrumb m-0">
               <li class="breadcrumb-item"><a href="./index.html">Admin</a></li>
               <li class="breadcrumb-item active" aria-current="page">Approve Order Cancellations</li>
            </ol>
         </div>
      </div>
   </div>
   <!-- / Breadcrumbs-->
   <section class="container-fluid">
      <div class="card">
         <div class="card-header">
            @include('admin.common.alerts')
            <div class="row">
               <div class="col-md-6"></div>
               <div class="col-md-6">
               <form action="{{route('orders.cancellationApproval')}}" method="get">
                        <div class="input-group">
                            <input type="search" class="form-control" name="searchKey" placeholder="Order Number / Tracking Number" value="{{$searchKey}}">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
               </div>
            </div><br/>
            <div class="row">
                <div class="table-responsive-sm">
                <table class="table table-bordered">
                    <thead class="table-light">
                      <tr>
                        <th>
                           <input type="checkbox" id="select-all">  
                        </th>
                        <th>Order Number</th>
                        <th>Tracking Number</th>
                        <th>Ordered Date</th>
                        <th>Status</th>
                        <th>Approval Status</th>
                        <th>Total</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ( $orders as $order)

                     <tr>
                        <td>
                        <input type="checkbox" id="{{'order-select-'.$order->id}}">  
                        </td>
                        <td>{{$order->id}}</td>
                        <td>{{$order->tracking_number}}</td>
                        <td>
                           {{$order->created_at}}
                        </td>
                        <td>
                           @include('admin.orders.components.order_statuses')
                        </td>
                        <td>
                           @if ($order->is_approved == 1)
                           <span class="badge bg-success">Approved</span>
                           @else
                           <span class="badge bg-danger">Not Approved</span>
                           @endif
                        </td>
                        <td>
                           {{$order->order_total}}
                        </td>
                        <td>
                        @include('admin.orders.components.quick_view')
                        @if (Auth::user()->hasPermission('approve_cancellations'))
                           @include('admin.orders.components.approve_cancellation')
                        @endif
                        </td>
                        
                     </tr>
                     @endforeach

                    </tbody>
                  </table>
                  <div class="d-felx justify-content-center">

                  {{$orders->links()}}

                  </div> 
            </div>
        </div>
         </div>
      </div>
   </section>
</div>
@endsection
