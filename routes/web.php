<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Resource routes untuk books (7 route: index, create, store, show, edit, update, destroy)
Route::resource('books', BookController::class);

// Resource routes untuk categories (6 route: TANPA show, karena tidak ada halaman detail kategori)
Route::resource('categories', CategoryController::class)->except(['show']);

// Resource routes untuk members (7 route: index, create, store, show, edit, update, destroy)
Route::resource('members', MemberController::class);

// Resource routes untuk loans (7 route: index, create, store, show, edit, update, destroy)
Route::resource('loans', LoanController::class);

// Route kustom untuk aksi pengembalian buku (di luar pola resource standar)
Route::put('/loans/{id}/kembalikan', [LoanController::class, 'kembalikan'])
    ->name('loans.kembalikan');

// Tugas: Route group dengan prefix /admin
Route::prefix('admin')->group(function () {
    Route::get('/info', function () {
        return 'Halaman Admin - Sistem Perpustakaan Digital Kampus | Route Group dengan prefix /admin berjalan dengan baik.';
    })->name('admin.info');
});
