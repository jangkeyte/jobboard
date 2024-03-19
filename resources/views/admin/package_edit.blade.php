@extends('admin.layout.app')

@section('heading', 'Edit Package Items')

@section('button')
<div>
    <a href="{{ route('admin_package') }}" class="btn btn-primary"><i class="fas fa-plus"></i> View All</a>
</div>
@endsection

@section('main_content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin_package_update') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $package_single->id }}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">Package Name *</label>
                                    <input type="text" class="form-control" name="package_name" value="{{ $package_single->package_name }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">Package Price *</label>
                                    <input type="text" class="form-control" name="package_price" value="{{ $package_single->package_price }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">Number of Days *</label>
                                    <input type="text" class="form-control" name="package_days" value="{{ $package_single->package_days }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">Display Time *</label>
                                    <input type="text" class="form-control" name="package_display_time" value="{{ $package_single->package_display_time }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">Total Allowed Jobs *</label>
                                    <input type="text" class="form-control" name="total_allowed_jobs" value="{{ $package_single->total_allowed_jobs }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">Total Allowed Featured Jobs *</label>
                                    <input type="text" class="form-control" name="total_allowed_featured_jobs" value="{{ $package_single->total_allowed_featured_jobs }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">Total Allowed Photos *</label>
                                    <input type="text" class="form-control" name="total_allowed_photos" value="{{ $package_single->total_allowed_photos }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">Total Allowed Videos *</label>
                                    <input type="text" class="form-control" name="total_allowed_videos" value="{{ $package_single->total_allowed_videos }}">
                                </div>
                            </div>
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