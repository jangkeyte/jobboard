@extends('admin.layout.app')

@section('heading', 'All Subscribers')

@section('button')
<a href="{{ route('admin_subscribers_send_email') }}" class="btn btn-primary btn-sm ms-2"><i class="bi bi-envelope"></i> {{ __('Send Email to All') }}</a>
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
                                    <th>#</th>
                                    <th>{{ __('Email') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($subscribers as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td class="py-1">
                                        <a href="{{ route('admin_subscriber_delete', $item->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('{{ __('Are you sure?') }}');">Delete</a>                                        
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