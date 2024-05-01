@extends('frontend.app')
@section('content')




 <div class="container-fluid breadcrumb-bgColor">
    <div class="container">
       <div class="row">
          <!-- Breadcrumbs-->
          <!-- <div class="col-12  py-3">
             <div class="d-flex justify-content-start align-items-center">
                <ol class="breadcrumb m-0">
                   <li class="breadcrumb-item"><a class="breadcrumb-home" href="{{ url('/') }}">Home</a></li>
                   <li class="breadcrumb-item active breadcrumb-active" aria-current="page">My Account
                </li>
                </ol>
             </div>
          </div> -->
       </div>
    </div>
 </div>
 <!-- / Breadcrumbs-->










<div class="container-fluid profile-section padding-10em">
   <div class="container font-red-hat  py-5">
       <div class="row">
        <div class="col-12 pb-2">
            <h2 class="haeding-h2 fw-bold dark-green-title">My Account</h2>


         </div>
       </div>
       <div class="row">
         <div class="col-md-12">
           @include('frontend.common.alerts')
         </div>
       </div>
      <div class="row">
        <div class="d-lg-flex align-items-start shadow-lg px-2 py-4 bg-body rounded border">
         <div class="col-lg-2 col-12">

            <div class="nav flex-column nav-pills me-3 profile-tab" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link text-start fs-6 mb-2  fw-bolder" id="v-pills-dashboard-tab" data-bs-toggle="pill" data-bs-target="#v-pills-dashboard" type="button" role="tab" aria-controls="v-pills-dashboard" onClick="setSelectedTab('v-pills-dashboard-tab')" aria-selected="true">Dashboard</button>
                <button class="nav-link active text-start fs-6 mb-2  fw-bolder" id="v-pills-order-tab" data-bs-toggle="pill" data-bs-target="#v-pills-order" type="button" role="tab" aria-controls="v-pills-order" onClick="setSelectedTab('v-pills-order-tab')" aria-selected="false">My Orders</button>
                <button class="nav-link text-start fs-6 mb-2  fw-bolder" id="v-pills-address-tab" data-bs-toggle="pill" data-bs-target="#v-pills-address" type="button" role="tab" aria-controls="v-pills-address" onClick="setSelectedTab('v-pills-address-tab')" aria-selected="false">Addresses</button>
                <button class="nav-link text-start fs-6 mb-2  fw-bolder" id="v-pills-account-tab" data-bs-toggle="pill" data-bs-target="#v-pills-account" type="button" role="tab" aria-controls="v-pills-account" onClick="setSelectedTab('v-pills-account-tab')" aria-selected="false">Account Details</button>
                <button class="nav-link text-start fs-6 mb-2  fw-bolder" id="v-pills-wishlist-tab" data-bs-toggle="pill" data-bs-target="#v-pills-wishlist" type="button" role="tab" aria-controls="v-pills-wishlist" onClick="setSelectedTab('v-pills-wishlist-tab')" aria-selected="false">Wishlist</button>
                <form action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                <button class="nav-link text-start fs-6 mb-2  fw-bolder" id="v-pills-logout-tab" data-bs-toggle="pill" data-bs-target="#v-pills-logout" type="button" role="tab" aria-controls="v-pills-logout" aria-selected="false" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</button>
              </div>
         </div>
         <div class="col-lg-10 col-12">

            <div class="tab-content pt-2" id="v-pills-tabContent">
                <div class="tab-pane fade" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
                    <p class="profile-p">
                        Hello <strong>{{$customer->first_name}}</strong></p>

                        <p class="profile-p">
                            From your account dashboard you can view your <strong>recent orders</strong>, manage your <strong>shipping and billing addresses</strong>, and <strong>edit your password and account details</strong>.</p>

                </div>
                <div class="tab-pane fade show active" id="v-pills-order" role="tabpanel" aria-labelledby="v-pills-order-tab">

                    @include('frontend.user.components.orders')

                </div>
                <div class="tab-pane fade" id="v-pills-address" role="tabpanel" aria-labelledby="v-pills-address-tab">
                    @include('frontend.user.components.addresses')

                </div>
                <div class="tab-pane fade" id="v-pills-account" role="tabpanel" aria-labelledby="v-pills-account-tab">

                   @include('frontend.user.components.account_details')


                </div>
                <div class="tab-pane fade" id="v-pills-wishlist" role="tabpanel" aria-labelledby="v-pills-wishlist-tab">

                   @include('frontend.user.components.wishlist')


                </div>
                <div class="tab-pane fade" id="v-pills-logout" role="tabpanel" aria-labelledby="v-pills-logout-tab"></div>
              </div>
        </div>
    </div>






      </div>
   </div>
</div>
@endsection


@section('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>

  $( document ).ready(function() {
   //  $('.js-example-basic-single').select2();
    setActiveTab();
    removeCountryCode("customer-phone");
  });

  function setSelectedTab(tabId){
    localStorage.setItem('tab',tabId);
  }

  function setActiveTab(){
    let tabId = localStorage.getItem('tab');

    if(tabId !== null){
      document.getElementById(tabId).click();
    }
  }




function removeCountryCode(Id){

var mobileElm =document.getElementById(Id);
var value = mobileElm.value;

if(value !== null){
   var mobile = '';
   if(value.charAt(0) == '+' || value.charAt(0)=='0'){
      mobile = value.replace(/[^a-zA-Z0-9+]/g, "").substr(3);
   }
   else {
      mobile = value.replace(/[^a-zA-Z0-9]/g, "");
   }

   mobileElm.value = mobile;

   console.log('phone ==> ',mobile);
}
}

</script>
   <!-- Common JS -->
   <script src="{{ asset('js/common.js') }}"></script>
@endsection

