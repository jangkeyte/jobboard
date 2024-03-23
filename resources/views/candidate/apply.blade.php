@extends('front.layout.app')

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/' . $global_banner_data->banner_candidate_panel) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Apply for job: {{ $job_single->title }}</h2>
                <div class="button"><a href="{{ route('job', $job_single->id) }}" class="btn btn-primary btn-sm">See Job Detail</a></div>
            </div>
        </div>
    </div>
</div>

<div class="job-apply">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="apply-form">
                    <form action="{{ route('candidate_apply_submit') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $job_single->id }}">
                        <div class="mb-3">
                            <label for="" class="mb-1">Cover Letter *</label>
                            <textarea name="cover_letter" cols="30" rows="10" class="form-control editor"></textarea>
                            <div class="clearfix"></div>
                        </div>
                        <div class="mb-3">
                            <button tyle="submit" class="btn btn-primary btn-sm">Confirm Apply</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection