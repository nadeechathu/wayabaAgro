<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#new-variant">
<i class="ri-add-circle-line align-bottom"></i> New Variant
</button>

<!-- Modal -->
<div class="modal fade" id="new-variant" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width:800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Variant</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('products.variants.create')}}" method="post">
          {{csrf_field()}}
      <div class="modal-body">
        <div class="form-group">
            <label for="variant_name">Variant Name * </label>
            <input type="text" name="variant_name" id="variant_name" class="form-control" required>
            <input type="text" name="product_id" value="{{$selectedProduct}}" hidden>
        </div>
        <div class="form-group">
            <label for="description">Variant Description </label>
            <textarea  name="description" id="description" class="form-control" cols="30" rows="2"></textarea>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="unit_price">Unit Price * </label>
                    <input type="text" name="unit_price" id="unit_price0" class="form-control" onChange="calculateSellingPrice(0)" value="{{$product->unit_price}}" required  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="packing_cost">Packing Cost * </label>
                    <input type="text" name="packing_cost" id="packing_cost0" class="form-control" onChange="calculateSellingPrice(0)" value="{{$product->packing_cost}}" required  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="selling_price">Selling Price * </label>
                    <input type="text" name="selling_price" id="selling_price0" class="form-control" onChange="calculateSellingPrice(0)" value="{{$product->selling_price}}" required  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="weight">Weight <span class="text-danger">( {{$product->weight_unit}} )</span> * </label>
                    <input type="text" name="weight" id="weight" class="form-control" value="{{$product->weight}}" required  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="brand_id">Bulk Price *</label>
                    <input type="text" class="form-control" name="bulk_price" id="bulk_price" placeholder="Bulk Price" required="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                </div>


               
            </div>
            <div class="col-md-6">
            <div class="mb-3">
                    <label for="brand_id">Bulk Quantity *</label>
                    <input type="text" class="form-control" name="bulk_quantity" id="bulk_quantity" placeholder="Bulk Quantity" required="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
          
        <button type="submit" class="btn btn-primary">Create Variant</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>