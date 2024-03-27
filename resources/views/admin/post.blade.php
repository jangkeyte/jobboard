@extends('admin.layout.app')

@section('heading', 'Posts')

@section('button')
<a href="{{ route('admin_post_create') }}" class="btn btn-primary btn-sm ms-2"><i class="bi bi-plus"></i> {{ __('Add New') }}</a>
@endsection

@section('main_content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Heading</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->heading }}</td>
                                    <td><img src="{{ asset('uploads/' . $item->photo) }}" alt="" style="width:150px"></td>
                                    <td class="py-1">
                                        <a href="{{ route('admin_post_delete', $item->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');">Delete</a>
                                        <a href="{{ route('admin_post_edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
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