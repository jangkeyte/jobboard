@extends('front.layout.app')

@section('seo_title'){{ $privacy_page_item->title ?? __('SEO Title') }}@endsection
@section('seo_meta_description'){{ $privacy_page_item->meta_description ?? __('SEO Meta Description') }}@endsection

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/' . ($global_banner_data->banner_privacy ?? 'banner_default.jpg')) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $privacy_page_item->heading ?? __('SEO Heading') }}</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @isset($privacy_page_item)
                {{ nl2br($privacy_page_item->content) }}
                @endisset
            </div>
        </div>
    </div>
</div>

@endsection