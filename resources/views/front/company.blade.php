@extends('front.layout.app')

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/banner.jpg') }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Company: </h2>
            </div>
        </div>
    </div>
</div>

<div class="page-top page-top-company-single" style="background-image: url({{ asset('uploads/banner.jpg') }}">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 company company-single">
                <div class="item d-flex justify-content-start">
                    <div class="logo"><img src="{{ asset('uploads/' . $company_single->logo) }}"></div>
                    <div class="text">
                        <h3>{{ $company_single->company_name }}</h3>
                        <div class="detail-1 d-flex justify-content-start">
                            <div class="category">{{ $company_single->rCompanyIndustry->name }}</div>
                            <div class="location">{{ $company_single->rCompanyLocation->name }}</div>
                            <div class="email">{{ $company_single->email }}</div>
                            @if($company_single->phone != null)
                            <div class="phone">
                                {{ $company_single->phone}}
                            </div>
                            @endif
                        </div>
                        <div class="special">
                            <div class="type">{{ $company_single->r_company_count }}</div>
                            <div class="social">
                                <ul>
                                    @if($company_single->facebook != null)
                                    <li><a href="{{ $company_single->facebook }}" target="_blank"></a><i class="fab fa-facebook"></i></li>
                                    @endif
                                    @if($company_single->twitter != null)
                                    <li><a href="{{ $company_single->twitter }}" target="_blank"></a><i class="fab fa-twitter"></i></li>
                                    @endif
                                    @if($company_single->instagram != null)
                                    <li><a href="{{ $company_single->instagram }}" target="_blank"></a><i class="fab fa-instagram"></i></li>
                                    @endif
                                    @if($company_single->linkedin != null)
                                    <li><a href="{{ $company_single->linkedin }}" target="_blank"></a><i class="fab fa-linkedin"></i></li>
                                    @endif
                                </ul>
                            </div>
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
                    <h2><i class="fas fa-file-invoice"></i> About Company</h2>
                    <p>{!! $company_single->description !!}</p>
                </div>
                <div class="left-item">
                    <h2><i class="fas fa-file-invoice"></i> Company Responsibilities</h2>
                    {!! nl2br($company_single->responsibility) !!}
                </div>
                <div class="left-item">
                    <h2><i class="fas fa-file-invoice"></i> Skills and Abilities</h2>
                    {!! nl2br($company_single->skill) !!}
                </div>
                <div class="left-item">
                    <h2><i class="fas fa-file-invoice"></i> Educational Qualification</h2>
                    {!! nl2br($company_single->education) !!}
                </div>
                <div class="left-item">
                    <h2><i class="fas fa-file-invoice"></i> Benefits</h2>
                    {!! nl2br($company_single->benefit) !!}
                </div>
                @if(date('Y-m-d') >= $company_single->deadline)
                <div class="left-item">
                    <div class="apply">
                        <a href="" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
                @endif
                <div class="left-item">
                    <h2><i class="fas fa-file-invoice"></i> Related Companys</h2>
                    <div class="H    related-company pt-0 pb-0">
                        <div class="container">
                            <div class="row">
                                @if(!$companies_related->count())
                                    <div class="text-danger">No related company found.</div>
                                @else
                                    @foreach($companies_related as $item)
                                        <div class="col-md-12">
                                            <div class="item d-flex justify-content-start">
                                                <div class="logo">
                                                    <img src="{{ asset('uploads/' . $item->logo ?? 'default.png') }}" alt="{{ $item->company_name }}">
                                                </div>
                                                <div class="text">
                                                    <h3>
                                                        <a href="{{ route('company', $item->id) }}">{{ $item->title }}, {{ $item->company_name }}</a>
                                                    </h3>
                                                    <div class="detail-1 d-flex justify-content-start">
                                                        <div class="category">{{ $item->rCompanyIndustry->name }}</div>
                                                        <div class="location">{{ $item->rCompanyLocation->name }}</div>
                                                    </div>
                                                    <div class="special d-flex justify-content-start">
                                                        <div class="type">{{-- $item->rCompanySize->name --}}</div>
                                                    </div>
                                                    <div class="bookmark">
                                                        <a href=""><i class="fas fa-bookmark active"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="right-item">
                    <h2><i class="fas fa-file-invoice"></i> Company Summary</h2>
                    <div class="summary">
                        <div class="table-responsive">
                            <table class="rable table-bordered">
                                <tr>
                                    <td><b>Published On:</b></td>
                                    <td>{{ $company_single->created_at->format('d F, Y') }}</td>
                                </tr>
                                <tr>
                                    <td><b>Deadline:</b></td>
                                    <td>{{ DateTime::createFromFormat('Y-m-d', $company_single->deadline)->format('d F, Y') }}</td>
                                </tr>
                                <tr>
                                    <td><b>Vacancy:</b></td>
                                    <td>{{ $company_single->vacancy }}</td>
                                </tr>
                                <tr>
                                    <td><b>Category:</b></td>
                                    <td>{{ $company_single->rCompanyCategory->name }}</td>
                                </tr>
                                <tr>
                                    <td><b>Location:</b></td>
                                    <td>{{ $company_single->rCompanyLocation->name }}</td>
                                </tr>
                                <tr>
                                    <td><b>Type:</b></td>
                                    <td>{{ $company_single->rCompanyType->name }}</td>
                                </tr>
                                <tr>
                                    <td><b>Experience:</b></td>
                                    <td>{{ $company_single->rCompanyExperience->name }}</td>
                                </tr>
                                <tr>
                                    <td><b>Gender:</b></td>
                                    <td>{{ $company_single->rCompanyGender->name }}</td>
                                </tr>
                                <tr>
                                    <td><b>Salary Range:</b></td>
                                    <td>{{ $company_single->rCompanySalaryRange->name }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="right-item">
                    <h2><i class="fas fa-file-invoice"></i> Enquery Formy</h2>
                    <div class="enquery-form">
                        <form action="{{ route('company_enquery_email') }}" method="post">
                            @csrf
                            <input type="hidden" name="company_title" value="{{ $company_single->title }}">
                            <input type="hidden" name="company_email" value="{{ $company_single->rCompany->email }}">
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

@endsection