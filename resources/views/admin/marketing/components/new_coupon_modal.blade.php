<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="{{ '#add-coupon-modal' }}">
    <i class="ri-add-circle-line align-bottom"></i> Add New Coupon
</button>

<!-- Modal -->
<div class="modal fade" id="{{ 'add-coupon-modal' }}" tabindex="-1" role="dialog" aria-labelledby="productModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel">New Coupon</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <form action="{{ route('coupon.create') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">

                    <div class="row">
                        <div class="col-12">

                            <div class="mb-3">
                                <label for="coupon_name" class="form-label">Coupon Name</label>
                                <input type="text" class="form-control" id="coupon_name0" name="coupon_name"
                                    onChange="checkcouponName(0)">
                                <p class="text-danger" id="name-invalid0"></p>

                            </div>



                            <div class="mb-3">
                                <label for="coupon_type" class="form-label">Coupon Type</label>
                                <select class="form-select" aria-label="Default select example" id="coupon_type"
                                    name="coupon_type">
                                    <option>Select Coupon Type</option>
                                    <option value="0">Fixed</option>
                                    <option value="1">Percentage</option>
                                </select>

                            </div>


                            <div class="mb-3">
                                <label for="coupon_value" class="form-label">Coupon Value</label>
                                <input type="text" class="form-control" id="coupon_value" name="coupon_value">

                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" id="status" class="form-select"
                                    aria-label="Default select example">
                                    <option value="0">Deactive</option>
                                    <option value="1">Active</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Expiry Date</label>
                                <input name="expiry_date" id="expiry_date" class="form-control" type="datetime-local"/>
                                    
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary">Create Coupon</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
