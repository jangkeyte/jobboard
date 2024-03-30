<div class="top">
    <div class="container">
        <div class="row">
            <div class="col-md-6 left-side">
                <ul class="header-left">
                    <li class="email-text"><a href="mailto:{{ $global_settings_data->top_bar_email }}"><i class="fa-solid fa-envelope text-danger"></i> <span class="text-secondary">{{ $global_settings_data->top_bar_email }}</span></a></li>
                    <li class="phone-text"><a href="tel:{{ $global_settings_data->top_bar_phone }}"><i class="fa-solid fa-phone text-danger"></i> <span class="text-secondary">{{ $global_settings_data->top_bar_phone }}</span></a></li>
                </ul>
            </div>
            <div class="col-md-6 right-side text-end">
                <ul class="header-right social mr-auto">
                    <li><a href="{{ $global_settings_data->facebook }}"><i class="fa-brands fa-square-facebook fa-lg text-secondary"></i></a></li>
                    <li><a href="{{ $global_settings_data->twitter }}"><i class="fa-brands fa-square-twitter fa-lg text-secondary"></i></a></li>
                    <li><a href="{{ $global_settings_data->pinterest }}"><i class="fab fa-square-pinterest fa-lg text-secondary"></i></a></li>
                    <li><a href="{{ $global_settings_data->linkedin }}"><i class="fa-brands fa-linkedin fa-lg text-secondary"></i></a></li>
                    <li><a href="{{ $global_settings_data->instagram }}"><i class="fab fa-square-instagram fa-lg text-secondary"></i></a></li>
                    @if(app()->getLocale() == 'vi')
                    <li class="menu"><a href="{!! route('switch_language', ['en']) !!}"><img src="{{ asset('uploads/flags/united-kingdom.svg') }}" alt="English" title="{{ __('English') }}" class="mx-1" style="width:24px;"></a></li>
                    @else
                    <li class="menu"><a href="{!! route('switch_language', ['vi']) !!}"><img src="{{ asset('uploads/flags/vietnam.svg') }}" alt="Tiếng Việt" title="{{ __('Tiếng Việt') }}" class="mx-1" style="width:24px"></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>

@include('front.layout.nav')