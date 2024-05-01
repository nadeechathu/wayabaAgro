<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#new-mail-config">
<i class="ri-add-circle-line align-bottom"></i> Add New
</button>

<!-- Modal -->
<div class="modal fade" id="new-mail-config" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width:700px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Zone</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div>
      <form action="{{route('zones.addZone')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="modal-body">
          <div class="row">
                <div class="col-12">
                    <div class="form-group">
                    <label for="zone_name">Zone Name</label>
                    <input type="text" class="form-control" name="zone_name" id="zone_name" required/>

                </div>
                <div class="form-group">
                    <label for="zone_description">Zone Description</label>
                    <textarea class="form-control" id="zone_name" name="zone_description" rows="3"></textarea>

                </div>
                <div class="form-group">
                    <label for="zip_code">Zip Code</label>
                    <input type="text" class="form-control" id="zip_code" name="zip_code" />

                </div>
                <div class="form-group">
                    <label for="shipping_cost">Shipping Cost per (Kg)</label>
                    <input type="text" class="form-control" name="shipping_cost" id="shipping_cost" required/>

                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                        <label for="weight_margin">Weight margin</label>
                        <input type="text" class="form-control" name="weight_margin" id="weight_margin" required/>
                    </div></div>
                    <div class="col-6">  <div class="form-group">
                        <label for="minimum_cost">Minimum Shipping cost</label>
                        <input type="text" class="form-control" name="minimum_cost" id="minimum_cost" required/>
                    </div></div>
                </div>



              </div>

          </div>


      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Add Zone</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
