@extends('front.layout.app')

@section('seo_title'){{ $other_page_item->company_listing_page_title ?? __('SEO Title') }}@endsection
@section('seo_meta_description'){{ $other_page_item->company_listing_page_meta_description ?? __('SEO Meta Description') }}@endsection

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/' . ($global_banner_data->banner_company_listing ?? 'banner_default.jpg')) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $other_page_item->company_listing_page_heading ?? __('SEO Heading') }}</h2>
            </div>
        </div>
    </div>
</div>
<div class="company-result">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="company-filter">
                    <form action="{{ url('company-listing') }}" method="get">
                        <div class="widget">
                            <h2>{{ __('Company Title') }}</h2>
                            <input type="text" class="form-control" name="name" value="{{  $form_name }}" placeholder="{{ __('Company Name') }}...">
                        </div>
                        <div class="widget">
                            <h2>{{ __('Company Industry') }}</h2>
                            <select name="industry" class="form-control select2">
                                <option value="">{{ __('Company Industry') }}</option>
                                @foreach($company_industries as $item)
                                <option value="{{ $item->id }}" @if($form_industry == $item->id) selected @endif>{{  $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="widget">
                            <h2>{{ __('Company Location') }}</h2>
                            <select name="location" class="form-control select2">
                                <option value="">{{ __('Company Location') }}</option>
                                @foreach($company_locations as $item)
                                <option value="{{ $item->id }}" @if($form_location == $item->id) selected @endif>{{  $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="widget">
                            <h2>{{ __('Company Size') }}</h2>
                            <select name="size" class="form-control select2">
                                <option value="">{{ __('Company Size') }}</option>
                                @foreach($company_sizes as $item)
                                <option value="{{ $item->id }}" @if($form_size == $item->id) selected @endif>{{  $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="widget">
                            <h2>{{ __('Founded On') }}</h2>
                            <select name="founded_on" class="form-control select2">
                                <option value="">{{ __('Founded On') }}</option>
                                @for($i = 1990; $i <= date('Y'); $i++)
                                <option value="{{ $i }}" @if($form_founded_on == $i) selected @endif>{{  $i }}</option>
                                @endfor
                            </select>
                        </div>

                        <div class="filter-button">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fas fa-search"></i> {{ $home_page_data->search ?? __('Filter') }}
                            </button>
                        </div>
                    </form>

                    @if($advertisement_data && $advertisement_data->company_listing_ad_status == 'Show')
                        <div class="advertisement">
                            @if($advertisement_data->company_listing_ad_url == null)
                                <img src="{{ asset('uploads/' . $advertisement_data->company_listing_ad) }}" alt="" class="w-100">
                            @else
                                <a href="{{ $advertisement_data->company_listing_ad_url }}" target="_blank"><img src="{{ asset('uploads/' . $advertisement_data->company_listing_ad) }}" alt="" class="w-100"></a>
                            @endif
                        </div>
                    @endif

                </div>
            </div>

            <div class="col-md-9">
                <div class="company">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="search-result-header">
                                    <i class="fas fa-search"></i> {{ __('Search Result for Company Listing') }}
                                </div>
                            </div>
                            @if(!$companies->count())
                                <div class="text-danger">{{ __('No result found') }}</div>
                            @else
                                @foreach($companies as $item)
                                    @php
                                    $order_data = \App\Models\Order::where('company_id', $item->id)->where('currently_active', 1)->first();
                                    if(date('Y-m-d') > $order_data?->expire_date) {
                                        continue;
                                    }
                                    @endphp
                                    <div class="col-md-12">
                                        <div class="item d-flex justify-content-start">
                                            <div class="logo">
                                                <img src="{{ asset('uploads/' . ($item->rCompany->logo ?? 'default.png') ) }}" alt="{{ $item->company_name }}">
                                            </div>
                                            <div class="text">
                                                <h3>
                                                    <a href="{{ route('company', $item->id) }}">{{ $item->company_name }}</a>
                                                </h3>
                                                <div class="detail-1 d-flex justify-content-start">
                                                    <div class="category">{{ $item->rCompanyIndustry->name ?? 'Industry' }}</div>
                                                    <div class="location">{{ $item->rCompanyLocation->name ?? 'Location' }}</div>
                                                </div>
                                                <div class="detail-2 d-flex-justify-content-start">
                                                   {!! substr($item->description, 0, 220) . '...' !!}
                                                </div>
                                                <div class="open-position">
                                                    <span class="badge bg-primary">{{ $item->r_job_count }} Open Positions</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-md-12">
                                    {{ $companies->links() }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection