<div class="col-lg-3 col-md-4">
    <div class="sidebar is-sticky">
        <div class="widget">
            <div class="widget-title">
                <h6>Dashboard</h6>
            </div>
            <div class="widget-content dashboard-nav">
                <ul class="list-unstyled">
                    <li class="{{ $id == 'user.accounts.profile' ? 'active' : '' }}">
                        <a href="{{ route('user.accounts.profile') }}">
                            <i class="fas fa-circle-user me-2"></i> Profile
                        </a>
                    </li>
                    <li class="{{ $id == 'user.accounts.places' ? 'active' : '' }}">
                        <a href="{{ route('user.accounts.places') }}">
                            <i class="fas fa-circle-dot me-2"></i> Places
                        </a>
                    </li>
                    <li class="{{ $id == 'user.accounts.incoming-bookings' ? 'active' : '' }}">
                        <a href="{{ route('user.accounts.incoming-bookings') }}">
                            <i class="fas fa-circle-arrow-left me-2"></i> Incoming Bookings
                        </a>
                    </li>
                    <li class="{{ $id == 'user.accounts.outgoing-bookings' ? 'active' : '' }}">
                        <a href="{{ route('user.accounts.outgoing-bookings') }}">
                            <i class="fas fa-circle-arrow-right me-2"></i> Outgoing Bookings
                        </a>
                    </li>
                    <li class="{{ $id == 'user.accounts.transactions' ? 'active' : '' }}">
                        <a href="{{ route('user.accounts.transactions') }}">
                            <i class="fas fa-circle-info me-2"></i> Transactions
                        </a>
                    </li>
                </ul>
                <div class="d-grid">
                    <a class="btn btn-primary mt-2" href="{{ route('logout') }}">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>
