@extends('front.layout.app')

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/' . $global_banner_data->banner_company_panel) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Resume of {{ $candidate_single->name }}</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content user-panel">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="card">
                    @include('company.sidebar')
                </div>
            </div>
            <div class="col-lg-9 col-md-12">                
                <h4 class="resume">Basic Profile</h4>
                <div class="table-respnsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>Photo</th>
                            <td><img src="{{ asset('uploads/' . $candidate_single->photo) }}" style="width:120px"></td>
                        </tr>

                        @if($candidate_single->name != null)
                        <tr>
                            <th>Name</th>
                            <td>{{ $candidate_single->name }}</td>
                        </tr>
                        @endif

                        @if($candidate_single->designation != null)
                        <tr>
                            <th>Designation</th>
                            <td>{{ $candidate_single->designation }}</td>
                        </tr>
                        @endif

                        @if($candidate_single->email != null)
                        <tr>
                            <th>Email</th>
                            <td>{{ $candidate_single->email }}</td>
                        </tr>
                        @endif

                        @if($candidate_single->phone != null)
                        <tr>
                            <th>Phone</th>
                            <td>{{ $candidate_single->phone }}</td>
                        </tr>
                        @endif

                        @if($candidate_single->country != null)
                        <tr>
                            <th>Country</th>
                            <td>{{ $candidate_single->country }}</td>
                        </tr>
                        @endif
                        
                        @if($candidate_single->address != null)
                        <tr>
                            <th>Address</th>
                            <td>{{ $candidate_single->address }}</td>
                        </tr>
                        @endif
                        
                        @if($candidate_single->state != null)
                        <tr>
                            <th>State</th>
                            <td>{{ $candidate_single->state }}</td>
                        </tr>
                        @endif

                        @if($candidate_single->city != null)
                        <tr>
                            <th>City</th>
                            <td>{{ $candidate_single->city }}</td>
                        </tr>
                        @endif

                        @if($candidate_single->zip_code != null)
                        <tr>
                            <th>Zip Code</th>
                            <td>{{ $candidate_single->zip_code }}</td>
                        </tr>
                        @endif

                        @if($candidate_single->gender != null)
                        <tr>
                            <th>Gender</th>
                            <td>{{ $candidate_single->gender }}</td>
                        </tr>
                        @endif

                        @if($candidate_single->marital_status != null)
                        <tr>
                            <th>Marital Status</th>
                            <td>{{ $candidate_single->marital_status }}</td>
                        </tr>
                        @endif

                        @if($candidate_single->date_of_birth != null)
                        <tr>
                            <th>Date of Birth</th>
                            <td>{{ $candidate_single->date_of_birth }}</td>
                        </tr>
                        @endif

                        @if($candidate_single->website != null)
                        <tr>
                            <th>Website</th>
                            <td><a href="{{ $candidate_single->website }}">{{ $candidate_single->website }}</a></td>
                        </tr>
                        @endif

                        @if($candidate_single->biography != null)
                        <tr>
                            <th>Biography</th>
                            <td>{!! $candidate_single->biography !!}</td>
                        </tr>
                        @endif
                    </table>
                </div>

                @if($candidate_educations->count())
                <h4 class="resume">Education</h4>
                <div class="table-respnsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Education Level</th>
                            <th>Institute</th>
                            <th>Degree</th>
                            <th>Passing Year</th>
                        </tr>
                        @foreach($candidate_educations as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->level }}</td>
                            <td>{{ $item->institute }}</td>
                            <td>{{ $item->degree }}</td>
                            <td>{{ $item->passing_year }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                @endif
                
                @if($candidate_skills->count())
                <h4 class="resume">Skill</h4>
                <div class="table-respnsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Skill Name</th>
                            <th>Percentage</th>
                        </tr>
                        @foreach($candidate_skills as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->percentage }}%</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                @endif

                @if($candidate_work_experiences->count())
                <h4 class="resume">Experience</h4>
                <div class="table-respnsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Company</th>
                            <th>Designation</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                        </tr>
                        @foreach($candidate_work_experiences as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->company }}</td>
                            <td>{{ $item->designation }}</td>
                            <td>{{ $item->start_date }}</td>
                            <td>{{ $item->end_date }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                @endif

                @if($candidate_awards->count())
                <h4 class="resume">Awards</h4>
                <div class="table-respnsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Date</th>
                        </tr>
                        @foreach($candidate_awards as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->date }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                @endif

                @if($candidate_resumes->count())
                <h4 class="resume">Resume</h4>
                <div class="table-respnsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>File</th>
                        </tr>
                        @foreach($candidate_resumes as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td><a href="{{ asset('uploads/' . $item->file) }}" target="_blank">{{ $item->file }}</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection