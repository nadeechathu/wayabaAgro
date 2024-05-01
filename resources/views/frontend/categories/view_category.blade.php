@extends('frontend.app')

@section('content')

<div class="container-fluid breadcrumb-bgColor">
    <div class="container">
       <div class="row">
          <!-- Breadcrumbs-->
          <div class="col-12  py-3">
             <div class="d-flex justify-content-start align-items-center ">
                <ol class="breadcrumb m-0">
                   <li class="breadcrumb-item"><a class="breadcrumb-home" href="{{ url('/') }}">Home</a></li>
                   <li class="breadcrumb-item active breadcrumb-active" aria-current="page">Shop Categories
                </li>
                </ol>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- / Breadcrumbs-->


<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <h2 class="haeding-h2 fw-bold">Shop Categories</h2>
            </div>
            <div class="col-md-6">

            </div>
        </div><hr/>
        <div class="row">

            @foreach ($categories as $category)
                <div class="col-sm-4 cat-box">
                    <a href="{{route('web.category',$category->slug)}}">
                    <img class="img" src="{{ asset($category->child_category_image) }}" alt="{{$category->category_name}}">
                    <h4 class="cat-subtitle">{{$category->child_category_name}}</h4>
                    <small class="ps-3 fw-bolder">{{$category->child_category_description}}</small>
                    <hr class="hr">

                    </a>
                </div>
            @endforeach


        </div>
      </div>
  </div>




@endsection
