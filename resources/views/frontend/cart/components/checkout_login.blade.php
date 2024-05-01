<style>
   #checkout-login-form label {
            font-size:0.9rem;
            margin-top : 0.9rem;
        }
</style>


<button type="button" class="btn submit-btn w-100 
rounded-3 font-20 font-Asap border border-danger py-1 border-1 fw-bolder  text-black bg-white hover-btn btn-mobile" data-bs-toggle="modal" data-bs-target="#checkout-login">
Proceed To Checkout
</button>

<!-- Modal -->
<div class="modal fade" id="checkout-login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width:500px;">
    <div class="modal-content">
      <div class="modal-header auth-header">
        <h5 class="modal-title font-18 fw-bolder black-text" id="exampleModalLabel">
          Login to Continue</h5>
        {{-- <img src="{{ asset($commonContent['siteLogo']['description']) }}" class="w-50" alt=""> Login to continue</h5> --}}
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" id="checkout-login-form" class="mt-4" action="{{ route('login') }}">
                        @csrf 
          <div class="form-group">
            <label for="email" class="font-15 font-Asap fw-normal black-text pb-2">Email Address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            <input type="text" hidden name="from_cart" value="1"/>
            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          </div>
          <div class="form-group text-left">
            
            <label for="password" class="font-15 font-Asap fw-normal black-text pb-2">Password</label>
              
              
            </label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        
          </div>

          <div class="my-3 text-end">
            <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_SITEKEY')}}"></div>
   </div>
          
          <button type="submit" class="btn  font-15 text-white fw-normal rounded-3 green-bg py-2 border border-success border-2 border-success border-2  py-2 w-100 mb-4 "><i class="fa fa-sign-in"></i>  Login</button>
        </form>
        <!-- / Login Form -->

        <h4 class="d-block text-center font-15 font-Asap fw-normal black-text ">OR</h4>

       <a href="{{url('cart/checkout')}}"> <button type="button" class="btn d-block w-100 my-4
        form-class font-15 text-white fw-normal rounded-3 green-bg py-2 border border-success border-2 border-success border-2  py-2
        "><i class="fa fa-user" aria-hidden="true"></i>
 Continue As Guest</button></a>
      </div>
      <div class="modal-footer auth-header text-center">
       <p class="auth-copy-text font-13 font-Asap fw-normal black-text ">Copyright © <?php echo date("Y"); ?>  {{$commonContent['siteName']['description']}} - All Rights Reserved.</p> 
      </div>
    </div>
  </div>
</div>