@php
    $id = 'authentication.logout';
    $title = 'Logout From Your Account';
@endphp

@extends('components.layouts.base')
@section('content')
    <section class="page-title page-title-bottom bg-holder bg-overlay-black-50" style="background: url({{ asset('images/breadcrumb.jpg') }});">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-12">
                    <h1 class="text-white">Logout From Your Account</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li aria-current="page" class="breadcrumb-item active">Logout</li>
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
                        <form action="{{ route('logout') }}" class="row t-sm-4 align-items-center mt-2" method="post">
                            @csrf
                            @method('post')
                            <div class="col-sm-12 mb-5">
                                <h5 class="mb-0 text-center">Are You Sure, You Want To Logout?</h5>
                            </div>
                            <div class="col-sm-6 d-grid">
                                <button class="btn btn-primary" type="submit">Logout</button>
                            </div>
                            <div class="col-sm-6 d-grid">
                                <a class="btn btn-secondary" href="{{ route('index') }}">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
