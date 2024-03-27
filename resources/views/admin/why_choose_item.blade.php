@extends('admin.layout.app')

@section('heading', 'Why Choose Items')

@section('button')
<a href="{{ route('admin_why_choose_item_create') }}" class="btn btn-primary btn-sm ms-2"><i class="bi bi-plus"></i> {{ __('Add New') }}</a>
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
                                    <th>SL</th>
                                    <th>Icon</th>
                                    <th>Icon Preview</th>
                                    <th>Heading</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($why_choose_items as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->icon }}</td>
                                    <td><i class="{{ $item->icon }}"></i></td>
                                    <td>{{ $item->heading }}</td>
                                    <td class="py-1">
                                        <a href="{{ route('admin_why_choose_item_delete', $item->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');">Delete</a>
                                        <a href="{{ route('admin_why_choose_item_edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
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