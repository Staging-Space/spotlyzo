@php
    $id = 'categories.show';
    $title = 'Test Category | Categories';
@endphp

@extends('components.layouts.base')
@section('content')
    <section class="page-title page-title-bottom bg-holder bg-overlay-black-50" style="background: url({{ asset('images/breadcrumb.jpg') }});">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-12">
                    <h1 class="text-white">Test Category</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('categories.index') }}">Categories</a>
                            </li>
                            <li aria-current="page" class="breadcrumb-item active">Test Category</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="space-ptb bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#" class="home-search" method="post">
                        @csrf
                        @method('post')
                        <div class="state-search">
                            <div class="form-group mb-lg-0 mb-3">
                                <span>What?</span>
                                <input class="form-control" maxlength="255" name="keyword" placeholder="Ex: restaurants, hotels, cares, bars" required type="text">
                            </div>
                        </div>
                        <div class="search-locations">
                            <div class="form-group mb-lg-0 form-location mb-3">
                                <span>Where?</span>
                                <input class="form-control" placeholder="Ex: colombo, kandy, galle, ratnapura" type="text">
                            </div>
                        </div>
                        <div class="state-submit">
                            <button class="btn btn-dark">
                                <i class="fas fa-search"></i> Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="space-ptb bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row mb-4">
                        <div class="col-12">
                            <h6 class="mb-0">Showing 1-6 of <span class="text-primary">28 listing</span></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 mb-4">
                            <div class="listing-item">
                                <div class="listing-image bg-overlay-half-top">
                                    <img alt="place" class="img-fluid" src="{{ asset('images/place.jpg') }}">
                                    <div class="listing-quick-box">
                                        <a class="category" href="#">Test Category</a>
                                        <a class="popup popup-single" data-bs-toggle="tooltip" data-placement="top" href="{{ asset('images/place.jpg') }}" title="Zoom">
                                            <i class="fas fa-search-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-details">
                                    <div class="listing-details-inner">
                                        <div class="listing-title mb-2">
                                            <h6>
                                                <a href="#">Espresso Macchiato</a>
                                            </h6>
                                            <span class="listing-price">LKR 1,000/hr</span>
                                        </div>
                                        <p class="mb-3">Remind yourself you have nowhere to go except have already been at the bottom.</p>
                                        <div class="listing-rating-call">
                                            <a class="listing-rating" href="#">
                                                <i class="fas fa-user me-2"></i> Test Vendor
                                            </a>
                                            <a class="listing-call" href="tel:0000000000">
                                                <i class="fas fa-phone me-2"></i> 000 0000 000
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-bottom">
                                        <a class="listing-loaction" href="#">
                                            <i class="fas fa-map-marker-alt"></i> Test City
                                        </a>
                                        <span class="listing-open">Available</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="listing-item">
                                <div class="listing-image bg-overlay-half-top">
                                    <img alt="place" class="img-fluid" src="{{ asset('images/place.jpg') }}">
                                    <div class="listing-quick-box">
                                        <a class="category" href="#">Test Category</a>
                                        <a class="popup popup-single" data-bs-toggle="tooltip" data-placement="top" href="{{ asset('images/place.jpg') }}" title="Zoom">
                                            <i class="fas fa-search-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-details">
                                    <div class="listing-details-inner">
                                        <div class="listing-title mb-2">
                                            <h6>
                                                <a href="#">Espresso Macchiato</a>
                                            </h6>
                                            <span class="listing-price">LKR 1,000/hr</span>
                                        </div>
                                        <p class="mb-3">Remind yourself you have nowhere to go except have already been at the bottom.</p>
                                        <div class="listing-rating-call">
                                            <a class="listing-rating" href="#">
                                                <i class="fas fa-user me-2"></i> Test Vendor
                                            </a>
                                            <a class="listing-call" href="tel:0000000000">
                                                <i class="fas fa-phone me-2"></i> 000 0000 000
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-bottom">
                                        <a class="listing-loaction" href="#">
                                            <i class="fas fa-map-marker-alt"></i> Test City
                                        </a>
                                        <span class="listing-open">Available</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="listing-item">
                                <div class="listing-image bg-overlay-half-top">
                                    <img alt="place" class="img-fluid" src="{{ asset('images/place.jpg') }}">
                                    <div class="listing-quick-box">
                                        <a class="category" href="#">Test Category</a>
                                        <a class="popup popup-single" data-bs-toggle="tooltip" data-placement="top" href="{{ asset('images/place.jpg') }}" title="Zoom">
                                            <i class="fas fa-search-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-details">
                                    <div class="listing-details-inner">
                                        <div class="listing-title mb-2">
                                            <h6>
                                                <a href="#">Espresso Macchiato</a>
                                            </h6>
                                            <span class="listing-price">LKR 1,000/hr</span>
                                        </div>
                                        <p class="mb-3">Remind yourself you have nowhere to go except have already been at the bottom.</p>
                                        <div class="listing-rating-call">
                                            <a class="listing-rating" href="#">
                                                <i class="fas fa-user me-2"></i> Test Vendor
                                            </a>
                                            <a class="listing-call" href="tel:0000000000">
                                                <i class="fas fa-phone me-2"></i> 000 0000 000
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-bottom">
                                        <a class="listing-loaction" href="#">
                                            <i class="fas fa-map-marker-alt"></i> Test City
                                        </a>
                                        <span class="listing-open">Available</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="listing-item">
                                <div class="listing-image bg-overlay-half-top">
                                    <img alt="place" class="img-fluid" src="{{ asset('images/place.jpg') }}">
                                    <div class="listing-quick-box">
                                        <a class="category" href="#">Test Category</a>
                                        <a class="popup popup-single" data-bs-toggle="tooltip" data-placement="top" href="{{ asset('images/place.jpg') }}" title="Zoom">
                                            <i class="fas fa-search-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-details">
                                    <div class="listing-details-inner">
                                        <div class="listing-title mb-2">
                                            <h6>
                                                <a href="#">Espresso Macchiato</a>
                                            </h6>
                                            <span class="listing-price">LKR 1,000/hr</span>
                                        </div>
                                        <p class="mb-3">Remind yourself you have nowhere to go except have already been at the bottom.</p>
                                        <div class="listing-rating-call">
                                            <a class="listing-rating" href="#">
                                                <i class="fas fa-user me-2"></i> Test Vendor
                                            </a>
                                            <a class="listing-call" href="tel:0000000000">
                                                <i class="fas fa-phone me-2"></i> 000 0000 000
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-bottom">
                                        <a class="listing-loaction" href="#">
                                            <i class="fas fa-map-marker-alt"></i> Test City
                                        </a>
                                        <span class="listing-open">Available</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="listing-item">
                                <div class="listing-image bg-overlay-half-top">
                                    <img alt="place" class="img-fluid" src="{{ asset('images/place.jpg') }}">
                                    <div class="listing-quick-box">
                                        <a class="category" href="#">Test Category</a>
                                        <a class="popup popup-single" data-bs-toggle="tooltip" data-placement="top" href="{{ asset('images/place.jpg') }}" title="Zoom">
                                            <i class="fas fa-search-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-details">
                                    <div class="listing-details-inner">
                                        <div class="listing-title mb-2">
                                            <h6>
                                                <a href="#">Espresso Macchiato</a>
                                            </h6>
                                            <span class="listing-price">LKR 1,000/hr</span>
                                        </div>
                                        <p class="mb-3">Remind yourself you have nowhere to go except have already been at the bottom.</p>
                                        <div class="listing-rating-call">
                                            <a class="listing-rating" href="#">
                                                <i class="fas fa-user me-2"></i> Test Vendor
                                            </a>
                                            <a class="listing-call" href="tel:0000000000">
                                                <i class="fas fa-phone me-2"></i> 000 0000 000
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-bottom">
                                        <a class="listing-loaction" href="#">
                                            <i class="fas fa-map-marker-alt"></i> Test City
                                        </a>
                                        <span class="listing-open">Available</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="listing-item">
                                <div class="listing-image bg-overlay-half-top">
                                    <img alt="place" class="img-fluid" src="{{ asset('images/place.jpg') }}">
                                    <div class="listing-quick-box">
                                        <a class="category" href="#">Test Category</a>
                                        <a class="popup popup-single" data-bs-toggle="tooltip" data-placement="top" href="{{ asset('images/place.jpg') }}" title="Zoom">
                                            <i class="fas fa-search-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-details">
                                    <div class="listing-details-inner">
                                        <div class="listing-title mb-2">
                                            <h6>
                                                <a href="#">Espresso Macchiato</a>
                                            </h6>
                                            <span class="listing-price">LKR 1,000/hr</span>
                                        </div>
                                        <p class="mb-3">Remind yourself you have nowhere to go except have already been at the bottom.</p>
                                        <div class="listing-rating-call">
                                            <a class="listing-rating" href="#">
                                                <i class="fas fa-user me-2"></i> Test Vendor
                                            </a>
                                            <a class="listing-call" href="tel:0000000000">
                                                <i class="fas fa-phone me-2"></i> 000 0000 000
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-bottom">
                                        <a class="listing-loaction" href="#">
                                            <i class="fas fa-map-marker-alt"></i> Test City
                                        </a>
                                        <span class="listing-open">Available</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul class="pagination mt-5">
                                <li class="page-item disabled me-auto">
                                    <span class="page-link b-radius-none">Prev</span>
                                </li>
                                <li aria-current="page" class="page-item active">
                                    <span class="page-link">1</span>
                                    <span class="sr-only">(current)</span>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item ms-auto">
                                    <a class="page-link b-radius-none" href="#">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
