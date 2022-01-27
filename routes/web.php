<?php

use App\Http\Controllers\Admin\DashboardController;
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
route::get('lecturer/edit/{id}', [LecturerController::class, 'edit'])->name('edit-lecturer')->middleware('auth','CheckRole:dosen');
route::get('lecturer/index', [LecturerController::class, 'index'])->name('index-lecturer')->middleware('auth','CheckRole:dosen');
route::get('lecturer/create', [LecturerController::class, 'create'])->name('create-lecturer')->middleware('auth','CheckRole:dosen');
route::post('lecturer/store', [LecturerController::class, 'store'])->name("store-lecturer")->middleware('auth','CheckRole:dosen');
route::put('lecturer/update/{id}', [LecturerController::class, 'update'])->name("update-lecturer")->middleware('auth','CheckRole:dosen');
route::delete('lecturer/delete/{id}', [LecturerController::class, 'delete'])->name("delete-lecturer")->middleware('auth','CheckRole:dosen');


//Route Student
route::get('student/index', [StudentController::class, 'index'])->name('index-student')->middleware('auth','CheckRole:mahasiswa,dosen');
route::get('student/create', [StudentController::class, 'create'])->name('create-student')->middleware('auth','CheckRole:mahasiswa,dosen');
route::post('student/store', [StudentController::class, 'store'])->name("store-student")->middleware('auth','CheckRole:mahasiswa,dosen');
route::put('student/update/{id}', [StudentController::class, 'update'])->name('update-student')->middleware('auth','CheckRole:mahasiswa,dosen');
route::get('student/edit/{id}', [StudentController::class, 'edit'])->name('edit-student')->middleware('auth','CheckRole:mahasiswa,dosen');
route::delete('student/delete/{id}', [StudentController::class, 'delete'])->name('delete-student')->middleware('auth','CheckRole:mahasiswa,dosen');

//Route Subject
route::get('subject/create', [SubjectController::class, 'create'])->name('create-subject');
route::post('subject/store', [SubjectController::class, 'store'])->name('store-subject');
route::get('subject/index', [SubjectController::class, 'index'])->name('index-subject');
route::put('subject/update/{id}', [SubjectController::class, 'update'])->name('update-subject');
route::get('subject/edit/{id}', [SubjectController::class, 'edit'])->name('edit-subject');
route::delete('subject/delete/{id}', [SubjectController::class, 'delete'])->name('delete-subject');

route::get('dashboard/index', [DashboardController::class, 'index'])->name('index-dashboard')->middleware('auth','CheckRole:mahasiswa,dosen');

//home
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
