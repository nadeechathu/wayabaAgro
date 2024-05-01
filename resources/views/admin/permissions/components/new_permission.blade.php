<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="{{'#add-permission-modal'}}">
<i class="ri-add-circle-line align-bottom"></i> Add New
</button>

<!-- Modal -->
<div class="modal fade" id="{{'add-permission-modal'}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Permission</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-bs-label="Close"></button>
      </div>
      <form action="{{route('permissions.create')}}" method="post">
          {{csrf_field()}}
      <div class="modal-body">
        <div class="form-group">
            <label for="tag_name">Permission Name</label>
            <input type="text" class="form-control" name="name" id="name" required/>
        </div>

        <div class="form-group">
            <label for="type">Permission Type</label>
            <select class="form-control" name="type" id="name">
                        <option value="post">Post</option>
                        <option value="category">Category</option>
                        <option value="tag">Tag</option>
                        <option value="user">User</option>
                        <option value="comment">Comments</option>
                        <option value="pages">Pages</option>
                        <option value="settings">Settings</option>
                        <option value="products">Products</option>
                        <option value="inventory">Inventory</option>
                        <option value="orders">Orders</option>
                        <option value="zones">Zones</option>
                        <option value="promotions">Promotions</option>
                        <option value="advertisements">Advertisements</option>
                        <option value="inquiries">Inquiry</option>
                        <option value="marketing">Marketing</option>
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Create Permission</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>
