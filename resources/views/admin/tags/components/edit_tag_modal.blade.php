
                      
<button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="{{'#edit-tag-'.$tag->id}}">
  <i class="fas fa-edit"></i> Edit
</button>

<!-- Modal -->
<div class="modal fade" id="{{'edit-tag-'.$tag->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width:500px;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Tag - {{$tag->tag_name}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-bs-label="Close"></button>
      </div>
      <form action="{{route('tags.edit')}}" method="post">
        {{csrf_field()}}
      <div class="modal-body">
                <div class="form-group">
                    <label for="{{'edit-tag-name'.$tag->id}}">Tag Name</label>
                    <input type="text" class="form-control" id="{{'edit-tag-name'.$tag->id}}" name="tag_name" value="{{$tag->tag_name}}" placeholder="Tag Name" required>
                    <input type="text" hidden name="tag_id" value="{{$tag->id}}"/>
                </div>
               
                <div class="form-group">
                    <label for="type">Type</label>
                    <select class="form-control" name="type" id="type">
                        
                        @if ($tag->type == 1)
                        <option selected value="1">Product</option>
                        <option value="0">Post</option>
                        @else
                        <option selected value="0">Post</option> 
                        <option value="1">Product</option>
                        @endif
                    </select>
                </div>
               
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-info">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>

    </div>
  </div>
</div>