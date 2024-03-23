@extends('front.layout.app')

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/' . $global_banner_data->banner_candidate_panel) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Password</h2>
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
                <form action="{{ route('candidate_edit_password_update') }}" method="post">  
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" autofocus>
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="password" class="form-control @error('retype_password') is-invalid @enderror" name="retype_password" placeholder="Retype Password" autofocus>
                            @error('retype_password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror                           
                        </div> 
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Update">
                            </div>              
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection