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


Route::get('/dashboardformanager', function () {
    return view('dashboardformanager');
});
// })->middleware(['auth'])->name('dashboard');

Route::get('/homeformanager', function () {
    return view('homeformanager');

})->middleware(['auth'])->name('homeformanager');

Route::get('/job', [App\Http\Controllers\JobController::class,"index"]);
Route::get('/profile', [App\Http\Controllers\ProfileController::class,"index"]);
//Route::post('/profile', [App\Http\Controllers\ProfileController::class,"edit"]);
Route::get('/jobcategory', [App\Http\Controllers\JobCategoryController::class,"index"]);
Route::get('/search', [App\Http\Controllers\JobController::class,"search"]);

Route::get('/companies', [App\Http\Controllers\CompanyController::class,"index"]);
Route::get('/company.ad', [App\Http\Controllers\CompanyController::class,"add_ad"]);
Route::post('/company.post', [App\Http\Controllers\CompanyController::class,"add_post"]);
Route::get('/companies', [App\Http\Controllers\CompanyController::class,"show_ad"]);
Route::get('/company.showpost', [App\Http\Controllers\CompanyController::class,"show_post"]);

Route::get('/retireejobstatus', [App\Http\Controllers\RetireeJobStatusController::class,"index"]);
Route::get('/retireejobstatusupdate.view', [App\Http\Controllers\RetireeJobStatusController::class,"show"]);

Route::post('/profile_update.create', [App\Http\Controllers\ProfileUpdateController::class,"edit"]);
Route::post('/retireejobstatusupdate.create', [App\Http\Controllers\RetireeJobStatusController::class,"edit"]);
Route::post('/company.ad', [App\Http\Controllers\CompanyController::class,"edit_ad"]);
Route::post('/company.post', [App\Http\Controllers\CompanyController::class,"edit_post"]);


Route::delete('/company.delete', [App\Http\Controllers\CompanyController::class,"delete"]);


Route::resource('profiles','App\HttpControllers\ProfileController');
//Auth::routes();



require __DIR__.'/auth.php';
