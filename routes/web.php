<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;

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
    return view('home');
});

// Route::get('/coba', function () {
//     return view('coba');
// });

// Route::patch('/coba/{id}', 'UserController@update')->name('user.update');

Route::get('/user', [UserController::class, 'index']);
// Route::post('/user/save', [UserController::class, 'save']);

Route::put('/user/update', [UserController::class, 'update'])->name('user.update');

Route::get('/login', [LoginController::class, 'index']);
// Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('student', [StudentController::class, 'index'])->name('student.index');
Route::post('student', [StudentController::class, 'update'])->name('student.update');
