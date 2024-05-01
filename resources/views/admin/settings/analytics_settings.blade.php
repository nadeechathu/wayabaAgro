@extends('admin.layouts.app')


@section('content')
    

<div> 
        <!-- Breadcrumbs-->
        <div class="bg-white border-bottom py-3 mb-5">
          <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
            <h3 class="m-0">Analytics Settings</h3>
             
          </nav>
          <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
          <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="./index.html">Admin</a></li>
                <li class="breadcrumb-item"><a href="./index.html">Settings</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Analytics Settings</li>
              </ol>
          </div>
          </div>
        </div>        <!-- / Breadcrumbs-->

        
        <section class="container-fluid">
          
        <div class="card">
              <div class="row">
                <div class="mb-12">
                @include('admin.common.alerts')    
                </div>
                          
               </div>
               <form action="{{route('settings.analyticsUpdate')}}" method="post" enctype="multipart/form-data">
                   {{csrf_field()}}
              <div class="card-body"> 
                <h4>Update Google Analytics</h4><br/>
             
                <div class="form-group">
                    <label for="analytics">Please enter the analytics tag below</label>
                    <textarea
                           name="analytics"
                           class="form-control"
                           id="analytics"/>
                           {{$analytics->description}}
                    </textarea>
                    
                </div>
               
               


                

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update Analytics Changes</button>
              </div>
                </form>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
<br/><br/>
             <!-- robots text update section -->
            <div class="card">
             
               <form action="{{route('settings.robotsTextUpdate')}}" method="post" enctype="multipart/form-data">
                   {{csrf_field()}}
              <div class="card-body"> 
              <h4>Upload Robots Text</h4><br/>
             
                <div class="form-group">
                    <label for="analytics">Select robots text file (<span class="text-danger">Existing file fill be replaced with the new file</span>)</label>
                    <input class="form-control" type="file" name="robots_text" id="robots_text">
                    
                </div>

                <a href="{{route('settings.download','robots.txt')}}"><button type="button" class="btn btn-success btn-sm text-white">Download</button></a>
               

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Upload File</button>
              </div>
                </form>
              <!-- /.card-footer-->
            </div>


            <!-- sitemaps update section -->
            <div class="card">
             

             <form action="{{route('settings.siteMapUpdate')}}" method="post" enctype="multipart/form-data">
                 {{csrf_field()}}
            <div class="card-body"> 
  `         <h4>Upload Site Map</h4><br/>
           
              <div class="form-group">
                  <label for="analytics">Select sitemaps file (<span class="text-danger">Existing file fill be replaced with the new file</span>)</label>
                  <input class="form-control" type="file" name="sitemap" id="sitemap">
                  
              </div>

              <a href="{{route('settings.download','sitemap.xml')}}"><button type="button" class="btn btn-success btn-sm text-white">Download</button></a>


            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Upload File</button>
            </div>
              </form>
            <!-- /.card-footer-->
          </div>
        </section>
  </div>
  
 
@endsection
