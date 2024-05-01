<div class="container-fluid slider-sec">
 
    <div class="row">
       <div class="col-12 px-0  margin-10em">
          <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
             <div class="carousel-indicators">
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
             </div>
           
             <div class="carousel-inner ">
  
              @php
              $count = 0;
          @endphp
          @foreach ($sliderImages as $sliderImage)
              <div class="carousel-item {{$count == 0 ? 'active' : ''}}" data-bs-interval="10000">
                  <img src="{{ asset($sliderImage->src) }}" class="d-block w-100"  alt="Wayamba Agro Exports Co. (Pvt) Ltd">
                  <div class="carousel-caption home-slider-caption d-none d-md-block ">
                      <h5 class="text-center slide-caption">{{$sliderImage['heading_'.Session::get('applocale')]}}</h5>
                      {{-- <p class="carousel-des">{{$sliderImage->caption}}</p> --}}
                      {{-- <a class="btn bg-yellow btn-read-more" href="{{route('front.shop')}}">Buy Hamper</a> --}}
                  </div>
              </div>
          @php
              $count++;
          @endphp
          @endforeach
            </div>
           </div>
       </div>
    </div>




</div>