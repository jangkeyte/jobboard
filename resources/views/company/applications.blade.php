@extends('front.layout.app')

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/' . $global_banner_data->banner_company_panel) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ __('Candidate Applications') }}</h2>
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
                <h3>{{ __('All Job Posts') }}</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>{{ __('Title') }}</th>
                                <th>{{ __('Category') }}</th>
                                <th>{{ __('Location') }}</th>
                                <th>{{ __('Is Featured') }}?</th>
                                <th>{{ __('Job Detail') }}</th>
                                <th>{{ __('Applicants') }}</th>
                            </tr>
                            @foreach($jobs as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
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
                                <td><a href="{{ route('job', $item->id) }}" ><i class="fa fa-eye"></i></a></td>
                                <td><a href="{{ route('company_applicants', $item->id) }}"><i class="fa fa-users"></i></a></td>
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