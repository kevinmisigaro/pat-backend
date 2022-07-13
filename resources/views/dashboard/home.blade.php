@component('layouts.dashboard')
<div>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Customer Row -->
    @if (\Illuminate\Support\Facades\Auth::user()->role == 1)
    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Applicants
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $applicants }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Reviewers
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $reviewers }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Number of uploaded documents
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $allDocs }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-file-text-o fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Number of reviewed documents
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $reviewedDocs }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-file-text-o fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @endif

    @if (\Illuminate\Support\Facades\Auth::user()->role == 3)
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Number of documents pending review
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ \App\Models\Document::where([
                                    'review_complete' => false,
                                    'reviewer_id' => \Illuminate\Support\Facades\Auth::id()
                                ])->count() }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-file-text-o fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Number of documents you have reviewed
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ \App\Models\Document::where([
                                       'review_complete' => true,
                                       'reviewer_id' => \Illuminate\Support\Facades\Auth::id()
                                   ])->count() }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-file-text-o fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif


    @if (\Illuminate\Support\Facades\Auth::user()->role == 2)

    @if (\App\Models\Applicant::where(['user_id' => \Illuminate\Support\Facades\Auth::id(), 'application_reason' =>
    1])->exists())
    @if (\App\Models\Applicant::where('user_id',
    \Illuminate\Support\Facades\Auth::id())->whereNotNull('document')->exists())
    <div class="alert alert-success" role="alert">
        Document is uploaded
    </div>
    @else
    <div class="alert alert-danger" role="alert">
        Document is not uploaded
    </div>
    @endif
    @endif


    @if (\App\Models\Applicant::where(['user_id' => \Illuminate\Support\Facades\Auth::id(), 'payed' => true])->exists())
    <div class="alert alert-success" role="alert">
        Payment confirmed
    </div>
    @else
    <div class="alert alert-danger" role="alert">
        Payment not confirmed
    </div>
    @endif

    @php
    $checkIfExists = \App\Models\Applicant::where(
    'user_id', \Illuminate\Support\Facades\Auth::id())
    ->has('document')->exists();

    if($checkIfExists){

    $app = \App\Models\Applicant::where(
    'user_id', \Illuminate\Support\Facades\Auth::id())
    ->with('document')->first();

    $doc = \App\Models\Document::where('applicant_id', $app->id)->first();

    $comments = \App\Models\Comment::where('document_id', $doc->id)->get();

    }
    @endphp


    @if ($checkIfExists)
    <div class="my-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Commenter</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Document</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comments as $content)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $content->commenter->name }}</td>
                    <td>{{ $content->response }}</td>
                    <td>
                        @if ($content->response_document !== null)
                        <a href="{{ env('APP_URL') }}/comments/{{ $content->response_document }}" download>
                            <i class="fa fa-download" aria-hidden="true"></i>
                        </a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif

    @endif

</div>
@endcomponent
