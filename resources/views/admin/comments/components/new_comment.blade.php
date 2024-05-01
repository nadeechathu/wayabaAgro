<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#new-comment-modal">
<i class="ri-add-circle-line align-bottom"></i> Add New Comment
</button>

<!-- Modal -->
<div class="modal fade" id="new-comment-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width:750px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Comment For - {{$post->title}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('comments.add')}}" method="post">

      <div class="modal-body">
              {{csrf_field()}}
                <textarea class="ckeditor form-control" name="new_comment"></textarea><br/>
                <input type="text" hidden name="post_id" value="{{$post->id}}">
         
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Add Comment</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
      </form>
      
    </div>
  </div>
</div>