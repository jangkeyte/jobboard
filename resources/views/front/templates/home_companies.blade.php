<section id="companies" class="splide" aria-label="Splide Basic HTML Example">
    <div class="splide__track mb-2">
        <ul class="splide__list">
            @foreach ($companies as $item)
                <li class="splide__slide">
                    <div class="card category-item text-center m-2">
                        <div class="careerfy-seventeen-employers-grid-inner">
                            <figure>
                                <a href="{{ route('company', $item->id) }}">
                                    @if(file_exists(asset('uploads/' . $item->logo)))
                                        <img src="{{ asset('uploads/' . $item->logo) }}" alt="{{ $item->company_name }}">
                                    @else
                                        <img src="{{ asset('assets/images/default_company.jpg') }}" alt="{{ $item->company_name }}">
                                    @endif
                                </a>
                            </figure>
                            <h2>
                                <a href="{{ route('company', $item->id) }}">{{ $item->company_name }}</a>
                            </h2>
                            <span>{{ $item->rCompanyIndustry->name }}</span>
                            <small>{{ $item->r_job_count }} {{ __('POSITION') }}</small>
                            <span class="careerfy-jobli-medium3"><i class="fa fa-star"></i></span>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>



@push('scripts')
    <script>
        new Splide('#companies', {
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
        }).mount();
    </script>
@endpush
