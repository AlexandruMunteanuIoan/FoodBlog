<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodBlogController;

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

// Route::get('/blog',function(){
//     return view('blogs.blog');
// })->name('blog');

Route::get('/blog', [FoodBlogController::class,'index'])->name('blog');

Route::get('/blog/create',[FoodBlogController::class,'create'])->name('create');

Route::post('/blog/store',[FoodBlogController::class,'store'])->name('store');

Route::get('blog/edit/{blog}', [FoodBlogController::class,'edit'])->name('edit');

Route::patch('blog/update/{blog}',[FoodBlogController::class,'update'])->name('update');

Route::get('blog/read/{blog}',[FoodBlogController::class,'read'])->name('read');

Route::delete('blog/delete/{blog}',[FoodBlogController::class,'delete'])->name('delete');
