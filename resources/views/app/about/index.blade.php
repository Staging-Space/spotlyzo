@php
    $id = 'about.index';
    $title = 'About Us';
@endphp

@extends('components.layouts.base')
@section('content')
    <section class="page-title page-title-bottom bg-holder bg-overlay-black-50" style="background: url({{ asset('images/breadcrumb.jpg') }});">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-12">
                    <h1 class="text-white">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li aria-current="page" class="breadcrumb-item active">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="space-ptb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5">
                    <div class="section-title mb-4">
                        <h2>Great Journeys <br> Fascinating Places</h2>
                        <div class="sub-title bg-transparent">
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Adipiscing integer ultrices suspendisse varius etiam est. Est, felis, tempus nec vitae orci sodales Metus, Sit semper et velit fusce.</span>
                        </div>
                        <p class="pt-3">velit nec at diam in sed. Massa dui ipsum ornare sagittis dolor sagittis amet odio est. Sit semper et velit fusce.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled mt-lg-4 mb-lg-5 mb-4 mt-0">
                                <li class="d-flex text-dark align-items-center">
                                    <i class="fa-solid fa-check font-xl text-primary me-3"></i>
                                    <span>Success is something of more.</span>
                                </li>
                                <li class="d-flex text-dark align-items-center mt-3">
                                    <i class="fa-solid fa-check font-xl text-primary me-3"></i>
                                    <span>Most people believe difficult.</span>
                                </li>
                                <li class="d-flex text-dark align-items-center mt-3">
                                    <i class="fa-solid fa-check font-xl text-primary me-3"></i>
                                    <span>They're wrong - it's not!</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled mt-lg-4 mb-lg-5 mb-4 mt-0">
                                <li class="d-flex text-dark align-items-center">
                                    <i class="fa-solid fa-check font-xl text-primary me-3"></i>
                                    <span>The Truth About Success</span>
                                </li>
                                <li class="d-flex text-dark align-items-center mt-3">
                                    <i class="fa-solid fa-check font-xl text-primary me-3"></i>
                                    <span>You will drift aimlessly until!</span>
                                </li>
                                <li class="d-flex text-dark align-items-center mt-3">
                                    <i class="fa-solid fa-check font-xl text-primary me-3"></i>
                                    <span>You arrive the original dock.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a class="btn btn-primary mb-4" href="{{ route('contact.index') }}">Contact Us</a>
                </div>
                <div class="col-lg-6">
                    <div class="about-image-wrap">
                        <div class="position-relative d-flex align-items-center">
                            <img alt="about" class="img-fluid" src="{{ asset('images/about-1.jpg') }}">
                            <img alt="about" class="img-fluid about-img-02 d-none d-xl-block ps-2" src="{{ asset('images/about-2.jpg') }}">
                        </div>
                        <div class="about-shape-2">
                            <img alt="pattern" src="{{ asset('images/pattern.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
