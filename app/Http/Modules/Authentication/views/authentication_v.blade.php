@extends('layouts.base')

@section('body-class', 'bg-light')

@section('body')
<div class="d-flex align-items-center justify-content-center vh-100">
    <div class="card shadow-sm" style="width:400px">
        <div class="card-body">
            @yield('content')
        </div>
    </div>
</div>
@endsection