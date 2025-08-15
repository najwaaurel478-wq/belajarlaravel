<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home']);

Route::get('/about', [\App\Http\Controllers\HomeController::class, 'about']);

Route::get('/artikel/berita', [\App\Http\Controllers\HomeController::class, 'artikel_berita']);

Route::get('/user', [\App\Http\Controllers\HomeController::class, 'user']);

Route::get('/product/{id}', [\App\Http\Controllers\HomeController::class, 'product']);

Route::get('/product/{id}/item/{item}', function ($id, $item) {
    return "Halaman Productn : " .$id . "item : " .$item;
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/siswa', [\App\Http\Controllers\SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [\App\Http\Controllers\SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [\App\Http\Controllers\SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{id}', [\App\Http\Controllers\SiswaController::class, 'show'])->name('siswa.show');
Route::get('/siswa/{id}/edit', [\App\Http\Controllers\SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{id}', [\App\Http\Controllers\SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{id}', [\App\Http\Controllers\SiswaController::class, 'destroy'])->name('siswa.destroy');

Route::resource('/category', \App\Http\Controllers\CategoryController::class);
Route::resource('/articles',  \App\Http\Controllers\ArticleController::class);

Route::resource('/mobil', \App\http\Controllers\MobilController::class);
Route::resource('/suppliers', \App\http\Controllers\SuppliersController::class);
Route::resource('/products', \App\http\Controllers\ProductsController::class);




