<!-- Button trigger modal -->
<button type="button" class="btn btn-warning btn-sm text-white" data-bs-toggle="modal" data-bs-target="{{'#preview-comment-modal-'.$comment->id}}">
<i class="fas fa-eye"></i> Preview
</button>

<!-- Modal -->
<div class="modal fade" id="{{'preview-comment-modal-'.$comment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width:1000px;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Preview Comment For Post - {{$comment->post->title}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-bs-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container">
      {!! $comment->comment !!}
      </div>
      </div>
      <div class="modal-footer">
        <a href="{{route('posts.comments',$comment->post->id)}}" target="_blank"><button type="button" class="btn btn-primary">Go To Post Comments</button></a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>