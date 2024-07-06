@php
    $id = 'admin.facilities.index';
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
                    <i class="fa-solid fa-hand-holding-medical me-2"></i> Facilities
                </h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-3 mb-sm-0 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase mb-3">
                            <i class="fa-solid fa-plus me-2"></i> Create Facility
                        </h5>
                        <form action="{{ route('admin.facilities.store') }}" method="post" enctype="multipart/form-data">
                            @method('post')
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="title">Enter title <span class="text-danger">*</span></label>
                                <input autocomplete="off" class="form-control" id="title" maxlength="255" name="title" placeholder="Title" required type="text">
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
                                    <i class="fa-solid fa-database me-2"></i> All Facilities
                                </h5>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table-bordered mb-0 table">
                                <thead>
                                    <tr>
                                        <th class="text-nowrap specific-w-25">ID</th>
                                        <th class="text-nowrap">Title</th>
                                        <th class="text-nowrap specific-w-25"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($facilities as $facility)
                                        <tr>
                                            <td>
                                                <div class="text-wrap">{{ $facility->id }}</div>
                                            </td>
                                            <td>
                                                <div class="text-wrap">{{ $facility->title }}</div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-end gap-1">
                                                    <a class="btn btn-primary" href="{{ route('admin.facilities.show', $facility) }}">
                                                        <i class="fa-solid fa-wrench"></i>
                                                    </a>
                                                    <form action="{{ route('admin.facilities.destroy', $facility->id) }}" method="post">
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
                                                <i class="fa fa-frown mr-5"></i> No facilities found!
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
    @foreach ($facilities as $facility)
        <div aria-hidden="true" class="modal fade" id="facility-modal-{{ $facility->id }}" tabindex="-1">
            <div class="modal-md modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <img alt="facility" class="img-fluid" src="{{ Storage::url('facilities/' . $facility->image) }}">
                </div>
            </div>
        </div>
    @endforeach
@endsection
