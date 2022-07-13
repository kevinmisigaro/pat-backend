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
    <div class="container">
               
        <!-- Outer Row -->
        <div class="flex-row d-flex justify-content-center mb-3">
            <div class="card o-hidden border-0 shadow-lg my-5" style="width: 100%">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Registration for applicants</h1>
                                </div>
                                @if (session()->has('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ session('error') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif
                                <form class="user row" method="POST" action="/register">
                                    @csrf
                                    <div class="col-md-6 mb-3">
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Name" />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Email" />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" name="mct_number" class="form-control"
                                            placeholder="MCT number (optional)" />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <select name="gender" class="form-control">
                                            <option value="" selected disabled>
                                                Select gender
                                            </option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>

                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" name="phone" class="form-control"
                                            placeholder="Phone" />
                                    </div>
                                
                                    <div class="col-md-6 mb-3">
                                       <select class="form-control" name="country">
                                        <option value="">Select country that your from</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">
                                                {{ $country->name }}
                                            </option>
                                        @endforeach
                                       </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <select class="form-control" name="reason">
                                            <option value="">Reason for attending</option>
                                            <option value="1">Application of abstract</option>
                                            <option value="2">Attending the event to observe</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Password" />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Date of birth</label>
                                        <input type="date" name="dob" class="form-control"
                                            placeholder="Date of birth"  />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Affiliation</label>
                                        <input type="text" name="affiliation" class="form-control"
                                            placeholder="Your Affiliation (college/office)"  />
                                    </div>
                                    
                                    <button class="btn btn-primary btn-user btn-block">
                                        Register
                                    </button>
                                </form>
                                <hr />
                                <div class="text-center">
                      <a class="small" href="/login"
                        >Have an account? Login</a
                      ><br>
                      <a class="small" href="/"
                      >Home</a
                    >
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
