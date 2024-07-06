@php
    $id = 'places.show';
    $title = 'Test Place | Places';
@endphp

@extends('components.layouts.base')
@section('content')
    <section class="page-title page-title-bottom bg-holder bg-overlay-black-50" style="background: url({{ asset('images/breadcrumb.jpg') }});">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-12">
                    <h1 class="text-white">Test Place</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Places</a>
                            </li>
                            <li aria-current="page" class="breadcrumb-item active">Test Place</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="space-ptb bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-7">
                    <div class="slider-slick">
                        <div class="slider slider-for">
                            <img alt="place" class="img-fluid" src="{{ asset('images/gallery-1.jpg') }}">
                            <img alt="place" class="img-fluid" src="{{ asset('images/gallery-2.jpg') }}">
                            <img alt="place" class="img-fluid" src="{{ asset('images/gallery-3.jpg') }}">
                            <img alt="place" class="img-fluid" src="{{ asset('images/gallery-4.jpg') }}">
                            <img alt="place" class="img-fluid" src="{{ asset('images/gallery-5.jpg') }}">
                            <img alt="place" class="img-fluid" src="{{ asset('images/gallery-6.jpg') }}">
                            <img alt="place" class="img-fluid" src="{{ asset('images/gallery-7.jpg') }}">
                            <img alt="place" class="img-fluid" src="{{ asset('images/gallery-8.jpg') }}">
                        </div>
                        <div class="slplaceider slider-nav d-none d-sm-block">
                            <img alt="place" class="img-fluid" src="{{ asset('images/gallery-1.jpg') }}">
                            <img alt="place" class="img-fluid" src="{{ asset('images/gallery-2.jpg') }}">
                            <img alt="place" class="img-fluid" src="{{ asset('images/gallery-3.jpg') }}">
                            <img alt="place" class="img-fluid" src="{{ asset('images/gallery-4.jpg') }}">
                            <img alt="place" class="img-fluid" src="{{ asset('images/gallery-5.jpg') }}">
                            <img alt="place" class="img-fluid" src="{{ asset('images/gallery-6.jpg') }}">
                            <img alt="place" class="img-fluid" src="{{ asset('images/gallery-7.jpg') }}">
                            <img alt="place" class="img-fluid" src="{{ asset('images/gallery-8.jpg') }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mt-lg-0 mt-3">
                    <h2 class="mb-0">Honey Restaurant</h2>
                    <a class="listing-loaction text-dark d-block mb-3" href="#">Test Category</a>
                    <div class="d-flex align-items-center mb-3">
                        <div class="call-animation">
                            <i class="fas fa-phone rounded-circle fa-flip-horizontal bg-primary d-inline-block p-2 text-white"></i>
                        </div>
                        <h6 class="mb-0 ps-1">
                            <span class="text-primary pe-2">Call Now</span> 000 0000 000
                        </h6>
                    </div>
                    <p class="mb-3">If success is a process with a number of defined steps, then it is just like any other process. So, what is the first step in any process?</p>
                    <h3 class="h2 d-block text-primary mb-0">LKR 1,000.00</h3>
                    <span>Per hour</span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="listing-detail-page">
                        <div class="listing-detail-box mb-4">
                            <div class="">
                                <div class="detail-title">
                                    <h5>Description</h5>
                                </div>
                                <p>The other virtues practice in succession by Franklin were silence, order, resolution, frugality, industry, sincerity, Justice, moderation, cleanliness, tranquility, chastity and humility.</p>
                                <p class="mb-0">From eight till twelve he worked at his trade. From twelve to one he read or overlooked his accounts and dined. From two to five he worked at his trade. The rest of the evening until 10 he spent in music, or diversion of some sort. This time is used also to put things in their places. In the last thing before retiring was examination of the day. At the age of 79, he ascribed his health to temperance; the acquisition of misfortune to industry and frugality;</p>
                            </div>
                        </div>
                        <div class="listing-detail-box mb-4">
                            <div class="detail-title">
                                <h5>Amenities</h5>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul class="list-unstyled mb-lg-0 mb-3">
                                        <li class="mb-3">
                                            <i class="far fa-check-circle text-secondary me-2"></i> High quality food
                                        </li>
                                        <li class="mb-3">
                                            <i class="far fa-check-circle text-secondary me-2"></i> Dining experience
                                        </li>
                                        <li class="mb-3">
                                            <i class="far fa-check-circle text-secondary me-2"></i> Cleanliness
                                        </li>
                                        <li>
                                            <i class="far fa-check-circle text-secondary me-2"></i> Price factor
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="list-unstyled mb-lg-0 mb-3">
                                        <li class="mb-3">
                                            <i class="far fa-check-circle text-secondary me-2"></i> Serve good drinks
                                        </li>
                                        <li class="mb-3">
                                            <i class="far fa-check-circle text-secondary me-2"></i> Wifi
                                        </li>
                                        <li class="mb-3">
                                            <i class="far fa-check-circle text-secondary me-2"></i> No smoking
                                        </li>
                                        <li>
                                            <i class="far fa-check-circle text-secondary me-2"></i> Air conditioning
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-3">
                                            <i class="far fa-check-circle text-secondary me-2"></i> All drinks
                                        </li>
                                        <li class="mb-3">
                                            <i class="far fa-check-circle text-secondary me-2"></i> Pets friendly
                                        </li>
                                        <li>
                                            <i class="far fa-check-circle text-secondary me-2"></i> Wireless internet
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="listing-detail-box mb-0">
                            <div class="detail-title">
                                <h5>Book The Place</h5>
                            </div>
                            <form action="#" method="post">
                                @csrf
                                @method('post')
                                <div class="row">
                                    <div class="form-group col-md-4 datetimepickers mb-3">
                                        <label class="form-label">Choose date <span class="text-danger"date>*</span></label>
                                        <div class="input-group date" data-target-input="nearest" id="datetimepicker-01">
                                            <input class="form-control datetimepicker-input" data-target="#datetimepicker-01" name="date" placeholder="Date" required type="text">
                                            <div class="input-group-append" data-target="#datetimepicker-01" data-toggle="datetimepicker">
                                                <div class="input-group-text">
                                                    <i class="far fa-calendar-alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group datetimepickers col-md-4 mb-3">
                                        <label class="form-label">Choose from <span class="text-danger">*</span></label>
                                        <div class="input-group date" data-target-input="nearest" id="datetimepicker-03">
                                            <input class="form-control datetimepicker-input" data-target="#datetimepicker-03" name="from" placeholder="From" required type="text">
                                            <div class="input-group-append" data-target="#datetimepicker-03" data-toggle="datetimepicker">
                                                <div class="input-group-text">
                                                    <i class="far fa-clock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group datetimepickers col-md-4 mb-3">
                                        <label class="form-label">Choose to <span class="text-danger">*</span></label>
                                        <div class="input-group date" data-target-input="nearest" id="datetimepicker-03">
                                            <input class="form-control datetimepicker-input" data-target="#datetimepicker-03" name="to" placeholder="To" required type="text">
                                            <div class="input-group-append" data-target="#datetimepicker-03" data-toggle="datetimepicker">
                                                <div class="input-group-text">
                                                    <i class="far fa-clock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="form-label">Enter your first name <span class="text-danger">*</span></label>
                                        <input class="form-control" maxlength="255" name="first_name" placeholder="First Name" required type="text">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="form-label">Enter your last name <span class="text-danger">*</span></label>
                                        <input class="form-control" maxlength="255" name="last_name" placeholder="Last Name" required type="text">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="form-label">Enter your email address <span class="text-danger">*</span></label>
                                        <input class="form-control" maxlength="255" name="email" placeholder="Email Address" required type="email">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="form-label">Enter your phone number <span class="text-danger">*</span></label>
                                        <input class="form-control" maxlength="10" minlength="10" name="phone" placeholder="Phone Number" required type="tel">
                                    </div>
                                    <div class="form-group col-md-12 mb-3">
                                        <label class="form-label">Enter your address <span class="text-danger">*</span></label>
                                        <input class="form-control" maxlength="255" name="address" placeholder="Address" required type="text">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="form-label">Enter your city <span class="text-danger">*</span></label>
                                        <input class="form-control" maxlength="255" name="city" placeholder="City" required type="text">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="form-label">Enter your postal code <span class="text-danger">*</span></label>
                                        <input class="form-control" maxlength="5" minlength="5" name="postal_code" placeholder="Postal Code" required type="tel">
                                    </div>
                                    <div class="form-group col-md-12 mb-3">
                                        <label class="form-label">Enter your message</label>
                                        <textarea class="form-control" maxlength="1000" name="message" placeholder="Message" rows="5"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary">Book</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar mb-0">
                        <div class="widget">
                            <div class="widget-title">
                                <h6>
                                    <i class="fas fa-map-marker-alt"></i> Location
                                </h6>
                            </div>
                            <div class="widget-content">
                                <iframe allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15384.040823456671!2d144.96230200000002!3d-37.805673!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642df33fe61f5%3A0xae70b199abca592d!2sBell%20St%20%2F%20Brunswick%20St!5e1!3m2!1sen!2sin!4v1669099111026!5m2!1sen!2sin" style="height: 200px; width: 100%;"></iframe>
                                <ul class="list-unstyled d-block mb-0 mt-4">
                                    <li class="mb-2">
                                        <strong class="text-dark d-inline-block me-2">Category:</strong> Test Category
                                    </li>
                                    <li class="mb-2">
                                        <strong class="text-dark d-inline-block me-2">Address:</strong> No. 0, Test Road, Test City
                                    </li>
                                    <li class="mb-2">
                                        <strong class="text-dark d-inline-block me-2">City:</strong> Test City
                                    </li>
                                    <li>
                                        <strong class="text-dark d-inline-block me-2">Phone Number:</strong> 000 0000 000
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget-title">
                                <h6>
                                    <i class="far fa-clock"></i> Opening Hours
                                </h6>
                            </div>
                            <div class="widget-content">
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex mb-2">
                                        <strong class="text-dark d-inline-block me-2">Monday:</strong>
                                        <span class="ms-auto">08:00 - 17:00</span>
                                    </li>
                                    <li class="d-flex mb-2">
                                        <strong class="text-dark d-inline-block me-2">Tuesday:</strong>
                                        <span class="ms-auto">08:00 - 17:00</span>
                                    </li>
                                    <li class="d-flex mb-2">
                                        <strong class="text-dark d-inline-block me-2">Wednesday:</strong>
                                        <span class="ms-auto">08:00 - 17:00</span>
                                    </li>
                                    <li class="d-flex mb-2">
                                        <strong class="text-dark d-inline-block me-2">Thrusday:</strong>
                                        <span class="ms-auto">08:00 - 17:00</span>
                                    </li>
                                    <li class="d-flex mb-2">
                                        <strong class="text-dark d-inline-block me-2">Friday:</strong>
                                        <span class="ms-auto">08:00 - 17:00</span>
                                    </li>
                                    <li class="d-flex mb-2">
                                        <strong class="text-dark d-inline-block me-2">Saturday:</strong>
                                        <span class="ms-auto">Closed</span>
                                    </li>
                                    <li class="d-flex mb-2">
                                        <strong class="text-dark d-inline-block me-2">Sunday:</strong>
                                        <span class="ms-auto">Closed</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
