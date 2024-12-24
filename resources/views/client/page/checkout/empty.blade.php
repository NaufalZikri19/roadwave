@extends('index')
@section('content')
    @auth
        @include('components.navbar')
    @endauth
    @guest
        @include('components.navbar-guest')
    @endguest
    @include('components.sidebar')
    <div class="flex flex-col justify-center items-center h-screen">
        <img class="w-1/4" src="{{ asset('assets/icon/no-transaction.png') }}" alt="No Transaction Icon">
        <h1 class="text-2xl font-bold text-black">Oooops... Tidak Ada Transaksi</h1>
    </div>
@endsection
