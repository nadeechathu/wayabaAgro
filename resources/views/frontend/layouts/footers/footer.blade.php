<div class="container-fluid footer-sec ">

    <div class="container">
        <div class="row">
            <div class="col-lg-4">

                <a href="/" title="Wayamba Agro Exports Co. (Pvt) | Home page">
                    <img src="{{ asset('/images/frontend/images/logo-black&white.png') }}" class="mb-3"
                        alt="Wayamba Agro Exports Co. (Pvt) Ltd.">
                </a>


                <p class="font-13 fst-italic font-Asap fw-normal text-white pb-3">We initiated to supply our produce within Kurunegala area and realized that we have the potential to extend our service to Gampaha and Puttlam district.</p>
                <a  href="{{ route('web.aboutus') }}"
                    class="btn font-Asap border border-success border-2 text-uppercase font-15 green-bg text-white fw-normal px-4 rounded-pill hvr-forward">Read
                    mORE</a>

                <div class="rounded-social-buttons pt-4">
                    <a class="social-button facebook hvr-wobble-bottom" href="{{$commonContent['facebookLink']['description']}}" target="_blank"><i
                            class="fa fa-facebook-f"></i></a>

                    <a class="social-button instagram hvr-wobble-bottom" href="{{$commonContent['instagramLink']['description']}}" target="_blank"><i
                            class="fa fa-instagram"></i></a>
                    <a class="social-button twitter hvr-wobble-bottom" href="{{$commonContent['twitterLink']['description']}}" target="_blank"><i
                            class="fa fa-twitter"></i></a>

                    <a class="social-button linkedin hvr-wobble-bottom" href="{{$commonContent['youtubeLink']['description']}}" target="_blank"><i
                            class="fab fa-youtube"></i></a>

                </div>

            </div>
            <div class="col-lg-1 d-sm-none d-md-block"></div>
            <div class="col-lg-3 col-sm-3">
                <h4 class="font-36 text-white font-Nerko pb-3 pt-lg-0 pt-sm-3">Quick Links</h4>

                <ul>
                    <li class="pb-2"> <img src="{{ asset('/images/frontend/images/icon1.png') }}" class="me-3"
                            alt="Wayamba Agro Exports Co. (Pvt) Ltd."><a href="/"
                            class="font-15 font-Asap fw-normal text-white hvr-forward">Home</a></li>
                    <li class="pb-2"> <img src="{{ asset('/images/frontend/images/icon1.png') }}" class="me-3"
                            alt="Wayamba Agro Exports Co. (Pvt) Ltd."><a href="{{ route('web.aboutus') }}"
                            class="font-15 font-Asap fw-normal text-white hvr-forward">About us</a></li>
                    <li class="pb-2"> <img src="{{ asset('/images/frontend/images/icon1.png') }}" class="me-3"
                            alt="Wayamba Agro Exports Co. (Pvt) Ltd."><a href="{{ route('web.shop') }}"
                            class="font-15 font-Asap fw-normal text-white hvr-forward">Shop</a></li>

                            @if (Session::get('selectedCountry') == 'LK')
                    <li class="pb-2"> <img src="{{ asset('/images/frontend/images/icon1.png') }}" class="me-3"
                            alt="Wayamba Agro Exports Co. (Pvt) Ltd."><a href="{{ route('web.cart') }}"
                            class="font-15 font-Asap fw-normal text-white hvr-forward">My Cart</a></li>
                            @else
                            @endif
                    <li class="pb-2"> <img src="{{ asset('/images/frontend/images/icon1.png') }}" class="me-3"
                            alt="Wayamba Agro Exports Co. (Pvt) Ltd."><a href="{{ route('web.blog') }}"
                            class="font-15 font-Asap fw-normal text-white hvr-forward">My Blog</a></li>
                    <li class="pb-2"> <img src="{{ asset('/images/frontend/images/icon1.png') }}" class="me-3"
                            alt="Wayamba Agro Exports Co. (Pvt) Ltd."><a href="{{ route('web.contact.us') }}"
                            class="font-15 font-Asap fw-normal text-white hvr-forward">Contact us</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-sm-9 col-12">
                <h4 class="font-36 text-white font-Nerko pb-3 pt-lg-0 pt-sm-3">Contact Us</h4>
                <div class="row pb-3">
                    <div class="col-1">
                        <i class="fas fa-phone me-2 fw-normal rounded-btn green-light"></i>
                    </div>
                    <div class="col-11">
                        <div class="row">
                            <div class="col-12">
                                <p class="text-white font-15 font-Asap fw-normal">Office Tel - <a href="tel:0372069439"
                                        class="text-white black-hover">(+94) 372069439</a> ,
                                    <a href="tel:0374944637" class="text-white black-hover">(+94) 374944637</a>
                                </p>
                            </div>
                            <div class="col-12 pt-1">
                                <p class="text-white font-15 font-Asap fw-normal">Hotline - <a
                                        class="text-white black-hover" href="tel:0773097893">(+94) 773097893</a> </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-1">
                        <i class="fas fa-fax me-2 fw-normal rounded-btn green-light"></i>
                    </div>
                    <div class="col-11">
                        <div class="row">
                            <div class="col-12 pt-1">
                                <p class="text-white font-15 font-Asap fw-normal">Fax - 037-2225446</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-1">
                        <i class="fas fa-envelope green-light rounded-btn me-2 fw-normal "></i>
                    </div>
                    <div class="col-11">
                        <div class="row">
                            <div class="col-12 pt-1">
                                <p class="text-white font-15 font-Asap fw-normal"><a class="text-white black-hover"
                                        href="mailto:wayambaagro@sltnet.lk">wayambaagro@sltnet.lk</a> </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-1">
                        <i class="fas fa-map-marker-alt green-light fw-normal rounded-btn"></i>
                    </div>
                    <div class="col-11">
                        <div class="row">
                            <div class="col-12 pb-2 pt-1">
                                <p class="text-white font-15 font-Asap fw-normal">Head office Address - No 22, Sudharma
                                    mawatha, Millawa, Kurunegala. </p>
                            </div>
                            <div class="col-12">
                                <p class="text-white font-15 font-Asap fw-normal">Factory Address - Mahayaye Henyaya
                                    Street, Panwewa, Balalla.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>




<div id="jsScroll" class="scroll" onclick="scrollToTop();">
    <i class="fal fa-angle-up icon-bottom"></i>
  </div>




<div class="container-fluid copyright-sec py-2 green-bg">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-1">
                <p class="font-15 font-Asap fw-normal text-white">© <?php echo date('Y'); ?> – Wayamba Agro Exports Co.
                    (Pvt) Ltd.Rights Reserved.</p>
            </div>
            <div class="col-lg-6 pt-1 text-center ">
                <p class="font-15 font-Asap fw-normal text-white">Designed & Developed by <a href=""
                        class="text-white black-hover" target="_blank"> GUI Solutions Lanka</a></p>
            </div>

        </div>
    </div>
</div>
