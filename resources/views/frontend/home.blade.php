@extends('frontend.app')

@section('content')
    
    @include('frontend.layouts.sliders.slider')

    @include('frontend.layouts.components.about_section')

    @include('frontend.layouts.components.featured_products')

    @include('frontend.layouts.components.introduction')

    @include('frontend.layouts.components.trending_products')

    @include('frontend.layouts.components.gallery')

    @include('frontend.layouts.components.top_sales_section')

    @include('frontend.layouts.components.advertisements')

    @include('frontend.layouts.components.contact_section')


@endsection

