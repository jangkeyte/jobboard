<form action="{{ url('job-listing') }}" method="get">
    <div class="accordion" id="accordion">
        <div class="accordion-item shadow mt-3"> 
            <h2 class="accordion-header">
            <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#JobTitle" aria-expanded="true" aria-controls="JobTitle">
                {{ __('Job Title') }}
            </button>
            </h2>
            <div id="JobTitle" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <div class="job-filter fs-7">
                        <div class="widget">
                            <input type="text" class="form-control fs-7" name="title" value="{{ $form_data->title }}" placeholder="{{ __('Job Title') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item shadow mt-3 ">
            <h2 class="accordion-header">
            <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#JobCategory" aria-expanded="true" aria-controls="JobCategory">
                {{ __('Job Category') }}
            </button>
            </h2>
            <div id="JobCategory" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <div class="job-filter fs-7">
                        <div>
                            <select name="category" class="form-control select2 fs-7">
                                <option value="">{{ __('Job Category') }}</option>
                                @foreach($job_categories as $item)
                                <option value="{{ $item->id }}" @if($form_data->job_category == $item->id) selected @endif>{{  $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item shadow mt-3 ">
            <h2 class="accordion-header">
            <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#JobLocation" aria-expanded="true" aria-controls="JobLocation">
                {{ __('Job Location') }}
            </button>
            </h2>
            <div id="JobLocation" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <div class="job-filter fs-7">
                        <div class="widget">
                            <select name="location" class="form-control select2 fs-7">
                                <option value="">{{ __('Job Location') }}</option>
                                @foreach($job_locations as $item)
                                <option value="{{ $item->id }}" @if($form_data->job_location_id == $item->id) selected @endif>{{  $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-item shadow mt-3 ">
            <h2 class="accordion-header">
            <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#JobType" aria-expanded="true" aria-controls="JobType">
                {{ __('Job Type') }}
            </button>
            </h2>
            <div id="JobType" class="accordion-collapse collapse">
                <div class="accordion-body fs-7">
                    @foreach($job_types as $item)
                        <div class="form-check py-1">
                            <input class="form-check-input" type="radio" name="job_types" id="job_types{{ $item->id }}" value="{{ $item->id }}" @if($form_data->job_salary_range_id == $item->id) checked @endif>
                            <label class="form-check-label" for="job_types{{ $item->id }}">
                                {{  $item->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="accordion-item shadow mt-3 ">
            <h2 class="accordion-header">
            <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#Experience" aria-expanded="true" aria-controls="Experience">
                {{ __('Experience') }}
            </button>
            </h2>
            <div id="Experience" class="accordion-collapse collapse">
                <div class="accordion-body fs-7">
                    @foreach($job_experiences as $item)
                        <div class="form-check py-1">
                            <input class="form-check-input" type="radio" name="job_experiences" id="job_experiences{{ $item->id }}" value="{{ $item->id }}" @if($form_data->job_salary_range_id == $item->id) checked @endif>
                            <label class="form-check-label" for="job_experiences{{ $item->id }}">
                                {{  $item->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="accordion-item shadow mt-3 ">
            <h2 class="accordion-header">
            <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#Gender" aria-expanded="true" aria-controls="Gender">
                {{ __('Gender') }}
            </button>
            </h2>
            <div id="Gender" class="accordion-collapse collapse">
                <div class="accordion-body fs-7">
                    @foreach($job_genders as $item)
                        <div class="form-check py-1">
                            <input class="form-check-input" type="radio" name="job_genders" id="job_genders{{ $item->id }}" value="{{ $item->id }}" @if($form_data->job_salary_range_id == $item->id) checked @endif>
                            <label class="form-check-label" for="job_genders{{ $item->id }}">
                                {{  $item->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="accordion-item shadow mt-3 ">
            <h2 class="accordion-header">
            <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#SalaryRange" aria-expanded="true" aria-controls="SalaryRange">
                {{ __('Salary Range') }}
            </button>
            </h2>
            <div id="SalaryRange" class="accordion-collapse collapse">
                <div class="accordion-body fs-7">
                    @foreach($job_salary_ranges as $item)
                        <div class="form-check py-1">
                            <input class="form-check-input" type="radio" name="job_salary_ranges" id="job_salary{{ $item->id }}" value="{{ $item->id }}" @if($form_data->job_salary_range_id == $item->id) checked @endif>
                            <label class="form-check-label" for="job_salary{{ $item->id }}">
                                {{  $item->name }}
                            </label>
                        </div>
                    @endforeach
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

@if($advertisement_data && $advertisement_data->job_listing_ad_status == 'Show')
<div class="advertisement">                            
    @if($advertisement_data->job_listing_ad_url == null)
        <img src="{{ asset('uploads/' . $advertisement_data->job_listing_ad) }}" alt="" class="w-100">
    @else
        <a href="{{ $advertisement_data->job_listing_ad_url }}" target="_blank"><img src="{{ asset('uploads/' . $advertisement_data->job_listing_ad) }}" alt="" class="w-100"></a>
    @endif
</div>
@endif
