@extends('frontend.app')

@section('content')


<div class="container-fluid padding-10em">
<div class="container">
    <div class="row p-lg-0 p-md-0 p-sm-2 p-2">
        <div class="col-lg-7 col-sm-12 p-lg-0 p-md-0 p-sm-3 p-3">
            <h1 class="dark-green-title fw-bold font-Nerko border-green py-2 mt-2">{{ $blog->title}}</h1>
            {{-- <p class="font-Asap dark-green-title py-2 font-tab-20 font-m-30 fw-bold font-tab-20">Section 1.10.32 of "de Finibus Bonorum et Malorum", written by
                Cicero in 45 BC</p>
            <h5 class="fw-bold blog-font-black font-Asap">Max Heinemeyer, Director of Threat Hunting | Thursday
                September 10, 2023</h5> --}}
            {{-- <img src="{{asset('/images/frontend/Blog/blog-archive/Blog-Sin_06.png')}}" alt="" class=""> --}}

        <div class="mx-auto text-center">
            <img class="mt-3 border w-50"  src="{{$blog['image'] != null ? asset($blog['image']['src']):asset('images/placeholder.jpg')}}"  alt="Wayamba Agro Exports Co. (Pvt) Ltd" />

        </div>
        <h6 class="text-secondary font-Asap py-3">{!! $blog->body !!}</h6>
        <div class="row py-1">
           <div class="col-6 align-self-end">
            
<div class="row">
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


           </div>
        </div>
        </div>
        <div class="col-lg-5  col-sm-12 ps-lg-5 pt-5">
            <div class="row pt-lg-3">
                {{-- <div class="col-lg-6 col-md-6 col-sm-12 col-12 ps-lg-0 ps-md-0 ps-sm-3 p-3">
                    <a href="" class="btn blog-btn-color text-white w-100 rounded-1 font-tab-8"><i
                            class="fa fa-twitter border p-1 rounded-circle me-2" aria-hidden="true"></i>Follow Us on
                        Twitter</a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 pe-lg-0 pe-md-0 pe-sm-3 p-3">
                    <a href="" class="btn blog-btn-color text-white w-100 rounded-1 font-tab-8"><i
                            class="fa fa-linkedin border p-1 rounded-circle me-2 " aria-hidden="true"></i>Follow Us on
                        LinkedIn</a>
                </div> --}}
                <div class="post-grid-sec border-green-2 p-3 ms-lg-0 ms-md-2 ms-sm-0 ms-0 mb-sm-5">
                    <h4 class="dark-green-title fw-bold font-Nerko py-2">Recent Posts</h4>
                    {{-- <div class="row">
                        <div class="col-lg-4">
                            <img src="{{asset('/images/frontend/Blog/blog-archive/Blog-Sin_03.png')}}" alt="" class="w-100">
                        </div>
                        <div class="col-lg-8 ps-lg-2 ps-md-2 ps-sm-2 ps-2">
                            <p class="font-Asap dark-green-title font-20 font-tab-15 font-tab-land-14">The standard Lorem Ipsum
                                passage, used since
                                the 1500s<i class="fa fa-angle-right review-date-font ps-3" aria-hidden="true"></i>
                            </p>
                            <p class="fw-bold blog-font-black mt-3">Thursday September 10, 2023</p>
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-4">
                            <img src="{{asset('/images/frontend/Blog/blog-archive/Blog-Sin_09.png')}}" alt="" class="w-100">
                        </div>
                        <div class="col-lg-8 ps-lg-2 ps-md-2 ps-sm-2 ps-2">
                            <p class="font-Asap dark-green-title font-20 font-tab-15 font-tab-land-14">The standard Lorem Ipsum
                                passage, used since
                                the 1500s<i class="fa fa-angle-right review-date-font ps-3" aria-hidden="true"></i>
                            </p>
                            <p class="fw-bold blog-font-black mt-3">Thursday September 10, 2023</p>
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-4">
                            <img src="{{asset('/images/frontend/Blog/blog-archive/Blog-Sin_11.png')}}" alt="" class="w-100">
                        </div>
                        <div class="col-lg-8 ps-lg-2 ps-md-2 ps-sm-2 ps-2">
                            <p class="font-Asap dark-green-title font-20 font-tab-15 font-tab-land-14">The standard Lorem Ipsum
                                passage, used since
                                the 1500s<i class="fa fa-angle-right review-date-font ps-3" aria-hidden="true"></i>
                            </p>
                            <p class="fw-bold blog-font-black mt-3">Thursday September 10, 2023</p>
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-4">
                            <img src="{{asset('/images/frontend/Blog/blog-archive/Blog-Sin_13.png')}}" alt="" class="w-100">
                        </div>
                        <div class="col-lg-8 ps-lg-2 ps-md-2 ps-sm-2 ps-2">
                            <p class="font-Asap dark-green-title font-20 font-tab-15 font-tab-land-14">The standard Lorem Ipsum
                                passage, used since
                                the 1500s<i class="fa fa-angle-right review-date-font ps-3" aria-hidden="true"></i>
                            </p>
                            <p class="fw-bold blog-font-black mt-3">Thursday September 10, 2023</p>
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-4">
                            <img src="{{asset('/images/frontend/Blog/blog-archive/Blog-Sin_16.png')}}" alt="" class="w-100">
                        </div>
                        <div class="col-lg-8 ps-lg-2 ps-md-2 ps-sm-2 ps-2">
                            <p class="font-Asap dark-green-title font-20 font-tab-15 font-tab-land-14">The standard Lorem Ipsum
                                passage, used since
                                the 1500s<i class="fa fa-angle-right review-date-font ps-3" aria-hidden="true"></i>
                            </p>
                            <p class="fw-bold blog-font-black mt-3">Thursday September 10, 2023</p>
                        </div>

                    </div> --}}
                  


                    @if (sizeof($resentPosts) > 0)

                    @foreach ($resentPosts as $resentPost)
              

                    <div class="row py-3 border-bottom">
                        <div class="col-lg-4 col-sm-5">
                           
                            <img class="w-100"  src="{{$resentPost['image'] != null ? asset($resentPost['image']['src']):asset('images/placeholder.jpg')}}"  alt="Wayamba Agro Exports Co. (Pvt) Ltd" />

                        </div>
                        <div class="col-lg-8 ps-lg-2 ps-md-2 ps-sm-2 ps-2">
                            
                           <a class="" href="{{route('web.blogsingle',['slug'=>$resentPost->slug])}}">
                            <p class="font-Asap dark-green-title font-20 font-tab-15 font-tab-land-14 black-hover">{{$resentPost['title']}}<i class="fa fa-angle-right review-date-font ps-3 hvr-icon-wobble-horizontal" aria-hidden="true"></i>
                            </p>
                        </a>


                            <p class="fw-bold blog-font-black mt-1"> {{$resentPost->created_at->format("m/d/Y")}}</p>
                        </div>

                    </div>


                        @endforeach
                        @endif

                    {{-- <div class="text-lg-end text-md-end text-sm-center text-center">
                        <a href="" class="btn blog-btn-color-2 text-white font-Asap my-3">Read More <i
                                class="fa fa-angle-right review-date-font ps-3" aria-hidden="true"></i> </a>

                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection