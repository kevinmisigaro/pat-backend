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
{{-- <h1 class="h3 mb-2 text-gray-800">Upload Abstract</h1> --}}


<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">

        <div class="mb-5">
            <h4>Abstract Submission & Guidelines</h4>
            <br>
            <h5><b>Rules for submission of abstracts</b></h5>
            <p>
                Please read the submission rules before submitting an abstract.
            </p>
            <ol>
                <li>
                    The presenting author is required to ensure that all co-authors are aware of the content of the
                    abstract before submission
                </li>
                <li>
                    All abstracts should be submitted and presented in English language.
                </li>
                <li>
                    Please note that the submitting author will receive all correspondence about the abstract, so we
                    advise that the submitting author details that are entered are the same details as those of the
                    presenting author.
                </li>
                <li>
                    Your abstract is not successfully submitted until you receive a confirmation e-mail after clicking
                    the final submit button. If you do not receive a confirmation e-mail, please contact us via
                    XXXXXXXX.
                </li>
            </ol>
            <br>
            <h5><b>Submission guidelines</b></h5>
            <p>
                Before you begin the submission process, kindly review the following information:
            </p>
            <ol>
                <li>
                    Abstract Topic – abstracts must be allocated to a specific Sub theme.
                </li>
                <li>
                    Abstract text – limited to <b>350 words</b>; Format – <b>Microsoft word</b>; Font – <b>Arial 10
                        points</b>;
                    Paragraph line spacing – <b>Single</b>.
                </li>
                <li>
                    Abstract should not contain tables, figures, and references
                </li>
                <li>
                    Abstract must be submitted with the following sections: <b>Introduction, Objectives,
                        Methodology, Results, Conclusion</b>.
                </li>
            </ol>
            <br>
            <h5><b>Abstract selection and presentation</b></h5>
            <p>
                The Committee will review all submitted abstracts and will notify the submitting author regarding
                abstract acceptance and scheduling will be sent to the submitting author.
            </p>
            <br>
        </div>

        <form method="POST" action="/applicant-upload" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label>Title</label>
                <input class="form-control" type="text" name="title" />
                <small>Title of your abstract</small>
            </div>
            <div class="form-group mb-3">
                <label>Co-author (optional)</label>
                <input class="form-control" type="text" name="author" />
                <small>Author who helped you write the abstract</small>
            </div>
            <div class="form-group mb-3">
                <label>Theme</label>
                <select class="form-control" name="theme">
                    <option value="">Select theme</option>
                    @foreach ($themes as $theme)
                    <option value="{{ $theme->id }}">
                        {{ $theme->name }}
                    </option>
                    @endforeach
                </select>
                <small>Theme of your abstract</small>
            </div>
            <div class="form-group mb-4">
                <label>Upload Abstract</label>
                <input class="form-control" type="file" name="abstract" />
                <small>The document should below 500 words.
                    You can exclude the title. The document shoo</small>
            </div>
            <div class="form-group mb-3">
                <button class="btn btn-primary">Upload</button>
            </div>
        </form>

    </div>
</div>


@endcomponent
