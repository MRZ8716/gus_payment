@extends('layouts.base')

@section('body')
    <x-frontend.navbar />

    <main class="container py-4">
        @yield('content')
    </main>

    <x-frontend.footer />
@endsection
