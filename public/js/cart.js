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
    var product_name = $('#item-wrapper-' + product_id).find('.product-name').text();
    var variant_id = $('#item-wrapper-' + product_id).find('#single-pro-variant-id').val();
    var unitPrice = $('#item-wrapper-' + product_id).find('#product-unit-price').val(); //card view
    var product_image = $('#item-wrapper-' + product_id).find('#product-image').attr('src'); //card view
    var product_categories = $('#item-wrapper-' + product_id).find('#product-category').text(); //card view
    var url = "{{ route('web.cart.add') }}";
    var quantity = 1;

    var qtyElm = document.getElementById('single-product-page');
    if (qtyElm !== null) {
        quantity = document.getElementById('single-product-quantity').value;
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
            product_categories: product_categories,
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
    var item_id = $(this).attr('title');
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
    var item_id = $(this).attr('title');
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
    var item_id = $(this).attr('title');
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
    var hamper_id = document.getElementById('wishlist_product_id').value;
    var url = "{{ route('web.addTo.wishlist') }}";
    $.ajax({
        type: "post",
        url: url,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            hamper_id: hamper_id
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
function removeWishlistItem(hamperId) {

    var hamper_id = hamperId;
    var url = "{{ route('web.removeFrom.wishlist') }}";
    $.ajax({
        type: "post",
        url: url,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            hamper_id: hamper_id
        },
        success: function(res) {
            if (res.status) {

                let wishlistElm = document.getElementById('hamper-card-view' + hamperId);

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