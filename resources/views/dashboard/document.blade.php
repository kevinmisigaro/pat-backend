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
<h1 class="h3 mb-2 text-gray-800">Document review</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"></h6>
    </div>
    <div class="card-body">
        <div>
            <form class="row mb-3" action="/marks" method="POST">
                @csrf
                <div class="col-lg-6 col-md-12 mb-4">
                    <label>Input marks</label>
                    <input class="form-control" type="number" min="0" max="100" name="marks" />
                    <input type="hidden" name="id" value="{{ $applicant->id }}" />
                </div>
                <div class="col-md-12 col-lg-6 mb-4 text-center">
                    <button type="submit" class="btn btn-success" style="margin-top: 2rem">
                        Submit marks
                    </button>
                </div>
            </form>
        </div>
        <div>
            <div class="d-flex flex-row justify-content-between">
                <a download="{{ $applicant->user->name }}-abstract"
                    href="{{ env('APP_URL') }}/documents/{{ $applicant->document }}" class="btn btn-primary mb-4">
                    Download abstract
                    &nbsp; <i class="fa fa-download" aria-hidden="true"></i>
                </a>

                <button data-toggle="modal" data-target="#commentModal" class="btn btn-info mb-4">Upload
                    comments</button>

                <!-- Modal -->
                <div class="modal fade" id="commentModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add comment</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="/comment" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label>Notable comment</label>
                                        <input type="hidden" name="document_id" value="{{ $document->id }}" />
                                        <textarea class="form-control" name="comment" rows="3" width="100%"></textarea>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label>Upload document</label>
                                        <input type="file" class="form-control" name="abstract" />
                                    </div>
                                    <div class="form-group mb-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End of modal --}}
            </div>



            @if (count($document->comments) > 0)
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
                        @foreach ($document->comments as $content)
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


            <div>
                <h4>Applicant details</h4>
                <div class="form-group mb-3">
                    <label>Name of applicant</label>
                    <input class="form-control" disabled value="{{ $applicant->user->name }}" />
                </div>
                <div class="form-group mb-3">
                    <label>Title of abstract</label>
                    <input class="form-control" disabled value="{{ $applicant->title }}" />
                </div>
                <div class="form-group mb-3">
                    <label>Co-author</label>
                    <input class="form-control" disabled value="{{ $applicant->coauthor }}" />
                </div>
                <div class="form-group mb-3">
                    <label>Affiliation</label>
                    <input class="form-control" disabled value="{{ $applicant->affiliation }}" />
                </div>
                <div class="form-group mb-3">
                    <label>Theme</label>
                    <input class="form-control" disabled value="{{ $applicant->theme->name }}" />
                </div>
            </div>

        </div>
    </div>
</div>


@endcomponent
