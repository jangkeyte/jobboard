@extends('admin.layout.app')

@section('heading', 'Candidates')

@section('main_content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">
                    <i class="ion ion-clipboard mr-1"></i>
                    Candidates List
                    </h3>
                    <div class="card-tools">
                        {{ $candidates->links() }}
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Username</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($candidates as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->username }}</td>
                                    <td>
                                        <a href="{{ route('admin_candidates_detail', $item->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-eye-fill"></i> {{ __('Detail') }}</a>
                                        <a href="{{ route('admin_candidates_applied_jobs', $item->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-clipboard-check-fill"></i> {{ __('Applied Jobs') }}</a>
                                        <a href="{{ route('admin_candidates_delete', $item->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="bi bi-trash-fill"></i> {{ __('Delete') }}</a>
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