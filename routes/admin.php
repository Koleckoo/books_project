<?php

use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('can:admin')->group(function () {

    // admin authors
    Route::get('/admin/authors', [AuthorController::class, 'index'])->name('admin.authors');
    Route::get('admin/authors/create', [AuthorController::class, 'create'])->name('authors.create');
    Route::post('admin/authors', [AuthorController::class, 'save'])->name("authors.save");


    // admin books
    Route::get('/admin/books', [BookController::class, 'index'])->name('admin.books');

    // admin user
    Route::get('admin/users', [UserController::class, 'index'])->name('admin.users');
});
