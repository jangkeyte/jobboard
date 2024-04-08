<div class="page-content-wrapper mb-4">	
    <!-- Title -->
    <div class="row">
        <div class="col-12">
            <div class="d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">{{ __('Hello') . Auth::guard('company')->user()->person_name }} ({{ Auth::guard('company')->user()->company_name }})</h1>
                <div class="d-grid"><a href="#" class="btn btn-primary-soft hover-danger border-danger text-danger rounded-pill mb-0"><i class="bi bi-plus-lg fa-fw"></i> {{ __('Logout') }}</a></div>				
            </div>
            <p>{{ __('See all the statistics at a glance') }}</p>
        </div>
    </div>

    <!-- Counter boxes START -->
    <div class="row g-4">
        <!-- Counter item -->
        <div class="col-md-6 col-xxl-4">
            <div class="card card-body bg-warning bg-opacity-10 border border-warning border-opacity-25 p-4 h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Digit -->
                    <div>
                        <h4 class="mb-0">{{ $total_opened_jobs }}</h4>
                        <span class="h6 fw-light mb-0">{{ __('Open Jobs') }}</span>
                    </div>
                    <!-- Icon -->
                    <div class="icon-lg rounded-circle bg-warning text-white mb-0"><i class="fa-solid fa-hotel fa-fw"></i></div>
                </div>
            </div>
        </div>

        <!-- Counter item -->
        <div class="col-md-6 col-xxl-4">
            <div class="card card-body bg-success bg-opacity-10 border border-success border-opacity-25 p-4 h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Digit -->
                    <div>
                        <h4 class="mb-0">{{ $total_featured_jobs }}</h4>
                        <span class="h6 fw-light mb-0">{{ __('Featured Jobs') }}</span>
                    </div>
                    <!-- Icon -->
                    <div class="icon-lg rounded-circle bg-success text-white mb-0"><i class="fa-solid fa-hand-holding-dollar fa-fw"></i></div>
                </div>
            </div>
        </div>

        <!-- Counter item -->
        <div class="col-md-6 col-xxl-4">
            <div class="card card-body bg-primary bg-opacity-10 border border-primary border-opacity-25 p-4 h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Digit -->
                    <div>
                        <h4 class="mb-0">{{ $total_urgent_jobs }}</h4>
                        <span class="h6 fw-light mb-0">{{ __('Pending Jobs Jobs') }}</span>
                    </div>
                    <!-- Icon -->
                    <div class="icon-lg rounded-circle bg-primary text-white mb-0"><i class="fa-solid fa-bed fa-fw"></i></div>
                </div>
            </div>
        </div>

    </div>
    <!-- Counter boxes END -->
</div>