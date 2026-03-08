<?php

use App\Http\Controllers\Admin\ProductController;

Route::group(['prefix'=>'admin'], function(){
Route::get('/', [ProductController::class, 'index'])->name('admin.product.index');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
Route::get('/products/{product}', [ProductController::class, 'create'])->name('admin.product.create');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('admin.product.destroy');
});
