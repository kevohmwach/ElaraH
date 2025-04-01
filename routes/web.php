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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('profile');
Route::get('/', [App\Http\Controllers\SiteController::class, 'index'])->name('home');

//Route::post('/site/store', [App\Http\Controllers\SiteController::class, 'store'])->name('survey');
//Route::get('/site/results', [App\Http\Controllers\SiteController::class, 'results'])->name('results');
//Route::get('/site/download', [App\Http\Controllers\SiteController::class, 'download'])->name('download');

Route::get('/patient', [App\Http\Controllers\PatientController::class, 'index'])->name('patient');
Route::get('/patient/register', [App\Http\Controllers\PatientController::class, 'register'])->name('patient_register');
Route::get('/patient/update/{id}', [App\Http\Controllers\PatientController::class, 'update'])->name('updatePatient');

Route::get('/patient/cancer/{id}/{acc_no}', [App\Http\Controllers\PatientController::class, 'cancer'])->name('cancerPatient');
Route::get('/patient/medicalhistory/{id}/{acc_no}', [App\Http\Controllers\PatientController::class, 'medicalhistory'])->name('medical_history');
Route::get('/patient/socialhistory/{id}/{acc_no}', [App\Http\Controllers\PatientController::class, 'socialhistory'])->name('social_history');
Route::get('/patient/callscript/{id}/{acc_no}', [App\Http\Controllers\CallScriptController::class, 'callScript'])->name('call_script');
Route::get('/patient/download', [App\Http\Controllers\PatientController::class, 'download'])->name('patient_download');

Route::get('/ct4her', [App\Http\Controllers\Ct4herController::class, 'index'])->name('ct4her');
Route::get('/ct4her/register', [App\Http\Controllers\Ct4herController::class, 'register'])->name('ct4her_register');
Route::get('/ct4her/update/{id}', [App\Http\Controllers\Ct4herController::class, 'update'])->name('ct4her_update');
Route::get('/ct4her/download', [App\Http\Controllers\Ct4herController::class, 'download'])->name('ct4her_download');
