@extends('front.layout.app')

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/banner.jpg') }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Create New Award</h2>
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
                <a href="{{ route('candidate_award') }}" class="bt btn-primary btn-sm mb-2"><i class="fas fa-plus"></i> See All</a>
                <form action="{{ route('candidate_award_store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="" class="form-label">Title *</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="" class="form-label">Description *</label>
                            <input type="text" class="form-control" name="description" value="{{ old('description') }}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="" class="form-label">Date *</label>
                            <input type="text" class="form-control" name="date" value="{{ old('date') }}">
                        </div>
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