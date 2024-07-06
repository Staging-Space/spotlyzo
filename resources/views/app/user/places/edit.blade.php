@php
    $id = 'user.places.edit';
    $title = 'Update Place | Places | User';
@endphp

@extends('components.layouts.base')
@section('content')
    <section class="page-title page-title-bottom bg-holder bg-overlay-black-50" style="background: url({{ asset('images/breadcrumb.jpg') }});">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-12">
                    <h1 class="text-white">Update Place</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">User</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Places</a>
                            </li>
                            <li aria-current="page" class="breadcrumb-item active">Update</li>
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
                        <form action="#" method="post">
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
                                            <option value="">Test Category</option>
                                            <option value="">Test Category</option>
                                            <option value="">Test Category</option>
                                            <option value="">Test Category</option>
                                            <option value="">Test Category</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mb-0">
                                        <label class="form-label">Enter description <span class="text-danger">*</span></label>
                                        <textarea class="form-control" maxlength="200" name="description" placeholder="Description" required rows="5"></textarea>
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
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="form-label">Enter longitude</label>
                                        <input class="form-control" maxlength="255" name="longitude" placeholder="Longitude" type="text">
                                    </div>
                                    <div class="form-group col-md-6 mb-0">
                                        <label class="form-label">Enter latitude</label>
                                        <input class="form-control" maxlength="255" name="latitude" placeholder="Latitude" type="text">
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
                                        <select class="form-control basic-select" name="monday_opening_time" required>
                                            <option selected value="">Opening Time</option>
                                            <option value="00:00 AM">00:00 AM</option>
                                            <option value="Closed">Closed</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <select class="form-control basic-select" name="monday_closing_time" required>
                                            <option selected value="">Closing Time</option>
                                            <option value="00:00 AM">00:00 AM</option>
                                            <option value="Closed">Closed</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12">
                                        <h6 class="font-md">Tuesday:</h6>
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <select class="form-control basic-select" name="tuesday_opening_time" required>
                                            <option selected value="">Opening Time</option>
                                            <option value="00:00 AM">00:00 AM</option>
                                            <option value="Closed">Closed</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <select class="form-control basic-select" name="tuesday_closing_time" required>
                                            <option selected value="">Closing Time</option>
                                            <option value="00:00 AM">00:00 AM</option>
                                            <option value="Closed">Closed</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12">
                                        <h6 class="font-md">Wednesday:</h6>
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <select class="form-control basic-select" name="wednesday_opening_time" required>
                                            <option selected value="">Opening Time</option>
                                            <option value="00:00 AM">00:00 AM</option>
                                            <option value="Closed">Closed</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <select class="form-control basic-select" name="wednesday_closing_time" required>
                                            <option selected value="">Closing Time</option>
                                            <option value="00:00 AM">00:00 AM</option>
                                            <option value="Closed">Closed</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12">
                                        <h6 class="font-md">Thursday:</h6>
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <select class="form-control basic-select" name="thursday_opening_time" required>
                                            <option selected value="">Opening Time</option>
                                            <option value="00:00 AM">00:00 AM</option>
                                            <option value="Closed">Closed</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <select class="form-control basic-select" name="thursday_closing_time" required>
                                            <option selected value="">Closing Time</option>
                                            <option value="00:00 AM">00:00 AM</option>
                                            <option value="Closed">Closed</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12">
                                        <h6 class="font-md">Friday:</h6>
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <select class="form-control basic-select" name="friday_opening_time" required>
                                            <option selected value="">Opening Time</option>
                                            <option value="00:00 AM">00:00 AM</option>
                                            <option value="Closed">Closed</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <select class="form-control basic-select" name="friday_closing_time" required>
                                            <option selected value="">Closing Time</option>
                                            <option value="00:00 AM">00:00 AM</option>
                                            <option value="Closed">Closed</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12">
                                        <h6 class="font-md">Saturday:</h6>
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <select class="form-control basic-select" name="saturday_opening_time" required>
                                            <option selected value="">Opening Time</option>
                                            <option value="00:00 AM">00:00 AM</option>
                                            <option value="Closed">Closed</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-3">
                                        <select class="form-control basic-select" name="saturday_closing_time" required>
                                            <option selected value="">Closing Time</option>
                                            <option value="00:00 AM">00:00 AM</option>
                                            <option value="Closed">Closed</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12">
                                        <h6 class="font-md">Sunday:</h6>
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-0">
                                        <select class="form-control basic-select" name="sunday_opening_time" required>
                                            <option selected value="">Opening Time</option>
                                            <option value="00:00 AM">00:00 AM</option>
                                            <option value="Closed">Closed</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 select-border mb-0">
                                        <select class="form-control basic-select" name="sunday_closing_time" required>
                                            <option selected value="">Closing Time</option>
                                            <option value="00:00 AM">00:00 AM</option>
                                            <option value="Closed">Closed</option>
                                        </select>
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
                                <div class="d-flex gap-3">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" id="test-facility" type="checkbox">
                                        <label class="custom-control-label" for="test-facility">Test Facility</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" id="test-facility" type="checkbox">
                                        <label class="custom-control-label" for="test-facility">Test Facility</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" id="test-facility" type="checkbox">
                                        <label class="custom-control-label" for="test-facility">Test Facility</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" id="test-facility" type="checkbox">
                                        <label class="custom-control-label" for="test-facility">Test Facility</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" id="test-facility" type="checkbox">
                                        <label class="custom-control-label" for="test-facility">Test Facility</label>
                                    </div>
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
                            <button class="btn btn-primary">Update Place</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
