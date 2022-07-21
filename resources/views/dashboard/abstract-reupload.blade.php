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
            <h4>Re-upload abstract</h4>
        </div>

        <form method="POST" action="/reupload" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label>Title</label>
                <input class="form-control" value="{{ $applicant->title }}" type="text" name="title" />
                <small>Title of your abstract</small>
            </div>
            <div class="form-group mb-3">
                <label>Co-author (optional)</label>
                <input class="form-control" value="{{ $applicant->coauthor }}" type="text" name="author" />
                <small>Author who helped you write the abstract</small>
            </div>
            <div class="form-group mb-3">
                <label>Theme</label>
                <select class="form-control" value="{{ $applicant->theme_id }}" name="theme">
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
