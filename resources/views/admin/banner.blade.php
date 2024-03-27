@extends('admin.layout.app')

@section('heading', 'Banners')

@section('main_content')

    <form method="POST" action="{{ route('admin_banner_update') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2 connectedSortable">
                <div class="card card-primary collapsed-card mb-4">
                    <div class="card-header">
                        <div class="card-title">{{ __('Job Listing') }}</div>
                        <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-4">
                            <label>{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_job_listing ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label>{{ __('Change Banner') }}</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="banner_job_listing">
                                <label class="input-group-text">{{ __('Upload') }}</label>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2 connectedSortable">
                <div class="card card-primary collapsed-card mb-4">
                    <div class="card-header">
                        <div class="card-title">{{ __('Job Detail') }}</div>
                        <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-4">
                            <label>{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_job_detail ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label>{{ __('Change Banner') }}</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="banner_job_detail">
                                <label class="input-group-text">{{ __('Upload') }}</label>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card card-primary collapsed-card mb-4">
                    <div class="card-header">
                        <div class="card-title">{{ __('Job Categories') }}</div>
                        <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-4">
                            <label>{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_job_categories ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label>{{ __('Change Banner') }}</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="banner_job_categories">
                                <label class="input-group-text">{{ __('Upload') }}</label>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card card-primary collapsed-card mb-4">
                    <div class="card-header">
                        <div class="card-title">{{ __('Company Listing') }}</div>
                        <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-4">
                            <label>{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_company_listing ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label>{{ __('Change Banner') }}</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="banner_company_listing">
                                <label class="input-group-text">{{ __('Upload') }}</label>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card card-primary collapsed-card mb-4">
                    <div class="card-header">
                        <div class="card-title">{{ __('Company Detail') }}</div>
                        <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-4">
                            <label>{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_company_detail ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label>{{ __('Change Banner') }}</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="banner_company_detail">
                                <label class="input-group-text">{{ __('Upload') }}</label>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card card-primary collapsed-card mb-4">
                    <div class="card-header">
                        <div class="card-title">{{ __('Pricing') }}</div>
                        <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-4">
                            <label>{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_pricing ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label>{{ __('Change Banner') }}</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="banner_pricing">
                                <label class="input-group-text">{{ __('Upload') }}</label>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card card-primary collapsed-card mb-4">
                    <div class="card-header">
                        <div class="card-title">{{ __('Blog') }}</div>
                        <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-4">
                            <label>{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_blog ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label>{{ __('Change Banner') }}</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="banner_blog">
                                <label class="input-group-text">{{ __('Upload') }}</label>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card card-primary collapsed-card mb-4">
                    <div class="card-header">
                        <div class="card-title">{{ __('FAQ') }}</div>
                        <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-4">
                            <label>{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_faq ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label>{{ __('Change Banner') }}</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="banner_faq">
                                <label class="input-group-text">{{ __('Upload') }}</label>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card card-primary collapsed-card mb-4">
                    <div class="card-header">
                        <div class="card-title">{{ __('Post') }}</div>
                        <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-4">
                            <label>{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_post ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label>{{ __('Change Banner') }}</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="banner_post">
                                <label class="input-group-text">{{ __('Upload') }}</label>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card card-primary collapsed-card mb-4">
                    <div class="card-header">
                        <div class="card-title">{{ __('Contact') }}</div>
                        <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-4">
                            <label>{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_contact ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label>{{ __('Change Banner') }}</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="banner_contact">
                                <label class="input-group-text">{{ __('Upload') }}</label>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card card-primary collapsed-card mb-4">
                    <div class="card-header">
                        <div class="card-title">{{ __('Terms') }}</div>
                        <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-4">
                            <label>{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_terms ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label>{{ __('Change Banner') }}</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="banner_terms">
                                <label class="input-group-text">{{ __('Upload') }}</label>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card card-primary collapsed-card mb-4">
                    <div class="card-header">
                        <div class="card-title">{{ __('Privacy') }}</div>
                        <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-4">
                            <label>{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_privacy ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label>{{ __('Change Banner') }}</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="banner_privacy">
                                <label class="input-group-text">{{ __('Upload') }}</label>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card card-primary collapsed-card mb-4">
                    <div class="card-header">
                        <div class="card-title">{{ __('Sign Up') }}</div>
                        <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-4">
                            <label>{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_singup ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label>{{ __('Change Banner') }}</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="banner_singup">
                                <label class="input-group-text">{{ __('Upload') }}</label>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card card-primary collapsed-card mb-4">
                    <div class="card-header">
                        <div class="card-title">{{ __('Login') }}</div>
                        <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-4">
                            <label>{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_login ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label>{{ __('Change Banner') }}</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="banner_login">
                                <label class="input-group-text">{{ __('Upload') }}</label>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card card-primary collapsed-card mb-4">
                    <div class="card-header">
                        <div class="card-title">{{ __('Forget Password') }}</div>
                        <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-4">
                            <label>{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_forget_password ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label>{{ __('Change Banner') }}</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="banner_forget_password">
                                <label class="input-group-text">{{ __('Upload') }}</label>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card card-primary collapsed-card mb-4">
                    <div class="card-header">
                        <div class="card-title">{{ __('Company Panel') }}</div>
                        <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-4">
                            <label>{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_company_panel ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label>{{ __('Change Banner') }}</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="banner_company_panel">
                                <label class="input-group-text">{{ __('Upload') }}</label>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card card-primary collapsed-card mb-4">
                    <div class="card-header">
                        <div class="card-title">{{ __('Candidate Panel') }}</div>
                        <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-4">
                            <label>{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_candidate_panel ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label>{{ __('Change Banner') }}</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="banner_candidate_panel">
                                <label class="input-group-text">{{ __('Upload') }}</label>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
            </div>            
        </div>
    </form>

@endsection