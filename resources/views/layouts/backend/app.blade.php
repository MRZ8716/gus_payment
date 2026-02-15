@extends('layouts.base')

@section('body-class', 'backend-layout')

@section('body')
<div class="d-flex">
    <x-backend.sidebar />

    <div class="flex-grow-1">
        <x-backend.navbar />

        <main class="p-4">
            @yield('content')
        </main>
    </div>
</div>
@endsection
