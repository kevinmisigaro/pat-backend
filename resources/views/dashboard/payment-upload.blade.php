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
<h1 class="h3 mb-2 text-gray-800">Payment</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">

        <div class="mb-3">
            <h5><b>Instructions</b></h5>

            <p>Please pay via the following methods:</p>
            <p>
                <b>Bank name:</b> National Bank of Commerce <br> 
                <b>Account name:</b> Paediatric Association of Tanzania <br>
                <b>Account number:</b> 041103002213 <br>
                <b>SWIFT CODE:</b> NLCBTZTX <br>
                <b>BRANCH CODE:</b> 671541
            </p>
            <br>

            <p>When your done; upload an image or message for confirmation of payment, 
                and we will confirm your payment via email.
            </p>

        </div>

        <div class="row mb-5">

            <div class="col-md-4 mb-3">
                <div class="card bg-light" style="width: 100%">
                    <div class="card-body text-center">
                        <p><b>Paediatricians - Early Bird</b> <br> 100,000 TZS</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card bg-light" style="width: 100%">
                    <div class="card-body text-center">
                        <p><b>Paediatricians - Late Bird</b> <br> 150,000 TZS</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card bg-light" style="width: 100%">
                    <div class="card-body text-center">
                        <p><b>Paediatrician On site registration</b> <br> 200,000 TZS</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card bg-light" style="width: 100%">
                    <div class="card-body text-center">
                        <p><b>Associate members</b> <br> 50,000 TZS </p>
                    </div>
                </div>
            </div>


            <div class="col-md-4 mb-3">
                <div class="card bg-light" style="width: 100%">
                    <div class="card-body text-center">
                        <p><b>Non East African Resident</b> <br> 100 USD </p>

                    </div>
                </div>
            </div>


        </div>

        <form method="POST" action="/paymentsss" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label>Message</label>
                <textarea class="form-control" type="text" name="message" rows="3" width="100%"></textarea>
                <small>If you have a text confirmation of payment</small>
            </div>
            <div class="form-group mb-3">
                <label>Registration type</label>
                <select class="form-control" name="amount">
                    <option value="">
                        Select registration type
                    </option>
                    <option value="100000">
                        Early bird - 100,000 TZS
                    </option>
                    <option value="150000">
                        Late bird - 150,000 TZS
                    </option>
                    <option value="200000">
                       On site registration - 100,000 TZS
                    </option>
                    <option value="50000">
                        Associate Member - 50,000 TZS
                    </option>
                    <option value="230000">
                        Non East African Resident - 230,000 TZS
                    </option>
                </select>
                {{-- <small>If you have a text confirmation of payment</small> --}}
            </div>
            <div class="form-group mb-4">
                <label>Upload Image</label>
                <input class="form-control" type="file" name="image" />
                <small>If you have an image confirmation of payment</small>
            </div>
            <div class="form-group mb-3">
                <button class="btn btn-primary">Submit</button> 
                <a href="/logout" class="btn btn-info ms-4 ml-4">Return home</a>
            </div>
        </form>

    </div>
</div>


@endcomponent
