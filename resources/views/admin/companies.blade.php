@extends('admin.layout.app')

@section('heading', 'Companies')

@section('main_content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">
                    <i class="ion ion-clipboard mr-1"></i>
                    To Do List
                    </h3>
                    <div class="card-tools">
                        {{ $companies->links() }}
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Company Name</th>
                                    <th>Person Name</th>
                                    <th>Username</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($companies as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->company_name }}</td>
                                    <td>{{ $item->person_name }}</td>
                                    <td>{{ $item->username }}</td>
                                    <td>
                                        <a href="{{ route('admin_companies_detail', $item->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-eye-fill"></i> {{ __('Detail') }}</a>
                                        @if($item->rJob->count() > 0)
                                        <a href="{{ route('admin_companies_jobs', $item->id) }}" class="btn btn-success btn-sm"><i class="bi bi-clipboard-data-fill"></i> {{ __('Jobs') }} ({{ $item->rJob->count() }})</a>
                                        @endif
                                        <a href="{{ route('admin_companies_delete', $item->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="bi bi-trash-fill"></i> {{ __('Delete') }}</a>
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