<!DOCTYPE html>
<html lang="vi">    
<!--begin::Head-->
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>AdminLTE v4 | @yield('heading')</title>
   <link rel="icon" type="image/png" href="{{ asset('uploads/' . $global_settings_data->favicon) }}" />
   
   <!--begin::Primary Meta Tags-->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="title" content="AdminLTE v4 | Dashboard">
   <meta name="author" content="Jang Keyte - Kha Thiết Giang">
   <meta name="description" content="">
   <meta name="keywords" content=""><!--end::Primary Meta Tags-->         
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   @include('admin.layout.styles') 

</head> <!--end::Head--> 
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper"> 
        @include('admin.layout.header')        
        @include('admin.layout.sidebar')
        <!--begin::App Main-->
        <main class="app-main"> 
            <!--begin::App Content Header-->
            <div class="app-content-header"> 
                <!--begin::Container-->
                <div class="container-fluid">                     
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">@yield('heading') @yield('button')</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="{{ route('admin_home')}}">Home</a></li>
                                <li class="breadcrumb-item active">@yield('heading')</li>
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content Header-->           

            <!--begin::App Content-->
            <div class="app-content"> 
                <!--begin::Container-->
                <div class="container-fluid"> 
                    <!--begin::Main Content-->
                    @yield('main_content') <!--end::Main Content-->
                </div> <!--end::Container-->
            </div> <!--end::App Content-->

        </main> <!--end::App Main-->

        @include('admin.layout.footer')
    </div> <!--end::App Wrapper--> 
</body><!--end::Body-->
</html>