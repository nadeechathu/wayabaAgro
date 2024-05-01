@extends('admin.layouts.app')
@section('content')
<div>
   <!-- Breadcrumbs-->
   <div class="bg-white border-bottom py-3 mb-5">
      <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
         <nav class="mb-0" aria-label="breadcrumb">
            <h3 class="m-0">Invoices And Packing Slips</h3>
         </nav>
         <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
            <ol class="breadcrumb m-0">
               <li class="breadcrumb-item"><a href="#">Admin</a></li>
               <li class="breadcrumb-item"><a href="#">Orders</a></li>
               <li class="breadcrumb-item active" aria-current="page">Invoices And Packing Slips</li>
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
               <form action="{{route('orders.invoices')}}" method="get">
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
                        
                        <th>Order Number</th>
                        <th>Tracking Number</th>
                        <th>Ordered Date</th>
                        <th>Status</th>
                        <th>Total ({{$commonContent['currencySymbol']['description']}})</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ( $orders as $order)

                     <tr>
                       
                        <td>{{$order->id}}</td>
                        <td>{{$order->tracking_number}}</td>
                        <td>
                           {{$order->created_at}}
                        </td>
                        <td>
                           @include('admin.orders.components.order_statuses')
                        </td>
                        <td>
                           {{number_format($order->order_total,2)}}
                        </td>
                        <td>

                        @include('admin.orders.components.quick_view')
                        
                        <a href="{{route('orders.packingSlip.download',$order->id)}}"><button type="button" class="btn btn-success btn-sm text-white " id="{{'btnPrint'.$order->id}}" ><i class="fa fa-download mr-2"></i>Packing Slip</button></a> 
                        
                        <a href="{{route('order.download',$order->id)}}"><button type="button" class="btn btn-danger btn-sm text-white " id="{{'btnPrint'.$order->id}}" ><i class="fa fa-download mr-2"></i>Download Invoice</button></a> 
                        
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
