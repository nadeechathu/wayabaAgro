@extends('admin.layouts.app')

@section('content')
<div>
        <!-- Breadcrumbs-->
        <div class="bg-white border-bottom py-3 mb-5">
          <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
            <h3 class="m-0">New Category</h3>

          </nav>
          <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
          <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="./index.html">Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page">New Category</li>
              </ol>
          </div>
          </div>
        </div>        <!-- / Breadcrumbs-->


        <section class="container-fluid">

        <div class="card">
              <div class="card-header">
                @include('admin.common.alerts')
               
               </div>
              <form action="{{route('categories.create')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">
                   <div class="row">
                      <div class="col-md-6">
                         <div class="mb-3">
                            <label for="cat_type">Category Level</label>
                            <select class="form-control" name="category_level" id="category_level0" onChange="getMainCategories(0)">
                               <option value="1">Level 1</option>
                            </select>
                         </div>
                         <div class="mb-3" id="category_for_sub_category0" style="display:none;">
                            <label for="categories0">Select Category</label>
                            <select class="form-control" name="parent_id" id="categories0">
                              
                            </select>
                         </div>
                         <div class="mb-3">
                            <label for="category_name">Category Name</label>
                            <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Category Name" required/>
                         </div>
                         <div class="mb-3">
                            <label for="category_description">Category Description</label>
                            <input type="text" class="form-control" name="category_description" id="category_description" placeholder="Category Description" required/>
                         </div>
                         <div class="mb-3">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug" required/>
                         </div>
                         <div class="mb-3">
                            <label for="image">Category Image</label>
                            <input type="file" id="image"  name="image" class="form-control" onchange="validateImage('',event)">
                            <p style="font-weight:bold;font-size:0.75rem;"><b>Supported image types - jpeg,png,jpg,gif</b></p>
                            <div id="img-validation-result" class="text-danger"></div>
                         </div>
                         <div class="mb-3">
                            <label for="type">Type</label>
                            <select class="form-control" name="type" id="type">
                               <option value="0">Post</option>
                               <option value="1">Product</option>
                            </select>
                         </div>
                      </div>
                      <div class="col-md-6">
                         <div class="mb-3">
                            <label for="page_title">Page Title</label>
                            <input type="text" class="form-control" name="page_title" id="page_title" placeholder="Page Title"/>
                         </div>
                         <div class="mb-3">
                            <label for="meta_tag_description">Meta Tag Description</label>
                            <input type="text" class="form-control" name="meta_tag_description" id="meta_tag_description" placeholder="Meta Tag Description"/>
                         </div>
                         <div class="mb-3">
                            <label for="meta_keywords">Meta Keywords</label>
                            <input type="text" class="form-control" name="meta_keywords" id="meta_keywords" placeholder="Meta Keywords" />
                         </div>
                         <div class="mb-3">
                            <label for="canonical_url">Canonical URL</label>
                            <input type="text" class="form-control" name="canonical_url" id="canonical_url" placeholder="Canonical URL" />
                         </div>
                      </div>
                   </div>
                </div>
                <div class="card-footer">
                   <button type="submit" class="btn btn-primary" >Create Category</button>
                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
             </form>
             
              
            </div>
            <!-- /.card -->
        </section>
  </div>

@endsection


