@extends('index')
@section('content')
@auth
  @include('components.navbar')
@endauth
@guest
  @include('components.navbar-guest')
@endguest
@include('components.sidebar')
@section('title', 'Outwear')
<main class="max-w-screen-xl mx-auto mt-24 px-4 mb-7">
  <!-- BreadCrumb -->
  <nav class="flex mb-7 w-full mx-auto" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
      <li class="inline-flex items-center">
        <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-600 dark:text-gray-200 dark:hover:text-white">
          <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"
            />
          </svg>
          Home
        </a>
      </li>
      <li></li>
      <li aria-current="page">
        <div class="flex items-center">
          <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
          </svg>
          <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Roadwave Outwear</span>
        </div>
      </li>
    </ol>
  </nav>
  <!-- Start Bar -->
  <div class="md:flex">
    <ul class="flex-column space-y space-y-4 text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0 basis-1/6">
      <li>
        <a href="{{ route('tshirt') }}" class="inline-flex items-center px-4 py-3 rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white" aria-current="page"> T-Shirt </a>
      </li>
      <li>
        <a href="{{ route('shirt') }}" class="inline-flex items-center px-4 py-3 rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white"> Shirt </a>
      </li>
      <li>
        <a href="{{ route('pants') }}" class="inline-flex items-center px-4 py-3 rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white"> Pants </a>
      </li>
      <li>
        <a href="{{ route('outwear') }}" class="inline-flex items-center px-4 py-3 text-white bg-mainColor rounded-lg active w-full dark:bg-mainColor"> Outwear </a>
      </li>
    </ul>
    <div class="py-6 md:py-0 grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 w-full max-w-screen-xl mx-auto basis-5/6">
      @foreach ($products as $product)
      <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-darkmodeOther dark:border-gray-700">
        <a href="{{ route('productdetail', $product->id) }}">
          <img src="{{ url('storage/assets/product/' . $product->image . '') }}" class="rounded-t-lg" width="w-full" alt="" />
        </a>
        <div class="px-2 py-3">
          <h3 class="text-slate-500 text-xs">{{ $product->category }}</h3>
          <a href="{{ route('productdetail', $product->id) }}">
            <h5 class="text-base font-bold text-gray-900 dark:text-gray-200 mb-1">{{ $product->name }}</h5>
          </a>
          <div class="flex justify-between">
            <div class="flex justify-start items-center flex-wrap">
              <p class="text-xs text-red-600 mr-0.5">Rp</p>
              <p class="text-xs text-red-600 mr-1">{{ number_format($product->price, 0, ',', '.') }}</p>
              <p class="text-xs mr-0.5 dark:text-slate-600"><s>Rp</s></p>
              <p class="text-xs dark:text-slate-600"><s>120.000</s></p>
            </div>
            <div class="flex items-center justify-center ml-1">
              <span class="bg-red-600 px-1 py-[5px] text-white font-semibold text-[10px] rounded">20%</span>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</main>
@auth
@include('components.footer')
@endauth
@guest
@include('components.footer-guest')
@endguest
@include('components.bottombar')
@endsection
