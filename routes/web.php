<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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
    return view('welcome');
});

Route::get('/blogs',[BlogController::class, 'index']);

Route::get('/blogs/create', [BlogController::class, 'create']); 

Route::post('/blogs/save', [BlogController::class, 'store']);

Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');

Route::patch('/{id}', [BlogController::class, 'update'])->name('blog.update');

Route::delete('/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');