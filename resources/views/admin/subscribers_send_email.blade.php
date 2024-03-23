@extends('admin.layout.app')

@section('heading', 'Send Email to All Subscribers')

@section('button')
<div>
    <a href="{{ route('admin_all_subscribers') }}" class="btn btn-primary"><i class="fas fa-plus"></i> All Subscribers</a>
</div>
@endsection

@section('main_content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_subscribers_send_email_submit') }}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Subject *</label>
                            <input type="text" class="form-control" name="subject">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Message *</label>
                            <textarea name="message" cols="30" rows="10" class="form-control editor"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btrn btn-primary">Send Email</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection