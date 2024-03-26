<x-laravel-ui-adminlte::adminlte-layout>

    {{-- @include('admin.layout.styles') --}}

    {{-- @include('admin.layout.scripts') --}}

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Main Header -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <img src="https://assets.infyom.com/logo/blue_logo_150x150.png" class="user-image img-circle elevation-2" alt="User Image">
                            <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <!-- User image -->
                            <li class="user-header bg-primary">
                                <img src="https://assets.infyom.com/logo/blue_logo_150x150.png" class="img-circle elevation-2" alt="User Image">
                                <p>
                                    {{ Auth::user()->name }}
                                    <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                                <a href="#" class="btn btn-default btn-flat float-right" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Sign out
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <!-- Left side column. contains the logo and sidebar -->
            @include('admin.layout.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('main_content')
            </div>

            <!-- Main Footer -->
            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 3.1.0
                </div>
                <strong>Copyright &copy; 2014-2023 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
                reserved.
            </footer>
        </div>
    </body>
</x-laravel-ui-adminlte::adminlte-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="uploads/favicon.png">
    
    <title>Admin Panel</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body>
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader">
            <img src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>
        <div class="main-header">                
            @include('admin.layout.nav')
        </div>
        <div class="main-sidebar">
            @include('admin.layout.sidebar')
        </div>
        <div class="content-wrapper">                
            <div class="main-content">
                <section class="section">
                    <div class="section-header justify-content-between">
                        <h1>@yield('heading')</h1>
                        @yield('button')
                    </div>
                    <div clas="section-body">
                        @yield('main_content')
                    </div>
                </section>
            </div>                
        </div>
    </div>

    @include('admin.layout.scripts_footer')
    
    <script>
    $(document).ready(function () {
        $('ul').on('expanded.lte.treeview', handleExpandedEvent)
     </script>

    @if( $errors->any() )
        @foreach( $errors->all() as $error )    
        <script>
            iziToast.error({
                title: '',
                position: 'topCenter',
                message: '{{ $error }}',
            });
        </script>
        @endforeach
    @endif

    @if( session()->get('error') )
    <script>        
        iziToast.error({
            title: '',
            position: 'topRight',
            message: '{{ session()->get("error") }}',
        });
    </script>
    @endif
    
    @if( session()->get('success') )
    <script>        
        iziToast.success({
            title: '',
            position: 'topRight',
            message: '{{ session()->get("success") }}',
        });
    </script>
    @endif
</body>
</html>