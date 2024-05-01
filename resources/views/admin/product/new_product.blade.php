@extends('admin.layouts.app')

@section('content')
<div>
    <!-- Breadcrumbs-->
    <div class="bg-white border-bottom py-3 mb-5">
        <div
            class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
                <h3 class="m-0">New Product</h3>

            </nav>
            <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">New</li>
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
                      <a href="{{route('products.all')}}">
                       <button class="btn btn-primary btn-sm" type="button"> <i class="fa fa-arrow-circle-left"></i> All Products</button>
                       </a>
                    </div>
                    <div class="col-md-6" style="float:right;">

                    </div>


                </div>
            </div>



            <form action="{{route('product.create')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="product_name">Product Name *</label>

          <input type="text" class="form-control" name="product_name" id="product_name0" onChange="checkproductName(0)"
                                    placeholder="Product Name" required />
                                    <p class="text-danger" id="name-invalid0"></p>                           </div>
                            <div class="mb-3">
                                <label for="product_code">Product Code *</label>
                                <input type="text" class="form-control" readonly name="product_code" id="product_code"
                                    placeholder="Product Code" value="{{$newProductCode}}" required />
                            </div>
                            <div class="mb-3">
                                <label for="slug">Slug *</label>
                                <input type="text" class="form-control" name="slug" id="slug"
                                    placeholder="Product Code" value="" required />
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
                                <label for="src">Product Images *</label>
                                <input type="file" multiple accept="image/x-png,image/gif,image/jpeg"
                                    class="form-control" name="src[]" id="src" required />
                                <p style="font-weight:bold;font-size:0.75rem;"><b>Supported image types -
                                        jpeg,png,jpg,gif,svg</b></p>
                            </div>

                            <div class="mb-3">
                                <label for="src">Export Featured Image *</label>
                                <input type="file" accept="image/x-png,image/gif,image/jpeg"
                                    class="form-control" name="export_featured_image" id="featured-image" />
                                <p style="font-weight:bold;font-size:0.75rem;"><b>Supported image types -
                                        jpeg,png,jpg,gif,svg</b></p>
                            </div>
                            <div class="mb-3">
                                <label for="src">Export Product Images *</label>
                                <input type="file" multiple accept="image/x-png,image/gif,image/jpeg"
                                    class="form-control" name="export_images[]" id="src"  />
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
                                <label for="categories">Category*</label>
                                <select class="form-control" id="category_id" name="category_id" required >
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach

                                </select>

                    </div>
                    {{--
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="category-selector">Category (Level 1) *</label>
                                <select class="form-control" id="category-selector" name="category_id" onChange="getSubCategories()" required >
                                        <option value="abc">---select---</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="sub-category-selector">Sub Category (Level 2) *</label>
                                <select class="form-control" id="sub-category-selector" name="sub_category_id" onChange="getChildCategories()" required >


                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="child-category-selector">Sub Category (Level 3) *</label>
                                <select class="form-control" id="child-category-selector" name="child_category_id" required >


                                </select>
                            </div>
                        </div>


                    </div>
                      --}}
                    <div class="mb-3">
                                <label for="brand_id">Brand *</label>
                                <select class="form-control" id="brand_id" name="brand_id" required >

                                    @foreach ($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                    @endforeach

                                </select>
                    </div>
                    <div class="mb-3">
                        <label for="brand_id">Country </label>
                        <select class="form-control" id="country_select" name="country_select"  required >
                            <option value="">--- Select ---</option>
                            @foreach ($countries as $country)
                                <option value="{{$country->id}}">{{$country->country_name}}</option>
                            @endforeach

                        </select>

                        <div id="selected-countries">

                        </div>
            </div>
                    {{-- <div class="mb-3">
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
                    </div> --}}
                    <div class="mb-3">
                                <label for="weight_unit">Weight Unit *</label>
                                <select class="form-control" name="weight_unit" id="weight_unit" required >

                                @foreach ($units as $unit)
                                <option value="{{$unit->symbol}}">{{$unit->symbol}}</option>
                                @endforeach

                                </select>
                    </div>

                    <div class="mb-3">
                                <label for="featured">Enable Exports *</label>
                                <select class="form-control" name="export_product" id="export_product">
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
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Create Product</button>
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

        var url = '{{ route("categories.subCategory.get", ":id") }}';
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

                    if(html !== ''){
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

function getChildCategories(){

    let subCategoryId = document.getElementById('sub-category-selector').value;
    let childCategorySelector = document.getElementById('child-category-selector');

    if (subCategoryId !== null) {

        childCategorySelector.innerHTML = '';

        var url = '{{ route("categories.childCategory.get", ":id") }}';
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
function removeCountryBtn(btnId) {

  const element = document.getElementById("country-btn"+btnId);
  element.remove();
}
</script>

@endsection

