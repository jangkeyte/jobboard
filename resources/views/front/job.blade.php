@extends('front.layout.app')

@section('seo_title'){{ $other_page_item->job_listing_page_title ?? __('SEO Title') }}@endsection
@section('seo_meta_description'){{ $other_page_item->job_listing_page_meta_description ?? __('SEO Meta Description') }}@endsection

@section('main_content')

<div class="page-top-detail" style="background-image: url({{ asset('uploads/' . ($global_banner_data->banner_job_detail ?? 'banner_default.jpg')) }})"></div>
<div class="container w-75 bg-white" style="margin-top: -150px;">
    <div class="row py-5 border">
        <div class="col-md-12">
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 job job-single">
                            <div class="item d-flex justify-content-start">
                                <div class="logo job-detail-image me-4">
                                    @include('front/templates/image', array('image' => $job_single->rCompany->logo, 'name' => $job_single->rCompany->company_name))
                                </div>
                                <div class="text">
                                    <h4 class="text-black fw-bold">{{ $job_single->title }}</h4>
                                    <span>
                                        @if($job_single->rJobType->id == 1)<button type="submit" class="btn btn-fulltime rounded-0 btn-job-type">{{ $job_single->rJobType->name }}</button>@endif
                                        @if($job_single->rJobType->id == 2)<button type="submit" class="btn btn-parttime rounded-0 btn-job-type">{{ $job_single->rJobType->name }}</button>@endif
                                        @if($job_single->rJobType->id == 3)<button type="submit" class="btn btn-freelance rounded-0 btn-job-type">{{ $job_single->rJobType->name }}</button>@endif
                                        @if($job_single->rJobType->id == 4)<button type="submit" class="btn btn-temporary rounded-0 btn-job-type">{{ $job_single->rJobType->name }}</button>@endif
                                        @if($job_single->rJobType->id == 5)<button type="submit" class="btn btn-internship rounded-0 btn-job-type">{{ $job_single->rJobType->name }}</button>@endif
                                        <a class ="text-black px-1 fw-bold" href="javascript:void(0);">{{ $job_single->rCompany->company_name }}</a>
                                        <span class ="text-danger fs-8 fst-italic pe-1" href="javascript:void(0);">{{ __('posted')}} {{ $job_single->created_at->format('d F, Y') }} {{ $job_single->created_at->diffForHumans() }}</span> 
                                        <a class ="text-black fw-bold" href="javascript:void(0);">{{ __('in')}} {{ $job_single->rJobCategory->name }}</a>
                                    <span/>

                                    <div class="pt-2">
                                        <i class="pe-1 fa fa-location-dot"></i>{{ $job_single->rJobLocation->name }}
                                        <a 
                                            href="https://www.google.com/maps/search/{{ __('company')}} {{ $job_single->rCompany->company_name }} {{ __('in')}} {{ $job_single->rJobLocation->name }}"
                                            class="btn btn-danger rounded-4 ms-2 fs-8 py-0" style="height:20px;"
                                        >
                                            {{ __('view on map')}}
                                        </a>
                                    </div>

                                    <div class="pt-2">
                                        <i class="pe-1 fa fa-calendar-days text-danger"></i>{{ $job_single->created_at }}
                                        <i class="ps-4 pe-1 fa fa-calendar-days text-danger"></i>{{ $job_single->deadline }}
                                        <i class="ps-4 pe-1 fa fa-money-bill text-danger"></i>{{ $job_single->rJobSalaryRange->name }}
                                    </div>

                                    <div class="pt-2">
                                        @if($job_single->is_featured == 1)<div class="featured badge text-bg-primary">{{ __('Featured') }}</div> @endif
                                        @if($job_single->is_urgent == 1)<div class="urgent badge text-bg-danger">{{ __('Urgent') }}</div> @endif
                                        @if(date('Y-m-d') > $job_single->deadline)<div class="badge text-bg-warning">{{ __('Expired') }}</div>@endif
                                    </div>
                                    
                                    @if(!Auth::guard('company')->check())
                                    <div class="pt-3">
                                        @if(date('Y-m-d') >= $job_single->deadline)
                                            <a href="{{ route('candidate_apply', $job_single->id) }}" class="btn btn-danger me-2">
                                                <i class="pe-2 fa fa-feather-pointed"></i>{{__('Apply Now')}}
                                            </a>
                                            <a href="{{ route('candidate_bookmark_add', $job_single->id) }}" class="btn btn-warning save-job">
                                                <i class="pe-2 fa fa-bookmark"></i>{{__('Bookmark')}}
                                            </a>
                                        @endif
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-8 pe-3 ps-0 float-left">
            <div class="job-result pt-4 pb-5 px-4 border">
                <div class="left-item">
                    <div class="py-3"><span class="fs-5 fw-bolder text-black">{{ __('Job Detail') }}</span></div>
                    <div class="container">

                        <div class="row mt-3">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-3"><i class="pe-2 fa fa-briefcase fs-1 text-danger"></i></div>
                                    <div class="col-md-9 px-0">
                                        <div class="row">
                                            <div class="col-md-12">{{__('Job ID')}}</div>
                                            <div class="col-md-12">{{ $job_single->id }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-3"><i class="pe-2 fa fa-users-rectangle fs-1 text-danger"></i></div>
                                    <div class="col-md-9 pe-0">
                                        <div class="row">
                                            <div class="col-md-12">{{__('Career Level')}}</div>
                                            <div class="col-md-12">{{ $job_single->id }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-3"><i class="pe-2 fa fa-briefcase fs-1 text-danger"></i></div>
                                    <div class="col-md-9 px-0">
                                        <div class="row">
                                            <div class="col-md-12">{{__('Experience')}}</div>
                                            <div class="col-md-12">{{ $job_single->rJobExperience->name }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5 mb-4">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-3"><i class="pe-2 fa fa-user fs-1 text-danger"></i></div>
                                    <div class="col-md-9 px-0">
                                        <div class="row">
                                            <div class="col-md-12">{{__('Gender')}}</div>
                                            <div class="col-md-12">{{ $job_single->rJobGender->name }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-3"><i class="pe-2 fa fa-graduation-cap fs-1 text-danger"></i></div>
                                    <div class="col-md-9 pe-0">
                                        <div class="row">
                                            <div class="col-md-12">{{__('Qualifications')}}</div>
                                            <div class="col-md-12">{{ $job_single->id }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="left-item">                                
                    <div class="py-3"><span class="fs-5 fw-bolder text-black">{{ __('Job Description') }}</span></div>
                    <p>{!! $job_single->description !!}</p>
                </div>
                <div class="left-item">
                    <div class="py-3"><span class="fs-5 fw-bolder text-black">{{ __('Job Responsibilities') }}</span></div>
                    {!! nl2br($job_single->responsibility) !!}
                </div>
                <div class="left-item">
                    <div class="py-3"><span class="fs-5 fw-bolder text-black">{{ __('Skills and Abilities') }}</span></div>
                    {!! nl2br($job_single->skill) !!}
                </div>
                <div class="left-item">
                    <div class="py-3"><span class="fs-5 fw-bolder text-black">{{ __('Educational Qualification') }}</span></div>
                    {!! nl2br($job_single->education) !!}
                </div>
                <div class="left-item">
                    <div class="py-3"><span class="fs-5 fw-bolder text-black">{{ __('Benefits') }}</span></div>
                    {!! nl2br($job_single->benefit) !!}
                </div>
  
                
                <div class="left-item">
                    <div class="py-3 "><span class="fs-4 fw-bolder">{{ __('Related Jobs') }}</span></div>
                    
                    <div class="job related-job pt-0 pb-0">
                        <div class="container">
                            <div class="row">
                                @forelse($jobs_related as $item)
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
                                                            <i class="px-1 fa fa-calendar-days"></i>Published {{ $item->created_at->diffForHumans() }}
                                                            @if(date('Y-m-d') > $item->deadline)
                                                                <div class="expired badge text-bg-warning">{{ __('Expired') }}</div>
                                                            @endif
                                                            <i class="ms-1 px-1 border-start fa fa-filter"></i>{{ $item->rJobCategory->name }}
                                                            <i class="ms-1 px-1 border-start fa fa-dollar-sign"></i>{{ $item->rJobSalaryRange->name }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col-md-2 pt-5 px-0">
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
                                                            <a class="icon-job-like bg-danger pt-1" href="{{ route('candidate_bookmark_add', $item->id) }}"><i class="fa fa-heart"></i></a>
                                                        @endif
                                                        
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                @empty                                
                                    <div class="text-danger">No related job found.</div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 ps-3 pe-0 float-right">
            <div class="container">
                <div class="row border">
                    <div class="col-md-12 p-0">
                        @if(date('Y-m-d') > $job_single->deadline)
                            <div class="right-item text-center text-danger py-5">
                                {{ __('The Application deadline closed.') }}
                            </div>
                        @else
                            <div class="right-item mt-4 px-4">
                                <div class="enquery-form">
                                    <form action="{{ route('job_enquery_email') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="job_title" value="{{ $job_single->title }}">
                                        <input type="hidden" name="company_email" value="{{ $job_single->rCompany->email }}">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="visitor_name" placeholder="Full Name">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="visitor_email" placeholder="Email Address">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="visitor_phone" placeholder="Phone Number">
                                        </div>
                                        <div class="mb-3">
                                            <textarea class="form-control" name="visitor_message" placeholder="Message" rows="5" style="width: 100%;" ></textarea>
                                        </div>
                                        <button type="submit" class="btn bg-warning w-100 py-2 my-3"><i class="pe-1 fa fa-email text-danger"></i>{{ __('CONTACT EMPLOYER') }}</button>
                                    </form>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                
                <!-- @if($job_single->map_code != null)
                    <div class="row border mt-4">
                    <div class="right-item">
                        <h2><i class="fas fa-file-invoice"></i> Location Map</h2>
                        <div class="location-map">
                            {!! nl2br($job_single->map_code) !!}
                        </div>
                    </div>
                    </div>
                @endif -->
                
            </div>
        </div>

    </div>
</div>


@endsection