<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="{{'#history-modal'.$variant->id}}">
  <i class="fa fa-eye"></i> View
</button>

<!-- Modal -->
<div class="modal fade" id="{{'history-modal'.$variant->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width:1000px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{$product->product_name}} {{$variant->variant_name}} - Inventory History</h5> &nbsp;

        <a href="{{route('inventory.product.history.download',$product->id.','.$variant->id)}}"><button class="btn btn-danger btn-sm text-white"><i class="fas fa-download"></i> Download</button></a>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Recorded Date</th>
                                    <th>Order Tracking Number</th>
                                    <th>Hamper Name</th> 
                                    <th>Operation</th>
                                    <th>Quantity</th>
                                    <th>Running Quantity</th>
                                    <th>Actual Reserved Quantity</th>                                    
                                    <th>Processed By</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (sizeof($variant->inventoryHistories) > 0)
                                    
                                @foreach ($variant->inventoryHistories as $inventoryHistory )
                                <tr>                                    
                                    <td>{{$inventoryHistory->created_at}}</td>
                                    <td>
                                        @if ($inventoryHistory->order != null)
                                            {{$inventoryHistory->order->tracking_number}}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>
                                        @if ($inventoryHistory->hamper != null)
                                            {{$inventoryHistory->hamper->hamper_name}}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>{{$inventoryHistory->operation}}</td>
                                    <td>{{$inventoryHistory->quantity}}</td>
                                    <td>{{$inventoryHistory->running_quantity}}</td>
                                    <td>{{$inventoryHistory->actual_reserved_quantity}}</td>
                                    <td>
                                        @if ($inventoryHistory->processed_by != null)
                                        {{$inventoryHistory->user->first_name}}
                                        @else
                                            -
                                        @endif
                                    </td>
                                                                       
                                </tr>
                                @endforeach
                                @else

                                
                                <tr>
                                    <td class="text-center" colspan="8">No records found</td>
                                </tr>
                                    
                                    
                                @endif
                                
                            </tbody>
                        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>