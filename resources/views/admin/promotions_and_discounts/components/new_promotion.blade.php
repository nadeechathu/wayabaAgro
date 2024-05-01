<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="{{'#add-promotion-modal'}}">
  <i class="ri-add-circle-line align-bottom"></i> Add New
</button>

<!-- Modal -->
<div class="modal fade" id="add-promotion-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width:800px;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Promotion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('promotions.create')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
      <div class="modal-body">

            <div class="mb-3">
              <label for="promotion_title">Promotion Name</label>
              <input type="text" class="form-control" name="title" id="promotion_title" placeholder="Promotion Title" required/>
            </div>
            <div class="mb-3">
                <label for="promotion_description">Promotion Description</label>
                <input type="text" class="form-control" name="description" id="promotion_description" placeholder="Promotion Description"/>
            </div>
            {{-- <div class="mb-3">
                <label for="status">Status</label>
                <select class="form-control" name="status" id="status">
                    <option value="0">Inactive</option>
                    <option value="1">Active</option>
                </select>
            </div> --}} 
            <div class="mb-3">
                <label for="discount_type">Discount Type</label>
                <select class="form-control" name="discount_type" id="discount_type" required>
                    <option value="0">Amount</option>
                    <option value="1">Percantage</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="discount">Discount Value</label>
                <input type="text" class="form-control" name="discount" id="discount" placeholder="Discount Value" required/>
            </div>

            <div class="mb-3">
                <label for="promotion_tag">Promotion Tag</label>
                <input type="text" class="form-control" name="promotion_tag" id="promotion_tag" placeholder="Promotion Tag" required/>
            </div>
            <div class="mb-3">
                <label for="type">Type</label>
                <select class="form-control" name="type" id="type" required>
                    <option value="0">Other</option>
                    <option value="1">Flash Deals</option>
                    <option value="2">Stock Clearance</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="starts_at">Start Time</label>
                <input type="datetime-local" class="form-control" name="starts_at" id="starts_at"/>
            </div>
            <div class="mb-3">
                <label for="ends_at">End Time</label>
                <input type="datetime-local" class="form-control" name="ends_at" id="ends_at"/>
            </div>
       
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Create Promotion</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>

