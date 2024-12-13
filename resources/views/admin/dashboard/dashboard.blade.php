@extends('admin.index')
@section('title', 'Admin Dashboard')
@section('content')
    @include('admin.components.sidebar')
    @include('admin.components.card')
    @include('admin.components.table-order')
    @include('admin.components.table-product')
@endsection
