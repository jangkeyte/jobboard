@extends('admin.layout.app')

@section('heading', 'Applications for job: ' . $job_detail->title )

@section('button')
<a href="{{ route('admin_companies') }}" class="btn btn-primary btn-sm ms-2"><i class="bi bi-folder-check"></i> {{ __('Back to Previous') }}</a>
@endsection

@section('main_content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
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
                                        <a href="{{ route('admin_companies_applicant_resume', $item->candidate_id) }}" title="Candidate Detail" class="btn btn-primary btn-sm"><i class="bi bi-eye-fill"></i> {{ __('Detail') }}</a>
                                        <a href="" data-bs-toggle="modal" data-bs-target="#coverLetterModal{{ $item->id }}" title="Cover Letter" class="btn btn-warning btn-sm"><i class="bi bi-envelope-fill"></i> {{ __('CV') }}</a>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="coverLetterModal{{ $item->id }}" tabindex="-1" aria-labelledby="coverLetterModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="coverLetterModalLabel">Cover Letter</h1>
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