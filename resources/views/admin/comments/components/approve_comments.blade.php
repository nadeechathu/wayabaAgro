<button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="{{'#comment-approve-modal-'.$comment->id}}">
<i class="fa fa-check"></i>  Approve
</button>

<div class="modal fade" id="{{'comment-approve-modal-'.$comment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirm Approval</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-bs-label="Close"></button>
        </div>
        <div class="modal-body">
            Are you sure you want to approve this comment ?
        </div>
        <div class="modal-footer">
        <a href="{{route('comments.approve',$comment->id)}}"><button type="button" class="btn btn-primary">Yes</button></a>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>            
        </div>
        </div>
    </div>
    </div>