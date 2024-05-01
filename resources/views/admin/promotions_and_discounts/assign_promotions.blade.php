@extends('admin.layouts.app')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@section('content')
<div>
    <!-- Breadcrumbs-->
    <div class="bg-white border-bottom py-3 mb-5">
        <div
            class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
                <h3 class="m-0">Assign Promotions</h3>

            </nav>
            <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="./index.html">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Assign Promotions</li>
                </ol>
            </div>
        </div>
    </div> <!-- / Breadcrumbs-->


    <section class="container-fluid">

        <div class="card">
            <div class="card-header">
                @include('admin.common.alerts')
                <div class="row">
                    <div class="col-md-6">
                      
                    </div>
                    <div class="col-md-6" style="float:right;">
                        <form action="{{route('promotions.assignUI')}}" method="get">
                            <div class="input-group">
                                <input type="search" class="form-control" name="searchKey" placeholder="Hamper Name"
                                    value="{{$searchKey}}">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
            <div class="card-body">
                <div class="row overflow-auto">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Product Image</th>
                                    <th>Product Name</th>                                     
                                    <th>Total Item Price ({{$commonContent['currencySymbol']->description}})</th>
                                    <th>Selling Price ({{$commonContent['currencySymbol']->description}})</th>
                                    <th>Packing Cost ({{$commonContent['currencySymbol']->description}})</th>
                                    <th>Weight (kg)</th>                                    
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product )
                                <tr>
                                    <td>
                                        @if (sizeof($product->images) > 0)
                                        <img src="{{asset($product->images[0]->src)}}" style="width:80px;" alt="{{$product->product_name}}"/>
                                       @endif
                                    </td>
                                    <td>
                                        {{$product->product_name}}<br/><br/>
                                
                                        @if ($product->status == 1)
                                            <span class="badge bg-success">Active</span> 
                                        @else
                                            <span class="badge bg-danger">Inactive</span>  
                                        @endif
                                        
                                       
                                    </td>
                                  
                                    <td>{{$product->unit_price}}</td>
                                    <td>{{$product->selling_price}}</td>
                                    <td>{{$product->packing_cost}}</td>
                                    <td>{{$product->weight}} {{$product->weight_unit}}</td>
                                    
                                    <td>

                                        @if (Auth::user()->hasPermission('assign_promotions'))

                                        @include('admin.promotions_and_discounts.components.assign_promotion_modal')

                                        @if ($product->promotion_id != null)
                                        @include('admin.promotions_and_discounts.components.remove_assigned_promotion')
                                        @endif

                                        @endif

                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <div class="d-felx justify-content-center">

                    {{$products->links()}}

                </div>
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </section>
</div>

@endsection


