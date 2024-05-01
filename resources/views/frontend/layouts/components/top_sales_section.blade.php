

<div class="container-fluid top-sale-sec py-4" >
    <div class="container">
        <div class="row">

<div class="col-lg-3 col-sm-4 col-8">
    <h2 class="font-36 green-text font-Nerko">Top Sale Products</h2>
</div>
<div class="col-lg-9 col-sm-8 col-3 d-none d-sm-block">
    <img src="{{ asset('/images/frontend/images/header-icon.png') }}" class="d-block ml-50 res-image"
    alt="Wayamba Agro Exports Co. (Pvt) Ltd.">
</div>

            
        </div>

        <div class="row ">
          

          @foreach ($new_products as $product)
          @if(sizeof($product->variants) > 0)
          <div class="col-lg-3 col-sm-3 col-7 text-center mt-4 mx-auto-mobile">
            
            @include('frontend.products.product_card_view')
         
          </div>
          @endif
            @endforeach

            
        </div>
        </div>
        </div>

