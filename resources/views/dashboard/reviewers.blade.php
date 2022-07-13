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
<h1 class="h3 mb-2 text-gray-800">Reviewers</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add new reviewer
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add new reviewer</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="/reviewers">
                            @csrf
                            <div class="form-group mb-3">
                                <label>Name</label>
                                <input class="form-control" type="text" placeholder="Enter name" name="name" />
                            </div>
                            <div class="form-group mb-3">
                                <label>Email</label>
                                <input class="form-control" type="email" placeholder="Enter email address" name="email" />
                            </div>
                            <div class="form-group mb-4">
                                <label>Default Password</label>
                                <input class="form-control" type="text" placeholder="pat123" disabled />
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-success">
                                    Submit
                                </button>   
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Applications reviewed</th>
                        <th>Applications pending</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Applications reviewed</th>
                        <th>Applications pending</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($reviewers as $reviewer)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            {{ $reviewer->name }}
                        </td>
                        <td>
                            {{ \App\Models\Document::where([
                                'reviewer_id' => $reviewer->id,
                                'review_complete' => true
                                ])->count() }}
                        </td>
                        <td>
                            {{ \App\Models\Document::where([
                                'reviewer_id' => $reviewer->id,
                                'review_complete' => false
                                ])->count() }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endcomponent
