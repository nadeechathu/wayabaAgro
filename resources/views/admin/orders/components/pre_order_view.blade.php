<!-- Button trigger modal -->
<button type="button" class="btn btn-info btn-sm text-white"  data-bs-toggle="modal" data-bs-target="{{'#quick-view-'.$preOrder->id}}">
    <i class="fas fa-eye"> View</i>
    </button>
    <!-- Modal -->
    <div class="modal fade" id="{{'quick-view-'.$preOrder->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" style="max-width:1000px;">
          <div class="modal-content">
             

            <div class="modal-header">
                <h5 class="modal-title">Pre Order -  {{$preOrder->variant != null ? $preOrder->variant->variant_name : '-'}} - Quick View 
    
                                </h5>
                <div class="">
                   <button type="button" class="btn-close mt-1" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
             </div>


             <div class="modal-body " >
                <div class="row pt-2 mb-5">
                    
                    
                    <div class="col-md-2">
                    <img src="{{asset($preOrder->product->images[0]->src)}}"  alt="{{$preOrder->product->images[0]->alt_text}}"/>
                    </div>
                    <div class="col-8">
                        <h4>{{$preOrder->variant != null ? $preOrder->variant->variant_name : '-'}}</h4>
                    </div>
                   </div>



         <div class="row border-bottom pt-2">
          <div class="col-6">
            <div class="row">
                <div class="col-4">
                    <p class="fw-bolder" >Customer Name : </p>
                </div>
                <div class="col-8">
                    <p>{{ $preOrder->customer_name }}</p>
                </div>
            </div>
          </div>
          <div class="col-6">
           <div class="row">
            <div class="col-4">
                <p class="fw-bolder" >Phone Number : </p>
            </div>
            <div class="col-8">
                <p>{{ $preOrder->phone_number }}</p>
            </div>
           </div>
          </div>
         </div>


         <div class="row border-bottom  pt-2">
            <div class="col-6">
              <div class="row">
                  <div class="col-4">
                      <p class="fw-bolder" >Customer Email : </p>
                  </div>
                  <div class="col-8">
                      <p>{{ $preOrder->email }}</p>
                  </div>
              </div>
            </div>
            <div class="col-6">
             <div class="row">
              <div class="col-4">
                  <p class="fw-bolder" >Quantity : </p>
              </div>
              <div class="col-8">
                  <p>{{ $preOrder->quantity }}</p>
              </div>
             </div>
            </div>
           </div>


           <div class="row pt-2">
            <div class="col-2">
                <p class="fw-bolder" >Remark : </p>
            </div>
            <div class="col-10">
                <p>{{ $preOrder->remark }}</p>
            </div>
           </div>

             </div>
             <div class="modal-footer">
            
                <button type="button" class="btn btn-secondary px-4 py-2 " data-bs-dismiss="modal" aria-label="Close">Close</button>
             </div>
          </div>
       </div>
    </div>

 

