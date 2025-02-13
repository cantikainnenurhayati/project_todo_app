<?php

// // berfungsi untuk mengimpor task controler,tasklist controler, ke dalam file routes/web.php, controller lain, atau file Blade (jika dibutuhkan).
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskListController;
use Illuminate\Support\Facades\Route;

// Membuat route untuk home
Route::get('/', [TaskController::class, 'index'])->name('home');

Route::resource('lists', TaskListController::class);
// menampilkan nama tugas beserta nama daftar tempat tugas tersebut berada, dengan tampilan yang rapi dan responsif.//

Route::resource('tasks', TaskController::class);
// membuat semua rute standar untuk resource tasks, yang dikendalikan oleh task controller //

Route::patch('/tasks/{task}/complete', [TaskController::class, 'complete'])->name('tasks.complete');
// untuk menangani pembaruan status tugas menjadi "selesai" (atau "complete") //
  
Route::patch('/tasks/{task}/change-list', [TaskController::class, 'changeList'])->name('tasks.changeList');
// untuk memindahkan suatu tugas (task) ke daftar (list) yang berbeda dalam sistem manajemen tugas.//