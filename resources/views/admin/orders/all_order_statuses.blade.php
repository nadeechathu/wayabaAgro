@extends('admin.layouts.app')
@section('content')
<div>
   <!-- Breadcrumbs-->
   <div class="bg-white border-bottom py-3 mb-5">
      <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
         <nav class="mb-0" aria-label="breadcrumb">
            <h3 class="m-0">Order Statuses</h3>
         </nav>
         <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
            <ol class="breadcrumb m-0">
               <li class="breadcrumb-item"><a href="./index.html">Admin</a></li>
               <li class="breadcrumb-item"><a href="./index.html">Orders</a></li>
               <li class="breadcrumb-item active" aria-current="page">Statuses</li>
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
               <div class="col-md-6">
                   @if (Auth::user()->hasPermission('add_order_status'))

                   @include('admin.orders.components.add_new_order_status')
                       
                   @endif
               </div>
               <div class="col-md-6">
               <form action="{{route('orders.statuses')}}" method="get">
                        <div class="input-group">
                            <input type="search" class="form-control" name="searchKey" placeholder="Status Name" value="{{$searchKey}}">
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
                       
                        <th>Status Id</th>
                        <th>Status Name</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ( $orderStatuses as $orderStatus)

                     <tr>
                       
                        <td>{{$orderStatus->id}}</td>
                        <td>{{$orderStatus->status_name}}</td>
                        
                        <td>

                        @if (Auth::user()->hasPermission('edit_order_status'))

                        @include('admin.orders.components.edit_order_status')
                            
                        @endif
                        </td>
                        
                     </tr>
                     @endforeach

                    </tbody>
                  </table>
                  <div class="d-felx justify-content-center">

                  {{$orderStatuses->links()}}

                  </div> 
            </div>
        </div>
         </div>
      </div>
   </section>
</div>
@endsection
