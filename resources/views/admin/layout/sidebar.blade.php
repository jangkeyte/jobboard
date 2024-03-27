<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> 
        
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> 
        
        <!--begin::Brand Link--> 
        <a class='brand-link' href='{{ route('admin_dashboard') }}'> 
            
            <!--begin::Brand Image--> 
            <img src="https://adminlte-v4.netlify.app/dist/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> 
            
            <!--begin::Brand Text--> 
            <span class="brand-text fw-light">BCPS</span> <!--end::Brand Text--> 
        </a> <!--end::Brand Link--> 
    </div> <!--end::Sidebar Brand--> 

    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"> 
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                @include('admin.layout.menu')
            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside> <!--end::Sidebar-->
