<!-- Google Font-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- Vendor CSS -->
<link rel="stylesheet" href="{{asset('/assets/css/libs.bundle.css')}}" />
<!-- Main CSS -->
<!-- <link rel="stylesheet" href="./assets/css/theme.bundle.css" /> -->
<style    >
   #register-form label {
   font-size:0.9rem;
   margin-top : 0.9rem;
   }
</style>
<!-- Modal -->
<div class="modal fade" id="register-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg modal-dialog-centered" >
    <div class="modal-content border border-warning">
         <div class="modal-header auth-header py-2">
            <h5 class="modal-title" id="exampleModalLabel text-left">
               <img src="{{ asset($commonContent['siteLogo']['description']) }}" style="width: 16%; " alt="">
               <span class="fw-bolder text-dark font-red-hat">{{  $commonContent['siteName']['description']}} Customer Registration</span>
            </h5>
            <button type="button" class="btn-close btn-secondary btn-form" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body" >
            <!-- Register Form-->
            <form method="post" id="register-form" action="{{ route('register') }}" onsubmit="deactivateSignupButton();">
               @csrf

<div class="row">
    <div class="col-lg-6 col-12">  <div class="form-group">
        <label class="form-label font-red-hat fw-bolder" for="first_name">First Name *</label>
        <input type="text"
           name="first_name"
           id="first_name"
           class="form-control @error('first_name') is-invalid @enderror"
           value="{{ old('first_name') }}"
           placeholder="First Name" required>
        @if ($errors->any())
        <input type="text" hidden id="register-errors">
        @endif
        @error('first_name')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
     </div></div>
    <div class="col-lg-6 col-12">
        <div class="form-group">
            <label class="form-label font-red-hat fw-bolder" for="last_name">Last Name *</label>
            <input type="text"
               id="last_name"
               name="last_name"
               class="form-control @error('last_name') is-invalid @enderror"
               value="{{ old('last_name') }}"
               placeholder="Last Name" required>
            @error('last_name')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
         </div>
    </div>

</div>

<div class="row">
    <div class="col-lg-6 col-12">
        <div class="form-group">
            <label class="form-label font-red-hat fw-bolder" for="phone">Phone Number *</label>
            <input type="text"
               id="phone"
               name="phone"
               class="form-control @error('phone') is-invalid @enderror"
               value="{{ old('phone') }}"
               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
               maxlength="10"
               placeholder="Phone Number" required>
            @error('phone')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
         </div>
    </div>
    <div class="col-lg-6 col-12">
        <div class="form-group">
            <label class="form-label font-red-hat fw-bolder" for="email">Email Address *</label>
            <input type="email"
               name="email"
               id="email"
               value="{{ old('email') }}"
               class="form-control @error('email') is-invalid @enderror"
               placeholder="Email" required>
            @error('email')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
         </div>
    </div>

</div>

<div class="row">
    <div class="col-lg-6 col-12">  <div class="form-group">
        <label class="form-label font-red-hat fw-bolder" for="password">
           Password *</label>
           <input type="password"
              name="password"
              id="password"
              class="form-control @error('password') is-invalid @enderror"
              placeholder="Password" required>
           @error('password')
           <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
           </span>
           @enderror
     </div></div>
    <div class="col-lg-6 col-12">
        <div class="form-group">
            <label class="form-label font-red-hat fw-bolder" for="password_confirmation">Confirm Password *</label>
            <input type="password"
               name="password_confirmation"
               id="password_confirmation"
               class="form-control @error('password_confirmation') is-invalid @enderror"
               placeholder="Confirm Password" required>
            @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
            </div>
    </div>

</div>

<div class="row">
    <div class="col-12">
        <button type="submit"  class="btn reg-btn d-block w-100 my-4 py-2 font-red-hat btn bg-yellow btn-read-more" id="reg-button"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign Up</button>
    </div>


</div>


            </form>
            <!-- / Register Form-->
         </div>
         <div class="modal-footer auth-header text-center bg-dark">
            <p class="auth-copy-text footer-txt">Copyright © <?php echo date("Y"); ?>  {{ $commonContent['siteName']['description']}} - All Rights Reserved.</p>
         </div>
      </div>
   </div>
</div>
<script>
   function deactivateSignupButton(){
       localStorage.setItem('form','register')

       document.getElementById('reg-button').setAttribute('disabled','disabled');
   }
</script>
