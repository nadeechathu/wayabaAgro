<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="{{'#add-stock-modal'.$variant->id}}">
<i class="ri-add-circle-line align-bottom"></i> Stock In
</button>

<!-- Modal -->
<div class="modal fade" id="{{'add-stock-modal'.$variant->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Stock In - {{$product->product_name}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-bs-label="Close"></button>
      </div>
      <form action="{{route('inventory.update')}}" method="post">
          {{csrf_field()}}
      <div class="modal-body">
        <div class="form-group">
            <label for="tag_name">Increase Product Stock By</label>
            <input type="number" class="form-control" name="stock_in_count" min="1" value="1" oninput="validity.valid||(value='');" required/>
            <input type="text" hidden name="product_id" value ="{{$product->id}}"/>
            <input type="text" hidden name="variant_id" value ="{{$variant->id}}"/>
        </div>
       
      
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update Stock</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>