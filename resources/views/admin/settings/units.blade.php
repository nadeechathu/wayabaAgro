@extends('admin.layouts.app')
@section('content')
<div>
   <!-- Breadcrumbs-->
   <div class="bg-white border-bottom py-3 mb-5">
      <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
         <nav class="mb-0" aria-label="breadcrumb">
            <h3 class="m-0">Units Settings</h3>
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
                @include('admin.settings.components.add_new_units')

             </div>

          </div>
       </div>
       <div class="card-body">
        <div class="row overflow-auto">
           <div class="col-md-12">
              <table class="table table-bordered">
                 <thead>
                    <tr>
                       {{-- <th>ID</th> --}}
                       <th>Type</th>
                       <th>Weight</th>
                       <th>Symbol</th>
                       <th>Actions</th>
                    </tr>
                 </thead>
                 <tbody>
                    @foreach($units_details as $units_detail)
                    <tr>

                       <td>
                        @if($units_detail->type == 0)
                       Weight

                        @endif
                    </td>
                       <td>{{$units_detail->symbol}}</td>
                       <td>
                        {{$units_detail->description}}

                       </td>
                       <td>
                        @include('admin.settings.components.edit_unit')
                        @include('admin.settings.components.remove_unit')
                       </td>
                    </tr>
                    @endforeach
                 </tbody>
              </table>

              {{$units_details->links()}}
           </div>
        </div>
     </div>
       <!-- /.card-body -->
       {{-- <div class="card-footer">
          <div class="d-felx justify-content-center">
          </div>
       </div> --}}
       <!-- /.card-footer-->
    </div>
    <!-- /.card -->
 </section>



</div>
@endsection
