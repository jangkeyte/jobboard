@extends('front.layout.app')

@section('seo_title'){{ $post_single->title ?? __('SEO Title') }}@endsection
@section('seo_meta_description'){{ $post_single->meta_description ?? __('SEO Meta Description') }}@endsection

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/' . ($global_banner_data->banner_post ?? 'banner_default.jpg')) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $post_single->heading ?? __('SEO Heading') }}</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="featured-photo">
                    <img src="{{ asset('uploads/' . $post_single->photo) }}" alt="{{ $post_single->title }}">                    
                </div>
                <div class="sub">
                    <div class="item">
                        <b><i class="fa fa-clock-o"></i></b>
                        {!! $post_single->created_at->format("d") !!}
                        {!! $post_single->created_at->format("F") !!}
                        {!! $post_single->created_at->format("Y") !!}
                    </div>
                    <div class="item">
                        <b><i class="fa fa-eye"></i></b>
                        {!! $post_single->total_view !!}
                    </div>
                </div>
                <div class="main-text">
                    {!! $post_single->description !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection