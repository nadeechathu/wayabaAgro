<!-- Button trigger modal -->
<button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="{{'#edit-status'.$orderStatus->id}}">
<i class="fas fa-edit"></i> Edit
</button>

<!-- Modal -->
<div class="modal fade" id="{{'edit-status'.$orderStatus->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Order Status</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('order.status.update')}}" method="post">
      {{csrf_field()}}
      <div class="modal-body">
        <div class="form-group">
            <label for="">Enter Status Name</label>
            <input type="text" name="status_name" class="form-control" value="{{$orderStatus->status_name}}" required> 
            <input type="text" hidden name="status_id" value="{{$orderStatus->id}}">
        </div>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>