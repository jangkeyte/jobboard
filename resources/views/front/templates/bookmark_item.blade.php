@if(!Auth::guard('company')->check())
<div class="like-btn careerfy-like-list">
    @if(Auth::guard('candidate')->check())
        @php
            $count = \App\Models\CandidateBookmark::where('candidate_id', Auth::guard('candidate')->user()->id)->where('job_id', $id)->count();
            if($count > 0) {
                $bookmark_status = 'active';
            } else {
                $bookmark_status = '';
            }
        @endphp
    @else
        @php $bookmark_status = ''; @endphp
    @endif
    <a @if(Auth::guard('candidate')->check()) href="{{ route('candidate_bookmark_add', $id) }}" @else href="#loginModal" data-bs-toggle="modal" data-bs-target="#loginModal" @endif><i class="fas fa-bookmark {{ $bookmark_status }}" class="shortlist jobsearch-open-signin-tab careerfy-like-list"></i></a>                    
</div>
@endif