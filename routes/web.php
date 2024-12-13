<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\MidtransController;

Route::get('/', [HomepageController::class, 'index'])->name('homepage');

Route::middleware(['auth', 'role:customer'])->group(function () {
    Route::get('/home', [HomepageController::class, 'index'])->name('homepage');
    Route::get('/product/{id}', [HomepageController::class, 'show'])->name('show');
    Route::get('/riwayat', [HomepageController::class, 'history'])->name('history.view');
    Route::post('/order', [OrderController::class, 'store'])->name('order.store');
    Route::post('/midtrans/create-transaction', [MidtransController::class, 'createTransaction'])->name('midtrans.createTransaction');

    Route::post('/midtrans/callback', [TransactionController::class, 'callback'])->name('midtrans.notification');
    Route::get('/order/detail', [TransactionController::class, 'index'])->name('transaction.view');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/add', [DashboardController::class, 'add'])->name('product.add');
    Route::post('/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/update/{id}', [ProductController::class, 'view'])->name('product.view');
    Route::post('/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
});

Route::get('/panduanukuran', function () {
    return view('components.page.bantuan.panduanukuran');
});
Route::get('/pertanyaanumum', function () {
    return view('components.page.bantuan.pertanyaanumum');
});
Route::get('/pengiriman', function () {
    return view('components.page.bantuan.pengiriman');
});
Route::get('/ketentuan', function () {
    return view('components.page.bantuan.ketentuan');
});
Route::get('/retur', function () {
    return view('components.page.bantuan.retur');
});
Route::get('/tentangkami', function () {
    return view('components.page.informasi.tentang');
});
Route::get('/aturanpenggunaan', function () {
    return view('components.page.informasi.aturanpengguna');
});
Route::get('/kebijakanprivasi', function () {
    return view('components.page.informasi.kebijakanprivasi');
});
Route::get('/kebijakanhakcipta', function () {
    return view('components.page.informasi.kebijakanhakcipta');
});
Route::get('/syaratketentuan', function () {
    return view('components.page.informasi.syaratketentuan');
});
Route::get('/aturan', function () {
    return view('components.page.informasi.aturan');
});

require __DIR__.'/auth.php';


