@extends('admin.layout.app')

@section('heading', 'Advertisement')

@section('main_content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin_advertisement_update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-primary mb-4">
                                    <div class="card-header">
                                        <div class="card-title">{{ __('Job Listing Ad') }}</div>
                                        <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group mb-4">
                                            <label>{{ __('Existing Job Listing Ad') }}</label>
                                            <div><img src="{{ asset('uploads/' . ($advertisement_data->job_listing_ad ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                                        </div>               
                                        <div class="form-group mb-4">
                                            <label>{{ __('Change Job Listing Ad') }}</label>
                                            <div class="input-group mb-3">
                                                <input type="file" class="form-control" name="job_listing_ad">
                                                <label class="input-group-text">{{ __('Upload') }}</label>
                                            </div>
                                        </div>  
                                        <div class="form-group mb-3">
                                            <label>{{ __('Url') }} *</label>
                                            <input type="text" class="form-control" name="job_listing_ad_url" value="{{ $advertisement_data?->job_listing_ad_url }}">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label>{{ __('Status') }}</label>
                                            <select name="job_listing_ad_status" class="form-control select2">
                                                <option value="Show" @if($advertisement_data?->job_listing_ad_status == 'Show') selected @endif)>{{ __('Show') }}</option>
                                                <option value="Hide" @if($advertisement_data?->job_listing_ad_status == 'Hide') selected @endif>{{ __('Hide') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-primary mb-4">
                                    <div class="card-header">
                                        <div class="card-title">{{ __('Company Listing Ad') }}</div>
                                        <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group mb-4">
                                            <label>{{ __('Existing Company Listing Ad') }}</label>
                                            <div><img src="{{ asset('uploads/' . ($advertisement_data->company_listing_ad ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                                        </div>               
                                        <div class="form-group mb-4">
                                            <label>{{ __('Change Company Listing Ad') }}</label>
                                            <div class="input-group mb-3">
                                                <input type="file" class="form-control" name="company_listing_ad">
                                                <label class="input-group-text">{{ __('Upload') }}</label>
                                            </div>
                                        </div>  
                                        <div class="form-group mb-3">
                                            <label>{{ __('Url') }} *</label>
                                            <input type="text" class="form-control" name="company_listing_ad_url" value="{{ $advertisement_data?->company_listing_ad_url }}">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label>{{ __('Status') }}</label>
                                            <select name="company_listing_ad_status" class="form-control select2">
                                                <option value="Show" @if($advertisement_data?->company_listing_ad_status == 'Show') selected @endif)>{{ __('Show') }}</option>
                                                <option value="Hide" @if($advertisement_data?->company_listing_ad_status == 'Hide') selected @endif>{{ __('Hide') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection