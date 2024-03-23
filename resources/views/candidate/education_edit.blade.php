@extends('front.layout.app')

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/' . $global_banner_data->banner_candidate_panel) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Education</h2>
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
                <a href="{{ route('candidate_education') }}" class="bt btn-primary btn-sm mb-2"><i class="fas fa-plus"></i> See All</a>
                <form action="{{ route('candidate_education_update') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $education_single->id }}">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="" class="form-label">Education Level *</label>
                            <input type="text" class="form-control" name="level" value="{{ $education_single->level }}">
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="" class="form-label">Institute *</label>
                        <input type="text" class="form-control" name="institute" value="{{ $education_single->institute }}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="" class="form-label">Degree *</label>
                        <input type="text" class="form-control" name="degree" value="{{ $education_single->degree }}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="" class="form-label">Passing Year *</label>
                        <input type="text" class="form-control" name="passing_year" value="{{ $education_single->passing_year }}">
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