@extends('admin.layout.app')

@section('heading', 'Companies Detail')

@section('button')
<a href="{{ route('admin_companies') }}" class="btn btn-primary btn-sm ms-2"><i class="bi bi-folder-check"></i> {{ __('Back to Previous') }}</a>
@endsection

@section('main_content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5>Basic Infomation</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <tr>
                                <th style="width:200px">Logo</th>
                                <td><img src="{{ asset('uploads/' . $companies_detail?->logo) }}" alt="" class="w-100"></td>
                            </tr>
                            <tr>
                                <th style="width:200px">Company Name</th>
                                <td>{{ $companies_detail?->company_name }}</td>
                            </tr>
                            <tr>
                                <th style="width:200px">Person Name</th>
                                <td>{{ $companies_detail?->person_name }}</td>
                            </tr>
                            <tr>
                                <th style="width:200px">Username</th>
                                <td>{{ $companies_detail?->username }}</td>
                            </tr>
                            <tr>
                                <th style="width:200px">Email</th>
                                <td>{{ $companies_detail?->email }}</td>
                            </tr>
                            <tr>
                                <th style="width:200px">Phone</th>
                                <td>{{ $companies_detail?->phone }}</td>
                            </tr>
                            <tr>
                                <th style="width:200px">Address</th>
                                <td>{{ $companies_detail?->address }}</td>
                            </tr>
                            <tr>
                                <th style="width:200px">Industry</th>
                                <td>{{ $companies_detail?->rCompanyIndustry?->name }}</td>
                            </tr>
                            <tr>
                                <th style="width:200px">Location</th>
                                <td>{{ $companies_detail?->rCompanyLocation?->name }}</td>
                            </tr>
                            <tr>
                                <th style="width:200px">Sizez</th>
                                <td>{{ $companies_detail?->rCompanySize?->name }}</td>
                            </tr>
                            <tr>
                                <th style="width:200px">Found On</th>
                                <td>{{ $companies_detail?->founded_on }}</td>
                            </tr>
                            <tr>
                                <th style="width:200px">Website</th>
                                <td>{{ $companies_detail?->website }}</td>
                            </tr>
                            <tr>
                                <th style="width:200px">Description</th>
                                <td>{!! $companies_detail?->description !!}</td>
                            </tr>
                            <tr>
                                <th style="width:200px">Opening Hours</th>
                                <td>
                                    Monday: {{ $companies_detail?->oh_mon }}<br>
                                    Tuesday: {{ $companies_detail?->oh_tue }}<br>
                                    Wednesday: {{ $companies_detail?->oh_web }}<br>
                                    Thursday: {{ $companies_detail?->oh_thu }}<br>
                                    Friday: {{ $companies_detail?->oh_fri }}<br>
                                    Saturday: {{ $companies_detail?->oh_sat }}<br>
                                    Sunday: {{ $companies_detail?->oh_sun }}<br>
                                </td>
                            </tr>
                            <tr>
                                <th style="width:200px">Facebook</th>
                                <td>{{ $companies_detail?->facebook }}</td>
                            </tr>
                            <tr>
                                <th style="width:200px">Twitter</th>
                                <td>{{ $companies_detail?->twitter }}</td>
                            </tr>
                            <tr>
                                <th style="width:200px">Instagram</th>
                                <td>{{ $companies_detail?->instagram }}</td>
                            </tr>
                            <tr>
                                <th style="width:200px">Linkedin</th>
                                <td>{{ $companies_detail?->linkedin }}</td>
                            </tr>
                            <tr>
                                <th style="width:200px">Google Map</th>
                                <td>{{ $companies_detail?->map_code }}</td>
                            </tr>
                            <tr>
                                <th style="width:200px">Google Map</th>
                                <td>{{ $companies_detail?->map_code }}</td>
                            </tr>
                            <tr>
                                <th style="width:200px">Photos</th>
                                <td>                                
                                    @foreach($photos as $item)
                                        <img src="{{ asset('uploads/' . $item->photo) }}" alt="" style="width:200px">
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th style="width:200px">Videos</th>
                                <td>                 
                                    @foreach($photos as $item)
                                        <img src="https://img.youtube.com/vi/{{ $item->video }}/0.jpg" alt="" style="width:200px">
                                    @endforeach
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection