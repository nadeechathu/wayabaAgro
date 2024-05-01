@extends('admin.layouts.app')

@section('content')
    <div>
        <!-- Breadcrumbs-->
        <div class="bg-white border-bottom py-3 mb-5">
            <div
                class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
                <nav class="mb-0" aria-label="breadcrumb">
                    <h3 class="m-0">Edit Product</h3>

                </nav>
                <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item"><a href="#">Products</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </div>
            </div>
        </div> <!-- / Breadcrumbs-->


        <section class="container-fluid">

            <div class="card">
                <div class="card-header">
                    @include('admin.common.alerts')
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('products.all') }}">
                                <button class="btn btn-primary btn-sm" type="button"> <i
                                        class="fa fa-arrow-circle-left"></i> All Products</button>
                            </a>
                        </div>
                        <div class="col-md-6" style="float:right;">

                        </div>


                    </div>
                </div>



                <form action="{{ route('product.edit') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="{{ 'edit-product-name' . $product->id }}">Product Name *</label>
                                    <input type="text" class="form-control" id="{{ 'product_name' . $product->id }}"
                                        name="product_name" value="{{ $product->product_name }}"
                                        onChange="checkproductName('{{ $product->id }}')" placeholder="Product Name"
                                        required />
                                    <p class="text-danger" id="{{ 'name-invalid' . $product->id }}"></p>
                                    <input type="text" hidden name="product_id" value="{{ $product->id }}" />
                                </div>
                                <div class="form-group">
                                    <label for="{{ 'edit-product-code' . $product->id }}">Product Code *</label>
                                    <input type="text" readonly class="form-control"
                                        id="{{ 'edit-product-code' . $product->id }}" name="product_code"
                                        value="{{ $product->product_code }}" placeholder="Product Code" required>
                                    <input type="text" hidden name="product_id" value="{{ $product->id }}" />
                                </div>

                                <div class="form-group">
                                    <label for="slug">Slug *</label>
                                    <input type="text" class="form-control" name="slug"
                                        id="{{ 'slug' . $product->id }}" placeholder="Product Code"
                                        value="{{ $product->slug }}" required />
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
                                    <label for="src">Product Images</label>
                                    <input type="file" multiple accept="image/x-png,image/gif,image/jpeg"
                                        class="form-control" name="src[]" id="src" />
                                    <p style="font-weight:bold;font-size:0.75rem;"><b>Supported image types -
                                            jpeg,png,jpg,gif,svg</b></p>
                                </div>



                                <div class="form-group">
                                    <label for="featured-image">Featured Image</label>
                                    <input type="file" accept="image/x-png,image/gif,image/jpeg" class="form-control"
                                        name="featured_image" id="featured-image" />
                                    <p style="font-weight:bold;font-size:0.75rem;"><b>Supported image types -
                                            jpeg,png,jpg,gif,svg</b></p>

                                </div>

                                <div class="mb-3">
                                <label for="src">Export Featured Image</label>
                                <input type="file" accept="image/x-png,image/gif,image/jpeg"
                                    class="form-control" name="export_featured_image" id="featured-image" />
                                <p style="font-weight:bold;font-size:0.75rem;"><b>Supported image types -
                                        jpeg,png,jpg,gif,svg</b></p>
                            </div>
                            <div class="mb-3">
                                <label for="src">Export Product Images</label>
                                <input type="file" multiple accept="image/x-png,image/gif,image/jpeg"
                                    class="form-control" name="export_images[]" id="src" />
                                <p style="font-weight:bold;font-size:0.75rem;"><b>Supported image types -
                                        jpeg,png,jpg,gif,svg</b></p>
                            </div>


                        </div>
                        <div>
                        <table class="table table-striped">
                            <thead>
                                <th>Image</th>
                                <th>Image Type</th>
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
                                @if (($image->image_type) == 1)
                                <span class="badge bg-danger">Export Image</span>
                                @else
                                <span class="badge bg-info">Local Image</span>
                                @endif
                                </td>
                                <td>
                                    <input type="file" name="{{'image_upload_'.$image->id}}" class="form-control" />
                                    <input type="text" hidden name="image_ids[]" value="{{$image->id}}"
                                        class="form-control" />
                                </td>
                                <td><button type="button" onClick="deleteProductImage({{$image->id}},{{$product->id}});" class="btn btn-danger btn-sm text-white">Remove</button></td>
                           </tr>



                            @endforeach


                            @foreach($product->exportImages as $image)

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
                                @if (($image->image_type) == 1)
                                <span class="badge bg-danger">Export Image</span>
                                @else
                                <span class="badge bg-info">Local Image</span>
                                @endif
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
                           
                          
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="{{ 'edit-short-description' . $product->id }}">Short Description *</label>
                                    <textarea class="ckeditor form-control" name="short_description" value="{{ old('short_description') }}" required>{{ $product->short_description }}</textarea>
                                </div>


                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="{{ 'edit-product-description' . $product->id }}">Product Description
                                        *</label>
                                    <textarea class="ckeditor form-control" name="product_description" required>{{ $product->product_description }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="categories">Category *</label>
                            <select class="form-control" id="category-selector" name="category_id" required>
                                @foreach ($categories as $category)
                                    <option {{ $product->category_id == $category->id ? 'selected' : '' }}
                                        value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach

                            </select>

                        </div>

                        <div class="mb-3">
                            <label for="brand_id">Brand *</label>
                            <select class="form-control" id="brand_id" name="brand_id" required>

                                @foreach ($brands as $brand)
                                    @if ($brand->id == $product->brand_id)
                                        <option selected value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                    @else
                                        <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                    @endif
                                @endforeach

                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="brand_id">Country </label>
                            <select class="form-control" id="country_select" name="country_select" >
                                <option value="">--- Select ---</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                                @endforeach

                            </select>

                            <div id="selected-countries">
                                @foreach ($product->countries as $productCountry)
                                <button class="btn btn-primary border border-dark me-2 text-white my-2 py-2 " id="{{'country-btn'.$productCountry->id}}" value="{{ $productCountry->id}}" onClick="removeCountryBtn({{$productCountry->id}})">
                                    <i class="fa fa-trash  ms-2" id="remove_id" ></i> 
                                     {{ $productCountry->country_name }}      
                                     <input type="text" hidden  name="countries[]" value="{{ $productCountry->id}}">                         
                                </button>
                                
                                @endforeach
                            </div>
                        </div>
                        {{--
                    <div class="row">





                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="category-selector">Category (Level 1) *</label>
                                        <select class="form-control" id="category-selector" name="category_id" onChange="getSubCategories()" required >
                                                
                                            @foreach ($categories as $category)
                                                <option {{$product->category_id == $category->id ? 'selected' : ''}} value="{{$category->id}}">{{$category->category_name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="sub-category-selector">Sub Category (Level 2) *</label>
                                        <select class="form-control" id="sub-category-selector" name="sub_category_id" onChange="getChildCategories()" required >
                                               
                                            @foreach ($subCategories as $subCategory)
                                                <option {{$product->sub_category_id == $subCategory->id ? 'selected' : ''}} value="{{$subCategory->id}}">{{$subCategory->sub_category_name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="child-category-selector">Sub Category (Level 3) *</label>
                                        <select class="form-control" id="child-category-selector" name="child_category_id" required >
                                               
                                            @foreach ($childCategories as $childCategory)
                                                <option {{$product->child_category_id == $childCategory->id ? 'selected' : ''}} value="{{$childCategory->id}}">{{$childCategory->child_category_name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                            </div>

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

                    --}}

                        {{-- <div class="mb-3">
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
                    </div> --}}




                        <div class="mb-3">
                            <label for="{{ 'weight_unit' . $product->id }}">Weight Unit *</label>
                            <select class="form-control" name="weight_unit" value="{{ $product->weight_unit }}"
                                id="{{ 'weight_unit' . $product->id }}" required>

                                @foreach ($units as $unit)
                                    @if ($product->weight_unit == $unit->symbol)
                                        <option selected value="{{ $unit->symbol }}">{{ $unit->symbol }}</option>
                                    @else
                                        <option value="{{ $unit->symbol }}">{{ $unit->symbol }}</option>
                                    @endif
                                @endforeach

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="{{ 'export_product' . $product->id }}">Enable Exports *</label>
                            <select class="form-control" name="export_product" id="{{ 'export_product' . $product->id }}">
                                <option {{ $product->export_product == 0 ? 'selected' : '' }} value="0">No</option>
                                <option {{ $product->export_product == 1 ? 'selected' : '' }} value="1">Yes</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="{{ 'new_arrival' . $product->id }}">New Arrival *</label>
                            <select class="form-control" name="new_arrival" id="{{ 'new_arrival' . $product->id }}">
                                <option {{ $product->new_arrival == 0 ? 'selected' : '' }} value="0">No</option>
                                <option {{ $product->new_arrival == 1 ? 'selected' : '' }} value="1">Yes</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </form>

            <!-- /.card-body -->

            <!-- /.card-footer-->
    </div>
    <!-- /.card -->
    </section>
    </div>
@endsection

@section('scripts')
    <script>
        function getSubCategories() {

            let mainCategoryId = document.getElementById('category-selector').value;
            let subCategorySelector = document.getElementById('sub-category-selector');

            if (mainCategoryId !== null) {

                subCategorySelector.innerHTML = '';

                var url = '{{ route('categories.subCategory.get', ':id') }}';
                url = url.replace(':id', mainCategoryId);

                $.ajax({
                    type: "get",
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(res) {

                        console.log(res);

                        let html = '';

                        if (res.status) {
                            for (let i = 0; i < res.categories.length; i++) {
                                html = html + "<option value='" + res.categories[i].id + "'>" +
                                    res.categories[i].sub_category_name + "</option>";
                            }

                            subCategorySelector.innerHTML = html;

                            if (html !== '') {
                                getChildCategories();
                            }



                        }


                    },
                    error: function(data) {
                        // console.log('Error:', data);

                    }
                });
            }

        }

        function getChildCategories() {

            let subCategoryId = document.getElementById('sub-category-selector').value;
            let childCategorySelector = document.getElementById('child-category-selector');

            if (subCategoryId !== null) {

                childCategorySelector.innerHTML = '';

                var url = '{{ route('categories.childCategory.get', ':id') }}';
                url = url.replace(':id', subCategoryId);

                $.ajax({
                    type: "get",
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(res) {

                        console.log(res);

                        let html = '';

                        if (res.status) {
                            for (let i = 0; i < res.categories.length; i++) {
                                html = html + "<option value='" + res.categories[i].id + "'>" +
                                    res.categories[i].child_category_name + "</option>";
                            }

                            childCategorySelector.innerHTML = html;




                        }


                    },
                    error: function(data) {
                        // console.log('Error:', data);

                    }
                });
            }

        }
    </script>
    <script>
        $("#country_select").change(function() {
            var countryId = $('#country_select').val();
            // alert(countryId);
    
            $.ajax({
            type:'GET',
            url:"/admin/product/countries/get/"+countryId,
    
            success:function(data){
                console.log(data);
                if(data.status){
                    
                    let countriesElm = document.getElementById('selected-countries');
                    let countriesElmHtml = document.getElementById('selected-countries').innerHTML;
    
                    let btnId = 'country-btn'+data.payload.id;
    
                    let buttonExists = document.getElementById(btnId);
    
                    if(buttonExists === null){
    
                         countriesElmHtml = countriesElmHtml + '<button id="'+btnId+'" type="button" class="btn btn-primary border border-dark me-2 text-white my-2 py-2 " >'+data.payload.country_name+'<i class="fa fa-trash  ms-2" id="remove_id" onClick="removeCountryBtn('+data.payload.id+')"></i><input type="text" hidden name="countries[]" value='+data.payload.id+'></button>';
                         countriesElm.innerHTML = countriesElmHtml;
                    }
    
                }
            },
            error: function(data) {
                console.log('Error:', data);
            }
            });
    
    });
    </script>
    <script>
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
        function removeCountryBtn(btnId) {
           
          const element = document.getElementById("country-btn"+btnId);
          element.remove();
        }
        </script>
@endsection
