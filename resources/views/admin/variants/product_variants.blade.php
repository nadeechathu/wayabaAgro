@extends('admin.layouts.app')

@section('content')
<div>
    <!-- Breadcrumbs-->
    <div class="bg-white border-bottom py-3 mb-5">
        <div
            class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
                <h3 class="m-0">Manage Product Variants</h3>

            </nav>
            <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="./index.html">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Manage Product Variants</li>
                </ol>
            </div>
        </div>
    </div> <!-- / Breadcrumbs-->


    <section class="container-fluid">

        <div class="card">
            <div class="card-header">
                @include('admin.common.alerts')
                <form action="{{route('products.variants.all')}}" id="search-form" method="get">
                <div class="row">
                    
                    <div class="col-md-6">
                       <div class="form-group">
                           <label for="select-product">Select Product</label>
                           <select name="selected_product" class="form-control" id="selected_product" onChange="document.getElementById('search-form').submit();">
                               <option value="">--- select ---</option>
                               @foreach ($products as $product_rec)
                                   <option {{$product_rec->id == $selectedProduct ? 'selected':''}} value="{{$product_rec->id}}">{{$product_rec->product_name}}</option>
                               @endforeach
                           </select>
                       </div>
                    </div>
                    <div class="col-md-6" style="float:right;">
                        <br>
                            <div class="input-group">
                                <label for="search">&nbsp;</label>
                                <input type="search" class="form-control" name="searchKey" placeholder="Variant Name"
                                    value="{{$searchKey}}">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        
                    </div>


                </div>
                </form>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                       @if ($selectedProduct != null)
                           @include('admin.variants.components.new_variant_modal')
                       @endif
                    </div>
                </div><br>
                <div class="row overflow-auto">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Variant Name</th>
                                    <th>Bulk Minimum Qty</th>
                                    <th>Bulk Unit Price ({{$commonContent['currencySymbol']['description']}})</th>
                                    <th>Unit Price ({{$commonContent['currencySymbol']['description']}})</th>
                                    <th>Packing Cost ({{$commonContent['currencySymbol']['description']}})</th>
                                    <th>Selling Price ({{$commonContent['currencySymbol']['description']}})</th>
                                    <th>Weight </th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                            @if ($product != null)

                            @foreach ($variants as $variant)

                            <tr>
                                <td>
                                       @if (sizeof($product->images) > 0)
                                        <img src="{{asset($product->images[0]->src)}}" style="width:70px;" alt="{{$product->images[0]->alt_text}}"/>
                                       @endif
                                </td>
                                <td>
                                    {{$variant->variant_name}} <br>
                                        @if($variant->status == 1)
                                        <span class="badge bg-success">Active</span>
                                        @else
                                        <span class="badge bg-danger">Inactive</span>
                                        @endif
                                </td>
                                <td>{{$variant->bulk_quantity}}</td>
                                <td>{{number_format($variant->bulk_price,2)}}</td>
                                <td>{{number_format($variant->unit_price,2)}}</td>
                                <td>{{number_format($variant->packing_cost,2)}}</td>
                                <td>{{number_format($variant->selling_price,2)}}</td>                                
                                <td>{{number_format($variant->weight,0)}}</td>
                                <td>
                                    @include('admin.variants.components.edit_variant_modal')
                                    @include('admin.variants.components.activate_deactivate')
                                    @include('admin.variants.components.remove_variant_modal')
                                </td>
                            </tr>
                                
                            @endforeach
                                
                            @endif
                               
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <div class="d-felx justify-content-center">

                    

                </div>
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </section>
</div>

@endsection