

<div class="container-fluid featured-product-sec py-5" >
    <div class="container">
        <div class="row">

<div class="col-lg-3 col-sm-5 col-8">
    <h2 class="font-36 green-text font-Nerko">Export Products</h2>
</div>
<div class="col-lg-6 col-sm-4 d-none  d-sm-block">
    <img src="{{ asset('/images/frontend/images/header-icon.png') }}" class="d-block ml-50"
    alt="Wayamba Agro Exports Co. (Pvt) Ltd.">
</div>
<div class="col-lg-3 col-sm-3 col-4 text-end ">
<a href="{{ url('shop') }}"  class="font-18 font-Asap fw-bolder black-text show-tag">Show all</a>
</div>
            
        </div>

        <div class="row owl-carousel owlCarousel1 pt-5">

            
            @foreach ($featured_products as $product)
         
            @if(sizeof($product->variants) > 0)
            <div class=" text-center">            
              @include('frontend.products.product_card_view_exports')                       
            </div>

            @endif

            

            @endforeach

          
          
         
            
        </div>
        </div>
        </div>

