<div class="col-md-12 my-2 border">                                        
    <div class="row">
        <div class="col-md-12 text-end pe-0">
            <span class="promotepof-badgeemp"><i class="fa fa-star pe-1" title="Featured"></i>{{__('Featured')}}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1 pb-3 pt-2 ">
                <a href="{{ route('company', $item->id) }}" style="width:85px; height:85px; display: block;">
                    @include('front/templates/image', array('image' => $item->logo, 'name' => $item->company_name))
                </a>
        </div>
        <div class="col-md-8 pt-2 ps-5">
            <ul class="list-unstyled fs-7">
                <li><a class ="text-danger" href="javascript:void(0);">{{ $item->rCompanyIndustry->name }}</a></li>
                <li class="pt-1"><h7><a class="fw-bold" href="{{ route('company', $item->id) }}">{{ $item->company_name }}</a></h7></li>
                <li class="pt-1"><i class="pe-1 fa fa-location-dot"></i>{{ $item->rCompanyLocation->name }}</li>
            </ul>
        </div>

        <div class="col-md-3 pt-3 mt-2">
            <ul class="list-unstyled fs-7">
                <li>
                    <button type="submit" class="btn btn-outline hover-danger rounded-1 btn-follow me-2"><i class="fa fa-user-plus pe-2"></i>{{ __('Follow') }}</button>
                    <button type="submit" class="btn btn-outline hover-danger rounded-1 btn-follow">{{ $item->r_job_sum_vacancy }} {{ __('Vacancy') }}</button>
                </li>
            </ul>

        </div>
    </div>
</div>