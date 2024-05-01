<!-- Button trigger modal -->
<button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="{{'#change-status'.$product->id}}">
<i class="fas fa-power-off"></i>
  @if ($product->status == 0)
      Activate
  @else
      Deactivate
  @endif
</button>


<!-- Modal -->
<div class="modal fade" id="{{'change-status'.$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Status Change</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to {{$product->status == 0 ? 'activate':'deactivate'}} the product ?
      </div>
      <div class="modal-footer">
        <a href="{{route('product.status.change',$product->id)}}"><button type="button" class="btn btn-primary">Yes</button></a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>