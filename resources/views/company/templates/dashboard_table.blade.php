<div class="card shadow">
    <div class="card-header border-bottom">
        <h5 class="card-header-title">{{ $heading ?? __('Heading') }}</h5>
    </div>

    <!-- Card body START -->
    <div class="card-body">
        <!--
        <div class="row g-3 align-items-center justify-content-between mb-3">            
            <div class="col-md-8">
                <form class="rounded position-relative">
                    <input class="form-control pe-5" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn border-0 px-3 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6"></i></button>
                </form>
            </div>            
            <div class="col-md-3">                
                <form>
                    <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-select js-choice choices__input" aria-label=".form-select-sm" hidden="" tabindex="-1" data-choice="active"><option value="" data-custom-properties="[object Object]">Sort by</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__placeholder choices__item--selectable" data-item="" data-id="1" data-value="" data-custom-properties="[object Object]" aria-selected="true">Sort by</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" role="listbox"><div id="choices--1twz-item-choice-1" class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Sort by</div><div id="choices--1twz-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Free" data-select-text="Press to select" data-choice-selectable="">Free</div><div id="choices--1twz-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Newest" data-select-text="Press to select" data-choice-selectable="">Newest</div><div id="choices--1twz-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Oldest" data-select-text="Press to select" data-choice-selectable="">Oldest</div></div></div></div>
                </form>
            </div>
        </div>
        -->

        <!-- Table head -->
        <div class="bg-light rounded p-3 d-none d-lg-block">
            <div class="row row-cols-7 g-4">
                <div class="col-md-3 col-5"><h6 class="mb-0 fw-bold">{{ __('Title') }}</h6></div>
                <div class="col-md-3 col-4"><h6 class="mb-0 fw-bold">{{ __('Category') }}</h6></div>
                <div class="col-md-2 col-3"><h6 class="mb-0 fw-bold">{{ __('Location') }}</h6></div>
                <div class="col-md-2 col-6"><h6 class="mb-0 fw-bold">{{ __('Is Featured') }}?</h6></div>
                <div class="col-md-2 col-6"><h6 class="mb-0 fw-bold">{{ __('Is Urgent') }}?</h6></div>
            </div>
        </div>

        @foreach($jobs as $item)        
            <!-- Table data -->
            <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
                <div class="col-md-3 col-5">
                    <small class="d-block d-lg-none fw-bold">{{ __('Title') }}:</small>
                    <h6 class="mb-0 fw-normal">{{ $item->title }}</h6>
                </div>
                <div class="col-md-3 col-4">
                    <small class="d-block d-lg-none fw-bold">{{ __('Category') }}:</small>
                    <h6 class="mb-0 fw-normal">{{ $item->rJobCategory->name }}</h6>
                </div>
                <div class="col-md-2 col-3">
                    <small class="d-block d-lg-none fw-bold">{{ __('Location') }}:</small>
                    <h6 class="mb-0 fw-normal">{{ $item->rJobLocation->name }}</h6>
                </div>
                <div class="col-md-2 col-6">
                    <small class="d-block d-lg-none fw-bold">{{ __('Is Featured') }}?</small>
                    <h6 class="mb-0 fw-normal">            
                        @if($item->is_featured == 1)
                        <span class="badge bg-success">{{ __('Featured') }}</span>
                        @else
                        <span class="badge bg-danger">{{ __('Not Featured') }}</span>
                        @endif
                    </h6>
                </div>
                <div class="col-md-2 col-6">
                    <small class="d-block d-lg-none fw-bold">{{ __('Is Urgent') }}?</small>
                    <h6 class="text-success mb-0">            
                        @if($item->is_urgent == 1)
                        <span class="badge bg-danger">{{ __('Urgent') }}</span>
                        @else
                        <span class="badge bg-primary">{{ __('Not Urgent') }}</span>
                        @endif
                    </h6>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Card body END -->

    <!-- Card footer START -->
    <!--
    <div class="card-footer pt-0">        
        <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
            <p class="mb-sm-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
            <nav class="mb-sm-0 d-flex justify-content-center" aria-label="navigation">
                <ul class="pagination pagination-sm pagination-primary-soft mb-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Prev</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">..</a></li>
                    <li class="page-item"><a class="page-link" href="#">15</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    -->
    <!-- Card footer END -->
</div>