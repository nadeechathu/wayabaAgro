<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="{{'#edit-shipping-address-modal-'.$shippingAddress->id}}">
 <i class="fa fa-edit"></i> Edit
</button>

<!-- Modal -->
<div class="modal fade" id="{{'edit-shipping-address-modal-'.$shippingAddress->id}}" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width:900px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Shipping Address</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('web.user.editAddress')}}" method="post" enctype="multipart/form-data">

      <div class="modal-body">
        
          {{csrf_field()}}
          <input type="text" hidden name="type" value="{{$shippingAddress->type}}">
          <input type="text" hidden name="address_id" value="{{$shippingAddress->id}}">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="first_name" value="{{$shippingAddress->first_name}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="last_name" value="{{$shippingAddress->last_name}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{$shippingAddress->email}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" name="phone" value="{{$shippingAddress->phone}}" id="{{'shipping-phone-no'.$shippingAddress->id}}" onChange="removeCountryCode('{{'shipping-phone-no'.$shippingAddress->id}}')" oninput="this.value = this.value.replace(/[^0-9.+]/g, '').replace(/(\..*)\./g, '$1');" required>
                    </div>
                    <div class="mb-3">
                        <label for="company" class="form-label">Company</label>
                        <input type="text" class="form-control" name="company" value="{{$shippingAddress->company}}" required>
                    </div>
                   
                   
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="address_line1" class="form-label">Address Line 1</label>
                        <input type="text" class="form-control" name="address_line1" value="{{$shippingAddress->address_line1}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="address_line2" class="form-label">Address Line 2</label>
                        <input type="text" class="form-control" name="address_line2" value="{{$shippingAddress->address_line2}}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="state" class="form-label">State</label>
                        <input type="text" class="form-control" name="state" value="{{$shippingAddress->state}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        {{-- <input type="text" class="form-control" name="city" value="{{$shippingAddress->city}}" required> --}}
                        <select name="city" id="{{'shippingCity'.$shippingAddress->id}}" class="form-control js-example-basic-single" required onChange="getZipCodeForCity('{{'shippingCity'.$shippingAddress->id}}','{{'shippingPostalCode'.$shippingAddress->id}}')">
                            @foreach ($zones as $zone)
                                @if ($zone->zone_name == $shippingAddress->city)
                                    <option selected value="{{$zone->zone_name}}">{{$zone->zone_name}}</option>
                                @else
                                    <option value="{{$zone->zone_name}}">{{$zone->zone_name}}</option> 
                                @endif
                                
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="zip" class="form-label">Postal Code</label>
                        <input type="text" class="form-control" name="zip" id="{{'shippingPostalCode'.$shippingAddress->id}}" value="{{$shippingAddress->zip}}" readonly required>
                        {{-- <select name="zip" class="form-control js-example-basic-single" required>
                            @foreach ($zones as $zone)
                                @if ($zone->zip_code == $shippingAddress->zip)
                                    <option selected value="{{$zone->zip_code}}">{{$zone->zip_code}}</option>
                                @else
                                    <option value="{{$zone->zip_code}}">{{$zone->zip_code}}</option> 
                                @endif
                                
                            @endforeach
                        </select> --}}
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Country</label>
                        <input type="text" class="form-control" name="country" value="{{$shippingAddress->country}}" required>
                        <select class="form-control" name="country" required>
                            @foreach ($countries as $country)
                                <option {{$country->country_name == $shippingAddress->country ? 'selected' : '' }} value="{{$country->country_name}}">{{$country->country_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            
            
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update Billing Address Details</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
    $( document ).ready(function() {
        removeCountryCode("{{'shipping-phone-no'.$shippingAddress->id}}");
    });
</script>