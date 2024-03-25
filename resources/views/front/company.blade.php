@extends('front.layout.app')

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/' . ($global_banner_data->banner_company_detail ?? 'banner_default.jpg')) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ __('Job Title') }}</h2>
            </div>
        </div>
    </div>
</div>

@isset($company_single)
<div class="page-top page-top-company-single" style="background-image: url({{ asset('uploads/banner.jpg') }}">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 company company-single">
                <div class="item d-flex justify-content-start">
                    <div class="logo"><img src="{{ asset('uploads/' . $company_single->logo) }}"></div>
                    <div class="text">
                        <h3>{{ $company_single->title }}, {{ $company_single->company_name }}</h3>
                        <div class="detail-1 d-flex justify-content-start">
                            <div class="category">{{ $company_single->rCompanyIndustry->name }}</div>
                            <div class="location">{{ $company_single->rCompanyLocation->name }}</div>
                            <div class="email">{{ $company_single->email }}</div>
                            @if($company_single->phone != '')
                            <div class="phone">{{ $company_single->phone }}</div>
                            @endif
                        </div>
                        <div class="special">
                            <div class="type">{{ $company_single->r_job_count }} Open Postions</div>
                            @if($company_single->facebook != '' || $company_single->twitter != '' || $company_single->linkedin != '' || $company_single->instagram != '')
                            <div class="social">
                                <ul>
                                    @if($company_single->facebook != '')
                                        <li><a href="{{ $company_single->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    @endif
                                    @if($company_single->twitter != '')
                                        <li><a href="{{ $company_single->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    @endif
                                    @if($company_single->linkedin != '')
                                        <li><a href="{{ $company_single->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    @endif
                                    @if($company_single->instagram != '')
                                        <li><a href="{{ $company_single->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        @endif
                        <div class="apply">
                            <a href="" class="btn btn-primary save-company">Bookmark</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="company-result pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="left-item">
                    <h2><i class="fas fa-file-invoice"></i> Description</h2>
                    <p>{!! $company_single->description !!}</p>
                </div>
                @if($company_single->oh_mon != null || $company_single->oh_tue || $company_single->oh_web || $company_single->oh_thu || $company_single->oh_fri || $company_single->oh_sat || $company_single->oh_sun)
                <div class="left-item">
                    <h2><i class="fas fa-file-invoice"></i> Opening Hours</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td>Monday</td>
                                <td>{{ $company_single->oh_mon ?? 'Off-day' }}</td>
                            </tr>
                            <tr>
                                <td>Tuesday</td>
                                <td>{{ $company_single->oh_tue ?? 'Off-day' }}</td>
                            </tr>
                            <tr>
                                <td>Webnesday</td>
                                <td>{{ $company_single->oh_web ?? 'Off-day' }}</td>
                            </tr>
                            <tr>
                                <td>Thursday</td>
                                <td>{{ $company_single->oh_thu ?? 'Off-day' }}</td>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td>{{ $company_single->oh_fri ?? 'Off-day' }}</td>
                            </tr>
                            <tr>
                                <td>Saturday</td>
                                <td>{{ $company_single->oh_sat ?? 'Off-day' }}</td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <td>{{ $company_single->oh_sun ?? 'Off-day' }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                @endif
                
                @if($company_photos->count() != 0)
                <div class="left-item">
                    <h2><i class="fas fa-file-invoice"></i> Photos</h2>
                    <div class="photo-all">
                        <div class="row">
                            @foreach($company_photos as $item)
                            <div class="col-md-6 col-lg-4">
                                <div class="item">
                                    <a href="{{ asset('uploads/' . $item->photo) }}" class="magnific">
                                        <img src="{{ asset('uploads/' . $item->photo) }}" alt="">
                                        <div class="icon"><i class="fas fa-plus"></i></div>
                                        <div class="bg"></div>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

                @if($company_videos->count() != 0)
                <div class="left-item">
                    <h2><i class="fas fa-file-invoice"></i> Videos</h2>
                    <div class="video-all">
                        <div class="row">
                            @foreach($company_videos as $item)
                            <div class="col-md-6 col-lg-4">
                                <div class="item">
                                    <a href="https://www.youtobe.com/watch/?v={{  $item->video }}" class="video-button">
                                        <img src="https://img.youtube.com/vi/{{ $item->video }}/0.jpg" alt="">
                                        <div class="icon"><i class="far fa-play-circle"></i></div>
                                        <div class="bg"></div>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
                
                <div class="left-item">
                    <h2><i class="fas fa-file-invoice"></i> Open Positions</h2>
                    <div class="job related-job pt-0 pb-0">
                        <div class="container">
                            <div class="row">
                                @forelse($jobs as $item)
                                    <div class="col-md-12">
                                        <div class="item d-flex justify-content-start">
                                            <div class="logo">
                                                <img src="{{ asset('uploads/' . $item->rCompany->logo) }}" alt="{{ $company_single->company_name }}">
                                            </div>
                                            <div class="text">
                                                <h3>
                                                    <a href="{{ route('job', $item->id) }}">{{ $item->title }}, {{ $company_single->company_name }}</a>
                                                </h3>
                                                <div class="detail-1 d-flex justify-content-start">
                                                    <div class="category">{{ $item->rJobCategory->name }}</div>
                                                    <div class="location">{{ $item->rJobLocation->name }}</div>
                                                </div>
                                                <div class="detail-2 d-flex-justify-content-start">
                                                    <div class="date">{{ $item->created_at->diffForHumans() }}</div>
                                                    <div class="budget">{{ $item->rJobSalaryRange->name }}</div>
                                                    @if(date('Y-m-d') > $item->deadline)
                                                    <div class="expired">Expired</div>
                                                    @endif
                                                </div>
                                                <div class="special d-flex justify-content-start">
                                                    @if($item->is_featured == 1)<div class="featured">Featured</div> @endif
                                                    <div class="type">{{ $item->rJobType->name }}</div>
                                                    @if($item->is_urgent == 1)<div class="urgent">Urgent</div> @endif
                                                </div>                                                
                                                <div class="bookmark">
                                                    @if(Auth::guard('candidate')->check())
                                                        @php
                                                            $count = \App\Models\CandidateBookmark::where('candidate_id', Auth::guard('candidate')->user()->id)->where('job_id', $item->id)->count();
                                                            if($count > 0) {
                                                                $bookmark_status = 'active';
                                                            } else {
                                                                $bookmark_status = '';
                                                            }
                                                        @endphp
                                                    @else
                                                        @php $bookmark_status = ''; @endphp
                                                    @endif
                                                    <a href="{{ route('candidate_bookmark_add', $item->id) }}"><i class="fas fa-bookmark {{ $bookmark_status }}"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty                                
                                    <div class="text-danger">No related job found.</div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-12">
                <div class="right-item">
                    <h2><i class="fas fa-file-invoice"></i> Company Overview</h2>
                    <div class="summary">
                        <div class="table-responsive">
                            <table class="rable table-bordered">
                                <tr>
                                    <td><b>Contact Person:</b></td>
                                    <td>{{ $company_single->person_name }}</td>
                                </tr>
                                <tr>
                                    <td><b>Industry:</b></td>
                                    <td>{{ $company_single->rCompanyIndustry->name }}</td>
                                </tr>
                                <tr>
                                    <td><b>Location:</b></td>
                                    <td>{{ $company_single->rCompanyLocation->name }}</td>
                                </tr>
                                <tr>
                                    <td><b>Company Size:</b></td>
                                    <td>{{ $company_single->rCompanySize->name }}</td>
                                </tr>
                                @if($company_single->address != null)
                                <tr>
                                    <td><b>Address:</b></td>
                                    <td>{{ $company_single->address }}</td>
                                </tr>
                                @endif
                                <tr>
                                    <td><b>Email:</b></td>
                                    <td>{{ $company_single->email }}</td>
                                </tr>
                                @if($company_single->address != null)
                                <tr>
                                    <td><b>Phone:</b></td>
                                    <td>{{ $company_single->phone }}</td>
                                </tr>
                                @endif
                                <tr>
                                    <td><b>Founded On:</b></td>
                                    <td>{{ $company_single->founded_on }}</td>
                                </tr>
                                <tr>
                                    <td><b>Website:</b></td>
                                    <td><a href="{{ $company_single->website }}" target="_blank">{{ $company_single->website }}</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="right-item">
                    <h2><i class="fas fa-file-invoice"></i> Contact Company</h2>
                    <div class="enquery-form">
                        <form action="{{ route('company_enquery_email') }}" method="post">
                            @csrf
                            <input type="hidden" name="company_email" value="{{ $company_single->email }}">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="visitor_name" placeholder="Full Name">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="visitor_email" placeholder="Email Address">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="visitor_phone" placeholder="Phone Number">
                            </div>
                            <div class="mb-3">
                                <textarea name="visitor_message" cols="30" rows="10" placeholder="Message"></textarea>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                
                @if($company_single->map_code != null)
                <div class="right-item">
                    <h2><i class="fas fa-file-invoice"></i> Location Map</h2>
                    <div class="location-map">
                        {!! nl2br($company_single->map_code) !!}
                    </div>
                </div>
                @endif
            
            </div>
        </div>
    </div>
</div>
@endisset

@endsection