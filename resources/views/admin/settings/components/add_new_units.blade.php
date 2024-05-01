<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#new-mail-config">
<i class="ri-add-circle-line align-bottom"></i> Add New
</button>

<!-- Modal -->
<div class="modal fade" id="new-mail-config" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width:700px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Unit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div>
      <form action="{{route('settings.addUnits')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="modal-body">
          <div class="row">
                <div class="col-12">
                    <div class="form-group">
                    <label for="type">Unit Type</label>
                    {{-- <input type="text" class="form-control" name="type" id="type" required/> --}}
                    
                    <select class="form-select" aria-label="Default select example" name="type" id="type" required data-error="Please enter type">
                        <option value="0">weight</option>

                      </select>


                </div>
                <div class="form-group">
                    <label for="symbol">Symbol</label>
                    <input type="text" class="form-control" name="symbol" id="symbol"  required data-error="Please enter Symbol"/>

                </div>
                <div class="form-group">
                    <label for="description">Unit Description </label>

                    <textarea class="form-control" id="description" name="description" rows="3" required data-error="Please enter Unit Description"></textarea>
                </div>

              </div>

          </div>


      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Added</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
