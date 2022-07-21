<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>PAT | Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('dashboard/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="{{ asset('dashboard/css/sb-admin-2.min.css') }}" rel="stylesheet" />
</head>

<body class="" style="background: #eeeeee">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/#home">
                <img src="{{ asset('pat-logo-white.png') }}" style="max-width: 90px" alt="Logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#fees">Fees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#themes">Themes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#sponsorship">Sponsorship</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#guidelines">Guidelines</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#deadlines">Deadlines</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a class="btn btn-outline-light mr-3" href="/register">Register for Conference</a>
                    <a class="btn btn-outline-light" href="/login">Sign in</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">

        @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <!-- Outer Row -->
        <div class="flex-row d-flex justify-content-center">
            <div class="card o-hidden border-0 shadow-lg my-5" style="width: 100%">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Registration for applicants</h1>
                                </div>

                                <form class="user row" method="POST" action="/register">
                                    @csrf
                                    <div class="col-md-4 mb-3">
                                        <label>First Name <span style="color: red">*</span></label>
                                        <input type="text" name="fname" value="{{ old('fname') }}" class="form-control" />
                                        @if ($errors->has('fname'))
                                            <small class="text-danger">
                                                {{ $errors->first('fname') }}
                                            </small>
                                        @endif
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label>Middle name <span style="color: red">*</span></label>
                                        <input type="text" value="{{ old('mname') }}" name="mname" class="form-control" />
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label>Last Name <span style="color: red">*</span></label>
                                        <input type="text" value="{{ old('lname') }}" name="lname" class="form-control" />
                                        @if ($errors->has('lname'))
                                            <small class="text-danger">
                                                {{ $errors->first('lname') }}
                                            </small>
                                        @endif
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Email <span style="color: red">*</span></label>
                                        <input type="email" value="{{ old('email') }}" name="email" class="form-control" />
                                        @if ($errors->has('email'))
                                            <small class="text-danger">
                                                {{ $errors->first('email') }}
                                            </small>
                                        @endif
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>MCT number (optional)</label>
                                        <input type="text" value="{{ old('mct_number') }}" name="mct_number" class="form-control" />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Gender <span style="color: red">*</span></label>
                                        <select name="gender" class="form-control" value="{{ old('gender') }}">
                                            <option value="" selected disabled>
                                                Select gender
                                            </option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                        @if ($errors->has('gender'))
                                            <small class="text-danger">
                                                {{ $errors->first('gender') }}
                                            </small>
                                        @endif
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Phone <span style="color: red">*</span></label>
                                        <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" />
                                        @if ($errors->has('phone'))
                                            <small class="text-danger">
                                                {{ $errors->first('phone') }}
                                            </small>
                                        @endif
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label>State/Region<span style="color: red">*</span></label>
                                        <input type="text" name="region" class="form-control" />
                                        @if ($errors->has('region'))
                                            <small class="text-danger">
                                                {{ $errors->first('region') }}
                                            </small>
                                        @endif
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label>Country <span style="color: red">*</span></label>
                                        <select class="form-control" value="{{ old('country') }}" name="country">
                                            <option value="">Select country that your from</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">
                                                {{ $country->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('country'))
                                            <small class="text-danger">
                                                {{ $errors->first('country') }}
                                            </small>
                                        @endif
                                    </div>

                                    {{-- <div class="col-md-6 mb-3">
                                        <select class="form-control" name="reason">
                                            <option value="">Reason for attending</option>
                                            <option value="1">Application of abstract</option>
                                            <option value="2">Attending the event to observe</option>
                                        </select>
                                    </div> --}}

                                    <div class="col-md-6 mb-3">
                                        <label>Password <span style="color: red">*</span></label>
                                        <input type="text" name="password" value="{{ old('password') }}" class="form-control" />
                                        @if ($errors->has('password'))
                                            <small class="text-danger">
                                                {{ $errors->first('password') }}
                                            </small>
                                        @endif
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label>Confirm Password <span style="color: red">*</span></label>
                                        <input type="text" name="confirmpassword" value="{{ old('confirmpassword') }}" class="form-control" />
                                    </div>

                                    {{-- <div class="col-md-6 mb-3">
                                        <label>Date of birth <span style="color: red">*</span></label>
                                        <input type="text" name="dob" class="form-control" />
                                    </div> --}}
                                    <div class="col-md-6 mb-3">
                                        <label>Your organization <span style="color: red">*</span></label>
                                        <input type="text" name="affiliation" class="form-control" />
                                        @if ($errors->has('affiliation'))
                                            <small class="text-danger">
                                                {{ $errors->first('affiliation') }}
                                            </small>
                                        @endif
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Please select the profession that most closely represents you <span
                                                style="color: red">*</span></label>
                                        <select class="form-control" name="profession">
                                            <option value="">Select profession</option>
                                            <option value="Administrator">Administrator</option>
                                            <option value="Community health worker">Community health worker</option>
                                            <option value="First responder (such as EMT, paramedic)">First responder
                                                (such as EMT, paramedic)</option>
                                            <option value="Medical doctor">Medical doctor</option>
                                            <option
                                                value="Mental health provider (such as counselor, psychologist, social worker)">
                                                Mental health provider (such as counselor, psychologist, social worker)
                                            </option>
                                            <option value="Nurse/nurse practitioner/physician assistant">Nurse/nurse
                                                practitioner/physician assistant</option>
                                            <option value="Pharmacist">Pharmacist</option>
                                            <option value="Paediatrician">Paediatrician</option>
                                            <option value="Dentist">Dentist</option>
                                            <option value="Public health official">Public health official</option>
                                            <option value="Testing or laboratory personnel">Testing or laboratory
                                                personnel</option>
                                            <option value="Teacher/educator">Teacher/educator</option>
                                            <option value="Researcher">Researcher</option>
                                            <option value="Student">Student</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        @if ($errors->has('profession'))
                                            <small class="text-danger">
                                                {{ $errors->first('profession') }}
                                            </small>
                                        @endif
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label>Where do you work? <span style="color: red">*</span></label>
                                        <select class="form-control" name="work">
                                            <option value="">Work</option>
                                            <option value="Hospital">Hospital</option>
                                            <option value="Community healthcare">Community healthcare</option>
                                            <option value="Nursing/care facility">Nursing/care facility</option>
                                            <option value="Public health">Public health</option>
                                            <option value="Non-governmental organization">Non-governmental organization
                                            </option>
                                            <option value="School/university">School/university</option>
                                            <option value="Government">Government</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        @if ($errors->has('work'))
                                        <small class="text-danger">
                                            {{ $errors->first('work') }}
                                        </small>
                                    @endif
                                    </div>

                                    <button class="btn btn-primary btn-user mt-4 btn-block">
                                        Register
                                    </button>
                                </form>
                                <hr />
                                <div class="text-center">
                                    <a class="small" href="/login">Have an account? Login</a><br>
                                    <a class="small" href="/">Home</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('dashboard/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('dashboard/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('dashboard/js/sb-admin-2.min.js') }}"></script>
</body>

</html>
