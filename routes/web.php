<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskListController;
use Illuminate\Support\Facades\Route;

// Route untuk halaman utama, memanggil metode 'index' dari TaskController 
Route::get('/', [TaskController::class, 'index'])->name('home');

// Menggunakan resource controller untuk TaskListController
// Ini akan secara otomatis membuat route untuk CRUD (Create, Read, Update, Delete) pada TaskListController
Route::resource('lists', TaskListController::class);

// Menggunakan resource controller untuk TaskController
// Ini akan membuat route untuk CRUD pada TaskController
Route::resource('tasks', TaskController::class);
// Route untuk menandai tugas sebagai selesai (complete)
// Menggunakan metode PATCH karena hanya memperbarui sebagian data
Route::patch('/tasks/{task}/complete', [TaskController::class, 'complete'])->name('tasks.complete');
// / Route untuk mengubah daftar tugas dari suatu tugas
// Menggunakan metode PATCH untuk mengubah sebagian data tugas
Route::patch('/tasks/{task}/change-list', [TaskController::class, 'changeList'])->name('tasks.changeList');
// Route untuk menyimpan tugas baru
// Menggunakan metode POST karena ini adalah operasi pembuatan (Create)
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
