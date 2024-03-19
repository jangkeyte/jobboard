@extends('front.layout.app')

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/banner.jpg') }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Dashboard</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content user-panel">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="card">
                    @include('company.sidebar')
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <h3>Hello, {{ Auth::guard('company')->user()->person_name }} ({{ Auth::guard('company')->user()->company_name }})</h3>
                <p>See all the statistics at a glance:</p>

                <div class="row box-items">
                    <div class="col-md-4">
                        <div class="box1">
                            <h4>12</h4>
                            <p>Open Jobs</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box1">
                            <h4>3</h4>
                            <p>Pending Jobs Jobs</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box1">
                            <h4>5</h4>
                            <p>Featured Jobs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection