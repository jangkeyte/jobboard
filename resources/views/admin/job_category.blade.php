@extends('admin.layout.app')

@section('heading', 'Job Categories')

@section('button')
<a href="{{ route('admin_job_category_create') }}" class="btn btn-primary btn-sm ms-2"><i class="bi bi-plus"></i> {{ __('Add New') }}</a>
@endsection

@section('main_content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Category Icon</th>
                                    <th>Icon Preview</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($job_categories as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->icon }}</td>
                                    <td><i class="{{ $item->icon }}"></i></td>
                                    <td class="py-1">
                                        <a href="{{ route('admin_job_category_edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{ route('admin_job_category_delete', $item->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection