<!-- Button trigger modal -->
<button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="{{'#change-review-status'.$review->id}}">
<i class="fas fa-power-off"></i>
  @if ($review->review_status == 0)
      Show
  @else
      Hide
  @endif
</button>


<!-- Modal -->
<div class="modal fade" id="{{'change-review-status'.$review->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Status Change</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to change the review status to {{$review->review_status == 0 ? 'visible':'hidden'}} status ?
      </div>
      <div class="modal-footer">
        <a href="{{route('products.reviews.change.status',$review->id)}}"><button type="button" class="btn btn-primary">Yes</button></a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>