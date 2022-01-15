<?php

use App\Http\Controllers\Admin\LecturerController;
use App\Http\Controllers\Admin\StudentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//Route Lecturer
route::get('lecturer/index', [LecturerController::class, 'index'])->name('index-lecturer');
route::get('/lecturer/create', [LecturerController::class, 'create']);
route::post('lecturer/store', [LecturerController::class, 'store'])->name("store-lecturer");

//Route Student
route::get('student/index', [StudentController::class, 'index'])->name('index-student');
route::get('student/create', [StudentController::class, 'create']);
route::post('student/store', [StudentController::class, 'store'])->name("store-student");
