@extends('front.layout.app')

@section('seo_title'){{ $home_page_data->title ?? __('SEO Title') }}@endsection
@section('seo_meta_description'){{ $home_page_data->meta_description ?? 'SEO Meta Description' }}@endsection

@section('main_content')

@isset($home_page_data)

<div class="slider" style="background-image: url({{ asset('uploads/' . ($home_page_data->background ?? 'background_default.jpg')) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h2>{{ $home_page_data->heading ?? __('Heading') }}</h2>
                    <p>{{ $home_page_data->text ?? __('Text') }}</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="#" role="button">{{ __('Upload Resume') }}</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="search-section d-flex justify-content-center py-3" style="background-color: #e6eaec;">
    @include('front/templates/home_search_form', array('home_page_data' => $home_page_data, 'all_job_locations' => $all_job_locations, 'all_job_categories' => $all_job_categories, 'all_job_types' => $all_job_types, 'all_job_experiences' => $all_job_experiences, 'all_job_salary_ranges' => $all_job_salary_ranges))
</div>

@if($home_page_data->why_choose_status == 'Show')
<div class="why-choose py-4" style="background-image: url({{ asset('uploads/' . ($home_page_data->why_choose_background ?? 'background_default.jpg')) }})">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading careerfy-fancy-title-seventeen">
                    <h2>{{ $home_page_data->why_choose_heading }}</h2>
                    <p>{{ $home_page_data->why_choose_subheading }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="careerfy-seventeen-services">
                <ul class="row">
                    @foreach($why_choose_items as $item)
                        <li class="col-md-3 col-6">
                            <i class="careerfy-icon {{ $item->icon }} text-danger"></i>
                            <h2><a href="#">{{ $item->heading }}</a></h2>
                            <p>{{ nl2br($item->text) }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>            
        </div>
    </div>
</div>
@endif

@if($home_page_data->job_category_status == 'Show')
<div class="job-category py-4" style="background-image: url({{ asset('assets/images/trending-categories-pattren.png') }}); background-color:#e6eaec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading careerfy-fancy-title-seventeen">
                    <h2>{{ $home_page_data->job_category_heading }}</h2>
                    <p>{{ $home_page_data->job_category_subheading }}</p>
                </div>
            </div>
        </div>
        <div class="row careerfy-categories careerfy-trending-categories">
            @include('front/templates/home_job_categories', array('job_categories' => $job_categories))
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="careerfy-loadmore-listingsbtn"><a href="{{ route('job_categories') }}">{{ __('See All Categories') }}</a></div>
            </div>
        </div>
    </div>
</div>
@endif

@if($home_page_data->featured_jobs_status == 'Show')
<div class="job py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading careerfy-fancy-title-seventeen">
                    <h2>{{ $home_page_data->featured_jobs_heading }}</h2>
                    <p>{{ $home_page_data->featured_jobs_subheading }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            @php $i=0; @endphp
            @foreach($featured_jobs as $item)
                @php
                    $this_company_id = $item->rCompany->id;
                    $order_data = \App\Models\Order::where('company_id', $this_company_id)->where('currently_active', 1)->first();
                    if(date('Y-m-d') > $order_data?->expire_date) {
                        continue;
                    }
                    $i++;
                    if($i > 6) {
                        break;
                    }
                @endphp
                <div class="col-lg-6 col-md-12">
                    @include('front/templates/job_featured_item', array('item' => $item))
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="careerfy-loadmore-listingsbtn"><a href="{{ route('job_listing') }}" class="lodmore-jlists-16912428">{{ __('See All Jobs') }}</a></div>
            </div>
        </div>
    </div>
</div>
@endif

@if($home_page_data->testimonial_status == 'Show')
<div class="testimonial py-4" style="background-image: url({{ asset('uploads/banner11.jpg') }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header careerfy-fancy-title-seventeen">
                    <h2>{{ $home_page_data->testimonial_heading }}</h2>
                    <p>{{ $home_page_data->testimonial_subheading }}</p>
                </div>
            </div>
        </div>
        <div class="row">            
            @foreach($testimonials as $item)
            <div class="col-md-6">    
                <div class="careerfy-seventeen-testimonial">
                    <figure>
                        <a href="#"><img src="{{ asset('uploads/' . $item->photo) }}" alt=""><strong></strong> </a>
                        <figcaption>
                            <h2><a href="#">{{ $item->name }}</a></h2>
                            <span>{{ $item->designation }}</span><small>2 Days ago</small>
                        </figcaption>
                    </figure>
                    <p>{{ nl2br($item->comment) }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif

@if($home_page_data->featured_jobs_status == 'Show')
<div class="careerfy-refejobs-list careerfy-refejobs-list-two py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading careerfy-fancy-title-seventeen">
                    <h2>{{ $home_page_data->refered_jobs_heading ?? __('Job List') }}</h2>
                    <p>{{ $home_page_data->refered_jobs_subheading ?? __('Start your search by using any of the following job categories') }}</p>
                </div>
            </div>
        </div>
        <ul class="row">
            @php $i=0; @endphp
            @foreach($refered_jobs as $item)
                @php
                    $this_company_id = $item->rCompany->id;
                    $order_data = \App\Models\Order::where('company_id', $this_company_id)->where('currently_active', 1)->first();
                    if(date('Y-m-d') > $order_data?->expire_date) {
                        continue;
                    }
                    $i++;
                    if($i > 6) {
                        break;
                    }
                @endphp
                <li class="col-12">
                    @include('front/templates/job_refered_item', array('item' => $item))
                </li>
            @endforeach
        </ul>
        <div class="row">
            <div class="col-md-12">
                <div class="careerfy-loadmore-listingsbtn"><a href="{{ route('job_listing') }}" class="lodmore-jlists-16912428">{{ __('See All Jobs') }}</a></div>
            </div>
        </div>
    </div>
</div>
@endif

@if($home_page_data->blog_status == 'Show')
<div class="blog py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading careerfy-fancy-title-seventeen">
                    <h2>{{ $home_page_data->blog_heading }}</h2>
                    <p>{{ $home_page_data->blog_subheading }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($posts as $item)
            <div class="col-lg-4 col-md-6">
                <div class="item">
                    <div class="photo">
                        <img src="{{ asset('uploads/' . $item->photo) }}" alt="{{ $item->title }}">
                    </div>
                    <div class="text">
                        <h2>
                            <a href="{{ route('post', $item->slug) }}">
                                {{ $item->title }}
                            </a>
                        </h2>
                        <div class="short-des">
                            <p>{{ $item->short_description }}</p>
                        </div>
                        <div class="button">
                            <a href="{{ route('post', $item->slug) }}" class="btn btn-primary">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif

@endisset

@endsection
