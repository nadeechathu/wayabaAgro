@extends('admin.layouts.app')

@section('content')
<div>
    <!-- Breadcrumbs-->
    <div class="bg-white border-bottom py-3 mb-5">
        <div
            class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
                <h3 class="m-0">Manage Advertisements</h3>

            </nav>
            <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="./index.html">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Manage Advertisements</li>
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
                        @if (Auth::user()->hasPermission('add_advertisements'))

                        @include('admin.advertisements.components.new_advertisement_modal')

                        @endif
                    </div>
                    <div class="col-md-6" style="float:right;">
                        <form action="{{route('advertisements.all')}}" method="get">
                            <div class="input-group">
                                <input type="search" class="form-control" name="searchKey" placeholder="Advertisement Title"
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
                                    <th>Image</th>
                                    <th>Advertisement Title</th>
                                    <th>Advertisement Description</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($advertisements as $advertisement)
                                <tr>
                                    <td>
                                        <img style="width:70px;" src="{{asset($advertisement->image_src)}}"
                                            alt="{{$advertisement->advertisement_title}}">
                                    </td>
                                    <td>{{$advertisement->title}}</td>
                                    <td>{{$advertisement->description}}</td>
                                    <td>
                                        @if($advertisement->status == 1)
                                        <span class="badge bg-success">Active</span>
                                        @else
                                        <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>

                                    <td>

                                        @if (Auth::user()->hasPermission('edit_advertisements'))

                                        @include('admin.advertisements.components.edit_advertisement_modal')

                                        @include('admin.advertisements.components.change_status')

                                        @endif

                                        @if (Auth::user()->hasPermission('delete_advertisements'))

                                        @include('admin.advertisements.components.remove_advertisement_modal')

                                        @endif

                                        @if ($advertisement->image_src != null)

                                        @include('admin.advertisements.components.view_image')

                                        @endif


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

                    {{$advertisements->links()}}

                </div>
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </section>
</div>

@endsection
