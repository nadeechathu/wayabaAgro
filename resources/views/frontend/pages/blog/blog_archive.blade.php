@extends('frontend.app')

@section('content')
<div class="container-fluid padding-10em">
<div class="container  py-5">

    <div class="page-title ">
        <h1 class="fw-bold green-text font-Nerko">Blog</h1>
    </div>


    <div class="row">
        @foreach ($blogs as $blog)
        <div class="col-lg-4 pt-3">
            <div class="card p-lg-3 p-md-4 blog-cardbg">
                {{-- <img src="{{asset('/images/frontend/Blog/Blog-UI_03.png')}}" alt=""> --}}

                <img class="img-fluid "  src="{{$blog['image'] != null ? asset($blog['image']['src']):asset('images/placeholder.jpg')}}"  alt="Wayamba Agro Exports Co. (Pvt) Ltd" />

                <div class="card-body">
                    <h5 class="card-title fw-bold font-Asap">
                        <h4 class="fw-bold text-dark mt-2">{{$blog['title']}}</h5>
                    <p class="card-text py-1 border-bottom font-Asap">{!! nat($blog['body'], 0, 150) !!}</p>
                    <div class="row py-1">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                                    <i class="fas fa-calendar-alt green-bg-1"></i>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-10 p-0">
                                    <p class="fw-bold">
                                        {{$blog->created_at->format("m/d/Y")}}
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                                    <i class="fas fa-user green-bg-1"></i>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-10 p-0">
                                    <p class="fw-bold">
                                        {{$blog['user']['first_name']}} {{$blog['user']['last_name']}}
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <a  href="{{route('web.blogsingle',['slug'=>$blog->slug])}}"  class="btn border border-2 rounded-pill border-danger font-Asap w-50 fw-bold">Read
                            More</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
       
    </div>
   </div>
</div>
@endsection