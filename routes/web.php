<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Models\Siswa;


Route::resource('siswas', SiswaController::class)
    ->middleware(['auth']);


Route::get('/', function () {
    $totalSiswa = Siswa::count();
    return view('dashboard', compact('totalSiswa'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
