@extends('frontend.app')
@section('content')
    {{--     <div class="container mt-1">
        <div class="row">
            <div class="col-12 px-0 ">
                <img src="{{ asset('images/frontend/inner-banner.webp') }}" class="w-100" alt="">
                <div class="carousel-caption inner-caption  d-none d-sm-block d-md-none d-lg-block">
                    <h3 class="fw-bold green-text font-Nerko pb-2">LOGIN / REGISTER
                    </h3>
                </div>
                <div class="col-12 d-none d-md-block d-lg-none px-sm-4 px-2  pt-2 mobile-display">
                    <nav aria-label="breadcrumb" class="d-flex justify-content-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="./"
                                    class="font-mediam  poppins-font text-black p-small p-hover">Home</a></li>
                            <li class="breadcrumb-item active font-mediam  poppins-font text-black p-small pt-1 pt-sm-0"
                                aria-current="page">My Account</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- end --}}
    <div class="container padding-10em">
        <div class="row pt-lg-5 pt-0 pb-5">

            <div class="col-md-12">
                @include('frontend.common.alerts')
            </div>


            <div class="col-lg-6">
                <h2 class="fw-bold green-text font-Nerko pb-3">LOGIN</h2>
                <div class="card p-lg-4 p-2 min-height1">
                    <div class="card-body px-0">

                        <form method="POST" enctype="multipart/form-data" action="{{ route('login') }}" autocomplete="off">
                            {{ csrf_field() }}
                            <div class="mb-3">
                                <label for="exampleFormControlInput1"
                                    class="form-label poppins-font text-secondary p-small">Registered Email address <span
                                        class="text-danger fw-bolder">*</span>
                                </label>
                                <input id="email" type="text" class="form-control my-account-field" name="email"
                                    value="{{ old('email') }}" required autofocus>
                                <div class="invalid-feedback">
                                    Email is invalid
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="mb-lg-2 w-100">
                                    <label for="exampleFormControlInput1"
                                        class="form-label poppins-font text-secondary p-small">Password <span
                                            class="text-danger fw-bolder">*</span>
                                    </label>
                                </div>
                                <input id="password" type="password" class="form-control my-account-field" name="password"
                                    required>
                                <div class="invalid-feedback">
                                    Password is required
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_SITEKEY') }}"></div>
                            </div>
                            <div class="d-grid gap-2 col-5">
                                <button
                                    class="form-class font-15 text-white fw-normal rounded-pill green-bg py-2 border border-success border-2 border-success border-2 w-50  py-2"
                                    type="submit">Login</button>
                            </div>
                        </form>
                        <div class="form-check mb-3 ps-0">
                            <p> <a href="{{ route('web.password.forgot') }}"
                                    class="font-mediam poppins-font text-dark p-mediam p-hover"> Forgot Password? </a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold green-text font-Nerko pb-3">REGISTER</h2>
                <div class="card p-lg-4 p-2">
                    <div class="card-body px-0">

                        <!-- Register Form-->
                        <form method="post" action="{{ route('register') }}">
                            @csrf
                            <div class="row">

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label poppins-font text-secondary p-small">First name<span
                                            class="text-danger fw-bolder">*</span>
                                    </label>
                                    <input type="text" name="first_name" id="first_name"
                                        class="form-control my-account-field @error('first_name') is-invalid @enderror"
                                        value="{{ old('first_name') }}" placeholder="First Name">
                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label poppins-font text-secondary p-small">Last name<span
                                            class="text-danger fw-bolder">*</span>
                                    </label>
                                    <input type="text" id="last_name" name="last_name"
                                        class="form-control my-account-field @error('last_name') is-invalid @enderror"
                                        value="{{ old('last_name') }}" placeholder="Last Name" required>

                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label poppins-font text-secondary p-small">Email address<span
                                            class="text-danger fw-bolder">*</span>
                                    </label>
                                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                                        class="form-control my-account-field @error('email') is-invalid @enderror"
                                        placeholder="Email" required>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label poppins-font text-secondary p-small">Phone<span
                                            class="text-danger fw-bolder">*</span>
                                    </label>
                                    <input type="text" id="phone" name="phone"
                                        class="form-control my-account-field @error('phone') is-invalid @enderror"
                                        value="{{ old('phone') }}"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                        maxlength="10" placeholder="Phone" required>

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label poppins-font text-secondary p-small">Password<span
                                            class="text-danger fw-bolder">*</span> <span class="text-danger"
                                            style="font-size:0.7rem;">(Minimum 8 characters)</span>
                                    </label>
                                    <input type="password" name="password" id="password"
                                        class="form-control my-account-field @error('registration_password') is-invalid @enderror"
                                        placeholder="Password" required>

                                    @error('registration_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label poppins-font text-secondary p-small">Confirm Password<span
                                            class="text-danger fw-bolder">*</span>
                                    </label>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="form-control my-account-field @error('registration_password_confirmation') is-invalid @enderror"
                                        placeholder="Confirm Password" required>

                                    @error('registration_password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_SITEKEY') }}"></div>
                                </div>
                                <div class="d-grid gap-2 col-5">
                                    <button
                                        class="form-class font-15 text-white fw-normal rounded-pill green-bg py-2 border border-success border-2 border-success border-2 w-50  py-2"
                                        type="submit">Sign Up</button>
                                    {{-- <p class="d-block font-mediam poppins-font text-dark p-mediam small">Already
                                        registered?
                                    </p> --}}
                                </div>
                            </div>
                        </form>
                        <!-- / Register Form-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/login.js"></script>
@endsection
@section('scripts')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection
