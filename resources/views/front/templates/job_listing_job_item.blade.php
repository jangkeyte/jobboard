
<div class="d-flex">
    <div class="p-2">
        <a href="{{ route('job', $item->id) }}" style="width:58px; height:58px; display: block;">
            @include('front/templates/image', array('image' => $item->rCompany->logo, 'name' => $item->rCompany->company_name))
        </a>
    </div>
    <div class="p-2 flex-grow-1">
        <div>
            <h5><a class="fw-bold" href="{{ route('job', $item->id) }}">{{ $item->title }}</a></h5>
            <ul class="list-unstyled fs-7">
                <li>
                        <a class ="text-danger" href="{{ route('company', $item->company_id) }}">{{ $item->rCompany->company_name }}</a>
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
                    <i class="px-1 fa fa-filter"></i>{{ $item->rJobCategory->name }}
                    <i class="ms-1 px-1 border-start fa fa-dollar-sign"></i>{{ $item->rJobSalaryRange->name }}
                </li>
            </ul>
        </div>
    </div>

    <div class="p-2">
        <ul class="list-unstyled fs-7">
            <li>
                <button type="submit" class="btn @switch($item->rJobType->id) 
                    @case(1) btn-fulltime @break 
                    @case(2) btn-parttime @break 
                    @case(3) btn-freelance @break 
                    @case(4) btn-temporary @break 
                    @case(5) btn-internship @break
                    @default btn-fulltime @break
                @endswitch rounded-0 btn-job-type">{{ $item->rJobType->name }}</button>
                
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
                    <a class="icon-job-like fa-solid fa-heart bg-danger" href="{{ route('candidate_bookmark_add', $item->id) }}"></a>
                @endif
                
            </li>
        </ul>

    </div>
</div>
