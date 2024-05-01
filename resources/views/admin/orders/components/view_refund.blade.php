<!-- Button trigger modal -->
<button type="button" class="btn btn-secondary  btn-sm text-dark action-buttons"  data-bs-toggle="modal" data-bs-target="{{'#refund-view-'.$order->id}}">
    <i class="fa fa-money-bill-wave"></i> Refund
    </button>

    <!-- Modal -->
    <div class="modal fade" id="{{'refund-view-'.$order->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" >
          <div class="modal-content">
             <div class="modal-header">
                <h5 class="modal-title">Order Traking Number - {{$order->tracking_number}} </h5>
                <div class="">
                   <button type="button" class="btn-close mt-1" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
             </div>
             <form action="{{route('orders.refund')}}" method="post" onsubmit="orderRefund()">
             {{csrf_field()}}
             <div class="modal-body">
           
                
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password" required>
                      <input type="text" value="{{$order->id}}" name="order_id" hidden>
                    </div>
                
              

             </div>
             <div class="modal-footer">
                <button type="submit" class="btn btn-primary px-4 py-2 text-white " id="btnProccedRefund"> Procced refund</button>
                <button type="button" class="btn btn-secondary px-4 py-2 " data-bs-dismiss="modal" aria-label="Close">Close</button>
             </div>
          
          </div>
        </form>
       </div>
    </div>

   

<script>

function orderRefund() {  
   $("#btnProccedRefund").attr("disabled", true);
}
</script>

