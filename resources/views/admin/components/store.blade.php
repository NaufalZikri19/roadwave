@extends('admin.index')
@section('title', 'Tambah Product')
@section('content')
@include('admin.components.sidebar')

<div class="relative overflow-x-auto shadow-md sm:rounded-lg ml-8 mr-8 p-6 md:ml-64 md:mr-10 md:mt-2">
    <div>
        <h1 class="text-md md:text-xl font-bold text-center mb-6">Tambah Produk</h1>
    </div>
    <form id="addproductForm" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="max-w-sm lg:max-w-2xl mx-auto">
        @csrf
        <div class="flex flex-col lg:flex-row lg:gap-8 justify-between lg:w-full">
            <div class="lg:w-full">
                <div class="mb-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama Produk</label>
                    <input type="text" id="name" name="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('name') border-red-500 @enderror" placeholder="Nama produk" required>
                </div>
                <div class="mb-5">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Harga</label>
                    <input type="text" id="price" name="price" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="100000" required>
                </div>
                <div class="mb-5">
                    <label for="size" class="block mb-2 text-sm font-medium text-gray-900">Ukuran</label>
                    <select id="size" name="size" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        <option>- Pilih ukuran -</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                </div>
                <div class="mb-5">
                    <label for="color" class="block mb-2 text-sm font-medium text-gray-900">Warna</label>
                    <select id="color" name="color" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        <option>- Pilih warna - </option>
                        <option value="Hitam">Hitam</option>
                        <option value="Putih">Putih</option>
                        <option value="Abu">Abu</option>
                        <option value="Hijau">Hijau</option>
                        <option value="Maroon">Maroon</option>
                        <option value="Navy">Navy</option>
                    </select>
                </div>
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="image">Upload file</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 p-[10px] @error('image') border-red-500 @enderror" aria-describedby="user_avatar_help" id="image" name="image" type="file" required>
                </div>
            </div>
            <div class="lg:w-full">
                <div class="mb-5">
                    <label for="stock" class="block mb-2 text-sm font-medium text-gray-900">Jumlah</label>
                    <input type="text" id="stock" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('quantity') border-red-500 @enderror" name="stock" placeholder="0" required>
                </div>
                <div class="mb-5">
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Kategori</label>
                    <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        <option>- Pilih Kategori -</option>
                        <option value="T-Shirt">T-Shirt</option>
                        <option value="Shirt">Shirt</option>
                        <option value="Pants">Pants</option>
                        <option value="Outwear">Outwear</option>
                    </select>
                </div>
                <div class="mb-5">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
                    <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 h-[230px] rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Deskripsikan produk anda..." required></textarea>
                </div>
            </div>
        </div>
        <div class="flex w-full justify-center mt-2">
            <button id="addButton" type="submit" class="text-white w-1/2 bg-mainColor hover:bg-green-800 bg-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Tambah</button>
        </div>
    </form>
</div>
@endsection
