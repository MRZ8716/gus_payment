@extends('layouts.base')

@section('body-class', 'bg-light')

@push('styles')
    {{-- <link rel="stylesheet" href="/css/auth.css"> --}}
    {{-- <link rel="shortcut icon" href="./assets/compiled/svg/favicon.svg" type="image/x-icon"> --}}
    @vite(['resources/vendor/compiled/css/app.css', 'resources/vendor/compiled/css/app-dark.css', 'resources/vendor/compiled/css/auth.css'])
    {{-- <link rel="stylesheet" href="{{ asset('assets/compiled/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/compiled/css/app-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/compiled/css/auth.css') }}"> --}}
    <style nonce="{{ Vite::cspNonce() }}">

    </style>
@endpush

@section('body')
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="card shadow-sm">
            <div class="card-body">
                {{-- @yield('content') --}}
            </div>
        </div>
    </div>
@endsection
