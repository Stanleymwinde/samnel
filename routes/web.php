<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/general', [UserController::class, 'general'])->name('general');
Route::get('/life', [UserController::class, 'life'])->name('life');
Route::get('/health', [UserController::class, 'health'])->name('health');

Route::get('/getinsured/{id}', [UserController::class, 'show'])->name('getinsured');

//send mail
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::post('/insured', [ContactController::class, 'insure'])->name('insured');
Route::get('/insured', [UserController::class, 'index'])->name('insured');
