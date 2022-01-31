<?php

use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserController;
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
    return view('index');
});

//user authentication
Route::get('/register', [UserAuthController::class, 'showRegister'])->name('show.register');
Route::post('/register', [UserAuthController::class, 'saveRegister'])->name('save.register');
Route::get('/login', [UserAuthController::class, 'showLogin'])->name('show.login');
Route::post('/login', [UserAuthController::class, 'login'])->name('login');
Route::get('/logout', [UserAuthController::class, 'logout'])->name('logout');
Route::group(['middleware' => 'UserAuthCheck'], function(){
    Route::get('/dashboard', [UserController::class, 'showDashboard'])->name('show.dashboard');
});







