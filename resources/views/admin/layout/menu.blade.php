
<li class="nav-item  {{ Request::is('admin/dashboard') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon bi bi-speedometer"></i>
        <p>
            {{ __('Dashboard') }}
            <i class="nav-arrow bi bi-chevron-right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin_dashboard') }}" class="nav-link">
                <i class="nav-icon bi bi-caret-right{{ Request::is('admin/dashboard') ? '-fill' : '' }}"></i>
                <p>{{ __('Dashboard') }}</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {{ Request::is('admin/home-page') || Request::is('admin/faq-page') || Request::is('admin/blog-page') || Request::is('admin/term-page') || Request::is('admin/privacy-page') || Request::is('admin/contact-page') || Request::is('admin/job-category-page') || Request::is('admin/pricing-page') || Request::is('admin/other-page') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('admin/home-page') || Request::is('admin/faq-page') || Request::is('admin/blog-page') || Request::is('admin/term-page') || Request::is('admin/privacy-page') || Request::is('admin/contact-page') || Request::is('admin/category-page') || Request::is('admin/pricing-page') || Request::is('admin/other-page') ? 'active' : '' }}">
        <i class="nav-icon bi bi-sliders"></i>
        <p>
            {{ __('Page Settings') }}
            <i class="nav-arrow bi bi-chevron-right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/home-page') ? 'active' : '' }}" href="{{ route('admin_home_page') }}"><i class="nav-icon bi bi-caret-right{{ Request::is('admin/home-page') ? '-fill' : '' }}"></i> {{ __('Home') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/faq-page') ? 'active' : '' }}" href="{{ route('admin_faq_page') }}"><i class="nav-icon bi bi-caret-right{{ Request::is('admin/faq-page') ? '-fill' : '' }}"></i> {{ __('FAQ') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/blog-page') ? 'active' : '' }}" href="{{ route('admin_blog_page') }}"><i class="nav-icon bi bi-caret-right{{ Request::is('admin/blog-page') ? '-fill' : '' }}"></i> {{ __('Blog') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/term-page') ? 'active' : '' }}" href="{{ route('admin_term_page') }}"><i class="nav-icon bi bi-caret-right{{ Request::is('admin/term-page') ? '-fill' : '' }}"></i> {{ __('Terms of Use') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/privacy-page') ? 'active' : '' }}" href="{{ route('admin_privacy_page') }}"><i class="nav-icon bi bi-caret-right{{ Request::is('admin/privacy-page') ? '-fill' : '' }}"></i> {{ __('Privacy Policy') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/contact-page') ? 'active' : '' }}" href="{{ route('admin_contact_page') }}"><i class="nav-icon bi bi-caret-right{{ Request::is('admin/contact-page') ? '-fill' : '' }}"></i> {{ __('Contact') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/category-page') ? 'active' : '' }}" href="{{ route('admin_job_category_page') }}"><i class="nav-icon bi bi-caret-right{{ Request::is('admin/job-category-page') ? '-fill' : '' }}"></i> {{ __('Job Category') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/pricing-page') ? 'active' : '' }}" href="{{ route('admin_pricing_page') }}"><i class="nav-icon bi bi-caret-right{{ Request::is('admin/pricing-page') ? '-fill' : '' }}"></i> {{ __('Pricing') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/other-page') ? 'active' : '' }}" href="{{ route('admin_other_page') }}"><i class="nav-icon bi bi-caret-right{{ Request::is('admin/other-page') ? '-fill' : '' }}"></i> {{ __('Other') }}</a></li>
    </ul>
</li>

<li class="nav-item {{ Request::is('admin/job-category/*') || Request::is('admin/job-location/*') || Request::is('admin/job-type/*') || Request::is('admin/job-experience/*') || Request::is('admin/job-gender/*') || Request::is('admin/job-salary-range/*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('admin/job-category/*') || Request::is('admin/job-location/*') || Request::is('admin/job-type/*') || Request::is('admin/job-experience/*') || Request::is('admin/job-gender/*') || Request::is('admin/job-salary-range/*') ? 'active' : '' }}">
        <i class="nav-icon bi bi-person-workspace"></i>
        <p>
            {{ __('Job Section') }}
            <i class="nav-arrow bi bi-chevron-right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/job-category/*') ? 'active' : '' }}" href="{{ route('admin_job_category') }}"><i class="nav-icon bi bi-caret-right{{ Request::is('admin/job-category/*') ? '-fill' : '' }}"></i> {{ __('Job Category') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/job-location/*') ? 'active' : '' }}" href="{{ route('admin_job_location') }}"><i class="nav-icon bi bi-caret-right{{ Request::is('admin/job-location/*') ? '-fill' : '' }}"></i> {{ __('Job Location') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/job-type/*') ? 'active' : '' }}" href="{{ route('admin_job_type') }}"><i class="nav-icon bi bi-caret-right{{ Request::is('admin/job-type/*') ? '-fill' : '' }}"></i> {{ __('Job Type') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/job-experience/*') ? 'active' : '' }}" href="{{ route('admin_job_experience') }}"><i class="nav-icon bi bi-caret-right{{ Request::is('admin/job-experience/*') ? '-fill' : '' }}"></i> {{ __('Job Experience') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/job-gender/*') ? 'active' : '' }}" href="{{ route('admin_job_gender') }}"><i class="nav-icon bi bi-caret-right{{ Request::is('admin/job-gender/*') ? '-fill' : '' }}"></i> {{ __('Job Gender') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/job-salary-range/*') ? 'active' : '' }}" href="{{ route('admin_job_salary_range') }}"><i class="nav-icon bi bi-caret-right{{ Request::is('admin/job-salary-range/*') ? '-fill' : '' }}"></i> {{ __('Job Salary Range') }}</a></li>
    </ul>
</li>

<li class="nav-item {{ Request::is('admin/company-location/*') || Request::is('admin/company-industry/*') || Request::is('admin/company-size/*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('admin/company-location/*') || Request::is('admin/company-industry/*') || Request::is('admin/company-size/*') ? 'active' : '' }}">
        <i class="nav-icon bi bi-buildings"></i>
        <p>
            {{ __('Company Section') }}
            <i class="nav-arrow bi bi-chevron-right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/company-location/*') ? 'active' : '' }}" href="{{ route('admin_company_location') }}"><i class="nav-icon bi bi-caret-right{{ Request::is('admin/company-location/*') ? '-fill' : '' }}"></i> {{ __('Company Location') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/company-industry/*') ? 'active' : '' }}" href="{{ route('admin_company_industry') }}"><i class="nav-icon bi bi-caret-right{{ Request::is('admin/company-industry/*') ? '-fill' : '' }}"></i> {{ __('Company Industry') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/company-size/*') ? 'active' : '' }}" href="{{ route('admin_company_size') }}"><i class="nav-icon bi bi-caret-right{{ Request::is('admin/company-size/*') ? '-fill' : '' }}"></i> {{ __('Company Size') }}</a></li>
    </ul>
</li>

<li class="nav-item {{ Request::is('admin/all-subscribers') || Request::is('admin/subscribers-send-email') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('admin/all-subscribers') || Request::is('admin/subscribers-send-email') ? 'active' : '' }}">
        <i class="nav-icon bi bi-postcard-fill"></i>
        <p>
            {{ __('Subscriber Section') }}
            <i class="nav-arrow bi bi-chevron-right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/all-subscribers') ? 'active' : '' }}" href="{{ route('admin_all_subscribers') }}"><i class="nav-icon bi bi-caret-right{{ Request::is('admin/all-subscribers') ? '-fill' : '' }}"></i> {{ __('All Subscribers') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('admin/subscribers-send-email') ? 'active' : '' }}" href="{{ route('admin_subscribers_send_email') }}"><i class="nav-icon bi bi-caret-right{{ Request::is('admin/subscribers-send-email') ? '-fill' : '' }}"></i> {{ __('Send mail to Subscribers') }}</a></li>
    </ul>
</li>

<li class="nav-item">
    <a href="{{ route('admin_why_choose_item') }}" class="nav-link {{ Request::is('admin/why-choose/*') ? 'active' : '' }}">
        <i class="nav-icon bi bi-person-fill-check"></i> <p>{{ __('Why Choose Items') }}</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin_testimonial') }}" class="nav-link {{ Request::is('admin/testimonial/*') ? 'active' : '' }}">
        <i class="nav-icon bi bi-person-video2"></i> <p>{{ __('Testimonials') }}</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin_post') }}" class="nav-link {{ Request::is('admin/post/*') ? 'active' : '' }}"">
        <i class="nav-icon bi bi-file-earmark-post-fill"></i> <p>{{ __('Posts') }}</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin_faq') }}" class="nav-link {{ Request::is('admin/faq/*') ? 'active' : '' }}">
        <i class="nav-icon bi bi-question-circle-fill"></i> <p>{{ __('Faqs') }}</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin_package') }}" class="nav-link {{ Request::is('admin/package/*') ? 'active' : '' }}">
        <i class="nav-icon bi bi-ui-checks-grid"></i> <p>{{ __('Packages') }}</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin_advertisement') }}" class="nav-link {{ Request::is('admin/advertisement') ? 'active' : '' }}">
        <i class="nav-icon bi bi-browser-edge"></i> <p>{{ __('Advertisement') }}</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin_banner') }}" class="nav-link {{ Request::is('admin/banner') ? 'active' : '' }}">
        <i class="nav-icon bi bi-card-image"></i> <p>{{ __('Banners') }}</p>
    </a>
</li>
