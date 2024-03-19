<ul class="list-group list-group-flush">
    <li class="list-group-item {{ Route::is('candidate_dashboard') ? 'active' : '' }}">
        <a href="{{ route('candidate_dashboard') }}">Dashboard</a>
    </li>
    <li class="list-group-item">
        <a href="">Applied Jobs</a></li>
    <li class="list-group-item">
        <a href="">Bookmarked Jobs</a>
    </li>
    <li class="list-group-item">
        <a href="">Education</a>
    </li>
    <li class="list-group-item">
        <a href="">Skills</a>
    </li>
    <li class="list-group-item">
        <a href="">Work Experience</a>
    </li>
    <li class="list-group-item">
        <a href="">Awards</a>
    </li>
    <li class="list-group-item {{ Route::is('candidate_edit_profile') ? 'active' : '' }}">
        <a href="{{ route('candidate_edit_profile') }}">Edit Profile</a>
    </li>
    <li class="list-group-item {{ Route::is('candidate_edit_password') ? 'active' : '' }}">
        <a href="{{ route('candidate_edit_password') }}">Change Password</a>
    </li>
    <li class="list-group-item">
        <a href="">Resume Upload</a>
    </li>
    <li class="list-group-item">
        <a href="{{ route('candidate_logout') }}">Logout</a></li>
</ul>