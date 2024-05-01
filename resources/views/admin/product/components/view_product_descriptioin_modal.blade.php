<button type="button" class="btn btn-success btn-sm text-white" data-bs-toggle="modal"
    data-bs-target="{{'#view-product-'.$product->id}}">
    <i class="fas fa-eye"></i> Details
</button>

<!-- Modal -->
<div class="modal fade" id="{{'view-product-'.$product->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width:1000px;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Details - {{$product->product_name}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-bs-label="Close"></button>
            </div>
                {{csrf_field()}}
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">
                            Visible Countries - 

                            @foreach($product->countries as $country)
                            <span class="badge bg-danger">{{$country->country_name}}</span>
                            @endforeach
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <h5>Product Description</h5><br>
                            <div class="form-group">
                                <label
                                    for="{{'edit-product-description'.$product->id}}">{!!$product->product_description!!}</label>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <h4>Variants</h4><br>
                    <div class="row">
                        <div class="col-md-12">
                           <table class="table table-bordered">
                               <thead>
                                   <tr>
                                       <th>Variant Name</th>
                                       <th>Description</th>
                                       <th>Unit Price ({{$commonContent['currencySymbol']['description']}})</th>
                                       <th>Packing Cost ({{$commonContent['currencySymbol']['description']}})</th>
                                       <th>Selling Price ({{$commonContent['currencySymbol']['description']}})</th>
                                       <th>Weight ({{$product->weight_unit}})</th>
                                       <th>Available</th>
                                       <th>Status</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   @foreach ($product->variants as $variant)
                                       <tr>
                                           <td>{{$variant->variant_name}}</td>
                                           <td>{{$variant->description}}</td>
                                           <td>{{$variant->unit_price}}</td>
                                           <td>{{$variant->packing_cost}}</td>
                                           <td>{{$variant->selling_price}}</td>
                                           <td>{{$variant->weight}} </td>
                                           <td>{{$variant->inventory->master_quantity}}</td>
                                           <td>
                                               @if ($variant->status == 1)
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>

        </div>
    </div>
</div>