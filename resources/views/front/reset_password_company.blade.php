@extends('front.layout.app')

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/banner_default.jpg') }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ __('Reset Password') }}</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xs-4 col-lg-5 col-md-6 col-sm-12">
                <div class="reset-password-form">
                    <form action="{{ route('company_reset_password_submit') }}" method="post">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <input type="hidden" name="email" value="{{ $email }}">
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('Password') }}</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('Retype Password') }}</label>
                            <input type="password" class="form-control" name="retype_password">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primry bg-website">{{ __('Submit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection