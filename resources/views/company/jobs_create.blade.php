@extends('front.layout.app')

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/banner.jpg') }})">
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
                <form action="" method="post">
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
                            <label for="" class="form-label">Job Responsibilities *</label>
                            <textarea name="responsibility" cols="30" rows="10" class="form-control editor">{{ old('responsibility') }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">Skill and Abilities *</label>
                            <textarea name="skill" cols="30" rows="10" class="form-control editor">{{ old('skill') }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">Educational Quatification *</label>
                            <textarea name="education" cols="30" rows="10" class="form-control editor">{{ old('education') }}</textarea>
                        </div>
                    </div>
                </form>                
            </div>
        </div>
    </div>
</div>

@endsection