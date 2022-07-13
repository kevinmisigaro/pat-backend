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
<h1 class="h3 mb-2 text-gray-800">Payments</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Payment type</th>
                        <th>Confirmation</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Payment type</th>
                        <th>Confirmation</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($payments as $payment)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            {{ $payment->user->name }}
                        </td>
                        <td>
                            {{ 
                                $payment->message == null ? 'Image' : 'Text'
                            }}
                        </td>
                        <td>
                            @if ($payment->confirmed)
                            <span class="badge bg-success text-white">Paid</span>
                            @else
                            <span class="badge bg-danger text-white">Not paid</span>
                            @endif
                        </td>
                        <td>
                            <a data-toggle="modal" data-target="#paymentModal-{{ $payment->id }}">
                                <i class="fa fa-eye mr-2" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="paymentModal-{{ $payment->id }}" tabindex="-1"
                        aria-labelledby="{{ $payment->id }}ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Payment confirmation</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group mb-3">
                                        <label>Name</label>
                                        <input class="form-control" value="{{ $payment->user->name }}" disabled />
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Phone</label>
                                        <input class="form-control" value="{{ $payment->user->applicant->phone }}"
                                            disabled />
                                    </div>
                                    @if ($payment->message == null)
                                    <div class="form-group mb-3">
                                        <img src="{{ env('APP_URL') }}/payments/{{ $payment->image }}" class="img-fluid"
                                            alt="..." />
                                    </div>
                                    @else
                                    <div class="form-group mb-3">
                                        <label>Message</label>
                                        <textarea class="form-control" rows="3" width="100%"
                                            disabled>{{ $payment->message }}</textarea>
                                    </div>
                                    @endif
                                    <div class="form-group my-3">
                                        @if (!$payment->confirmed)
                                        <a href="/paymentConfirm/{{ $payment->id }}" class="btn btn-success">
                                            Confirm payment
                                        </a>
                                        @else
                                        <a href="/paymentConfirm/{{ $payment->id }}" class="btn btn-danger">
                                            Unconfirm payment
                                        </a>
                                        @endif
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
