<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarriageRegistrationController;

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

//User
Route::get('/apply', [MarriageRegistrationController::class, 'showRegistrationForm'])->name('showRegistrationForm');
Route::post('/apply/create', [MarriageRegistrationController::class, 'createMarriageRegistration'])->name('createMarriageRegistration');
Route::get('/register', [MarriageRegistrationController::class, 'showRegisterPage'])->name('showRegisterPage');
Route::post('/register', [MarriageRegistrationController::class, 'showResultPage'])->name('showResultPage');
Route::post('/register/upload/{id}', [MarriageRegistrationController::class, 'uploadFiles'])->name('uploadFiles');
Route::get('/certificate/{id}', [MarriageRegistrationController::class, 'showCertPage'])->name('showCertPage');


//Staff
Route::get('/staff/details', [MarriageRegistrationController::class, 'showDetailsPage'])->name('showDetailsPage');
Route::post('/staff/confirmstatus/{id}', [MarriageRegistrationController::class, 'confirmStatus'])->name('confirmStatus');
