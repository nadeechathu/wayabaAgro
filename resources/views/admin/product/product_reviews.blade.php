@extends('admin.layouts.app')

@section('content')
<div>
    <!-- Breadcrumbs-->
    <div class="bg-white border-bottom py-3 mb-5">
        <div
            class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
                <h3 class="m-0">{{$product->product_name}} Customer Reviews</h3>

            </nav>
            <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Reviews</li>
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
                      <a href="{{route('products.all')}}">
                       <button class="btn btn-primary btn-sm" type="button"> <i class="fa fa-arrow-circle-left"></i> All Products</button>
                       </a>
                    </div>
                    <div class="col-md-6" style="float:right;">
                        <form action="{{route('products.reviews.all',$product->id)}}" method="get">
                            <div class="input-group">
                                <input type="search" class="form-control" name="searchKey" placeholder="Customer Name"
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
                                    <th>Customer</th>
                                    <th>Reviewed Date</th>
                                    <th>Review Rating</th>
                                    <th>Review Description</th>
                                    <th>Review Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reviews as $review )
                                <tr>
                                   <td>{{$review->customer != null ? $review->customer->first_name.' '.$review->customer->last_name :''}}</td>
                                   <td>{{$review->created_at}}</td>
                                   <td>
                                   @php
                                        $emptyStars = 5 - $review->review_rating;
                                        
                                        for ($x = 0; $x < $review->review_rating; $x++) {
                                        
                                            echo '<i class="fa fa-star text-warning"></i>';
                                        }

                                        for ($x = 0; $x < $emptyStars; $x++) {
                                            echo '<i class="fa fa-star text-muted"></i>';
                                        }

                                    @endphp
                                   </td>
                                   <td>
                                       @include('admin.product.components.view_review')
                                   </td>
                                   <td>
                                       @if ($review->review_status == 0)
                                       <span class="badge bg-danger">Hidden</span>
                                       @else
                                       <span class="badge bg-success">Visible</span>                                           
                                       @endif
                                   </td>
                                   <td>
                                   @if (Auth::user()->hasPermission('change_review_status'))
                                          @include('admin.product.components.activate_deactivate_reviews')
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

                    {{$reviews->links()}}

                </div>
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </section>
</div>

@endsection

