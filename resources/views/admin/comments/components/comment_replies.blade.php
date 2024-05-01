
<div class="row">
            <div class="col-md-12">
                <h4>Replies</h4>
                 <hr/>
                 @if (sizeof($comment->replies) > 0)

                    @foreach ($comment->replies as $reply)
                    <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-1">
                            <img class="f-w-10 rounded-circle" src="{{$comment->user->image != null ? 'http://127.0.0.1:8000/assets/images/profile-small.jpeg' : 'http://127.0.0.1:8000/assets/images/no_user_image.png'}}" style="margin-right:10px;" alt="Dev"> 

                            </div>
                            <div class="col-md-11">
                                Replied by {{$reply->user != null ? $reply->user->first_name : 'guest'}} on {{$reply->created_at}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-11">
                            {!!$reply->reply!!}
                            </div>
                        </div>
                        
                            
                        </div>
                        
                    </div>
                    @endforeach  
                     
                 @else
                     No replies yet.
                 @endif
                        
        </div>
</div>

