<header class="header">
    <nav class="navbar navbar-static-top navbar-expand-lg header-sticky">
        <div class="container-fluid">
            <button class="navbar-toggler" data-bs-target=".navbar-collapse" data-bs-toggle="collapse" type="button">
                <i class="fas fa-align-left"></i>
            </button>
            <a class="navbar-brand" href="{{ route('index') }}">
                <img alt="logo" class="img-fluid" src="{{ asset('images/logo.png') }}">
            </a>
            <div class="navbar-collapse justify-content-center collapse">
                <ul class="nav navbar-nav">
                    <li class="nav-item {{ $id == 'index' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item {{ $id == 'about.index' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('about.index') }}">About</a>
                    </li>
                    <li class="nav-item {{ $id == 'categories.index' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
                    </li>
                    <li class="nav-item {{ $id == 'contact.index' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('contact.index') }}">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a aria-expanded="false" aria-haspopup="true" class="nav-link" data-bs-toggle="dropdown" href="#" id="navbarDropdown" role="button">
                            Account <i class="fas fa-chevron-down fa-xs"></i>
                        </a>
                        <ul aria-labelledby="navbarDropdown" class="dropdown-menu">
                            <li class="{{ $id == 'user.accounts.profile' ? 'active' : '' }}">
                                <a class="dropdown-item" href="{{ route('user.accounts.profile') }}">Profile</a>
                            </li>
                            <li class="{{ $id == 'user.accounts.places' ? 'active' : '' }}">
                                <a class="dropdown-item" href="{{ route('user.accounts.places') }}">Places</a>
                            </li>
                            <li class="{{ $id == 'user.accounts.incoming-bookings' ? 'active' : '' }}">
                                <a class="dropdown-item" href="{{ route('user.accounts.incoming-bookings') }}">Incoming Bookings</a>
                            </li>
                            <li class="{{ $id == 'user.accounts.outgoing-bookings' ? 'active' : '' }}">
                                <a class="dropdown-item" href="{{ route('user.accounts.outgoing-bookings') }}">Outgoing Bookings</a>
                            </li>
                            <li class="{{ $id == 'user.accounts.transactions' ? 'active' : '' }}">
                                <a class="dropdown-item" href="{{ route('user.accounts.transactions') }}">Transactions</a>
                            </li>
                            <li class="{{ $id == 'authentication.logout' ? 'active' : '' }}">
                                <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="d-block d-md-flex align-items-center">
                <div class="add-listing d-none d-sm-block">
                    <div class="login d-inline-block notification">
                        <a class="text-white" href="#">
                            <i class="fa fa-bell text-primary me-1"></i> 10
                        </a>
                    </div>
                    @auth
                    <a class="btn btn-primary btn-md me-2" href="{{ route('logout') }}">
                        <i class="fa fa-sign-out-alt"></i> Logout
                    </a>
                    @endauth
                    @guest
                    <a class="btn btn-primary btn-md me-2" href="{{ route('login') }}">
                        <i class="fa fa-sign-in-alt"></i> Login
                    </a>
                    <a class="btn btn-primary btn-md me-2" href="{{ route('register') }}">
                        <i class="fa fa-user-plus"></i> Register
                    </a>
                    @endguest
                   
                    <a class="btn btn-primary btn-md" href="{{ route('user.places.create') }}">
                        <i class="fa fa-plus"></i> Add Place
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
