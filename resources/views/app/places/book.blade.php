@php
    $id = 'places.book';
    $title = 'Book | Places';
@endphp

@extends('components.layouts.base')
@section('content')
<section class="page-title page-title-bottom bg-holder bg-overlay-black-50" style="background: url({{ asset('images/breadcrumb.jpg') }});">
    <div class="container">
        <div class="row position-relative">
            <div class="col-lg-12">
                <h1 class="text-white">Book a Place</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Places</a>
                        </li>
                        <li aria-current="page" class="breadcrumb-item active">{{ $place->title ?? 'N/A' }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

@endsection
