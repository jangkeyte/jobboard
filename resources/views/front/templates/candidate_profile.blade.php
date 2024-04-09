<div class="jobsearch_side_box jobsearch_box_candidate_info position-relative">
    <div class="jobsearch_candidate_info">
        <span class="promotepof-badge position-absolute top-0 end-0"><i class="fa fa-star" title="{{ __('Featured') }}"></i></span>
        <div class="urgntpkg-candv2 position-absolute top-0"><span>{{ __('urgent') }}</span></div>
        <figure>
            @include('front/templates/image', ['image' => $candidate_single->photo, 'name' => $candidate_single->name])
        </figure>
        <h2><a>{{ $candidate_single->name }}</a></h2>
        <p>{{ $candidate_single->designation }}</p>
        <p>{{ __('Phone') }}: {{ $candidate_single->phone }}</p>
        <p>{{ __('Sector') }}: {{ $candidate_single->rCandidateSector->name }}</p>
        <p>({{ __('Age') }}: {{ \Carbon\Carbon::parse($candidate_single->date_of_birth)->age }} {{ __('years') }})</p> <span>{{ $candidate_single->address }}</span>
        <small>{{ __('Member Since') }}, {{ $candidate_single->created_at }}</small>
        <ul>
            <li><a href="{{ $candidate_single->facebook }}"><i class="px-2 fs-4 fa-brands fa-facebook-f fa-lg hover-color-danger"></i></a></li>
            <li><a href="{{ $candidate_single->twitter }}"><i class="px-2 fs-4 fa-brands fa-twitter fa-lg hover-color-danger"></i></a></li>
            <li><a href="{{ $candidate_single->pinterest }}"><i class="px-2 fs-4 fa-brands fa-google-plus fa-lg hover-color-danger"></i></a></li>
            <li><a href="{{ $candidate_single->linkedin }}"><i class="px-2 fs-4 fa-brands fa-linkedin fa-lg hover-color-danger"></i></a></li>                    
        </ul>
        <!--
        <a href="javascript:void(0);" class="jobsearch-candidate-default-btn jobsearch-open-signin-tab">
            <i class="jobsearch-icon jobsearch-add-list"></i> Save Candidate </a>
        <div class="jobsearch-whatsapp-msgcon jobsearch_whatsap_view_1">
            <a href="https://wa.me/0979380948?text=Hi" target="_blank">
                <i class="fa fa-whatsapp"></i>
                <small>WhatsApp</small>
            </a>
        </div>
        -->
    </div>
</div>
