@extends('admin.layouts.app')
@section('content')
<div>
   <!-- Breadcrumbs-->
   <div class="bg-white border-bottom py-3 mb-5">
      <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
         <nav class="mb-0" aria-label="breadcrumb">
            <h3 class="m-0">Zones Locations</h3>
         </nav>
         <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
            <ol class="breadcrumb m-0">
               <li class="breadcrumb-item"><a href="./index.html">Admin</a></li>
               <li class="breadcrumb-item active" aria-current="page">Zones Locations</li>
            </ol>
         </div>
      </div>
   </div>
   <!-- / Breadcrumbs-->
   <section class="container-fluid">
      <div class="card">
         <div class="row card-header">
            <div class="col-12">
                @include('frontend.common.alerts')

             </div>
            <div class="col-6">

               @include('admin.zones.components.add_locations')
            </div>
            <div class="col-6">
               <form action="{{route('zones.all_locations')}}" method="get">
                  <div class="input-group">
                     <input type="search" class="form-control" name="searchKey" placeholder="Zones location"
                        value="{{$searchKey}}">
                     <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                        <i class="fa fa-search"></i>
                        </button>
                     </div>
                  </div>
               </form>
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
                        <th>Zone locations Name</th>
                        <th>Zone locations Description</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($location_details as $location_detail)
                     <tr>
                        <td>{{$location_detail->zone->zone_name}}</td>
                        <td>{{$location_detail->location_name}}</td>

                        <td>{{$location_detail->location_description}}</td>
                        <td>
                           @include('admin.zones.components.edit_zone_location')
                           @include('admin.zones.components.remove_zone_location')

                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
               {{$location_details->links()}}
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
   $(document).ready(function() {
   $('.js-example-basic-single').select2();
   });
</script>
