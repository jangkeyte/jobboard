<div class="navbar-area" id="stickymenu">
    <!-- Menu for Mobile Device -->
    <div class="mobile-nav">
        <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('uploads/logo.png') }}" alt="" />
        </a>
    </div>
    
    <!-- Menu for Desktop Device -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{  asset('uploads/logo.png') }}" alt="" />
                </a>
                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar nav ml-auto">
                        <li class="nav-item {{ Route::is('/') ? 'active' : '' }}">
                            <a href="{{ route('home') }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item {{ Route::is('job_listing') ? 'active' : '' }}">
                            <a href="{{ route('job_listing') }}" class="nav-link">Find Jobs</a>
                        </li>
                        <li class="nav-item {{ Route::is('company_listing') ? 'active' : '' }}">
                            <a href="{{ route('company_listing') }}" class="nav-link">Companies</a>
                        </li>
                        <li class="nav-item {{ Route::is('pricing') ? 'active' : '' }}">
                            <a href="{{ route('pricing') }}" class="nav-link">Pricing</a>
                        </li>
                        <li class="nav-item {{ Route::is('faq') ? 'active' : '' }}">
                            <a href="{{ route('faq') }}" class="nav-link">FAQ</a>
                        </li>
                        <li class="nav-item {{ Route::is('blog') || Route::is('post/*') ? 'active' : '' }}">
                            <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item {{ Route::is('contact') ? 'active' : '' }}">
                            <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>