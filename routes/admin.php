<?php

use App\Http\Controllers\Admin\AuthorController;
use Illuminate\Support\Facades\Route;


Route::get('/admin/authors', [AuthorController::class, 'index'])->name('admin.authors');
Route::get('admin/authors/create', [AuthorController::class, 'create'])->name('authors.create');
Route::post('admin/authors', [AuthorController::class, 'save'])->name("authors.save");
