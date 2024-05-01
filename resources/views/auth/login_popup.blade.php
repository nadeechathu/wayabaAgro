<!-- Google Font-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- Vendor CSS -->
<link rel="stylesheet" href="{{asset('/assets/css/libs.bundle.css')}}" />
<!-- Main CSS -->
<!-- <link rel="stylesheet" href="./assets/css/theme.bundle.css" /> -->
<style>
   #login-form label {
   font-size:0.9rem;
   margin-top : 0.9rem;
   }
</style>
<!-- Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border border-warning">
         <div class="modal-header  auth-header py-2">
            <h5 class="modal-title" id="exampleModalLabel text-left">
               <img src="{{ asset( $commonContent['siteLogo']['description']) }}" class="w-25" alt="">
               <span class="fw-bolder text-dark font-red-hat">{{ $commonContent['siteName']['description']}} Login</span>
            </h5>
            <button type="button" class="btn-close btn-secondary btn-form" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form method="POST"  id="login-form" action="{{ route('login') }}" onsubmit="localStorage.setItem('form','login');">
               @csrf
               <div class="form-group">
                  <label for="email" class="form-label font-red-hat fw-bolder ">{{ __('E-Mail Address') }}</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @if ($errors->any())
                  <input type="text" hidden id="login-errors">
                  @endif
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
               <div class="form-group">
                  <label for="password" class="form-label d-flex justify-content-between align-items-center font-red-hat fw-bolder ">{{ __('Password') }}</label>
                  </label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                  <a href="{{route('web.password.forgot')}}" class="text-muted small ms-2 text-decoration-underline font-red-hat fw-normal ">Forgotten
                  password?</a>
               </div>
               <button type="submit" class="btn reg-btn d-block w-100 my-4 py-2 font-red-hat btn bg-yellow btn-read-more"><i class="fa fa-sign-in"></i> Login</button>
            </form>
            <!-- / Login Form -->
            @if (isset($fromCart))
            <h4 class="d-block text-center text-muted small">OR</h4>
            <a href="{{url('cart/checkout')}}"> <button type="button" class="btn btn-dark d-block w-100 my-4"><i class="fa fa-user" aria-hidden="true"></i>
            Continue As Guest</button></a>
            @endif
         </div>
         <div class="modal-footer auth-header text-center bg-dark">
            <p class="auth-copy-text footer-txt">Copyright © <?php echo date("Y"); ?>  {{ $commonContent['siteName']['description']}} - All Rights Reserved.</p>
         </div>
      </div>
   </div>
</div>
