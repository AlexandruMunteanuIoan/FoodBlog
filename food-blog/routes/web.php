<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FoodBlogController;
use Illuminate\Support\Facades\Route;

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
    return view('home.home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/blog/create',[FoodBlogController::class,'create'])->name('create');
    Route::post('/blog/store',[FoodBlogController::class,'store'])->name('store');
    Route::get('blog/edit/{blog}', [FoodBlogController::class,'edit'])->name('edit');
    Route::patch('blog/update/{blog}',[FoodBlogController::class,'update'])->name('update');
    Route::delete('blog/delete/{blog}',[FoodBlogController::class,'delete'])->name('delete');
});

require __DIR__.'/auth.php';

Route::get('/blog', [FoodBlogController::class,'blog'])->name('blog');
Route::get('blog/read/{blog}',[FoodBlogController::class,'read'])->name('read');

