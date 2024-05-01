@extends('admin.layouts.app')

@section('content')
<div>
    <!-- Breadcrumbs-->
    <div class="bg-white border-bottom py-3 mb-5">
        <div
            class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
                <h3 class="m-0">Promotions & Discounts</h3>

            </nav>
            <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="./index.html">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Promotions & Discounts</li>
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
                        @if (Auth::user()->hasPermission('add_promotions'))

                        @include('admin.promotions_and_discounts.components.new_promotion')

                        @endif
                    </div>
                    <div class="col-md-6" style="float:right;">
                        <form action="{{route('promotions.all')}}" method="get">
                            <div class="input-group">
                                <input type="search" class="form-control" name="searchKey" placeholder="Promotion Title"
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
                                    <th>Promotion Title</th>
                                    <th>Promotion Description</th>
                                    <th>Discount Type</th>
                                    <th>Discount Value</th>
                                    <th>Status</th>                                      
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($promotions as $promotion)
                                <tr>
                                   
                                    <td>{{$promotion->title}}</td>
                                    <td>{{$promotion->description}}</td>
                                    <td>
                                        @if($promotion->discount_type == 1)
                                        <span class="badge bg-success">Percentage</span>
                                        @else
                                        <span class="badge bg-danger">Amount</span>
                                        @endif
                                    </td>
                                    <td>{{$promotion->discount}} {{$promotion->discount_type == 1 ? '%' : $commonContent['currencySymbol']['description']}}</td>
                                    <td>
                                        @if($promotion->status == 1)
                                        <span class="badge bg-success">Active</span>
                                        @else
                                        <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                   
                                    <td>

                                        @if (Auth::user()->hasPermission('edit_promotions'))

                                        @include('admin.promotions_and_discounts.components.edit_promotion')

                                        @include('admin.promotions_and_discounts.components.change_status')

                                        @endif

                                        @if (Auth::user()->hasPermission('delete_promotions'))

                                        @include('admin.promotions_and_discounts.components.remove_promotion')

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

                    {{$promotions->links()}}

                </div>
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </section>
</div>

@endsection