@section('css')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
@endsection




  
<section id="shareProject" class="pb20 bt">
    <div class="container">
    
    <div class="row">
    <ul class="bxslider ">
@foreach ($new_products as $product)
@if(sizeof($product->variants) > 0)
    @include('frontend.products.product_card_view')
    @endif
@endforeach
</ul>
</div>

    </div>
</section>



@section('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    
<script type="text/javascript">
                    
            
    $(document).ready(function(){

    var slider = $('.bxslider').bxSlider({
        minSlides:      5,
        maxSlides:      20,
        slideWidth:     200,
        slideMargin:    90,
        ticker:         true,
        tickerHover:    true,
        speed:          40000, //Speed all wierd so thats why its sooo high
        useCSS:         false
    });
});

    
    
</script>
@endsection