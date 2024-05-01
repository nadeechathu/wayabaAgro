@if ($order->order_status == 1)

<span class="badge bg-info">Pending</span>
    
@elseif($order->order_status == 2)

<span class="badge bg-warning">Confirmed</span>

@elseif ($order->order_status == 3)
    
<span class="badge bg-secondary">In Process</span>
 
@elseif ($order->order_status == 4)
    
<span class="badge bg-secondary">Dispatched</span>     
      
@elseif ($order->order_status == 5)

<span class="badge bg-success">Fulfilled</span>
  
@elseif ($order->order_status == 6)

<span class="badge bg-danger">Cancellation Requested</span>

@elseif ($order->order_status == 7)

<span class="badge bg-danger">Cancelled</span>

@elseif ($order->order_status == 8)

<span class="badge bg-danger">Refund Requested</span>

@elseif ($order->order_status == 9)

<span class="badge bg-danger">Refunded</span>

@endif