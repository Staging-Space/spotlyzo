@php
    $id = 'categories.index';
    $title = 'Categories';
@endphp

@extends('components.layouts.base')
@section('content')
    <section class="page-title page-title-bottom bg-holder bg-overlay-black-50" style="background: url({{ asset('images/breadcrumb.jpg') }});">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-12">
                    <h1 class="text-white">Categories</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li aria-current="page" class="breadcrumb-item active">Categories</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="category">
                        <ul class="list-unstyled mb-0">
                            @forelse ($categories as $category)
                                <li class="category-item-01">
                                    <a href="{{ route('categories.show', $category) }}">
                                        <div class="category-icon">
                                            <img alt="category" class="img-fluid" src="{{ Storage::url('categories/' . $category->image) }}">
                                        </div>
                                        <div class="category-content">
                                            <h6>{{ $category->title }}</h6>
                                        </div>
                                    </a>
                                </li>
                            @empty
                               <p>No categories found!</p> 
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection