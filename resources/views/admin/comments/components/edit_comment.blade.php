<!-- Button trigger modal -->

<button class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="{{'#edit-comment-'.$comment->id}}" type="button" style="float:right;">
<i class="fa fa-edit"></i> Edit
</button>
<!-- Modal -->
<div class="modal fade" id="{{'edit-comment-'.$comment->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width:750px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Comment For - {{$post->title}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('comments.update')}}" method="post">

      <div class="modal-body">
              {{csrf_field()}}
                <textarea class="ckeditor form-control" name="updatedContent">{!!$comment->comment!!}</textarea><br/>
                <input type="text" hidden name="comment_id" value="{{$comment->id}}">
         
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update Comment</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
      </form>
      
    </div>
  </div>
</div>