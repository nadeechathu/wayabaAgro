
@php
    $product_price = $product->variants[0]->selling_price;
    $discounted_price = $product->variants[0]->selling_price;
    $variant_id = $product->variants[0]->id;
    $promotion_tag = null;
    
    if ($product->promotion != null) {
        if ($product->promotion->discount_type == 0) {
            $discounted_price = $product_price - $product->promotion->discount;
        } else {
            $discounted_price = $product_price - ($product_price * $product->promotion->discount) / 100;
        }
    
        $promotion_tag = $product->promotion->promotion_tag;
    }
    
@endphp


<div class="card rounded-2 product p-3 border-0 min-h-240">

    @if ($product->exportFeaturedImage != null)


    <img id="product-image" class="card-img rounded-0 mx-auto product-w wishlist-prod-img"
        src="{{ asset($product->exportFeaturedImage->src) }}">
    @else
    @if (sizeof($product->exportImages) > 0)
        <img id="product-image" class="card-img rounded-0 mx-auto product-w wishlist-prod-img"
            src="{{ asset($product->exportImages[0]->src) }}">
    @endif

    @endif

    
    <a href="{{ route('web.shop.product',['slug'=>$product->slug]) }}">

        <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">

        </div>
    </a>




</div>
{{-- <div class="row">
    <div class="mb-12">
    @include('admin.common.alerts')
    </div>

   </div> --}}



<p class="py-2 font-18 font-Asap fw-bolder black-text text-center"><span
        id="product-name">{{ $product->variants[0]->variant_name }}</span>

   {{-- @if ($product->weight_unit == 'kg')
        <span class="fw-light"> ({{ $product->variants[0]->weight }} {{ $product->weight_unit }})</span>
    @elseif ($product->weight_unit == 'g')
        <span class="fw-light"> ({{ $product->variants[0]->weight * 1000 }} {{ $product->weight_unit }})</span>
    @else
        <span class="fw-light"> ({{ number_format($product->variants[0]->weight, 0) }}
            {{ $product->weight_unit }})</span>
    @endif --}}

</p>


{{-- <p class=" font-18 font-Asap fw-bolder black-text">Rs  {{number_format($product->variants[0]->unit_price,2)}}</p> --}}

{{-- <div class="row font-15 text-white fw-normal rounded-pill green-bg  border-success border-2 mx-auto w-50 mt-3 py-2">
                      <div class="col-6">
                          <a href="" class="text-white font-16 hvr-push fw-normal">
                              <i class="far fa-shopping-cart"></i>
                          </a>
                      </div>
                      <div class="col-6 border-start  border-white">
                          <a href="" class="text-white font-16 hvr-pop fw-normal"><i class="fa fa-heart" class=""></ ></i></a>
                      </div>
                    </div> --}}
@if ($promotion_tag != null)
    - <span class="badge bg-danger">{{ $promotion_tag }}</span>
@endif

{{-- @foreach (session::get('selectedCountry') as $data)
	{{ $data->country_code }}
	
@endforeach --}}


@if (Session::get('selectedCountry') == 'LK')

    <div class="row text-center">
        <p class="font-18 font-Asap fw-bolder black-text" id="product-unit-price">
            @if ($discounted_price != $product_price)
                <span
                    class="text-muted text-decoration-line-through fs-6 fw-normal font-red-hat">{{ $commonContent['currencySymbol']['currencySymbol'] }}
                    <span></span></span> &nbsp;
            @endif
            {{ $commonContent['currencySymbol']['description'] }} {{ number_format($discounted_price, 2) }}
        </p>

        <input type="hidden" id="product-unit-price" class="fs-6 fw-normal font-red-hat"
            value="{{ ($product->unit_price * (100 - $product->discount)) / 100 }}">
    </div>
    {{-- <select name="varient_selector" id="variant-selector"
                         class="rounded-2 py-1 px-2 border border-success border-1">
                    
                            <option value="{{ $product->variants->id }}">{{ $product->variants->variant_nCustomer Nameame }} </option>
                    
                    </select> --}}



    <ul class="list-unstyled d-flex justify-content-center mb-0 pb-3">
        <li>



        </li>
    </ul>
    
    <div class="text-center bottom-cart">




        @if ($product->inventory->master_quantity > 0)
            
            <a href="" title="{{ $product->id }}" variant-id="{{ $variant_id }}"
                product-name="{{ $product->product_name }}">

                <div
                    class="row font-15 text-white fw-normal rounded-pill green-bg  border-success border-2 mx-auto w-50 py-2 res-imag">
                    <div class="{{Auth::user() != null ? 'col-6':'col-12 '}} py-1">
                        
                            <a title="{{ $product->id . '-' . $product->variants[0]->id }}" id="single-product-page"
                                class="text-white font-16 hvr-push fw-normal  btn-add-to-cart w-100 pointer">
                                <i class="far fa-shopping-cart font-16"></i>
                            </a>
                        
                    </div>
                    @if (Auth::user() != null)
                    <div class="col-6 border-start  border-white py-1">
                     


                            <a  title="{{ $product->id . '-' . $product->variants[0]->id }}" class="w-100  hvr-pop add_to_wishlist  pointer add_to_wishlist">
                                <i class="fa fa-heart text-white font-16  "></i>
                            </a>
                       
                    </div>
                    @endif
                </div>
            </a>
            <br>
        @else
            <a href="{{route('web.shop.product',['slug'=>$product->slug])}}"><button type="button"
            class="font-13 text-white btn btn-danger rounded-pill px-4 py-2 border-danger border-2 mx-auto py-0  fw-bolder out-of-stock-btn">Preorder</button>
            </a>

            
        @endif
    </div>
    @else
<div class="pt-3">
    <a href="{{ route('web.shop.product',['slug'=>$product->slug]) }}"
        class="hvr-wobble-skew text-white font-15 text-white fw-normal rounded-pill green-bg  border-success border-2 mx-auto w-75 py-2 px-3 res-imag  btn-add-to-cart"  > Read More </a>
</div>
@endif








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


        
    </script>




    
@endsection
