@extends('front.layout.app')

@section('main_content')

@include('company/templates/page_heading', array('heading_text' => __('Video'), 'background_image' => $global_banner_data->banner_company_panel))

<div class="page-content user-panel">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="card">
                    @include('company.sidebar')
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="row">
                    <h4>{{ __('Add Video') }}</h4>
                    <form action="{{ route('company_videos_submit') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="video_id" placeholder="{{ __('Enter Video Code') }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-sm" value="{{ __('Submit') }}">
                            </div>
                        </div>
                    </form>
                    <h4 class="mt-4">{{ __('Existing Videos') }}</h4>
                    <div class="video-all">
                        @if($videos->count() == 0)
                        <div class="row">
                            <div class="col-md-12 text-danger">{{ __('No Video Found') }}</div>
                        </div>
                        @endif
                        <div class="row">
                            @foreach ($videos as $item)
                                <div class="col-md-6 col-lg-3">
                                    <div class="item">
                                        <a href="https://www.youtube.com/watch?v={{ $item->video_id }}" class="video-button">
                                            <img src="https://img.youtube.com/vi/{{ $item->video_id }}/0.jpg" alt="{{ __('Company Video') }}" class="w-100">
                                            <div class="icon"><i class="far fa-play-circle"></i></div>
                                            <div class="bg"></div>
                                        </a>
                                    </div>
                                    <a href="{{ route('company_videos_delete', $item->id) }}" class="btn btn-danger btn-sm mb-4" onClick="return confirm('{{ __('Are you sure') }}?');">Delete</a>
                                </div>                            
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection