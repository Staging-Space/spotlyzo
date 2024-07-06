@php
    $id = 'user.accounts.places';
    $title = 'My Places | Accounts | User';
@endphp

@extends('components.layouts.base')
@section('content')
    <section class="page-title page-title-bottom bg-holder bg-overlay-black-50" style="background: url({{ asset('images/breadcrumb.jpg') }});">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-12">
                    <h1 class="text-white">My Places</h1>
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
                            <li aria-current="page" class="breadcrumb-item active">Places</li>
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
                    <div class="widget mb-0">
                        <div class="widget-content">
                            
                            @forelse ($places as $place)
                                <div class="listing-item listing-list mb-4">
                                    <div class="row g-0">
                                        <div class="col-lg-4 col-md-5">
                                            <div class="listing-image bg-overlay-half-top h-100">
                                                <img alt="place" class="img-fluid" src="{{ Storage::url('place_images/' . $place->images()->first()->image) }}">
                                                <div class="listing-quick-box">
                                                    <a class="category" href="#">{{ $place->category->title }}</a>
                                                    <a class="popup popup-single" data-bs-placement="top" data-bs-toggle="tooltip" href="{{ Storage::url('place_images/' . $place->images()->first()->image) }}" title="Zoom">
                                                        <i class="fas fa-search-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-7">
                                            <div class="listing-details h-100">
                                                <div class="listing-details-inner">
                                                    <div class="listing-title">
                                                        <h6>
                                                            <a href="#">{{ $place->title }}</a>
                                                        </h6>
                                                        <a class="btn btn-primary btn-sm ms-auto px-3" data-bs-placement="top" data-bs-toggle="tooltip" href="#" title="Update">
                                                            <i class="fas fa-edit pe-0"></i>
                                                        </a>
                                                        <a class="btn btn-danger btn-sm px-3" data-bs-placement="top" data-bs-toggle="tooltip" href="#" title="Remove">
                                                            <i class="fas fa-trash-alt pe-0"></i>
                                                        </a>
                                                    </div>
                                                    <p class="my-2">{{ $place->description }}</p>
                                                    <div class="listing-rating-call">
                                                        <a class="listing-rating" href="#">
                                                            <span class="me-1">Active</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="listing-bottom">
                                                    <a class="listing-loaction" href="#">
                                                        <i class="fas fa-map-marker-alt"></i> {{ $place->city }}
                                                    </a>
                                                    <span class="listing-open">Available</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p>No places found</p>
                            @endforelse

                            <div class="listing-item listing-list mb-0">
                                <div class="row g-0">
                                    <div class="col-lg-4 col-md-5">
                                        <div class="listing-image bg-overlay-half-top h-100">
                                            <img alt="place" class="img-fluid" src="{{ asset('images/place.jpg') }}">
                                            <div class="listing-quick-box">
                                                <a class="category" href="#">Test Category</a>
                                                <a class="popup popup-single" data-bs-placement="top" data-bs-toggle="tooltip" href="{{ asset('images/place.jpg') }}" title="Zoom">
                                                    <i class="fas fa-search-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-7">
                                        <div class="listing-details h-100">
                                            <div class="listing-details-inner">
                                                <div class="listing-title">
                                                    <h6>
                                                        <a href="#">Test Place</a>
                                                    </h6>
                                                    <a class="btn btn-primary btn-sm ms-auto px-3" data-bs-placement="top" data-bs-toggle="tooltip" href="#" title="Update">
                                                        <i class="fas fa-edit pe-0"></i>
                                                    </a>
                                                    <a class="btn btn-danger btn-sm px-3" data-bs-placement="top" data-bs-toggle="tooltip" href="#" title="Remove">
                                                        <i class="fas fa-trash-alt pe-0"></i>
                                                    </a>
                                                </div>
                                                <p class="my-2">Make a list of your achievements toward your long-term goal and remind yourself that intentions.</p>
                                                <div class="listing-rating-call">
                                                    <a class="listing-rating" href="#">
                                                        <span class="me-1">Active</span>
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
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
