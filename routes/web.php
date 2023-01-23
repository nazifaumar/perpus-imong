<?php

use App\Http\Controllers\bookController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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

Route::get('/', [bookController::class, 'welcome'])->name('welcome');

Route::get('/dashboard', [bookController::class, 'dashboard'])->name('dashboard');
Route::get('/user', [bookController::class, 'user'])->name('user');

Route::get('/login', [bookController::class, 'login'])->name('login');
Route::post('/login', [bookController::class, 'auth'])->name('login.auth');

Route::get('/register', [bookController::class, 'register'])->name('register');
Route::post('/register', [bookController::class, 'inputRegister'])->name('register.post');