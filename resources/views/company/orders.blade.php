@extends('front.layout.app')

@section('main_content')

@include('company/templates/page_heading', array('heading_text' => __('Orders'), 'background_image' => $global_banner_data->banner_company_panel))

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
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>{{ __('Payment Id') }}</th>
                                <th>{{ __('Plan Name') }}</th>
                                <th>{{ __('Price') }}</th>
                                <th>{{ __('Order Date') }}</th>
                                <th>{{ __('Expire Date') }}</th>
                                <th>{{ __('Payment Method') }}</th>
                            </tr>
                            @foreach($orders as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->order_no }}</td>
                                <td>
                                    {{ $item->rPackage->package_name }}
                                    @if($item->currently_active == 1)
                                    <span class="badge bg-success">Active</span>
                                    @endif
                                </td>
                                <td>${{ $item->rPackage->package_price }}</td>
                                <td>{{ $item->start_date }}</td>
                                <td>{{ $item->expire_date }}</td>
                                <td>{{ $item->payment_method }}</td>
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