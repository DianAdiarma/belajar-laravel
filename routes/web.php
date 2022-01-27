<?php

use App\Http\Controllers\Admin\LecturerController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\SubjectController;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});

//Route Lecturer
route::get('lecturer/edit/{id}', [LecturerController::class, 'edit'])->name('edit-lecturer')->middleware('auth');
route::get('lecturer/index', [LecturerController::class, 'index'])->name('index-lecturer')->middleware('auth');
route::get('lecturer/create', [LecturerController::class, 'create'])->name('create-lecturer')->middleware('auth');
route::post('lecturer/store', [LecturerController::class, 'store'])->name("store-lecturer")->middleware('auth');
route::put('lecturer/update/{id}', [LecturerController::class, 'update'])->name("update-lecturer")->middleware('auth');
route::delete('lecturer/delete/{id}', [LecturerController::class, 'delete'])->name("delete-lecturer")->middleware('auth');


//Route Student
route::get('student/index', [StudentController::class, 'index'])->name('index-student');
route::get('student/create', [StudentController::class, 'create'])->name('create-student');
route::post('student/store', [StudentController::class, 'store'])->name("store-student");
route::put('student/update/{id}', [StudentController::class, 'update'])->name('update-student');
route::get('student/edit/{id}', [StudentController::class, 'edit'])->name('edit-student');
route::delete('student/delete/{id}', [StudentController::class, 'delete'])->name('delete-student');

//Route Subject
route::get('subject/create', [SubjectController::class, 'create'])->name('create-subject');
route::post('subject/store', [SubjectController::class, 'store'])->name('store-subject');
route::get('subject/index', [SubjectController::class, 'index'])->name('index-subject');
route::put('subject/update/{id}', [SubjectController::class, 'update'])->name('update-subject');
route::get('subject/edit/{id}', [SubjectController::class, 'edit'])->name('edit-subject');
route::delete('subject/delete/{id}', [SubjectController::class, 'delete'])->name('delete-subject');

//home
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
