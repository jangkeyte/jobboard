@extends('admin.layout.app')

@section('heading', 'Edit Job Type')

@section('button')
<a href="{{ route('admin_job_type') }}" class="btn btn-primary btn-sm ms-2"><i class="bi bi-folder-check"></i> {{ __('View All') }}</a>
@endsection

@section('main_content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin_job_type_update') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $job_type_single->id }}">
                        <div class="form-group mb-3">
                            <label>Location Name *</label>
                            <input type="text" class="form-control" name="name" value="{{ $job_type_single->name }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection