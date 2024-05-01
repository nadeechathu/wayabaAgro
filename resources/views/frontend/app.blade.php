<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Analytics tag -->
    @if (isset($commonContent))
        @if ($commonContent['analytics'] != null)
            {!!$commonContent['analytics']['description']!!}
        @endif
    @endif
    <title>@yield('title', $commonContent['siteName']['description'])</title>
    <meta name="description" content="@yield('description','')">
    <meta name="keywords" content="@yield('keywords','')">

    <link rel="canonical" href="{{ url()->current() }}" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('images/frontend/images/favicon.ico') }}">

<!-- Bootstrap CDN  -->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" >

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link href="{{ asset('css/hover.css') }}" rel="stylesheet">

<!-- Vendor CSS -->
<link rel="stylesheet" href="{{asset('/assets/css/libs.bundle.css')}}" />

<!-- Custom Styles -->


<!-- Custom JS -->
<script src="{{ asset('js/custom_owl_carousel.js') }}" ></script>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" ></script>


<link href="{{ asset('css/wayaba-agro.css') }}" rel="stylesheet">
<link href="{{ asset('css/styles-M.css') }}" rel="stylesheet">
<link href="{{ asset('css/styles-k.css') }}" rel="stylesheet">
<link href="{{ asset('css/responsive-wayaba-agro.css') }}" rel="stylesheet">



<!-- custom CSS for the edit section -->
<!-- Owl Stylesheets -->
<link rel="stylesheet" href="{{ asset('css/docs.theme.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css"  />
<link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet">
<!-- custom JS for the edit section -->
<!-- javascript -->
<script src="{{ asset('/assets/js/jquery.min.js') }}"></script>




<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<!-- toastr styles -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Red+Hat+Display:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Asap:wght@100;300;400;500;600;700;800;900&family=Nerko+One&display=swap" rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />


    <!-- Fix for custom scrollbar if JS is disabled-->
    <noscript>
        <style>
          /**
          * Reinstate scrolling for non-JS clients
          */
          .simplebar-content-wrapper {
            overflow: auto;
          }

        </style>
    </noscript>
    <style>
        body {
            font-size:0.9rem !important;
        }
        .user-image {
            width:50px;
        }
    </style>
@yield('css')
</head>
<body class="">

   @include('frontend.layouts.headers.header')
    <!-- Page Content -->



            @yield('content')

        <!-- / Content-->


    @include('frontend.layouts.footers.footer')
    <!-- Theme JS -->
    <!-- Vendor JS -->
    <script src="{{url('/js/vendor.bundle.js')}}"></script>
    <script src="{{url('/js/common.js')}}"></script>

    <!-- jQuery -->
    <script src="{{url('/plugins/jquery/jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- CKEditor -->
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script src="{{ asset('/js/owl.carousel.js') }}"></script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    @yield('scripts')
<!-- owl carousel homepg -->
<script>

$(window).scroll(function () {
        var sc = $(window).scrollTop()
        if (sc > 100) {
            $(".header-sec").addClass("fixed-to-top")
        } else {
            $(".header-sec").removeClass("fixed-to-top")
        }
        
     });


            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                loop: true,
				 nav: true,
                margin: 10,
                navRewind: false,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 1
                  },
                  1000: {
                    items: 4
                  }
                }
              })
            })
          </script>

    <script>
        //add to cart btn - home page

$(document).on("click", "#home-hamper-btn", function() {
    var product_id = $(this).attr('data-id');
    var product_name = $('#ham-name-' + product_id).val();
    var unitPrice = $('#ham-unit-price-' + product_id).val();
    var product_image = $('#ham-img-url-' + product_id).val();
    var product_categories = $('#ham-category-' + product_id).val();
    var url = "{{ route('web.cart.add') }}";

    $.ajax({
        type: "get",
        url: url,
        data: {
            product_id: product_id,
            product_name: product_name,
            unitPrice: unitPrice,
            product_image: product_image,
            product_categories: product_categories,
        },
        success: function(res) {
            if (res.success == true) {
                toastr.success(res.msg);
                $('.dropdown_for_mini_cart').html(res.minicart);
                $('#product_cart_add_section_' + product_id).html('<div class="d-flex align-items-center justify-content-center">' +
                    '<span title="' + product_id + '" class="btn btn-outline-dark mt-auto btn_min_cart"><i class="fa fa-minus" aria-hidden="true"></i></span>' +
                    '<input type="text" disabled value="' + res.qty + '" class="mx-2 text-center fw-bold plus_min_qty">' +
                    '<span title="' + product_id + '" class="btn btn-outline-dark mt-auto btn_plus_cart"><i class="fa fa-plus" aria-hidden="true"></i></span>' +
                    '</div>');
            }
        },
        error: function(data) {
            // console.log('Error:', data);
            // toastr.warning(data);
        }
    });
});





// add to cart btn-shop page

$(document).on("click", ".btn-add-to-cart", function() {   
    
  
    
    var product_id = $(this).attr('title');
    var variant_id = null;
    // var product_name = $('#item-wrapper-' + product_id).find('.product-name').text();

    // var variantElm = document.getElementById('single-pro-variant-id');
    let variantSelector = $('select#variant-selector');
        console.log(variantSelector);

    if(product_id.split("-").length === 1){

         variant_id = variantSelector.val();

    }else{
        
         variant_id = product_id.split("-")[1];
         product_id = product_id.split("-")[0];
    }
    
    
    var product_name = $("#product-name").text();
    var unitPrice = $("#product-unit-price").text();
    var quantity = null; 
    
    // var unitPrice = $('#item-wrapper-' + product_id).find('#product-unit-price').val(); //card view
    var product_image = $('#item-wrapper-' + product_id).find('#product-image').attr('src'); //card view
    // var product_categories = $('#item-wrapper-' + product_id).find('#product-category').text(); //card view
    var url = "{{ route('web.cart.add') }}";

    
    //determining variant id

   

    var qtyElm = $("#single-product-quantity");
    if (qtyElm !== null) {
        quantity = qtyElm.val();
    }
  

    $.ajax({
        type: "get",
        url: url,
        data: {
            product_id: product_id,
            variant_id: variant_id,
            product_name: product_name,
            unitPrice: unitPrice,
            product_image: product_image,
            // product_categories: product_categories,
            quantity: quantity
        },
        success: function(res) {
            if (res.success == true) {
                toastr.success(res.msg);
                $('.dropdown_for_mini_cart').html(res.minicart);
                $('#product_cart_add_section_' + product_id).html('<div class="d-flex align-items-center justify-content-center">' +
                    '<span title="' + product_id + '" class="btn btn-outline-dark mt-auto btn_min_cart"><i class="fa fa-minus" aria-hidden="true"></i></span>' +
                    '<input type="text" disabled value="' + res.qty + '" class="mx-2 text-center fw-bold plus_min_qty">' +
                    '<span title="' + product_id + '" class="btn btn-outline-dark mt-auto btn_plus_cart"><i class="fa fa-plus" aria-hidden="true"></i></span>' +
                    '</div>');
            }
        },
        error: function(data) {
            // console.log('Error:', data);
            // toastr.warning(data);
        }
    });
});

// mini cart remove
$(document).on("click", ".mini_cart_remove_btn", function() {
    var ids = $(this).attr('title');
    var item_id = ids.split(',')[1]; //obtaining variant id
    var url = "{{ route('web.cart.minicart.remove') }}";
    $.ajax({
        type: "get",
        url: url,
        data: {
            item_id: item_id
        },
        success: function(res) {
            if (res.success == true) {
                toastr.success(res.msg);
                $('.dropdown_for_mini_cart').html(res.minicart);
                $('#product_cart_add_section_' + item_id).html('<button title="' + item_id + '" class="btn btn-outline-dark mt-auto btn-add-to-cart">Add To Cart</button>');
            }
        },
        error: function(data) {
            // console.log('Error:', data);
            // toastr.warning(data);
        }
    });
});

// cart add one
$(document).on("click", "#btn_plus_cart", function() {
    var ids = $(this).attr('title');
    var item_id = ids.split(',')[1]; //obtaining variant id
    var sub_total = $('#order-summery-sub-total').text();

    var url = "{{ route('web.cart.add.by.one') }}";
    $.ajax({
        type: "get",
        url: url,
        data: {
            item_id: item_id,
            sub_total: sub_total,
        },
        success: function(res) {
            if (res.success == true) {
                location.reload();
                // toastr.success(res.msg);

                $('#item-total-' + item_id).text(res.item_total_price);
                $('#order-summery-sub-total').text(res.subtotal);
                $('#order-summery-total').text(res.subtotal);
                $('.dropdown_for_mini_cart').html(res.minicart);
                $('#product_cart_add_section_' + item_id).html('<div class="d-flex align-items-center justify-content-center">' +
                    '<span title="' + item_id + '" class="btn btn-outline-dark mt-auto btn_min_cart"><i class="fa fa-minus" aria-hidden="true"></i></span>' +
                    '<input type="text" disabled value="' + res.qty + '" class="mx-2 text-center fw-bold plus_min_qty">' +
                    '<span title="' + item_id + '" class="btn btn-outline-dark mt-auto btn_plus_cart"><i class="fa fa-plus" aria-hidden="true"></i></span>' +
                    '</div>');
            }
        },
        error: function(data) {
            // console.log('Error:', data);
            // toastr.warning(data);
        }
    });


});

// cart remove one
$(document).on("click", "#btn_min_cart", function() {
    console.log("clicked");
    var ids = $(this).attr('title');
    var item_id = ids.split(',')[1]; //obtaining variant id
    var sub_total = $('#order-summery-sub-total').text();
    var url = "{{ route('web.cart.remove.by.one') }}";
    $.ajax({
        type: "get",
        url: url,
        data: {
            item_id: item_id,
            sub_total: sub_total,
        },
        success: function(res) {
            if (res.success == true) {
                location.reload();
                // toastr.success(res.msg);
                $('#item-total-' + item_id).text(res.item_total_price);
                $('#order-summery-sub-total').text(res.subtotal);
                $('#order-summery-total').text(res.subtotal);
                $('.dropdown_for_mini_cart').html(res.minicart);
                if (res.qty > 0) {
                    $('#product_cart_add_section_' + item_id).html('<div class="d-flex align-items-center justify-content-center">' +
                        '<span title="' + item_id + '" class="btn btn-outline-dark mt-auto btn_min_cart"><i class="fa fa-minus" aria-hidden="true"></i></span>' +
                        '<input type="text" disabled value="' + res.qty + '" class="mx-2 text-center fw-bold plus_min_qty">' +
                        '<span title="' + item_id + '" class="btn btn-outline-dark mt-auto btn_plus_cart"><i class="fa fa-plus" aria-hidden="true"></i></span>' +
                        '</div>');
                } else {
                    $('#product_cart_add_section_' + item_id).html('<button title="' + item_id + '" class="btn btn-outline-dark mt-auto btn-add-to-cart">Add To Cart</button>');
                }

            }
        },
        error: function(data) {
            // console.log('Error:', data);
            // toastr.warning(data);
        }
    });

});



//---- On click for add coupon in cart page
// $('.add-coupon-code').on('click',function(){
//     $('#apply-coupon').removeClass('d-none');
//     $('#apply-coupon').removeClass('d-block');
// });

$(document).on("click", "#cart-checkout-btn", function() {


    var cart_final_total = $('#order-summery-total').text();
    var url = "{{ route('web.proceed.checkout') }}";
    var url2 = "{{ route('web.checkout') }}";
    $.ajax({
        type: "get",
        url: url,
        data: {

            cart_final_total: cart_final_total,
        },
        success: function(res) {


            window.location.href = url2;

        },
        error: function(data) {
            // console.log('Error:', data);
            // toastr.warning(data);
        }
    });

});



$(document).on("click", "#place-order-btn", function() {



    var loader = document.getElementById('order-now-loader');
    var placeOrderBtn = $("#place-order-btn");

    placeOrderBtn.attr('disabled', true);
    loader.style.display = "block";


    var summary_total = $('.summary-total').text();
    var order_notes = $('#order-notes-input').val();
    var payment_method_cod = $("input[name=cash_on_delivery][value='cod']").prop("checked", true);
    //alert(payment_method_cod);
    var url = "{{ route('web.orders.store') }}";

    $.ajax({
        type: "post",
        url: url,
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {

            summary_total: summary_total,
            order_notes: order_notes
        },
        success: function(res) {

            if (res.status) {
                window.location.href = res.url;
                toastr.success(res.message);

                placeOrderBtn.removeAttr('disabled');
                loader.style.display = "none";

            } else {
                toastr.error(res.message);

                placeOrderBtn.removeAttr('disabled');
                loader.style.display = "none";
            }


        },
        error: function(data) {
            // console.log('Error:', data);
            toastr.error(data);

            placeOrderBtn.removeAttr('disabled');
            loader.style.display = "none";
        }
    });


});

// add to wishlist
$(document).on("click", ".add_to_wishlist", function() {

    // var product_id = document.getElementById('wishlist_product_id').value;
    var product_id = $(this).attr('title');
    var variant_id = null;
    
    let variantSelector = $('select#variant-selector');
        console.log(variantSelector);

    if(product_id.split("-").length === 1){

         variant_id = variantSelector.val();

    }else{
        
         variant_id = product_id.split("-")[1];
         product_id = product_id.split("-")[0];
    }
    





    var url = "{{ route('web.addTo.wishlist') }}";
    $.ajax({
        type: "post",
        url: url,
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            product_id: product_id
        },
        success: function(res) {
            if (res.status) {
                toastr.success(res.message);

            } else {
                toastr.error(res.message);
            }
        },
        error: function(data) {
            // console.log('Error:', data);
            // toastr.warning(data);
        }
    });
});

// remove from wishlist
function removeWishlistItem(productId) {

    var product_id = productId;
    var url = "{{ route('web.removeFrom.wishlist') }}";
    $.ajax({
        type: "post",
        url: url,
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            product_id: productId
        },
        success: function(res) {
            if (res.status) {

                let wishlistElm = document.getElementById('product-card-view' + productId);

                if (wishlistElm !== null) {
                    wishlistElm.remove();
                }
                toastr.success(res.message);

            } else {
                toastr.error(res.message);
            }
        },
        error: function(data) {
            // console.log('Error:', data);
            // toastr.warning(data);
        }
    });
}
    </script>
 

    <script>
    $('.owlCarousel1').owlCarousel({
        loop: true,
        dots: true,
        nav: true,
        navText: ["<div class='nav-button owl-prev1'><img src='/images/frontend/images/prev-icon.png'></div>", "<div class='nav-button owl-next1'><img src='/images/frontend/images/next-icon.png'></div>"],
        autoplay: false,
        smartSpeed: 6000,
        animateOut: 'fadeOut',
        autoplayTimeout: 6000,
        responsive: {
         0: {
             items: 1
         },
         600: {
             items: 2
         },
         1000: {
             items: 4
         }
        }
        });
        
        
        
        
        </script>

   <script>
    $('.btn-default').on('click',function(){
  $('.default-menu').slideToggle()
  $('.dropdown-overlay').show()
});
$('.dropdown-overlay').on('click',function(){
  $('.default-menu').hide(); 
  $(this).hide();
});

$('.btn-default1').on('click',function(){
  $('.default-menu1').slideToggle()
  $('.dropdown-overlay1').show()
});
$('.dropdown-overlay1').on('click',function(){
  $('.default-menu1').hide(); 
  $(this).hide();
});



   </script>
   <script>
    $('body').on('keyup', '.js-input-mobile', function() {
    
        var $input = $(this),
            value = $input.val(),
            length = value.length,
            inputCharacter = parseInt(value.slice(-1));
    
        if (!((length > 0 && inputCharacter >= 0 && inputCharacter <= 10) || (length === 1 && inputCharacter >=
                7 && inputCharacter <= 10))) {
            $input.val(value.substring(0, length - 1));
        }
    });
 </script>

 <script>
    $('#contact_form').submit(function(){
      $('html, body').stop().animate({
            scrollTop: $("#contact").offset().top
            
        }, 600);
    });
 </script>
</body>
</html>
