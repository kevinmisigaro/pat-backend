@component('layouts.dashboard')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Your reviews</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Reviewed</th>
                        <th>Marks</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Reviewed</th>
                        <th>Marks</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($applicants as $applicant)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $applicant->name }}</td>
                        <td>
                            @if (\App\Models\Document::where('applicant_id',
                            $applicant->applicant->id)->pluck('review_complete')->first())
                            <span class="badge badge-pill badge-success">Reviewed</span>
                            @else
                            <span class="badge badge-pill badge-danger">Not reviewed</span>
                            @endif
                        </td>
                        <td>
                            {{ \App\Models\Document::where('applicant_id',
                           $applicant->applicant->id)->pluck('marks')->first() }}
                        </td>
                        <td>
                            <a href="/applicant/document/{{ $applicant->applicant->id }}">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endcomponent
