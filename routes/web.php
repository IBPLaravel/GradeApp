<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\AnnouncementController;
 

Route::get('/', [AuthController::class,'login']);
Route::post('login', [AuthController::class,'AuthLogin']);
Route::get('logout', [AuthController::class,'logout']);

Route::get('admin/admin/list', function () {
    return view('admin.admin.list');
});


// Yetkilendirmelerimize göre route yapıyoruz ve ilgili kullanıcıyı kendisiyle ilgili sayfaya yönlendiriyoruz
    Route::group(['middleware' => 'admin'],function(){
        Route::get('admin/admin/student', [AdminController::class,'getStudent']);
        Route::get('admin/admin/teacher', [AdminController::class,'getTeacher']);
        Route::get('admin/admin/lecture/show', [LectureController::class,'show']);
        Route::get('admin/admin/student/edit/{id}', [AdminController::class,'editStudent']);

    // Students Route
    Route::get('student/add', [AdminController::class,'addStudent']);
    Route::post('student/add', [AdminController::class,'insertStudent']);

    Route::post('admin/admin/student/edit/{id}', [AdminController::class,'updateStudent']);
    Route::get('student/delete/{id}', [AdminController::class,'deleteStudent']);

    Route::get('admin/announcement/add',[AnnouncementController::class,'view']);
    Route::post('admin/announcement/add',[AnnouncementController::class,'insert'])->name('list');
     
    //Route::get('admin/announcement/list',[AnnouncementController::class,'getAllAnnouncement']);
    });

    //Teachers Route
    Route::get('teacher/add', [AdminController::class,'addTeacher']);
    Route::post('teacher/add', [AdminController::class,'insertTeacher']);
    Route::get('admin/admin/teacher/edit/{id}', [AdminController::class,'editTeacher']);
    Route::post('admin/admin/teacher/edit/{id}', [AdminController::class,'updateTeacher']);
    Route::get('teacher/delete/{id}', [AdminController::class,'deleteTeacher']);

// Student yetki grubunun sayfasında yönlendiriyoruz
Route::group(['middleware' => 'student'],function(){
    Route::get('student/dashboard', [StudentController::class,'getStudent']);
    Route::get('admin/admin/student/edit/{id}', [AdminController::class,'editStudent']);
    Route::post('admin/admin/student/edit/{id}', [AdminController::class,'updateStudent']);
});

// Teacher yetki grubunun sayfasında yönlendiriyoruz
Route::group(['middleware' => 'teacher'],function(){
    Route::get('teacher/dashboard', [TeacherController::class,'getTeacher']);
    Route::get('admin/admin/teacher/edit/{id}', [AdminController::class,'editStudent']);
    Route::post('admin/admin/teacher/edit/{id}', [AdminController::class,'updateStudent']);
});

