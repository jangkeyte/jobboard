@extends('front.layout.app')

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/' . $global_banner_data->banner_company_panel) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Create New Job</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content user-panel">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="card">
                    @include('company.sidebar')
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <form action="{{ route('company_jobs_create_submit') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="" class="form-label">Title *</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description *</label>
                        <textarea name="description" cols="30" rows="10" class="form-control editor">{{ old('description') }}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">Job Responsibilities</label>
                            <textarea name="responsibility" cols="30" rows="10" class="form-control editor">{{ old('responsibility') }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">Skill and Abilities</label>
                            <textarea name="skill" cols="30" rows="10" class="form-control editor">{{ old('skill') }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">Educational Quatification</label>
                            <textarea name="education" cols="30" rows="10" class="form-control editor">{{ old('education') }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">Benifits</label>
                            <textarea name="benefit" cols="30" rows="10" class="form-control editor">{{ old('benefit') }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">Deadline *</label>
                            <input type="date" class="form-control datepicker" name="deadline" value="{{ old('deadline') ? old('deadline') : date('Y-m-d') }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">Vacancy *</label>
                            <input type="number" class="form-control" name="vacancy" min="1" value="{{ old('vacancy') ? old('vacancy') : '1' }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">Job Category *</label>
                            <select name="job_category_id" class="form-control select2">
                                @foreach($job_categories as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">Job Location *</label>
                            <select name="job_location_id" class="form-control select2">
                                @foreach($job_locations as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">Job Type *</label>
                            <select name="job_type_id" class="form-control select2">
                                @foreach($job_types as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">Job Experience *</label>
                            <select name="job_experience_id" class="form-control select2">
                                @foreach($job_experiences as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">Job Gender *</label>
                            <select name="job_gender_id" class="form-control select2">
                                @foreach($job_genders as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">Job Salary Range *</label>
                            <select name="job_salary_range_id" class="form-control select2">
                                @foreach($job_salary_ranges as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Location Map</label>
                                    <textarea name="map_code" cols="30" rows="10" class="form-control editor">{{ old('map_code') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Is Featured?</label>
                                    <select name="is_featured" class="form-control select2">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Is Urgent?</label>
                                    <select name="is_urgent" class="form-control select2">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </div>
                        </div>
                    </div>
                </form>                
            </div>
        </div>
    </div>
</div>

@endsection