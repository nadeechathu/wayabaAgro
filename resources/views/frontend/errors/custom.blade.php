{{-- @extends('layouts.app')
@section('content')
    <div class="container-fluid py-2">
        <div class="container erro-handlig-page ">
            <div class="row">
                <div class="col-12 text-center">

                        <img class="error-image mx-auto d-block w-100" src="{{ asset('Front/images/erro-01.jpg') }}" >

        <h2 class="error-heading ">Go back to <a href="/">Home</a></h2>

                </div>

            </div>
        </div>
    </div>
@endsection --}}



@extends('frontend.app')
<style>
    /*======================
  404 page
 =======================*/


    .page_404 {
        padding: 40px 0;
        background: #fff;
        font-family: 'Arvo', serif;
    }

    .page_404 img {
        width: 100%;
    }

    .four_zero_four_bg {

        background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
        height: 400px;
        background-position: center;
    }


    .four_zero_four_bg h1 {
        font-size: 80px;
    }

    .four_zero_four_bg h3 {
        font-size: 80px;
    }

    .link_404 {
        color: #fff !important;
        padding: 10px 20px;
        background: #39ac31;
        margin: 20px 0;
        display: inline-block;
    }

  
</style>
@section('content')
    <section class="page_404  font-Asap ">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="col-sm-12 text-center">


                        <div class="contant_box_404 ">


                            <img src="{{ asset('/images/frontend/images/erro-01.jpg') }}" alt="" class="w-100">


							<a href="{{ url('/') }}" class="link_404 btn font-Asap border border-success border-2 text-uppercase font-15 green-bg text-white fw-normal px-4 rounded-pill hvr-forward">Go to Home</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
