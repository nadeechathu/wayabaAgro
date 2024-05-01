
@if ($comment->show == 0)

<button type="button" class="btn btn-primary btn-sm text-white" data-bs-toggle="modal" data-bs-target="{{'#show-noshow-modal-'.$comment->id}}">
<i class="fa fa-paper-plane"></i> Show
</button>
@else
<button type="button" class="btn btn-danger btn-sm text-white" data-bs-toggle="modal" data-bs-target="{{'#show-noshow-modal-'.$comment->id}}">
<i class="fa fa-ban"></i> No Show
</button>
@endif


<div class="modal fade" id="{{'show-noshow-modal-'.$comment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Confirm Comment Visibility Change</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-bs-label="Close"></button>
</div>
<div class="modal-body">
    Are you sure you want to change the comment vibility to {{$comment->show == 1 ? 'no show' : 'show'}} status ?
</div>
<div class="modal-footer">

    <a href="{{route('comments.status',$comment->id)}}"><button type="submit" class="btn btn-primary">Yes</button></a>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>            
</div>
</div>
</div>
</div>
