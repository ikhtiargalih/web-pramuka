<?php

use Illuminate\Support\Facades\Route;
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

//Auth
Route::get('/login', [StudentController::class, 'login'])->name('login');
Route::post('/login/user', [StudentController::class, 'register'])->name('register');
Route::post('/login/auth', [StudentController::class, 'auth'])->name('login.auth');

//dashboard
// Route::get('/', [StudentController::class, 'index'])->name('student.index');
Route::get('/', [StudentController::class, 'home'])->name('student.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/students/store', [StudentController::class, 'store'])->name('student.store');
Route::get('/students/edit/{id}', [StudentController::class, 'edit'])->name('students.edit');
Route::patch('/students/update/{id}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/students/destroy/{id}', [StudentController::class, 'destroy'])->name('students.destroy');