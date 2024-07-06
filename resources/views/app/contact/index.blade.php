@php
    $id = 'contact.index';
    $title = 'Contact Us';
@endphp

@extends('components.layouts.base')
@section('content')
    <section class="page-title page-title-bottom bg-holder bg-overlay-black-50" style="background: url({{ asset('images/breadcrumb.jpg') }});">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-12">
                    <h1 class="text-white">Contact Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li aria-current="page" class="breadcrumb-item active">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="space-ptb contact-section">
        <div class="container">
            <div class="row bg-white">
                <div class="col-lg-4">
                    <div class="section-title">
                        <h2>Let's Get In Touch!</h2>
                        <div class="sub-title">
                            <span>Lorem ipsum is simply free text available the market dolor sit amet, consectetur notted adipisicing elit sed do.</span>
                        </div>
                    </div>
                    <ul class="list-unstyled d-flex mb-0 mb-3">
                        <li>
                            <a class="me-2" href="#" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a class="me-2" href="#" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a class="me-2" href="#" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a class="me-2" href="#">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{ route('contact.mail') }}" method="post" role="form">
                                @csrf
                                @method('post')
                                <div class="contact-form clearfix">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="section-field">
                                                <label class="form-label">Enter your name <span class="text-danger">*</span></label>
                                                <input class="form-control" id="name" maxlength="255" name="name" placeholder="Name" required type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="section-field">
                                                <label class="form-label">Enter your email address <span class="text-danger">*</span></label>
                                                <input class="form-control" id="email" maxlength="255" name="email" placeholder="Email Address" required type="email">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="section-field textarea">
                                                <label class="form-label">Enter your message <span class="text-danger">*</span></label>
                                                <textarea class="input-message form-control" id="message" name="message" placeholder="Message" rows="7"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-field submit-button">
                                        <button class="button btn btn-primary" type="submit">
                                            <span>Send Message</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="space-ptb contact-info border-top">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h4 class="mb-sm-5 mb-4">Additional Contact Information</h4>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-center add-icon mb-3">
                        <div class="contact-address-icon">
                            <i class="flaticon-location fa-3x"></i>
                        </div>
                        <div class="ms-3 text-start">
                            <h6>Address</h6>
                            <p>{{ env('APP_ADDRESS') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-md-0 mt-4">
                    <div class="d-flex align-items-center add-icon mb-3">
                        <div class="contact-address-icon">
                            <i class="flaticon-mail fa-3x"></i>
                        </div>
                        <div class="ms-3 text-start">
                            <h6>Email Address</h6>
                            <a class="mb-2" href="mailto:{{ env('APP_EMAIL') }}">{{ env('APP_EMAIL') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-md-0 mt-4">
                    <div class="d-flex align-items-center add-icon mb-3">
                        <div class="contact-address-icon">
                            <i class="flaticon-call fa-3x"></i>
                        </div>
                        <div class="ms-3 text-start">
                            <h6>Phone Number</h6>
                            <a class="mb-2" href="tel:{{ str(env('APP_PHONE'))->replaceMatches('/\s/', '') }}">{{ env('APP_PHONE') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
