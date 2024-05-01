<!-- Button trigger modal -->
<button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="{{'#edit-country'.$country_detail->id}}">
    <i class="fa fa-edit"></i> Edit
    </button>
    <!-- Modal -->
    <div class="modal fade" id="{{'edit-country'.$country_detail->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog"  role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="productModalLabel">{{$country_detail->country_name}} - {{$country_detail->country_code}}</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               {{-- <form action="{{route('coupon.updateCoupon')}}" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <div class="modal-body">
                     <div class="row">
                        <div class="mb-3">


                           <label for="{{$coupon_detail->id}}">Coupon Name</label>
                           <input type="text" class="form-control" id="{{'coupon_name'.$coupon_detail->id}}"
                               name="coupon_name" value="{{$coupon_detail->coupon_name}}" onChange="checkcouponName('{{$coupon_detail->id}}')" placeholder="Coupon Name"
                               required/>
                               <p class="text-danger" id="{{'name-invalid'.$coupon_detail->id}}"></p>

                               <input type="text" name="coupon_id" value="{{$coupon_detail->id}}" hidden>

                        </div>
                        <div class="col-12">

                           <div class="mb-3">
                              <label for="coupon_type" class="form-label">Coupon Type</label>
                              <select class="form-control" id="coupon_type" name="coupon_type">

                                 <option value="0" {{$coupon_detail->coupon_type == 0 ? 'selected':''}}>Fixed</option>
                                 <option value="1" {{$coupon_detail->coupon_type == 1 ? 'selected':''}}>Percentage</option>
                              </select>
                           </div>
                           <div class="mb-3">
                              <label for="coupon_value" class="form-label">Coupon Value</label>
                              <input type="text" class="form-control" id="coupon_value" name="coupon_value" value="{{$coupon_detail->coupon_value}}">
                           </div>
                           <div class="mb-3">
                              <label for="status" class="form-label">Status</label>
                              <select name="status" id="status" class="form-control">
                                  <option value="0" {{$coupon_detail->status == 0 ? 'selected' : ''}}>Deactive</option>
                                  <option value="1" {{$coupon_detail->status == 1 ? 'selected' : ''}}>Active</option>
                               </select>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer">

                            <button type="submit" class="btn btn-primary">Update Coupon</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
               </form> --}}


               <form action="{{ route('country.updateCountry') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">

                            <div class="form-group">
                                <label for="country_name">Country Name</label>
                                <input type="text" class="form-control" name="country_name" value="{{$country_detail->country_name}}"
                                  required id="{{'country_name'.$country_detail->id}}"
                                    data-error="Please enter Country Name" onChange="checkCountryName('{{$country_detail->id}}')" />
                                    <p class="text-danger" id="{{'name-invalid'.$country_detail->id}}"></p>

                            </div>

{{--         <input type="text" class="form-control" id="{{'coupon_name'.$coupon_detail->id}}"
                           name="coupon_name" value="{{$coupon_detail->coupon_name}}" onChange="checkcouponName('{{$coupon_detail->id}}')" placeholder="Coupon Name"
                           required/>
                           <p class="text-danger" id="{{'name-invalid'.$coupon_detail->id}}"></p> --}}


                            <div class="form-group">
                                <label for="country_code">Country code</label>
                                <input type="text" class="form-control" value="{{$country_detail->country_code}}" name="country_code" id="country_code" required
                                    data-error="Please enter Country code" />
                                    <input type="text" name="country_id" value="{{$country_detail->id}}" hidden>


                            </div>
                            <div class="form-group">
                                <label for="dial_code">Dial Code</label>

                                <input type="text" class="form-control" name="dial_code" value="{{$country_detail->dial_code}}" id="dial_code" required
                                    data-error="Please enter Dial Code" />
                            </div>

                            <div class="form-group">
                                <select name="status" id="status" class="form-select"  aria-label="Default select example">
                                    {{-- <option value="0">Deactive</option>
                                    <option value="1">Active</option> --}}
                                    <option value="0" {{$country_detail->status == 0 ? 'selected':''}}>Deactive</option>
                                    <option value="1" {{$country_detail->status == 1 ? 'selected':''}}>Active</option>
                                </select>
                            </div>



                        </div>

                    </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Added</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>

            </div>
         </div>
    </div>
