@extends('admin.layout.app')

@section('heading', 'Contact Page Content')

@section('main_content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin_contact_page_update') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Heading *</label>
                            <input type="text" class="form-control" name="heading" value="{{ $page_contact_data?->heading }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Map Code *</label>
                            <textarea name="map_code" class="form-control" cols="30" rows="5">{{ $page_contact_data?->map_code }}</textarea>
                        </div>
                        <h4 class="seo_section">SEO Section</h4>
                        <div class="form-group mb-3">
                            <label>Title *</label>
                            <input type="text" class="form-control" name="title" value="{{ $page_contact_data?->title }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Meta Description *</label>
                            <textarea name="meta_description" class="form-control" cols="30" rows="5">{{ $page_contact_data?->meta_description }}</textarea>
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