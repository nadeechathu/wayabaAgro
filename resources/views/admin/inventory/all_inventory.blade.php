@extends('admin.layouts.app')

@section('content')
<div>
    <!-- Breadcrumbs-->
    <div class="bg-white border-bottom py-3 mb-5">
        <div
            class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
                <h3 class="m-0">Manage Product Inventory</h3>

            </nav>
            <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="./index.html">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Manage Product Inventory</li>
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
                      <button type="button" onClick="downloadInventoryReport()" class="btn btn-danger btn-sm text-white" name="download" value="1"><i class="fas fa-download"></i> Download</button>
                    </div>
                    <div class="col-md-6" style="float:right;">
                    <form action="{{route('inventory.all')}}" method="get" id="search-form">
                            <div class="input-group" id="search-div">
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
                                    <th>Status</th>
                                    <th>Product Code</th>
                                    <th>Inventory Status</th>
                                    <th>Available Quantity</th>
                                    <th>Reserved Quantity</th>
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
                                            <td>{{$product->product_name}}</td>
                                            <td>{{$variant->variant_name}}</td>
                                            <td>
                                                @if($variant->status == 1)
                                                <span class="badge bg-success">Active</span>
                                                @else
                                                <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>{{$product->product_code}}</td>
                                            <td>
                                                @if ($variant->inventory->master_quantity > 0)

                                                
                                                <span class="badge bg-success">In stock</span>
                                                @else
                                                <span class="badge bg-danger">Out of stock</span>
                                                
                                                    
                                                @endif
                                            </td>
                                            <td>{{$variant->inventory->master_quantity}}</td>
                                            <td>{{$variant->inventory->reserved_quantity}}</td>
                                            
                                            <td>

                                            @if (Auth::user()->hasPermission('update_inventory'))
                                            @include('admin.inventory.components.update_inventory')
                                            @endif
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

@section('scripts')
<script>
    function downloadInventoryReport(){

    $('#search-div').append('<input type="text" id="download-flag" name="download" value="1"/>');
    $('#search-form').submit();

    $('#download-flag').remove();


    }
</script>
@endsection