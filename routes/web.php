<?php

use Illuminate\Support\Facades\Route;


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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

Route::get('/job', [App\Http\Controllers\JobController::class,"index"]);
Route::get('/profile', [App\Http\Controllers\ProfileController::class,"index"]);
//Route::post('/profile', [App\Http\Controllers\ProfileController::class,"edit"]);
Route::get('/jobcategory', [App\Http\Controllers\JobCategoryController::class,"index"]);
Route::get('/search', [App\Http\Controllers\JobController::class,"search"]);
Route::get('/companies', [App\Http\Controllers\CompaniesController::class,"index"]);

Route::post('/profile_update.create', [App\Http\Controllers\ProfileUpdateController::class,"edit"]);
//Auth::routes();



require __DIR__.'/auth.php';
