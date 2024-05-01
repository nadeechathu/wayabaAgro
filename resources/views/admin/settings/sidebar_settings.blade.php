@extends('admin.layouts.app')


@section('content')


    <div>
        <!-- Breadcrumbs-->
        <div class="bg-white border-bottom py-3 mb-5">
            <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
                <nav class="mb-0" aria-label="breadcrumb">
                    <h3 class="m-0">Sidebar Settings</h3>

                </nav>
                <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="./index.html">Admin</a></li>
                        <li class="breadcrumb-item"><a href="./index.html">Settings</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sidebar Settings</li>
                    </ol>
                </div>
            </div>
        </div>        <!-- / Breadcrumbs-->


        <section class="container-fluid">

            <div class="card">
                <div class="row">
                    <div class="mb-12">
                        @include('admin.common.alerts')
                    </div>

                </div>
                <div class="card-body">
                    <div class="container">
                        <form action="{{route('settings.sidebar.update')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row settings-row-height">
                                <div class="col-md-4">
                                    Users
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input btn-tog" {{$sidebarSettings->users == 1 ? 'checked' : ''}} name="users" type="checkbox" id="flexSwitchCheckDefault">
                                        <span class="badge {{$sidebarSettings->users == 1 ? 'bg-success' : 'bg-danger'}} ">{{$sidebarSettings->users == 1 ? 'Active' : 'Deactive'}}</span>
                                    </div>
                                </div>
                                <div class="col-md-le">

                                </div>
                            </div>
                            <div class="row settings-row-height">
                                <div class="col-md-4">
                                    Products
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input btn-tog" {{$sidebarSettings->products == 1 ? 'checked' : ''}} name="products"  type="checkbox" id="flexSwitchCheckDefault">
                                        <span class="badge {{$sidebarSettings->products == 1 ? 'bg-success' : 'bg-danger'}}  ">{{$sidebarSettings->products == 1 ? 'Active' : 'Deactive'}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row settings-row-height">
                                <div class="col-md-4">
                                    Inventory
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input btn-tog"  {{$sidebarSettings->inventory == 1 ? 'checked' : ''}} name="inventory" type="checkbox" id="flexSwitchCheckDefault">
                                        <span class="badge {{$sidebarSettings->inventory == 1 ? 'bg-success' : 'bg-danger'}}  ">{{$sidebarSettings->inventory == 1 ? 'Active' : 'Deactive'}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row settings-row-height">
                                <div class="col-md-4">
                                    Categories
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input btn-tog"  {{$sidebarSettings->categories == 1 ? 'checked' : ''}} name="categories" type="checkbox" id="flexSwitchCheckDefault">
                                        <span class="badge {{$sidebarSettings->categories == 1 ? 'bg-success' : 'bg-danger'}}  ">{{$sidebarSettings->categories == 1 ? 'Active' : 'Deactive'}}</span>
                                    </div>
                                </div>
                            </div>

                            {{--<div class="row settings-row-height">
                                <div class="col-md-4">
                                    Tags
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input btn-tog" {{$sidebarSettings->tags == 1 ? 'checked' : ''}} name="tags" type="checkbox" id="flexSwitchCheckDefault">
                                        <span class="badge {{$sidebarSettings->tags == 1 ? 'bg-success' : 'bg-danger'}}  ">{{$sidebarSettings->tags == 1 ? 'Active' : 'Deactive'}}</span>
                                    </div>
                                </div>
                            </div>--}}
                            <div class="row settings-row-height">
                                <div class="col-md-4">
                                    All Orders
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input btn-tog" {{$sidebarSettings->all_orders == 1 ? 'checked' : ''}} name="all_orders" type="checkbox" id="flexSwitchCheckDefault">
                                        <span class="badge {{$sidebarSettings->all_orders == 1 ? 'bg-success' : 'bg-danger'}}  ">{{$sidebarSettings->all_orders == 1 ? 'Active' : 'Deactive'}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row settings-row-height">
                                <div class="col-md-4">
                                    Posts
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input btn-tog" {{$sidebarSettings->posts == 1 ? 'checked' : ''}} name="posts" type="checkbox" id="flexSwitchCheckDefault">
                                        <span class="badge {{$sidebarSettings->posts == 1 ? 'bg-success' : 'bg-danger'}}  ">{{$sidebarSettings->posts == 1 ? 'Active' : 'Deactive'}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row settings-row-height">
                                <div class="col-md-4">
                                    Marketing
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input btn-tog" {{$sidebarSettings->marketing == 1 ? 'checked' : ''}} name="marketing" type="checkbox" id="flexSwitchCheckDefault">
                                        <span class="badge {{$sidebarSettings->marketing == 1 ? 'bg-success' : 'bg-danger'}}  ">{{$sidebarSettings->marketing == 1 ? 'Active' : 'Deactive'}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row settings-row-height">
                                <div class="col-md-4">
                                    Web Pages
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input btn-tog" {{$sidebarSettings->web_pages == 1 ? 'checked' : ''}} name="web_pages" type="checkbox" id="flexSwitchCheckDefault">
                                        <span class="badge {{$sidebarSettings->web_pages == 1 ? 'bg-success' : 'bg-danger'}}  ">{{$sidebarSettings->web_pages == 1 ? 'Active' : 'Deactive'}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row settings-row-height">
                                <div class="col-md-4">
                                    Zones
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input btn-tog" {{$sidebarSettings->zones == 1 ? 'checked' : ''}} name="zones" type="checkbox" id="flexSwitchCheckDefault">
                                        <span class="badge {{$sidebarSettings->zones == 1 ? 'bg-success' : 'bg-danger'}}  ">{{$sidebarSettings->zones == 1 ? 'Active' : 'Deactive'}}</span>
                                    </div>
                                </div>
                            </div>                            
                           
                            <div class="row settings-row-height">
                                <div class="col-md-4">
                                    Inquiries
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input btn-tog" {{$sidebarSettings->inquiries == 1 ? 'checked' : ''}} name="inquiries" type="checkbox" id="flexSwitchCheckDefault">
                                        <span class="badge {{$sidebarSettings->inquiries == 1 ? 'bg-success' : 'bg-danger'}}  ">{{$sidebarSettings->inquiries == 1 ? 'Active' : 'Deactive'}}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row settings-row-height">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary btn-save btn-sm">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </section>
    </div>


@endsection
