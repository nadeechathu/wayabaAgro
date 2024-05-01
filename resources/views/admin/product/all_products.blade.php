@extends('admin.layouts.app')

@section('content')
<div>
    <!-- Breadcrumbs-->
    <div class="bg-white border-bottom py-3 mb-5">
        <div
            class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
                <h3 class="m-0">Manage Products</h3>

            </nav>
            <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="./index.html">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Manage Products</li>
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
                       {{--  @if (Auth::user()->hasPermission('add_products'))

                        @include('admin.product.components.new_product_modal')

                        @endif --}}
                    </div>
                    <div class="col-md-6" style="float:right;">
                        <form action="{{route('products.all')}}" method="get">
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
                                    <th>Product Code</th>
                                    <th>Status</th>
                                    <th style="width:80px;">Brand</th>
                                    <th style="width:100px;">Rating</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product )
                                <tr>
                                    <td>
                                       @if (sizeof($product->images) > 0)
                                        <img src="{{asset($product->images[0]->src)}}" style="width:70px;" alt="{{$product->images[0]->alt_text}}"/>
                                       @endif
                                    </td>
                                    <td>
                                        {{$product->product_name}}<br/>                                       
                                        
                                        @if($product->new_arrival == 1)
                                        <span class="badge bg-danger">New</span>
                                        @endif

                                    </td>
                                   
                                    <td>{{$product->product_code}}</td>
                                    <td>
                                        @if($product->status == 1)
                                        <span class="badge bg-success">Active</span>
                                        @else
                                        <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>{{$product->brand != null ? $product->brand->brand_name : '-'}}</td>
                                    <td>
                                    @php
                                    $emptyStars = 5 - $product->product_rating;
                                    
                                    for ($x = 0; $x < $product->product_rating; $x++) {
                                    
                                        echo '<i class="fa fa-star text-warning"></i>';
                                    }

                                    for ($x = 0; $x < $emptyStars; $x++) {
                                        echo '<i class="fa fa-star text-muted"></i>';
                                    }

                                    @endphp  
                                    </td>
                                 
                                    <td>
                                       
                                        @include('admin.product.components.view_product_descriptioin_modal')
                                        @if (Auth::user()->hasPermission('edit_products'))

                                        <a href="{{route('products.editProduct',$product->id)}}">
                                        <button class="btn btn-info btn-sm text-white" type="button">
                                        <i class="fas fa-edit"></i> Edit
                                        </button>
                                        </a>


                                        @include('admin.product.components.activate_deactivate')

                                        @endif

                                        @if (Auth::user()->hasPermission('delete_products'))

                                        @include('admin.product.components.remove_product_modal')

                                        @endif

                                        @include('admin.product.components.related_products')

                                        <a href="{{route('products.reviews.all',$product->id)}}">
                                        <button class="btn btn-primary btn-sm" type="button">
                                            <i class="fa fa-star"></i> Reviews
                                        </button>
                                        </a>

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