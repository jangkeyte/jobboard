@extends('front.layout.app')

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/' . $global_banner_data->banner_company_panel) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ __('Candidate Applications') }}</h2>
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
                <h3>{{ __('Applicants for') }} {{ $job_single->title }}</h3>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Email') }}</th>
                                <th>{{ __('Mobile') }}</th>
                                <th>{{ __('Status') }}</th>
                                <th>{{ __('Action') }}</th>
                                <th>{{ __('Detail') }}</th>
                                <th>{{ __('CV') }}</th>
                            </tr>
                            
                            @foreach($applicants as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->rCandidate->name }}</td>
                                <td>{{ $item->rCandidate->email }}</td>
                                <td>{{ $item->rCandidate->phone }}</td>
                                <td>
                                    @if($item->status == 'Applied')
                                        @php $color="primary"; $status= __('Apply') @endphp
                                    @elseif($item->status == 'Approved')
                                        @php $color="success"; $status= __('Approved') @endphp
                                    @elseif($item->status == 'Rejected')
                                        @php $color="danger"; $status= __('Rejected') @endphp
                                    @else
                                        @php $color="warning"; $status= __('Error') @endphp
                                    @endif
                                    <span class="badge bg-{{ $color }}">{{ $status }}</span>
                                </td>
                                <td>
                                    <form action="{{ route('company_applicant_status_change', $item->id) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="job_id" value="{{ $job_single->id }}">
                                        <input type="hidden" name="candidate_id" value="{{ $item->candidate_id }}">
                                        <select name="status" class="form-control select2" onchange="this.form.submit()">
                                            <option value="">{{ __('Select') }}</option>
                                            <option value="Applied">{{ __('Apply') }}</option>
                                            <option value="Approved">{{ __('Approve') }}</option>
                                            <option value="Rejected">{{ __('Reject') }}</option>
                                        </select>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{ route('company_applicant_resume', $item->candidate_id) }}" title="{{ __('Candidate Detail') }}"><i class="bi bi-eye"></i></a>
                                    <a href="" data-bs-toggle="modal" data-bs-target="#coverLetterModal{{ $item->id }}" title="{{ __('Cover Letter') }}"><i class="bi bi-envelope"></i></a>
                            </td>
                            </tr>

                            <!-- Modal -->
                            <div class="modal fade" id="coverLetterModal{{ $item->id }}" tabindex="-1" aria-labelledby="coverLetterModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="coverLetterModalLabel">{{ __('Cover Letter for Job') . $item->rJob->title . __('of') . $item->rJob->rCompany->company_name . __('Company') }}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="{{ __('Close') }}"></button>
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