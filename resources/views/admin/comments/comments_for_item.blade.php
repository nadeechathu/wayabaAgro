@extends('admin.layouts.app')

@section('content')
    


<div> 
        <!-- Breadcrumbs-->
        <div class="bg-white border-bottom py-3 mb-5">
          <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
            <h3 class="m-0">Comments For Post - {{$post->title}}</h3>
             
          </nav>
          <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
          <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item"><a href="#">Admin</a></li>
                  <li class="breadcrumb-item"><a href="#">Posts</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Comments</li>
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
                  @if (Auth::user()->hasPermission('add_comments'))
                     @include('admin.comments.components.new_comment')
                  @endif
                 </div>
               <div class="col-md-6" style="float:right;">
               <!-- search -->
                </div>

                
              </div>
               </div>
              <div class="card-body">
              <div class="row overflow-auto">
                  <div class="col-md-12">

                  <div class="accordion accordion-flush" id="accordionFlush">
                  @foreach ($comments as $comment)

                  
  
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="{{'#flush-collapse'.$comment->id}}" aria-expanded="false" aria-controls="{{'flush-collapse'.$comment->id}}">
                        <img class="f-w-10 rounded-circle" src="{{$comment->user->user_image != null ? $comment->user->user_image : asset('images/no_user_image.png')}}" style="margin-right:10px;" alt="Dev"> 
                        Commented by {{$comment->user != null ? $comment->user->first_name.' '.$comment->user->last_name : 'guest'}} on {{$comment->created_at}} &nbsp;
                        
                        @if ($comment->status == 0)
                        <span class="badge bg-danger">New</span>
                        @endif
                        </button>
                        </h2>
                        <div id="{{'flush-collapse'.$comment->id}}" class="accordion-collapse collapse" aria-labelledby="{{'flush-collapse-heading'.$comment->id}}" data-bs-parent="#accordionFlush">
                        <div class="accordion-body">
                        
                        <!-- Edit comment -->
                        @if (Auth::user()->hasPermission('edit_comments'))
                        @include('admin.comments.components.edit_comment')
                        @endif

                            {!!$comment->comment!!}

                            
                            @include('admin.comments.components.comment_replies')

                            @if (Auth::user()->hasPermission('reply_comments'))
                            <hr/>
                            <div class="row">
                                <div class="col-md-12">
                                    Add a reply
                                    <form action="{{route('comments.reply')}}" method="post">
                                    {{csrf_field()}}

                                    <input type="text" hidden name="post_id" value="{{$post->id}}"/>
                                    <input type="text" hidden name="comment_id" value="{{$comment->id}}"/>

                                    <textarea class="ckeditor form-control" name="reply" value="{{ old('body')}}"></textarea><br/>
                                    <button class="btn btn-primary" type="submit">Add Reply</button>

                                    </form>
                                </div>
                            </div>
                            @endif
                        </div>
                        </div>
                    </div><br/>
  
                
                      
                  @endforeach
                  
                  </div>
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

<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
        // $('.js-example-basic-single').select2();
    });
</script>