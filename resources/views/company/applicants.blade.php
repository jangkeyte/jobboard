@extends('front.layout.app')

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/' . $global_banner_data->banner_company_panel) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Candidate Applications</h2>
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
                <h3>Applicants for {{ $job_single->title }}</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>Detail</th>
                                <th>CV</th>
                            </tr>
                            
                            @foreach($applicants as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->rCandidate->name }}</td>
                                <td>{{ $item->rCandidate->email }}</td>
                                <td>{{ $item->rCandidate->phone }}</td>
                                <td>
                                    @if($item->status == 'Applied')
                                        @php $color="primary"; @endphp
                                    @elseif($item->status == 'Approved')
                                        @php $color="success"; @endphp
                                    @elseif($item->status == 'Rejected')
                                        @php $color="danger"; @endphp
                                    @else
                                        @php $color="warning"; @endphp
                                    @endif
                                    <span class="badge bg-{{ $color }}">{{ $item->status }}</span>
                                </td>
                                <td>
                                    <form action="{{ route('company_applicant_status_change', $item->id) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="job_id" value="{{ $job_single->id }}">
                                        <input type="hidden" name="candidate_id" value="{{ $item->candidate_id }}">
                                        <select name="status" class="form-control select2" onchange="this.form.submit()">
                                            <option value="">Select</option>
                                            <option value="Applied">Apply</option>
                                            <option value="Approved">Approve</option>
                                            <option value="Rejected">Reject</option>
                                        </select>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{ route('company_applicant_resume', $item->candidate_id) }}" title="Candidate Detail"><i class="bi bi-eye"></i></a>
                                    <a href="" data-bs-toggle="modal" data-bs-target="#coverLetterModal{{ $item->id }}" title="Cover Letter"><i class="bi bi-envelope"></i></a>
                            </td>
                            </tr>

                            <!-- Modal -->
                            <div class="modal fade" id="coverLetterModal{{ $item->id }}" tabindex="-1" aria-labelledby="coverLetterModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="coverLetterModalLabel">Cover Letter for Job {{ $item->rJob->title }} of {{ $item->rJob->rCompany->company_name }} Company</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {!! nl2br($item->cover_letter) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection