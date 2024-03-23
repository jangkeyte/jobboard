@extends('front.layout.app')

@section('seo_title'){{ $other_page_item->signup_page_title ?? __('Title') }}@endsection
@section('seo_meta_description'){{ $other_page_item->signup_page_meta_description ?? __('Meta Description') }}@endsection

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/' . $global_banner_data->banner_signup) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $other_page_item->signup_page_heading ?? __('Page Heading') }}</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xs-4 col-lg-5 col-md-6 col-sm-12">
                <div class="signup-form">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><i class="far fa-user"></i> {{ __('Candidate') }}</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true"><i class="far fa-user"></i> {{ __('Company') }}</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <form action="{{ route('candidate_signup_submit') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">{{ __('Candidate Name') }} *</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">{{ __('Username') }} *</label>
                                    <input type="text" class="form-control" name="username" value="{{ old('username') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">{{ __('Email Address') }} *</label>
                                    <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">{{ __('Password') }} *</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">{{ __('Confirm Password') }} *</label>
                                    <input type="password" class="form-control" name="retype_password">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary bg-website">{{ __('Create Account') }}</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <form action="{{ route('company_signup_submit') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">{{ __('Company Name') }} *</label>
                                    <input type="text" class="form-control" name="company_name" value="{{ old('company_name') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">{{ __('Contact Person Name') }} *</label>
                                    <input type="text" class="form-control" name="person_name" value="{{ old('person_name') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">{{ __('Username') }} *</label>
                                    <input type="text" class="form-control" name="username" value="{{ old('username') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">{{ __('Email Address') }} *</label>
                                    <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">{{ __('Password') }} *</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">{{ __('Retype Password') }} *</label>
                                    <input type="password" class="form-control" name="retype_password">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary bg-website">{{ __('Create Account') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="mb-3">
                        <a href="{{ route('login') }}" class="primary-color">{{ __('Existing User? Login Now') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection