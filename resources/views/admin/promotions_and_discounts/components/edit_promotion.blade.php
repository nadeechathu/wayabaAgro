<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="{{'#add-promotion-modal'.$promotion->id}}">
  <i class="fa fa-edit"></i> Edit
</button>

<!-- Modal -->
<div class="modal fade" id="{{'add-promotion-modal'.$promotion->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width:800px;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Promotion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('promotions.edit')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
      <div class="modal-body">
    <input type="text" name="promotion_id" value="{{$promotion->id}}" hidden>
            <div class="mb-3">
              <label for="promotion_title">Promotion Name</label>
              <input type="text" class="form-control" name="title" id="promotion_title" value="{{$promotion->title}}" placeholder="Promotion Title" required/>
            </div>
            <div class="mb-3">
                <label for="promotion_description">Promotion Description</label>
                <input type="text" class="form-control" name="description" id="promotion_description" value="{{$promotion->description}}" placeholder="Promotion Description"/>
            </div>
            {{-- <div class="mb-3">
                <label for="status">Status</label>
                <select class="form-control" name="status" id="status">
                    @if ($promotion->status == 1)                        
                        <option value="0">Inactive</option>
                        <option value="1" selected>Active</option>
                    @else                    
                        <option value="0" selected>Inactive</option>
                        <option value="1">Active</option>
                        
                    @endif
                </select>
            </div> --}}
            <div class="mb-3">
                <label for="discount_type">Discount Type</label>
                <select class="form-control" name="discount_type" id="discount_type" required>
                        <option {{$promotion->discount_type == 0 ? 'selected':''}} value="0">Amount</option>
                        <option {{$promotion->discount_type == 1 ? 'selected':''}} value="1">Percantage</option>                  
                </select>
            </div>
            
            <div class="mb-3">
                <label for="discount">Discount Value</label>
                <input type="text" class="form-control" name="discount"value="{{$promotion->discount}}"  id="discount" placeholder="Discount Value" required/>
            </div>

            <div class="mb-3">
                <label for="promotion_tag">Promotion Tag</label>
                <input type="text" class="form-control" name="promotion_tag"value="{{$promotion->promotion_tag}}"  id="promotion_tag" placeholder="Promotion Tag" required/>
            </div>
            <div class="mb-3">
                <label for="type">Type</label>
                <select class="form-control" name="type" id="type" required>
                    <option {{$promotion->type == 0 ? 'selected':''}} value="0">Other</option>
                    <option {{$promotion->type == 1 ? 'selected':''}} value="1">Flash Deals</option>
                    <option {{$promotion->type == 2 ? 'selected':''}} value="2">Stock Clearance</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="starts_at">Start Time</label>
                <input type="datetime-local" class="form-control" value="{{str_replace(' ','T',$promotion->starts_at)}}" name="starts_at" id="starts_at"/>
            </div>
            <div class="mb-3">
                <label for="ends_at">End Time</label>
                <input type="datetime-local" class="form-control" value="{{str_replace(' ','T',$promotion->ends_at)}}" name="ends_at" id="ends_at"/>
            </div>
       
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update Promotion</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>

