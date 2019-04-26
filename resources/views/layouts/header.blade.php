@extends('layouts.app')
@section('header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	Hello, {{ Auth::user()->name }}
                </div>
                @yield('content')
            </div>
        </div>
    </div>
</div>
@endsection