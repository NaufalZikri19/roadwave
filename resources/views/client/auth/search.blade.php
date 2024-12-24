@extends('index')
@section('content')
    @include('components.navbar')

    @if ($products->count() > 0)
        <section id="home"
          class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 px-4 py-6">
            <!-- Header -->
            <div class="col-span-full text-center mb-6">
                <h1 class="text-2xl md:text-3xl font-semibold text-gray-800">
                    Hasil pencarian untuk "{{ $query }}"
                </h1>
            </div>

            <!-- Products -->
            @foreach ($products as $product)
                <div class="bg-white border border-gray-300 rounded-lg shadow-lg p-4">
                    <!-- Image -->
                    <a href="{{ route('show', $product->id) }}">
                        <img
                          class="rounded-lg object-cover h-58 w-full"
                          src="{{ url('storage/' . $product->image) }}"
                          alt="Gambar Produk {{ $product->name }}" />
                    </a>

                    <!-- Product Info -->
                    <div class="text-left">
                        <h3 class="text-gray-600 text-sm mb-1">{{ $product->category }}</h3>
                        <a href="{{ route('show', $product->id) }}">
                            <h5 class="text-lg font-semibold text-gray-900">
                                {{ $product->name }}
                            </h5>
                        </a>
                        <p class="text-red-600 font-medium mt-2">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </p>
                    </div>
                </div>
            @endforeach
        </section>
    @else
        <div class="flex justify-center items-center py-20">
            @include('components.empty-search')
        </div>
    @endif
@endsection
