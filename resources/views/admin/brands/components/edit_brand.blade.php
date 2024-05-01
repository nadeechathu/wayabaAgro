<!-- Button trigger modal -->
<button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="{{'#edit-brand'.$brand_detail->id}}">
    <i class="fa fa-edit"></i> Edit
    </button>

    <!-- Modal -->
    <div class="modal fade" id="{{'edit-brand'.$brand_detail->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Brand : {{$brand_detail->brand_name}}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="{{route('Brand.updateBrands')}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="modal-body">
                 <div class="row">
                    <div class="col-12">
                       <div class="form-group">
                          <label for="brand_name">Brand Name</label>
                          <input type="text" class="form-control" name="brand_name" id="brand_name" value="{{$brand_detail->brand_name}}"  required/>
                          <input type="text" hidden name="brand_id" value="{{$brand_detail->id}}"/>
                       </div>
                    </div>
                 </div>
                 <div class="row">
                  <div class="col-12">
                     <div class="form-group">
                      <label for="src">Brand Logo *</label>
                      <input type="file" multiple accept="image/x-png,image/gif,image/jpeg"
                      class="form-control" name="brand_logo" id="brand_logo" required />
                  <p style="font-weight:bold;font-size:0.75rem;"><b>Supported image types -
                          jpeg,png,jpg,gif,svg</b></p>

                     </div>
                  </div>
               </div>
              </div>
              <div class="modal-footer">
                 <button type="submit" class="btn btn-primary">Update Brand</button>
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
           </form>
          </div>
        
        </div>
      </div>
      {{-- <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Zone</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

          </div>
          <form action="{{route('zones.updateZone')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}



          <div class="modal-body">
            <div class="row">
                  <div class="col-12">
                      <div class="form-group">
                      <label for="zone_name">Zone Name</label>
                      <input type="text" class="form-control" name="zone_name" id="zone_name" value="{{$brand_details ->zone_name}}"  required/>
                      <input type="text" hidden name="zone_id" value="{{$brand_details ->id}}"/>
                  </div>
                  <div class="form-group">
                      <label for="zone_description">Zone Description</label>
                      <textarea class="form-control" id="zone_name" name="zone_description" rows="3">{{$brand_details ->zone_description}}</textarea>

                  </div>
                  <div class="form-group">
                    <label for="zip_code">Zip Code</label>
                    <input type="text" class="form-control" id="zip_code" name="zip_code" value="{{$brand_details ->zip_code}}"/>

                </div>
                  <div class="form-group">
                      <label for="shipping_cost">Shipping Cost per (Kg)</label>
                      <input type="text" class="form-control" name="shipping_cost" id="shipping_cost" value="{{$brand_details ->shipping_cost}}" required/>

                  </div>

                  <div class="row">
                      <div class="col-6">
                          <div class="form-group">
                          <label for="weight_margin">Weight margin</label>
                          <input type="text" class="form-control" name="weight_margin" id="weight_margin" value="{{$brand_details ->weight_margin}}" required/>
                      </div></div>
                      <div class="col-6">  <div class="form-group">
                          <label for="minimum_cost">Minimum Shipping cost</label>
                          <input type="text" class="form-control" name="minimum_cost" id="minimum_cost" value="{{$brand_details ->minimum_cost}}" required/>
                      </div></div>
                  </div>



                </div>

            </div>


        </div>






          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Update Zone</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
          </form>
        </div>
      </div> --}}
    </div>
