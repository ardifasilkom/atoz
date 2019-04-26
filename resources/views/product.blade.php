@extends('layouts.header')
@section('content')
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <h4>Product Page</h4>
    <div class="form-group row">
        <div class="col-md-6">
            <textarea class="form-control" rows="5" placeholder="Product" id="product"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6">
            <textarea class="form-control" rows="5" placeholder="Shopping Address" id="address"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6">
            <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus placeholder="Price">
            @error('topup')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Submit') }}
            </button>
        </div>
    </div>
</div>
@endsection