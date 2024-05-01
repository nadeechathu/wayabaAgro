<!-- Button trigger modal -->
<button type="button" class="btn btn-dark btn-sm text-white action-buttons" data-bs-toggle="modal" data-bs-target="{{'#change-status'.$order->id}}">
<i class="fas fa-edit"></i> Change Status
</button>

<!-- Modal -->
<div class="modal fade" id="{{'change-status'.$order->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Order Status - {{$order->tracking_number}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('order.status.change')}}" method="post" onsubmit="disableStatusChangeBtn('{{$order->id}}')">
          {{csrf_field()}}
      <div class="modal-body">

        <label for="">Select the status</label>
        <select class="form-control" name="order_status" required>
            @foreach ($orderStatuses as $status)

            <option value="{{$status->id}}">{{$status->status_name}}</option>

            
                
            @endforeach
        </select>
        <input type="text" hidden name="order_id" value="{{$order->id}}">
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary" id="{{'change-status-btn'.$order->id}}">Save changes</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
  function disableStatusChangeBtn(id){   
        document.getElementById('change-status-btn'+id).setAttribute('disabled','disabled');
  }
</script>