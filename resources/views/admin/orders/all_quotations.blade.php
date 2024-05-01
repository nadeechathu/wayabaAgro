@extends('admin.layouts.app')

@section('content')
<div>
   <!-- Breadcrumbs-->
   <div class="bg-white border-bottom py-3 mb-5">
      <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
         <nav class="mb-0" aria-label="breadcrumb">
            <h3 class="m-0">Quotations</h3>
         </nav>
         <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
            <ol class="breadcrumb m-0">
               <li class="breadcrumb-item"><a href="#">Admin</a></li>
               <li class="breadcrumb-item active" aria-current="page">Quotations</li>
            </ol>
         </div>
      </div>
   </div>
   <!-- / Breadcrumbs-->
   <section class="container-fluid">
      <div class="card">
         <div class="card-header">
            @include('admin.common.alerts')
            <form action="{{route('orders.quotations.all')}}" method="get">
            <div class="row">
               <div class="col-md-6">
                  
               </div>
              
               <div class="col-md-6">
                        <div class="input-group">
                            <input type="search" class="form-control" name="searchKey" placeholder="Reference Number / Customer / Company / Address / Email" value="{{$searchKey}}">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    
               </div>             
            </div>
            </form><br/>
            <div class="row">
                <div class="table-responsive-sm">
                <table class="table table-bordered">
                    <thead class="table-light">
                      <tr>
                        
                          <th>Reference Number</th>
                           <th>Customer Name</th>
                           <th>Company Name</th>
                           <th>Address</th>
                           <th>Email Address</th>
                           <th>Total ({{$commonContent['currencySymbol']['description']}})</th>                           
                           <th>Total (kg)</th>
                           <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ( $quotations as $quotation)

                     <tr>
                        
                        <td>{{$quotation->reference_number}}</td>
                        <td>{{$quotation->customer_name}}</td>
                        <td>{{$quotation->company_name}}</td>
                        <td>{{$quotation->address}}</td>
                        <td>{{$quotation->email_address}}</td>
                        <td>{{$quotation->quotation_total}}</td>
                        <td>{{$quotation->weight}}</td>

                        <td>
                        <a href="{{route('orders.quotations.download',$quotation->id)}}"><button class="btn btn-primary btn-sm text-white"><i class="fa fa-download"></i> Download</button> </a>
                        </td>

                        

                     </tr>
                     @endforeach

                    </tbody>
                  </table>
                  <div class="d-felx justify-content-center">

                  {{$quotations->links()}}

                  </div>
            </div>
        </div>
         </div>
      </div>
   </section>
</div>
@endsection
