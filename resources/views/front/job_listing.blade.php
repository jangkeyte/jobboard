@extends('front.layout.app')

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/banner.jpg') }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ __('Jobs Listing') }}</h2>
            </div>
        </div>
    </div>
</div>
<div class="job-result">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="job-filter">
                    <form action="{{ url('job-listing') }}" method="get">
                        <div class="widget">
                            <h2>{{ __('Job Title') }}</h2>
                            <input type="text" class="form-control" name="title" value="{{  $form_title }}" placeholder="{{ __('Job Title') }}">
                        </div>
                        <div class="widget">
                            <h2>{{ __('Job Category') }}</h2>
                            <select name="category" class="form-control select2">
                                <option value="">{{ __('Job Category') }}</option>
                                @foreach($job_categories as $item)
                                <option value="{{ $item->id }}" @if($form_category == $item->id) selected @endif>{{  $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="widget">
                            <h2>{{ __('Job Location') }}</h2>
                            <select name="location" class="form-control select2">
                                <option value="">{{ __('Job Location') }}</option>
                                @foreach($job_locations as $item)
                                <option value="{{ $item->id }}" @if($form_location == $item->id) selected @endif>{{  $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="widget">
                            <h2>{{ __('Job Type') }}</h2>
                            <select name="type" class="form-control select2">
                                <option value="">{{ __('Job Type') }}</option>
                                @foreach($job_types as $item)
                                <option value="{{ $item->id }}" @if($form_type == $item->id) selected @endif>{{  $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="widget">
                            <h2>{{ __('Experience') }}</h2>
                            <select name="experience" class="form-control select2">
                                <option value="">{{ __('Experience') }}</option>
                                @foreach($job_experiences as $item)
                                <option value="{{ $item->id }}" @if($form_experience == $item->id) selected @endif>{{  $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="widget">
                            <h2>{{ __('Gender') }}</h2>
                            <select name="gender" class="form-control select2">
                                <option value="">{{ __('Gender') }}</option>
                                @foreach($job_genders as $item)
                                <option value="{{ $item->id }}" @if($form_gender == $item->id) selected @endif>{{  $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="widget">
                            <h2>{{ __('Salary Range') }}</h2>
                            <select name="salary_range" class="form-control select2">
                                <option value="">{{ __('Salary Range') }}</option>
                                @foreach($job_salary_ranges as $item)
                                <option value="{{ $item->id }}" @if($form_salary_range == $item->id) selected @endif>{{  $item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="filter-button">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fas fa-search"></i> {{ $home_page_data->search ?? __('Filter') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-9">
                <div class="job">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="search-result-header">
                                    <i class="fas fa-search"></i> {{ __('Search Result for Job Listing') }}
                                </div>
                            </div>
                            @if(!$jobs->count())
                                <div class="text-danger">{{ __('No result found') }}</div>
                            @else
                                @foreach($jobs as $item)
                                    <div class="col-md-12">
                                        <div class="item d-flex justify-content-start">
                                            <div class="logo">
                                                <img src="{{ asset('uploads/' . $item->rCompany->logo) }}" alt="{{ $item->rCompany->company_name }}">
                                            </div>
                                            <div class="text">
                                                <h3>
                                                    <a href="{{ route('job', $item->id) }}">{{ $item->title }}, {{ $item->rCompany->company_name }}</a>
                                                </h3>
                                                <div class="detail-1 d-flex justify-content-start">
                                                    <div class="category">{{ $item->rJobCategory->name }}</div>
                                                    <div class="location">{{ $item->rJobLocation->name }}</div>
                                                </div>
                                                <div class="detail-2 d-flex-justify-content-start">
                                                    <div class="date">{{ $item->created_at->diffForHumans() }}</div>
                                                    <div class="budget">{{ $item->rJobSalaryRange->name }}</div>
                                                    @if(date('Y-m-d') > $item->deadline)
                                                    <div class="expired badge text-bg-warning">{{ __('Expired') }}</div>
                                                    @endif
                                                </div>
                                                <div class="special d-flex justify-content-start">
                                                    @if($item->is_featured == 1)<div class="featured badge text-bg-primary">{{ __('Featured') }}</div> @endif
                                                    <div class="type">{{ $item->rJobType->name }}</div>
                                                    @if($item->is_urgent == 1)<div class="urgent badge text-bg-danger">{{ __('Urgent') }}</div> @endif
                                                </div>
                                                @if(!Auth::guard('company')->check())
                                                <div class="bookmark">
                                                    @if(Auth::guard('candidate')->check())
                                                        @php
                                                            $count = \App\Models\CandidateBookmark::where('candidate_id', Auth::guard('candidate')->user()->id)->where('job_id', $item->id)->count();
                                                            if($count > 0) {
                                                                $bookmark_status = 'text-danger';
                                                            } else {
                                                                $bookmark_status = '';
                                                            }
                                                        @endphp
                                                    @else
                                                        @php $bookmark_status = ''; @endphp
                                                    @endif
                                                    <a href="{{ route('candidate_bookmark_add', $item->id) }}"><i class="fas fa-bookmark {{ $bookmark_status }}"></i></a>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-md-12">
                                    {{ $jobs->links() }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection