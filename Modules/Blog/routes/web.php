<?php

use Illuminate\Support\Facades\Route;

Route::prefix('blog')->group(function () {
    Route::get('/', [\Modules\Blog\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
});
