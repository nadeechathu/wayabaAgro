@extends('frontend.app')
@section('content')
    <!-- Breadcrumbs-->
    {{-- <div class="container-fluid breadcrumb-bgColor">
    <div class="container">
       <div class="row">
          <!-- Breadcrumbs-->
          <div class="col-12  py-3">
             <div class="d-flex justify-content-start align-items-center ">
                <ol class="breadcrumb m-0">
                   <li class="breadcrumb-item"><a class="breadcrumb-home" href="{{ url('/') }}">Home</a></li>
                   <li class="breadcrumb-item active breadcrumb-active" aria-current="page">Shop</li>
                </ol>
             </div>
          </div>
       </div>
    </div>
 </div> --}}
    <!-- / Breadcrumbs-->


    {{-- <section class="container-fluid">
   <!-- Header banner -->
   <!-- End Header banner -->
   <!-- Product Content -->
   <!-- Start Content -->
   <div class="container py-5">
      <div class="row">

         <div class="col-12">
          <div class="row">
            <div class="col-md-3">
                <h2 class="haeding-h2 fw-bold">Shop</h2>
            </div>
            <div class="col-md-4 pb-4"></div>
            <div class="col-md-5 pb-4">

                       <form action="{{route('web.shop')}}" method="get">
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
         <div class="col-lg-3">
            @include('frontend.categories.components.category_sidebar')

         </div>


         <div class="col-lg-9">

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

</section> --}}


    <div class="container-fluid shop-sec  padding-10em">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3 bg-gray-inner p-3">
               
                  
<div class="sidebar">
    <h3 class="font-Asap font-22 pb-2 fw-bolder black-text"> Product Categories</h3>
  
    <select onChange="setSelectedCategory()" id="category-selector" class="form-select mb-3 border-0 rounded-0 font-15 font-Asap fw-normal text-dark change-select bg-white" aria-label="Default select example">
        <option value=""> --- Select --- </option>
      @foreach ($categories as $category)
   
      <option {{$category->id == $selectedCategory ? 'selected':''}} value="{{ $category->id}}">{{ $category->category_name}}</option>
  
      @endforeach
    
    </select>
  
    <h3 class="font-Asap font-22 pb-2 fw-bolder black-text">Brands</h3>
  
    <select onChange="setSelectedBrand()" id="brand-selector" class="form-select mb-3 border-0 rounded-0 font-15 font-Asap fw-normal text-dark change-select bg-white" aria-label="Default select example">
        <option value=""> --- Select --- </option>
        @foreach ($brands as $brand)
  
  
      <option {{$brand->id == $selectedBrand ? 'selected':''}} value="{{ $brand->id}}">{{ $brand->brand_name}}</option>
  
      @endforeach
    </select>

   <div class="row">
    <div class="col-12 text-end pt-3">
        <button class="form-class font-15 text-white fw-normal rounded-pill green-bg py-2 border border-success border-2 border-success border-2 w-50  py-2" onclick="filterBtn()" type="submit">Filter</button>
    </div>
   </div>


  </div>
  
    
  
  
  
  
  
  
  
  
  

                 
                </div>
                <div class="col-lg-9">
                    <div class="row justify-content-end">
                        <div class="col-lg-5 col-sm-6 col-9 text-end pt-lg-0 pt-4">
                            <form action="{{ route('web.shop') }}" method="get" id="filter-form">
                                <div class="input-group">
                                    <input type="search"
                                        class="form-control rounded-pill border border-success border-2 text-center font-15 font-Asap fw-normal"
                                        name="searchKey" placeholder="Product Name" value="{{ $searchKey }}">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search font-18 green-light"></i>
                                        </button>
                                    </div>
                                </div>
                                <input type="text" name="selected_category" id="selected-category" hidden value="" >
                              
                                <input type="text" name="selected_brand" id="selected-brand" hidden value="" >
                            </form>
                        </div>
                    </div>



                    <div class="row pt-4 px-2">
                      
                   

                           @if (sizeof($products) > 0)

                           @foreach ($products as $product)
                           @if (sizeof($product->variants) > 0)
                           <div class="col-lg-4 col-sm-4 col-12 pb-3 text-center  mx-auto-mobile">
                            @if(sizeof($product->variants) > 0) 
                            @include('frontend.products.product_card_view')
                              @endif
                           </div>
                           @endif
                           @endforeach
                  


                        @else
                     <div class="col-12 text-center">
                        <h2 class="font-Nerko font-22 pb-1  black-text">No records found.</h2>
                     </div>
                        @endif
                     </div>


                    <div div="row">
                  <div class="col-12">
                     <ul class="pagination pagination-lg justify-content-end">
                        {{$products->links()}}
                     </ul>
                  </div>
                 </div>




                </div>


            </div>
        </div>
    </div>
@endsection


<script>
    function setSelectedCategory(){
           
          let  categoryVal = document.getElementById("category-selector").value;        
           document.getElementById("selected-category").value = categoryVal ;    

           
    }

    function setSelectedBrand(){
           
   
            let brandVal = document.getElementById("brand-selector").value;
 
            document.getElementById("selected-brand" ).value = brandVal ;
 
            
     }


     function filterBtn(){
        document.getElementById('filter-form').submit();


     }


</script>



