@extends('admin.layouts.app')
@section('content')
<div>
   <!-- Breadcrumbs-->
   <div class="bg-white border-bottom py-3 mb-5">
      <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
         <nav class="mb-0" aria-label="breadcrumb">
            <h3 class="m-0">Country Settings</h3>
         </nav>
         <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
            <ol class="breadcrumb m-0">
               <li class="breadcrumb-item"><a href="./index.html">Admin</a></li>
               <li class="breadcrumb-item active" aria-current="page">Country Settings</li>
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
                    @if (Auth::user()->hasPermission('site_settings'))

                    @include('admin.settings.components.new_country_modal')

                    @endif
                </div>
                <div class="col-md-6" style="float:right;">
                    <form action="{{route('settings.countrySettings')}}" method="get">
                        <div class="input-group">
                            <input type="search" class="form-control" name="searchKey" placeholder="Country Name"
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
                                <th>Country code</th>
                                <th>Country Name</th>
                                <th>Dial Code</th>
                                <th>Active</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($country_details as $country_detail)
                            <tr>
                                {{-- `country_code`, `country_name`, `dial_code`, --}}
                                <td>{{$country_detail->country_code}}</td>
                                <td>{{$country_detail->country_name}}</td>
                                <td>{{$country_detail->dial_code}}</td>

                                <td>
                                    @if ($country_detail->status == 0)

                                    <span class="badge rounded-pill bg-danger">Inactive</span>
                                    @else
                                    <span class="badge rounded-pill bg-success">Active</span>
                                    @endif
                                </td>


                                <td>
                                    @include('admin.settings.components.edit_country_modal')
                                    @include('admin.settings.components.remove_country_modal')

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

                {{$country_details->links()}}

            </div>
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
</section>











</div>
@endsection
