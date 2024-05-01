@extends('frontend.app')

@section('content')

<!-- <div class="container-fluid breadcrumb-bgColor">
    <div class="container">
       <div class="row">
      
          <div class="col-12  py-3">
             <div class="d-flex justify-content-start align-items-center">
                <ol class="breadcrumb m-0">
                   <li class="breadcrumb-item"><a class="breadcrumb-home" href="{{ url('/') }}">Home</a></li>
                   <li class="breadcrumb-item active breadcrumb-active" aria-current="page">
                    {{$product->product_name}}</li>
                </ol>
             </div>
          </div>
       </div>
    </div>
 </div> -->
 <!-- / Breadcrumbs-->



@php
   $product_price = $product->variants[0]->selling_price;
   $discounted_price = $product->variants[0]->selling_price;
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
<section class="container-fluid">
   <!-- Header banner -->
   <!-- End Header banner -->
   <!-- Product Content -->
   <!-- Start Content -->
   <div class=" py-5">
        <div class="row font-red-hat">
           <div class="col-lg-1"></div>
         <div class="col-lg-10">


            <!-- <h2 class="haeding-h2 fw-bold pb-2">{{$product->product_name}}</h2> -->
            <div class="row">
               <div class="col-md-6">

               <div class = "product-imgs">
      <div class = "img-display">
        <div class = "img-showcase">
           @foreach ($product->images as $image)
            <img class="image-preview-js" src = "{{asset($image->src)}}" alt = "{{$image->alt_text}}">
           @endforeach
         
        </div>
      </div>
      <div class = "img-select">
         @php
            $count = 1;
         @endphp
            @foreach ($product->images as $image)
               <div class = "img-item">
                  <a href = "#" data-id = "{{$count}}">
                     <img class="product-lower-images" src = "{{asset($image->src)}}" alt = "{{$image->alt_text}}">
                  </a>
               </div>
               @php
                  $count++;
               @endphp
           @endforeach
        
      </div>
    </div>
                




               </div>
               <div class="col-md-6">
                  <h4 class="text-uppercase fw-bold single-pro-title">{{$product->product_name}}
                  @if ($product->promotion != null)
                  @if ($product->promotion->promotion_tag != null)
                  - <span class="badge bg-danger">{{$product->promotion->promotion_tag}}</span>
                  @endif
               @endif
                  </h4>
                  <h3>
                  @if ($discounted_price != $product_price)
                     <span class="text-muted text-decoration-line-through">{{$commonContent['currencySymbol']['description']}} <span id="product-price-span">{{number_format($product_price,2)}}</span></span>
                     @endif
                     {{$commonContent['currencySymbol']['description']}} <span id="discounted-price-span">{{number_format($discounted_price ,2)}}</span></p>
                  </h3>
                  <div class="rating-div">
                     @php
                     $emptyStars = 5 - $product->product_rating;
                     
                     for ($x = 0; $x < $product->product_rating; $x++) {
                     
                        echo '<i class="fa fa-star text-warning"></i>';
                     }

                     for ($x = 0; $x < $emptyStars; $x++) {
                        echo '<i class="fa fa-star text-muted"></i>';
                     }

                     @endphp  
                    
                     @if(Auth::user() != null)
                     
                     @include('frontend.products.components.add_review_modal')

                     @endif
                  </div>
                  @if ($product->promotion != null)
                  @if ($product->promotion->type == 1 or $product->promotion->type == 2)
                  <div class="row">
                     <div class="col-md-12">                    
                           @include('frontend.common.countdown')                      
                           
                     </div>
                  </div>
                  @endif
                  @endif
                  <br/>
                  <p>
                     <b>Categories :</b>
                     
                     <a href="{{route('web.category',$product->categories->slug)}}"> {{$product->categories->child_category_name}} </a>
                     <br/>
                     <b>Availability :</b>
                     <span id="inventory-badge" class="badge {{$product->variants[0]->inventory->master_quantity > 0 ? 'bg-success':'bg-danger'}}">
                     {{$product->variants[0]->inventory->master_quantity > 0 ? 'In Stock':'Out of Stock'}}
                     </span>
                    
                  </p>
                  <p>
                     <b>Product Weight :</b> <span id="product-weight-span">{{$product->weight}}</span> kg<br/>
                     <b>Min Order Limit :</b> 1
                  </p>
                  <div class="row">
                     <div class="col-md-12">
                     {!!$product->short_description!!}
                     </div>
                     <div class="col-md-12">
                     {!! $shareComponent !!}
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-5">
                        <div class="form-group">
                           <label for="variant">Select Your Variant :</label>
                           <select name="variant_id" id="single-pro-variant-id" class="form-control" onChange="getVariantDetails()">
                                 <option value="Select Variant">Select Variant</option>
                                 @foreach ($product->variants as $variant)
                                 <option value="{{$variant->id}}">{{$variant->variant_name}}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                  </div><br>
                  <div class="row">
                     <div class="col-md-3">
                     <label for="variant">Quantity :</label>
                     @if ($product->inventory->master_quantity > 0)
                        <input type="number" min="1" class="form-control" name="quantity" onChange="checkProductQuantity({{$product->id}})" value="1" id="single-product-quantity"/>
                        @endif
                     </div>
                     <div class="col-md-9">
                     <p class="text-danger" id="quantity-error"></p>

                     </div>
                  </div>

                  &nbsp;
                  <div class="row">
                  <div class="col-md-8">

                     @if ($product->inventory->master_quantity > 0)
                        <button title="{{$product->id}}" id="single-product-page" class="btn btn-primary text-white btn-add-to-cart"><i class="fas fa-shopping-cart"></i> Add To Cart</button>&nbsp;
                        
                        @else
                        @include('frontend.products.components.preorder_section')
                        @endif

                        @if (Auth::user())

                        <button class="btn btn-danger text-white add_to_wishlist"><i class="fas fa-heart"></i> Add to Wishlist </button>
                        <input type="text" hidden id="wishlist_user_id" value="{{Auth::user()->id}}">
                        <input type="text" hidden id="wishlist_product_id" value="{{$product->id}}">
                        @endif


                     </div>
                  </div>
                  @if ($product->inventory->master_quantity == 0)
                  <div class="row">
                     <div class="col-md-8">
                        <p class="text-danger">Note : Currently this product is out of stock</p>
                     </div>
                  </div>
                  @endif

               </div>
            </div>
            &nbsp;
            <div>
               <div>
                  <div class="tab">
                     <button class="tablinks" onclick="openTab(event, 'description')">Description</button>
                     <button class="tablinks active" onclick="openTab(event, 'reviews')">Reviews</button>
                     {{-- <button class="tablinks" onclick="openCity(event, 'use')">How To Use</button> --}}
                  </div>
                  <div id="description" class="tabcontent ">
                     <p>{!!$product->product_description!!}</p>
                  </div>
                  
                </div>
                <div id="reviews" class="tabcontent active" style="display:block;">
                     
                     @include('frontend.products.components.reviews')
                </div>
                  <!-- <div id="use" class="tabcontent">
                     <h4>How To Use</h4>
                     <p>content goes here</p>
                     </div> -->
               </div>
            </div>
            @include('frontend.products.related_products')
         </div>
         <div class="col-lg-1"></div>
      </div>
   </div>
   <!-- Product Content -->
</section>


@endsection

@section('scripts')
<script>
     const imgs = document.querySelectorAll('.img-select a');
      const imgBtns = [...imgs];
      let imgId = 1;

      imgBtns.forEach((imgItem) => {
         imgItem.addEventListener('click', (event) => {
            event.preventDefault();
            imgId = imgItem.dataset.id;
            slideImage();
         });
      });

      function slideImage(){
         const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

         document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
      }

window.addEventListener('resize', slideImage);
   function openTab(evt, cityName) {
      console.log("fjdhjhfd");
     var i, tabcontent, tablinks;
     tabcontent = document.getElementsByClassName("tabcontent");
     for (i = 0; i < tabcontent.length; i++) {
       tabcontent[i].style.display = "none";
     }
     tablinks = document.getElementsByClassName("tablinks");
     for (i = 0; i < tablinks.length; i++) {
       tablinks[i].className = tablinks[i].className.replace(" active", "");
     }
     document.getElementById(cityName).style.display = "block";
     evt.currentTarget.className += " active";
   }

   function checkProductQuantity(productId){

      let requestedQtyElm = document.getElementById('single-product-quantity');
      let requestedQty = requestedQtyElm.value;
      let qtyErrorElm = document.getElementById('quantity-error');
      let variantId = document.getElementById('single-pro-variant-id').value;
      console.log('qty res el ===> ',qtyErrorElm);
      qtyErrorElm.html='';

      $.ajax({
                type: "post",
                url: "{{ route('web.check.quantity') }}",
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
                data: {

                    productId: productId,
                    variantId: variantId,
                    requestedQty: requestedQty
                },
                success: function(res) {

                    if(!res.status){
                        toastr.error(res.message);
                        requestedQtyElm.value = res.qty
                        qtyErrorElm.innerHTML = res.message;

                    }


                },
                error: function(data) {
                    // console.log('Error:', data);
                    toastr.error(data);
                }
            });

   }

   function getVariantDetails(){

      let variantId = document.getElementById('single-pro-variant-id').value;

      $.ajax({
         type: "post",
         url: "{{ route('web.variantData.get') }}",
         headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
         data: {
            variantId:variantId,
            productId:'{{$product->id}}'
         },
         success:function(res){

            if(res.status){

               let inventoryBadge = document.getElementById('inventory-badge');
               if(res.variant.inventory.master_quantity <= 0){
                  document.getElementById('single-product-quantity').style.display='none';
                  document.getElementById('single-product-page').style.display='none';
                  inventoryBadge.classList.remove('bg-success');
                  inventoryBadge.classList.add('bg-danger');
                  inventoryBadge.innerHTML = "Out of Stock";
               }else{
                  document.getElementById('single-product-quantity').style.display='block';
                  document.getElementById('single-product-page').style.display='block';
                  inventoryBadge.classList.remove('bg-danger');
                  inventoryBadge.classList.add('bg-success');
                  inventoryBadge.innerHTML = "In Stock";
               }

               let productPrice = res.variant.selling_price;
               let discountedPrice = res.variant.selling_price;

               if(res.product.promotion !== null){

               if(res.product.promotion.discount_type === 0){
                  discountedPrice = productPrice - res.product.promotion.discount;
               }else{
                  discountedPrice = productPrice - (productPrice * res.product.promotion.discount / 100);
               }

               }

               let productPriceElm = document.getElementById('product-price-span');
               let discountedPriceElm = document.getElementById('discounted-price-span');
               let productWeightElm = document.getElementById('product-weight-span');
              
               if(productPriceElm !== null){
                  productPriceElm.innerHTML = parseFloat(productPrice).toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
               }

               if(discountedPriceElm !== null){
                  discountedPriceElm.innerHTML = parseFloat(discountedPrice).toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
               }

               if(productWeightElm !== null){
                  productWeightElm.innerHTML = res.variant.weight;
               }
            }



         },
         error:function(data){
            toastr.error(data);
         }
      })
   }
</script>
@endsection
