<div class="navbar-area" id="stickymenu">
    <!-- Menu for Mobile Device -->
    <div class="mobile-nav d-md-none text-center">
        <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('uploads/' . $global_settings_data->logo) }}" alt="" />
        </a>
    </div>
    
    <!-- Menu for Desktop Device -->
    <div class="main-nav d-none d-md-block">
        <div class="container">
            <div class="row pt-2">
                <div class="col-md-3 left-side py-5">
                    <a class="navbar-brand py-5" href="{{ route('home') }}"><img src="{{  asset('uploads/logo.png') }}" alt="" /></a>
                </div>
                <div class="col-md-9 right-side text-end">
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <ul class="header-right right-side">
                                @if(Auth::guard('company')->check())
                                <li class="menu"><a class="btn btn-danger btn-md rounded-5 hover-outline" href="{{ route('company_dashboard') }}"><i class="fa-solid fa-house"></i> {{ __('Dashboard') }}</a></li>
                                @elseif(Auth::guard('candidate')->check())
                                <li class="menu">
                                    <a class="btn btn-danger btn-md rounded-5 hover-outline" href="{{ route('candidate_dashboard') }}"><i class="fa-solid fa-house"></i> {{ __('Dashboard') }}</a></li>
                                @else
                                <li class="menu">
                                    <button type="button" class="btn btn-danger btn-md rounded-5 hover-outline px-5" data-bs-toggle="modal" data-bs-target="#loginModal">{{ __('Sign In') }}</button>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12 text-secondary">
                            <ul class="header-right right-side">
                                <li class="mx-3 px-0"><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
                                <li class="mx-3 px-0"><a href="{{ route('job_listing') }}">{{ __('Find Jobs') }}</a></li>
                                <li class="mx-3 px-0"><a href="{{ route('company_listing') }}">{{ __('Companies') }}</a></li>
                                <li class="mx-3 px-0"><a href="{{ route('pricing') }}">{{ __('Pricing') }}</a></li>
                                <li class="mx-3 px-0"><a href="{{ route('faq') }}">{{ __('FAQ') }}</a></li>
                                <li class="mx-3 px-0"><a href="{{ route('blog') }}">{{ __('Blog') }}</a></li>
                                <li class="mx-3 px-0"><a href="{{ route('contact') }}">{{ __('Contact') }}</a></li>
                                <!--                                 
                                <li class="px-0 {{ Route::is('/') ? 'active' : '' }}">
                                    <a href="{{ route('home') }}" class="nav-link">{{ __('Home') }}</a>
                                </li>
                                <li class="px-0 {{ Route::is('job_listing') ? 'active' : '' }}">
                                    <a href="{{ route('job_listing') }}" class="nav-link">{{ __('Find Jobs') }}</a>
                                </li>
                                <li class="{{ Route::is('company_listing') ? 'active' : '' }}">
                                    <a href="{{ route('company_listing') }}" class="nav-link">{{ __('Companies') }}</a>
                                </li>
                                <li class="{{ Route::is('pricing') ? 'active' : '' }}">
                                    <a href="{{ route('pricing') }}" class="nav-link">{{ __('Pricing') }}</a>
                                </li>
                                <li class="{{ Route::is('faq') ? 'active' : '' }}">
                                    <a href="{{ route('faq') }}" class="nav-link">{{ __('FAQ') }}</a>
                                </li>
                                <li class="{{ Route::is('blog') || Route::is('post/*') ? 'active' : '' }}">
                                    <a href="{{ route('blog') }}" class="nav-link">{{ __('Blog') }}</a>
                                </li>
                                <li class="{{ Route::is('contact') ? 'active' : '' }}">
                                    <a href="{{ route('contact') }}" class="nav-link">{{ __('Contact') }}</a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('modals')
    @include('front.layout.modal')
@endpush