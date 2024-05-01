<!doctype html>
<html lang="en">

<!-- Head -->
<head>
    <!-- Page Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset($commonContent['siteLogo']['description']) }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/libs.bundle.css')}}" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="../assets/css/theme.bundle.css" />

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Fix for custom scrollbar if JS is disabled-->
    <noscript>
        <style>
          /**
          * Reinstate scrolling for non-JS clients
          */
          .simplebar-content-wrapper {
            overflow: auto;
          }
        </style>
    </noscript>

    <!-- Page Title -->
    <title>{{ $commonContent['siteName']['description'] }}</title>
    
</head>
<body class="">

  <!-- Main Section-->
  <section class="d-flex justify-content-center align-items-start vh-100 py-5 px-3 px-md-0">

    <!-- Login Form-->
    <div class="d-flex flex-column w-100 align-items-center">

      <!-- Logo-->
      <a href="{{url('/')}}" class="d-table mt-5 mb-4 mx-auto">
        <div class="d-flex align-items-center">
          
            <img src="{{ asset($commonContent['siteLogo']['description']) }}" class="w-100" alt="">
        </div>      </a>
      <!-- Logo-->
      
      <div class="shadow-lg rounded p-4 p-sm-5 bg-white form">

        <!-- Login Form-->
        <div class="row">
								<div class="col-md-12">
									@include('admin.common.alerts')
								</div>
							</div>
        <form method="POST" class="mt-4" action="{{ route('login') }}">
                        @csrf 
          <div class="form-group">
            <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          </div>
          <div class="form-group">
            
            <label for="password" class="form-label d-flex justify-content-between align-items-center">{{ __('Password') }}</label>
              
              
            </label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <a href="{{route('web.password.forgot')}}" class="text-muted small ms-2 text-decoration-underline">Forgotten
                password?</a>
          </div>
          <div class="form-group">
                     <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_SITEKEY')}}"></div>
                    </div>
          <button type="submit" class="btn btn-success text-white d-block w-100 my-4">Login</button>
        </form>
        <!-- / Login Form -->

        {{--<p class="d-block text-center text-muted small">New customer? <a class="text-muted text-decoration-underline"
            href="{{url('register')}}">Sign up for an account</a></p>--}}
      </div>
    </div>
    <!-- / Login Form-->

  </section>
  <!-- / Main Section-->

  <!-- Theme JS -->
  <!-- Vendor JS -->
  <script src="../assets/js/vendor.bundle.js"></script>
  
  <!-- Theme JS -->
  <script src="../assets/js/theme.bundle.js"></script>
</body>

</html>
