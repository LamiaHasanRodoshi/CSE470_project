<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/JobController', index () );

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

Route::get('/job', [app\Http\Controllers\JobController::class,"index"]);
Route::get('/profile', [app\Http\Controllers\ProfileController::class,"index"]);
Route::get('/job_category', [app\Http\Controllers\ProfileController::class,"index"]);
Route::get('/search', [app\Http\Controllers\JobController::class,"search"]);
//Route::get('/home',[app\Http\Controllers\HomeController::class,"index"]);
//Auth::routes();



require __DIR__.'/auth.php';
