@php
    $id = 'admin.categories.show';
@endphp

@extends('components.layouts.admin.base')
@section('content')
    @include('components.includes.admin.sidebar')
    @if (session('success'))
        <div class="container-fluid mt-3">
            <div class="row row-eq-spacing">
                <div class="col-12">
                    <div class="alert alert-success mb-0">{{ session('success') }}</div>
                </div>
            </div>
        </div>
    @endif
    @if ($errors->any())
        <div class="container-fluid mt-3">
            <div class="row row-eq-spacing">
                <div class="col-12">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger {{ $loop->last ? 'mb-0' : '' }}">{{ $error }}</div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <div class="container-fluid my-3">
        <div class="row align-items-center mb-3">
            <div class="col-auto">
                <button class="btn btn-primary" id="back">
                    <i class="fa-solid fa-angle-left me-1"></i> Back
                </button>
            </div>
            <div class="col-auto">
                <h5 class="text-uppercase mb-0">
                    <i class="fa-solid fa-list-ul me-2"></i> Categories
                </h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-3 mb-sm-0 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase mb-3">
                            <i class="fa-solid fa-check me-2"></i> Update Category
                        </h5>
                        <form action="{{ route('admin.categories.update', $category) }}" method="post" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="title">Enter title <span class="text-danger">*</span></label>
                                <input autocomplete="off" class="form-control" id="title" maxlength="255" name="title" placeholder="Title" required type="text" value="{{ $category->title }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="description">Enter description <span class="text-danger">*</span></label>
                                <textarea class="form-control specific-h-200" id="description" name="description" placeholder="Description" required>{{ $category->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="image">Choose image</label>
                                <input accept=".jpg,.jpeg,.png,.webp" aria-labelledby="image-text" class="form-control" id="image" name="image" type="file">
                                <div class="form-text" id="image-text">
                                    <p class="mb-0">Allowed formats are JPG, PNG and WEBP</p>
                                    <p class="mb-0">Allowed resolution is 500x500</p>
                                    <p class="mb-0">Maximum size is 1MB</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-primary">
                                    <i class="fa-solid fa-check me-1"></i> Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-9">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase mb-3">
                            <i class="fa-solid fa-info-circle me-2"></i> Information
                        </h5>
                        <div class="row mb-3">
                            <div class="col-12 col-sm-4 mb-sm-0 mb-3">
                                <img alt="category" class="img-fluid" src="{{ Storage::url('categories/' . $category->image) }}">
                            </div>
                            <div class="col-12 col-sm-8">
                                <div class="table-responsive">
                                    <table class="table-bordered mb-0 table">
                                        <tbody>
                                            <tr>
                                                <th class="text-nowrap specific-w-25">ID</th>
                                                <td>{{ $category->id }}</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap specific-w-25">Slug</th>
                                                <td>{{ $category->slug }}</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap specific-w-25">Title</th>
                                                <td>{{ $category->title }}</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap specific-w-25">Description</th>
                                                <td>{{ $category->description }}</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap specific-w-25">Created Date</th>
                                                <td>{{ date('Y-m-d h:ia', strtotime($category->created_at)) }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-block d-sm-flex justify-content-end gap-2">
                                    <form action="{{ route('admin.categories.destroy', $category) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger w-100 w-sm-auto">
                                            <i class="fa-solid fa-trash-alt me-1"></i> Remove
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
