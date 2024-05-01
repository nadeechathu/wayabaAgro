<div class="container-fluid contact-sec py-5 border-top " id="home-contact">
    <div class="container pt-lg-1">
        <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg-6">
                <h2 class="font-36 green-text font-Nerko pb-2">Get In Touch With Us</h2>
                <p class="font-15 font-Asap fw-normal black-text" id="fom-contact">We look forward to hearing from you and helping you with any questions or concerns you may have. Our goal is to provide exceptional customer service and support, so please don't hesitate to get in touch with us today!</p>
                @include('frontend.common.alerts')
                <form class="" method="POST" action="{{route('web.getintouchsubmit')}}" onsubmit="document.getElementById('getin-contact-submit').setAttribute('disabled','disabled');">
              
                {{csrf_field()}}    
                <div class="my-3">
                    
                      <input type="text" class="form-control rounded-10 shadow-input border-0 font-15 font-Asap fw-normal black-text py-2" id="" placeholder="Full Name" name="Inquiry_name" value="{{old('Inquiry_name')}}" required>
                    
                    </div>
                    <div class="mb-3 mt-1">
                    
                        <input type="text" class="form-control rounded-10 shadow-input border-0 font-15 font-Asap fw-normal black-text py-2" id="" placeholder="Email Address" name="Inquiry_email" value="{{old('Inquiry_email')}}" required>
                      
                      </div>

                      <div class="mb-3 mt-1">
                    
                        <input type="numeric" class="form-control rounded-10 shadow-input border-0 font-15 font-Asap fw-normal black-text py-2" id="" placeholder="Phone No." name="Inquiry_phone" value="{{old('Inquiry_phone')}}" required>
                      
                      </div>
                      <div class="mb-3 mt-1">
                    
                        <textarea class="form-control rounded-10 shadow-input border-0 font-15 font-Asap fw-normal black-text py-2" id="exampleFormControlTextarea1" placeholder="Message" rows="10" name="Inquiry_message" required>{{old('Inquiry_message')}}</textarea>
                      
                      </div>

                      <div class="mb-3 mt-1">
                        <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_SITEKEY')}}"></div>
                      </div>
                  
                    <button type="submit" class="btn mt-2 font-Asap green-bg text-white fw-normal px-4 rounded-pill hvr-forward" id="getin-contact-submit">Submit Now</button>
                     <!-- success message -->
                  

                  </form>
            </div>
        </div>
    </div>          
</div>    