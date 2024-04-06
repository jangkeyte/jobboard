<div class="careerfy-refejobs-list-inner">
    @if($item->is_urgent)
    <span class="urgntpkg-jobv1">{{ __('urgent') }}</span>
    @endif
    <figure>
        <a href="{{ route('job', $item->id) }}">
            @include('front/templates/image', array('image' => $item->rCompany->logo, 'name' => $item->rCompany->company_name))
        </a>
        <figcaption>
            <h2>
                <a href="{{ route('job', $item->id) }}">{{ $item->title }}</a>
            </h2>
            <span><a href="{{ route('company', $item->company_id) }}">{{ $item->rCompany->company_name }}</a></span>
        </figcaption>
    </figure>
    <small><i class="fa-solid fa-briefcase text-danger"></i>{{ $item->rJobCategory->name }}</small> 
    <small><i class="fa-solid fa-location-dot text-danger"></i>{{ $item->rJobLocation->name }}</small>
    <small><i class="fa-solid fa-money-bill text-danger"></i> {{ $item->rJobSalaryRange->name }} / {{ __('Monthly') }}</small>
    <small><i class="fa-solid fa-calendar text-danger"></i>{{ $item->deadline }}</small>
    <a href="{{ route('job', $item->id) }}" class="careerfy-refejobs-list-btn"><span>{{ __('Apply') }}</span></a>
</div>
