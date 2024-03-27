@extends('admin.layout.app')

@section('heading', 'Profile')

@section('main_content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{!! route('admin_profile_submit') !!}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('uploads/' . Auth::guard('admin')->user()->photo) }}" alt="" class="profile-photo w-100">
                                <input type="file" class="form-control mt_10" name="photo">
                            </div>
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label>Name *</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::guard('admin')->user()->name }}">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label>Email *</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::guard('admin')->user()->email }}">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" autofocus>
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <input type="password" class="form-control @error('retype_password') is-invalid @enderror" name="retype_password" placeholder="Retype Password" autofocus>
                                    @error('retype_password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror                           
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