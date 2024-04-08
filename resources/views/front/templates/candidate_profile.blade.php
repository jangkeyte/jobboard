<div class="jobsearch_side_box jobsearch_box_candidate_info position-relative">
    <div class="jobsearch_candidate_info">
        <span class="promotepof-badge position-absolute top-0 end-0"><i class="fa fa-star" title="Featured"></i></span>
        <div class="urgntpkg-candv2 position-absolute top-0"><span>urgent</span></div>
        <figure>
            @include('front/templates/image', ['image' => $candidate_single->photo, 'name' => $candidate_single->name])
        </figure>
        <h2><a>{{ $candidate_single->name }}</a></h2>
        <p>{{ $candidate_single->designation }}</p>
        <p>Phone: {{ $candidate_single->phone }}</p>
        <p>Sector: {{ $candidate_single->rCandidateSector->name }}</p>
        <p>(Age: {{  $candidate_single->date_of_birth->format('Y-m-d H:i:s')->diff(date('Y-m-d H:i:s'))->y; }} years)</p> <span>{{ $candidate_single->address }}</span>
        <small>Member Since, 4 December, 2017</small>
        <ul>
            <li>
                <a href="https://www.facebook.com/envato" data-original-title="facebook"
                    class="jobsearch-icon jobsearch-facebook-logo"></a>
            </li>
            <li>
                <a href="https://www.twitter%20.com/envato" target="_blank" data-original-title="twitter"
                    class="jobsearch-icon jobsearch-twitter-logo"></a>
            </li>
            <li>
                <a href="https://www.linkedin.com/envato" target="_blank" data-original-title="linkedin"
                    class="jobsearch-icon jobsearch-linkedin-button"></a>
            </li>
            <li>
                <a href="https://www.dribbble.com/envato" target="_blank" data-original-title="dribbble"
                    class="jobsearch-icon jobsearch-dribbble-logo"></a>
            </li>
        </ul>
        <a href="javascript:void(0);" class="jobsearch-candidate-default-btn jobsearch-open-signin-tab"><i
                class="jobsearch-icon jobsearch-add-list"></i> Save Candidate </a>
        <div class="jobsearch-whatsapp-msgcon jobsearch_whatsap_view_1">
            <a href="https://wa.me/0979380948?text=Hi" target="_blank">
                <i class="fa fa-whatsapp"></i>
                <small>WhatsApp</small>
            </a>
        </div>
        <div class="candinvite-btn-con">
            <a href="javascript:void(0);" class="jobsearch-candinvite-btn jobsearch-open-signin-tab">Invite</a>
        </div>
    </div>
</div>