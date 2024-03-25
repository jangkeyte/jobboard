@extends('front.layout.app')

@section('seo_title'){{ $contact_page_item->title ?? __('SEO Title') }}@endsection
@section('seo_meta_description'){{ $contact_page_item->meta_description ?? __('SEO Meta Description') }}@endsection

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/' . ($global_banner_data->banner_contact ?? 'banner_default.jpg')) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $contact_page_item->heading ?? __('SEO Heading') }}</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="contact-form">
                    <form action="{{ route('contact_submit') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('Name') }}</label>
                            <input type="text" class="form-control" name="person_name">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('Email Address') }}</label>
                            <input type="text" class="form-control" name="person_email">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('Message') }}</label>
                            <textarea name="person_message" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary bg-website">{{ __('Send Message') }}</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="map">
                    {{ $contact_page_item->map_code ?? '' }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection