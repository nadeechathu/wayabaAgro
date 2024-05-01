<div class="row">
    @foreach ($customer->wishlist as $wishlistItem)
        @php
            $product = $wishlistItem->product;
            $wishlist = 1;
        @endphp
  @if(sizeof($product->variants) > 0)
<div class="col-lg-4 col-sm-4 col-12">

    @include('frontend.products.product_card_view')

</div>
    

        @endif 
    @endforeach
</div>