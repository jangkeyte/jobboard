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

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <ul class="nav nav-pills mb-3 d-none" id="loginTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="signin-candidate-tab" data-bs-toggle="pill" data-bs-target="#signin_candidate" type="button" role="tab" aria-controls="signin_candidate" aria-selected="true"></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="signin-company-tab" data-bs-toggle="pill" data-bs-target="#signin_company" type="button" role="tab" aria-controls="signin_company" aria-selected="true"></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="signup-candidate-tab" data-bs-toggle="pill" data-bs-target="#signup_candidate" type="button" role="tab" aria-controls="signup_candidate" aria-selected="false"></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="signup-company-tab" data-bs-toggle="pill" data-bs-target="#signup_company" type="button" role="tab" aria-controls="signup_company" aria-selected="false"></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="forget-candidate-tab" data-bs-toggle="pill" data-bs-target="#forget_candidate" type="button" role="tab" aria-controls="forget_candidate" aria-selected="false"></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="forget-company-tab" data-bs-toggle="pill" data-bs-target="#forget_company" type="button" role="tab" aria-controls="forget_company" aria-selected="false"></button>
                  </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="signin_candidate" role="tabpanel" aria-labelledby="signin-candidate-tab">
                        <div class="modal-header">
                            <h5 class="modal-title text-danger">{{ __('LOGIN TO YOUR ACCROUNT') }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="signin-form" action="{{ route('candidate_login_submit') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <div class="input-group text-center">
                                    <button type="button" class="btn btn-outline-danger hover-outline w-50" >{{ __('Candidate') }}</button>
                                    <button type="button" class="btn btn-danger d-left hover-outline w-50" onclick="$('#signin-company-tab').click();">{{ __('Company') }}</button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="{{ __('Username') }}">
                                    <span class="input-group-text bg-white"><i class="fas fa-user text-danger"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="{{ __('Password') }}">
                                    <span class="input-group-text bg-white"><i class="fas fa-lock text-danger"></i></span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-danger hover-outline w-100">{{ __('Sign In') }}</button>
                            <div class="text-center mt-3">
                                <a href="#" onclick="$('#forget-candidate-tab').click();" class="text-danger">{{ __('Forgot Password?') }}</a> | <a href="#" onclick="$('#signup-candidate-tab').click();" class="text-danger">{{ __('Sign Up') }}</a>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade show" id="signin_company" role="tabpanel" aria-labelledby="signin-company-tab">
                        <div class="modal-header">
                            <h5 class="modal-title text-danger">{{ __('LOGIN TO YOUR ACCROUNT') }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="signin-form" action="{{ route('company_login_submit') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <div class="input-group text-center">
                                    <button type="button" class="btn btn-danger hover-outline w-50" onclick="$('#signin-company-tab').click();">{{ __('Company') }}</button>
                                    <button type="button" class="btn btn-outline-danger hover-outline w-50">{{ __('Company') }}</button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="{{ __('Username') }}">
                                    <span class="input-group-text bg-white"><i class="fas fa-user text-danger"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="{{ __('Password') }}">
                                    <span class="input-group-text bg-white"><i class="fas fa-lock text-danger"></i></span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-danger hover-outline w-100">{{ __('Sign In') }}</button>
                            <div class="text-center mt-3">
                                <a href="#" onclick="$('#forget-company-tab').click();" class="text-danger">{{ __('Forgot Password?') }}</a> | <a href="#" onclick="$('#signup-company-tab').click();" class="text-danger">{{ __('Sign Up') }}</a>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade show" id="signup_candidate" role="tabpanel" aria-labelledby="signup-candidate-tab">
                        <div class="modal-header">
                            <h5 class="modal-title text-danger">{{ __('SIGNUP TO YOUR ACCOUNT') }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="signup-form" action="{{ route('candidate_signup_submit') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <div class="input-group text-center">
                                    <button type="button" class="btn btn-outline-danger hover-outline w-50" >{{ __('Candidate') }}</button>
                                    <button type="button" class="btn btn-danger d-left hover-outline w-50" onclick="$('#signup-company-tab').click();">{{ __('Company') }}</button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="{{ __('Candidate Name') }}">
                                    <span class="input-group-text bg-white"><i class="fas fa-user text-danger"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="{{ __('Username') }}">
                                    <span class="input-group-text bg-white"><i class="fas fa-user text-danger"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="{{ __('Email Address') }}">
                                    <span class="input-group-text bg-white"><i class="fas fa-envelope text-danger"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="{{ __('Password') }}">
                                    <span class="input-group-text bg-white"><i class="fas fa-lock text-danger"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="password" class="form-control" id="retype_password" name="retype_password" placeholder="{{ __('Confirm Password') }}">
                                    <span class="input-group-text bg-white"><i class="fas fa-lock text-danger"></i></span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-danger hover-outline w-100">{{ __('Sign Up') }}</button>
                            <div class="text-center mt-3">
                                <a href="#" onclick="$('#signin-candidate-tab').click();" class="text-danger">{{ __('Already have an account? Login') }}</a>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade show" id="signup_company" role="tabpanel" aria-labelledby="signup-company-tab">
                        <div class="modal-header">
                            <h5 class="modal-title text-danger">{{ __('SIGNUP TO YOUR ACCOUNT') }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="signup-form" action="{{ route('company_signup_submit') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <div class="input-group text-center">
                                    <button type="button" class="btn btn-danger hover-outline w-50" onclick="$('#signup-candidate-tab').click();">{{ __('Candidate') }}</button>
                                    <button type="button" class="btn btn-outline-danger hover-outline w-50">{{ __('Company') }}</button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="name" name="company_name" placeholder="{{ __('Company Name') }}">
                                    <span class="input-group-text bg-white"><i class="fas fa-user text-danger"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="name" name="person_name" placeholder="{{ __('Contact Person Name') }}">
                                    <span class="input-group-text bg-white"><i class="fas fa-user text-danger"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="{{ __('Username') }}">
                                    <span class="input-group-text bg-white"><i class="fas fa-user text-danger"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="{{ __('Email Address') }}">
                                    <span class="input-group-text bg-white"><i class="fas fa-envelope text-danger"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="{{ __('Password') }}">
                                    <span class="input-group-text bg-white"><i class="fas fa-lock text-danger"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="password" class="form-control" id="retype_password" name="retype_password" placeholder="{{ __('Confirm Password') }}">
                                    <span class="input-group-text bg-white"><i class="fas fa-lock text-danger"></i></span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-danger hover-outline w-100">{{ __('Sign Up') }}</button>
                            <div class="text-center mt-3">
                                <a href="#" onclick="$('#signin-company-tab').click();" class="text-danger">{{ __('Already have an account? Login') }}</a>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade show" id="forget_candidate" role="tabpanel" aria-labelledby="forget-candidate-tab">
                        <div class="modal-header">
                            <h5 class="modal-title text-danger">{{ __('RESET PASSWORD') }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="forget-form" action="{{ route('candidate_forget_password_submit') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <div class="input-group text-center">
                                    <button type="button" class="btn btn-outline-danger hover-outline w-50" >{{ __('Candidate') }}</button>
                                    <button type="button" class="btn btn-danger d-left hover-outline w-50" onclick="$('#forget-company-tab').click();">{{ __('Company') }}</button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="emailaddress" name="emailaddress" placeholder="{{ __('Email Address') }}">
                                    <span class="input-group-text bg-white"><i class="fas fa-envelope text-danger"></i></span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-danger hover-outline w-100">{{ __('Get A New Password') }}</button>
                            <div class="text-center mt-3">
                                <a href="#" onclick="$('#signin-candidate-tab').click();" class="text-danger">{{ __('Already have an account? Login') }}</a>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade show" id="forget_company" role="tabpanel" aria-labelledby="forget-company-tab">
                        <div class="modal-header">
                            <h5 class="modal-title text-danger">{{ __('RESET PASSWORD') }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="forget-form" action="{{ route('company_forget_password_submit') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <div class="input-group text-center">
                                    <button type="button" class="btn btn-danger hover-outline w-50" onclick="$('#forget-candidate-tab').click();">{{ __('Candidate') }}</button>
                                    <button type="button" class="btn btn-outline-danger hover-outline w-50">{{ __('Company') }}</button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="emailaddress" name="emailaddress" placeholder="{{ __('Email Address') }}">
                                    <span class="input-group-text bg-white"><i class="fas fa-envelope text-danger"></i></span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-danger hover-outline w-100">{{ __('Get A New Password') }}</button>
                            <div class="text-center mt-3">
                                <a href="#" onclick="$('#signin-company-tab').click();" class="text-danger">{{ __('Already have an account? Login') }}</a>
                            </div>
                        </form>
                    </div>

                </div>
                <hr>
                <div class="text-center">
                    <p class="text-danger">{{ __('Or Sign In With') }}</p>
                    <div class="d-grid gap-2">
                        <a href="{{ route('auth_social', 'facebook') }}" class="btn btn-outline-primary"><i class="fab fa-facebook-f"></i> {{ __('Login with Facebook') }}</a>
                        <!-- <a href="{{ route('auth_social', 'twitter') }}" class="btn btn-outline-info"><i class="fab fa-twitter"></i> {{ __('Login with Twitter') }}</a>
                        <a href="{{ route('auth_social', 'google') }}" class="btn btn-outline-danger"><i class="fab fa-google"></i> {{ __('Login with Google') }}</a> -->
                        <a href="{{ route('auth_social', 'linkedin') }}" class="btn btn-outline-dark"><i class="fab fa-linkedin-in"></i> {{ __('Login with Linkedin') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>