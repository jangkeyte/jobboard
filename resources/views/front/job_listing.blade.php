@extends('front.layout.app')

@section('seo_title'){{ $other_page_item->job_listing_page_title ?? __('SEO Title') }}@endsection
@section('seo_meta_description'){{ $other_page_item->job_listing_page_meta_description ?? __('SEO Meta Description') }}@endsection

@section('main_content')

<!-- <div class="page-top" style=" background-image: url({{ asset('uploads/' . ($global_banner_data->banner_job_listing ?? 'banner_default.jpg')) }})"> -->
<div class="page-top" style=" font-size: 30px; background-color: rgba(111,123,134) !important;">
    <div class="container">
        <div class="row pt-3">
            <div class="col-md-12 text-white text-center py-5">
                <h2 class="fw-bold">{{ $other_page_item->job_listing_page_heading ?? __('Jobs Listing') }}</h2>
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
                    <li>{{ __('Jobs Listing') }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="job-result mt-3">
    <div class="container">
        <div class="row pt-2">
            <div class="col-md-3">
                <div class="accordion" id="accordion">
                    <div class="accordion-item shadow "> 
                        <h2 class="accordion-header">
                        <button class="accordion-button bg-danger text-white" type="button" data-bs-toggle="collapse" data-bs-target="#Subscriber" aria-expanded="true" aria-controls="Subscriber">
                            <i class="fa-solid fa-envelope pe-2"></i>{{ __('Email Me New Jobs') }}
                        </button>
                        </h2>
                        <div id="Subscriber" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                <div class="job-filter fs-7">
                                    <div class="widget">
                                        <div class="item">
                                            <p>
                                                {{ __('To get the latest news from our website, please subscribe us') }}
                                            </p>
                                            <form action="{{ route('subscriber_send_email') }}" method="post" class="form_subscribe_ajax">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" name="email" placeholder="example@email.com" class="form-control">
                                                    <span class="text-danger error-text email_error"></span>
                                                </div>
                                                <div class="form-group">
                                                    <div class="filter-button mt-3">
                                                        <button type="submit" class="btn btn-danger w-100 rounded-0 py-2">
                                                            {{ $home_page_data->search ?? __('Subscribe Now') }}
                                                        </button>
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
                <form action="{{ url('job-listing') }}" method="get">
                    <div class="accordion" id="accordion">
                        <div class="accordion-item shadow mt-3"> 
                            <h2 class="accordion-header">
                            <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#JobTitle" aria-expanded="true" aria-controls="JobTitle">
                                {{ __('Job Title') }}
                            </button>
                            </h2>
                            <div id="JobTitle" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <div class="job-filter fs-7">
                                        <div class="widget">
                                            <input type="text" class="form-control fs-7" name="title" value="{{ $form_data->title }}" placeholder="{{ __('Job Title') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow mt-3 ">
                            <h2 class="accordion-header">
                            <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#JobCategory" aria-expanded="true" aria-controls="JobCategory">
                                {{ __('Job Category') }}
                            </button>
                            </h2>
                            <div id="JobCategory" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="job-filter fs-7">
                                        <div>
                                            <select name="category" class="form-control select2 fs-7">
                                                <option value="">{{ __('Job Category') }}</option>
                                                @foreach($job_categories as $item)
                                                <option value="{{ $item->id }}" @if($form_data->job_category == $item->id) selected @endif>{{  $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow mt-3 ">
                            <h2 class="accordion-header">
                            <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#JobLocation" aria-expanded="true" aria-controls="JobLocation">
                                {{ __('Job Location') }}
                            </button>
                            </h2>
                            <div id="JobLocation" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="job-filter fs-7">
                                        <div class="widget">
                                            <select name="location" class="form-control select2 fs-7">
                                                <option value="">{{ __('Job Location') }}</option>
                                                @foreach($job_locations as $item)
                                                <option value="{{ $item->id }}" @if($form_data->job_location_id == $item->id) selected @endif>{{  $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item shadow mt-3 ">
                            <h2 class="accordion-header">
                            <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#JobType" aria-expanded="true" aria-controls="JobType">
                                {{ __('Job Type') }}
                            </button>
                            </h2>
                            <div id="JobType" class="accordion-collapse collapse">
                                <div class="accordion-body fs-7">
                                    @foreach($job_types as $item)
                                        <div class="form-check py-1">
                                            <input class="form-check-input" type="radio" name="job_types" id="job_types{{ $item->id }}" value="{{ $item->id }}" @if($form_data->job_salary_range_id == $item->id) checked @endif>
                                            <label class="form-check-label" for="job_types{{ $item->id }}">
                                                {{  $item->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item shadow mt-3 ">
                            <h2 class="accordion-header">
                            <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#Experience" aria-expanded="true" aria-controls="Experience">
                                {{ __('Experience') }}
                            </button>
                            </h2>
                            <div id="Experience" class="accordion-collapse collapse">
                                <div class="accordion-body fs-7">
                                    @foreach($job_experiences as $item)
                                        <div class="form-check py-1">
                                            <input class="form-check-input" type="radio" name="job_experiences" id="job_experiences{{ $item->id }}" value="{{ $item->id }}" @if($form_data->job_salary_range_id == $item->id) checked @endif>
                                            <label class="form-check-label" for="job_experiences{{ $item->id }}">
                                                {{  $item->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item shadow mt-3 ">
                            <h2 class="accordion-header">
                            <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#Gender" aria-expanded="true" aria-controls="Gender">
                                {{ __('Gender') }}
                            </button>
                            </h2>
                            <div id="Gender" class="accordion-collapse collapse">
                                <div class="accordion-body fs-7">
                                    @foreach($job_genders as $item)
                                        <div class="form-check py-1">
                                            <input class="form-check-input" type="radio" name="job_genders" id="job_genders{{ $item->id }}" value="{{ $item->id }}" @if($form_data->job_salary_range_id == $item->id) checked @endif>
                                            <label class="form-check-label" for="job_genders{{ $item->id }}">
                                                {{  $item->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item shadow mt-3 ">
                            <h2 class="accordion-header">
                            <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#SalaryRange" aria-expanded="true" aria-controls="SalaryRange">
                                {{ __('Salary Range') }}
                            </button>
                            </h2>
                            <div id="SalaryRange" class="accordion-collapse collapse">
                                <div class="accordion-body fs-7">
                                    @foreach($job_salary_ranges as $item)
                                        <div class="form-check py-1">
                                            <input class="form-check-input" type="radio" name="job_salary_ranges" id="job_salary{{ $item->id }}" value="{{ $item->id }}" @if($form_data->job_salary_range_id == $item->id) checked @endif>
                                            <label class="form-check-label" for="job_salary{{ $item->id }}">
                                                {{  $item->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>                        
                    </div>

                    <div class="filter-button mt-3">
                        <button type="submit" class="btn btn-danger w-100 rounded-0 py-2">
                            <i class="fas fa-search pe-2"></i> {{ $home_page_data->search ?? __('Filter') }}
                        </button>
                    </div>

                    @if($advertisement_data && $advertisement_data->job_listing_ad_status == 'Show')
                        <div class="advertisement">                            
                            @if($advertisement_data->job_listing_ad_url == null)
                                <img src="{{ asset('uploads/' . $advertisement_data->job_listing_ad) }}" alt="" class="w-100">
                            @else
                                <a href="{{ $advertisement_data->job_listing_ad_url }}" target="_blank"><img src="{{ asset('uploads/' . $advertisement_data->job_listing_ad) }}" alt="" class="w-100"></a>
                            @endif
                        </div>
                    @endif

                </form>
                
            </div>

            <div class="col-md-9">
                <div class="job">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="search-result-header">
                                    <div class="row">
                                        <div class="col-md-6 left-side">
                                            <ul class="header-left ps-0">
                                                <li class="email-text">
                                                    <div><span class="fs-5 fw-bolder text-black">{{ $jobs->count() }} {{ __('Jobs Found') }}</span></div>
                                                    <div class="mt-1"><span class="fs-7 fw-bolder">{{ __('Displayed Here: ') }} 1-{{ $jobs->count() }} {{ __('Jobs') }}</span></div>
                                                </li>
                                            </ul>
                                            
                                        </div>
                                        <div class="col-md-6 right-side text-end">
                                            <ul class="header-right social mr-auto">
                                                <li><a href="{{ $global_settings_data->facebook }}"><i class="fa fa-sort"></i></a></li>
                                                <span class=" text-danger ps-1 pe-3" >{{ __('Most Recent') }}</span>
                                                <li><a href="{{ $global_settings_data->facebook }}"><i class="fa fa-sort t"></i></a></li>
                                                <span class=" text-danger ps-1 pe-3" >{{ __('Records Per Page') }}</span>
                                                <button type="submit" class="btn btn-rss rounded-0 fs-8 px-0"><i class="fa fa-rss me-1"></i>{{ __('RSS Feed') }}</button>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            @if(!$jobs->count())
                                <div class="text-danger">{{ __('No result found') }}</div>
                            @else
                                @foreach($jobs as $item)
                                    <div class="col-md-12 py-2">
                                        <div class="row border">
                                            <div class="col-md-1 pt-4">
                                                <div class="border">
                                                    <a href="{{ route('job', $item->id) }}" data-job-id="174" class="">
                                                        <img class="list-image" src="{{ asset('uploads/' . $item->rCompany->logo) }}" alt="{{ $item->rCompany->company_name }}">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-9 pt-3">
                                                <div>
                                                    <h5><a class="fw-bold" href="{{ route('job', $item->id) }}">{{ $item->title }}</a></h5>
                                                    <ul class="list-unstyled fs-7">
                                                        <li>
                                                                <a class ="text-danger" href="javascript:void(0);">{{ $item->rCompany->company_name }}</a>
                                                                <i class="ms-1 px-1 border-start fa fa-location-dot"></i>{{ $item->rJobLocation->name }}
                                                                @if($item->is_featured == 1)<div class="featured badge text-bg-primary">{{ __('Featured') }}</div> @endif
                                                                @if($item->is_urgent == 1)<div class="urgent badge text-bg-danger">{{ __('Urgent') }}</div> @endif
                                                        </li>
                                                        <li>
                                                            <i class="px-1 fa fa-calendar-days"></i>{{ __('Published') }} {{ $item->created_at->diffForHumans() }}
                                                            @if(date('Y-m-d') > $item->deadline)
                                                                <div class="expired badge text-bg-warning">{{ __('Expired') }}</div>
                                                            @endif
                                                        </li>
                                                        <li>
                                                            <i class="ms-1 px-1 border-start fa fa-filter"></i>{{ $item->rJobCategory->name }}
                                                            <i class="ms-1 px-1 border-start fa fa-dollar-sign"></i>{{ $item->rJobSalaryRange->name }}
                                                        </li>
                                                        <li>
                                                            <i class="px-1 fa fa-briefcase"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col-md-2 pt-5">
                                                <ul class="list-unstyled fs-7">
                                                    <li>
                                                        @if($item->rJobType->id == 1)<button type="submit" class="btn btn-fulltime rounded-0 btn-job-type">{{ $item->rJobType->name }}</button>@endif
                                                        @if($item->rJobType->id == 2)<button type="submit" class="btn btn-parttime rounded-0 btn-job-type">{{ $item->rJobType->name }}</button>@endif
                                                        @if($item->rJobType->id == 3)<button type="submit" class="btn btn-freelance rounded-0 btn-job-type">{{ $item->rJobType->name }}</button>@endif
                                                        @if($item->rJobType->id == 4)<button type="submit" class="btn btn-temporary rounded-0 btn-job-type">{{ $item->rJobType->name }}</button>@endif
                                                        @if($item->rJobType->id == 5)<button type="submit" class="btn btn-internship rounded-0 btn-job-type">{{ $item->rJobType->name }}</button>@endif
                                                        
                                                        @if(!Auth::guard('company')->check())
                                                            @if(Auth::guard('candidate')->check())
                                                                @php
                                                                    $count = \App\Models\CandidateBookmark::where('candidate_id', Auth::guard('candidate')->user()->id)->where('job_id', $item->id)->count();
                                                                    if($count > 0) {
                                                                        $bookmark_status = 'bg-danger';
                                                                    } else {
                                                                        $bookmark_status = '';
                                                                    }
                                                                @endphp
                                                            @else
                                                                @php $bookmark_status = ''; @endphp
                                                            @endif
                                                            <a class="icon-job-like bg-danger" href="{{ route('candidate_bookmark_add', $item->id) }}"><i class="fa fa-heart-o"></i></a>
                                                        @endif
                                                        
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>

                                @endforeach


                                <div class="col-md-12">
                                    {{-- $jobs->links()->appends($_GET) --}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    $(".form_subscribe_ajax").on('submit', function(e){
        e.preventDefault();
        //$('#loader').show();
        var form = this;
        $.ajax({
            url:$(form).attr('action'),
            method:$(form).attr('method'),
            data:new FormData(form),
            processData:false,
            dataType:'json',
            contentType:false,
            beforeSend:function(){
                $(form).find('span.error-text').text('');
            },
            success:function(data){
                //$('#loader').hide();
                if(data.code == 0) {
                    $.each(data.error_message, function(prefix, val){
                        $(form).find('span.' + prefix + '_error').text(val[0]);
                    });
                } else if(data.code == 1) {
                    $(form)[0].reset();
                    iziToast.success({
                        title: '',
                        position: 'topRight',
                        message: data.success_message,
                    })
                }
            }
        });
    })
</script>