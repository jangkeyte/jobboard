<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right w-100 justify-content-end">
        <li class="nav-link">
            <a href="{{ route('home') }}" target="_blank" class="btn btn-warning">Front End</a>
        </li>
        <li class="nav-item dropdown">
            <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img alt="image" src="{{ asset('uploads/' . Auth::guard('admin')->user()->photo) }}" class="rounded-circle" style="width:50px">
                <div class="d-sm-none d-lg-inline-block">{{ Auth::guard('admin')->user()->name }}</div>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{!! route('admin_profile') !!}"><i class="far fa-user"></i> Edit Profile</a></li>
                <li><a class="dropdown-item" href="{{ route('admin_logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>

<!--begin::Start Navbar Links-->
<ul class="navbar-nav">
    <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i class="bi bi-list"></i> </a> </li>
    <li class="nav-item d-none d-md-block"> <a href="{{ route('home') }}" class="nav-link">{{ __('Home') }}</a> </li>
</ul> <!--begin::End Navbar Links--> 

<!--end::Start Navbar Links-->
<ul class="navbar-nav ms-auto"> 
    
    <!--begin::Navbar Search-->
    <li class="nav-item"> <a class="nav-link" data-widget="navbar-search" href="#" role="button"> <i class="bi bi-search"></i> </a> </li>  <!--end::Navbar Search--> 
    
    <!--begin::Messages Dropdown Menu-->
    <li class="nav-item dropdown"> <a class="nav-link" data-bs-toggle="dropdown" href="#"> <i class="bi bi-chat-text"></i> <span class="navbar-badge badge text-bg-danger">3</span> </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> 
            <a href="#" class="dropdown-item">                 
                <!--begin::Message-->
                <div class="d-flex">
                    <div class="flex-shrink-0"> <img src="../../dist/assets/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 rounded-circle me-3"> </div>
                    <div class="flex-grow-1">
                        <h3 class="dropdown-item-title">
                            Brad Diesel
                            <span class="float-end fs-7 text-danger"><i class="bi bi-star-fill"></i></span>
                        </h3>
                        <p class="fs-7">Call me whenever you can...</p>
                        <p class="fs-7 text-secondary"> <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                        </p>
                    </div>
                </div> <!--end::Message-->
            </a>
            <div class="dropdown-divider"></div> 
            <a href="#" class="dropdown-item">                 
                <!--begin::Message-->
                <div class="d-flex">
                    <div class="flex-shrink-0"> <img src="../../dist/assets/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 rounded-circle me-3"> </div>
                    <div class="flex-grow-1">
                        <h3 class="dropdown-item-title">
                            John Pierce
                            <span class="float-end fs-7 text-secondary"> <i class="bi bi-star-fill"></i> </span>
                        </h3>
                        <p class="fs-7">I got your message bro</p>
                        <p class="fs-7 text-secondary"> <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                        </p>
                    </div>
                </div> <!--end::Message-->
            </a>
            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <!--begin::Message-->
                <div class="d-flex">
                    <div class="flex-shrink-0"> <img src="../../dist/assets/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 rounded-circle me-3"> </div>
                    <div class="flex-grow-1">
                        <h3 class="dropdown-item-title">
                            Nora Silvester
                            <span class="float-end fs-7 text-warning"> <i class="bi bi-star-fill"></i> </span>
                        </h3>
                        <p class="fs-7">The subject goes here</p>
                        <p class="fs-7 text-secondary"> <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                        </p>
                    </div>
                </div> <!--end::Message-->
            </a>
            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
    </li> <!--end::Messages Dropdown Menu-->
    
    <!--begin::Notifications Dropdown Menu-->
    <li class="nav-item dropdown"> <a class="nav-link" data-bs-toggle="dropdown" href="#"> <i class="bi bi-bell-fill"></i> <span class="navbar-badge badge text-bg-warning">15</span> </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <i class="bi bi-envelope me-2"></i> 4 new messages
                <span class="float-end text-secondary fs-7">3 mins</span> </a>
            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <i class="bi bi-people-fill me-2"></i> 8 friend requests
                <span class="float-end text-secondary fs-7">12 hours</span> </a>
            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
                <span class="float-end text-secondary fs-7">2 days</span> </a>
            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item dropdown-footer">
                See All Notifications
            </a>
        </div>
    </li> <!--end::Notifications Dropdown Menu-->     
    <!--begin::Fullscreen Toggle-->
    <li class="nav-item"> 
        <a class="nav-link" href="#" data-lte-toggle="fullscreen"> 
            <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i> 
            <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i> 
        </a> 
    </li> <!--end::Fullscreen Toggle--> 
    <!--begin::User Menu Dropdown-->
    <li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <img src="../../dist/assets/img/user2-160x160.jpg" class="user-image rounded-circle shadow" alt="User Image"> <span class="d-none d-md-inline">Alexander Pierce</span> </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">             
            <!--begin::User Image-->
            <li class="user-header text-bg-primary"> <img src="../../dist/assets/img/user2-160x160.jpg" class="rounded-circle shadow" alt="User Image">
                <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2023</small>
                </p>
            </li> <!--end::User Image-->             
            <!--begin::Menu Body-->
            <li class="user-body">                 
                <!--begin::Row-->
                <div class="row">
                    <div class="col-4 text-center"> <a href="#">Followers</a> </div>
                    <div class="col-4 text-center"> <a href="#">Sales</a> </div>
                    <div class="col-4 text-center"> <a href="#">Friends</a> </div>
                </div> <!--end::Row-->
            </li> <!--end::Menu Body-->             
            <!--begin::Menu Footer-->
            <li class="user-footer"> <a href="#" class="btn btn-default btn-flat">Profile</a> <a href="#" class="btn btn-default btn-flat float-end">Sign out</a> </li> <!--end::Menu Footer-->
        </ul>
    </li> <!--end::User Menu Dropdown-->
    <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
        </a>
    </li>
</ul> <!--end::End Navbar Links-->


    <!--begin::End Navbar links-->
    <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <button
            class="btn btn-link nav-link py-2 px-0 px-lg-2 dropdown-toggle d-flex align-items-center"
            id="bd-theme"
            type="button"
            aria-expanded="false"
            data-bs-toggle="dropdown"
            data-bs-display="static"
          >
            <span class="theme-icon-active">
              <i class="my-1"></i>
            </span>
            <span class="d-lg-none ms-2" id="bd-theme-text">Toggle theme</span>
          </button>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="bd-theme-text"
            style="--bs-dropdown-min-width: 8rem;"
          >
            <li>
              <button
                type="button"
                class="dropdown-item d-flex align-items-center active"
                data-bs-theme-value="light"
                aria-pressed="false"
              >
                <i class="bi bi-sun-fill me-2"></i>
                Light
                <i class="bi bi-check-lg ms-auto d-none"></i>
              </button>
            </li>
            <li>
              <button
                type="button"
                class="dropdown-item d-flex align-items-center"
                data-bs-theme-value="dark"
                aria-pressed="false"
              >
                <i class="bi bi-moon-fill me-2"></i>
                Dark
                <i class="bi bi-check-lg ms-auto d-none"></i>
              </button>
            </li>
            <li>
              <button
                type="button"
                class="dropdown-item d-flex align-items-center"
                data-bs-theme-value="auto"
                aria-pressed="true"
              >
                <i class="bi bi-circle-fill-half-stroke me-2"></i>
                Auto
                <i class="bi bi-check-lg ms-auto d-none"></i>
              </button>
            </li>
          </ul>
        </li>
      </ul>
      <!--end::End Navbar links-->