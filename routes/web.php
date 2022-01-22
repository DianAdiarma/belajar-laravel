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

Route::get('/', function () {
    return view('backend.master');
});

//Route Lecturer
route::get('lecturer/edit/{id}', [LecturerController::class, 'edit'])->name('edit-lecturer');
route::get('lecturer/index', [LecturerController::class, 'index'])->name('index-lecturer');
route::get('lecturer/create', [LecturerController::class, 'create'])->name('create-lecturer');
route::post('lecturer/store', [LecturerController::class, 'store'])->name("store-lecturer");
route::put('lecturer/update/{id}', [LecturerController::class, 'update'])->name("update-lecturer");
route::delete('lecturer/delete/{id}', [LecturerController::class, 'delete'])->name("delete-lecturer");


//Route Student
route::get('student/index', [StudentController::class, 'index'])->name('index-student');
route::get('student/create', [StudentController::class, 'create']);
route::post('student/store', [StudentController::class, 'store'])->name("store-student");
