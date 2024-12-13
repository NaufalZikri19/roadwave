<div class="relative overflow-x-auto shadow-md sm:rounded-lg ml-8 mr-8 p-6 md:ml-64 md:mr-10 md:mt-10">
    <div class="flex justify-between">
        <h1 class="text-xl font-bold mb-7">Daftar Orderan Masuk</h1>
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Kode Order
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Produk
                </th>
                <th scope="col" class="px-6 py-3">
                    Total Order
                </th>
                <th scope="col" class="px-6 py-3">
                    Total Harga
                </th>
                <th scope="col" class="px-6 py-3 flex justify-center">
                    Status
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $item)
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $item->id }}
                    </th>
                    <td class="px-6 py-4">
                        CUS{{ $item->id }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->product->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->quantity }}
                    </td>
                    <td class="px-6 py-4">
                        Rp{{ number_format($item->subtotal, 0, ',', '.') }}
                    </td>
                    <td class="px-2 py-4 flex justify-center">
                        {{ $item->status }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-2">
        {{ $orders->links('vendor.pagination.tailwind') }}
    </div>
</div>
