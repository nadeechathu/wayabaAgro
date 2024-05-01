@extends('admin.layouts.app')
@section('content')
<div>
   <!-- Breadcrumbs-->
   <div class="bg-white border-bottom py-3 mb-5">
      <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
         <nav class="mb-0" aria-label="breadcrumb">
            <h3 class="m-0">Customer Inquiries</h3>
         </nav>
         <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
            <ol class="breadcrumb m-0">
               <li class="breadcrumb-item"><a href="#">Admin</a></li>
               <li class="breadcrumb-item active" aria-current="page">All Inquiries</li>
            </ol>
         </div>
      </div>
   </div>
   <!-- / Breadcrumbs-->
   <section class="container-fluid">
      <div class="card">
         <div class="card-header">
            @include('admin.common.alerts')
            <div class="row">
               <div class="col-md-6"></div>
               <div class="col-md-6">
               <form action="{{route('inquiries.all')}}" method="get">
                        <div class="input-group">
                            <input type="search" class="form-control" name="searchKey" placeholder="Customer Name / Email / Phone" value="{{$searchKey}}">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
               </div>
            </div><br/>
            <div class="row">
                <div class="table-responsive-sm">
                <table class="table table-bordered">
                    <thead class="table-light">
                      <tr>                        
                        <th>Customer name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Actions</th>                        
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ( $inquiries as $inquiry)

                     <tr>
                        
                        <td>{{$inquiry->name}}</td>
                        <td>{{$inquiry->email}}</td>
                        <td>
                           {{$inquiry->phone}}
                        </td>
                       
                        <td>
                           @if ($inquiry->status == 0)
                           <span class="badge bg-danger">New</span>
                           @else
                           <span class="badge bg-success">Replied</span>
                           @endif
                        </td>
                       
                        <td>
                        @include('admin.inquiry.components.view_and_reply')
                        </td>
                        
                     </tr>
                     @endforeach

                    </tbody>
                  </table>
                  <div class="d-felx justify-content-center">

                  {{$inquiries->links()}}

                  </div> 
            </div>
        </div>
         </div>
      </div>
   </section>
</div>
@endsection
