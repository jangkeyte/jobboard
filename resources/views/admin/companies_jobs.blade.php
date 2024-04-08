@extends('admin.layout.app')

@section('heading', 'Jobs of company: ' . $companies_detail->company_name )

@section('button')
<a href="{{ route('admin_companies') }}" class="btn btn-primary btn-sm ms-2"><i class="bi bi-folder-check"></i> {{ __('Back to Previous') }}</a>
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
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Location</th>
                                    <th>Is Featured?</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($companies_jobs as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->rJobCategory->name }}</td>
                                    <td>{{ $item->rJobLocation->name }}</td>
                                    <td>
                                        @if($item->is_featured == 1)
                                        <span class="badge bg-success">Featured</span>
                                        @else
                                        <span class="badge bg-danger">Not Featured</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('job', $item->id) }}" title="Job Detail" class="btn btn-primary btn-sm"><i class="bi bi-eye-fill"></i> {{ __('Detail') }}</a>
                                        @if($item->rCandidateApplication->count() > 0)
                                        <a href="{{ route('admin_companies_applicants', $item->id) }}" title="Applicants" class="btn btn-success btn-sm"><i class="bi bi-people-fill"></i> {{ __('Applicants') }} ({{ $item->rCandidateApplication->count() }})</a>
                                        @endif
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