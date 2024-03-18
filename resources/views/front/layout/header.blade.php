<div class="top">
    <div class="container">
        <div class="row">
            <div class="col-md-6 left-side">
                <ul>
                    <li class="phone-text">111-222-3333</li>
                    <li class="email-text">contact@jangkeyte.com</li>
                </ul>
            </div>
            <div class="col-md-6 right-side">
                <ul class="right">
                    @if(Auth::guard('company')->check())
                    <li class="menu"><a href="{{ route('company_dashboard') }}"><i class="fa-solid fa-house"></i> Dashboard</a></li>
                    @elseif(Auth::guard('candidate')->check())
                    <li class="menu"><a href="{{ route('candidate_dashboard') }}"><i class="fa-solid fa-house"></i> Dashboard</a></li>
                    @else
                    <li class="menu"><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                    <li class="menu"><a href="{{ route('signup') }}"><i class="fas fa-user"></i> Sign Up</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>

@include('front.layout.nav')