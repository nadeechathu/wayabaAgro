<button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal"
    data-bs-target="{{'#edit-product-'.$product->id}}">
    <i class="fas fa-edit"></i> Edit
</button>

<!-- Modal -->
<div class="modal fade" id="{{'edit-product-'.$product->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width:1000px;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Product - {{$product->product_name}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-bs-label="Close"></button>
            </div>
            <form action="{{route('product.edit')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="{{'edit-product-name'.$product->id}}">Product Name *</label>
                                <input type="text" class="form-control" id="{{'product_name'.$product->id}}"
                                    name="product_name" value="{{$product->product_name}}" onChange="checkproductName('{{$product->id}}')" placeholder="Product Name"
                                    required/>
                                    <p class="text-danger" id="{{'name-invalid'.$product->id}}"></p>
                                <input type="text" hidden name="product_id" value="{{$product->id}}" />
                            </div>
                            <div class="form-group">
                                <label for="{{'edit-product-code'.$product->id}}">Product Code *</label>
                                <input type="text" readonly class="form-control" id="{{'edit-product-code'.$product->id}}"
                                    name="product_code" value="{{$product->product_code}}" placeholder="Product Code"
                                    required>
                                <input type="text" hidden name="product_id" value="{{$product->id}}" />
                            </div>

                            <div class="form-group">
                                <label for="status">Status *</label>
                                <select class="form-control" name="status" id="status">

                                    @if ($product->status == 1)
                                    <option selected value="1">Active</option>
                                    <option value="0">Inactive</option>
                                    @else
                                    <option selected value="0">Inactive</option>
                                    <option value="1">Active</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="src">Product Images *</label>
                                <input type="file" multiple accept="image/x-png,image/gif,image/jpeg"
                                    class="form-control" name="src[]" id="src" />
                                <p style="font-weight:bold;font-size:0.75rem;"><b>Supported image types -
                                        jpeg,png,jpg,gif,svg</b></p>
                            </div>



                            <div class="form-group">
                            <label for="featured-image">Featured Image *</label>
                            <input type="file" accept="image/x-png,image/gif,image/jpeg"
                                class="form-control" name="featured_image" id="featured-image" />
                            <p style="font-weight:bold;font-size:0.75rem;"><b>Supported image types -
                                    jpeg,png,jpg,gif,svg</b></p>

                                </div>


                        </div>
                        <div>
                        <table class="table table-striped">
                            <thead>
                                <th>Image</th>
                                <th>Change Image</th>
                                <th>Actions</th>
                            </thead>
                            @foreach($product->images as $image)

                           <tr id="{{'image_row'.$image->id}}">
                                <td>
                                    {{-- <img class="AdminImgPre" src="{{asset($image->src)}}" style="width:20%;" alt="" /> --}}

                                    <div class="row">
                                        <div class="col-3">
                                            <img class="AdminImgPre w-100 d-block" src="{{asset($image->src)}}"  alt="" />
                                        </div>



                                        <div class="col-4 d-flex align-items-center">



                                @if (($image->is_featured) == 1)
                                <span class="badge bg-success">Featured Image</span>
                                @endif


                                        </div>
                                    </div>





                                </td>
                                <td>
                                    <input type="file" name="{{'image_upload_'.$image->id}}" class="form-control" />
                                    <input type="text" hidden name="image_ids[]" value="{{$image->id}}"
                                        class="form-control" />
                                </td>
                                <td><button type="button" onClick="deleteProductImage({{$image->id}},{{$product->id}});" class="btn btn-danger btn-sm text-white">Remove</button></td>
                           </tr>



                            @endforeach

                            </table>
                        <input type="text" hidden name="removed_images" id="{{'removed_images'.$product->id}}"/>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="{{'edit-short-description'.$product->id}}">Short Description *</label>
                                <textarea class="ckeditor form-control" name="short_description"
                                    value="{{ old('short_description')}}" required>{{$product->short_description}}</textarea>
                            </div>


                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="{{'edit-product-description'.$product->id}}">Product Description *</label>
                                <textarea class="ckeditor form-control" name="product_description"
                                    required>{{$product->product_description}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">





                            <div class="mb-3">
                                <label for="categories">Category *</label>
                                <select class="form-control" id="{{'category-selector'.$product->id}}"  onChange="addCategories('{{$product->id}}')">
                                    <option value="abc">---select---</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach

                                </select>

                            </div>
                        <div class="mb-3" id="{{'selected-categories'.$product->id}}">
                            <label for="categories">Selected Categories (<span class="text-danger">Click to remove</span>)</label><br/>

                            @foreach ($product->categories as $category)

                            <span  id="{{$product->id.'category-'.$category->id}}">
                                <input type="text" hidden name="categories[]" value="{{$category->id}}">
                                <button type="button" value="{{$category->id}}" name="categories[]" onClick="removeCategory('{{$product->id}}',{{$category->id}})" class="btn btn-danger btn-sm text-white">{{$category->category_name}}</button>
                            </span>

                            @endforeach
                        </div>

                        <div class="mb-3">
                                <label for="brand_id">Brand *</label>
                                <select class="form-control" id="brand_id" name="brand_id" required >
                                        
                                    @foreach ($brands as $brand)
                                        @if ($brand->id == $product->brand_id)
                                        <option selected value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                        @else
                                        <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                        @endif
                                        
                                    @endforeach

                                </select>
                    </div>



                    <div class="mb-3">
                                <label for="{{'unit_price'.$product->id}}">Unit Price *</label>
                                <input type="text" class="form-control" value="{{$product->unit_price}}" name="unit_price" id="{{'unit_price'.$product->id}}" onChange="calculateSellingPrice('{{$product->id}}')"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    placeholder="Unit Price" required />
                    </div>
                    <div class="mb-3">
                                <label for="{{'packing_cost'.$product->id}}">Packing Cost *</label>
                                <input type="text" class="form-control" name="packing_cost" id="{{'packing_cost'.$product->id}}" value="{{$product->packing_cost}}" onChange="calculateSellingPrice('{{$product->id}}')"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    placeholder="Packing Cost" required />
                    </div>
                    <div class="mb-3">
                                <label for="{{'selling_price'.$product->id}}">Selling Price *</label>
                                <input type="text" class="form-control" value="{{$product->selling_price}}" name="selling_price" id="{{'selling_price'.$product->id}}"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    placeholder="Selling Price" required />
                    </div>
                    <div class="mb-3">
                                <label for="{{'weight'.$product->id}}">Weight *</label>
                                <input type="text" class="form-control" value="{{$product->weight}}" name="weight" id="{{'weight'.$product->id}}"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    placeholder="Weight" required />
                    </div>
                    <div class="mb-3">
                                <label for="{{'weight_unit'.$product->id}}">Weight Unit *</label>
                                <select class="form-control" name="weight_unit" value="{{$product->weight_unit}}" id="{{'weight_unit'.$product->id}}" required >

                                    @foreach ($units as $unit)
                                    @if ($product->weight_unit == $unit->symbol)
                                    <option selected value="{{$unit->symbol}}">{{$unit->symbol}}</option>
                                    @else
                                    <option value="{{$unit->symbol}}">{{$unit->symbol}}</option>
                                    @endif

                                    @endforeach

                                </select>
                    </div>
                    <div class="mb-3">
                                <label for="{{'featured'.$product->id}}">Featured *</label>
                                <select class="form-control" name="featured" id="{{'featured'.$product->id}}">
                                    <option {{$product->featured == 0 ? 'selected' : ''}} value="0">No</option>
                                    <option {{$product->featured == 1 ? 'selected' : ''}} value="1">Yes</option>
                                </select>
                    </div>
                    <div class="mb-3">
                                <label for="{{'new_arrival'.$product->id}}">New Arrival *</label>
                                <select class="form-control" name="new_arrival" id="{{'new_arrival'.$product->id}}">
                                    <option {{$product->new_arrival == 0 ? 'selected' : ''}} value="0">No</option>
                                    <option {{$product->new_arrival == 1 ? 'selected' : ''}} value="1">Yes</option>
                                </select>
                    </div>
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

<script type="text/javascript">
    let removed_images = [];

$(document).ready(function() {
    $('.ckeditor').ckeditor();
    // $('.js-example-basic-single').select2();
});

function deleteProductImage(imageId,productId){

    let removedImagesElm = document.getElementById('removed_images'+productId);

    if(removedImagesElm !== undefined){

        var removedImages = removedImagesElm.value.split(',');

        if(!removedImages.includes(''+imageId)){
            removedImages.push(imageId);
        }

        console.log('dsdsd ==> ',removedImages);

        removedImagesElm.value = removedImages;

        document.getElementById('image_row'+imageId).remove();
    }

}
</script>
