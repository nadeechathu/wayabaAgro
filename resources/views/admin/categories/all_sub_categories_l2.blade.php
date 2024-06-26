@extends('admin.layouts.app')

@section('content')
<div> 
        <!-- Breadcrumbs-->
        <div class="bg-white border-bottom py-3 mb-5">
          <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
            <h3 class="m-0">Manage Sub Categories</h3>
             
          </nav>
          <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
          <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="./index.html">Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Manage Sub Categories</li>
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
                 </div>
               <div class="col-md-6" style="float:right;">
                <form action="{{route('subCategoriesL2.all')}}" method="get">
                        <div class="input-group">
                            <input type="search" class="form-control" name="searchKey" placeholder="Category Name" value="{{$searchKey}}">
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
                      <th>Sub Category Name</th>
                      <th>Sub Category Description</th>
                      <th>Slug</th>
                      <th>Status</th>
                      <th>Category</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($l2_sub_categories as $sub_category)
                       <tr>
                           <td>
                               <img style="width:150px;" src="{{asset($sub_category->child_category_image)}}" alt="{{$sub_category->sub_category_name}}">
                           </td>
                           <td>{{$sub_category->child_category_name}}</td>
                           <td>{{$sub_category->child_category_description}}</td>
                           <td>{{$sub_category->slug}}</td>
                           <td>
                            @if($sub_category->status == 1)
                            <span class="badge bg-success">Active</span>
                            @else
                            <span class="badge bg-danger">Inactive</span>
                            @endif
                           </td>
                           <td>{{$sub_category->subCategory->sub_category_name}}</td>
                           <td>

                         
                           @if (Auth::user()->hasPermission('edit_categories'))

                            @include('admin.categories.components.edit_child_category_modal')

                            @endif

                            @if (Auth::user()->hasPermission('delete_categories'))

                            @include('admin.categories.components.remove_child_category_modal')

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

             {{$l2_sub_categories->links()}}

              </div>
                  </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </section>
  </div>    

@endsection
