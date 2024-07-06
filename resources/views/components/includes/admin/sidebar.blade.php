<nav class="sidebar offcanvas-start offcanvas-xxl" id="sidebar" tabindex="-1">
    <div class="offcanvas-header bg-secondary">
        <a class="sidebar-brand text-uppercase d-flex align-items-center" href="{{ route('admin.index') }}">
            <img alt="icon" class="me-2" height="24" src="{{ asset('images/admin/icon.svg') }}" width="24"> Admin Panel
        </a>
        <button class="btn btn-secondary" id="mode">
            <i class="fa-solid fa-sun"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <ul class="sidebar-nav">
            <li>
                <h6 class="sidebar-header text-uppercase">Dashboard</h6>
            </li>
            <li class="nav-item">
                <a aria-current="{{ request()->routeIs('admin.index*') ? 'page' : '' }}" class="nav-link {{ request()->routeIs('admin.index*') ? 'active' : '' }}" href="{{ route('admin.index') }}">
                    <i class="fa-solid fa-home me-2"></i> Home
                </a>
            </li>
            <li class="nav-item">
                <a aria-current="{{ request()->routeIs('admin.index*') ? 'page' : '' }}" class="nav-link {{ request()->routeIs('admin.accounts.profile') ? 'active' : '' }}" href="{{ route('admin.accounts.profile') }}">
                    <i class="fa-solid fa-user me-2"></i> Profile
                </a>
            </li>
            <li class="nav-item">
                <a aria-current="{{ request()->routeIs('admin.index*') ? 'page' : '' }}" class="nav-link {{ request()->routeIs('logout') ? 'active' : '' }}" href="{{ route('logout') }}">
                    <i class="fa-solid fa-right-from-bracket me-2"></i> Logout
                </a>
            </li>
            <li class="mt-3">
                <h6 class="sidebar-header text-uppercase">Application</h6>
            </li>
            <li class="nav-item">
                <a aria-current="{{ request()->routeIs('admin.categories*') ? 'page' : '' }}" class="nav-link {{ request()->routeIs('admin.categories*') ? 'active' : '' }}" href="{{ route('admin.categories.index') }}">
                    <i class="fa-solid fa-list-ul me-2"></i> Categories
                </a>
            </li>
            <li class="nav-item">
                <a aria-current="{{ request()->routeIs('admin.facilities*') ? 'page' : '' }}" class="nav-link {{ request()->routeIs('admin.facilities*') ? 'active' : '' }}" href="{{ route('admin.facilities.index') }}">
                    <i class="fa-solid fa-hand-holding-medical me-2"></i> Facilities
                </a>
            </li>
            {{-- <li class="nav-item">
                <a aria-current="{{ request()->routeIs('admin.products*') ? 'page' : '' }}" class="nav-link {{ request()->routeIs('admin.products*') ? 'active' : '' }}" href="{{ route('admin.products.index') }}">
                    <i class="fa-solid fa-cube me-2"></i> Products
                </a>
            </li>
            <li class="nav-item">
                <a aria-current="{{ request()->routeIs('admin.articles*') ? 'page' : '' }}" class="nav-link {{ request()->routeIs('admin.articles*') ? 'active' : '' }}" href="{{ route('admin.articles.index') }}">
                    <i class="fa-solid fa-pen me-2"></i> Articles
                </a>
            </li> --}}
            <li class="mt-3">
                <h6 class="sidebar-header text-uppercase">External Links</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('index') }}" target="_blank">
                    <i class="fa-solid fa-globe me-2"></i> Website
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://xynosync.com" target="_blank">
                    <i class="fa-solid fa-globe me-2"></i> XynoSync
                </a>
            </li>
        </ul>
    </div>
</nav>
