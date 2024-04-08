@extends('front.layout.app')

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/' . $global_banner_data->banner_company_panel) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ __('Dashboard') }}</h2>
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
                <h3>{{ __('Hello') . Auth::guard('company')->user()->person_name }} ({{ Auth::guard('company')->user()->company_name }})</h3>
                <p>{{ __('See all the statistics at a glance') }}:</p>

                <div class="row box-items">
                    <div class="col-md-4">
                        <div class="box1">
                            <h4>{{ $total_opened_jobs }}</h4>
                            <p>{{ __('Open Jobs') }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box2">
                            <h4>{{ $total_featured_jobs }}</h4>
                            <p>{{ __('Featured Jobs') }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box3">
                            <h4>{{ $total_urgent_jobs }}</h4>
                            <p>{{ __('Pending Jobs Jobs') }}</p>
                        </div>
                    </div>
                </div>
                
                <h3 class="mt-5">{{ __('Recent Jobs') }}</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>{{ __('Title') }}</th>
                                <th>{{ __('Category') }}</th>
                                <th>{{ __('Location') }}</th>
                                <th>{{ __('Is Featured') }}?</th>
                                <th>{{ __('Is Urgent') }}?</th>
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
                                    @if($item->is_urgent == 1)
                                    <span class="badge bg-danger">{{ __('Urgent') }}</span>
                                    @else
                                    <span class="badge bg-primary">{{ __('Not Urgent') }}</span>
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