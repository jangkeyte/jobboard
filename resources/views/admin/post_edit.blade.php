@extends('admin.layout.app')

@section('heading', 'Edit Posts')

@section('button')
<a href="{{ route('admin_post') }}" class="btn btn-primary btn-sm ms-2"><i class="bi bi-folder-check"></i> {{ __('View All') }}</a>
@endsection

@section('main_content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin_post_update') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $post_single->id }}">
                        <div class="form-group mb-3">
                            <label>Heading *</label>
                            <input type="text" class="form-control" name="heading" value="{{ $post_single->heading }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Slug *</label>
                            <input type="text" class="form-control" name="slug" value="{{ $post_single->slug }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Short Description *</label>
                            <textarea name="short_description" class="form-control" cols="30" rows="5">{{ $post_single->short_description }}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Description *</label>
                            <textarea name="description" class="form-control editor" cols="30" rows="15">{{ $post_single->description }}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Existing Photo</label>
                            <div><img src="{{ asset('uploads/' . $post_single->photo) }}" alt="" class="" style="width:150px"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Change Photo *</label>
                            <input type="file" class="form-control" name="photo">
                        </div>
                        <h4 class="seo_section">SEO Section</h5>
                        <div class="form-group mb-3">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $post_single->title }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Meta Description *</label>
                            <textarea name="meta_description" class="form-control" cols="30" rows="15">{{ $post_single->meta_description }}</textarea>
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