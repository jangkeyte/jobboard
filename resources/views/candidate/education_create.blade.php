@extends('front.layout.app')

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/banner.jpg') }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Create New Education</h2>
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
                <form action="{{ route('candidate_education_store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="" class="form-label">Education Level *</label>
                            <input type="text" class="form-control" name="level" value="{{ old('level') }}">
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="" class="form-label">Institute *</label>
                        <input type="text" class="form-control" name="institute" value="{{ old('institute') }}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="" class="form-label">Degree *</label>
                        <input type="text" class="form-control" name="degree" value="{{ old('degree') }}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="" class="form-label">Passing Year *</label>
                        <input type="text" class="form-control" name="passing_year" value="{{ old('passing_year') }}">
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