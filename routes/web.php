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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/practice', [\App\Http\Controllers\practiceController::class, 'practice'])->name('practice');

Route::get('/employees', [\App\Http\Controllers\EmployeemgtController::class, 'employees'])->name('employees');
Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');
   
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('employee', [\App\Http\Controllers\employeecontroller::class, 'index'])->name('employee.index');
    Route::get('employee/{Id}/Edit', [\App\Http\Controllers\EmployeemgtController::class, 'Edit']);
    route::post('save',[\App\Http\Controllers\employeecontroller::class, 'SavedData']);
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
  
});
