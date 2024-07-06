@php
    $id = 'user.accounts.outgoing-bookings';
    $title = 'Outgoing Bookings | Accounts | User';
@endphp

@extends('components.layouts.base')
@section('content')
    <section class="page-title page-title-bottom bg-holder bg-overlay-black-50" style="background: url({{ asset('images/breadcrumb.jpg') }});">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-12">
                    <h1 class="text-white">Outgoing Bookings</h1>
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
                            <li aria-current="page" class="breadcrumb-item active">Outgoing Bookings</li>
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
                    <div class="sidebar mb-0">
                        <div class="widget mb-0">
                            <div class="widget-content">
                                <div class="border-bottom mb-4 pb-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-0">
                                                <div class="d-sm-flex align-items-start">
                                                    <h6 class="mt-0">Test Place</h6>
                                                    <div class="d-flex mb-3 ms-auto">
                                                        <a class="bg-success-soft text-success border-radius font-sm me-2 px-3 py-1" href="#">Completed</a>
                                                        <a class="bg-danger-soft text-danger border-radius font-sm px-3 py-1" href="#">Pending</a>
                                                    </div>
                                                </div>
                                                <div class="booking-item d-flex mb-3">
                                                    <strong class="col-6 col-sm-3">Created Date:</strong>
                                                    <span>13 Jun 2024</span>
                                                </div>
                                                <div class="booking-item d-flex mb-3">
                                                    <strong class="col-6 col-sm-3">Name:</strong>
                                                    <span>Test Vendor</span>
                                                </div>
                                                <div class="booking-item d-flex mb-3">
                                                    <strong class="col-6 col-sm-3">Address:</strong>
                                                    <span>No. 0, Test Road, Test City</span>
                                                </div>
                                                <div class="booking-item d-flex mb-3">
                                                    <strong class="col-6 col-sm-3">Phone Number:</strong>
                                                    <span>000 0000 000</span>
                                                </div>
                                                <div class="booking-item d-flex mb-3">
                                                    <strong class="col-6 col-sm-3">Booking Date:</strong>
                                                    <span>13 Jun 2024</span>
                                                </div>
                                                <div class="booking-item d-flex mb-3">
                                                    <strong class="col-6 col-sm-3">Booking Time:</strong>
                                                    <span>08:00 AM - 05:00 PM</span>
                                                </div>
                                                <div class="booking-item d-flex mb-3">
                                                    <strong class="col-6 col-sm-3">Hourly Price:</strong>
                                                    <span>LKR 1,000.00</span>
                                                </div>
                                                <div class="booking-item d-flex mb-0">
                                                    <strong class="col-6 col-sm-3">Total Price:</strong>
                                                    <span>LKR 9,000.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom mb-4 pb-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-0">
                                                <div class="d-sm-flex align-items-start">
                                                    <h6 class="mt-0">Test Place</h6>
                                                    <div class="d-flex mb-3 ms-auto">
                                                        <a class="bg-success-soft text-success border-radius font-sm me-2 px-3 py-1" href="#">Completed</a>
                                                        <a class="bg-danger-soft text-danger border-radius font-sm px-3 py-1" href="#">Pending</a>
                                                    </div>
                                                </div>
                                                <div class="booking-item d-flex mb-3">
                                                    <strong class="col-6 col-sm-3">Created Date:</strong>
                                                    <span>13 Jun 2024</span>
                                                </div>
                                                <div class="booking-item d-flex mb-3">
                                                    <strong class="col-6 col-sm-3">Name:</strong>
                                                    <span>Test Vendor</span>
                                                </div>
                                                <div class="booking-item d-flex mb-3">
                                                    <strong class="col-6 col-sm-3">Address:</strong>
                                                    <span>No. 0, Test Road, Test City</span>
                                                </div>
                                                <div class="booking-item d-flex mb-3">
                                                    <strong class="col-6 col-sm-3">Phone Number:</strong>
                                                    <span>000 0000 000</span>
                                                </div>
                                                <div class="booking-item d-flex mb-3">
                                                    <strong class="col-6 col-sm-3">Booking Date:</strong>
                                                    <span>13 Jun 2024</span>
                                                </div>
                                                <div class="booking-item d-flex mb-3">
                                                    <strong class="col-6 col-sm-3">Booking Time:</strong>
                                                    <span>08:00 AM - 05:00 PM</span>
                                                </div>
                                                <div class="booking-item d-flex mb-3">
                                                    <strong class="col-6 col-sm-3">Hourly Price:</strong>
                                                    <span>LKR 1,000.00</span>
                                                </div>
                                                <div class="booking-item d-flex mb-0">
                                                    <strong class="col-6 col-sm-3">Total Price:</strong>
                                                    <span>LKR 9,000.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-0">
                                                <div class="d-sm-flex align-items-start">
                                                    <h6 class="mt-0">Test Place</h6>
                                                    <div class="d-flex mb-3 ms-auto">
                                                        <a class="bg-success-soft text-success border-radius font-sm me-2 px-3 py-1" href="#">Completed</a>
                                                        <a class="bg-danger-soft text-danger border-radius font-sm px-3 py-1" href="#">Pending</a>
                                                    </div>
                                                </div>
                                                <div class="booking-item d-flex mb-3">
                                                    <strong class="col-6 col-sm-3">Created Date:</strong>
                                                    <span>13 Jun 2024</span>
                                                </div>
                                                <div class="booking-item d-flex mb-3">
                                                    <strong class="col-6 col-sm-3">Name:</strong>
                                                    <span>Test Vendor</span>
                                                </div>
                                                <div class="booking-item d-flex mb-3">
                                                    <strong class="col-6 col-sm-3">Address:</strong>
                                                    <span>No. 0, Test Road, Test City</span>
                                                </div>
                                                <div class="booking-item d-flex mb-3">
                                                    <strong class="col-6 col-sm-3">Phone Number:</strong>
                                                    <span>000 0000 000</span>
                                                </div>
                                                <div class="booking-item d-flex mb-3">
                                                    <strong class="col-6 col-sm-3">Booking Date:</strong>
                                                    <span>13 Jun 2024</span>
                                                </div>
                                                <div class="booking-item d-flex mb-3">
                                                    <strong class="col-6 col-sm-3">Booking Time:</strong>
                                                    <span>08:00 AM - 05:00 PM</span>
                                                </div>
                                                <div class="booking-item d-flex mb-3">
                                                    <strong class="col-6 col-sm-3">Hourly Price:</strong>
                                                    <span>LKR 1,000.00</span>
                                                </div>
                                                <div class="booking-item d-flex mb-0">
                                                    <strong class="col-6 col-sm-3">Total Price:</strong>
                                                    <span>LKR 9,000.00</span>
                                                </div>
                                            </div>
                                        </div>
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
