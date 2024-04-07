<ul class="list-group list-group-flush">
    <li class="list-group-item {{ Route::is('candidate_dashboard') ? 'active' : '' }}">
        <a href="{{ route('candidate_dashboard') }}">{{ __('Dashboard') }}</a>
    </li>
    <li class="list-group-item {{ Route::is('candidate_apply_view') ? 'active' : '' }}">
        <a href="{{ route('candidate_apply_view') }}">{{ __('Applied Jobs') }}</a></li>
    <li class="list-group-item {{ Route::is('candidate_bookmark_view') ? 'active' : '' }}">
        <a href="{{ route('candidate_bookmark_view') }}">{{ __('Bookmarked Jobs') }}</a>
    </li>
    <li class="list-group-item {{ Route::is('candidate_education') ? 'active' : '' }}">
        <a href="{{ route('candidate_education') }}">{{ __('Education') }}</a>
    </li>
    <li class="list-group-item {{ Route::is('candidate_skill') ? 'active' : '' }}">
        <a href="{{ route('candidate_skill') }}">{{ __('Skills') }}</a>
    </li>
    <li class="list-group-item {{ Route::is('candidate_work_experience') ? 'active' : '' }}">
        <a href="{{ route('candidate_work_experience') }}">{{ __('Work Experience') }}</a>
    </li>
    <li class="list-group-item {{ Route::is('candidate_award') ? 'active' : '' }}">
        <a href="{{ route('candidate_award') }}">{{ __('Awards') }}</a>
    </li>
    <li class="list-group-item {{ Route::is('candidate_edit_profile') ? 'active' : '' }}">
        <a href="{{ route('candidate_edit_profile') }}">{{ __('Edit Profile') }}</a>
    </li>
    <li class="list-group-item {{ Route::is('candidate_edit_password') ? 'active' : '' }}">
        <a href="{{ route('candidate_edit_password') }}">{{ __('Change Password') }}</a>
    </li>
    <li class="list-group-item {{ Route::is('candidate_resume') ? 'active' : '' }}">
        <a href="{{ route('candidate_resume') }}">{{ __('Resume Upload') }}</a>
    </li>
    <li class="list-group-item">
        <a href="{{ route('candidate_logout') }}">{{ __('Logout') }}</a></li>
</ul>