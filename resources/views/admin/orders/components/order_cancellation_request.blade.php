<button type="button" class="btn btn-danger btn-sm text-white action-buttons" data-bs-toggle="modal" data-bs-target="{{'#cancel-modal-'.$order->id}}">
<i class="fa fa-ban"></i>  Cancel Order
</button>

<div class="modal fade" id="{{'cancel-modal-'.$order->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cancel Order - {{$order->id}}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-bs-label="Close"></button>
        </div>
        <form action="{{route('orders.initiateCancellation')}}" method="post">
            {{csrf_field()}}
        <div class="modal-body">
            <label for="{{'cancel-order-'.$order->id}}">Please enter the reason for the cancellation</label>
            <textarea class="form-control" name="cancelled_reason" required></textarea>
            <input type="text" hidden name="order_id" value="{{$order->id}}"/><br/>
           
            <p> Are you sure you want to cancel this order ? </p>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Yes</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>            
        </div>
        </form>
        </div>
    </div>
    </div>