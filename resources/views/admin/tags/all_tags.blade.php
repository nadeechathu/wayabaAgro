@extends('admin.layouts.app')

@section('content')
    


<div> 
        <!-- Breadcrumbs-->
        <div class="bg-white border-bottom py-3 mb-5">
          <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
            <h3 class="m-0">Manage Tags</h3>
             
          </nav>
          <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
          <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="./index.html">Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Manage Tags</li>
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
                 @if (Auth::user()->hasPermission('add_tags'))

                    @include('admin.tags.components.new_tag_modal')

                   @endif
                 </div>
               <div class="col-md-6" style="float:right;">
                <form action="{{route('tags.all')}}" method="get">
                        <div class="input-group">
                            <input type="search" class="form-control" name="searchKey" placeholder="Tag Name" value="{{$searchKey}}">
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
                      <th>Tag Name</th>
                      <th>Type</th>
                      <th style="width:20%;">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($tags as $tag)
                       <tr>
                           <td>{{$tag->tag_name}}</td>
                           <td>
                           @if($tag->type == 1)
                            Product
                            @else
                            Post
                            @endif
                           </td>                           
                           <td>
                            @if (Auth::user()->hasPermission('edit_tags'))

                              @include('admin.tags.components.edit_tag_modal')

                             @endif

                             @if (Auth::user()->hasPermission('delete_tags'))

                              @include('admin.tags.components.remove_tags')
                              
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

             {{$tags->links()}}

              </div>
                  </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </section>
  </div>

@endsection
