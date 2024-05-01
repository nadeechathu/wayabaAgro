@extends('frontend.app')
<style>
    .success-animation { margin:20px auto;}

.checkmark {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    display: block;
    stroke-width: 2;
    stroke: #4bb71b;
    stroke-miterlimit: 10;
    box-shadow: inset 0px 0px 0px #4bb71b;
    animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
    position:relative;
    top: 5px;
    right: 5px;
   margin: 0 auto;
}
.checkmark__circle {
    stroke-dasharray: 166;
    stroke-dashoffset: 166;
    stroke-width: 2;
    stroke-miterlimit: 10;
    stroke: #4bb71b;
    fill: #fff;
    animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;

}

.checkmark__check {
    transform-origin: 50% 50%;
    stroke-dasharray: 48;
    stroke-dashoffset: 48;
    animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
}

@keyframes stroke {
    100% {
        stroke-dashoffset: 0;
    }
}

@keyframes scale {
    0%, 100% {
        transform: none;
    }

    50% {
        transform: scale3d(1.1, 1.1, 1);
    }
}

@keyframes fill {
    100% {
        box-shadow: inset 0px 0px 0px 30px #4bb71b;
    }
}
</style>
@section('content')

<!-- Breadcrumbs-->
{{-- <div class="border-bottom py-3 breadcrumb-bgColor">
    <div class="d-flex justify-content-start align-items-center mt-3 mt-md-0 px-4">
       <ol class="breadcrumb m-0">
          <li class="breadcrumb-item"><a class="breadcrumb-home" href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active breadcrumb-active" aria-current="page">Order Complete
        </li>
       </ol>
    </div>
 </div> --}}


<div class="container-fluid profile-section padding-10em">
   <div class="container font-red-hat  py-5">


<div class="row">
    <div class="col-md-12">

	<div class="row">
        <div class="jumbotron border border-secondary py-4">
            <h2 class="text-center font-Asap font-22 pb-2 fw-bolder black-text">YOUR ORDER HAS BEEN RECEIVED</h2>
          <h3 class="text-center font-Asap font-20 pb-2 fw-bolder black-text">Thank you for ordering with us.</h3>

          <div class="success-animation">
<svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" /><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" /></svg>
</div>

          <p class="text-center font-14 font-Asap fw-normal black-text">Your order tracking number is : <b>{{$trackingNumber}}</b></p>
          <p class="text-center font-14 font-Asap fw-normal black-text">You will receive an order confirmation email with details of your order and a link to track your process.</p>



    @if (Auth::user())

    <div class="py-5 text-center">
                    <a href="{{route('web.user.account')}}"class="btn py-3 fw-bolder px-2 lg-w-25 w-75 border border-warning rounded-pill text-uppercase categoriy-btn  rounded-pill font-30 font-Asap border border-danger py-2 border-1 fw-bolder w-25 text-black bg-white mt-3 hover-btn btn-mobile">
                  GO TO ORDERS
                       </a>
                   </div>

    @else

    <div class="py-5 text-center">
                    <a href="{{('/')}}"class="btn py-3 fw-bolder px-2 w-25 border border-warning rounded-pill text-uppercase categoriy-btn">
                  CONTINUE SHOPPING
                       </a>
                   </div>

    @endif



        </div>
	</div>
</div>
    </div>






      </div>
   </div>
</div>
@endsection
