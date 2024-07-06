@php
    $id = 'index';
    $title = 'Home';
@endphp

@extends('components.layouts.base')
@section('content')
    <section class="banner banner-01 bg-holder bg-overlay-black-80"
        style="background-image: url({{ asset('images/hero.jpg') }});">
        <div class="container">
            <div class="row justify-content-center position-relative">
                <div class="col-lg-10 text-center">
                    <h1 class="mb-3 text-white">Secret Places In The City</h1>
                    <p class="banner-sub-title mb-5 text-white">Find the best places to visit, hotel, spa, cafe, and many
                        more from local experts.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <form action="#" class="home-search" method="post">
                        @csrf
                        @method('post')
                        <div class="state-search">
                            <div class="form-group mb-lg-0 mb-3">
                                <span>What?</span>
                                <input class="form-control" maxlength="255" name="keyword"
                                    placeholder="Ex: restaurants, hotels, cares, bars" required type="text">
                            </div>
                        </div>
                        <div class="search-locations">
                            <div class="form-group mb-lg-0 form-location mb-3">
                                <span>Where?</span>
                                <input class="form-control" placeholder="Ex: colombo, kandy, galle, ratnapura"
                                    type="text">
                            </div>
                        </div>
                        <div class="state-submit">
                            <button class="btn btn-primary">
                                <i class="fas fa-search"></i> Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="owl-carousel mb-lg-0 mt-5" data-autoheight="false" data-items="6" data-md-items="4"
                        data-nav-arrow="false" data-nav-dots="false" data-sm-items="3" data-space="10" data-xs-items="2"
                        data-xx-items="1">
                        <a class="category-item-02" href="#">
                            <i class="flaticon-food-serving"></i>
                            <span class="category-title mb-0">Restaurant</span>
                        </a>
                        <a class="category-item-02 active" href="#">
                            <i class="flaticon-travel"></i>
                            <span class="category-title mb-0">Travel</span>
                        </a>
                        <a class="category-item-02" href="#">
                            <i class="flaticon-hotel"></i>
                            <span class="category-title mb-0">Hotel</span>
                        </a>
                        <a class="category-item-02" href="#">
                            <i class="flaticon-lithotherapy"></i>
                            <span class="category-title mb-0">Beauty & Spa</span>
                        </a>
                        <a class="category-item-02" href="#">
                            <i class="flaticon-breakdown"></i>
                            <span class="category-title mb-0">Cars</span>
                        </a>
                        <a class="category-item-02" href="#">
                            <i class="flaticon-guitar"></i>
                            <span class="category-title mb-0">Night life</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="space-ptb">
        <div class="container">
            <div class="row d-flex align-items-center mb-lg-5 mb-4">
                <div class="col-md-12 col-lg-8 col-xl-6">
                    <div class="section-title mb-0">
                        <h2>Most Popular Places</h2>
                        <div class="sub-title">
                            <span>Make a list of your achievements toward your long-term goal</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 col-xl-6 text-lg-end mt-lg-0 mt-4 text-start">
                    <a class="btn btn-primary" href="#">
                        <span>View All</span>
                    </a>
                </div>
            </div>
            <div class="row">

                @foreach ($places as $place)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="listing-item">
                            <div class="listing-image bg-overlay-half-top">
                                <img alt="place" class="img-fluid" src="{{ asset('images/place.jpg') }}">
                                <div class="listing-quick-box">
                                    <a class="category" href="#">{{ $place->category->title ?? 'N/A' }}</a>
                                    <a class="popup popup-single" data-bs-toggle="tooltip" data-placement="top"
                                        href="{{ asset('images/place.jpg') }}" title="Zoom">
                                        <i class="fas fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="listing-details">
                                <div class="listing-details-inner">
                                    <div class="listing-title mb-2">
                                        <h6>
                                            <a href="{{ route('places.book', $place->id)  }}">{{ $place->title ?? 'N/A' }}</a>
                                        </h6>
                                        <span class="listing-price">LKR {{ $place->price ?? 'N/A' }}/hr</span>
                                    </div>
                                    <p class="mb-3">{{ $place->description ?? 'N/A' }}</p>
                                    <div class="listing-rating-call">
                                        <a class="listing-rating" href="#">
                                            <i class="fas fa-user me-2"></i> {{ $place->user->first_name.' '.$place->user->last_name ?? 'N/A' }}
                                        </a>
                                        <a class="listing-call" href="tel:0000000000">
                                            <i class="fas fa-phone me-2"></i> {{ $place->user->phone ?? 'N/A' }}
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-bottom">
                                    <a class="listing-loaction" href="#">
                                        <i class="fas fa-map-marker-alt"></i> {{ $place->address ?? 'N/A' }}
                                    </a>
                                    <span class="listing-open">Available</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="space-ptb bg-primary work-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2>How It Works</h2>
                        <div class="sub-title bg-transparent">
                            <span>Do it today. Remind yourself of someone you know who died.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="feature-info-02 mb-lg-0 mb-4">
                        <div class="feature-icon">
                            <span>01</span>
                        </div>
                        <div class="feature-content">
                            <h5 class="feature-title">Choose What To Do</h5>
                            <p>Let success motivate you. Find a picture of what epitomizes success to you and then pull it
                                out when you are in need of motivation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-info-02 mb-lg-0 mb-4">
                        <div class="feature-icon">
                            <span>02</span>
                        </div>
                        <div class="feature-content">
                            <h5 class="feature-title">Find What You Want</h5>
                            <p>Do it today. Remind yourself of someone you know who died suddenly and the fact that there is
                                no guarantee that tomorrow will come.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-info-02">
                        <div class="feature-icon">
                            <span>03</span>
                        </div>
                        <div class="feature-content">
                            <h5 class="feature-title">Amazing Places</h5>
                            <p class="mb-0">Make a list of your achievements toward your long-term goal and remind
                                yourself that intentions don't count intentions don't count, only action's.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
