<div class="container-fluid treading-product-sec pt-5 pb-3">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-sm-6">
                <h2 class="font-36 green-text font-Nerko">Trending Products</h2>
            </div>
            <div class="col-lg-9 col-sm-6 d-none d-sm-block">
                <img src="{{ asset('/images/frontend/images/header-icon.png') }}" class="d-block ml-50"  alt="Wayamba Agro Exports Co. (Pvt) Ltd">
            </div>


        </div>

        <div class="row ">

            @foreach ($treading_products as $product)
            @if(sizeof($product->variants) > 0)
            <div class="col-lg-3 col-sm-3 col-7 text-center pt-5 mx-auto-mobile">              
                @include('frontend.products.product_card_view')
                
            </div>
            @endif

            @endforeach




        </div>
        <div class="row">
            <div class="col-12 text-center pt-lg-5 pt-sm-4 pt-3">
                <button class=" rounded-pill font-30 font-Asap border border-danger py-2 border-1 fw-bolder w-25 text-black bg-white mt-3 hover-btn btn-mobile"  onclick="window.location='{{ url('shop') }}' ">Shop More</button>
            
           

            </div>
        </div>
    </div>
</div>
