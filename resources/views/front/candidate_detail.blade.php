@extends('front.layout.app')

@section('main_content')

@isset($candidate_single)

<div class="page-top-detail" style="background-image: url({{ asset('uploads/' . ($global_banner_data->banner_job_detail ?? 'banner_default.jpg')) }})"></div>
<div class="container w-75 bg-white" style="margin-top: -150px;">
    <div class="row mt-4">
        
        <div class="col-md-4 ps-3 pe-0 float-right">
            <div class="container">
                @include('front/templates/candidate_profile')
                {{--
                <form action="{{ route('candidate_enquery_email') }}" method="post">
                    @csrf
                    <div class="row mt-2">
                        <div class="col-md-12 p-0">
                            <span class="fs-5 fw-bolder text-black">{{ __('Contact Form') }}</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12 p-4 border">
                            <input type="hidden" name="candidate_email" value="{{ $candidate_single->email }}">
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
                --}}                
            </div>
        </div>

        <div class="col-md-8 pe-3 ps-0 float-left">
            @include('front/templates/candidate_profile_detail')
            {{--
            <div class="job-result pt-4 pb-5 px-4 border">
                <div class="left-item">
                    <div class="py-3"><span class="fs-5 fw-bolder text-black">{{ __('Job Detail') }}</span></div>
                    <div class="container">

                        <div class="row mt-3">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-3"><i class="pe-2 fa fa-calendar-days fs-1 text-danger"></i></div>
                                    <div class="col-md-9 px-0">
                                        <div class="row">
                                            <div class="col-md-12">{{__('Founded Since')}}</div>
                                            <div class="col-md-12">{{ $company_single->founded_on }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-3"><i class="pe-2 fa fa-folder fs-1 text-danger"></i></div>
                                    <div class="col-md-9 pe-0">
                                        <div class="row">
                                            <div class="col-md-12">{{__('Sectors')}}</div>
                                            <div class="col-md-12">{{ $company_single->rCompanyIndustry->name }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-3"><i class="pe-2 fa fa-briefcase fs-1 text-danger"></i></div>
                                    <div class="col-md-9 px-0">
                                        <div class="row">
                                            <div class="col-md-12">{{__('Posted Jobs')}}</div>
                                            <div class="col-md-12">{{ $jobs->count() }}</div>
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
                                                        @include('front/templates/image', array('image' => $item->rCompany->logo, 'name' => $item->rCompany->company_name))
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-9 pt-3">
                                                <div>
                                                    <h5><a class="fw-bold" href="{{ route('job', $item->id) }}">{{ $item->title }}</a></h5>
                                                    <ul class="list-unstyled fs-7">
                                                        <li>
                                                                <a class ="text-danger" href="{{ route('company', $item->rCompany->id) }}">{{ '@ ' . $item->rCompany->company_name }}</a>
                                                                <i class="ms-1 px-1 border-start fa fa-location-dot"></i><a href="{{ url('/job-listing?location=' . $item->rJobLocation->id)}}" title="{{ __('Find job by location in ') . $item->rJobLocation->name }}">{{ $item->rJobLocation->name }}</a>
                                                                @if($item->is_featured == 1)<div class="featured badge text-bg-primary">{{ __('Featured') }}</div> @endif
                                                                @if($item->is_urgent == 1)<div class="urgent badge text-bg-danger">{{ __('Urgent') }}</div> @endif
                                                        </li>
                                                        <li>
                                                            <i class="px-1 fa fa-calendar-days"></i>Published {{ $item->created_at->diffForHumans() }}
                                                            @if(date('Y-m-d') > $item->deadline)
                                                                <div class="expired badge text-bg-warning">{{ __('Expired') }}</div>
                                                            @endif
                                                            <i class="ms-1 px-1 border-start fa fa-filter"></i><a href="{{ url('/job-listing?category=' . $item->rJobCategory->id)}}" title="{{ __('Find job by category of ') . $item->rJobCategory->name }}">{{ $item->rJobCategory->name }}</a>
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
            --}}
        </div>

    </div>
</div>
@endisset

@endsection