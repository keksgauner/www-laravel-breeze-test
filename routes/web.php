<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/calculator', function () {
    return view('calculator');
})->middleware(['auth'])->name('calculator');

Route::middleware(['auth'])->prefix('todos')->group(function () {
    Route::get('/', [TodoController::class, 'index'])->name('todos.index');
    Route::get('/create', [TodoController::class, 'create'])->name('todos.create');
    Route::post('/', [TodoController::class, 'store'])->name('todos.store');
    Route::get('/{todo}/edit', [TodoController::class, 'edit'])->name('todos.edit');
    Route::put('/{todo}', [TodoController::class, 'update'])->name('todos.update');
    Route::delete('/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');
});


Route::middleware('auth')->prefix('profile')->group(function () {
    Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
