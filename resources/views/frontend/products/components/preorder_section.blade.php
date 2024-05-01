 <!-- Button trigger modal -->
 <button type="button"
 class="font-13 text-white btn btn-danger rounded-pill px-4 py-2 border-danger border-2 mx-auto py-0  fw-bolder out-of-stock-btn"
 data-bs-toggle="modal" data-bs-target="{{ '#pre-order-modal' . $product->id }}">
 Pre Order
</button>

<!-- Modal -->
<div class="modal fade" id="{{ 'pre-order-modal' . $product->id }}" tabindex="-1"
 aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title font-22 green-text fw-nomal" id="product_name">Pre Order - <span
                     class="font-22 black-text fw-bolder">{{ $product->product_name }} </span></h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal"
                 aria-label="Close"></button>
         </div>
         <div class="modal-body text-start">

             <form action="{{ route('pre.order.store') }}" method="post" enctype="multipart/form-data" id="{{'preOrderForm'.$product->id}}" class="needs-validation" novalidate>
                 {{csrf_field()}}
                 <input type="text " name="product_id" id="product_id" hidden
                     value="{{ $product->id }}">
                 <div class="mb-3">
                     <label for="Customer Name"
                         class="form-label  font-14 font-Asap fw-bolder black-text">Customer Name</label>
                     <input type="text" class="form-control" id="{{'customer_name'.$product->id}}" name="customer_name"
                         required />
                   
                         <div class="invalid-feedback" id="{{'customer-name-error'.$product->id}}">
                            
                           </div>


                 </div>

                 <div class="mb-3">
                     <label for="Customer phone"
                         class="form-label  font-14 font-Asap fw-bolder black-text">Product Varient</label>
                         
                         
                         <input type="text" class="form-control" id="{{'variant-details'.$product->id}}" readonly value="{{ $selectedVariant->variant_name }}" 
                          />

                         <input type="text" hidden  name="varient_selector" value="{{ $selectedVariant->id }}" 
                         required />

                         {{--<select name="varient_selector" id="variant_id"
                         class="rounded-2 py-1 px-2 border border-success border-1 w-100" readonly>
                         @foreach ($product->variants as $variant)
                             <option name="variant_id" {{$selectedVariant->id == $variant->id ? 'selected':''}} value="{{ $variant->id }}">{{ $variant->variant_name }} </option>
                         @endforeach
                        </select> --}}


                 </div>

                 <div class="mb-3">
                     <label for="Customer phone"
                         class="form-label  font-14 font-Asap fw-bolder black-text">Phone Number</label>
                     <input type="text" maxlength="11" minlength="0" class="form-control js-input-mobile" name="phone_number" id="{{'phone_number'.$product->id}}" required>
                     <div class="invalid-feedback" id="{{'phone-number-error'.$product->id}}">
                            
                     </div>
                 </div>

                 <div class="mb-3">
                     <label for="email"
                         class="form-label  font-14 font-Asap fw-bolder black-text">E mail</label>
                     <input type="text" class="form-control" id="{{'email'.$product->id}}" name="email" required>
                     <div class="invalid-feedback" id="{{'email-error'.$product->id}}">
                            
                     </div>
                 </div>

                 <div class="mb-3">
                     <label for="quantity"
                         class="form-label  font-14 font-Asap fw-bolder black-text">Quantity</label>
                     <input type="number" min="1"  class="form-control" id="{{'quantity'.$product->id}}" name="quantity" required>
                     <div class="invalid-feedback" id="{{'quantity-error'.$product->id}}">
                            
                     </div>
                 </div>
                 <div class="mb-3">
                     <label for="remark"
                         class="form-label  font-14 font-Asap fw-bolder black-text">Remark</label>
                         <textarea class="form-control" id="remark" name="remark" rows="3" ></textarea>
                   
                 </div>


                 <div class="modal-footer">

                     <button type="button" id="preorder-submit-btn" onClick="validatePreorderForm('{{$product->id}}')"
                         class="btn font-15 text-white fw-normal  green-bg py-2 border border-success border-2 border-success border-2 w-50  py-2">Submit</button>
                 </div>
             </form>


         </div>


     </div>
 </div>
</div>


            <script>
            function validatePreorderForm(productId){
                // var customer_name = document.getElementById("customer_name");
                // alert(productId);
                document.getElementById('preorder-submit-btn').setAttribute('disabled','disabled');
                let form = document.getElementById('preOrderForm'+productId);

                let customerName = document.getElementById("customer_name" + productId);
                let customerNameError = document.getElementById('customer-name-error'+productId);

                let phoneNumber = document.getElementById("phone_number" + productId);
                let phoneNumberError = document.getElementById('phone-number-error'+productId);

                let emailText = document.getElementById("email" + productId);
                let emailError = document.getElementById('email-error'+productId);
                
                let quantity = document.getElementById("quantity" + productId);
                let quantityError = document.getElementById('quantity-error'+productId);
                
                if(customerName.value === '')
                {
                    customerName.classList.add('is-invalid');
                    customerNameError.innerHTML = "Customer name cannot be empty";        
                
                }
                else if(phoneNumber .value === ''){
                    phoneNumber .classList.add('is-invalid');
                    phoneNumberError.innerHTML = "Phone Number cannot be empty";
                }
                else if(emailText.value === ''){
                    emailText.classList.add('is-invalid');
                    emailError.innerHTML = "Email cannot be empty";
                }
            
                else if(quantity.value === ''){
                    quantity.classList.add('is-invalid');
                    quantityError.innerHTML = "Quantity cannot be empty";
                }else{

                    form.submit();
                }

            }


        

        </script>
