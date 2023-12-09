<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $books = DB::table('books')->get();
    return view('welcome', [
        'books' => $books, 
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/portfolio', function () {
    return view('portfolio');
})->middleware(['auth', 'verified'])->name('portfolio');

Route::get('/contacts', function () {
    return view('contacts');
})->middleware(['auth', 'verified'])->name('contacts');

Route::get('/testimonials', function () {
    return view('testimonials');
})->middleware(['auth', 'verified'])->name('testimonials');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('books', BookController::class)->middleware('auth');