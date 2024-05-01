@extends('admin.layouts.app')


  <style>
    .dropdown-menu {
      border-radius : 0 !important;
    }
  </style>

@section('content')


<div>
        <!-- Breadcrumbs-->
        <div class="bg-white border-bottom py-3 mb-5">
          <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
            <h3 class="m-0">New Page</h3>

          </nav>
          <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
          <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="./index.html">Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page">New Page</li>
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
               <form action="{{route('webpages.create')}}" method="post" enctype="multipart/form-data">
                   {{csrf_field()}}
              <div class="card-body">

                <div class="form-group">
                    <label for="page_heading">Page Heading</label>
                    <input type="text"
                           name="page_heading"
                           class="form-control @error('page_heading') is-invalid @enderror"
                           value="{{ old('page_heading')}}"
                           placeholder="Page Heading"
                           id="page_heading" />


                    @error('page_heading')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="content">Page Content</label>


                           <textarea class="ckeditor form-control" name="content" value="{{ old('content')}}"></textarea>
                    @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text"
                           name="slug"
                           class="form-control @error('slug') is-invalid @enderror"
                           value="{{ old('slug')}}"
                           placeholder="Slug"
                           id="slug" required/>

                    @error('slug')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="visibility">Visibility</label>
                    <select class="form-control" name="visibility">
                        <option value="0">Hidden</option>
                        <option value="1">Visible</option>
                    </select>
                    @error('visibility')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <hr/>
                <h4>Other optional details</h4>
                <div class="form-group">
                    <label for="page_title">Page Title</label>
                    <input type="text"
                           name="page_title"
                           class="form-control @error('page_title') is-invalid @enderror"
                           value="{{ old('page_title')}}"
                           placeholder="Title"
                           id="page_title" />

                </div>
                <div class="form-group">
                    <label for="meta_tag_description">Meta Description</label>
                    <input type="text"
                           name="meta_tag_description"
                           class="form-control @error('meta_tag_description') is-invalid @enderror"
                           value="{{ old('meta_tag_description')}}"
                           placeholder="Meta Description"
                           id="meta_tag_description"/>

                </div>
                <div class="form-group">
                    <label for="meta_keywords">Meta Keywords</label>
                    <input type="text"
                           name="meta_keywords"
                           class="form-control @error('meta_keywords') is-invalid @enderror"
                           value="{{ old('meta_keywords')}}"
                           placeholder="Meta Keywords"
                           id="meta_keywords"/>

                </div>

                <div class="form-group">
                    <label for="canonical_url">Canonical URL</label>
                    <input type="text"
                           name="canonical_url"
                           class="form-control @error('canonical_url') is-invalid @enderror"
                           value="{{ old('canonical_url')}}"
                           placeholder="Canonical URL"
                           id="canonical_url"/>

                </div>
                <div class="form-group">


                         <label for="image">Page Banner</label>
                            <input type="file" id="image" type="file" name="image" class="form-control" onchange="validateImage('',event)">
                            <p style="font-weight:bold;font-size:0.75rem;"><b>Supported image types - jpeg,png,jpg,gif</b></p>
                            <img src="" id="img-result-output" class="w-100" alt="alt" style="display:none" >
                            <div id="img-validation-result" class="text-danger"></div>


                </div>

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create Page</button>
              </div>
                </form>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </section>
  </div>


@endsection

<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
        // $('.js-example-basic-single').select2();
    });
</script>
