@extends('front.layout.app')

@section('main_content')

@include('company/templates/page_heading', array('heading_text' => __('Edit Password'), 'background_image' => $global_banner_data->banner_company_panel))

<div class="page-content user-panel">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="card">
                    @include('company.sidebar')
                </div>
            </div>
            <div class="col-lg-9 col-md-12">                
                <form action="{{ route('company_edit_password_update') }}" method="post">  
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" autofocus>
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="password" class="form-control @error('retype_password') is-invalid @enderror" name="retype_password" placeholder="{{ __('Retype Password') }}" autofocus>
                            @error('retype_password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror                           
                        </div> 
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="{{ __('Update') }}">
                            </div>              
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection