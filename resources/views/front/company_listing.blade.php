@extends('front.layout.app')

@section('seo_title'){{ $other_page_item->company_listing_page_title ?? __('SEO Title') }}@endsection
@section('seo_meta_description'){{ $other_page_item->company_listing_page_meta_description ?? __('SEO Meta Description') }}@endsection

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/' . ($global_banner_data->banner_company_listing ?? 'banner_default.jpg')) }})">
    <div class="container">
        <div class="row pt-3">
            <div class="col-md-12 text-white text-center py-5">
                <h2 class="fw-bold">{{ $other_page_item->company_listing_page_heading ?? __('SEO Heading') }}</h2>
            </div>
        </div>
    </div>
</div>

<div class="path">
    <div class="container">
        <div class="row pt-2">
            <div class="col-md-12 text-white text-center">
                <ul class="d-inline fs-7">
                    <li><a class="text-white" href="{{ route('home') }}">{{ __('Home') }}</a></li>
                    <li class="px-2"> > </li>
                    <li>{{ __('Companies Listing') }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="company-result mt-3">
    <div class="container">
        <div class="row pt-2">
            <div class="col-md-3">
                @include('front/templates/company_listing_search_form', array('form_data' => $form_data, 'company_industries' => $company_industries, 'company_locations' => $company_locations, 'company_sizes' => $company_sizes, 'advertisement_data' => $advertisement_data))
            </div>

            <div class="col-md-9">
                <div class="job">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="search-result-header">
                                    <div class="row">
                                        <div class="col-md-6 left-side">
                                            <ul class="header-left ps-0">
                                                <li class="email-text">
                                                    <div><span class="fs-5 fw-bolder text-black">{{$companies->count()}} {{ __('Companies Found') }}</span></div>
                                                    <div class="mt-1"><span class="fs-7 fw-bolder">{{ __('Displayed Here') }}: 1-14 {{ __('Companies') }}</span></div>
                                                </li>
                                            </ul>                                            
                                        </div>
                                        <div class="col-md-6 right-side text-end">
                                            <ul class="header-right social mr-auto ">
                                                <li><a href="{{ $global_settings_data->facebook }}"><i class="fa fa-sort"></i></a></li>
                                                <span class=" text-danger ps-1" >{{ __('Most Recent') }}</span>
                                                <li><a href="{{ $global_settings_data->facebook }}"><i class="fa fa-sort t"></i></a></li>
                                                <span class=" text-danger ps-1" >{{ __('Records Per Page') }}</span>
                                            </ul>
                                        </div>
                                    </div>
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

                                    <div class="col-md-12 my-2 border">                                        
                                        <div class="row">
                                            <div class="col-md-12 text-end pe-0">
                                                <span class="promotepof-badgeemp"><i class="fa fa-star pe-1" title="Featured"></i>{{__('Featured')}}</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1 pt-3">
                                                <div class="border">
                                                    <a href="{{ route('company', $item->id) }}" data-job-id="174" class="">
                                                        @include('front/templates/image', array('image' => $item->logo, 'name' => $item->company_name))
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-8 pt-2">
                                                <div>
                                                    <ul class="list-unstyled fs-7">
                                                        <li><a class ="text-danger" href="javascript:void(0);">{{ $item->rCompanyIndustry->name }}</a></li>
                                                        <li><h7><a class="fw-bold" href="{{ route('company', $item->id) }}">{{ $item->company_name }}</a></h7></li>
                                                        <li><i class="pe-1 fa fa-location-dot"></i>{{ $item->rCompanyLocation->name }}</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col-md-3 pt-3 mt-2">
                                                <ul class="list-unstyled fs-7">
                                                    <li>
                                                        <button type="submit" class="btn btn-outline hover-danger rounded-1 btn-follow me-2"><i class="fa fa-user-plus pe-2"></i>{{ __('Follow') }}</button>
                                                        <button type="submit" class="btn btn-outline hover-danger rounded-1 btn-follow">1 {{ __('Vacancy') }}</button>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <div class="col-md-12">
                                    
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

<script>
    $(".form_subscribe_ajax").on('submit', function(e){
        e.preventDefault();
        //$('#loader').show();
        var form = this;
        $.ajax({
            url:$(form).attr('action'),
            method:$(form).attr('method'),
            data:new FormData(form),
            processData:false,
            dataType:'json',
            contentType:false,
            beforeSend:function(){
                $(form).find('span.error-text').text('');
            },
            success:function(data){
                //$('#loader').hide();
                if(data.code == 0) {
                    $.each(data.error_message, function(prefix, val){
                        $(form).find('span.' + prefix + '_error').text(val[0]);
                    });
                } else if(data.code == 1) {
                    $(form)[0].reset();
                    iziToast.success({
                        title: '',
                        position: 'topRight',
                        message: data.success_message,
                    })
                }
            }
        });
    })
</script>