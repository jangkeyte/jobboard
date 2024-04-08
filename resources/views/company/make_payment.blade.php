@extends('front.layout.app')

@section('main_content')

@include('company/templates/page_heading', array('heading_text' => __('Make Payment'), 'background_image' => $global_banner_data->banner_company_panel))

<div class="page-content user-panel">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="card">
                    @include('company.sidebar')
                </div>
            </div>
            <div class="col-lg-9 col-md-12">                
                <h4>{{ __('Current Plan') }}</h4>
                <div class="row box-items mb-4">
                    <div class="col-md-4 box1">
                        @if($current_plan == null)
                        <span class="text-danger">{{ __('No plan is available') }}</span>
                        @else
                        <h4>${{ $current_plan->rPackage->package_price }}</h4>
                        <p>{{ $current_plan->rPackage->package_name }}</p>
                        @endif
                    </div>
                </div>               
                <h4>{{ __('Choose Plan and Make Payment') }}</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <form action="{{ route('company_paypal') }}" method="post">
                            @csrf
                            <tr>
                                <td>
                                    <select name="package_id" class="form-control select2">
                                        @foreach($packages as $item)
                                        <option value="{{ $item->id }}">{{ $item->package_name }} - (${{ $item->package_price }})</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td><button href="" class="btn btn-primary">{{ __('Pay with PayPal') }}</button></td>
                            </tr>
                        </form>
                            <tr>
                                <td>
                                    <select name="package_id" class="form-control select2">
                                        @foreach($packages as $item)
                                        <option value="{{ $item->package_id }}">{{ $item->package_name }} - (${{ $item->package_price }})</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td><button href="" class="btn btn-primary">{{ __('Pay with Stripe') }}</button></td>
                            </tr>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection