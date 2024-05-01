@extends('frontend.app')

@section('content')
    <div class="container-fluid padding-10em">
        <div class="container ">
            <div class="row ">
                <div class="col-12 pt-lg-5">
                    <h1 class="fw-bold green-text font-Nerko pb-lg-4 pb-3">About Us</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-8">
                    <p class=" font-15 font-Asap fw-normal black-text">
                        We initiated to supply our produce within Kurunegala area and realized that we have the potential to
                        extend our service to Gampaha and Puttlam district. Beyond that we ventured in to global market
                        where we have managed to shine our brand.
                    </p>
                </div>
                <div class="col-lg-5 col-md-4">
                    <img src="{{ asset('/images/frontend/About-us/About-Us_03.png') }}" alt="" class="w-100">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h2 class="fw-bold green-text font-Nerko pb-2">
                        Vision and Mission Statement
                    </h2>
                </div>
            </div>


            <div class="row about-vision-sec py-5 pl-lg-5">
                <div class="col-lg-4 col-md-4 col-sm-12 text-lg-start text-md-start  text-center">
                    <img src="{{ asset('/images/frontend/about-us/aboutus-icon_03.png') }}" class="w-50" alt="">
                </div>
                <div class="col-lg-8 col-md-8">
                    <h2 class="green-text font-Nerko text-lg-end text-md-end text-sm-center font-30">Our Vision</h3>
                        <p class="font-15 font-Asap fw-normal black-text text-lg-end text-md-end text-sm-center">
                            To be the One-Stop-Destination for Spices, Coconut & Fiber Products with constantly innovative
                            to provide customers high quality and value for money across the globe.
                        </p>
                </div>
            </div>


            <div class="row about-mission-sec py-5 pe-lg-5 my-lg-5 my-3">
                <div class="col-lg-4 col-md-4 col-sm-12 text-end d-lg-none d-md-none text-center">
                    <img src="{{ asset('/images/frontend/about-us/aboutus-icon_07.png') }}" class="w-50" alt="">
                </div>
                <div class="col-lg-8 col-md-8">
                    <h2 class="green-text font-Nerko text-lg-start text-md-start text-sm-center font-30">Our Mission
                    </h3>
                        <p class="font-15 font-Asap fw-normal black-text text-lg-start text-md-start text-sm-center ">
                            To be a Manufacture, Distributor & Exporter of exceptional quality products with best ingredients leading towards greater customer satisfaction with a devouring culinary experience.
                        </p>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 text-end d-lg-block d-md-block d-sm-none d-none">
                    <img src="{{ asset('/images/frontend/about-us/aboutus-icon_07.png') }}" class="w-50" alt="">
                </div>
            </div>


        </div>
    </div>


@endsection
