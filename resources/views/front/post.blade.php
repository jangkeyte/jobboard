@extends('front.layout.app')

@section('seo_title'){{ $post_single->title ?? __('SEO Title') }}@endsection
@section('seo_meta_description'){{ $post_single->meta_description ?? __('SEO Meta Description') }}@endsection

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/' . ($global_banner_data->banner_company_listing ?? 'banner_default.jpg')) }})">
    <div class="container">
        <div class="row pt-3">
            <div class="col-md-12 text-white text-center py-5">
                <h2 class="fw-bold">{{ $other_page_item->company_listing_page_heading ?? __('SEO Heading') }}</h2>
            </div>
        </div>
    </div>
</div>

<div class="path">
    <div class="container">
        <div class="row pt-2">
            <div class="col-md-12 text-white text-center">
                <ul class="d-inline fs-7">
                    <li><a class="text-white" href="{{ route('home') }}">{{ __('Home') }}</a></li>
                    <li class="px-2"> > </li>
                    <li><a class="text-white" href="{{ route('blog') }}">{{ __('Blogs Listing') }}</a></li>
                    <li class="px-2"> > </li>
                    <li>{{ __('Current Page') }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="company-result mt-3">
    <div class="container">
        <div class="row pt-2">

            <div class="col-md-9">
                <a class="ms-1 fw-bold text-danger" href="{{ route('blog') }}"> <i class="px-2 fa fa-tag"></i>{{ __('Blogs') }} </a>
                <a class="ms-1 fw-bold text-danger" href="#"> <i class="px-2 fa fa-comment"></i>0 {{ __('Comments') }} </a>
                <div class="container mt-2">
                    <div class="row">
                        <div class="col-md-12 my-2">
                            <div style="width: 840px; height:397px;">
                                @include('front/templates/image', array('image' => $post_single->photo, 'name' => $post_single->title))
                            </div>
                            <ul class="list-unstyled fs-7">
                                <li class ="fs-5 fw-bold mt-4 text-black">{{ $post_single->short_description }}</li>
                                <li class ="fs-6 mt-4"><p class="lh-base">{{ $post_single->description }}</p></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="container">
                    <h4 class="text-black fw-bold">{{ __('Search') }}</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <form class="signin-form" action="{{ route('candidate_login_submit') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="keyword" name="keyword" placeholder="{{ __('Keywords...') }}">
                                        <span class="input-group-text bg-white p-0">
                                            <button type="submit" class="btn btn-danger hover-outline rounded-0">{{ __('Search') }}</button>
                                        </span>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection