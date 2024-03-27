
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url('/home') }}"><b>{{ config('app.name') }}</b></a>
            </div>
            <!-- /.login-logo -->

            <!-- /.login-box-body -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">{{ __('Sign in to start your session') }}</p>

                    <form method="post" action="{!! route('admin_login_submit') !!}">
                        @csrf

                        <div class="input-group mb-3">
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="{{ __('Email') }}" class="form-control @error('email') is-invalid @enderror">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                            </div>
                            @error('email')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input type="password" name="password" placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            @error('password')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">{{ __('Remember Me') }}</label>
                                </div>
                            </div>

                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">{{ __('Sign In') }}</button>
                            </div>

                        </div>
                    </form>

                    <p class="mb-1">
                        <a href="{{ route('admin_forget_password') }}">{{ __('I forgot my password') }}</a>
                    </p>
                    <p class="mb-0">
                        <a href="{{-- route('register') --}}" class="text-center">{{ __('Register a new membership') }}</a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>

        </div>
        <!-- /.login-box -->
    </body>