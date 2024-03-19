<ul class="list-group list-group-flush">
    <li class="list-group-item {{ Route::is('company_dashboard') ? 'active' : '' }}">
        <a href="{{ route('company_dashboard') }}">Dashboard</a>
    </li>
    <li class="list-group-item {{ Route::is('company_make_payment') ? 'active' : '' }}">
        <a href="{{ route('company_make_payment') }}">Make Payment</a></li>
    <li class="list-group-item {{ Route::is('company_orders') ? 'active' : '' }}">
        <a href="{{ route('company_orders') }}">Orders</a>
    </li>
    <li class="list-group-item {{ Route::is('company_jobs_create') ? 'active' : '' }}">
        <a href="{{ route('company_jobs_create') }}">Create Job</a>
    </li>
    <li class="list-group-item {{ Route::is('company_jobs') ? 'active' : '' }}">
        <a href="{{ route('company_jobs') }}">All Jobs</a>
    </li>
    <li class="list-group-item {{ Route::is('company_photos') ? 'active' : '' }}">
        <a href="{{ route('company_photos') }}">Photos</a>
    </li>
    <li class="list-group-item {{ Route::is('company_videos') ? 'active' : '' }}">
        <a href="{{ route('company_videos') }}">Videos</a>
    </li>
    <li class="list-group-item">
        <a href="">Candidate Applications</a>
    </li>
    <li class="list-group-item {{ Route::is('company_edit_profile') ? 'active' : '' }}">
        <a href="{{ route('company_edit_profile') }}">Edit Profile</a>
    </li>
    <li class="list-group-item {{ Route::is('company_edit_password') ? 'active' : '' }}">
        <a href="{{ route('company_edit_password') }}">Change Password</a>
    </li>
    <li class="list-group-item">
        <a href="{{ route('company_logout') }}">Logout</a></li>
</ul>