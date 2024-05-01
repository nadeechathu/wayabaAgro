<!-- Button trigger modal -->
<button type="button" class="btn btn-warning btn-sm text-white" data-bs-toggle="modal" data-bs-target="{{'#related-products'.$product->id}}">
<i class="fas fa-link"></i> Related
</button>

<!-- Modal -->
<div class="modal fade" id="{{'related-products'.$product->id}}" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width:900px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Related Products For - {{$product->product_name}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('product.related.add')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
      <div class="modal-body">
        <div class="row">
            <div class="col-md-3">Select Products To Link </div>
            <div class="col-md-6">
                            <select class="form-control js-example-basic-single" id="{{'linked_products'.$product->id}}" onChange="getHamperForId({{$product->id}})">
                                @foreach($allProducts as $product_rec)

                                    @if ($product->id != $product_rec->id)
                                    <option value="{{$product_rec->id}}">{{$product_rec->product_name}}</option>

                                    @endif
                                @endforeach
                            </select>

                            <input type="text" hidden name="product_id" value="{{$product->id}}"/>
            </div>
        </div>

        <hr>
        <h5>Linked Products</h5><br/>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Product Image</th>
                                    <th>Product Name</th>                                    
                                    <th>Price</th>
                                    <th>Weight</th>                                    
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="{{'relatedProductsTbody'.$product_rec->id}}">

                                @if (sizeof($product->linkedProducts) > 0)
                                    @foreach ($product->linkedProducts as $linkedProduct)
                                    <tr id="{{'related-item'.$linkedProduct->id}}">
                                        <td>
                                            @if (sizeof($product->images) > 0)
                                            <img src="{{asset($linkedProduct->images[0]->src)}}" style="width:80px;" alt="{{$linkedProduct->product_name}}"/>
                                        @endif
                                        </td>
                                        <td>
                                            {{$linkedProduct->product_name}}
                                            <input hidden name="related_product_ids[]" value="{{$linkedProduct->id}}"/>                                 
                                            
                                        </td>                                    
                                      
                                        <td>{{$linkedProduct->unit_price}}</td>
                                        <td>{{$linkedProduct->weight}}</td>
                                        
                                        <td>                                       
                                        <button type="button" onClick="unlinkItem({{$linkedProduct->id}})" class="btn btn-success btn-sm text-white"><i class="fas fa-link"></i>&nbsp;Unlink</button>
                                        </td>

                                    </tr>
                                    @endforeach
                               
                                    
                                @endif
                                
                            </tbody>
                        </table>
            
       
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>

      </form>
    </div>
  </div>
</div>

<script>
    function getHamperForId(productId){

        let id = document.getElementById('linked_products'+productId).value;

        $.ajax({
            type: 'GET',
            url: '/admin/product/get/'+id,
            success: function(res) {
                
                let itemCheck = document.getElementById('related-item'+id);
                let tableTbody = $('#relatedProductsTbody'+productId);
                if(tableTbody.find('#related-item'+id)[0] === undefined){

                    let html = '';

                    if(res.status){

                        html = html +
                        '<tr id="related-item'+res.payload.id+'">'+
                        '<td><img style="width:70px;" src="'+res.image_url+'"/><input hidden name="related_product_ids[]" value="'+res.payload.id+'"/></td>'+
                        '<td>'+res.payload.product_name+'</td>'+
                        '<td>'+res.payload.unit_price+'</td>'+
                        '<td>'+res.payload.weight+'</td>'+
                        '<td><button type="button" onClick="unlinkItem('+res.payload.id+')" class="btn btn-success btn-sm text-white"><i class="fas fa-link"></i>&nbsp;Unlink</button</td>'+
                        '</tr>';

                        tableTbody.append(html);
                    }

                }
                
                

                
            }
    })
    }

    function unlinkItem(id){

        let item = document.getElementById('related-item'+id);

        if(item !== null){
            item.remove();
        }
    }
</script>