@extends('front.layout.app')

@section('seo_title'){{ $pricing_page_item->title ?? __('SEO Title') }}@endsection
@section('seo_meta_description'){{ $pricing_page_item->meta_description ?? __('SEO Meta Description') }}@endsection

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/' . ($global_banner_data->banner_pricing ?? 'banner_default.jpg')) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $pricing_page_item->heading ?? __('SEO Heading') }}</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content pricing mt-5">
    <div class="container">
        <div class="row pricing justify-content-center">
            @foreach($packages as $item)
            <div class="col-md-3">
                <div class="card mb-5 border-0 shadow">
                    <div class="card-body px-0">
                        <h2 class="card-title px-3 text-center fw-bold">{{ $item->package_name }}</h2>
                        <div style="background-color:#F7F7F7;" class="text-center py-3">
                            <h3 class="card-price pt-2 fw-bolder">${{ $item->package_price }}</h3>
                            <span class="card-day fs-7">{{ $item->package_days }} {{__('Days') }}</span>
                        </div>
                        
                        
                        <ul class="fa-ul px-3 py-3">
                            <li class="py-2">
                                @php
                                    if ($item->total_allowed_jobs == -1) {
                                        $text = "Unlimited";
                                        $icon_code = "fas fa-check";
                                    } elseif ($item->total_allowed_jobs == 0) {
                                        $text = "{{__('No') }}";
                                        $icon_code = "fas fa-times";
                                    } else {
                                        $text = $item->total_allowed_jobs;
                                        $icon_code = "fas fa-check";
                                    }                                    
                                @endphp
                                <span class="fa-li"><i class="{{ $icon_code }}"></i></span>{{ $text }} {{__('Job Post Allowed') }}
                            </li>
                            <li class="py-2">
                                @php
                                    if ($item->total_allowed_featured_jobs == -1) {
                                        $text = "Unlimited";
                                        $icon_code = "fas fa-check";
                                    } elseif ($item->total_allowed_featured_jobs == 0) {
                                        $text = "No";
                                        $icon_code = "fas fa-times";
                                    } else {
                                        $text = $item->total_allowed_featured_jobs;
                                        $icon_code = "fas fa-check";
                                    }                                    
                                @endphp
                                <span class="fa-li"><i class="{{ $icon_code }}"></i></span>{{ $text }} {{__('Featured Job') }}
                            </li>
                            <li class="py-2">
                                @php
                                    if ($item->total_allowed_photos == -1) {
                                        $text = "Unlimited";
                                        $icon_code = "fas fa-check";
                                    } elseif ($item->total_allowed_photos == 0) {
                                        $text = "No";
                                        $icon_code = "fas fa-times";
                                    } else {
                                        $text = $item->total_allowed_photos;
                                        $icon_code = "fas fa-check";
                                    }                                    
                                @endphp
                                <span class="fa-li"><i class="{{ $icon_code }}"></i></span>{{ $text }} {{__('Company Photos') }}
                            </li>
                            <li class="py-2">
                                @php
                                    if ($item->total_allowed_videos == -1) {
                                        $text = "Unlimited";
                                        $icon_code = "fas fa-check";
                                    } elseif ($item->total_allowed_videos == 0) {
                                        $text = "No";
                                        $icon_code = "fas fa-times";
                                    } else {
                                        $text = $item->total_allowed_videos;
                                        $icon_code = "fas fa-check";
                                    }                                    
                                @endphp
                                <span class="fa-li"><i class="{{ $icon_code }}"></i></span>{{ $text }} {{__('Company Videos') }}
                            </li>
                        </ul>
                        <div class="buy text-center"><a href="" class="btn btn-danger">{{__('Choose Plan') }}</a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection