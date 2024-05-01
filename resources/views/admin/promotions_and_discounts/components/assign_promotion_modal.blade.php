<!-- Button trigger modal -->
<button type="button" class="btn btn-dark btn-sm text-white" data-bs-toggle="modal" data-bs-target="{{'#assign-promotion-modal-'.$product->id}}">
  <i class="fa fa-link"></i> Assign Promotion
</button>

<!-- Modal -->
<div class="modal fade" id="{{'assign-promotion-modal-'.$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Assign Promotion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('promotions.assign')}}" method="post">     
          {{csrf_field()}} 
       <div class="modal-body">
           @if ($product->assignedPromotion != null)
           <div class="form-group">
               <h5>Currently Assigned Promotion</h5>
               <div class="row">
                   <div class="col-md-6">Promotion Title</div>
                   <div class="col-md-6">: {{$product->assignedPromotion->title}}</div>
                   
               </div><br>
               <div class="row">
                   <div class="col-md-6">Promotion Description</div>
                   <div class="col-md-6">: {{$product->assignedPromotion->description}}</div>
                   
               </div><br>
               <div class="row">
                   <div class="col-md-6">Promotion Tag</div>
                   <div class="col-md-6">: {{$product->assignedPromotion->promotion_tag}}</div>
                   
               </div><br>
               <div class="row">
                   <div class="col-md-6">Discount Type</div>
                   <div class="col-md-6">: 
                   @if($product->assignedPromotion->discount_type == 1)
                                        <span class="badge bg-success">Percentage</span>
                                        @else
                                        <span class="badge bg-danger">Amount</span>
                                        @endif
                   </div>
                   
               </div><br>
               <div class="row">
                   <div class="col-md-6">Discount</div>
                   <div class="col-md-6">: {{$product->assignedPromotion->discount}} {{$product->assignedPromotion->discount_type == 1 ? '%' : $commonContent['currencySymbol']->description}}
                   
                   </div>
                   
               </div><br>
               <div class="row">
                   <div class="col-md-6">Status</div>
                   <div class="col-md-6">: 
                   @if($product->assignedPromotion->status == 1)
                                        <span class="badge bg-success">Active</span>
                                        @else
                                        <span class="badge bg-danger">Inactive</span>
                                        @endif
                   </div>
                   
               </div>
           </div><hr/>
           @endif
           <h5>Assign New Promotion</h5><br>
        <div class="form-group">
            <input type="text" name="product_id" value="{{$product->id}}" hidden>
            <label for="">Please select promotion</label>
            <select name="selected_promotion" id="" class="form-control">
                @foreach ($promotions as $promotion)
                    <option value="{{$promotion->id}}">{{$promotion->title}}</option>
                @endforeach
            </select>
        </div> 
      </div>
      <div class="modal-footer">
          
        <button type="submit" class="btn btn-primary">Assign Promotion</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
      </form>

    </div>
  </div>
</div>