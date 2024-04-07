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
        <div class="row mt-3">
            <div class="col-md-4 col-sm-12 p-3">
                <div class="contact-form border p-4 bg-danger text-white">
                    <h2 class="pb-3 fw-bolder">{{ __('Contact Information')}}</h2>
                    <hr/>
                    <p>
                        N?i dung gi?i thi?u v? công ty
                    </p>
                    <ul class="list-unstyled">
                        <li class="py-3">
                            <i class="fa fa-location-dot px-1"></i>
                            {{ __('Ð?a ch?')}}: Nguy?n trãi
                        </li>
                        <li class="py-3">
                            <i class="fa fa-envelope px-1"></i>
                            <a class="text-white" href="mailto:info@website.com">{{ __('Email')}}: info@website.com</a>
                        </li>
                        <li class="py-3">
                            <i class="fa fa-phone px-1"></i>
                            {{ __('Call')}}: 123.456.78910
                        </li>
                        <li class="py-3">
                            <i class="fa fa-fax px-1"></i>
                            {{ __('Fax')}}: (800) 123 4567 89
                        </li>
                    </ul>
                    <div class="careerfy-contact-media">
                        <a href="#">
                            <i class="careerfy-icon careerfy-facebook-logo"></i>
                        </a>
                        <a href="#">
                            <i class="careerfy-icon careerfy-twitter-logo"></i>
                        </a>
                        <a href="#">
                            <i class="careerfy-icon careerfy-linkedin-button"></i>
                        </a>
                        <a href="#">
                            <i class="careerfy-icon careerfy-dribbble-logo"></i>
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-lg-8 col-sm-12 p-3">
                <div class="contact-form border p-4">
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
                            <button type="submit" class="btn btn-danger hover-outline bg-website">{{ __('Send Message') }}</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- <div class="col-lg-6 col-md-12">
                <div class="map">
                    {!! $contact_page_item->map_code ?? '' !!}
                </div>
            </div> -->
        </div>
    </div>
</div>

@endsection