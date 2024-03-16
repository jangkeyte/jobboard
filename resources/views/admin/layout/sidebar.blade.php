<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin_home') }}">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin_home') }}"></a>
        </div>
    </aside>
    <ul class="sidebar-menu">
        <li class="{{ Request::is('admin/home') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin_home') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Dashboard.">
                <i class="fas fa-hand-point-right"></i> 
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item dropdown {{ Request::is('admin/home-page') ? 'active' : '' }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Page Settings</span></a>
            <ul class="dropdown-menu">
                <li class="{{ Request::is('admin/home-page') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_home_page') }}"><i class="fas fa-angle-right"></i> Home</a></li>
                <li class=""><a class="nav-link" href="#"><i class="fas fa-angle-right"></i> Terms</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown {{ Request::is('admin/job-category/*') ? 'active' : '' }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Job Section</span></a>
            <ul class="dropdown-menu">
                <li class="{{ Request::is('admin/job-category/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_job_category') }}"><i class="fas fa-angle-right"></i> Job Category</a></li>
                <li class=""><a class="nav-link" href="#"><i class="fas fa-angle-right"></i> Job Location</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown {{ Request::is('admin/why-choose/*') ? 'active' : '' }}">
            <a href="{{ route('admin_why_choose_item') }}" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Why Choose Items">
                <i class="fas fa-hand-point-right"></i> <span>Why Choose Items</span>
            </a>
        </li>
        <li class="nav-item dropdown {{ Request::is('admin/testimonial/*') ? 'active' : '' }}">
            <a href="{{ route('admin_testimonial') }}" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Testimonials">
                <i class="fas fa-hand-point-right"></i> <span>Testimonials</span>
            </a>
        </li>
        <li class="nav-item dropdown {{ Request::is('admin/post/*') ? 'active' : '' }}">
            <a href="{{ route('admin_post') }}" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Posts">
                <i class="fas fa-hand-point-right"></i> <span>Posts</span>
            </a>
        </li>
    </ul>
</div>