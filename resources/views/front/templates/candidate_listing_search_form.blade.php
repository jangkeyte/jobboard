<form action="{{ url('candidate-listing') }}" method="get">
    <div class="accordion" id="accordion">
        <div class="accordion-item shadow mt-3"> 
            <h2 class="accordion-header">
            <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#Candidate_Title" aria-expanded="true" aria-controls="Candidate_Title">
                {{ __('Candidate Skill') }}
            </button>
            </h2>
            <div id="Candidate_Skill" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <div class="job-filter fs-7">
                        <div class="widget">
                            <input type="text" class="form-control fs-7" name="title" value="{{  $form_data->name }}" placeholder="{{ __('Skill Name') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-item shadow mt-3 ">
            <h2 class="accordion-header">
            <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#CandidateJobCategory" aria-expanded="true" aria-controls="CandidateJobCategory">
                {{ __('Candidate Sector') }}
            </button>
            </h2>
            <div id="CandidateJobCategory" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <div class="job-filter fs-7">
                        @foreach($candidate_sectors as $item)
                            <div class="form-check py-1">
                                <input class="form-check-input" type="radio" name="candidate_sectors" id="candidate_sectors{{ $item->id }}" value="{{ $item->id }}" @if($form_data->sector_id == $item->id) checked @endif>
                                <label class="form-check-label" for="candidate_sectors{{ $item->id }}">
                                    {{  $item->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="filter-button mt-3">
        <button type="submit" class="btn btn-danger w-100 rounded-0 py-2">
            <i class="fas fa-search pe-2"></i> {{ $home_page_data->search ?? __('Filter') }}
        </button>
    </div>

</form>

@if($advertisement_data && $advertisement_data->candidate_listing_ad_status == 'Show')
    <div class="advertisement">
        @if($advertisement_data->candidate_listing_ad_url == null)
            <img src="{{ asset('uploads/' . $advertisement_data->candidate_listing_ad) }}" alt="" class="w-100">
        @else
            <a href="{{ $advertisement_data->candidate_listing_ad_url }}" target="_blank"><img src="{{ asset('uploads/' . $advertisement_data->candidate_listing_ad) }}" alt="" class="w-100"></a>
        @endif
    </div>
@endif