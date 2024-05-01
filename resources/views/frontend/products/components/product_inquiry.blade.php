<!-- Button trigger modal -->
<button type="button"
    class="btn  mt-3 hvr-grow font-15 text-white fw-normal rounded-3 green-bg py-1 border  border-2 border-success "
    data-bs-toggle="modal" data-bs-target="#exampleModal">
    Product Inquiry
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-22 green-text fw-nomal" id="product_name">  Product Inquiry - <span
                    class="font-22 black-text fw-bolder">{{ $product->product_name }} </span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('web.product.inquiry') }}" onSubmit="disableSubmitBtn();" enctype="multipart/form-data" method="post" >
                {{ csrf_field() }}

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="product_name" class="form-label font-15 font-Asap fw-normal black-text">Product
                            Name</label>
                            <input type="text"  hidden name="product_id" id="product_id" value="{{$product->id}}">
                        <input type="text" class="form-control" id="product_name" name="product_name" readonly  value="{{ $variant->variant_name }}"   required>
                    </div>


                    <div class="mb-3">
                        <label for="quantity" class="form-label font-15 font-Asap fw-normal black-text">Variant</label>

                        <select name="variant_selector" id="variant_selector"
                        class="rounded-2 py-1 px-2 border border-success border-1 form-control">
                        @foreach ($product->variants as $variant)
                            <option value="{{ $variant->id }}">{{ $variant->variant_name }} </option>
                        @endforeach
                    </select>
                    </div>


                    <div class="mb-3">
                        <label for="quantity" class="form-label font-15 font-Asap fw-normal black-text">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" min="1"
                            value="1" required>
                    </div>

                    <div class="mb-3">
                        <label for="customer_name" class="form-label font-15 font-Asap fw-normal black-text">Customer
                            Name</label>
                        <input type="text" class="form-control @error('customer_name') is-invalid @enderror"
                        value="{{ old('customer_name')}}" id="customer_name" name="customer_name" required>



                        @error('customer_name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="phone" class="form-label font-15 font-Asap fw-normal black-text">Phone</label>
                        <input type="text" class="js-input-mobile form-control @error('phone') is-invalid @enderror"
                        value="{{ old('phone')}}" id="phone" name="phone" required>

                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="email" class="form-label font-15 font-Asap fw-normal black-text">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email')}}" id="email" name="email" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label font-15 font-Asap fw-normal black-text">Address</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror"
                        value="{{ old('address')}}" id="address" name="address" required>
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="country_id"
                            class="form-label font-15 font-Asap fw-normal black-text">Country</label>
                        {{-- <input type="text" class="form-control" id="address" name="address" > --}}

                        <select class="form-select border bg-light-white rounded-3 py-1 font-16 fw-normal font-Asap"
                            aria-label="Default select example" id="country_id" name="country_id">

                            @foreach ($commonContent['countries'] as $country)
                                <option
                                    {{ Session::get('selectedCountry') == $country->country_code ? 'selected' : '' }}
                                    value='{{ $country->id }}'>{{ $country->country_name }}</option>
                            @endforeach
                        </select>



                    </div>

                    <div class="mb-3">
                        <label for="notes" class="form-label font-15 font-Asap fw-normal black-text">Notes</label>
                        <textarea class="form-control" id="notes" name="notes" rows="5"></textarea>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" id="poduct-inqury-btn"
                        class="btn font-15 text-white fw-normal rounded-3 green-bg py-1 border  border-2 border-success" >Submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </form>
        </div>
    </div>
</div>
<script>
 function disableSubmitBtn(){

    document.getElementById('poduct-inqury-btn').setAttribute('disabled','disabled');
 }

</script>