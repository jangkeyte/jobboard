@extends('admin.layout.app')

@section('heading', 'Edit Why Choose Items')

@section('button')
<div>
    <a href="{{ route('admin_testimonial') }}" class="btn btn-primary"><i class="fas fa-plus"></i> View All</a>
</div>
@endsection

@section('main_content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin_testimonial_update') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $testimonial_single->id }}">
                        <div class="form-group mb-3">
                            <label>Existing Photo</label>
                            <div><img src="{{ asset('uploads/' . $testimonial_single->photo) }}" alt="" class="" style="width:150px"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Change Photo *</label>
                            <input type="file" class="form-control" name="photo">
                        </div>
                        <div class="form-group mb-3">
                            <label>Name *</label>
                            <input type="text" class="form-control" name="name" value="{{ $testimonial_single->name }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Designation *</label>
                            <input type="text" class="form-control" name="designation" value="{{ $testimonial_single->designation }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Comment *</label>
                            <textarea name="comment" class="form-control" cols="30" rows="10">{{ $testimonial_single->comment }}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection