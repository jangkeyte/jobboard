@extends('front.layout.app')

@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/' . $global_banner_data->banner_candidate_panel) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Applications Job</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content user-panel">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="card">
                    @include('candidate.sidebar')
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                @if(!$application_jobs->count())
                    <div class="text-danger">No data found</div>
                @else
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <th>SL</th>
                                <th>Job Title</th>
                                <th>Company</th>
                                <th>Status</th>
                                <th>Cover Letter</th>
                                <th>Action</th>
                            </tr>
                            @foreach($application_jobs as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->rJob->title }}</td>
                                <td>{{ $item->rJob->rCompany->company_name }}</td>
                                <td>
                                    @switch($item->status)
                                        @case('Approved')
                                            @php $color = 'success'; @endphp
                                            @break
                                        @case('Rejected')
                                            @php $color = 'danger'; @endphp
                                            @break
                                        @default
                                            @php $color = 'primary'; @endphp
                                    @endswitch
                                    <div class="badge bg-{{ $color }}">{{ $item->status }}</div>
                                </td>
                                <td><a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#coverLetterModal{{ $item->id }}">Cover Letter</a></td>
                                <td>
                                    <a href="{{ route('job', $item->job_id) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('candidate_apply_delete', $item->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i></aa>
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
                @endif
            </div>
        </div>
    </div>
</div>

@endsection