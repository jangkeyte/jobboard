@extends('front.layout.app')

@section('main_content')

@include('company/templates/page_heading', array('heading_text' => __('Dashboard'), 'background_image' => $global_banner_data->banner_company_panel))

<div class="page-content user-panel">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="card">
                    @include('company.sidebar')
                </div>
            </div>
            <div class="col-lg-9 col-md-12">

                @include('company.templates.dashboard_summary')
                
                @include('company.templates.dashboard_table', array('heading' =>  __('All Job Posts'), 'jobs' => $jobs))  
            </div>
        </div>
    </div>
</div>

@endsection