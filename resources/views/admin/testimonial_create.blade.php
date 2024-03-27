@extends('admin.layout.app')

@section('heading', 'Create Testimonial')

@section('button')
<a href="{{ route('admin_testimonial') }}" class="btn btn-primary btn-sm ms-2"><i class="bi bi-folder-check"></i> {{ __('View All') }}</a>
@endsection

@section('main_content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin_testimonial_store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Photo *</label>
                            <input type="file" class="form-control" name="photo">
                        </div>
                        <div class="form-group mb-3">
                            <label>Name *</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group mb-3">
                            <label>Designation *</label>
                            <input type="text" class="form-control" name="designation">
                        </div>
                        <div class="form-group mb-3">
                            <label>Comment *</label>
                            <textarea name="comment" class="form-control" cols="30" rows="10"></textarea>
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