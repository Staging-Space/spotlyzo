@php
    $id = 'authentication.register';
    $title = 'Create An Account';
@endphp

@extends('components.layouts.base')
@section('content')
    <section class="page-title page-title-bottom bg-holder bg-overlay-black-50" style="background: url({{ asset('images/breadcrumb.jpg') }});">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-12">
                    <h1 class="text-white">Create An Account</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li aria-current="page" class="breadcrumb-item active">Register</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="space-ptb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="border-radius p-sm-5 border p-4">
                        <form action="{{ route('register') }}" class="row t-sm-4 align-items-center mt-2" method="post">
                            @csrf
                            @method('post')
                            <div class="col-sm-12 mb-3">
                                <input class="form-control" maxlength="255" name="first_name" placeholder="Enter Your First Name" required type="text">
                            </div>
                            <div class="col-sm-12 mb-3">
                                <input class="form-control" maxlength="255" name="last_name" placeholder="Enter Your Last Name" required type="text">
                            </div>
                            <div class="col-sm-12 mb-3">
                                <input class="form-control" maxlength="255" name="email" placeholder="Enter Your Email Address" required type="email">
                            </div>
                            <div class="col-sm-12 mb-3">
                                <input class="form-control" maxlength="32" minlength="8" name="password" placeholder="Enter Your Password" required type="password">
                            </div>
                            <div class="col-sm-12 mb-5">
                                <input class="form-control" maxlength="32" minlength="8" name="confirm_password" placeholder="Confirm Your Password" required type="password">
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled mt-sm-0 mb-1 mt-3">
                                    <li class="me-1">
                                        <a class="text-dark" href="{{ route('login') }}">Already have an account?</a>
                                    </li>
                                    <li class="me-1">
                                        <a class="text-dark" href="{{ route('forgot-password') }}">Forgot password?</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-6 d-grid">
                                <button class="btn btn-primary" type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
