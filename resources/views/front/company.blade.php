@extends('front.layout.app')

@section('seo_title'){{ $other_page_item->company_listing_page_title ?? __('SEO Title') }}@endsection
@section('seo_meta_description'){{ $other_page_item->job_listing_page_meta_description ?? __('SEO Meta Description') }}@endsection

@section('main_content')

@isset($company_single)
<div class="page-top-detail" style="background-image: url({{ asset('uploads/' . ($global_banner_data->banner_job_detail ?? 'banner_default.jpg')) }})"></div>
<div class="container w-75 bg-white" style="margin-top: -150px;">
    <div class="row py-5 border">
        <div class="col-md-12">
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 job job-single">
                            <div class="item d-flex justify-content-start">
                                <div class="logo job-detail-image me-4"><img src="{{ asset('uploads/' . $company_single->logo) }}"></div>
                                <div class="text mt-4">
                                    <h4 class="text-black fw-bold">{{ $company_single->company_name }}</h4>
                                    <div class="pt-2">
                                        <i class="pe-1 fa fa-location-dot"></i>{{ $company_single->rCompanyLocation->name }}
                                        <a 
                                            href="https://www.google.com/maps/search/{{ __('company')}} {{ $company_single->company_name }} {{ __('in')}} {{ $company_single->rCompanyLocation->name }}"
                                            class="btn btn-danger rounded-4 ms-2 fs-8 py-0" style="height:20px;"
                                        >
                                            {{ __('view on map')}}
                                        </a>
                                    </div>
                                    
                                    <div class="pt-3">
                                            <span>
                                                <a 
                                                    href="{{ route('candidate_apply', $company_single->id) }}"
                                                    class="btn btn-outline hover-danger rounded-1 btn-follow me-2"
                                                    style="padding-top:6px;"
                                                >
                                                    <i class="pe-2 fa fa-plus"></i>{{__('Add a review')}}
                                                </a>
                                                <a 
                                                    href="{{ route('candidate_bookmark_add', $company_single->id) }}" 
                                                    class="btn btn-outline hover-danger rounded-1 btn-follow me-2"
                                                    style="padding-top:6px;"
                                                >
                                                    <i class="fa fa-user-plus pe-2"></i>{{__('Follow')}}
                                                </a>

                                                <span class="px-2 fs-7">{{__('SOCIAL LINK:')}}</span>
                                                
                                                @if($company_single->facebook != '')
                                                    <a href="{{ $company_single->facebook }}" target="_blank"><i class="px-1 fa-brands fa-facebook fa-lg hover-color-danger" style="color:#3b5998;"></i></a>
                                                @endif
                                                @if($company_single->twitter != '')
                                                    <a href="{{ $company_single->twitter }}" target="_blank"><i class="px-1 fa-brands fa-twitter fa-lg hover-color-danger" style="color:#3ac1f1;"></i></a>
                                                @endif
                                                @if($company_single->linkedin != '')
                                                    <a href="{{ $company_single->linkedin }}" target="_blank"><i class="px-1 fa-brands fa-linkedin fa-lg hover-color-danger" style="color:#007AB9;"></i></a>
                                                @endif
                                                @if($company_single->instagram != '')
                                                    <a href="{{ $company_single->instagram }}" target="_blank"><i class="px-1 fa-brands fa-square-instagram fa-lg hover-color-danger" style="color:#f95c94"></i></a>
                                                @endif
                                            </span>
                                    </div>
                                    
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
                                            <div class="col-md-12">{{ $company_single->rCompanyIndustry->name }}</div>
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
                                            <div class="col-md-12">{{ $company_single->person_name }}</div>
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
                                            <div class="col-md-12">{{ $company_single->address }}</div>
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
                                            <div class="col-md-12">{{ $company_single->phone }}</div>
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
                                            <div class="col-md-12">{{ $company_single->founded_on }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="left-item">                                
                    <div class="py-3"><span class="fs-5 fw-bolder text-black">{{ __('Company Description') }}</span></div>
                    <p>{!! $company_single->description !!}</p>
                </div>
  
                
                <div class="left-item">
                    <div class="py-3 "><span class="fs-4 fw-bolder">{{ __('Open Positions') }}</span></div>
                    
                    <div class="job related-job pt-0 pb-0">
                        <div class="container">
                            <div class="row">

                                @forelse($jobs as $item)
                                    @php
                                        $this_company_id = $item->rCompany->id;
                                        $order_data = \App\Models\Order::where('company_id', $this_company_id)->where('currently_active', 1)->first();
                                        if(date('Y-m-d') > $order_data?->expire_date) {
                                            continue;
                                        }
                                    @endphp

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
                <form action="{{ route('company_enquery_email') }}" method="post">
                    @csrf
                    <div class="row mt-2">
                        <div class="col-md-12 p-0">
                            <span class="fs-5 fw-bolder text-black">{{ __('Contact Form') }}</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12 p-4 border">
                            <input type="hidden" name="company_email" value="{{ $company_single->email }}">
                            {{ __('User Name') }}
                            <div class="mb-3 mt-2">
                                <input type="text" class="form-control" name="visitor_name" placeholder="Enter Your Name">
                            </div>
                            {{ __('Email Address') }}
                            <div class="mb-3 mt-2">
                                <input type="text" class="form-control" name="visitor_email" placeholder="Enter Your Email Address">
                            </div>
                            {{ __('Phone Number') }}
                            <div class="mb-3 mt-2">
                                <input type="text" class="form-control" name="visitor_phone" placeholder="Enter Your Phone Number">
                            </div>
                            {{ __('Message') }}
                            <div class="mb-3 mt-2">
                                <textarea class="form-control" name="visitor_message" placeholder="Enter Your Message Here" rows="5" style="width: 100%;" ></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger w-100 py-2">{{ __('SEND NOW') }}</button>
                        </div>
                    </div>
                    
                </form>
                
                <!-- @if($company_single->map_code != null)
                    <div class="row border mt-4">
                    <div class="right-item">
                        <h2><i class="fas fa-file-invoice"></i> Location Map</h2>
                        <div class="location-map">
                            {!! nl2br($company_single->map_code) !!}
                        </div>
                    </div>
                    </div>
                @endif -->
                
            </div>
        </div>

    </div>
</div>
@endisset

@endsection