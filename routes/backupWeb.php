<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CustomAuthController;


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

Route::get('/', [CustomAuthController::class, 'home'])->name('dashboard'); 

Route::post('/submit-marks', [StudentController::class, 'store'])->name('marks.store');
Route::post('/total-marks', [StudentController::class, 'create'])->name('marks.create');
Route::get('/marks-filter', [StudentController::class, 'filter'])->name('marks.filter');
Route::get('/edit/{id}',[StudentController::class, 'edit'])->name('marks.edit');
Route::post('/update/{id}',[StudentController::class, 'update'])->name('marks.update');
Route::get('/delete/{id}', [StudentController::class, 'delete'])->name('marks.destroy');

Route::post('/calculate-marks', [StudentController::class, 'calculateMarks'])->name('calculate.marks');
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::post('postlogin', [CustomAuthController::class, 'login'])->name('postlogin'); 
Route::get('signup', [CustomAuthController::class, 'signup'])->name('register-user');
Route::post('postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('/ShowStudentMarksheet', [StudentController::class, 'marksheet'])->name('marks.view');
Route::get('/AddStudentMarks', [StudentController::class, 'input_marks'])->name('marks.input');
Route::get('/gradeCalculator', [StudentController::class, 'all_marks'])->name('marks.all');