<!-- Button trigger modal -->
<button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="{{'#edit_location_zone'.$location_detail->id}}">
    <i class="fa fa-edit"></i> Edit
    </button>

    <!-- Modal -->
    <!-- Modal -->
    <div class="modal fade" id="{{'edit_location_zone'.$location_detail->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Zone</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <form action="{{route('zones.updateZoneLocation')}}"  method="post" enctype="multipart/form-data">
            {{csrf_field()}}



            <div class="modal-body">













                <div class="row">
                    <div class="col-12"><label for="zone_select">Select Zone To Add</label></div>
                    <div class="col-12">
                       <div class="form-group">
                          <select class="form-control js-example-basic-single" id="zone_id" style="width:300px;" name="zone_id">
                             @foreach($zones as $zone)
                             <option value="{{$zone->id}}">{{$zone->zone_name}}</option>
                             @endforeach
                          </select>
                       </div>
                    </div>






                    <div class="col-12">
                        <div class="form-group">
                        <label for="location_name">Zone Name</label>
                        <input type="text" class="form-control" name="location_name" id="location_name" value="{{$location_detail->location_name}}"  required/>
                        <input type="text" hidden name="zone_id" value="{{$location_detail->id}}"/>
                    </div>
                    <div class="form-group">
                        <label for="location_description">Zone Description</label>
                        <textarea class="form-control" id="location_description" name="location_description" rows="3">{{$location_detail->location_description}}</textarea>

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
        </div>
      </div>
