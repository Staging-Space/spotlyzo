<nav class="navbar navbar-expand-xxl bg-secondary d-flex d-xxl-none">
    <div class="container-fluid">
        <a class="navbar-brand text-uppercase d-flex align-items-center" href="{{ route('admin.index') }}">
            <img alt="icon" class="me-2" height="24" src="{{ asset('images/admin/icon.svg') }}" width="24"> Admin Panel
        </a>
        <button class="btn btn-secondary" data-bs-target="#sidebar" data-bs-toggle="offcanvas" type="button">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</nav>
