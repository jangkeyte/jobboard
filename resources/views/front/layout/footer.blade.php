<div class="footer mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="item">
                    <h5 class="heading">{{ __('For Candidates') }}</h5>
                    <ul class="useful-links">
                        <li><a href="{{ route('job_listing') }}">{{ __('Browser Jobs') }}</a></li>
                        <li><a href="{{ route('candidate_bookmark_view') }}">{{ __('Bookmarked Jobs') }}</a></li>
                        <li><a href="{{ route('candidate_dashboard') }}">{{ __('Candidate Dashboard') }}</a></li>
                        <li><a href="{{ route('candidate_apply_view') }}">{{ __('Apllied Jobs') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item">
                    <h5 class="heading">{{ __('For Companies') }}</h5>
                    <ul class="useful-links">
                        <li><a href="{{ route('company_jobs_create') }}">{{ __('Post New Job') }}</a></li>
                        <li><a href="{{ route('company_listing') }}">{{ __('Browse Company') }}</a></li>
                        <li><a href="{{ route('company_dashboard') }}">{{ __('Company Dashboard') }}</a></li>
                        <li><a href="{{ route('company_candidate_applications') }}">{{ __('Applications') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item">
                    <h5 class="heading">{{ __('For Companies') }}</h5>
                    <ul class="useful-links">
                        <li><a href="{{ route('terms') }}">{{ __('Terms of Use') }}</a></li>
                        <li><a href="{{ route('privacy') }}">{{ __('Privacy Policy') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item">
                    <h5 class="heading">{{ __('Contact') }}</h5>
                    <div class="list-item">
                        <div class="left">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="right">
                            {{ $global_settings_data->footer_address }}
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="left">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="right">
                            {{ $global_settings_data->footer_phone }}
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="left">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="right">
                            {{ $global_settings_data->footer_email }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center mt-5">
                <ul class="header-right social mr-auto">
                    <li><a href="{{ $global_settings_data->facebook }}"><i class="px-2 fs-1 fa-brands fa-facebook-f fa-lg hover-color-danger"></i></a></li>
                    <li><a href="{{ $global_settings_data->twitter }}"><i class="px-2 fs-1 fa-brands fa-twitter fa-lg hover-color-danger"></i></a></li>
                    <li><a href="{{ $global_settings_data->pinterest }}"><i class="px-2 fs-1 fa-brands fa-google-plus fa-lg hover-color-danger"></i></a></li>
                    <li><a href="{{ $global_settings_data->linkedin }}"><i class="px-2 fs-1 fa-brands fa-linkedin fa-lg hover-color-danger"></i></a></li>                    
                </ul>
            </div>

            <div class="col-md-12 text-center mt-2">
                <ul class="header-right social mr-auto">
                    @if(app()->getLocale() == 'vi')
                    <li class="menu"><a href="{!! route('switch_language', ['en']) !!}"><img src="{{ asset('uploads/flags/united-kingdom.svg') }}" alt="English" title="{{ __('English') }}" class="mx-2" style="width:24px;"> English</a></li>
                    @else
                    <li class="menu"><a href="{!! route('switch_language', ['vi']) !!}"><img src="{{ asset('uploads/flags/vietnam.svg') }}" alt="Tiếng Việt" title="{{ __('Tiếng Việt') }}" class="mx-2" style="width:24px"> Tiếng Việt</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="copyright">
                    {{ __('Copyright 2024, JangKeyte. All Rights Reserved.') }}
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="right">
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="scroll-top">
    <i class="fas fa-angle-up"></i>
</div>

@include('front.layout.scripts_footer')

@if( $errors->any() )
    @foreach( $errors->all() as $error )    
        <script>
            iziToast.error({
                title: '',
                position: 'topCenter',
                message: '{{ $error }}',
            });
        </script>
    @endforeach
@endif

@if( session()->get('error') )
    <script>        
        iziToast.error({
            title: '',
            position: 'topRight',
            message: '{{ session()->get("error") }}',
        });
    </script>
@endif

@if( session()->get('success') )
    <script>        
        iziToast.success({
            title: '',
            position: 'topRight',
            message: '{{ session()->get("success") }}',
        });
    </script>
@endif

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

    Splide.defaults = {
        type   : 'loop',
        perPage: 2,
    }
</script>
@stack('scripts')