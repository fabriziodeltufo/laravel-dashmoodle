<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::get('/courses-list', function () {
        return view('courses-list');
    })->name('pag1');

    Route::get('/courses-users', function () {
        return view('courses-users');
    })->name('pag2');

    Route::get('/courses-methods', function () {
        return view('courses-methods');
    })->name('pag3');

    Route::post('/cancella-utente', function () {
        $email = request('email_cancella');
        $result = cancella_utente($email);

        if ($result->success) {
            return back()->with('success_cancella', $result->message);
        } else {
            return back()->with('error_cancella', $result->message);
        }
    })->name('moodle.cancella');
});