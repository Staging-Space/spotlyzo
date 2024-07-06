@php
    $id = 'admin.index';
@endphp

@extends('components.layouts.admin.base')
@section('content')
    @include('components.includes.admin.sidebar')
    <div class="container-fluid vh-100">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-12">
                <div class="text-center">
                    <img alt="logo" class="mb-3" id="logo" src="{{ asset('images/admin/logo-2.svg') }}" width="250">
                    <p class="mb-0">&copy; <?php echo date('Y'); ?> <a href="https://xynosync.com" target="_blank">XynoSync</a>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
