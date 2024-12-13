<div class="relative overflow-x-auto shadow-md sm:rounded-lg ml-8 mr-8 p-6 md:ml-64 md:mr-10 md:mt-10">
    <div class="flex justify-between">
        <h1 class="text-xl font-bold mb-7">Daftar Produk</h1>
    </div>
    <table class="w-full text-sm text-center rtl:text-center text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Gambar
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Produk
                </th>
                <th scope="col" class="px-6 py-3">
                    Stok
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga
                </th>
                <th scope="col" class="px-6 py-3">
                    Kategori
                </th>
                <th scope="col" class="px-6 py-3">
                    Size
                </th>
                <th scope="col" class="px-6 py-3">
                    Warna
                </th>
                <th scope="col" class="px-6 py-3">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $loop->iteration }}
                    </th>
                    <td class="px-6 py-4">
                        <img class="w-20" src="{{ asset('storage/' . $item->image) }}" alt="">
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->stock }}
                    </td>
                    <td class="px-6 py-4">
                        Rp{{ number_format($item->price, 0, ',', '.') }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->category }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->size }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->color }}
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2">
                            <a href="{{ route('product.view', $item->id) }}"
                                class="font-medium text-blue-600 hover:underline">Edit</a>
                            <a href="{{ route('product.destroy', $item->id) }}"
                                class="font-medium text-red-600 hover:underline">Hapus</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-2">
        {{ $products->links('vendor.pagination.tailwind') }}
    </div>
</div>
