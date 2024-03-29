<div class="navbar-area" id="stickymenu">
    <!-- Menu for Mobile Device -->
    <div class="mobile-nav d-md-none text-center">
        <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('uploads/' . $global_settings_data->logo) }}" alt="" />
        </a>
    </div>
    
    <!-- Menu for Desktop Device -->
    <div class="main-nav d-none d-md-block">
        <div class="container text-secondary">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{  asset('uploads/logo.png') }}" alt="" />
                </a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar nav mr-auto">
                        <li class="nav-item {{ Route::is('/') ? 'active' : '' }}">
                            <a href="{{ route('home') }}" class="nav-link">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item {{ Route::is('job_listing') ? 'active' : '' }}">
                            <a href="{{ route('job_listing') }}" class="nav-link">{{ __('Find Jobs') }}</a>
                        </li>
                        <li class="nav-item {{ Route::is('company_listing') ? 'active' : '' }}">
                            <a href="{{ route('company_listing') }}" class="nav-link">{{ __('Companies') }}</a>
                        </li>
                        <li class="nav-item {{ Route::is('pricing') ? 'active' : '' }}">
                            <a href="{{ route('pricing') }}" class="nav-link">{{ __('Pricing') }}</a>
                        </li>
                        <li class="nav-item {{ Route::is('faq') ? 'active' : '' }}">
                            <a href="{{ route('faq') }}" class="nav-link">{{ __('FAQ') }}</a>
                        </li>
                        <li class="nav-item {{ Route::is('blog') || Route::is('post/*') ? 'active' : '' }}">
                            <a href="{{ route('blog') }}" class="nav-link">{{ __('Blog') }}</a>
                        </li>
                        <li class="nav-item {{ Route::is('contact') ? 'active' : '' }}">
                            <a href="{{ route('contact') }}" class="nav-link">{{ __('Contact') }}</a>
                        </li>
                        @if(Auth::guard('company')->check())
                        <li class="menu"><a href="{{ route('company_dashboard') }}"><i class="fa-solid fa-house"></i> {{ __('Dashboard') }}</a></li>
                        @elseif(Auth::guard('candidate')->check())
                        <li class="menu"><a href="{{ route('candidate_dashboard') }}"><i class="fa-solid fa-house"></i> {{ __('Dashboard') }}</a></li>
                        @else
                        <li class="menu"><a href="{{ route('login') }}" class="btn btn-danger btn-sm"><i class="fas fa-sign-in-alt"></i> {{ __('Login') }}</a></li>
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>