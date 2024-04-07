<div class="careerfy-refejobs-list-inner">
    @isset($item->is_urgent)
    <span class="urgntpkg-jobv1">{{ __('urgent') }}</span>
    @endisset
    <figure>
        <a href="{{ route('company_candidate_detail', $item->id) }}">
            @include('front/templates/image', ['image' => $item->photo, 'name' => $item->name])
        </a>
        <figcaption>
            <h2 class="jobsearch-candidate-default-left">
                <a href="{{ route('company_candidate_detail', $item->id) }}">{{ $item->name }}</a>
                @isset($item->is_expert)
                <i class="fa-solid fa-circle-check text-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="{{ __('Expert') }}"></i>
                @endisset
            </h2>
            <ul class="d-inline">
                <li>{{ $item->designation }}</li>
                @isset($item->state)
                <li> | <i class="fa fa-map-marker"></i> {{ $item->state }} </li>
                @endisset
                @isset($item->rCandidateSector->name)
                <li> | <i class="fa-solid fa-layer-group"></i> 
                    <a class="">{{ $item->rCandidateSector->name }} </a>
                </li>
                @endisset
            </ul>
        </figcaption>
    </figure>
    
    <a href="{{ route('company_candidate_detail', $item->id) }}"
        class="btn btn-light btn-sm text-danger border-danger hover-danger"><span>
            <i class="fa-solid fa-person-circle-plus"></i> {{ __('Save Candidate') }}</span></a>
</div>

{{-- <li class="row">
    <div class="col-md-2">
        <span class="promotepof-badge"><i class="fa fa-star" title="Featured"></i></span>
        <div class="urgntpkg-candv2"><span>{{ __('urgent') }}</span></div>
        <figure>
            <a href="{{ route('company_candidate_detail', $item->id) }}">
                @include('front/templates/image', array('image' => $item->photo, 'name' => $item->name))
            </a> 
        </figure>
    </div>
    <div class="col-md-10">
        <div class="jobsearch-candidate-default-text">
            <div class="jobsearch-candidate-default-left">
                <h2 class="jobsearch-pst-title">
                    <a href="{{ route('company_candidate_detail', $item->id) }}">
                        {{ $item->name }} </a>
                    <i class="jobsearch-icon jobsearch-check-mark cand-profile-status-tooltip" title=""
                        style="color: #40d184;" data-original-title="Expert"></i>
                </h2>
                <ul>
                    <li>{{ $item->designation }}</li>
                    <li>
                        <i class="fa fa-map-marker"></i> {{ $item->city ?? '' }}
                    </li>
                    <li><i class="jobsearch-icon jobsearch-filter-tool-black-shape"></i> 
                        <a class="">{{ $item->rCandidateSection->name ?? '' }} </a>
                    </li>
                </ul>
            </div>
            <a href="javascript:void(0);" class="jobsearch-candidate-default-btn jobsearch-open-signin-tab"><i
                    class="jobsearch-icon jobsearch-add-list"></i> {{ __('Save Candidate') }} </a>
        </div>
    </div>
</li> --}}
