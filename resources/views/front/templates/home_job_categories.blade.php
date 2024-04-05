<section id="job-category" class="splide" aria-label="Splide Basic HTML Example">
    <div class="splide__track mb-2">
        <ul class="splide__list">
            @foreach($job_categories as $item)
                <li class="splide__slide">
                    <div class="card category-item text-center m-4">
                        <a href="{{ url('job-listing?category=' . $item->id) }}">
                            <div class="card-body">
                                <div class="icon fs-1 text-danger mb-3">
                                    <i class="{{ $item->icon }}"></i>
                                </div>
                                <h2 >{{ $item->name }}</h2>
                                <span class="btn btn-danger btn-sm px-3">{{ $item->r_job_count }}</span>
                            </div>
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>

@push('scripts')
<script>
    new Splide( '#job-category', {
        type: 'loop',
        padding: '1rem',
        perPage: 4,
        breakpoints: {
            768: {
                perPage: 3,
            },
            640: {
                perPage: 2,
            },
            480: {
                perPage: 1,
            },
        }
    } ).mount();
</script>
@endpush