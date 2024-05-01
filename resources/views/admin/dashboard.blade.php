@extends('admin.layouts.app')

@section('content')

  <div>
        <!-- Breadcrumbs-->
        <div class="bg-white border-bottom py-3 mb-5">
          <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
            <h3 class="m-0">Dashboard</h3>

          </nav>
          <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
          <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
              </ol>
          </div>
          </div>
        </div>        <!-- / Breadcrumbs-->


        <section class="container-fluid">

         <!-- Page Title-->
         <h5 class="fs-5 fw-bold mb-2">Welcome back, {{Auth::user()->first_name}} {{Auth::user()->last_name}}</h5>
            <p class="text-muted mb-5">Get a quick overview of your company's current status below, or click into one of the sections for a more detailed breakdown.</p>
            <!-- / Page Title-->

            <!-- Top Row Widgets-->
            <div class="row g-4">

                 <!-- Registered users Widget -->
                 
                 <div class="col-12 col-sm-3 col-xxl-3 shadow">
                    <a href="{{route('users.all')}}">
                        <div class="card bg-info border-0">
                            <div class="card-header justify-content-between align-items-center d-flex   bg-info border-bottom py-3">
                                <h6 class="card-title m-0  fs-6 text-uppercase fw-bolder tracking-wide text-white">Registered Users</h6>
                            </div>
                            <div class="card-body bg-light border border-secondary">
                                <div class="row gx-4">
                                    <div class="col-12 text-center">
                                        <p class="fs-2 fw-bold mb-0">{{$totalUsers}}</p>
                                    </div>

                                </div>

                            </div>
                        </div>
                        </a>
                    </div>
                    <!-- / Registered users Widget-->
                   

                    <div class="col-12 col-sm-3 col-xxl-3 shadow">
                        <a href="{{route('orders.all')}}">
                        <div class="card bg-red border-0">
                            <div class="card-header justify-content-between align-items-center d-flex  py-3 bg-red border-bottom ">
                                <h6 class="card-title m-0  fs-6 text-uppercase fw-bolder tracking-wide text-white">Pending Orders</h6>
                            </div>
                            <div class="card-body bg-light border border-secondary">
                                <div class="row gx-4">
                                    <div class="col-12 text-center">
                                        <p class="fs-2 fw-bold mb-0">{{$pendingOrders}}</p>
                                    </div>

                                </div>

                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-12 col-sm-3 col-xxl-3 shadow">
                        <a href="{{route('orders.all')}}">
                        <div class="card bg-blue border-0">
                            <div class="card-header justify-content-between align-items-center d-flex  bg-blue border-bottom py-3">
                                <h6 class="card-title m-0  fs-6 text-uppercase fw-bolder tracking-wide text-white">Confirmed Orders</h6>
                            </div>
                            <div class="card-body bg-light border border-secondary">
                                <div class="row gx-4">
                                    <div class="col-12 text-center">
                                        <p class="fs-2 fw-bold mb-0">{{$confirmedOrders}}</p>
                                    </div>

                                </div>

                            </div>
                        </div>
                        </a>
                    </div>



                    <div class="col-12 col-sm-3 col-xxl-3 shadow">
                    <a href="{{route('orders.all')}}">
                        <div class="card  bg-green border-0">
                            <div class="card-header justify-content-between align-items-center d-flex  bg-orange border-bottom py-3">
                                <h6 class="card-title m-0  fs-6 text-uppercase fw-bolder tracking-wide text-white">In Process Orders</h6>
                            </div>
                            <div class="card-body bg-light border border-secondary">
                                <div class="row gx-4">
                                    <div class="col-12 text-center">
                                        <p class="fs-2 fw-bold mb-0">{{$processing}}</p>
                                    </div>

                                </div>

                            </div>
                        </div>
                        </a>
                    </div>



                    <div class="col-12 col-sm-3 col-xxl-3 shadow">
                        <a href="{{route('orders.all')}}">
                        <div class="card bg-gray border-0">
                            <div class="card-header justify-content-between align-items-center d-flex  bg-gray border-bottom py-3">
                                <h6 class="card-title m-0  fs-6 text-uppercase fw-bolder tracking-wide text-white">Dispatched Orders</h6>
                            </div>
                            <div class="card-body bg-light border border-secondary">
                                <div class="row gx-4">
                                    <div class="col-12 text-center">
                                        <p class="fs-2 fw-bold mb-0">{{$dispatched}}</p>
                                    </div>

                                </div>

                            </div>
                        </div>
                        </a>
                    </div>


                    <div class="col-12 col-sm-3 col-xxl-3 shadow">
                    <a href="{{route('orders.all')}}">
                        <div class="card  bg-green border-0">
                            <div class="card-header justify-content-between align-items-center d-flex  bg-green border-bottom py-3">
                                <h6 class="card-title m-0  fs-6 text-uppercase fw-bolder tracking-wide text-white">Fulfilled Orders</h6>
                            </div>
                            <div class="card-body bg-light border border-secondary">
                                <div class="row gx-4">
                                    <div class="col-12 text-center">
                                        <p class="fs-2 fw-bold mb-0">{{$fulfilled}}</p>
                                    </div>

                                </div>

                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-12 col-sm-3 col-xxl-3 shadow">
                    <a href="{{route('orders.cancellationApproval')}}">
                        <div class="card bg-brown border-0">
                            <div class="card-header justify-content-between align-items-center d-flex  bg-brown border-bottom py-3">
                                <h6 class="card-title m-0  fs-6 text-uppercase fw-bolder tracking-wide text-white">Cancellation Requests</h6>
                            </div>
                            <div class="card-body bg-light border border-secondary">
                                <div class="row gx-4">
                                    <div class="col-12 text-center">
                                        <p class="fs-2 fw-bold mb-0">{{$cancellation_Requested}}</p>
                                    </div>

                                </div>

                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-12 col-sm-3 col-xxl-3 shadow">
                        <a href="{{route('orders.cancelledOrders')}}">
                        <div class="card  bg-black border-0">
                            <div class="card-header justify-content-between align-items-center d-flex  bg-black border-bottom py-3">
                                <h6 class="card-title m-0  fs-6 text-uppercase fw-bolder tracking-wide text-white">Cancelled Orders</h6>
                            </div>
                            <div class="card-body bg-light border border-secondary">
                                <div class="row gx-4">
                                    <div class="col-12 text-center">
                                        <p class="fs-2 fw-bold mb-0">{{$cancelled}}</p>
                                    </div>

                                </div>

                            </div>
                        </div>
                        </a>
                    </div>



        </section>
  </div>

@endsection
