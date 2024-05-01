@extends('frontend.app')
@include('frontend.common.seo_fields')
@section('content')
{{-- <section>
    <img class="img-fluid" src="{{ asset('images/frontend/images/banner-1.png') }}" alt="shop banner">
</section> --}}
<!-- Breadcrumbs-->
<div class="container-fluid breadcrumb-bgColor">
    <div class="container">
       <div class="row">
          <!-- Breadcrumbs-->
          <div class="col-12  py-3">
             <div class="d-flex justify-content-start align-items-center ">
                <ol class="breadcrumb m-0">
                   <li class="breadcrumb-item"><a class="breadcrumb-home" href="{{ url('/') }}">Home</a></li>
                   <li class="breadcrumb-item"><a class="breadcrumb-home" href="{{ url('/shop/categories') }}">Shop Categories</a></li>
                   <li class="breadcrumb-item active breadcrumb-active" aria-current="page">{{$product_category->child_category_name}}</li>
                </ol>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- / Breadcrumbs-->



<section class="container-fluid">
    <!-- Header banner -->


    <!-- End Header banner -->
    <!-- Product Content -->
    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

           <div class="col-lg-3">
               @include('frontend.categories.components.category_sidebar')
           
               </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="list-inline shop-top-menu pb-3 pt-1">
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">All Products For {{$product_category->child_category_name}}</a>
                            </li>


                        </ul>
                    </div>

                </div>
                <div class="row">
                <div class="col-md-6 pb-4"></div>
                <div class="col-md-6 pb-4">

                        <form action="{{route('web.category',$product_category->slug)}}" method="get">
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
                <div class="row">

                        @if (sizeof($products) > 0)

                            @foreach ($products as $product)
                                @if (sizeof($product->variants) > 0)
                                    @include('frontend.products.product_card_view')
                                @endif

                            @endforeach

                        @else

                        <h6>No records found.</h6>

                        @endif





                </div>
                <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
                       {{$products->links()}}
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- Product Content -->
</section>

@endsection
