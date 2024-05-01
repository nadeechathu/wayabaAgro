<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="{{'#view-customer-modal'.$customer->id}}">
 <i class="fa fa-eye"></i> View
</button>

<!-- Modal -->
<div class="modal fade" id="{{'view-customer-modal'.$customer->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width:1000px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Customer Details - {{$customer->email}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-2">First Name</div>
            <div class="col-md-2">{{$customer->first_name}}</div>
        </div>
        <div class="row">
            <div class="col-md-2">Last Name</div>
            <div class="col-md-2">{{$customer->last_name}}</div>
        </div>
        <div class="row">
            <div class="col-md-2">Email</div>
            <div class="col-md-3">{{$customer->email}}</div>
        </div>
        <div class="row">
            <div class="col-md-2">Phone</div>
            <div class="col-md-2">{{$customer->phone}}</div>
        </div>
<br><br>
        <div class="row">

    <div class="col-md-12">

        <h5>Billing Addresses</h5><hr/>
        <div>

            <table class="table table-bordered">
            <thead>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Company</th>
                <th>Active Status</th>
            </thead>

            <tbody>
                @foreach ($customer->billingAddresses as $billingAddress)
                    <tr>
                        <td>{{$billingAddress->first_name}}</td>
                        <td>{{$billingAddress->last_name}}</td>
                        <td>{{$billingAddress->email}}</td>
                        <td>{{$billingAddress->phone}}</td>
                        <td>{{$billingAddress->company}}</td>
                        <td>
                            @if ($billingAddress->active_status == 1)
                                <span class="badge bg-success">Active</span>
                            @else
                            <span class="badge bg-danger">Inactive</span>
                            @endif
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>

<hr/>

<div class="row">

    <div class="col-md-12">
        <h5>Shipping Addresses</h5><hr/>
        <div class="table-responsive table-cart">

            <table class="table table-bordered table-striped">
            <thead>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Company</th>
                <th>Active Status</th>
            </thead>

            <tbody>
                @foreach ($customer->shippingAddresses as $shippingAddress)
                    <tr>
                        <td>{{$shippingAddress->first_name}}</td>
                        <td>{{$shippingAddress->last_name}}</td>
                        <td>{{$shippingAddress->email}}</td>
                        <td>{{$shippingAddress->phone}}</td>
                        <td>{{$shippingAddress->company}}</td>
                        <td>
                            @if ($shippingAddress->active_status == 1)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-danger">Inactive</span>
                            @endif
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
      </div>
      

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>