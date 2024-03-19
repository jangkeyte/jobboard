@extends('front.layout.app')

@section('seo_title'){{ $faq_page_item->title ?? 'Title' }}@endsection
@section('seo_meta_description'){{ $faq_page_item->meta_description ?? 'Meta Description' }}@endsection

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/banner.jpg') }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $faq_page_item->heading ?? 'Heading' }}</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content faq">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="accordion w-100" id="accordionExample">
                    @foreach($faqs as $item)
                    <div class="accordion-item">
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