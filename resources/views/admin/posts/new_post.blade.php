@extends('admin.layouts.app')

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

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
            <h3 class="m-0">New Post</h3>

          </nav>
          <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
          <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="./index.html">Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page">New Post</li>
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
               <form action="{{route('posts.create')}}" method="post" enctype="multipart/form-data">
                   {{csrf_field()}}
              <div class="card-body">

                <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text"
                           name="title"
                           class="form-control @error('title') is-invalid @enderror"
                           value="{{ old('title')}}"
                           placeholder="Title"
                           id="title" required/>


                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

 <div class="form-group">
                    <label for="image">Post Image</label>
                    <input type="file" id="image" type="file" name="image" class="form-control" onchange="validateImage('',event)">
                    <p style="font-weight:bold;font-size:0.75rem;"><b>Supported image types - jpeg,png,jpg,gif</b></p>
                    <img src="" id="img-result-output" class="w-100" alt="alt" style="display:none" >
                    <div id="img-validation-result" class="text-danger"></div>
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
                    <label for="body">Post Content</label>


                           <textarea class="ckeditor form-control" name="body" value="{{ old('body')}}"></textarea>
                    @error('body')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
                {{-- <div class="form-group">
                    <label for="tags">Post Tags</label>
                    <select class="form-select" id="validationTagsClear" name="tags[]" multiple data-allow-clear="true">
                    <option selected disabled hidden value="">Choose a tag...</option>
                      @foreach ($post_tags as $post_tag)
                      <option value="{{$post_tag->id}}">{{$post_tag->tag_name}}</option>
                      @endforeach

                    </select>

                </div> --}}
                {{-- <div class="form-group">
                    <label for="category">Post Category</label>
                    <select class="form-control js-example-basic-single" name="category">
                      @foreach ($post_categories as $category)
                      <option value="{{$category->id}}">{{$category->category_name}}</option>
                      @endforeach

                    </select>
                </div> --}}
                <div class="form-group">
                    <label for="status">Published Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="0">Unpublished</option>
                        <option value="1">Published</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="type">Post Type</label>
                    <select class="form-control" id="type" name="type">
                        <option value="0">Blog Content</option>
                        {{-- <option value="1">News Content</option> --}}
                    </select>
                </div>
                <div class="form-group">
                    <label for="featured">Featured Post</label>
                    <select class="form-select" id="featured" name="featured">
                      <option value="0">No</option>
                      <option value="1">Yes</option>
                    </select>

                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create Post</button>
              </div>
                </form>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </section>
  </div>


@endsection
<script type="module">
      import Tags from "https://cdn.jsdelivr.net/npm/bootstrap5-tags@1.3.1/tags.min.js";
      Tags.init();
    </script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
        // $('.js-example-basic-single').select2();
    });
</script>


