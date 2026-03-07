<?php

use App\Http\Controllers\Admin\ProductController;


Route::get('/admin', [ProductController::class, 'index'])->name('admin.product.index');
Route::get('/admin/products/{product}', [ProductController::class, 'edit'])->name('admin.product.edit');
Route::delete('/admin/products/{product}', [ProductController::class, 'destroy'])->name('admin.product.destroy');