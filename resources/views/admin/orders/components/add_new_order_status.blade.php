<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm text-white" data-bs-toggle="modal" data-bs-target="#add-status">
<i class="fas fa-plus"></i> Add New
</button>

<!-- Modal -->
<div class="modal fade" id="add-status" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Order Status</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('order.status.create')}}" method="post">
      {{csrf_field()}}
      <div class="modal-body">
        <div class="form-group">
            <label for="">Enter Status Name</label>
            <input type="text" name="status_name" class="form-control" required> 
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