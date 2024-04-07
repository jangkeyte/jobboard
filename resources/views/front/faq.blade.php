@extends('front.layout.app')

@section('seo_title'){{ $faq_page_item->title ?? __('SEO Title') }}@endsection
@section('seo_meta_description'){{ $faq_page_item->meta_description ?? __('SEO Meta Description') }}@endsection

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/' . ($global_banner_data->banner_faq ?? 'banner_default.jpg')) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $faq_page_item->heading ?? __('SEO Heading') }}</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content faq mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="accordion w-100" id="accordionExample">
                    @foreach($faqs as $item)
                    <div class="accordion-item mt-2 shadow">
                        <h2 class="accordion" id="heading{{ $item->id }}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $item->id }}" aria-expanded="false" aria-controls="collapse{{ $item->id }}">
                                {!! $item->question !!}
                            </button>
                        </h2>
                        <div id="collapse{{ $item->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $item->id }}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {!! nl2br($item->answer) !!}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection