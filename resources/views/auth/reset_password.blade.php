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
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png">
    <link rel="mask-icon" href="./assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/libs.bundle.css.')}}" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="../assets/css/theme.bundle.css" />

    <link href="{{ asset('assets/css/swiper.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/hover.css') }}" rel="stylesheet">

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
      <a href="./index.html" class="d-table mt-5 mb-4 mx-auto">
        <div class="d-flex align-items-center">
          
            <span class="fw-black text-uppercase tracking-wide fs-6 lh-1">Reset Password</span>
        </div>      </a>
      <!-- Logo-->
      
      <div class="shadow-lg rounded p-4 p-sm-5 bg-white form">

        <!-- Login Form-->
        <div class="row">
								<div class="col-md-12">
									@include('admin.common.alerts')
								</div>
							</div>
							<form method="POST" enctype="multipart/form-data" action="{{route('web.password.change')}}" autocomplete="off">
                                {{csrf_field()}}
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail Address</label>
									<input id="email" type="email" readonly class="form-control" name="email" value="{{$email}}" required>
									
								</div>
                                <div class="mb-3">
									<label class="mb-2 text-muted" for="email">Password</label>
									<input id="password" type="password" class="form-control" name="password" value="" required autofocus>
									
								</div>
                                <div class="mb-3">
									<label class="mb-2 text-muted" for="email">Confirm Password</label>
									<input id="confirm_password" type="password" class="form-control" name="confirm_password" value="" required >
									
								</div>								

								<div class="d-flex align-items-center">
									
									<button type="submit" style="width:100%;" class="btn btn-primary ms-auto">
										Reset Password
									</button>
								</div>
							</form>
        <!-- / Login Form -->
		  <br/>
		<p class="d-block text-center text-muted small">Already registered? 
                                <a class="text-muted text-decoration-underline" href="{{url('login')}}">Login here.</a></p>
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
