<!-- Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm text-white" data-bs-toggle="modal" data-bs-target="{{'#remove-brand'.$brand_detail->id}}">
    <i class="fa fa-trash"></i> Delete
    </button>




      <!-- Modal -->
<div class="modal fade" id="{{'remove-brand'.$brand_detail->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Remove Brand : {{$brand_detail->brand_name}}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>
        <form action="{{route('Brand.removeBrand')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="modal-body">
         Are you sure you want to remove this Brand from the system ? <br/>
         <p class="text-danger">This action cannot be undone.</p>
        <input type="text" hidden name="brand_id" value="{{$brand_detail->id}}"/>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Yes</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>
