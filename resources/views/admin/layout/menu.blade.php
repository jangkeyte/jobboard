
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            {{ __('Dashboard') }}
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v1</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v2</p>
            </a>
        </li> 
    </ul>
</li>

<li class="nav-item {{ Request::is('admin/home-page') || Request::is('admin/faq-page') || Request::is('admin/blog-page') || Request::is('admin/term-page') || Request::is('admin/privacy-page') || Request::is('admin/contact-page') || Request::is('admin/category-page') || Request::is('admin/pricing-page') || Request::is('admin/other-page') ? 'menu-is-opening menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('admin/home-page') || Request::is('admin/faq-page') || Request::is('admin/blog-page') || Request::is('admin/term-page') || Request::is('admin/privacy-page') || Request::is('admin/contact-page') || Request::is('admin/category-page') || Request::is('admin/pricing-page') || Request::is('admin/other-page') ? 'active' : '' }}">
        <i class="nav-icon fas fa-th"></i>
        <p>
            {{ __('Page Settings') }}
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/home-page') ? 'active' : '' }}" href="{{ route('admin_home_page') }}"><i class="far fa-circle nav-icon"></i> {{ __('Home') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/faq-page') ? 'active' : '' }}" href="{{ route('admin_faq_page') }}"><i class="far fa-circle nav-icon"></i> {{ __('FAQ') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/blog-page') ? 'active' : '' }}" href="{{ route('admin_blog_page') }}"><i class="far fa-circle nav-icon"></i> {{ __('Blog') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/term-page') ? 'active' : '' }}" href="{{ route('admin_term_page') }}"><i class="far fa-circle nav-icon"></i> {{ __('Terms of Use') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/privacy-page') ? 'active' : '' }}" href="{{ route('admin_privacy_page') }}"><i class="far fa-circle nav-icon"></i> {{ __('Privacy Policy') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/contact-page') ? 'active' : '' }}" href="{{ route('admin_contact_page') }}"><i class="far fa-circle nav-icon"></i> {{ __('Contact') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/category-page') ? 'active' : '' }}" href="{{ route('admin_job_category_page') }}"><i class="far fa-circle nav-icon"></i> {{ __('Job Category') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/pricing-page') ? 'active' : '' }}" href="{{ route('admin_pricing_page') }}"><i class="far fa-circle nav-icon"></i> {{ __('Pricing') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/other-page') ? 'active' : '' }}" href="{{ route('admin_other_page') }}"><i class="far fa-circle nav-icon"></i> {{ __('Other') }}</a></li>
    </ul>
</li>

<li class="nav-item {{ Request::is('admin/job-category/*') || Request::is('admin/job-location/*') || Request::is('admin/job-type/*') || Request::is('admin/job-experience/*') || Request::is('admin/job-gender/*') || Request::is('admin/job-salary-range/*') ? 'menu-is-opening menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('admin/job-category/*') || Request::is('admin/job-location/*') || Request::is('admin/job-type/*') || Request::is('admin/job-experience/*') || Request::is('admin/job-gender/*') || Request::is('admin/job-salary-range/*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-graduate"></i>
        <p>
            {{ __('Job Section') }}
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/job-category/*') ? 'active' : '' }}" href="{{ route('admin_job_category') }}"><i class="far fa-circle nav-icon"></i> {{ __('Job Category') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/job-location/*') ? 'active' : '' }}" href="{{ route('admin_job_location') }}"><i class="far fa-circle nav-icon"></i> {{ __('Job Location') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/job-type/*') ? 'active' : '' }}" href="{{ route('admin_job_type') }}"><i class="far fa-circle nav-icon"></i> {{ __('Job Type') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/job-experience/*') ? 'active' : '' }}" href="{{ route('admin_job_experience') }}"><i class="far fa-circle nav-icon"></i> {{ __('Job Experience') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/job-gender/*') ? 'active' : '' }}" href="{{ route('admin_job_gender') }}"><i class="far fa-circle nav-icon"></i> {{ __('Job Gender') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/job-salary-range/*') ? 'active' : '' }}" href="{{ route('admin_job_salary_range') }}"><i class="far fa-circle nav-icon"></i> {{ __('Job Salary Range') }}</a></li>
    </ul>
</li>

<li class="nav-item {{ Request::is('admin/company-location/*') || Request::is('admin/company-industry/*') || Request::is('admin/company-size/*') ? 'menu-is-opening menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('admin/company-location/*') || Request::is('admin/company-industry/*') || Request::is('admin/company-size/*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users"></i>
        <p>
            {{ __('Company Section') }}
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/company-location/*') ? 'active' : '' }}" href="{{ route('admin_company_location') }}"><i class="far fa-circle nav-icon"></i> {{ __('Company Location') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/company-industry/*') ? 'active' : '' }}" href="{{ route('admin_company_industry') }}"><i class="far fa-circle nav-icon"></i> {{ __('Company Industry') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/company-size/*') ? 'active' : '' }}" href="{{ route('admin_company_size') }}"><i class="far fa-circle nav-icon"></i> {{ __('Company Size') }}</a></li>
    </ul>
</li>

<li class="nav-item {{ Request::is('admin/all-subscribers') || Request::is('admin/subscribers-send-email') ? 'menu-is-opening menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('admin/all-subscribers') || Request::is('admin/subscribers-send-email') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-tag"></i>
        <p>
            {{ __('Subscriber Section') }}
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/all-subscribers') ? 'active' : '' }}" href="{{ route('admin_all_subscribers') }}"><i class="far fa-circle nav-icon"></i> {{ __('All Subscribers') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/subscribers-send-email') ? 'active' : '' }}" href="{{ route('admin_subscribers_send_email') }}"><i class="far fa-circle nav-icon"></i> {{ __('Send mail to Subscribers') }}</a></li>
    </ul>
</li>

<li class="nav-item">
    <a href="{{ route('admin_why_choose_item') }}" class="nav-link {{ Request::is('admin/why-choose/*') ? 'active' : '' }}">
        <i class="nav-icon fab fa-angellist"></i> <p>{{ __('Why Choose Items') }}</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin_testimonial') }}" class="nav-link {{ Request::is('admin/testimonial/*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-volume-off"></i> <p>{{ __('Testimonials') }}</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin_post') }}" class="nav-link {{ Request::is('admin/post/*') ? 'active' : '' }}"">
        <i class="nav-icon fas fa-blog"></i> <p>{{ __('Posts') }}</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin_faq') }}" class="nav-link {{ Request::is('admin/faq/*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-question"></i> <p>{{ __('Faqs') }}</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin_package') }}" class="nav-link {{ Request::is('admin/package/*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-box-open"></i> <p>{{ __('Packages') }}</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin_advertisement') }}" class="nav-link {{ Request::is('admin/advertisement') ? 'active' : '' }}">
        <i class="nav-icon fab fa-adversal"></i> <p>{{ __('Advertisement') }}</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin_banner') }}" class="nav-link {{ Request::is('admin/banner') ? 'active' : '' }}">
        <i class="nav-icon fas fa-image"></i> <p>{{ __('Banners') }}</p>
    </a>
</li>
