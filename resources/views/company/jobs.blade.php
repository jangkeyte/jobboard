@extends('front.layout.app')

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/' . $global_banner_data->banner_company_panel) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ __('All Jobs') }}</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content user-panel">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="card">
                    @include('company.sidebar')
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>{{ __('Title') }}</th>
                                <th>{{ __('Category') }}</th>
                                <th>{{ __('Location') }}</th>
                                <th>{{ __('Is Featured') }}?</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                            @foreach($jobs as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->rJobCategory->name }}</td>
                                <td>{{ $item->rJobLocation->name }}</td>
                                <td>
                                    @if($item->is_featured == 1)
                                    <span class="badge bg-success">{{ __('Featured') }}</span>
                                    @else
                                    <span class="badge bg-danger">{{ __('Not Featured') }}</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('company_jobs_edit', $item->id) }}" class="btn btn-warning btn-sm text-white"><i class="fas fa-edit"></i></a>
                                    <a href="{{ route('company_jobs_delete', $item->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('{{ __('Are you sure') }}?');"><i class="fas fa-trash-alt"></i></aa>
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