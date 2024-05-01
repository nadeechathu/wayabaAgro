@extends('frontend.app')

@section('content')

    {{-- <div class="container-fluid breadcrumb-bgColor">
    <div class="container">
       <div class="row">
          <!-- Breadcrumbs-->
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
 </div> --}}
    <!-- / Breadcrumbs-->
    <div class="container-fluid  padding-10em  sec-shop ">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col-lg-5">
                    <div class="bg-ligt-gray ">
                        <div id="sync1" class="owl-carousel owl-theme">
                            @if(Session::get('selectedCountry') == "LK")
                                @foreach ($product->images as $image)
                                    <div class="item">

                                        <img src="{{ asset($image->src) }}" class="d-block mx-auto width-auto"
                                            alt="{{ $image->alt_text }}">

                                    </div>
                                @endforeach
                            @else
                                @foreach ($product->exportImages as $image)
                                    <div class="item">

                                        <img src="{{ asset($image->src) }}" class="d-block mx-auto width-auto"
                                            alt="{{ $image->alt_text }}">

                                    </div>
                                @endforeach
                            @endif




                        </div>

                        <div id="sync2" class="owl-carousel owl-theme">

                            @php
                                $count = 1;
                            @endphp

                            @if(Session::get('selectedCountry') == "LK")
                                @foreach ($product->images as $image)
                                    <div class="item">


                                        <img src="{{ asset($image->src) }}" class="d-block w-100" alt="{{ $image->alt_text }}">
                                    </div>

                                    @php
                                        $count++;
                                    @endphp
                                @endforeach
                            @else
                                @foreach ($product->exportImages as $image)
                                    <div class="item">


                                        <img src="{{ asset($image->src) }}" class="d-block w-100" alt="{{ $image->alt_text }}">
                                    </div>

                                    @php
                                        $count++;
                                    @endphp
                                @endforeach
                            @endif



                        </div>

                    </div>
                </div>
                <div class="col-lg-7 cart-right pt-5 ps-3">
                    @include('frontend.common.alerts')
                    <h3 class="font-Asap font-22 pb-2 fw-bolder black-text ">
                        <span
                            id="product-name">{{ $product->product_name }} </span>


                            {{-- <span class="fw-normal text-muted">



                            @if ($product->weight_unit == 'kg')
                                <span class="fw-light"> ({{ $product->variants[0]->weight }}
                                    {{ $product->weight_unit }})</span>
                            @elseif ($product->weight_unit == 'g')
                                <span class="fw-light"> ({{ $product->variants[0]->weight * 1000 }}
                                    {{ $product->weight_unit }})</span>
                            @else
                                <span class="fw-light"> ({{ number_format($product->variants[0]->weight, 0) }}
                                    {{ $product->weight_unit }})</span>
                            @endif



                        </span> --}}
                     </h3>



                    <h3 class="font-Asap font-22 pb-3  fw-bolder green-dark pt-2" id="product-unit-price">
                        @if( Session::get('selectedCountry') == 'LK')
                        {{$commonContent['currencySymbol']['description']}} {{ $selectedVariant->selling_price }}
                        @else

                        @endif

                    </h3>
                    @if( $selectedVariant->bulk_price != null)
                    <h6 class="font-Asap pb-3 text-danger fw-bolder pt-1">


                        Bulk Price - Rs. {{number_format($selectedVariant->bulk_price,2)}} <small>(Minimum {{$selectedVariant->bulk_quantity}} units from each)</small>



                    </h6>
                    @endif




                    {{-- <p>  <b>Categories :</b>
                @foreach ($product->categories as $category)
                <a href=""> {{$category->category_name}} </a>
                @endforeach<br/></p> --}}

                <form action="{{route('web.singleProduct.variant.select',['slug' => $product->slug])}}" method="post" id="variant-form">
                    {{csrf_field()}}
                    <select name="varient_selector" id="variant-selector" onChange="document.getElementById('variant-form').submit();"
                        class="rounded-2 py-1 px-2 border border-success border-1">
                        @foreach ($product->variants as $variant)
                            <option {{$selectedVariant->id == $variant->id ? 'selected':''}} value="{{ $variant->id }}">{{ $variant->variant_name }} </option>
                        @endforeach
                    </select>
                    <input type="text" hidden name="product_id" value="{{$product->id}}"/>
                </form>

                    <div class="font-15 font-Asap fw-normal text-dark pt-2">
                        {!! $product->short_description !!}
                    </div>
                    @if( Session::get('selectedCountry') == 'LK')
                    @if($selectedVariant->inventory->master_quantity > 0)
                    <div class="row py-3">
                        <div class="col-lg-3 col-4">
                            <h3 class="font-Asap font-22 pb-2 fw-bolder black-text pt-1"> Quantity </h3>
                        </div>
                        <div class="col-lg-4 col-8">
                            <div class="number pt-1">

                                <span class="minus  d-inline-block">
                                    <img src="{{ asset('/images/frontend/images/plus.png') }}" class="d-block"
                                        alt="Wayamba Agro Exports Co. (Pvt) Ltd">
                                </span>
                                <input type="number"
                                    class="w-50 rounded-pill border border-dark text-center font-15 font-Asap fw-normal"
                                    min="1" onChange="checkAvailableProductQuantity({{ $product->id }})"
                                    id="single-product-quantity" value="1" />
                                <input type="text" hidden id="available-product-quantity" value="{{$selectedVariant->inventory->master_quantity}}"/>
                                <span class="plus d-inline-block ">
                                    <img src="{{ asset('/images/frontend/images/minus.png') }}" class="d-block"
                                        alt="Wayamba Agro Exports Co. (Pvt) Ltd">
                                </span>



                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-6 col-12">
                        @if ($selectedVariant->inventory->master_quantity > 0)
                        <div
                                class="row text-center font-15 text-white fw-normal rounded-pill green-bg py-2 border border-success border-2 border-success border-2 w-50  py-2">
                                <div class="{{Auth::user() != null ? 'col-6':'col-12'}}">


                                    <a title="{{ $product->id }}" id="single-product-page"
                                        class="text-white hvr-push fw-normal pointer btn-add-to-cart w-100">
                                        <i class="far fa-shopping-cart font-16 "></i>
                                    </a>

                                </div>
                                @if (Auth::user() != null)
                    <div class="col-6 border-start  border-white">


                            <a  title="{{ $product->id . '-' . $product->variants[0]->id }}" class="w-100 add_to_wishlist hvr-pop pointer add_to_wishlist">
                                <i class="fa fa-heart text-white font-16 ">  </i>
                            </a>

                    </div>
                    @endif
                            </div>



                        @else
                        <div class="col-md-6 mt-4">
                        @include('frontend.products.components.preorder_section')
                        </div>
                        @endif

                        </div>
                    </div>
                    @else
                    @include('frontend.products.components.product_inquiry')
                    @endif
                    <div class="row pt-4">
                        <div class="col-lg-4 col-6">
                            <h3 class="font-Asap font-22 pb-2 fw-bolder black-text pt-1"> Share this product </h3>
                        </div>
                        <div class="col-lg-8 col-6">
                            <div class="rounded-social-buttons-single page-social-button">

                                {!! $shareComponent !!}


                            </div>
                        </div>
<div class="col-12 pt-3">
    @include('frontend.products.components.add_review_modal')
</div>


                    </div>

                </div>

            </div>

            <div class="row pt-5">


                <div class="tab text-center review-section">
                    <button class="tablinks active border-0 bg-white font-Asap font-22 pb-2 fw-bolder black-text pe-4"
                        onclick="openTab(event, 'description')">Description</button>
                    <button class="tablinks border-0 bg-white font-Asap font-22 pb-2 fw-bolder black-text pl-4"
                        onclick="openTab(event, 'reviews')">Reviews</button>

                </div>
                <div id="description" class="tabcontent active" style="display:block;">
                    <p class="font-mediam poppins-font text-black p-extra-small">{!! $product->product_description !!}</p>
                </div>

            </div>
            <div id="reviews" class="tabcontent poppins-font" style="display:none;">

                @include('frontend.products.components.reviews')
            </div>

        </div>





    </div>
    <div class="container-fluid py-5 related-inner bg-gray-inner">
        <div class="container pb-5">
            <div class="row ">
                <div class="col-12 text-center ">
                    <h2 class="font-22  font-Asap fw-bolder black-text ">
                        <div class="row justify-content-center">
                            <div class="col-lg-1 col-2 pt-lg-3 pt-2">
                                <img src="{{ asset('/images/frontend/images/border-red.png') }}" class="d-block w-100"
                                    alt="Wayamba Agro Exports Co. (Pvt) Ltd">
                            </div>
                            <div class="col-lg-2 col-5">

                                <h3 class="font-Asap font-22 pb-2 fw-normal black-text"> Related Products</h3>
                            </div>
                            <div class="col-lg-1 col-2 pt-lg-3 pt-2">
                                <img src="{{ asset('/images/frontend/images/border-red.png') }}" class="d-block w-100"
                                    alt="Wayamba Agro Exports Co. (Pvt) Ltd">
                            </div>
                        </div>
                    </h2>
                </div>
                @if (sizeof($relatedProducts) > 0)
                    @foreach ($relatedProducts as $product)


                            @if(sizeof($product->variants) > 0)
                            <div class="col-lg-3 col-sm-4 col-6  text-center pt-5">
                            @include('frontend.products.product_card_view')
                            </div>

                            @endif

                            @endforeach
                @endif



                {{-- <img src="{{ asset('/images/frontend/images/product-1.png') }}" class="d-block mx-auto"  alt="Wayamba Agro Exports Co. (Pvt) Ltd">

   <p class="py-2 font-18 font-Asap fw-normal black-text">Chilli Powder <span class="fw-light">
           (250g)</span></p>
   <p class=" font-18 font-Asap fw-bolder black-text">Rs 500.00</p>

   <div
       class="row font-15 text-white fw-normal rounded-pill green-bg  border-success border-2 mx-auto w-50 mt-3 py-2">
       <div class="col-6">
           <a href="" class="text-white font-16 hvr-push fw-normal">
               <i class="far fa-shopping-cart"></i>
           </a>
       </div>
       <div class="col-6 border-start  border-white">
           <a href="" class="text-white font-16 hvr-pop fw-normal"><i class="fa fa-heart"
                   class=""></></i></a>
       </div>
   </div> --}}



            </div>
        </div>
    </div>



@endsection

@section('scripts')
    <script>
        $(document).ready(function() {

            var sync1 = $("#sync1");
            var sync2 = $("#sync2");
            var slidesPerPage = 6; //globaly define number of elements per page
            var syncedSecondary = true;

            sync1.owlCarousel({
                items: 1,
                slideSpeed: 2000,
                nav: true,
                autoplay: false,
                dots: true,
                loop: true,
                responsiveRefreshRate: 200,
                navText: [
                    '<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>',
                    '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'
                ],
            }).on('changed.owl.carousel', syncPosition);

            sync2
                .on('initialized.owl.carousel', function() {
                    sync2.find(".owl-item").eq(0).addClass("current");
                })
                .owlCarousel({
                    items: slidesPerPage,
                    dots: false,
                    nav: false,
                    smartSpeed: 200,
                    slideSpeed: 500,
                    slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
                    responsiveRefreshRate: 100
                }).on('changed.owl.carousel', syncPosition2);

            function syncPosition(el) {

                var count = el.item.count - 1;
                var current = Math.round(el.item.index - (el.item.count / 2) - .5);

                if (current < 0) {
                    current = count;
                }
                if (current > count) {
                    current = 0;
                }

                //end block

                sync2
                    .find(".owl-item")
                    .removeClass("current")
                    .eq(current)
                    .addClass("current");
                var onscreen = sync2.find('.owl-item.active').length - 1;
                var start = sync2.find('.owl-item.active').first().index();
                var end = sync2.find('.owl-item.active').last().index();

                if (current > end) {
                    sync2.data('owl.carousel').to(current, 100, true);
                }
                if (current < start) {
                    sync2.data('owl.carousel').to(current - onscreen, 100, true);
                }
            }

            function syncPosition2(el) {
                if (syncedSecondary) {
                    var number = el.item.index;
                    sync1.data('owl.carousel').to(number, 100, true);
                }
            }

            sync2.on("click", ".owl-item", function(e) {
                e.preventDefault();
                var number = $(this).index();
                sync1.data('owl.carousel').to(number, 300, true);
            });
        });

        $(document).ready(function() {

            var sync1 = $("#sync1");
            var sync2 = $("#sync2");
            var slidesPerPage = 6; //globaly define number of elements per page
            var syncedSecondary = true;

            sync1.owlCarousel({
                items: 1,
                slideSpeed: 2000,
                nav: true,
                autoplay: false,
                dots: true,
                loop: true,
                responsiveRefreshRate: 200,
                navText: [
                    '<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>',
                    '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'
                ],
            }).on('changed.owl.carousel', syncPosition);

            sync2
                .on('initialized.owl.carousel', function() {
                    sync2.find(".owl-item").eq(0).addClass("current");
                })
                .owlCarousel({
                    items: slidesPerPage,
                    dots: false,
                    nav: false,
                    smartSpeed: 200,
                    slideSpeed: 500,
                    slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
                    responsiveRefreshRate: 100
                }).on('changed.owl.carousel', syncPosition2);

            function syncPosition(el) {
                //if you set loop to false, you have to restore this next line
                //var current = el.item.index;

                //if you disable loop you have to comment this block
                var count = el.item.count - 1;
                var current = Math.round(el.item.index - (el.item.count / 2) - .5);

                if (current < 0) {
                    current = count;
                }
                if (current > count) {
                    current = 0;
                }

                //end block

                sync2
                    .find(".owl-item")
                    .removeClass("current")
                    .eq(current)
                    .addClass("current");
                var onscreen = sync2.find('.owl-item.active').length - 1;
                var start = sync2.find('.owl-item.active').first().index();
                var end = sync2.find('.owl-item.active').last().index();

                if (current > end) {
                    sync2.data('owl.carousel').to(current, 100, true);
                }
                if (current < start) {
                    sync2.data('owl.carousel').to(current - onscreen, 100, true);
                }
            }

            function syncPosition2(el) {
                if (syncedSecondary) {
                    var number = el.item.index;
                    sync1.data('owl.carousel').to(number, 100, true);
                }
            }

            sync2.on("click", ".owl-item", function(e) {
                e.preventDefault();
                var number = $(this).index();
                sync1.data('owl.carousel').to(number, 300, true);
            });



            $('.minus').click(function() {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                return false;
            });
            $('.plus').click(function() {
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                return false;
            });

        });









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

        function slideImage() {
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


        function checkProductQuantity(productId) {

            let requestedQtyElm = document.getElementById('single-product-quantity');

            let requestedQty = requestedQtyElm.value;
            let qtyErrorElm = document.getElementById('quantity-error');
            let variantId = document.getElementById('single-pro-variant-id').value;
            console.log('qty res el ===> ', qtyErrorElm);
            qtyErrorElm.html = '';

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

                    if (!res.status) {
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

        function getVariantDetails() {

            let variantId = document.getElementById('single-pro-variant-id').value;

            $.ajax({
                type: "post",
                url: "{{ route('web.variantData.get') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    variantId: variantId,
                    productId: '{{ $product->id }}'
                },
                success: function(res) {

                    if (res.status) {

                        let inventoryBadge = document.getElementById('inventory-badge');
                        if (res.variant.inventory.master_quantity <= 0) {
                            document.getElementById('single-product-quantity').style.display = 'none';
                            document.getElementById('single-product-page').style.display = 'none';
                            inventoryBadge.classList.remove('bg-success');
                            inventoryBadge.classList.add('bg-danger');
                            inventoryBadge.innerHTML = "Out of Stock";
                        } else {
                            document.getElementById('single-product-quantity').style.display = 'block';
                            document.getElementById('single-product-page').style.display = 'block';
                            inventoryBadge.classList.remove('bg-danger');
                            inventoryBadge.classList.add('bg-success');
                            inventoryBadge.innerHTML = "In Stock";
                        }

                        let productPrice = res.variant.selling_price;
                        let discountedPrice = res.variant.selling_price;

                        if (res.product.promotion !== null) {

                            if (res.product.promotion.discount_type === 0) {
                                discountedPrice = productPrice - res.product.promotion.discount;
                            } else {
                                discountedPrice = productPrice - (productPrice * res.product.promotion
                                    .discount / 100);
                            }

                        }

                        let productPriceElm = document.getElementById('product-price-span');
                        let discountedPriceElm = document.getElementById('discounted-price-span');
                        let productWeightElm = document.getElementById('product-weight-span');

                        if (productPriceElm !== null) {
                            productPriceElm.innerHTML = parseFloat(productPrice).toFixed(2).toString().replace(
                                /\B(?=(\d{3})+(?!\d))/g, ',');
                        }

                        if (discountedPriceElm !== null) {
                            discountedPriceElm.innerHTML = parseFloat(discountedPrice).toFixed(2).toString()
                                .replace(/\B(?=(\d{3})+(?!\d))/g, ',');
                        }

                        if (productWeightElm !== null) {
                            productWeightElm.innerHTML = res.variant.weight;
                        }
                    }



                },
                error: function(data) {
                    toastr.error(data);
                }
            })
        }
    </script>
@endsection

<script>
    function checkAvailableProductQuantity(productId){

        let availableProductQtyElm = document.getElementById('available-product-quantity');
        let quantityElm = document.getElementById('single-product-quantity');

        console.log("a ===> ",availableProductQtyElm.value);
        console.log("q ===> ",quantityElm.value);

        if(parseInt(quantityElm.value) > parseInt(availableProductQtyElm.value)){

            quantityElm.value = availableProductQtyElm.value;
            toastr.error('Sorry, available product quantity is '+availableProductQtyElm.value);

        }
    }
</script>
