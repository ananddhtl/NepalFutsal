<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUserController;

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
    return view('homepage');
});

Route::get('/adminlogin', function () {
    return view('admin.login');
});

Route::get('/adminregister', function () {
    return view('admin.register');
});


Route::post('/addUserData', [AdminUserController::class, 'userregister']);
Route::post('/userLogin', [AdminUserController::class, 'userlogin']);

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [AdminUserController::class, 'dashboard'])->name('admin.dashboard');
});