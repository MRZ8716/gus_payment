@extends('layouts.base')

@section('body-class', 'bg-light')

@push('styles')
    @vite([])

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

@push('scripts')
    @vite([])
@endpush
