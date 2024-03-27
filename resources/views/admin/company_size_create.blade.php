@extends('admin.layout.app')

@section('heading', 'Create Company Size')

@section('button')
<a href="{{ route('admin_company_size') }}" class="btn btn-primary btn-sm ms-2"><i class="bi bi-folder-check"></i> {{ __('View All') }}</a>
@endsection

@section('main_content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin_company_size_store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Name *</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection