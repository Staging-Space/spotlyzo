@php
    $id = 'admin.categories.index';
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
                            <i class="fa-solid fa-plus me-2"></i> Create Category
                        </h5>
                        <form action="{{ route('admin.categories.store') }}" method="post" enctype="multipart/form-data">
                            @method('post')
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="title">Enter title <span class="text-danger">*</span></label>
                                <input autocomplete="off" class="form-control" id="title" maxlength="255" name="title" placeholder="Title" required type="text">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="description">Enter description <span class="text-danger">*</span></label>
                                <textarea class="form-control specific-h-200" id="description" name="description" placeholder="Description" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="image">Choose image <span class="text-danger">*</span></label>
                                <input accept=".jpg,.jpeg,.png,.webp" aria-labelledby="image-text" class="form-control" id="image" name="image" type="file" required>
                                <div class="form-text" id="image-text">
                                    <p class="mb-0">Allowed formats are JPG, PNG and WEBP</p>
                                    <p class="mb-0">Allowed resolution is 500x500</p>
                                    <p class="mb-0">Maximum size is 1MB</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-primary">
                                    <i class="fa-solid fa-plus me-1"></i> Create
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-start justify-content-sm-between align-items-center mb-3">
                            <div class="col-12 col-sm-auto mb-sm-0 mb-3">
                                <h5 class="card-title text-uppercase mb-0">
                                    <i class="fa-solid fa-database me-2"></i> All Categories
                                </h5>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table-bordered mb-0 table">
                                <thead>
                                    <tr>
                                        <th class="text-nowrap specific-w-25">ID</th>
                                        <th class="text-nowrap specific-w-25">Thumbnail</th>
                                        <th class="text-nowrap">Title</th>
                                        <th class="text-nowrap specific-w-25"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($categories as $category)
                                        <tr>
                                            <td>
                                                <div class="text-wrap">{{ $category->id }}</div>
                                            </td>
                                            <td>
                                                <div class="text-wrap">
                                                    <a data-bs-target="#category-modal-{{ $category->id }}" data-bs-toggle="modal" href="#" role="button">
                                                        <img alt="category" class="img-fluid" src="{{ Storage::url('categories/' . $category->image) }}">
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-wrap">{{ $category->title }}</div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-end gap-1">
                                                    <a class="btn btn-primary" href="{{ route('admin.categories.show', $category) }}">
                                                        <i class="fa-solid fa-wrench"></i>
                                                    </a>
                                                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-primary">
                                                            <i class="fa-solid fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center" colspan="3">
                                                <i class="fa fa-frown mr-5"></i> No categories found!
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach ($categories as $category)
        <div aria-hidden="true" class="modal fade" id="category-modal-{{ $category->id }}" tabindex="-1">
            <div class="modal-md modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <img alt="category" class="img-fluid" src="{{ Storage::url('categories/' . $category->image) }}">
                </div>
            </div>
        </div>
    @endforeach
@endsection
