@extends('front.layout.app')

@section('main_content')

@include('company/templates/page_heading', array('heading_text' => __('Edit Job'), 'background_image' => $global_banner_data->banner_company_panel))

<div class="page-content user-panel">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="card">
                    @include('company.sidebar')
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <form action="{{ route('company_jobs_update') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $job_single->id }}">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="" class="form-label">{{ __('Title') }} *</label>
                            <input type="text" class="form-control" name="title" value="{{ $job_single->title }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Description') }} *</label>
                        <textarea name="description" cols="30" rows="10" class="form-control editor">{{ $job_single->description }}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">{{ __('Job Responsibilities') }}</label>
                            <textarea name="responsibility" cols="30" rows="10" class="form-control editor">{{ $job_single->responsibility }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">{{ __('Skill and Abilities') }}</label>
                            <textarea name="skill" cols="30" rows="10" class="form-control editor">{{ $job_single->skill }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">{{ __('Educational Quatification') }}</label>
                            <textarea name="education" cols="30" rows="10" class="form-control editor">{{ $job_single->education }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">{{ __('Benefits') }}</label>
                            <textarea name="benefit" cols="30" rows="10" class="form-control editor">{{ $job_single->benefit }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">{{ __('Deadline') }} *</label>
                            <input type="date" class="form-control datepicker" name="deadline" value="{{ $job_single->deadline }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">{{ __('Vacancy') }} *</label>
                            <input type="number" class="form-control" name="vacancy" min="1" value="{{ $job_single->vacancy }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">{{ __('Job Category') }} *</label>
                            <select name="job_category_id" class="form-control select2">
                                @foreach($job_categories as $item)
                                <option value="{{ $item->id }}" @if($item->id == $job_single->job_category_id) selected @endif>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">{{ __('Job Location') }} *</label>
                            <select name="job_location_id" class="form-control select2">
                                @foreach($job_locations as $item)
                                <option value="{{ $item->id }}" @if($item->id == $job_single->job_location_id) selected @endif>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">{{ __('Job Type') }} *</label>
                            <select name="job_type_id" class="form-control select2">
                                @foreach($job_types as $item)
                                <option value="{{ $item->id }}" @if($item->id == $job_single->job_type_id) selected @endif>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">{{ __('Job Experience') }} *</label>
                            <select name="job_experience_id" class="form-control select2">
                                @foreach($job_experiences as $item)
                                <option value="{{ $item->id }}" @if($item->id == $job_single->job_experience_id) selected @endif>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">{{ __('Job Gender') }} *</label>
                            <select name="job_gender_id" class="form-control select2">
                                @foreach($job_genders as $item)
                                <option value="{{ $item->id }}" @if($item->id == $job_single->job_gender_id) selected @endif>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">{{ __('Job Salary Range') }} *</label>
                            <select name="job_salary_range_id" class="form-control select2">
                                @foreach($job_salary_ranges as $item)
                                <option value="{{ $item->id }}" @if($item->id == $job_single->job_salary_range_id) selected @endif>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">{{ __('Location Map') }}</label>
                                    <textarea name="map_code" cols="30" rows="10" class="form-control editor">{{ $job_single->map_code }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">{{ __('Is Featured') }}?</label>
                                    <select name="is_featured" class="form-control select2">
                                        <option value="0" @if($job_single->is_featured == 0) selected @endif>{{ __('No') }}</option>
                                        <option value="1" @if($job_single->is_featured == 1) selected @endif>{{ __('Yes') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">{{ __('Is Urgent') }}?</label>
                                    <select name="is_urgent" class="form-control select2">
                                        <option value="0" @if($job_single->is_urgent == 0) selected @endif>{{ __('No') }}</option>
                                        <option value="1" @if($job_single->is_urgent == 1) selected @endif>{{ __('Yes') }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <input type="submit" class="btn btn-primary" value="{{ __('Submit') }}">
                            </div>
                        </div>
                    </div>
                </form>                
            </div>
        </div>
    </div>
</div>

@endsection