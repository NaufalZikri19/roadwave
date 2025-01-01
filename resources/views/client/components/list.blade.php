{{-- Display product start --}}
<h2 class="text-[20px] font-bold text-center mb-[30px]">Produk Kami</h2>
<div class="grid grid-cols-2 px-2 gap-2 md:grid-cols-4 lg:gap-1">
    @foreach ($products as $product)
        <div class="bg-white border border-gray-200 rounded-lg shadow box-border mx-0.5 my-2 sm:mx-2 lg:mx-3 lg:my-3">
            <a href="{{ route('show', $product->id) }}">
                <img class="p-2 rounded-t-lg" src="{{ url('storage/' . $product->image . '') }}"
                    width="100%" alt="product image" />
            </a>
            <div class="px-2 pb-2">
                <h3 class="text-slate-500 text-sm">{{ $product->category }}</h3>
                <a href="">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900">{{ $product->name }}
                    </h5>
                </a>
                <div class="flex items-center justify-between mt-2.5 mb-5 box-border">
                    <div class="flex justify-start items-start space-x-1 rtl:space-x-reverse flex-wrap">
                        <p class="text-[11px] sm:text-sm text-red-600">Rp</p>
                        <p class="text-[11px] sm:text-sm text-red-600">{{ number_format($product->price, 0, ',', '.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="mt-2 px-5">
    {{ $products->links('vendor.pagination.tailwind') }}
</div>
{{-- Display product end --}}
