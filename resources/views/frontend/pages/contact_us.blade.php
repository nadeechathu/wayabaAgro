@extends('frontend.app')
@section('content')
<div class="container-fluid contact-inner padding-10em">
   <div class="container py-5">
      <div class="row">
         <div class="col-lg-6 pb-lg-5 pb-sm-0 pb-5">
            <h2 class="font-36 green-text font-Nerko pb-3">Let's talk</h2>
           
            @include('frontend.common.alerts')
            <form class="pt-1" method="POST" action="{{route('web.contactsubmit')}}"
               onsubmit="document.getElementById('contact-submit-btn').setAttribute('disabled','disabled');">
               <!-- 2 column grid layout with text inputs for the first and last names -->
               {{-- @if($errors->any())
               <div class="alert alert-danger alert-dismissible fade show">
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                  <p><strong>Something went wrong</strong></p>
                  <ul>
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                  </ul>
               </div>
               @endif
               @if (session()->has('success'))
               <div class="alert alert-success mt-2">
                  @if(is_array(session('success')))
                  <ul>
                     @foreach (session('success') as $message)
                     <li>{{ $message }}</li>
                     @endforeach
                  </ul>
                  @else
                  {{ session('success') }}
                  @endif
               </div>
               @endif --}}
               {{csrf_field()}}
               <div class="row mb-4">
                  <div class="col-lg-6 ">
              
                        <input type="text"
                           class="form-control  font-15 font-Asap fw-normal py-2 border-dark rounded-0 border-bottom border-top-0 border-end-0 border-start-0 ps-0 bg-transparent" placeholder="First name" name="first_name" value="{{old('first_name')}}" required>
                        
                  </div>
                  <div class="col-lg-6">
              
                        <input type="text"
                           class="form-control  font-15 font-Asap fw-normal py-2 border-dark rounded-0 border-bottom border-top-0 border-end-0 border-start-0 ps-0 bg-transparent"
                         placeholder="Last name" name="last_name" value="{{old('last_name')}}" required>
                     
                  </div>
               </div>
               <!-- Email input -->
               <div class="row mb-4">
                  <div class="col-lg-6">
                   
                        <input type="text"
                           class="form-control  font-15 font-Asap fw-normal py-2 border-dark rounded-0 border-bottom border-top-0 border-end-0 border-start-0 ps-0 bg-transparent"
                           placeholder="Email" name="inquiry_email" value="{{old('inquiry_email')}}" required>
                       
                   
                  </div>
                  <div class="col-lg-6">
                
                      
                         <input type="text"  class="form-control  font-15 font-Asap fw-normal py-2 border-dark rounded-0 border-bottom border-top-0 border-end-0 border-start-0 ps-0 bg-transparent" name="inquiry_phone" placeholder="Phone Number" >
                     
                  </div>
               </div>
               <div class="form-outline mb-4">
                
                     <textarea
                        class="form-control font-15 font-Asap fw-normal py-2 border-dark rounded-0 border-bottom border-top-0 border-end-0 border-start-0 ps-0 bg-transparent"
                        placeholder="Message" name="inquiry_message" rows="5" required></textarea>
                 
               </div>

               <div class="mb-3 mt-1 text-end">
                        <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_SITEKEY')}}"></div>
               </div>
               <!-- Submit button -->
               <div class="col-12">
                  <button type="submit"
                     class="btn mt-2 font-Asap text-dark hover-btn border-1 border-danger fw-bolder px-5 rounded-pill hvr-backward"
                     id="contact-submit-btn">Submit </button>
               </div>
               <!-- success message -->
            </form>
         </div>
         <div class="col-lg-6 ps-lg-5">
            <h2 class="font-36 green-text font-Nerko pb-3">Contact Information</h2>
            <div class="row pb-3">
               <div class="col-1">
                  <i class="fas fa-phone me-2 fw-normal rounded-btn green-light"></i>
               </div>
               <div class="col-11">
                  <div class="row">
                     <div class="col-12">
                        <p class=" font-15 font-Asap fw-bolder">Office Tel - <a href="tel:0372069439"
                           class=" text-black black-hover">(+94) 372069439</a> ,
                           <a href="tel:0374944637" class="text-black black-hover">(+94) 374944637</a>
                        </p>
                     </div>
                     <div class="col-12 pt-1">
                        <p class=" font-15 font-Asap fw-bolder">Hotline - <a class="text-black black-hover"
                           href="tel:0773097893">(+94) 773097893</a> </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row pb-3">
               <div class="col-1">
                  <i class="fas fa-fax me-2 fw-bolder rounded-btn green-light"></i>
               </div>
               <div class="col-11">
                  <div class="row">
                     <div class="col-12 pt-1">
                        <p class=" font-15 font-Asap fw-bolder">Fax - 037-2225446</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row pb-3">
               <div class="col-1">
                  <i class="fas fa-envelope green-light rounded-btn me-2 fw-bolder "></i>
               </div>
               <div class="col-11">
                  <div class="row">
                     <div class="col-12 pt-1">
                        <p class=" font-15 font-Asap fw-bolder"><a class="text-black black-hover"
                           href="mailto:wayambaagro@sltnet.lk">wayambaagro@sltnet.lk</a> </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row pb-3">
               <div class="col-1">
                  <i class="fas fa-map-marker-alt green-light fw-bolder rounded-btn"></i>
               </div>
               <div class="col-11">
                  <div class="row">
                     <div class="col-12 pb-2 pt-1">
                        <p class=" font-15 font-Asap fw-bolder">Head office Address - No 22, Sudharma
                           mawatha, 
                        </p>
                        <p class=" font-15 font-Asap fw-bolder">Millawa, Kurunegala. </p>
                     </div>
                     <div class="col-12">
                        <p class=" font-15 font-Asap fw-bolder">Factory Address - Mahayaye Henyaya
                           Street,
                        </p>
                        <p class=" font-15 font-Asap fw-bolder"> Panwewa, Balalla. </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row pt-2">
               <h2 class="font-36 green-text font-Nerko pb-2">Follow us</h2>
               <div class="rounded-social-buttons">
                  <a class="social-button facebook hvr-wobble-bottom border-dark text-dark" href="#"
                     target="_blank"><i class="fa fa-facebook-f"></i></a>
                  <a class="social-button instagram hvr-wobble-bottom border-dark text-dark" href="#"
                     target="_blank"><i class="fa fa-instagram"></i></a>
                  <a class="social-button twitter hvr-wobble-bottom border-dark text-dark" href="#"
                     target="_blank"><i class="fa fa-twitter"></i></a>
                  <a class="social-button linkedin hvr-wobble-bottom border-dark text-dark" href="#"
                     target="_blank"><i class="fab fa-linkedin-in"></i></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection