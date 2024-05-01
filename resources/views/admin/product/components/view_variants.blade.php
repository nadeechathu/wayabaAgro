<button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal"
    data-bs-target="{{'#view-variants-'.$product->id}}">
    <i class="fas fa-eye"></i> Variants
</button>

<!-- Modal -->
<div class="modal fade" id="{{'view-variants-'.$product->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width:1000px;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Product Variants - {{$product->product_name}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-bs-label="Close"></button>
            </div>
           
                <div class="modal-body">

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