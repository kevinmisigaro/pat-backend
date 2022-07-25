<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
        <div class="sidebar-brand-text mx-3">PAT</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/home">
            <i class="fa fa-tachometer"></i>
            <span>Dashboard</span></a>
    </li>


    @if (\Illuminate\Support\Facades\Auth::user()->role == 1)
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="/applicants">
            <i class="fa fa-graduation-cap"></i>
            <span>Applicants</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="/reviewers">
            <i class="fa fa-users"></i>
            <span>Reviewers</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="/paymentss">
            <i class="fa fa-users"></i>
            <span>Payments</span></a>
    </li>
    @endif

  @if (\Illuminate\Support\Facades\Auth::user()->role == 3)
        <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="/yourreviews">
            <i class="fa fa-file-text-o"></i>
            <span>Your reviews</span></a>
    </li>
  @endif

  @if (\Illuminate\Support\Facades\Auth::user()->role == 2)
       <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="/applicant-upload">
            <i class="fa fa-file-text-o"></i>
            <span>Upload Abstract</span></a>
    </li>

    @if (\Illuminate\Support\Facades\Auth::user()->applicant->document !== null)
    <li class="nav-item">
        <a class="nav-link" href="/reupload">
            <i class="fa fa-file-text-o"></i>
            <span>Edit Abstract</span></a>
    </li>
    @endif

    <li class="nav-item">
        <a class="nav-link" href="/payment-upload">
            <i class="fa fa-file-text-o"></i>
            <span>Payment</span></a>
    </li>

  @endif

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    {{-- <div class="text-center d-none d-md-inline">
        <button class="border-0" id="sidebarToggle">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </button>
    </div> --}}

</ul>
