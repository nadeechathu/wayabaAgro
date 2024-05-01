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

    .contant_box_404 {
        margin-top: -50px;
    }
</style>
@section('content')
    <section class="page_404  font-Asap ">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="col-sm-12 text-center">
						<h1 class="text-center font-Asap">404</h1>
                        <div class="four_zero_four_bg">
                         


                        </div>

                        <div class="contant_box_404">
                            <h3 class="h2 font-Asap font-36 pt-2 fw-bolder black-text">
                                Look like you're lost
                            </h3>

                            <h5 class="py-2 font-18 font-Asap fw-bolder black-text text-center">The page you are looking for not avaible!</h5>

                      


							<a href="{{ url('/') }}" class="link_404 btn font-Asap border border-success border-2 text-uppercase font-15 green-bg text-white fw-normal px-4 rounded-pill hvr-forward">Go to Home</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
