@php
    $id = 'admin.accounts.profile';
@endphp

@extends('components.layouts.admin.base')
@section('content')
    @include('components.includes.admin.sidebar')
    @if (session('success'))
        <div class="container-fluid mt-3">
            <div class="row row-eq-spacing">
                <div class="col-12">
                    <div class="alert alert-success mb-0">{{ session('success') }}</div>
                </div>
            </div>
        </div>
    @endif
    @if ($errors->any())
        <div class="container-fluid mt-3">
            <div class="row row-eq-spacing">
                <div class="col-12">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger {{ $loop->last ? 'mb-0' : '' }}">{{ $error }}</div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <div class="container-fluid my-3">
        <div class="row align-items-center mb-3">
            <div class="col-auto">
                <button class="btn btn-primary" id="back">
                    <i class="fa-solid fa-angle-left me-1"></i> Back
                </button>
            </div>
            <div class="col-auto">
                <h5 class="text-uppercase mb-0">
                    <i class="fa-solid fa-user me-2"></i> Profile
                </h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase mb-3">
                            <i class="fa-solid fa-check me-2"></i> Update Password
                        </h5>
                        <form action="{{ route('admin.accounts.update-password') }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label" for="new-password">Enter new password <span class="text-danger">*</span></label>
                                <input autocomplete="off" class="form-control" id="new-password" maxlength="32" minlength="8" name="new_password" placeholder="New Password" required type="password">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="confirm-new-password">Confirm new password <span class="text-danger">*</span></label>
                                <input autocomplete="off" class="form-control" id="confirm-new-password" maxlength="32" minlength="8" name="confirm_new_password" placeholder="Confirm New Password" required type="password">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="current-password">Enter current password <span class="text-danger">*</span></label>
                                <input autocomplete="off" class="form-control" id="current-password" maxlength="32" minlength="8" name="current_password" placeholder="Current Password" required type="password">
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-primary">
                                    <i class="fa-solid fa-check me-1"></i> Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
