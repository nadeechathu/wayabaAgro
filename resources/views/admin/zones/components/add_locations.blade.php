<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm text-white" data-bs-toggle="modal" data-bs-target="#add-location">
    <i class="ri-add-circle-line align-bottom"></i> Add New Location
    </button>
    <!-- Modal -->
    <div class="modal fade" id="add-location" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" style="max-width:700px;">
          <div class="modal-content">
             <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Location</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <form action="{{route('zones.addLocations')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-body">
                   <div class="col-12">
                      <div class="row">
                         <div class="col-12"><label for="zone_select">Select Zone To Add</label></div>
                         <div class="col-12">
                            <div class="form-group">
                               <select class="form-control js-example-basic-single" id="zone_select" style="width:300px;" name="zone_id">
                                  @foreach($zones as $zone)
                                  <option value="{{$zone->id}}">{{$zone->zone_name}}</option>
                                  @endforeach
                               </select>
                            </div>
                         </div>
                      </div>
                      <div class="col-12">
                         <div class="form-group">
                            <label for="location_name">Location Name</label>
                            <input type="text" class="form-control" name="location_name" id="location_name" required/>
                         </div>
                         <div class="form-group">
                            <label for="location_description">Location Description</label>
                            <textarea class="form-control" id="location_description" name="location_description" rows="3"></textarea>
                         </div>
                      </div>
                   </div>
                   <div class="card-footer">
                      <div class="d-felx justify-content-center">
                         {{$location_details->links()}}
                      </div>
                   </div>
                </div>
                <div class="modal-footer">
                   <button type="submit" class="btn btn-primary">Add Location</button>
                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
             </form>
          </div>
       </div>
    </div>
