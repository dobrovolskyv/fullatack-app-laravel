<?php

use App\Http\Controllers\Admin\ProductController;

Route::group(['prefix'=>'admin'], function(){
Route::get('/', [ProductController::class, 'index'])->name('admin.product.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('admin.product.create');
Route::post('/', [ProductController::class, 'store'])->name('admin.product.store');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('admin.product.destroy');
});
