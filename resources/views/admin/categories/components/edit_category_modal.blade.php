

<button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="{{'#edit-category-'.$category->id}}">
  <i class="fas fa-edit"></i> Edit
</button>

<!-- Modal -->
<div class="modal fade" id="{{'edit-category-'.$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width:1000px;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Category - {{$category->category_name}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-bs-label="Close"></button>
      </div>
      <form action="{{route('categories.edit')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
      <div class="modal-body">

                <div class="row">
                  <div class="col-md-6">
                      
                      <div class="form-group">
                        <label for="{{'edit-category-name'.$category->id}}">Category Name</label>
                        <input type="text" class="form-control" id="{{'edit-category-name'.$category->id}}" name="category_name" value="{{$category->category_name}}" placeholder="Category Name" required>
                        <input type="text" hidden name="category_id" value="{{$category->id}}"/>
                      </div>
                      <div class="form-group">
                          <label for="{{'edit-category-description'.$category->id}}">Category Description</label>
                          <input type="text" class="form-control" id="{{'edit-category-description'.$category->id}}" name="category_description" value="{{$category->category_description}}" placeholder="Category Description" required>
                      </div>
                      <div class="form-group">
                          <label for="{{'slug'.$category->id}}">Slug</label>
                          <input type="text" class="form-control" id="{{'slug'.$category->id}}" name="slug" value="{{$category->slug}}" placeholder="Slug" required>
                      </div>
                      <div class="form-group">
                          <label for="image">New Category Image</label>
                          <input type="file" class="form-control" name="image" id="{{'image-upload'.$category->id}}"  onchange="validateImage('{{$category->id}}',event)"/>
                          <p style="font-weight:bold;font-size:0.75rem;"><b>Supported image types - jpeg,png,jpg,gif</b></p>
                          <div id="{{'img-validation-result'.$category->id}}" class="text-danger"></div>
                        <div class="row">
                            <div class="col-6">
                            Current image<br/>
                                @if ($category->category_image != null)
                                
                                <img src="{{asset($category->category_image)}}" alt="{{$category->category_name}}" style="width:100%"/>
                                @else
                                No image uploaded
                                @endif
                              </div>
                                <div class="col-6">
                                  Image preview
                          <br/>
                                  <img src="" id="{{'image'.$category->id}}" class="w-100 mt-3" alt="alt" style="display:none" >

                              </div>
                        </div>


                      </div>
                      <div class="form-group">
                          <label for="type">Type</label>
                          <select class="form-control" name="type" id="type">

                              @if ($category->type == 1)
                              <option selected value="1">Product</option>
                              <option value="0">Post</option>
                              @else
                              <option selected value="0">Post</option>
                              <option value="1">Product</option>
                              @endif
                          </select>
                      </div>
                  </div>
                  <div class="col-md-6">

                    <div class="form-group">
                      <label for="page_title">Page Title</label>
                      <input type="text" class="form-control" name="page_title" id="page_title" value="{{$category->page_title}}" placeholder="Page Title"/>
                    </div>
                    <div class="form-group">
                      <label for="meta_tag_description">Meta Tag Description</label>
                      <input type="text" class="form-control" name="meta_tag_description" id="meta_tag_description" value="{{$category->meta_tag_description}}" placeholder="Meta Tag Description"/>
                    </div>
                    <div class="form-group">
                      <label for="meta_keywords">Meta Keywords</label>
                      <input type="text" class="form-control" name="meta_keywords" id="meta_keywords" value="{{$category->meta_keywords}}" placeholder="Meta Keywords" />
                    </div>
                    <div class="form-group">
                      <label for="canonical_url">Canonical URL</label>
                      <input type="text" class="form-control" name="canonical_url" id="canonical_url" value="{{$category->canonical_url}}" placeholder="Canonical URL" />
                    </div>
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
<script>
    var loadFile = function (event){
        var imgshow = document.getElementById('imgshow');
        imgshow.src =URL.createObjectURL(event.target.files[0]);
        imgshow.style= 'block';
    };
   </script>
