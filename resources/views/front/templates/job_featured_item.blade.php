<div class="careerfy-table-layer">
    <div class="careerfy-table-row">
        <figure>
            <a href="{{ route('job', $item->id) }}" data-job-id="{{ $item->id }}" class="">
                @include('front/templates/image', array('image' => $item->rCompany->logo, 'name' => $item->rCompany->company_name))
            </a>
        </figure>
        <div class="careerfy-featured-listing-text">
            <h2 class="" data-job-id="{{ $item->id }}">
                <a href="{{ route('job', $item->id) }}" title="{{ $item->title }}">{{ $item->title }}</a>
            </h2>
            @if(!Auth::guard('company')->check())
            <div class="like-btn careerfy-like-list">
                @if(Auth::guard('candidate')->check())
                    @php
                        $count = \App\Models\CandidateBookmark::where('candidate_id', Auth::guard('candidate')->user()->id)->where('job_id', $item->id)->count();
                        if($count > 0) {
                            $bookmark_status = 'active';
                        } else {
                            $bookmark_status = '';
                        }
                    @endphp
                @else
                    @php $bookmark_status = ''; @endphp
                @endif
                <a href="{{ route('candidate_bookmark_add', $item->id) }}"><i class="fas fa-bookmark {{ $bookmark_status }}" class="shortlist jobsearch-open-signin-tab careerfy-like-list"></i></a>                    
            </div>
            @endif
            <time datetime="3 December, 2017 12:38 pm">{{ __('Published') }} {{ $item->created_at->diffForHumans() }} </time>
            <div class="careerfy-featured-listing-options">
                <ul>
                    <li><i class="careerfy-icon careerfy-maps-and-flags"></i> {{ $item->rJobLocation->name }}</li>                        
                    <li>
                        <i class="careerfy-icon careerfy-filter-tool-black-shape"></i> 
                        <a href="/jobs-listing?category={{ $item->rJobCategory->id }}" class="">{{ $item->rJobCategory->name }}</a>
                    </li>
                </ul>
                <a href="" class="careerfy-option-btn" style="background-color: #186fc9 !important; color: #ffffff !important;"> {{ $item->rJobType->name }} </a>
            </div>
            <div class="jobsearch-list-excerpt">
                <p>Making it look like readable English. Many desktop publishing packages</p>
            </div>
        </div>
    </div>
</div>
