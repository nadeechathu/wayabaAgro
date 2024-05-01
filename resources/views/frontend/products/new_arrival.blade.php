@php
   $product_price = $product->variants[0]->selling_price;
   $discounted_price = $product->variants[0]->selling_price;
   $variant_id = $product->variants[0]->id;
   $promotion_tag = null;

   if($product->promotion != null){

      if($product->promotion->discount_type == 0){
         $discounted_price = $product_price - $product->promotion->discount;
      }else{
         $discounted_price = $product_price - ($product_price * $product->promotion->discount / 100);
      }

      $promotion_tag = $product->promotion->promotion_tag;
   }


@endphp
@section('css')
<style>
   
   .product {
     
     position: relative;
   }
   
   .new {
     background: red;
     color: white;
     padding: 5px;
     text-transform: uppercase;
     position: absolute;
     top: 2px;
     z-index: 2;
     
     
    
   }
   </style>
@endsection




<div class="col-lg-3 col-sm-3 col-12 text-center product-card-view" id="{{'product-card-view'.$product->id}}">
   @isset($wishlist)

   <button class="btn btn-danger remove_from_wishlist" onClick="removeWishlistItem({{$product->id}})" type="button" style="width:100%">Remove From Wishlist</button>
   @endisset
                  <a href="{{route('web.shop.product',['slug' => $product->slug])}}">
                     <div id="item-wrapper-{{ $product->id }}" class="card mb-4 product-wap rounded-0 item-wrapper  ">
                        <div class="card rounded-0 product">

                              @if ($product->new_arrival == 1)
                              <!-- <span class="new">New</span> -->
                              @endif
                            @if ($product->featuredImage != null)

                            <img id="product-image" class="card-img rounded-0 img-fluid" src="{{ asset($product->featuredImage->src) }}">

                            @else

                            @if(sizeof($product->images) > 0)
                            <img id="product-image" class="card-img rounded-0 img-fluid" src="{{ asset($product->images[0]->src) }}">

                            @endif

                            @endif
                           <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">

                           </div>




                        </div>

                        <div class="card-body">
                           <input type="hidden" value="{{$product->categories->child_category_name}}">
                           <div class="row  product-title">
                  <a href="{{route('web.shop.product',['slug' => $product->slug])}}" class="fs-5 fw-bolder text-decoration-none font-red-hat product-name">{{$product->product_name}}


                  @if ($promotion_tag != null)
                  - <span class="badge bg-danger">{{$promotion_tag}}</span>
                  @endif
                  </a></div>
                  <!-- <span id="product-category" class="summary-total  fw-noraml main-font-family">{{$product->categories->child_category_name}}</span> -->

                  <div class="row">
                    <p class="text-center mb-0 item-price text-uppercase font-red-hat fw-bolder my-2 fs-5 text-right">
                    @if ($discounted_price != $product_price)
                  <span class="text-muted text-decoration-line-through fs-6 fw-normal font-red-hat">{{$commonContent['currencySymbol']['description']}} {{number_format($product_price,2)}}</span> &nbsp;
                  @endif
                  {{$commonContent['currencySymbol']['description']}} {{number_format($discounted_price,2)}}</p>

                  <input type="hidden" id="product-unit-price" class="fs-6 fw-normal font-red-hat" value="{{$product->unit_price * (100 - $product->discount)/100}}">
                  </div>

                  <ul class="list-unstyled d-flex justify-content-center mb-0 pb-3">
                    <li>
                   {{-- @php
                     $emptyStars = 5 - $product->product_rating;
                     
                     for ($x = 0; $x < $product->product_rating; $x++) {
                     
                        echo '<i class="fa fa-star text-warning"></i>';
                     }

                     for ($x = 0; $x < $emptyStars; $x++) {
                        echo '<i class="fa fa-star text-muted"></i>';
                     }

                     @endphp  --}}
                    
                    
                    </li>
                    </ul>
                  <div class="text-center">
                     @if ($product->inventory->master_quantity > 0)
                     <!-- <button title="{{ $product->id }}" product-name="{{$product->product_name}}" class="btn btn-outline-dark mt-auto btn-add-to-cart">Shop Now</button> -->
                     <button title="{{ $product->id }}" variant-id="{{$variant_id}}" product-name="{{$product->product_name}}" class="btn  mt-auto btn-add-to-cart "><a href="" class="hlink">Shop Now</a></button>

                     @else

                     <button type="button" class="btn btn-danger out-of-stock-btn">OUT OF STOCK</button>

                     @endif
                  </div>
                  </div>
                  </div>
                  </a>
               </div>
