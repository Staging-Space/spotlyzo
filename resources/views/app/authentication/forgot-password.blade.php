@php
    $id = 'authentication.forgot-password';
    $title = 'Send Password Reset Link';
@endphp

@extends('components.layouts.base')
@section('content')
    <section class="page-title page-title-bottom bg-holder bg-overlay-black-50" style="background: url({{ asset('images/breadcrumb.jpg') }});">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-12">
                    <h1 class="text-white">Send Password Reset Link</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li aria-current="page" class="breadcrumb-item active">Forgot Password</li>
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
                        <form action="{{ route('forgot-password') }}" class="row t-sm-4 align-items-center mt-2" method="post">
                            @csrf
                            @method('post')
                            <div class="col-sm-12 mb-5">
                                <input class="form-control" maxlength="255" name="email" placeholder="Enter Your Email Address" required type="email">
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled mt-sm-0 mb-1 mt-3">
                                    <li class="me-1">
                                        <a class="text-dark" href="{{ route('register') }}">Don't have an account?</a>
                                    </li>
                                    <li class="me-1">
                                        <a class="text-dark" href="{{ route('login') }}">Already have an account?</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-6 d-grid">
                                <button class="btn btn-primary" type="submit">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
