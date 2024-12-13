@extends('index')
@section('content')
    @include('components.navbar-guest')
    @include('client.components.hero')
    @include('client.components.best-seller')
    @include('client.components.list')
    @include('components.footer-guest')
@endsection
