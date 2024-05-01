<!-- Button trigger modal -->
<button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="{{'#new-variant'.$variant->id}}">
<i class="fa fa-edit"></i> Edit
</button>

<!-- Modal -->
<div class="modal fade" id="{{'new-variant'.$variant->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width:800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Variant</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('products.variants.update')}}" method="post">
          {{csrf_field()}}
      <div class="modal-body">
        <div class="form-group">
            <label for="{{'variant_name'.$variant->id}}">Variant Name * </label>
            <input type="text" name="variant_name" id="{{'variant_name'.$variant->id}}" class="form-control" value="{{$variant->variant_name}}" required>
            <input type="text" name="product_id" value="{{$selectedProduct}}" hidden>
            <input type="text" name="variant_id" value="{{$variant->id}}" hidden>
        </div>
        <div class="form-group">
            <label for="{{'description'.$variant->id}}">Variant Description </label>
            <textarea  name="description" id="{{'description'.$variant->id}}" class="form-control" cols="30" rows="2">{{$variant->description}}</textarea>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="{{'unit_price'.$variant->id}}">Unit Price * </label>
                    <input type="text" name="unit_price" id="{{'unit_price'.$variant->id}}" class="form-control" onChange="calculateSellingPrice('{{$variant->id}}')" value="{{$variant->unit_price}}" required  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="{{'packing_cost'.$variant->id}}">Packing Cost * </label>
                    <input type="text" name="packing_cost" id="{{'packing_cost'.$variant->id}}" class="form-control" onChange="calculateSellingPrice('{{$variant->id}}')" value="{{$variant->packing_cost}}" required  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="{{'selling_price'.$variant->id}}">Selling Price * </label>
                    <input type="text" name="selling_price" id="{{'selling_price'.$variant->id}}" class="form-control" onChange="calculateSellingPrice('{{$variant->id}}')" value="{{$variant->selling_price}}" required  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="{{'weight'.$variant->id}}">Weight <span class="text-danger">( {{$product->weight_unit}} )</span> * </label>
                    <input type="text" name="weight" id="{{'weight'.$variant->id}}" class="form-control" value="{{$variant->weight}}" required  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="brand_id">Bulk Price</label>
                    <input type="text" class="form-control" name="bulk_price" value="{{$variant->bulk_price}}" id="bulk_price" placeholder="Bulk Price" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                </div>


            </div>
            <div class="col-md-6">
                
            <div class="mb-3">
                    <label for="brand_id">Bulk Quantity</label>
                    <input type="text" class="form-control" name="bulk_quantity" value="{{$variant->bulk_quantity}}" id="bulk_quantity" placeholder="Bulk Quantity" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
          
        <button type="submit" class="btn btn-primary">Update Variant</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>