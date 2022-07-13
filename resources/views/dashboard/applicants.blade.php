@component('layouts.dashboard')

@if (session()->has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('error') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Applicants</h1>

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
                        <th>Paid</th>
                        <th>Reviewed</th>
                        <th>Reviewer</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Paid</th>
                        <th>Reviewed</th>
                        <th>Reviewer</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($applicants as $applicant)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $applicant->name }}</td>
                        <td>
                            @if ($applicant->applicant->payed)
                            <span class="badge badge-pill badge-success">Paid</span>
                            @else
                            <span class="badge badge-pill badge-danger">Not paid</span>
                            @endif
                        </td>
                        <td>
                            @if (\App\Models\Document::where('applicant_id',
                            $applicant->applicant->id)->pluck('review_complete')->first())
                            <span class="badge badge-pill badge-success">Reviewed</span>
                            @else
                            <span class="badge badge-pill badge-danger">Not reviewed</span>
                            @endif
                        </td>
                        <td>
                            @if (\App\Models\Document::where([
                            'reviewer_id' => null,
                            'applicant_id' => $applicant->applicant->id
                            ])->first())
                            No reviewer
                            @else
                            {{ \App\Models\Document::where([
                                    'applicant_id' => $applicant->applicant->id
                                ])->with('reviewer')->first()->reviewer->name }}
                            @endif
                        </td>
                        <td>
                            <a href="/applicant/document/{{ $applicant->applicant->id }}">
                                <i class="fa fa-eye mr-2" aria-hidden="true"></i>
                            </a>
                            @if (\App\Models\Document::where([
                            'applicant_id' => $applicant->applicant->id
                            ])->first()->reviewer_id == null)
                            <a data-toggle="modal" data-target="#addReviewerModal-{{ $applicant->applicant->id }}">
                                <i class="fa fa-user-plus mr-2" aria-hidden="true"></i>
                            </a>
                            @endif
                            <a data-toggle="modal" data-target="#paymentModal-{{ $applicant->applicant->id }}">
                                <i class="fa fa-money mr-2" aria-hidden="true"></i>
                            </a>
                            <a data-toggle="modal" data-target="#userModal-{{ $applicant->applicant->id }}">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>

                    <!-- Assignment Modal -->
                    <div class="modal fade" id="addReviewerModal-{{ $applicant->applicant->id }}" tabindex="-1"
                        aria-labelledby="addReviewerModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addReviewerModalLabel">Assign reviewer</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="/assign">
                                        @csrf
                                        <div class="form-group mb-4">
                                            <select class="form-control" name="reviewer">
                                                <option value="" selected>
                                                    Choose reviewer
                                                </option>
                                                @foreach ($reviewers as $reviewer)
                                                <option value="{{  $reviewer->id }}">
                                                    {{  $reviewer->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            <input type="hidden" value="{{ $applicant->applicant->id }}" name="id" />
                                        </div>
                                        <div class="form-group mb-3">
                                            <button type="submit" class="btn btn-success">
                                                Assign
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--- End of Assignment Modal --->


                    <!-- Payment Modal -->
                    <div class="modal fade" id="paymentModal-{{ $applicant->applicant->id }}" tabindex="-1"
                        aria-labelledby="paymentModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="paymentModalLabel">
                                        {{ $applicant->name }} payment
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body text-center">
                                    {{ $applicant->name }} payment status

                                    <br><br>

                                    @if ($applicant->applicant->payed)
                                    <a class="btn btn-danger" href="/payment/{{ $applicant->applicant->id }}">
                                        Applicant has not payed
                                    </a>
                                    @else
                                    <a class="btn btn-success" href="/payment/{{ $applicant->applicant->id }}">
                                        Confirm applicant payment
                                    </a>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                    <!---End of Payment modal -->

                    <!-- User Modal -->
                    <div class="modal fade" id="userModal-{{ $applicant->applicant->id }}" tabindex="-1"
                        aria-labelledby="userModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="userModalLabel">Applicant details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group mb-3">
                                        <label>Full name</label>
                                        <input value="{{ $applicant->name }}" class="form-control" disabled />
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Email</label>xw
                                        <input value="{{ $applicant->email }}" class="form-control" disabled />
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>MCT Number (optional)</label>
                                        <input value="{{ $applicant->applicant->mct_number }}" class="form-control"
                                            disabled />
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Country</label>
                                        <input value="{{ $applicant->applicant->country->name }}" class="form-control" disabled />
                                    </div>
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


@endcomponent
