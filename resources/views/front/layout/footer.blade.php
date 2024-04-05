<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="item">
                    <h2 class="heading">{{ __('For Candidates') }}</h2>
                    <ul class="useful-links">
                        <li><a href="{{ route('job_listing') }}">{{ __('Browser Jobs') }}</a></li>
                        <li><a href="{{ route('candidate_bookmark_view') }}">{{ __('Bookmarked Jobs') }}</a></li>
                        <li><a href="{{ route('candidate_dashboard') }}">{{ __('Candidate Dashboard') }}</a></li>
                        <li><a href="{{ route('candidate_apply_view') }}">{{ __('Apllied Jobs') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item">
                    <h2 class="heading">{{ __('For Companies') }}</h2>
                    <ul class="useful-links">
                        <li><a href="{{ route('company_jobs_create') }}">{{ __('Post New Job') }}</a></li>
                        <li><a href="{{ route('company_listing') }}">{{ __('Browse Company') }}</a></li>
                        <li><a href="{{ route('company_dashboard') }}">{{ __('Company Dashboard') }}</a></li>
                        <li><a href="{{ route('company_candidate_applications') }}">{{ __('Applications') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item">
                    <h2 class="heading">{{ __('Contact') }}</h2>
                    
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
                    <ul class="social">
                        <li><a href="{{ $global_settings_data->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{ $global_settings_data->twitter }}"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{ $global_settings_data->pinterest }}"><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="{{ $global_settings_data->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="{{ $global_settings_data->instagram }}"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item">
                    <h2 class="heading">{{ __('Newsletter') }}</h2>
                    <p>
                        {{ __('To get the latest news from our website, please subscribe us') }}
                    </p>
                    <form action="{{ route('subscriber_send_email') }}" method="post" class="form_subscribe_ajax">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="email" class="form-control">
                            <span class="text-danger error-text email_error"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="{{ __('Subscribe Now') }}">
                        </div>
                    </form>
                </div>
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
                    <ul>
                        <li><a href="{{ route('terms') }}">{{ __('Terms of Use') }}</a></li>
                        <li><a href="{{ route('privacy') }}">{{ __('Privacy Policy') }}</a></li>
                    </ul>
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