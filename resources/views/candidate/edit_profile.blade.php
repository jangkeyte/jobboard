@extends('front.layout.app')

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/' . $global_banner_data->banner_candidate_panel) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Profile</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content user-panel">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="card">
                    @include('candidate.sidebar')
                </div>
            </div>
            <div class="col-lg-9 col-md-12">        
                <form action="{{ route('candidate_edit_profile_update') }}" method="post" enctype="multipart/form-data">
                    @csrf      
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="">Existing Photo</label>
                            <div class="form-group">
                                @if(Auth::guard('candidate')->user()->photo == '')
                                    <img src="{{ asset('uploads/default_candidate_photo.jpg') }}" alt="" class="photo w-25">
                                @else
                                    <img src="{{ asset('uploads/' . Auth::guard('candidate')->user()->photo) }}" alt="" class="photo w-25">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Change Photo</label>
                            <div class="form-group"><input type="file" name="photo"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Name *</label>
                            <div class="form-group"><input type="text" name="name" class="form-control" value="{{ Auth::guard('candidate')->user()->name }}"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Designation *</label>
                            <div class="form-group"><input type="text" name="designation" class="form-control" value="{{ Auth::guard('candidate')->user()->designation }}"></div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Biography *</label>
                            <div class="form-group">
                                <textarea name="biography" class="form-control editor w-100" cols="30" rows="10">{{ Auth::guard('candidate')->user()->biography }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Username *</label>
                            <div class="form-group"><input type="text" name="username" class="form-control" value="{{ Auth::guard('candidate')->user()->username }}"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Email *</label>
                            <div class="form-group"><input type="text" name="email" class="form-control" value="{{ Auth::guard('candidate')->user()->email }}"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Phone *</label>
                            <div class="form-group"><input type="text" name="phone" class="form-control" value="{{ Auth::guard('candidate')->user()->phone }}"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Country *</label>
                            <div class="form-group"><input type="text" name="country" class="form-control" value="{{ Auth::guard('candidate')->user()->country }}"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">State *</label>
                            <div class="form-group"><input type="text" name="state" class="form-control" value="{{ Auth::guard('candidate')->user()->state }}"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">City *</label>
                            <div class="form-group"><input type="text" name="city" class="form-control" value="{{ Auth::guard('candidate')->user()->city }}"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Address *</label>
                            <div class="form-group"><input type="text" name="address" class="form-control" value="{{ Auth::guard('candidate')->user()->address }}"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Zip Code *</label>
                            <div class="form-group"><input type="text" name="zip_code" class="form-control" value="{{ Auth::guard('candidate')->user()->zip_code }}"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="mb-3">
                                <label for="" class="form-label">Gender *</label>
                                <select name="gender" class="form-control select2">
                                    <option value="Male" @if(Auth::guard('candidate')->user()->gender == 'Male') selected @endif>Male</option>
                                    <option value="Female" @if(Auth::guard('candidate')->user()->gender == 'Female') selected @endif>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="mb-3">
                                <label for="" class="form-label">Marital Status *</label>
                                <select name="marital_status" class="form-control select2">
                                    <option value="Married" @if(Auth::guard('candidate')->user()->marital_status == 'Married') selected @endif>Married</option>
                                    <option value="Unmarried" @if(Auth::guard('candidate')->user()->marital_status == 'Unmarried') selected @endif>Unmarried</option>
                                    <option value="Divorced" @if(Auth::guard('candidate')->user()->marital_status == 'Divorced') selected @endif>Divorced</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">Date of Birth *</label>
                            <input type="date" class="form-control datepicker" name="date_of_birth" value="{{ Auth::guard('candidate')->user()->date_of_birth }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Website</label>
                            <div class="form-group"><input type="text" name="website" class="form-control" value="{{ Auth::guard('candidate')->user()->website }}"></div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"><input type="submit" value="Update" class="btn btn-primary"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection