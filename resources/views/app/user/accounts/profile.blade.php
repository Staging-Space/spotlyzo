@php
    $id = 'user.accounts.profile';
    $title = 'Profile | Accounts | User';
@endphp

@extends('components.layouts.base')
@section('content')
    <section class="page-title page-title-bottom bg-holder bg-overlay-black-50" style="background: url({{ asset('images/breadcrumb.jpg') }});">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-12">
                    <h1 class="text-white">Profile</h1>
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
                            <li aria-current="page" class="breadcrumb-item active">Profile</li>
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
                    <div class="listing-detail-page">
                        <div class="listing-detail-box mb-4">
                            <div class="detail-title">
                                <h5>Update Accounts Details</h5>
                            </div>
                            <form action="{{ route('user.accounts.update-profile') }}" method="post">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="form-label">Enter your first name <span class="text-danger">*</span></label>
                                        <input class="form-control" maxlength="255" name="first_name" placeholder="First Name" value="{{ $user->first_name }}" required type="text">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="form-label">Enter your last name <span class="text-danger">*</span></label>
                                        <input class="form-control" maxlength="255" name="last_name" placeholder="Last Name" value="{{ $user->last_name }}" required type="text">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label">Enter your email address <span class="text-danger">*</span></label>
                                        <input class="form-control" maxlength="255" name="email" placeholder="Email Address" value="{{ $user->email }}" required type="email">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="form-label">Enter your phone number <span class="text-danger">*</span></label>
                                        <input class="form-control" maxlength="10" minlength="10" name="phone" placeholder="Phone Number" value="{{ $user->phone }}" required type="tel">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="form-label">Enter your address <span class="text-danger">*</span></label>
                                        <input class="form-control" maxlength="255" name="address" placeholder="Address" value="{{ $user->address }}" required type="text">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="form-label">Enter your city <span class="text-danger">*</span></label>
                                        <input class="form-control" maxlength="255" name="city" placeholder="City" value="{{ $user->city }}" required type="text">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="form-label">Enter your postal code <span class="text-danger">*</span></label>
                                        <input class="form-control" maxlength="5" minlength="5" name="postal_code" placeholder="Postal Code" value="{{ $user->postal_code }}" required type="tel">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="listing-detail-box mb-0">
                            <div class="detail-title">
                                <h5>Update Password</h5>
                            </div>
                            <form action="{{ route('user.accounts.update-password') }}" method="post">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="form-group col-md-12 mb-3">
                                        <label class="form-label">Enter your current password <span class="text-danger">*</span></label>
                                        <input class="form-control" maxlength="32" minlength="8" name="current_password" placeholder="Current Password" required type="password">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="form-label">Enter your new password <span class="text-danger">*</span></label>
                                        <input class="form-control" maxlength="32" minlength="8" name="new_password" placeholder="New Password" required type="password">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="form-label">Confirm your new password <span class="text-danger">*</span></label>
                                        <input class="form-control" maxlength="32" minlength="8" name="confirm_new_password" placeholder="Confim New Password" required type="password">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
