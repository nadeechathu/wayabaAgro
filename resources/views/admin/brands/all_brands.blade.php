@extends('admin.layouts.app')

@section('content')
<div>
    <!-- Breadcrumbs-->
    <div class="bg-white border-bottom py-3 mb-5">
        <div
            class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
                <h3 class="m-0">Manage Brands</h3>

            </nav>
            <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="./index.html">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Manage Brands</li>
                </ol>
            </div>
        </div>
    </div> <!-- / Breadcrumbs-->


    <section class="container-fluid">

        <div class="card">
            <div class="card-header">
                @include('admin.common.alerts')
                <div class="row">
                    <div class="col-md-6">
                        @include('admin.brands.components.add_new_brands')
                    </div>
                    <div class="col-md-6" style="float:right;">
                        <form action="{{route('brands.all_brands')}}" method="get">
                            <div class="input-group">
                                <input type="search" class="form-control" name="searchKey" placeholder="Brand Name"
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
                                    <th>Brand Image</th>
                                    <th>Brand Name</th>
                                    <th>Brand Status</th>
                             
                                    <th>Actions</th>
                                </tr>
                            </thead>
                   
                            <tbody>
                                @foreach($brand_details  as $brand_detail)
                                <tr>
                                   <td>
                                   
                                    <img src="{{asset($brand_detail->brand_logo)}}" width="100px" />
                                  
                                </td>
                                <td>{{$brand_detail->brand_name}}</td>
                               
                                
                                    <td>
                                        @if ($brand_detail->brand_status == 0)

                                        <span class="badge rounded-pill bg-danger">Inactive</span>
                                        @else
                                        <span class="badge rounded-pill bg-success">Active</span>
                                        @endif
                                    </td>
                             
                                   <td>
                                  
                                      @include('admin.brands.components.edit_brand')
                                    
                                     
                                      @include('admin.brands.components.remove_brand')
                                   
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
                    {{$brand_details->links()}}
                  
                </div>
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </section>
</div>

@endsection