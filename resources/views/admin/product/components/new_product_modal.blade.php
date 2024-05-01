<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="{{'#add-product-modal'}}">
    <i class="ri-add-circle-line align-bottom"></i> Add New
</button>

<!-- Modal -->
<div class="modal fade" id="{{'add-product-modal'}}" tabindex="-1" role="dialog" aria-labelledby="productModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" style="max-width:1000px;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel">New Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('product.create')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="product_name">Product Name *</label>
                                {{-- <input type="text" class="form-control" name="product_name" id="product_name"
                                    placeholder="Product Name" required /> --}}
          <input type="text" class="form-control" name="product_name" id="product_name0" onChange="checkproductName(0)"
                                    placeholder="Product Name" required />
                                    <p class="text-danger" id="name-invalid0"></p>                           </div>
                            <div class="mb-3">
                                <label for="product_code">Product Code *</label>
                                <input type="text" class="form-control" readonly name="product_code" id="product_code"
                                    placeholder="Product Code" value="{{$newProductCode}}" required />
                            </div>
                            <div class="mb-3">
                                <label for="status">Status *</label>
                                <select class="form-control" name="status" id="status"
                                    onChange="showCategorySelector()">
                                    <option value="0">Inactive</option>
                                    <option value="1">Active</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="src">Featured Image *</label>
                                <input type="file" accept="image/x-png,image/gif,image/jpeg"
                                    class="form-control" name="featured_image" id="featured-image" />
                                <p style="font-weight:bold;font-size:0.75rem;"><b>Supported image types -
                                        jpeg,png,jpg,gif,svg</b></p>
                            </div>
                            <div class="mb-3">
                                <label for="src">Product Image *</label>
                                <input type="file" multiple accept="image/x-png,image/gif,image/jpeg"
                                    class="form-control" name="src[]" id="src" required />
                                <p style="font-weight:bold;font-size:0.75rem;"><b>Supported image types -
                                        jpeg,png,jpg,gif,svg</b></p>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="short_description">Short Description *</label>
                                <textarea class="ckeditor form-control" name="short_description"
                                    value="{{ old('short_description')}}" required></textarea>
                            </div>


                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="product_description">Product Description *</label>
                                <textarea class="ckeditor form-control" name="product_description"
                                    value="{{ old('product_description')}}" required></textarea>
                            </div>


                        </div>
                    </div>
                    <div class="mb-3">
                                <label for="categories">Category *</label>
                                <select class="form-control" id="category-selector0" onChange="addCategories(0)" required >
                                        <option value="abc">---select---</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach

                                </select>

                            </div>
                        <div class="mb-3" id="selected-categories0">
                        <label for="categories">Selected Categories (<span class="text-danger">Click to remove</span>)</label><br/>
                        </div>
                    <div class="mb-3">
                                <label for="brand_id">Brand *</label>
                                <select class="form-control" id="brand_id" name="brand_id" required >
                                        
                                    @foreach ($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                    @endforeach

                                </select>
                    </div>
                    <div class="mb-3">
                                <label for="unit_price0">Unit Price *</label>
                                <input type="text" class="form-control" name="unit_price" id="unit_price0" value=0 onChange="calculateSellingPrice(0)"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    placeholder="Unit Price" required />
                    </div>
                    <div class="mb-3">
                                <label for="packing_cost0">Packing Cost *</label>
                                <input type="text" class="form-control" name="packing_cost" id="packing_cost0" value=0 onChange="calculateSellingPrice(0)"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    placeholder="Packing Cost" required />
                    </div>
                    <div class="mb-3">
                                <label for="selling_price0">Selling Price *</label>
                                <input type="text" class="form-control" name="selling_price" id="selling_price0" value=0 onChange="calculateSellingPrice(0)"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    placeholder="Selling Price" required />
                    </div>
                    <div class="mb-3">
                                <label for="weight">Weight *</label>
                                <input type="text" class="form-control" name="weight" id="weight"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    placeholder="Weight" required />
                    </div>
                    <div class="mb-3">
                                <label for="weight_unit">Weight Unit *</label>
                                <select class="form-control" name="weight_unit" id="weight_unit" required >

                                @foreach ($units as $unit)
                                <option value="{{$unit->symbol}}">{{$unit->symbol}}</option>
                                @endforeach

                                </select>
                    </div>

                    <div class="mb-3">
                                <label for="featured">Featured *</label>
                                <select class="form-control" name="featured" id="featured">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                    </div>
                    <div class="mb-3">
                                <label for="new_arrival">New Arrival *</label>
                                <select class="form-control" name="new_arrival" id="new_arrival">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Create Product</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<script >
$(document).ready(function() {
    $('.ckeditor').ckeditor();
    // $('.js-example-basic-single').select2();
});
</script>
