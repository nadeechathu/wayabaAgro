@extends('admin.layouts.app')

@section('content')
    


<div> 
        <!-- Breadcrumbs-->
        <div class="bg-white border-bottom py-3 mb-5">
          <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
            <h3 class="m-0">Manage Comments</h3>
             
          </nav>
          <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
          <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="./index.html">Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Manage Comments</li>
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
                <form action="{{route('postComments.all')}}" method="get">
                        <div class="input-group">
                            <input type="search" class="form-control" name="searchKey" placeholder="Comment Text" value="{{$searchKey}}">
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
                      <th>Commented Post</th>
                      <th>User</th>
                      <th>Status</th>
                      <th>Approval Status</th>
                      <th>Replies Allowed</th>
                      <th>Visibility</th>
                      <th style="width:34%;">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($comments as $comment)
                       <tr>
                           <td>
                             {{$comment->post->title}}<br/><br/>
                             <p class="text-danger" style="font-size:0.7rem;"><b>{{$comment->created_at}}</b></p>
                            </td>
                           <td>
                                @if($comment->user != null)
                                    {{$comment->user->first_name}} {{$comment->user->last_name}} <br/>
                                    <small>{{$comment->user->email}}</small>
                                @else
                                    Guest
                                @endif
                           </td>                           
                           <td>
                               @if ($comment->status == 0)
                               <span class="badge bg-danger">New</span>
                               @else
                               <span class="badge bg-warning">Replied</span>
                               @endif
                           </td>
                           <td>
                               @if ($comment->is_approved == 0)
                               <span class="badge bg-danger">Not Approved</span>
                               @else
                               <span class="badge bg-success">Approved</span>
                               @endif
                           </td>
                           <td>
                               @if ($comment->reply_allowed == 0)
                               <span class="badge bg-danger">Not Allowed</span>
                               @else
                               <span class="badge bg-success">Allowed</span>
                               @endif
                           </td>
                           <td>
                                @if ($comment->show == 0)
                               <span class="badge bg-danger">No Show</span>
                               @else
                               <span class="badge bg-success">Show</span>
                               @endif
                           </td>
                           <td>
                               
                              @if (Auth::user()->hasPermission('delete_comments'))

                              @include('admin.comments.components.delete_comments')

                              @endif
                              
                              @if (Auth::user()->hasPermission('view_comments'))

                              @include('admin.comments.components.show_comment')

                              @endif

                              @if (Auth::user()->hasPermission('change_comment_status'))

                              @include('admin.comments.components.show_no_show')

                              @endif

                              @if (Auth::user()->hasPermission('approve_comments'))

                              @if ($comment->is_approved == 0)
                                  @include('admin.comments.components.approve_comments')
                              @endif

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

             {{$comments->links()}}

              </div>
                  </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </section>
  </div>

@endsection
