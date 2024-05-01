
                      
<button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="{{'#edit-category-'.$sub_category->id}}">
  <i class="fas fa-edit"></i> Edit
</button>

<!-- Modal -->
<div class="modal fade" id="{{'edit-category-'.$sub_category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width:1000px;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
        Edit Sub Category - {{$sub_category->sub_category_name}}
          
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-bs-label="Close"></button>
      </div>
      <form action="{{route('subCategories.edit')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
      <div class="modal-body">

                <div class="row">
                  <div class="col-md-6">
                      
                      <div class="mb-3" id="category_for_sub_category">
                          <label for="parent_category">Select Parent Category</label>
                          <select class="form-control" name="parent_category" id="parent_category" required>
                              @foreach ($all_categories as $cat)
                                @if ($cat->id == $sub_category->category_id)
                                  <option selected value="{{$cat->id}}">{{$cat->category_name}}</option>
                                @else
                                  <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                                @endif
                              @endforeach

                          </select>
                      </div>
                        
                      <div class="form-group">
                        <label for="{{'edit-category-name'.$sub_category->id}}">Category Name</label>
                        <input type="text" class="form-control" id="{{'edit-category-name'.$sub_category->id}}" name="category_name" value="{{$sub_category->sub_category_name}}" placeholder="Category Name" required>
                        <input type="text" hidden name="sub_category_id" value="{{$sub_category->id}}"/>
                      </div>
                      <div class="form-group">
                          <label for="{{'edit-category-description'.$sub_category->id}}">Category Description</label>
                          <input type="text" class="form-control" id="{{'edit-category-description'.$sub_category->id}}" name="category_description" value="{{$sub_category->sub_category_description}}" placeholder="Category Description" required>
                      </div>
                     
                      <div class="form-group">
                          <label for="image">New Category Image</label>
                          <input type="file" class="form-control" name="image" id="{{'image-upload'.$sub_category->id}}" onchange="validateImage('{{$sub_category->id}}',event)"/>
                          <p style="font-weight:bold;font-size:0.75rem;"><b>Supported image types - jpeg,png,jpg,gif</b></p>
                          <div id="{{'img-validation-result'.$sub_category->id}}" class="text-danger"></div>
                          
                          <div class="row">
                            <div class="col-6">
                            Current image<br/>
                                @if ($sub_category->sub_category_image != null)
                                
                                <img src="{{asset($sub_category->sub_category_image)}}" alt="{{$sub_category->sub_category_name}}" style="width:100%"/>
                                @else
                                No image uploaded
                                @endif
                              </div>
                                <div class="col-6">
                                  Image preview
                          <br/>
                                  <img src="" id="{{'image'.$sub_category->id}}" class="w-100 mt-3" alt="alt" style="display:none" >

                              </div>
                        </div>
                      </div>
                      
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                          <label for="{{'slug'.$sub_category->id}}">Slug</label>
                          <input type="text" class="form-control" id="{{'slug'.$sub_category->id}}" name="slug" value="{{$sub_category->slug}}" placeholder="Slug" required>
                      </div>
                    <div class="form-group">
                      <label for="page_title">Page Title</label>
                      <input type="text" class="form-control" name="page_title" id="page_title" value="{{$sub_category->page_title}}" placeholder="Page Title"/>
                    </div>
                    <div class="form-group">
                      <label for="meta_tag_description">Meta Tag Description</label>
                      <input type="text" class="form-control" name="meta_tag_description" id="meta_tag_description" value="{{$sub_category->meta_tag_description}}" placeholder="Meta Tag Description"/>
                    </div>
                    <div class="form-group">
                      <label for="meta_keywords">Meta Keywords</label>
                      <input type="text" class="form-control" name="meta_keywords" id="meta_keywords" value="{{$sub_category->meta_keywords}}" placeholder="Meta Keywords" />
                    </div>
                    <div class="form-group">
                      <label for="canonical_url">Canonical URL</label>
                      <input type="text" class="form-control" name="canonical_url" id="canonical_url" value="{{$sub_category->canonical_url}}" placeholder="Canonical URL" />
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