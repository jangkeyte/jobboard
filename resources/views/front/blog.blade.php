@extends('front.layout.app')

@section('seo_title'){{ $blog_page_item->title ?? __('SEO Title') }}@endsection
@section('seo_meta_description'){{ $blog_page_item->meta_description ?? __('SEO Meta Description') }}@endsection

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
                    <li>{{ __('Blogs Listing') }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="company-result mt-3">
    <div class="container">
        <div class="row pt-2">

            <div class="col-md-9">
                <h2 class="text-black fw-bold">{{ __('Category: Blogs') }}</h2>
                <div class="container">
                    <div class="row">
                        @if(!$posts->count())
                            <div class="text-danger">{{ __('No result found') }}</div>
                        @else
                            @foreach($posts as $item)
                                <div class="col-md-12 my-2 border">
                                    <div class="row">
                                        <div class="col-md-5 py-3 ">
                                            <a href="{{ route('post', $item->slug) }}" style="width: 365px; height:206px; display: block;">
                                                @include('front/templates/image', array('image' => $item->photo, 'name' => $item->heading))
                                            </a>
                                        </div>
                                        <div class="col-md-7 pt-3">
                                            <div>
                                                <ul class="list-unstyled fs-7">
                                                    <li><a class ="fs-5 fw-bold" href="javascript:void(0);">{{ $item->heading }}</a></li>
                                                    <li class="mt-2">
                                                        <i class="pe-2 fa fa-user"></i>sysadm
                                                        <i class="ms-1 px-2 fa fa-tag"></i>Blogs
                                                    </li>
                                                    <li class="mt-1">
                                                        <i class="pe-2 fa fa-calendar-days"></i>{{ $item->created_at->format("d F,Y") }}
                                                        <i class="ms-1 px-2 fa fa-comment"></i>0 Comments
                                                    </li>
                                                    <li class="mt-2"><h7>{{ $item->short_description }}</h7></li>
                                                    <li class="mt-2 text-end"><a class="w-100  fw-bold text-danger" href="{{ route('post', $item->slug) }}">{{ __('CONTINUE READING') }} ≫ </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
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
                    
                    <h4 class="text-black fw-bold">{{ __('Recent Posts') }}</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-unstyled fs-7">
                                @foreach($posts as $item)
                                    <li class="py-1"><a href="{{ route('post', $item->slug) }}">{{ $item->short_description }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                {{ $posts->links() }}
            </div>

        </div>
    </div>
</div>
@endsection