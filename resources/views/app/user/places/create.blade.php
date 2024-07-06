@php
    $id = 'user.places.create';
    $title = 'Add Place | Places | User';
@endphp

@extends('components.layouts.base')
@section('content')
    <section class="page-title page-title-bottom bg-holder bg-overlay-black-50" style="background: url({{ asset('images/breadcrumb.jpg') }});">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-12">
                    <h1 class="text-white">Add Place</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('user.accounts.profile') }}">User</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('user.accounts.places') }}">Places</a>
                            </li>
                            <li aria-current="page" class="breadcrumb-item active">Create</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="space-ptb bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="listing-detail-page">
                        <form action="{{ route('user.places.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <div class="listing-detail-box mb-4">
                                <div class="detail-title">
                                    <h5>General Details</h5>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="form-label">Enter title <span class="text-danger">*</span></label>
                                        <input class="form-control" maxlength="255" name="title" placeholder="Title" required type="text">
                                    </div>
                                    <div class="col-lg-6 select-border mb-3">
                                        <label class="form-label">Choose category <span class="text-danger">*</span></label>
                                        <select class="form-control basic-select" name="category" required>
                                            <option selected value="">Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 mb-0">
                                        <label class="form-label">Enter description <span class="text-danger">*</span></label>
                                        <textarea class="form-control" maxlength="250" name="description" placeholder="Description" required rows="5"></textarea>
                                    </div>
                                    <div class="col-12 mb-0">
                                        <label class="form-label">Enter content <span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="content" placeholder="Content" required rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="listing-detail-box mb-4">
                                <div class="detail-title">
                                    <h5>Location</h5>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="form-label">Enter address <span class="text-danger">*</span></label>
                                        <input class="form-control" maxlength="255" name="address" placeholder="Address" required type="text">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="form-label">Enter city <span class="text-danger">*</span></label>
                                        <input class="form-control" maxlength="255" name="city" placeholder="City" required type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="listing-detail-box mb-4">
                                <div class="detail-title">
                                    <h5>Opening Hours</h5>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <h6 class="font-md">Monday:</h6>
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <input class="form-control" type="text" id="time" name="monday_opening_time" placeholder="Opening Time">
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <input class="form-control" type="text" id="time" name="monday_closing_time" placeholder="Closing Time">
                                    </div>
                                    <div class="form-group col-12">
                                        <h6 class="font-md">Tuesday:</h6>
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <input class="form-control" type="text" id="time" name="tuesday_opening_time" placeholder="Opening Time">
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <input class="form-control" type="text" id="time" name="tuesday_closing_time" placeholder="Closing Time">
                                    </div>
                                    <div class="form-group col-12">
                                        <h6 class="font-md">Wednesday:</h6>
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <input class="form-control" type="text" id="time" name="wednesday_opening_time" placeholder="Opening Time">
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <input class="form-control" type="text" id="time" name="wednesday_closing_time" placeholder="Closing Time">
                                    </div>
                                    <div class="form-group col-12">
                                        <h6 class="font-md">Thursday:</h6>
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <input class="form-control" type="text" id="time" name="thursday_opening_time" placeholder="Opening Time">
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <input class="form-control" type="text" id="time" name="thursday_closing_time" placeholder="Closing Time">
                                    </div>
                                    <div class="form-group col-12">
                                        <h6 class="font-md">Friday:</h6>
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <input class="form-control" type="text" id="time" name="friday_opening_time" placeholder="Opening Time">
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <input class="form-control" type="text" id="time" name="friday_closing_time" placeholder="Closing Time">
                                    </div>
                                    <div class="form-group col-12">
                                        <h6 class="font-md">Saturday:</h6>
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <input class="form-control" type="text" id="time" name="saturday_opening_time" placeholder="Opening Time">
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <input class="form-control" type="text" id="time" name="saturday_closing_time" placeholder="Closing Time">
                                    </div>
                                    <div class="form-group col-12">
                                        <h6 class="font-md">Sunday:</h6>
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-0">
                                        <input class="form-control" type="text" id="time" name="sunday_opening_time" placeholder="Opening Time">
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-0">
                                        <input class="form-control" type="text" id="time" name="sunday_closing_time" placeholder="Closing Time">
                                    </div>
                                </div>
                            </div>
                            <div class="listing-detail-box mb-4">
                                <div class="detail-title">
                                    <h5>Pricing</h5>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12 mb-0">
                                        <label class="form-label">Enter price per an hour (LKR) <span class="text-danger">*</span></label>
                                        <input class="form-control" min="1" name="price" placeholder="Price" required step="0.01" type="number">
                                    </div>
                                </div>
                            </div>
                            <div class="listing-detail-box mb-4">
                                <div class="detail-title">
                                    <h5>Facilities</h5>
                                </div>
                                <div class="row">
                                    @forelse ($facilities as $facility)
                                        <div class="col-12 col-md-4 mb-3">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" name="facilities[]" id="facility-{{ $facility->id }}" value="{{ $facility->id }}" type="checkbox">
                                                <label class="custom-control-label" for="facility-{{ $facility->id }}">{{ $facility->title }}</label>
                                            </div>
                                        </div>
                                    @empty
                                        <p>No facilities found</p>
                                    @endforelse
                                </div>
                            </div>
                            <div class="listing-detail-box mb-4">
                                <div class="detail-title">
                                    <h5>Gallery</h5>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12 mb-0">
                                        <label class="form-label">Choose images <span class="text-danger">*</span></label>
                                        <div class="input-group file-upload">
                                            <input accept=".png,.jpg" class="form-control" id="images" multiple name="images[]" required type="file">
                                            <label class="input-group-text" for="images">Images</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary">Add Place</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
