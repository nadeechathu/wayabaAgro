<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="{{'#edit-advertisement-modal'.$advertisement->id}}">
  <i class="fa fa-edit"></i> Edit
</button>

<!-- Modal -->
<div class="modal fade" id="{{'edit-advertisement-modal'.$advertisement->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width:800px;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Advertisement</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('advertisements.edit')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
      <div class="modal-body">
    <input type="text" hidden name="advertisement_id" value="{{$advertisement->id}}">
            <div class="mb-3">
              <label for="{{'advertisement_title'.$advertisement->id}}">Advertisement Name</label>
              <input type="text" class="form-control" name="title" value="{{$advertisement->title}}" id="{{'advertisement_title'.$advertisement->id}}" placeholder="Advertisement Title" required/>
            </div>
            <div class="mb-3">
                <label for="{{'advertisement_description'.$advertisement->id}}">Advertisement Description</label>
                <input type="text" class="form-control" name="description" value="{{$advertisement->description}}" id="{{'advertisement_description'.$advertisement->id}}" placeholder="Advertisement Description"/>
            </div>
            <div class="mb-3">
                <label for="status">Status</label>
                <select class="form-control" name="status" id="status">
                    @if ($advertisement->status == 0)
                        <option value="0" selected>Inactive</option>
                        <option value="1">Active</option>
                    @else
                        <option value="0">Inactive</option>
                        <option value="1" selected>Active</option>
                    @endif
                    
                </select>
            </div> 
            <div class="mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <label for="image">Advertisement Banner</label>
                        <input type="file" class="form-control" name="image" id="image"/>
                        <p style="font-weight:bold;font-size:0.75rem;"><b>Supported image types - jpeg,png,jpg,gif,svg</b></p>
                    </div>
                    <div class="col-md-6">
                    <label>Current Image</label>
                    <img src="{{asset($advertisement->image_src)}}" style="width:100%;" alt="">
                    </div>
                </div>
                
            </div>        
       
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update Advertisement</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>

