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
                                <h2>{{ __('Job Listing Ad') }}</h2>
                                <div class="form-group mb-4">
                                    <label class="form-control">{{ __('Existing Job Listing Ad') }}</label>
                                    <div>
                                        <img src="{{ asset('uploads/' . ($advertisement_data->job_listing_ad ?? 'background_default.jpg') ) }}" alt="" class="w-25">
                                    </div>
                                </div>               
                                <div class="form-group mb-4">
                                    <label class="form-control">{{ __('Change Job Listing Ad') }}</label>
                                    <div>
                                        <input type="file" class="form-control mt_10" name="job_listing_ad">
                                    </div>
                                </div>        
                                <div class="form-group mb-3">
                                    <label>{{ __('Url') }} *</label>
                                    <input type="text" class="form-control" name="job_listing_ad_url" value="{{ $advertisement_data->job_listing_ad_url }}">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="form-control">{{ __('Status') }}</label>
                                    <select name="job_listing_ad_status" class="form-control select2">
                                        <option value="Show" @if($advertisement_data->job_listing_ad_status == 'Show') selected @endif)>{{ __('Show') }}</option>
                                        <option value="Hide" @if($advertisement_data->job_listing_ad_status == 'Hide') selected @endif>{{ __('Hide') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h2>{{ __('Company Listing Ad') }}</h2>
                                <div class="form-group mb-4">
                                    <label class="form-control">{{ __('Existing Company Listing Ad') }}</label>
                                    <div>
                                        <img src="{{ asset('uploads/' . ($advertisement_data->company_listing_ad ?? 'background_default.jpg') ) }}" alt="" class="w-25">
                                    </div>
                                </div>               
                                <div class="form-group mb-4">
                                    <label class="form-control">{{ __('Change Company Listing Ad') }}</label>
                                    <div>
                                        <input type="file" class="form-control mt_10" name="company_listing_ad">
                                    </div>
                                </div>       
                                <div class="form-group mb-3">
                                    <label>{{ __('Url') }} *</label>
                                    <input type="text" class="form-control" name="company_listing_ad_url" value="{{ $advertisement_data->company_listing_ad_url }}">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="form-control">{{ __('Status') }}</label>
                                    <select name="company_listing_ad_status" class="form-control select2">
                                        <option value="Show" @if($advertisement_data->company_listing_ad_status == 'Show') selected @endif)>{{ __('Show') }}</option>
                                        <option value="Hide" @if($advertisement_data->company_listing_ad_status == 'Hide') selected @endif>{{ __('Hide') }}</option>
                                    </select>
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