@extends('front.layout.app')

@section('seo_title'){{ $other_page_item->candidate_listing_page_title ?? __('SEO Title') }}@endsection
@section('seo_meta_description'){{ $other_page_item->candidate_listing_page_meta_description ?? __('SEO Meta Description') }}@endsection

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/' . ($global_banner_data->banner_candidate_listing ?? 'banner_default.jpg')) }})">
    <div class="container">
        <div class="row pt-3">
            <div class="col-md-12 text-white text-center py-5">
                <h2 class="fw-bold">{{ $other_page_item->candidate_listing_page_heading ?? __('Candidate Listing') }}</h2>
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
                    <li>{{ __('Candidate Listing') }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="candidate-result mt-3">
    <div class="container">
        <div class="row pt-2">
            <div class="col-md-3">
                @include('front/templates/candidate_listing_search_form', array('form_data' => $form_data, 'candidate_sectors' => $candidate_sectors, 'advertisement_data' => $advertisement_data))
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
                                                    <div><span class="fs-5 fw-bolder text-black">{{$candidates->count()}} {{ __('Companies Found') }}</span></div>
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

                            @if(!$candidates->count())
                                <div class="text-danger">{{ __('No result found') }}</div>
                            @else
                                @foreach($candidates as $item)
                                    <div class="col-md-12 border careerfy-refejobs-list careerfy-refejobs-list-two p-0 mb-2">
                                        <div class="container p-0">
                                            @include('front/templates/candidate_listing_candidate_item', array('item' => $item))
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