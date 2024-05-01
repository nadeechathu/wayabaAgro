<!-- Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm text-white" data-bs-toggle="modal" data-bs-target="{{'#remove-assigned-promotion-modal-'.$product->id}}">
  <i class="fa fa-trash"></i> Remove Assigned Promotion
</button>

<!-- Modal -->
<div class="modal fade" id="{{'remove-assigned-promotion-modal-'.$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Remove Assigned Promotion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to remove this promotion from product ? 
      </div>
      <div class="modal-footer">
          
        <a href="{{route('promotions.assigned.remove',$product->id)}}"><button type="button" class="btn btn-primary">Yes</button></a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>