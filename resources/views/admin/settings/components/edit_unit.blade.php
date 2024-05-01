<!-- Button trigger modal -->
<button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="{{'#edit-unit'.$units_detail->id}}">
    <i class="fa fa-edit"></i> Edit
    </button>
    <!-- Modal -->
    <div class="modal fade" id="{{'edit-unit'.$units_detail->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Unit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <form action="{{route('settings.updateUnit')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-body">
                   <div class="row">
                      <div class="col-12">
                         <div class="form-group">
                            <label for="type">Unit Type</label>
                            {{-- <input type="text" class="form-control" name="type" id="type" required/> --}}
                            <select class="form-select" aria-label="Default select example" name="type" id="type" required data-error="Please enter type">
                               <option selected value="0">weight</option>
                            </select>
                            <input type="text" hidden name="unit_id" value="{{$units_detail->id}}"/>
                         </div>
                         <div class="form-group">
                            <label for="symbol">Symbol</label>
                            <input type="text" class="form-control" name="symbol" id="symbol" value="{{$units_detail->symbol}}" required data-error="Please enter Symbol"/>
                         </div>
                         <div class="form-group">
                            <label for="description">Unit Description </label>
                            <textarea class="form-control" id="description" name="description"
                            ro ws="3" required data-error="Please enter Unit Description">{{$units_detail->description}}</textarea>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="modal-footer">
                   <button type="submit" class="btn btn-primary">Update</button>
                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
             </form>
          </div>
       </div>
    </div>
