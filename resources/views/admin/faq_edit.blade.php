@extends('admin.layout.app')

@section('heading', 'Edit Faq Items')

@section('button')
<div>
    <a href="{{ route('admin_faq') }}" class="btn btn-primary"><i class="fas fa-plus"></i> View All</a>
</div>
@endsection

@section('main_content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin_faq_update') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $faq_single->id }}">
                        <div class="form-group mb-3">
                            <label>Question *</label>
                            <input type="text" class="form-control" name="question" value="{{ $faq_single->question }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Answer *</label>
                            <textarea name="answer" class="form-control editor" cols="30" rows="10">{{ $faq_single->answer }}</textarea>
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