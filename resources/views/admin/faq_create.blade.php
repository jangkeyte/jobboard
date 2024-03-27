@extends('admin.layout.app')

@section('heading', 'Create Faq')

@section('button')
<a href="{{ route('admin_faq') }}" class="btn btn-primary btn-sm ms-2"><i class="bi bi-folder-check"></i> View All</a>
@endsection

@section('main_content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin_faq_store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Question *</label>
                            <input type="text" class="form-control" name="question">
                        </div>
                        <div class="form-group mb-3">
                            <label>Answer *</label>
                            <textarea name="answer" class="form-control" cols="30" rows="10"></textarea>
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