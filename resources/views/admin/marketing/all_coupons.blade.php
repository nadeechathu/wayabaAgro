@extends('admin.layouts.app')

@section('content')
<div>
    <!-- Breadcrumbs-->
    <div class="bg-white border-bottom py-3 mb-5">
      <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
        <nav class="mb-0" aria-label="breadcrumb">
        <h3 class="m-0">All Coupons</h3>

      </nav>
      <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="./index.html">Admin</a></li>
              <li class="breadcrumb-item active" aria-current="page">All Coupons</li>
          </ol>
      </div>
      </div>
    </div>
    <!-- / Breadcrumbs-->


    <section class="container-fluid">

        <div class="card">
            <div class="card-header">
                @include('admin.common.alerts')
                <div class="row">
                    <div class="col-md-6">
                        @if (Auth::user()->hasPermission('add_coupons'))

                        @include('admin.marketing.components.new_coupon_modal')

                        @endif
                    </div>
                    <div class="col-md-6" style="float:right;">
                        <form action="{{'checkCouponName'}}" method="get">
                            <div class="input-group">
                                <input type="search" class="form-control" name="searchKey" placeholder="Coupon Name"
                                    value="{{$searchKey}}">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>

            <div class="card-body">
                <div class="row overflow-auto">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Coupon Name</th>
                                    <th>Status</th>
                                    <th>Coupon Type</th>
                                    <th>Coupon Value</th>
                                    <th>Expiry Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($coupon_details as $coupon_detail)
                                <tr>
                                    <td>{{$coupon_detail->coupon_name}}</td>
                                    <td>
                                        @if ($coupon_detail->status == 0)

                                        <span class="badge rounded-pill bg-danger">Inactive</span>
                                        @else
                                        <span class="badge rounded-pill bg-success">Active</span>
                                        @endif
                                    </td>
                                    <td>

                                     @if($coupon_detail->coupon_type == 1)

                                    <span class="badge rounded-pill bg-warning">Percentage</span>
                                    @else

                                    <span class="badge rounded-pill bg-success">Fixed</span>
                                    @endif


                                    </td>
                                    <td>{{$coupon_detail->coupon_value}}</td>
                                    <td>{{$coupon_detail->expiry_date}}</td>
                                    <td>
                                        @include('admin.marketing.components.edit_coupon_modal')
                                        @include('admin.marketing.components.remove_coupon_modal')
                                   </td>
                                </tr>

                                @endforeach
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <div class="d-felx justify-content-center">

                    {{$coupon_details->links()}}

                </div>
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </section>



</div>
@endsection
