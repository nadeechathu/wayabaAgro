function checkproductName(Id) {

    let name = document.getElementById('product_name' + Id).value;
    let productIdElm = document.getElementById('product_id');


    $.ajax({
        type: 'POST',
        url: "/admin/product/check-name",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            productName: name,
            productId: Id
        },
        success: function(res) {
            console.log('message ==> ', res);

            if (!res.status) {

                document.getElementById('product_name' + Id).value = '';
                document.getElementById('name-invalid' + Id).innerHTML = res.message;

            } else {
                document.getElementById('name-invalid' + Id).innerHTML = '';
            }



        }


    });

}





function checkcouponName(Id) {

    let name = document.getElementById('coupon_name' + Id).value;
    let couponIdElm = document.getElementById('coupon_id');


    $.ajax({
        type: 'POST',
        url: "/admin/coupon/check-name",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            couponName: name,
            couponId: Id
        },
        success: function(res) {
            console.log('message ==> ', res);

            if (!res.status) {

                document.getElementById('coupon_name' + Id).value = '';
                document.getElementById('name-invalid' + Id).innerHTML = res.message;

            } else {
                document.getElementById('name-invalid' + Id).innerHTML = '';
            }



        }


    });

}


function addCategories(id) {

    let categoryId = document.getElementById('category-selector' + id).value;


    console.log("add cat ==> ", document.getElementById('category-' + categoryId));
    if (document.getElementById(id + 'category-' + categoryId) === null) {

        if (categoryId !== "abc") {


            $.ajax({
                type: 'GET',
                url: '/admin/categories/' + categoryId,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(res) {
                    console.log('category ==> ', res);

                    $('#selected-categories' + id).append('<span  id="' +
                        +id + 'category-' + res.category.id + '"><input type="text" hidden name="categories[]" value="' + res.category.id + '"><button type="button" value="' +
                        res.category.id + '" name="categories[]" onClick="removeCategory(' + id + ',' + res.category.id + ')" class="btn btn-danger btn-sm text-white">' + res.category.category_name + '</button></span>');

                }


            });

        }
    }

}

function removeCategory(productId, Id) {

    document.getElementById(productId + 'category-' + Id).remove();

}

function calculateSellingPrice(id) {

    let unitPriceElm = document.getElementById('unit_price' + id);
    let packingCostElm = document.getElementById('packing_cost' + id);
    let sellingPriceElm = document.getElementById('selling_price' + id);

    let sellingPrice = 0.0;

    if (unitPriceElm !== null && packingCostElm !== null) {
        sellingPrice = parseFloat(unitPriceElm.value) + parseFloat(packingCostElm.value);
    }

    if (sellingPriceElm !== null) {
        sellingPriceElm.value = sellingPrice.toFixed(2);
    }


}

function checkCountryName(Id) {

    let name = document.getElementById('country_name' + Id).value;
    let countryIdElm = document.getElementById('country_id');


    $.ajax({
        type: 'POST',
        url: "/admin/settings/check-name",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            countryName: name,
            countryId: Id
        },
        success: function(res) {
            console.log('message ==> ', res);

            if (!res.status) {

                document.getElementById('country_name' + Id).value = '';
                document.getElementById('name-invalid' + Id).innerHTML = res.message;

            } else {
                document.getElementById('name-invalid' + Id).innerHTML = '';
            }



        }


    });

}

