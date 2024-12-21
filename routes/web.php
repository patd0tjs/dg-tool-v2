<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
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
    return redirect()->route('dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth']);
Route::get('/student', [StudentController::class, 'index'])->name('student')->middleware(['auth']);

// add student
Route::get('/student/add', [StudentController::class, 'create'])->name('student/add')->middleware(['auth']);
Route::post('/student/add', [StudentController::class, 'store'])->name('student/add')->middleware(['auth']);
require __DIR__.'/auth.php';
