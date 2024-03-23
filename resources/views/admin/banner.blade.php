@extends('admin.layout.app')

@section('heading', 'Banners')

@section('main_content')

    <form method="POST" action="{{ route('admin_banner_update') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h2>{{ __('Job Listing') }}</h2>
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_job_listing ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Change Banner') }}</label>
                            <div>
                                <input type="file" class="form-control" name="banner_job_listing">
                            </div>
                        </div>  
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h2>{{ __('Job Detail') }}</h2>
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_job_detail ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Change Banner') }}</label>
                            <div>
                                <input type="file" class="form-control" name="banner_job_detail">
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h2>{{ __('Job Category') }}</h2>
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_job_categories ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Change Banner') }}</label>
                            <div>
                                <input type="file" class="form-control" name="banner_job_categories">
                            </div>
                        </div>  
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h2>{{ __('Company Listing') }}</h2>
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_company_listing ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Change Banner') }}</label>
                            <div>
                                <input type="file" class="form-control" name="banner_company_listing">
                            </div>
                        </div>  
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h2>{{ __('Company Detail') }}</h2>
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_company_detail ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Change Banner') }}</label>
                            <div>
                                <input type="file" class="form-control" name="banner_company_detail">
                            </div>
                        </div>  
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h2>{{ __('Pricing') }}</h2>
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_pricing ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Change Banner') }}</label>
                            <div>
                                <input type="file" class="form-control" name="banner_pricing">
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h2>{{ __('Blog') }}</h2>
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_blog ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Change Banner') }}</label>
                            <div>
                                <input type="file" class="form-control" name="banner_blog">
                            </div>
                        </div>  
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h2>{{ __('FAQ') }}</h2>
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_faq ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Change Banner') }}</label>
                            <div>
                                <input type="file" class="form-control" name="banner_faq">
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h2>{{ __('Post') }}</h2>
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_post ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Change Banner') }}</label>
                            <div>
                                <input type="file" class="form-control" name="banner_post">
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h2>{{ __('Contact') }}</h2>
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_contact ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Change Banner') }}</label>
                            <div>
                                <input type="file" class="form-control" name="banner_contact">
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h2>{{ __('Terms') }}</h2>
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_terms ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Change Banner') }}</label>
                            <div>
                                <input type="file" class="form-control" name="banner_terms">
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h2>{{ __('Privacy') }}</h2>
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_privacy ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Change Banner') }}</label>
                            <div>
                                <input type="file" class="form-control" name="banner_privacy">
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h2>{{ __('Sign Up') }}</h2>
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_signup ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Change Banner') }}</label>
                            <div>
                                <input type="file" class="form-control" name="banner_signup">
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h2>{{ __('Login') }}</h2>
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_login ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Change Banner') }}</label>
                            <div>
                                <input type="file" class="form-control" name="banner_login">
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h2>{{ __('Forget Password') }}</h2>
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_forget_password ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Change Banner') }}</label>
                            <div>
                                <input type="file" class="form-control" name="banner_forget_password">
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h2>{{ __('Company Panel') }}</h2>
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_company_panel ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Change Banner') }}</label>
                            <div>
                                <input type="file" class="form-control" name="banner_company_panel">
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h2>{{ __('Candidate Panel') }}</h2>
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Existing Banner') }}</label>
                            <div><img src="{{ asset('uploads/' . ($banner_data->banner_candidate_panel ?? 'background_default.jpg') ) }}" alt="" class="w-50"></div>
                        </div>               
                        <div class="form-group mb-4">
                            <label class="form-control">{{ __('Change Banner') }}</label>
                            <div>
                                <input type="file" class="form-control" name="banner_candidate_panel">
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