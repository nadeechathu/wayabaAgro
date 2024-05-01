@section('css')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
@endsection




  
<section id="shareProject" class="pb20 bt">
    
        <div class="row"> 
         <ul class="bxslider ">
            @foreach ($brands as $brand)
<li>
   
    <img src="{{asset($brand->brand_logo)}}"  />

</li>
@endforeach
</ul>
   
    </div>
</section>









{{-- <div class="owl-carousel">
    @foreach ($brands as $brand)
        <div> 
            <div class="card" >
                <img src="{{asset($brand->brand_logo)}}" class="card-img-top" alt="{{$brand->brand_name}}">
                <div class="card-body">
                    <h5 class="card-text">{{$brand->brand_name}}</h5>
                </div>
            </div>
        </div>
    @endforeach
  
</div> --}}


@section('scripts')


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
{{-- 
<script>
    $(document).ready(function(){
    $('.bxslider1').bxSlider({
        minSlides:      3,
        maxSlides:      20,
        slideWidth:     400,
        slideMargin:    20,
        mode: 'horizontal',
      
        speed:          6000, //Speed all wierd so thats why its sooo high
        auto: true,
  autoControls: true,
  stopAutoOnClick: true,
    });
  });
</script> --}}

@endsection