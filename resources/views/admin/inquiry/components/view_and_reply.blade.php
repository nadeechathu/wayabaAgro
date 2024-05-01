<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="{{'#reply-modal'.$inquiry->id}}">
  <i class="fa fa-eye"></i> Show Message
</button>

<!-- Modal -->
<div class="modal fade" id="{{'reply-modal'.$inquiry->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width:600px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inquiry</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('inquiries.reply')}}" method="post">
          {{csrf_field()}}
      <div class="modal-body">
        <p>Inquiry Message : </p>
        <p>{{$inquiry->message}}</p><br/>
        
            <!-- <div class="form-group"> -->
                <!-- <label>Reply</label> -->
                <!-- <textarea name="reply" class="form-control" rows="10" required></textarea> -->
                <!-- <input type="hidden" name="inquiry_id" value="{{$inquiry->id}}"> -->
            <!-- </div> -->
        
      </div>
      <div class="modal-footer">
      <!-- <button type="submit" class="btn btn-primary">Save And Send Reply</button> -->

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>