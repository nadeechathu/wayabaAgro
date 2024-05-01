@extends('admin.layouts.app')

@section('content')



<div>
        <!-- Breadcrumbs-->
        <div class="bg-white border-bottom py-3 mb-5">
          <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
            <h3 class="m-0">Web Page Management</h3>

          </nav>
          <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
          <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="./index.html">Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Web Page Management</li>
              </ol>
          </div>
          </div>
        </div>        <!-- / Breadcrumbs-->


        <section class="container-fluid">

        <div class="card">
              <div class="card-header">
                @include('admin.common.alerts')
               <div class="row">
                 <div class="col-md-6">
                  @if (Auth::user()->hasPermission('add_pages'))

                   <a href="{{route('webpages.new')}}"><button type="button" class="btn btn-primary btn-sm"><i class="ri-add-circle-line align-bottom"></i> New Page</button></a>

                   @endif
                   @include('admin.pages.components.sort_navigation_menu_order')
                 </div>
               <div class="col-md-6" style="float:right;">
                <form action="{{route('webpages.all')}}" method="get">
                        <div class="input-group">
                            <input type="search" class="form-control" name="searchKey" placeholder="Page Heading" value="{{$searchKey}}">
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
                      <th>Page Heading</th>
                      <th>Page Slug</th>
                      <th>Page Visibility</th>
                      <th style="width:40%;">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($pages as $page)
                       <tr>
                           <td>{{$page->page_heading}}</td>
                           <td>{{$page->slug}}</td>
                           <td>
                           @if($page->visibility == 1)
                           <span class="badge bg-success">Visible</span>
                            @else
                            <span class="badge bg-danger">Hidden</span>
                            @endif
                           </td>
                           <td>

                              @if (Auth::user()->hasPermission('edit_pages'))

                              <a href="{{route('webpages.view',$page->id)}}"><button class="btn btn-info btn-sm text-white" type="button"><i class="fa fa-edit"></i> Edit</button></a>

                              @endif

                              @if (Auth::user()->hasPermission('page_visibility_change'))

                                @include('admin.pages.components.show_hide_pages')

                              @endif

                              @if (Auth::user()->hasPermission('view_pages'))

                                @include('admin.pages.components.preview_page')

                              @endif

                              @if (Auth::user()->hasPermission('delete_pages'))

                              @include('admin.pages.components.delete_page')

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

             {{$pages->links()}}

              </div>
                  </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </section>
  </div>

@endsection
