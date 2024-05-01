<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#new-mail-config">
    <i class="ri-add-circle-line align-bottom"></i> Add New
</button>

<!-- Modal -->
<div class="modal fade" id="new-mail-config" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width:700px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Country</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <form action="{{ route('country.create') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">

                            <div class="form-group">
                                <label for="country_name">Country Name</label>
                                <input type="text" class="form-control" name="country_name" id="country_name0" required
                                    data-error="Please enter Country Name" onChange="checkCountryName(0)" />
                                    <p class="text-danger" id="name-invalid0"></p>
                            </div>
                            <div class="form-group">
                                <label for="country_code">Country code</label>
                                <input type="text" class="form-control" name="country_code" id="country_code"
                                    required data-error="Please enter Country code"  />



                            </div>
                            <div class="form-group">
                                <label for="dial_code">Dial Code</label>

                                <input type="text" class="form-control" name="dial_code" id="dial_code" required
                                    data-error="Please enter Dial Code" />
                            </div>

                            <div class="form-group">
                                <label for="country_status">Country Status</label>
                                <select name="status" id="status" class="form-select"
                                    aria-label="Default select example">
                                    <option value="0">Deactive</option>
                                    <option value="1">Active</option>
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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
