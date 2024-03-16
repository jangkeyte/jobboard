@extends('admin.layout.app')

@section('heading', 'Home Page Content')

@section('main_content')

<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin_home_page_update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row custom-tab">
                            <div class="col-lg-3 col-md-12">
                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <button class="nav-link active" id="v-pills-1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-1" type="button" role="tab" aria-controls="v-pills-1" aria-selected="true">Search</button>
                                    <button class="nav-link" id="v-pills-2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2" type="button" role="tab" aria-controls="v-pills-2" aria-selected="false">Job Category</button>
                                    <button class="nav-link" id="v-pills-3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-3" type="button" role="tab" aria-controls="v-pills-3" aria-selected="false">Why Choose Us</button>
                                    <button class="nav-link" id="v-pills-4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-4" type="button" role="tab" aria-controls="v-pills-4" aria-selected="false">Featured Jobs</button>
                                    <button class="nav-link" id="v-pills-5-tab" data-bs-toggle="pill" data-bs-target="#v-pills-5" type="button" role="tab" aria-controls="v-pills-5" aria-selected="false">Testimonials</button>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-12">                                
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab" tabindex="0">
                                        <!-- Search Section Start -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-control">Heading *</label>
                                                    <input type="text" class="form-control @error('heading') is-invalid @enderror" name="heading" value="{{ $page_home_data->heading ?? '' }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-control">Text *</label>
                                                    <textarea class="form-control" name="text" cols="30" rows="10">{{ $page_home_data->text ?? '' }}</textarea>
                                                </div> 
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="mb-4">
                                                            <label class="form-control">Job Title *</label>
                                                            <input type="text" class="form-control" name="job_title" value="{{ $page_home_data->job_title ?? '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">                                        
                                                        <div class="mb-4">
                                                            <label class="form-control">Job Location *</label>
                                                            <input type="text" class="form-control" name="job_location" value="{{ $page_home_data->job_location ?? '' }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="mb-4">
                                                            <label class="form-control">Job Category *</label>
                                                            <input type="text" class="form-control" name="job_category" value="{{ $page_home_data->job_category ?? '' }}">
                                                        </div>                                        
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="mb-4">
                                                            <label class="form-control">Search *</label>
                                                            <input type="text" class="form-control" name="search" value="{{ $page_home_data->search ?? '' }}">
                                                        </div>                                        
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-control">Existing Background *</label>
                                                    <div>
                                                        <img src="{{ asset('uploads/' . ($page_home_data->background ?? 'background_default.jpg') ) }}" alt="" class="w-50">
                                                    </div>
                                                </div>               
                                                <div class="mb-4">
                                                    <label class="form-control">Change Background *</label>
                                                    <div>
                                                        <input type="file" class="form-control mt_10" name="background">
                                                    </div>
                                                </div>        
                                            </div>
                                        </div>
                                        <!-- Search Section End -->
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab" tabindex="0">
                                        <!-- Category Section Start -->
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-control">Heading *</label>
                                                    <input type="text" class="form-control" name="job_category_heading" value="{{ $page_home_data->job_category_heading ?? '' }}">
                                                </div>     
                                                <div class="mb-4">
                                                    <label class="form-control">Sub Heading</label>
                                                    <input type="text" class="form-control" name="job_category_subheading" value="{{ $page_home_data->job_category_subheading ?? '' }}">
                                                </div>      
                                                <div class="mb-4">
                                                    <label class="form-control">Status *</label>
                                                    <select name="job_category_status" class="form-control">
                                                        <option value="Show" @if($page_home_data->job_category_status == 'Show') selected @endif >Show</option>
                                                        <option value="Hide" @if($page_home_data->job_category_status == 'Hide') selected @endif >Hide</option>
                                                    </select>
                                                </div>     
                                            </div>
                                        </div>
                                        <!-- Category Section End -->                                    
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab" tabindex="0">
                                        <!-- Why Choose Us Section Start -->
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-control">Heading *</label>
                                                    <input type="text" class="form-control" name="why_choose_heading" value="{{ $page_home_data->why_choose_heading ?? '' }}">
                                                </div>     
                                                <div class="mb-4">
                                                    <label class="form-control">Sub Heading</label>
                                                    <input type="text" class="form-control" name="why_choose_subheading" value="{{ $page_home_data->why_choose_subheading ?? '' }}">
                                                </div>      
                                                <div class="mb-4">
                                                    <label class="form-control">Existing Background *</label>
                                                    <div>
                                                        <img src="{{ asset('uploads/' . $page_home_data->why_choose_background ) }}" alt="" class="w-50">
                                                    </div>
                                                </div>               
                                                <div class="mb-4">
                                                    <label class="form-control">Change Background *</label>
                                                    <div>
                                                        <input type="file" class="form-control mt_10" name="why_choose_background">
                                                    </div>
                                                </div>        
                                                <div class="mb-4">
                                                    <label class="form-control">Status *</label>
                                                    <select name="why_choose_status" class="form-control">
                                                        <option value="Show" @if($page_home_data->why_choose_status == 'Show') selected @endif>Show</option>
                                                        <option value="Hide" @if($page_home_data->why_choose_status == 'Hide') selected @endif>Hide</option>
                                                    </select>
                                                </div>     
                                            </div>
                                        </div>
                                        <!-- Why Choose Us Section End -->                                    
                                    </div>
                                    
                                    <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab" tabindex="0">
                                        <!-- Featured Jobs Section Start -->
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-control">Heading *</label>
                                                    <input type="text" class="form-control" name="featured_jobs_heading" value="{{ $page_home_data->featured_jobs_heading ?? '' }}">
                                                </div>     
                                                <div class="mb-4">
                                                    <label class="form-control">Sub Heading</label>
                                                    <input type="text" class="form-control" name="featured_jobs_subheading" value="{{ $page_home_data->featured_jobs_subheading ?? '' }}">
                                                </div>      
                                                <div class="mb-4">
                                                    <label class="form-control">Status *</label>
                                                    <select name="featured_jobs_status" class="form-control">
                                                        <option value="Show" @if($page_home_data->featured_jobs_status == 'Show') selected @endif>Show</option>
                                                        <option value="Hide" @if($page_home_data->featured_jobs_status == 'Hide') selected @endif>Hide</option>
                                                    </select>
                                                </div>     
                                            </div>
                                        </div>
                                        <!-- Featured Jobs Section End -->                                    
                                    </div>
                                    
                                    <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab" tabindex="0">
                                        <!-- Testimonial Section Start -->
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-control">Heading *</label>
                                                    <input type="text" class="form-control" name="testimonial_heading" value="{{ $page_home_data->testimonial_heading ?? '' }}">
                                                </div>     
                                                <div class="mb-4">
                                                    <label class="form-control">Sub Heading</label>
                                                    <input type="text" class="form-control" name="testimonial_subheading" value="{{ $page_home_data->testimonial_subheading ?? '' }}">
                                                </div>      
                                                <div class="mb-4">
                                                    <label class="form-control">Existing Background *</label>
                                                    <div>
                                                        <img src="{{ asset('uploads/' . $page_home_data->testimonial_background ) }}" alt="" class="w-50">
                                                    </div>
                                                </div>               
                                                <div class="mb-4">
                                                    <label class="form-control">Change Background *</label>
                                                    <div>
                                                        <input type="file" class="form-control mt_10" name="testimonial_background">
                                                    </div>
                                                </div>        
                                                <div class="mb-4">
                                                    <label class="form-control">Status *</label>
                                                    <select name="testimonial_status" class="form-control">
                                                        <option value="Show" @if($page_home_data->testimonial_status == 'Show') selected @endif>Show</option>
                                                        <option value="Hide" @if($page_home_data->testimonial_status == 'Hide') selected @endif>Hide</option>
                                                    </select>
                                                </div>     
                                            </div>
                                        </div>
                                        <!-- Testimonial Section End -->                                    
                                    </div>
                                    
                                </div> 
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary"> Update</button>
                                </div>
                            </div>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection