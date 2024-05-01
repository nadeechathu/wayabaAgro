<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#new-mail-config">
  <i class="ri-add-circle-line align-bottom"></i> Add New
  </button>
  <!-- Modal -->
  <div class="modal fade" id="new-mail-config" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" >
        <div class="modal-content">
           <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New Brands</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <form action="{{route('brands.addBrands')}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="modal-body">
                 <div class="row">
                    <div class="col-12">
                       <div class="form-group">
                          <label for="brand_name">Brand Name</label>
                          <input type="text" class="form-control" name="brand_name" id="brand_name" required/>
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
                 <button type="submit" class="btn btn-primary">Add Brand</button>
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
           </form>
        </div>
     </div>
  </div>