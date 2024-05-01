<button type="button" class="btn btn-success btn-sm text-white" data-bs-toggle="modal" data-bs-target="{{'#approve-modal-'.$order->id}}">
<i class="fa fa-check"></i>  Approve
</button>

<div class="modal fade" id="{{'approve-modal-'.$order->id}}" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width:500px;">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Approve Order - {{$order->id}}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-bs-label="Close"></button>
        </div>
        <form action="{{route('orders.approve')}}" method="post" onsubmit="disableApproveBtn('{{$order->id}}')">
            {{csrf_field()}}
        <div class="modal-body">
            <div class="form-group">
                       
                Are you sure you want to approve this order ?

                            <input type="text" hidden name="order_id" value="{{$order->id}}"/>
            </div>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="{{'approve-btn'.$order->id}}">Yes</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>            
        </div>
        </form>
        </div>
    </div>
    </div>
<!-- jQuery -->
<script src="{{url('/plugins/jquery/jquery.min.js')}}"></script>
<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});

function disableApproveBtn(id){
        document.getElementById('approve-btn'+id).setAttribute('disabled','disabled');
}
</script>