<ul class="list-group list-group-flush">
    <li class="list-group-item {{ Route::is('candidate_dashboard') ? 'active' : '' }}">
        <a href="{{ route('candidate_dashboard') }}">Dashboard</a>
    </li>
    <li class="list-group-item {{ Route::is('candidate_apply_view') ? 'active' : '' }}">
        <a href="{{ route('candidate_apply_view') }}">Applied Jobs</a></li>
    <li class="list-group-item {{ Route::is('candidate_bookmark_view') ? 'active' : '' }}">
        <a href="{{ route('candidate_bookmark_view') }}">Bookmarked Jobs</a>
    </li>
    <li class="list-group-item {{ Route::is('candidate_education') ? 'active' : '' }}">
        <a href="{{ route('candidate_education') }}">Education</a>
    </li>
    <li class="list-group-item {{ Route::is('candidate_skill') ? 'active' : '' }}">
        <a href="{{ route('candidate_skill') }}">Skills</a>
    </li>
    <li class="list-group-item {{ Route::is('candidate_work_experience') ? 'active' : '' }}">
        <a href="{{ route('candidate_work_experience') }}">Work Experience</a>
    </li>
    <li class="list-group-item {{ Route::is('candidate_award') ? 'active' : '' }}">
        <a href="{{ route('candidate_award') }}">Awards</a>
    </li>
    <li class="list-group-item {{ Route::is('candidate_edit_profile') ? 'active' : '' }}">
        <a href="{{ route('candidate_edit_profile') }}">Edit Profile</a>
    </li>
    <li class="list-group-item {{ Route::is('candidate_edit_password') ? 'active' : '' }}">
        <a href="{{ route('candidate_edit_password') }}">Change Password</a>
    </li>
    <li class="list-group-item {{ Route::is('candidate_resume') ? 'active' : '' }}">
        <a href="{{ route('candidate_resume') }}">Resume Upload</a>
    </li>
    <li class="list-group-item">
        <a href="{{ route('candidate_logout') }}">Logout</a></li>
</ul>