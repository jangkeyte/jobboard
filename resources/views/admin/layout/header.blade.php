<!--begin::Header-->
<nav class="app-header navbar navbar-expand bg-body"> <!--begin::Container-->
   <div class="container-fluid"> <!--begin::Start Navbar Links-->
      <ul class="navbar-nav">
         <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i class="bi bi-list"></i> </a> </li>
         <li class="nav-item d-none d-md-block"> <a href="{{ route('home') }}" class="nav-link">{{ __('Home') }}</a> </li>
      </ul> <!--end::Start Navbar Links--> 
      <!--begin::End Navbar Links-->
      <ul class="navbar-nav ms-auto"> 
         <!--begin::Navbar Search-->
         <li class="nav-item"> <a class="nav-link" data-widget="navbar-search" href="#" role="button"> <i class="bi bi-search"></i> </a> </li> <!--end::Navbar Search--> 
         <!--
         <li class="nav-item dropdown"> 
            <a class="nav-link" data-bs-toggle="dropdown" href="#"> <i class="bi bi-chat-text"></i> <span class="navbar-badge badge text-bg-danger">3</span> </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <a href="#" class="dropdown-item"> 
                  <div class="d-flex">
                        <div class="flex-shrink-0"> <img src="" alt="User Avatar" class="img-size-50 rounded-circle me-3"> </div>
                        <div class="flex-grow-1">
                           <h3 class="dropdown-item-title">
                              Brad Diesel
                              <span class="float-end fs-7 text-danger"><i class="bi bi-star-fill"></i></span>
                           </h3>
                           <p class="fs-7">Call me whenever you can...</p>
                           <p class="fs-7 text-secondary"> <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                           </p>
                        </div>
                  </div> 
               </a>
               <div class="dropdown-divider"></div> <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
         </li>
         <li class="nav-item dropdown"> 
            <a class="nav-link" data-bs-toggle="dropdown" href="#"> <i class="bi bi-bell-fill"></i> <span class="navbar-badge badge text-bg-warning">15</span> </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <span class="dropdown-item dropdown-header">15 Notifications</span>
               <div class="dropdown-divider"></div> 
               <a href="#" class="dropdown-item"> 
                  <i class="bi bi-envelope me-2"></i> 4 new messages
                  <span class="float-end text-secondary fs-7">3 mins</span> </a>
               <div class="dropdown-divider"></div> 
               <a href="#" class="dropdown-item dropdown-footer"> See All Notifications</a>
            </div>
         </li> 
         -->
         <!--begin::Fullscreen Toggle-->
         <li class="nav-item"> <a class="nav-link" href="#" data-lte-toggle="fullscreen"> <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i> <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i> </a> </li> <!--end::Fullscreen Toggle--> <!--begin::User Menu Dropdown-->
         <li class="nav-item dropdown user-menu"> 
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> 
               @include('front/templates/image', ['image' => auth()->user()->photo, 'name' => __('User Image'), 'class' => 'user-image rounded-circle showdow'])
               <span class="d-none d-md-inline">{{ auth()->user()->name }}</span> 
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <!--begin::User Image-->
               <li class="user-header text-bg-primary"> 
                  @include('front/templates/image', ['image' => auth()->user()->photo, 'name' => __('User Image'), 'class' => 'rounded-circle showdow'])
                  <p>
                     {{ auth()->user()->name }} | {{ __('Administrator') }}
                     <small>Member since {{ auth()->user()->created_at->month }}/{{ auth()->user()->created_at->year }}</small>
                  </p>
               </li> <!--end::User Image--> <!--begin::Menu Body-->
               <li class="user-footer"> 
                  <a href="{!! route('admin_profile') !!}" class="btn btn-default btn-flat">{{ __('Profile') }}</a> 
                  <a href="{!! route('admin_logout') !!}" class="btn btn-default btn-flat float-end">{{ __('Sign out') }}</a> </li> <!--end::Menu Footer-->
            </ul>
         </li> <!--end::User Menu Dropdown-->
      </ul> <!--end::End Navbar Links-->
   </div> <!--end::Container-->
</nav> <!--end::Header-->