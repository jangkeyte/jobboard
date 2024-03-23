@extends('front.layout.app')

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/' . $global_banner_data->banner_candidate_panel) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Skill</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content user-panel">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="card">
                    @include('candidate.sidebar')
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <a href="{{ route('candidate_work_experience') }}" class="bt btn-primary btn-sm mb-2"><i class="fas fa-plus"></i> See All</a>
                <form action="{{ route('candidate_work_experience_update') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $work_experience_single->id }}">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="" class="form-label">Company *</label>
                            <input type="text" class="form-control" name="company" value="{{ $work_experience_single->company }}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="" class="form-label">Designation *</label>
                            <input type="text" class="form-control" name="designation" value="{{ $work_experience_single->designation }}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="" class="form-label">Start Date *</label>
                            <input type="text" class="form-control" name="start_date" value="{{ $work_experience_single->start_date }}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="" class="form-label">End Date *</label>
                            <input type="text" class="form-control" name="end_date" value="{{ $work_experience_single->end_date }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </div>
                </form>                
            </div>
        </div>
    </div>
</div>

@endsection