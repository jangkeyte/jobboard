<form action="{{ url('company-listing') }}" method="get">
    <div class="accordion" id="accordion">
        <div class="accordion-item shadow mt-3"> 
            <h2 class="accordion-header">
            <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#Company_Title" aria-expanded="true" aria-controls="Company_Title">
                {{ __('Company Title') }}
            </button>
            </h2>
            <div id="Company_Title" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <div class="job-filter fs-7">
                        <div class="widget">
                            <input type="text" class="form-control fs-7" name="title" value="{{  $form_data->name }}" placeholder="{{ __('Company Name') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-item shadow mt-3 ">
            <h2 class="accordion-header">
            <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#CompanyIndustry" aria-expanded="true" aria-controls="CompanyIndustry">
                {{ __('Company Industry') }}
            </button>
            </h2>
            <div id="CompanyIndustry" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <div class="job-filter fs-7">
                        <div>
                            <select name="category" class="form-control select2 fs-7">
                                <option value="">{{ __('Company Industry') }}</option>
                                @foreach($company_industries as $item)
                                <option value="{{ $item->id }}" @if($form_data->company_industry_id == $item->id) selected @endif>{{  $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-item shadow mt-3 ">
            <h2 class="accordion-header">
            <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#company_locations" aria-expanded="true" aria-controls="company_locations">
                {{ __('Company Location') }}
            </button>
            </h2>
            <div id="company_locations" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <div class="job-filter fs-7">
                        <div class="widget">
                            <select name="location" class="form-control select2 fs-7">
                                <option value="">{{ __('Company Location') }}</option>
                                @foreach($company_locations as $item)
                                <option value="{{ $item->id }}" @if($form_data->company_location_id == $item->id) selected @endif>{{  $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-item shadow mt-3 ">
            <h2 class="accordion-header">
            <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#founded_on" aria-expanded="true" aria-controls="founded_on">
                {{ __('Founded On') }}
            </button>
            </h2>
            <div id="founded_on" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <div class="job-filter fs-7">
                        <div class="widget">
                            <select name="location" class="form-control select2 fs-7">
                                <option value="">{{ __('Founded On') }}</option>
                                @for($i = 1990; $i <= date('Y'); $i++)
                                <option value="{{ $i }}" @if($form_data->founded_on == $i) selected @endif>{{  $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-item shadow mt-3 ">
            <h2 class="accordion-header">
            <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#company_sizes" aria-expanded="true" aria-controls="company_sizes">
                {{ __('Company Size') }}
            </button>
            </h2>
            <div id="company_sizes" class="accordion-collapse collapse">
                <div class="accordion-body fs-7">
                    @foreach($company_sizes as $item)
                        <div class="form-check py-1">
                            <input class="form-check-input" type="radio" name="company_sizes" id="company_sizes{{ $item->id }}" value="{{ $item->id }}" @if($form_data->company_size_id == $item->id) checked @endif>
                            <label class="form-check-label" for="company_sizes{{ $item->id }}">
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

@if($advertisement_data && $advertisement_data->company_listing_ad_status == 'Show')
    <div class="advertisement">
        @if($advertisement_data->company_listing_ad_url == null)
            <img src="{{ asset('uploads/' . $advertisement_data->company_listing_ad) }}" alt="" class="w-100">
        @else
            <a href="{{ $advertisement_data->company_listing_ad_url }}" target="_blank"><img src="{{ asset('uploads/' . $advertisement_data->company_listing_ad) }}" alt="" class="w-100"></a>
        @endif
    </div>
@endif