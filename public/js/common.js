function getZipCodeForCity(id, zipElmId) {

    let city = document.getElementById(id).value;

    $.ajax({
        type: "post",
        url: "/checkout/city/get",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            city: city
        },
        success: function(res) {

            console.log(res);
            if (res.status) {
                document.getElementById(zipElmId).value = res.payload.zip_code;
            } else {
                toastr.error("Please check your city name and try again");
            }
        },
        error: function(data) {
            // console.log('Error:', data);
            toastr.error(data);
        }
    });
}

window.addEventListener('scroll', e => {
    var el = document.getElementById('jsScroll');
    if (window.scrollY > 300) {
        el.classList.add('visible');
    } else {
        el.classList.remove('visible');
    }
});

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}
