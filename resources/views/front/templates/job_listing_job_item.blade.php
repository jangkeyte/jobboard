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
                        <a class="icon-job-like fa-solid fa-heart bg-danger" href="{{ route('candidate_bookmark_add', $item->id) }}"><i class="fa fa-heart-o"></i></a>
                    @endif
                    
                </li>
            </ul>

        </div>
    </div>
</div>
