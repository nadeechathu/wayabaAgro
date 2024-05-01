@extends('frontend.app')
@section('content')

<!-- Breadcrumbs-->
<div class="container-fluid breadcrumb-bgColor">
    <div class="container">
       <div class="row">
          <!-- Breadcrumbs-->
          <div class="col-12  py-3">
             <div class="d-flex justify-content-start align-items-center ">
                <ol class="breadcrumb m-0">
                   <li class="breadcrumb-item"><a class="breadcrumb-home" href="{{ url('/') }}">Home</a></li>
                   <li class="breadcrumb-item active breadcrumb-active" aria-current="page">Stock Clearance</li>
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

         <div class="col-12">
          <div class="row">
            <div class="col-md-7">
                <h2 class="haeding-h2 fw-bold">Stock Clearance Sale</h2>   
            </div>
            <div class="col-md-5 pb-4">

                       <form action="{{route('web.stock.clearance')}}" method="get">
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

         
        
         <div class="col-lg-12">

            <div class="row">
               @if (isset($products))
               @if (sizeof($products) > 0)
               @foreach ($products as $product)
                     @if (sizeof($product->variants) > 0)
                        @include('frontend.products.product_card_view')
                     @endif
               @endforeach
              
            </div>
         </div>
      </div>
      @endif
      @else
      No records found.
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
