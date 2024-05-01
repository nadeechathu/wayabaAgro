<!-- Button trigger modal -->
<button type="button" class="btn btn-primary my-3 w-100 submit-btn    rounded-3 font-20 font-Asap border border-danger py-1 border-1 fw-bolder  text-black bg-white hover-btn btn-mobile" data-bs-toggle="modal" data-bs-target="#download-quotation">
Download Quotation
</button>

<!-- Modal -->
<div class="modal fade" id="download-quotation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width:800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-Asap font-22 pb-1 fw-bolder black-text" id="exampleModalLabel">Quotation Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('web.cart.quotation')}}" method="post">
      {{csrf_field()}}
      <div class="modal-body">
      
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="customer_name" class="form-label font-15 font-Asap fw-normal black-text pb-1">Your Name * </label>
                    <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Your Name" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="company_name" class="form-label font-15 font-Asap fw-normal black-text pb-1">Your Company Name </label>
                    <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Your Company Name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="customer_address" class="form-label font-15 font-Asap fw-normal black-text pb-1">Your Address * </label>
                    <input type="text" class="form-control" id="customer_address" name="customer_address" placeholder="Your Address" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="email_address" class="form-label font-15 font-Asap fw-normal black-text pb-1">Your Email Address * </label>
                    <input type="email" class="form-control" id="email_address" name="email_address" placeholder="Your Email Address" required>
                </div>
            </div>
        </div>
       
                    
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn submit-btn 
        rounded-3 font-20 font-Asap border border-danger py-1 border-1   text-black bg-white hover-btn btn-mobile">Download Quotation</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
      </form>
    </div>
  </div>
</div>