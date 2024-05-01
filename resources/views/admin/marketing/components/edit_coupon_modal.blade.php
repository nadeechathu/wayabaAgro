

<button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="{{'#edit-category-'.$coupon_detail->id}}">
  <i class="fas fa-edit"></i> Edit
</button>

<!-- Modal -->
<div class="modal fade" id="{{'edit-category-'.$coupon_detail->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog"  role="document">
        <div class="modal-content">
           <div class="modal-header">
              <h5 class="modal-title" id="productModalLabel">{{$coupon_detail->coupon_name}} - {{$coupon_detail->coupon_code}}</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <form action="{{route('coupon.updateCoupon')}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="modal-body">
                 <div class="row">
                    <div class="mb-3">


                       <label for="{{$coupon_detail->id}}">Coupon Name</label>
                       <input type="text" class="form-control" id="{{'coupon_name'.$coupon_detail->id}}"
                           name="coupon_name" value="{{$coupon_detail->coupon_name}}" onChange="checkcouponName('{{$coupon_detail->id}}')" placeholder="Coupon Name"
                           required/>
                           <p class="text-danger" id="{{'name-invalid'.$coupon_detail->id}}"></p>

                           <input type="text" name="coupon_id" value="{{$coupon_detail->id}}" hidden>

                    </div>
                    <div class="col-12">

                       <div class="mb-3">
                          <label for="coupon_type" class="form-label">Coupon Type</label>
                          <select class="form-select"  aria-label="Default select example" id="coupon_type" name="coupon_type">

                             <option value="0" {{$coupon_detail->coupon_type == 0 ? 'selected':''}}>Fixed</option>
                             <option value="1" {{$coupon_detail->coupon_type == 1 ? 'selected':''}}>Percentage</option>
                          </select>
                       </div>
                       <div class="mb-3">
                          <label for="coupon_value" class="form-label">Coupon Value</label>
                          <input type="text" class="form-control" id="coupon_value" name="coupon_value" value="{{$coupon_detail->coupon_value}}">
                       </div>
                       <div class="mb-3">
                          <label for="status" class="form-label">Status</label>
                          <select name="status" id="status" class="form-select"  aria-label="Default select example">
                            <option value="0" {{$coupon_detail->status == 0 ? 'selected' : ''}}>Active</option>
                              <option value="1" {{$coupon_detail->status == 1 ? 'selected' : ''}}>Deactive</option>

                           </select>
                       </div>
                       <div class="mb-3">
                                <label for="status" class="form-label">Expiry Date</label>
                                <input name="expiry_date" id="expiry_date" class="form-control" value="{{$coupon_detail->expiry_date}}" type="datetime-local"/>
                                    
                        </div>
                    </div>
                 </div>
              </div>
              <div class="modal-footer">

                        <button type="submit" class="btn btn-primary">Update Coupon</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
           </form>
        </div>
     </div>
</div>
