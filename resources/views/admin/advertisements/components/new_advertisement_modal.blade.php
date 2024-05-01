<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="{{'#add-advertisement-modal'}}">
  <i class="ri-add-circle-line align-bottom"></i> Add New
</button>

<!-- Modal -->
<div class="modal fade" id="add-advertisement-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width:800px;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Advertisement</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('advertisements.create')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
      <div class="modal-body">

            <div class="mb-3">
              <label for="advertisement_title">Advertisement Name</label>
              <input type="text" class="form-control" name="title" id="advertisement_title" placeholder="Advertisement Title" required/>
            </div>
            <div class="mb-3">
                <label for="advertisement_description">Advertisement Description</label>
                <input type="text" class="form-control" name="description" id="advertisement_description" placeholder="Advertisement Description"/>
            </div>
            <div class="mb-3">
                <label for="status">Status</label>
                <select class="form-control" name="status" id="status">
                    <option value="0">Inactive</option>
                    <option value="1">Active</option>
                </select>
            </div> 
            <div class="mb-3">
                <label for="image">Advertisement Banner</label>
                <input type="file" class="form-control" name="image" id="image" required/>
                <p style="font-weight:bold;font-size:0.75rem;"><b>Supported image types - jpeg,png,jpg,gif,svg</b></p>
            </div>        
       
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Create Advertisement</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>

