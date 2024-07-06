@php
    $id = 'user.accounts.transactions';
    $title = 'Transactions | Accounts | User';
@endphp

@extends('components.layouts.base')
@section('content')
    <section class="page-title page-title-bottom bg-holder bg-overlay-black-50" style="background: url({{ asset('images/breadcrumb.jpg') }});">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-12">
                    <h1 class="text-white">Transactions</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">User</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Accounts</a>
                            </li>
                            <li aria-current="page" class="breadcrumb-item active">Transactions</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="space-ptb bg-light">
        <div class="container">
            <div class="row">
                @include('components.includes.sidebar')
                <div class="col-lg-9 col-md-8">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="border-radius bg-white p-4 shadow-sm">
                                <h5>Total Withdrawals</h5>
                                <h2 class="text-primary mb-0">LKR 1,000.00</h2>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="border-radius bg-white p-4 shadow-sm">
                                <h5>Pending Withdrawals</h5>
                                <h2 class="text-success mb-0">LKR 1,000.00</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="sidebar mb-0">
                            <div class="widget mb-0">
                                <div class="widget-content">
                                    <div class="table-responsive">
                                        <table class="transactions-table mb-0 table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Type</th>
                                                    <th>Date</th>
                                                    <th>Details</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <label class="badge bg-success mb-0">Incoming</label>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <strong>Created Date:</strong> 2024-06-15
                                                            </li>
                                                            <li>
                                                                <strong>Booking Date:</strong> 2024-06-15
                                                            </li>
                                                            <li>
                                                                <strong>Booking Time:</strong> 08:00AM-05:00PM
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <strong>Place:</strong> Test Place
                                                            </li>
                                                            <li>
                                                                <strong>Vendor:</strong> Test Vendor
                                                            </li>
                                                            <li>
                                                                <strong>User:</strong> Test User
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>LKR 9,000.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <label class="badge bg-success mb-0">Incoming</label>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <strong>Created Date:</strong> 2024-06-15
                                                            </li>
                                                            <li>
                                                                <strong>Booking Date:</strong> 2024-06-15
                                                            </li>
                                                            <li>
                                                                <strong>Booking Time:</strong> 08:00AM-05:00PM
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <strong>Place:</strong> Test Place
                                                            </li>
                                                            <li>
                                                                <strong>Vendor:</strong> Test Vendor
                                                            </li>
                                                            <li>
                                                                <strong>User:</strong> Test User
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>LKR 9,000.00</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>
                                                        <label class="badge bg-success mb-0">Incoming</label>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <strong>Created Date:</strong> 2024-06-15
                                                            </li>
                                                            <li>
                                                                <strong>Booking Date:</strong> 2024-06-15
                                                            </li>
                                                            <li>
                                                                <strong>Booking Time:</strong> 08:00AM-05:00PM
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <strong>Place:</strong> Test Place
                                                            </li>
                                                            <li>
                                                                <strong>Vendor:</strong> Test Vendor
                                                            </li>
                                                            <li>
                                                                <strong>User:</strong> Test User
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>LKR 9,000.00</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>
                                                        <label class="badge bg-danger mb-0">Outgoing</label>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <strong>Created Date:</strong> 2024-06-15
                                                            </li>
                                                            <li>
                                                                <strong>Booking Date:</strong> 2024-06-15
                                                            </li>
                                                            <li>
                                                                <strong>Booking Time:</strong> 08:00AM-05:00PM
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <strong>Place:</strong> Test Place
                                                            </li>
                                                            <li>
                                                                <strong>Vendor:</strong> Test Vendor
                                                            </li>
                                                            <li>
                                                                <strong>User:</strong> Test User
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>LKR 9,000.00</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>
                                                        <label class="badge bg-success mb-0">Incoming</label>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <strong>Created Date:</strong> 2024-06-15
                                                            </li>
                                                            <li>
                                                                <strong>Booking Date:</strong> 2024-06-15
                                                            </li>
                                                            <li>
                                                                <strong>Booking Time:</strong> 08:00AM-05:00PM
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <strong>Place:</strong> Test Place
                                                            </li>
                                                            <li>
                                                                <strong>Vendor:</strong> Test Vendor
                                                            </li>
                                                            <li>
                                                                <strong>User:</strong> Test User
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>LKR 9,000.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
