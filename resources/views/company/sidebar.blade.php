<ul class="list-group list-group-flush">
    <li class="list-group-item {{ Route::is('company_dashboard') ? 'active' : '' }}">
        <a href="{{ route('company_dashboard') }}">{{ __('Dashboard') }}</a>
    </li>
    <li class="list-group-item {{ Route::is('company_make_payment') ? 'active' : '' }}">
        <a href="{{ route('company_make_payment') }}">{{ __('Make Payment') }}</a></li>
    <li class="list-group-item {{ Route::is('company_orders') ? 'active' : '' }}">
        <a href="{{ route('company_orders') }}">{{ __('Orders') }}</a>
    </li>
    <li class="list-group-item {{ Route::is('company_jobs_create') ? 'active' : '' }}">
        <a href="{{ route('company_jobs_create') }}">{{ __('Create Job') }}</a>
    </li>
    <li class="list-group-item {{ Route::is('company_jobs') ? 'active' : '' }}">
        <a href="{{ route('company_jobs') }}">{{ __('All Jobs') }}</a>
    </li>
    <li class="list-group-item">
        <a href="{{ route('company_candidate_listing') }}">{{ __('Find Candidate') }}</a>
    </li>
    <li class="list-group-item {{ Route::is('company_photos') ? 'active' : '' }}">
        <a href="{{ route('company_photos') }}">{{ __('Photos') }}</a>
    </li>
    <li class="list-group-item {{ Route::is('company_videos') ? 'active' : '' }}">
        <a href="{{ route('company_videos') }}">{{ __('Videos') }}</a>
    </li>
    <li class="list-group-item {{ Route::is('company_candidate_applications') ? 'active' : '' }}">
        <a href="{{ route('company_candidate_applications') }}">{{ __('Candidate Applications') }}</a>
    </li>
    <li class="list-group-item {{ Route::is('company_edit_profile') ? 'active' : '' }}">
        <a href="{{ route('company_edit_profile') }}">{{ __('Edit Profile') }}</a>
    </li>
    <li class="list-group-item {{ Route::is('company_edit_password') ? 'active' : '' }}">
        <a href="{{ route('company_edit_password') }}">{{ __('Change Password') }}</a>
    </li>
    <li class="list-group-item">
        <a href="{{ route('company_logout') }}">{{ __('Logout') }}</a></li>
</ul>