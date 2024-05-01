<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="{{'#edit-order-item-'.$orderItem->id}}">
<i class="fa fa-edit"></i> Edit Qty
</button>

<!-- Modal -->
<div class="modal fade" id="{{'edit-order-item-'.$orderItem->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Item Quantity</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('orders.items.updateQuantity')}}" method="post">
        {{csrf_field()}}
      <div class="modal-body">
            <div class="mb-3">
                <label for="customer_address" class="form-label">New Quantity</label>
                <input type="text" class="form-control" name="quantity" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="{{$orderItem->quantity}}" required>
                <input type="text" hidden name="order_item_id" value="{{$orderItem->id}}">
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