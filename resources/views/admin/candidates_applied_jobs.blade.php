@extends('admin.layout.app')

@section('heading', 'Candidates Applied Jobs')

@section('main_content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">
                    <i class="ion ion-clipboard mr-1"></i>
                    {{ __('Candidates Applied Jobs List') }}
                    </h3>
                    <div class="card-tools">
                        {{ $applications->links() }}
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('Job Title') }}</th>
                                    <th>{{ __('Company') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th>{{ __('Cover Letter') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($applications as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->rJob->title }}</td>
                                    <td>{{ $item->rJob->rCompany->company_name }}</td>
                                    <td>
                                        @switch($item->status)
                                            @case('{{ __('Approved') }}')
                                                @php $color = 'success'; @endphp
                                                @break
                                            @case('{{ __('Rejected') }}')
                                                @php $color = 'danger'; @endphp
                                                @break
                                            @default
                                                @php $color = 'primary'; @endphp
                                        @endswitch
                                        <div class="badge bg-{{ $color }}">{{ $item->status }}</div>
                                    </td>
                                    <td><a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#coverLetterModal{{ $item->id }}">{{ __('Cover Letter') }}</a></td>
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
                                                <h1 class="modal-title fs-5" id="coverLetterModalLabel">{{ __('Cover Letter for Job') }} {{ $item->rJob->title }} {{ __('of') }} {{ $item->rJob->rCompany->company_name }} {{ __('Company') }}</h1>
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