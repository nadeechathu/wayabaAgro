<div class="container-fluid header-sec ">

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-7 pt-lg-5 pt-3 pb-lg-0 pb-2 logo-sec">
                <a href="/" title="Wayamba Agro Exports Co. (Pvt) | Home page">
                    <img src="{{ asset('/images/frontend/images/Wayamba-Agro.png') }}" class="d-block w-100"
                        alt="Wayamba Agro Exports Co. (Pvt) Ltd">
                </a>
            </div>
            <div class="col-lg-8 col-sm-12 align-self-lg-end align-self-sm-end pt-lg-4 pt-sm-3">
                <div class="row">
                    <div class="col-lg-12 col-sm-10 d-sm-none d-md-block">
                        <div class="row justify-content-lg-end justify-content-sm-end">
                            <div class="col-lg-3 col-sm-3 col-6">
                                <form action="{{ route('web.select.country') }}" id="selectCountry" method="post">
                                    {{ csrf_field() }}
                                    <select
                                        class="form-select border bg-light-white rounded-3 py-1 font-16 fw-normal font-Asap"
                                        aria-label="Default select example" id="countryList" name="selected_country"
                                        onchange="this.form.submit()">

                                        @foreach ($commonContent['countries'] as $country)
                                            <option
                                                {{ Session::get('selectedCountry') == $country->country_code ? 'selected' : '' }}
                                                value='{{ $country->id }}'>{{ $country->country_name }}</option>
                                        @endforeach
                                    </select>


                                </form>

                            </div>
                            @if (Session::get('selectedCountry') == 'LK')
                            <div class="col-lg-2 col-sm-3 col-6" id="cart-div">
                                <div class="row border bg-light-white rounded-3 py-1">
                                   
                                    <div class="col-12 pe-0">
                                        {{-- <p class="font-16 fw-bold font-Asap text-danger ">(0)</p>
                                       --}}
                                       <div class="dropdown show dropdown_for_mini_cart">
                                        @include('frontend.cart.minicart')
                                     </div>
                                    </div>
                                </div>
                            </div>
                          


                            <div class="col-1-1"></div>

                            <div class="col-lg-1 col-sm-2  col-2" id="whishlist-div">
                                <div class="row border bg-light-white rounded-3">
                                    <div class="col-12 text-center">

                                     
                                          <p class="font-22">
                                            <a href="/user/profile">  <i class="fa fa-heart text-danger pt-1 "></i></a>
                                           </p>
                                       
                                    </div>
                                    {{-- <div class="col-7">
                                        <p class="font-16 fw-bold font-Asap text-black  ">(0)</p>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-8 text-end my-account-btn">
                                <div class="row py-1">

                                    <div class="col-6">
                                        <div class="dropdown-overlay"></div>


                                        @if (Auth::user() == null)
                                            <a href="{{ route('web.loginRegister') }}"> <img
                                                    src="{{ asset('/images/frontend/images/login-icon.png') }}"
                                                    class="" alt="Wayamba Agro Exports Co. (Pvt) Ltd">
                                            </a>
                                        @else
                                            <div class="dropdown profile-drop">
                                                <button
                                                    class="btn btn-default dropdown-toggle font-16 fw-bold font-Asap text-black pt-0 ps-lg-3"
                                                    type="button" id="dropdownMenu1" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="true">
                                                    {{ Auth::user()->first_name }} <img
                                                        src="{{ asset('/images/frontend/images/login-icon.png') }}"
                                                        class="" alt="Wayamba Agro Exports Co. (Pvt) Ltd">
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu default-menu" aria-labelledby="dropdownMenu1">
                                                    <li><a class="dropdown-item account-dropdown poppins-font text-dark p-hover p-small mb-1 d-inline-block"
                                                            href="{{ route('web.user.account') }}">My Account</a></li>
                                                    <li><a class="dropdown-item account-dropdown poppins-font text-dark p-hover p-small d-inline-block"
                                                            href="#"
                                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                        <form id="logout-form" action="{{ route('logout') }}"
                                                            method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                    </li>

                                                </ul>
                                        @endif



                                    </div>


                                </div>
                            </div>

                            @else
                            @endif
{{-- end selectedCountry --}}

                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12">
                    <nav class="navbar navbar-expand-lg ">

                        <a class="navbar-brand d-block d-sm-none font-Nerko font-22 pb-1  black-text">Menu</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon navbar-tag ">

                                <i class="fal fa-bars"></i>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav nav-section">
                                <li class="nav-item">
                                    <a class="nav-link font-15 nav-font fw-bolder  px-0 {{ request()->is('/') ? 'active' : '' }}"
                                        aria-current="page" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link font-15 nav-font fw-bolder px-0 {{ request()->is('about-us') ? 'active' : '' }}"
                                        href="{{ url('about-us') }}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link font-15 nav-font fw-bolder px-0 {{ request()->is('shop') ? 'active' : '' }}"
                                        href="{{ url('shop') }}">Shop</a>
                                </li>
                                @if (Session::get('selectedCountry') == 'LK')
                                <li class="nav-item">
                                    <a class="nav-link font-15 nav-font fw-bolder px-0 {{ request()->is('cart') ? 'active' : '' }}"
                                        href="{{ url('cart') }}">My Cart</a>
                                </li>
                                @else
                             @endif
                                <li class="nav-item">
                                    <a class="nav-link font-15 nav-font fw-bolder px-0 {{ request()->is('blog') ? 'active' : '' }}"
                                        href="{{ url('blog') }}">My Blog</a>
                                </li>
                                <li class="nav-item">

                                    <a class="nav-link font-15 nav-font fw-bolder px-0 {{ request()->is('contact') ? 'active' : '' }}"
                                        href="{{ url('contact') }}">Contact Us</a>
                                </li>

                            </ul>
                        </div>

                    </nav>
                </div>
            </div>

        </div>
    </div>

</div>


</div>
