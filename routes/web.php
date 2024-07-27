<?php

use App\Http\Controllers\AssistantController;
use App\Http\Controllers\DevController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/devs', [DevController::class, 'index'])->name('dev.index');
Route::post('/devs', [DevController::class, 'search'])->name('dev.index');
Route::get('/devs', [DevController::class, 'search'])->name('dev.search');

Route::get('/assistants', [AssistantController::class, 'index'])->name('assistants.index');
Route::post('/assistants', [AssistantController::class, 'store'])->name('assistants.store');
Route::delete('/assistants/{assistant}', [AssistantController::class, 'destroy'])->name('assistants.destroy');

Route::get('/assistants/create', [AssistantController::class, 'create'])->name('assistants.create');

require __DIR__.'/auth.php';
