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
Route::get('/profile', [App\Http\Controllers\ProfileController::class,"show"])->name('profile');
//Route::post('/profile', [App\Http\Controllers\ProfileController::class,"edit"]);
Route::get('/jobcategory', [App\Http\Controllers\JobCategoryController::class,"index"]);
Route::get('/search', [App\Http\Controllers\JobController::class,"search"]);

Route::get('/companies', [App\Http\Controllers\CompanyController::class,"index"]);
Route::get('/company.ad', [App\Http\Controllers\CompanyController::class,"add_ad"]);
Route::get('/company.post', [App\Http\Controllers\CompanyController::class,"add_post"]);
Route::get('/companies', [App\Http\Controllers\CompanyController::class,"show_ad"])->name('companies');
Route::get('/company.showpost', [App\Http\Controllers\CompanyController::class,"show_post"]);
Route::get('/company.showcase', [App\Http\Controllers\CompanyController::class,"show_case"]);
Route::get('/company.updatead/{id}', [App\Http\Controllers\CompanyController::class,"view_updatead"]);
Route::get('/profile_update.profileshow/{email}', [App\Http\Controllers\ProfileUpdateController::class,"one_profile"]);
//Route::get('/profile_update.update/{email}', [App\Http\Controllers\ProfileController::class,"show_update"]);
Route::get('/profile_update.update/{email}', [App\Http\Controllers\ProfileController::class,"edit_update"]);

Route::get('/retireejobstatus', [App\Http\Controllers\RetireeJobStatusController::class,"index"]);
Route::get('/retireejobstatusupdate.view', [App\Http\Controllers\RetireeJobStatusController::class,"user_status"]);
Route::get('/jobstatus', [App\Http\Controllers\RetireeJobStatusController::class,"status_show"]);
//Route::get('/retireejobstatusupdate.view', [App\Http\Controllers\RetireeJobStatusController::class,"status"]);
Route::get('/profile_update.create', [App\Http\Controllers\ProfileUpdateController::class,"show"]);
Route::get('/profile_update.profileshow', [App\Http\Controllers\ProfileUpdateController::class,"profileshow"]);
Route::get('/track.apply', [App\Http\Controllers\TrackController::class,"index"]);
Route::get('/track.list', [App\Http\Controllers\TrackController::class,"list"]);
Route::get('/track.comment/{id}', [App\Http\Controllers\TrackController::class,"show_comment"]);
Route::get('/track.approved/{id}', [App\Http\Controllers\TrackController::class,"edit_aord"]);




Route::post('/track.update_comment/{id}', [App\Http\Controllers\TrackController::class,"update_comment"]);
Route::post('/track.update_approved/{id}', [App\Http\Controllers\TrackController::class,"update_aord"]);
Route::post('/track.apply', [App\Http\Controllers\TrackController::class,"apply"]);
Route::post('/profile_update.create', [App\Http\Controllers\ProfileUpdateController::class,"edit"]);
Route::post('/retireejobstatus', [App\Http\Controllers\RetireeJobStatusController::class,"edit"]);
Route::post('/company.ad', [App\Http\Controllers\CompanyController::class,"edit_ad"]);
Route::post('/company.post', [App\Http\Controllers\CompanyController::class,"edit_post"]);
Route::post('/company.update/{id}', [App\Http\Controllers\CompanyController::class,"updatead"]);
Route::post('/profile_update.update/{email}', [App\Http\Controllers\ProfileController::class,"profile_update"]);



Route::get('/company.deletead/{id}', [App\Http\Controllers\CompanyController::class,"deletead"]);
Route::get('/company.deletepost/{id}', [App\Http\Controllers\CompanyController::class,"deletepost"]);


Route::resource('profiles','App\HttpControllers\ProfileController');
//Auth::routes();



require __DIR__.'/auth.php';
