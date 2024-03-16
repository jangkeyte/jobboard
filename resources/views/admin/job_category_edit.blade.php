@extends('admin.layout.app')

@section('heading', 'Edit Job Categories')

@section('button')
<div>
    <a href="{{ route('admin_job_category') }}" class="btn btn-primary"><i class="fas fa-plus"></i> View All</a>
</div>
@endsection

@section('main_content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin_job_category_update') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $job_category_single->id }}">
                        <div class="form-group mb-3">
                            <label>Category Name *</label>
                            <input type="text" class="form-control" name="name" value="{{ $job_category_single->name }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Icon Preview</label>
                            <div><i class="{{ $job_category_single->icon }}"></i></div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Category Icon *</label>
                            <input type="text" class="form-control" name="icon" value="{{ $job_category_single->icon }}">
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