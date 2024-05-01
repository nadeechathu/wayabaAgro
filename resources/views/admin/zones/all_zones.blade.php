@extends('admin.layouts.app')
@section('content')
<div>
   <!-- Breadcrumbs-->
   <div class="bg-white border-bottom py-3 mb-5">
      <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
         <nav class="mb-0" aria-label="breadcrumb">
            <h3 class="m-0">Manage Zones</h3>
         </nav>
         <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
            <ol class="breadcrumb m-0">
               <li class="breadcrumb-item"><a href="./index.html">Admin</a></li>
               <li class="breadcrumb-item active" aria-current="page">Units Settings</li>
            </ol>
         </div>
      </div>
   </div>
   <!-- / Breadcrumbs-->
   <section class="container-fluid">
      <div class="card">
         <div class="card-header">
            <div class="row">
               <div class="col-md-12">
                  @include('frontend.common.alerts')
                 
                  @include('admin.brands.components.add_new_brands')
                  
               </div>
            </div>
         </div>
         <div class="card-body">
            <div class="row overflow-auto">
               <div class="col-md-12">
                  <table class="table table-bordered">
                     <thead>
                        <tr>
                           
                           <th>Zone Name</th>
                           <th>Zone Description</th>
                           <th>Zip/Postal Code</th>
                           <th>Shipping Cost per (Kg)</th>
                           <th>Weight margin</th>
                           <th>Minimum Shipping cost</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($zones_details as $zones_detail)
                        <tr>
                           <td>{{$zones_detail->zone_name}}</td>
                           <td>{{$zones_detail->zone_description}}</td>
                           <td>{{$zones_detail->zip_code}}</td>
                           <td>{{$zones_detail->shipping_cost}}</td>
                           <td>{{$zones_detail->weight_margin}}</td>
                           <td>{{$zones_detail->minimum_cost}}</td>
                           <td>
                              @if (Auth::user()->hasPermission('edit_zones'))
                              @include('admin.zones.components.edit_zone')
                              @endif
                              @if (Auth::user()->hasPermission('delete_zones'))
                              @include('admin.zones.components.remove_zone')
                              @endif
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  {{$zones_details->links()}}
               </div>
            </div>
         </div>
         <!-- /.card-body -->
         {{--
         <div class="card-footer">
            <div class="d-felx justify-content-center">
            </div>
         </div>
         --}}
         <!-- /.card-footer-->
      </div>
      <!-- /.card -->
   </section>
</div>
@endsection
