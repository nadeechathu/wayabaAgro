@extends('admin.layouts.app')

@section('content')
<div>
    <!-- Breadcrumbs-->
    <div class="bg-white border-bottom py-3 mb-5">
        <div
            class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
                <h3 class="m-0">Product Inventory History</h3>

            </nav>
            <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item"><a href="#">Inventory</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product Inventory History</li>
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
                        <form action="{{route('inventory.history.product')}}" method="get">
                            <div class="input-group">
                                <input type="search" class="form-control" name="searchKey" placeholder="Product Name"
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
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Variant Name</th>
                                    <th>Product Code</th>
                                    <th>Unit Price ({{$commonContent['currencySymbol']['description']}})</th>
                                    <th>Selling Price ({{$commonContent['currencySymbol']['description']}})</th>
                                    <th>Weight</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product )

                                    @foreach ($product->variants as $variant)

                                    <tr>
                                        <td>
                                        @if (sizeof($product->images) > 0)
                                            <img src="{{asset($product->images[0]->src)}}" style="width:70px;" alt="{{$product->images[0]->alt_text}}"/>
                                        @endif
                                        </td>
                                        <td>
                                            {{$product->product_name}}<br/>
                                            @if($product->status == 1)
                                            <span class="badge bg-success">Active</span>
                                            @else
                                            <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>{{$variant->variant_name}}</td>
                                        <td>{{$product->product_code}}</td>
                                        <td>{{$variant->unit_price}}</td>
                                        <td>{{$variant->selling_price}}</td>
                                        <td>{{$variant->weight}} {{$product->weight_unit}}</td>
                                    
                                        <td>

                                        @include('admin.inventory.components.product_inventory_history_modal')
                                            
                                        </td>
                                    </tr>
                                        
                                    @endforeach
                               
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