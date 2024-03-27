@extends('admin.layout.app')

@section('heading', 'Create Why Choose Items')

@section('button')
<a href="{{ route('admin_why_choose_item') }}" class="btn btn-primary btn-sm ms-2"><i class="bi bi-folder-check"></i> {{ __('View All') }}</a>
@endsection

@section('main_content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin_why_choose_item_store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Icon *</label>
                            <input type="text" class="form-control" name="icon">
                        </div>
                        <div class="form-group mb-3">
                            <label>Heading *</label>
                            <input type="text" class="form-control" name="heading">
                        </div>
                        <div class="form-group mb-3">
                            <label>Text *</label>
                            <textarea name="text" class="form-control" cols="30" rows="10"></textarea>
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