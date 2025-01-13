<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Admin\AdminController;
use App\Http\Controllers\Frontend\studentsInfoController;
use App\Http\Controllers\frontend\admin\ImgPostController;
use App\Http\Controllers\Frontend\Admin\NewPostController;
use App\Http\Controllers\Frontend\Admin\ProfileController;
use App\Http\Controllers\Frontend\Admin\HomeworkController;
use App\Http\Controllers\Frontend\Admin\SomeInfoController;
use App\Http\Controllers\Frontend\Admin\LeaveInfoController;
use App\Http\Controllers\Frontend\Admin\TeacherCVController;
use App\Http\Controllers\Frontend\Admin\AttendanceController;
use App\Http\Controllers\Frontend\Admin\PaymentInfoController;
use App\Http\Controllers\Frontend\Admin\ResultSheetController;
use App\Http\Controllers\Frontend\Admin\SomeWorningController;
use App\Http\Controllers\Frontend\Admin\ClassRoutineController;
use App\Http\Controllers\Frontend\Admin\StudentsListController;
use App\Http\Controllers\Frontend\Admin\ShowAllNoticeController;

// Multi Auth System Route is here start
Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('/admin/home-work',[HomeworkController::class,'index'])->name('admin.homework');
    Route::delete('/homework/{id}', [HomeworkController::class, 'destroy'])->name('homework.destroy');
    Route::get('/admin/attendance', [AttendanceController::class,'index'])->name('admin.attendance.list');
    Route::get('/admin/class-routine', [ClassRoutineController::class,'index'])->name('admin.class.routine');
    Route::resource('/admin-image-post', ImgPostController::class);
    Route::get('/admin/memorize', [SomeInfoController::class,'index'])->name('admin.memorize');
    Route::get('/admin/new-teacher-cv', [TeacherCVController::class,'index'])->name('admin.teacher.cv.add');
    Route::get('/admin/warning-massage', [SomeWorningController::class,'index'])->name('admin.students.warning');
    Route::get('/admin/new-post', [NewPostController::class,'index'])->name('admin.new.post');
    Route::get('/admin/student/leave-info', [LeaveInfoController::class,'index'])->name('admin.leave.info');
    Route::get('/admin/notice', [ShowAllNoticeController::class,'index'])->name('admin.notice');
    Route::get('/admin/payments', [PaymentInfoController::class,'index'])->name('admin.payments');
    Route::get('/admin/result-sheet', [ResultSheetController::class,'index'])->name('admin.add.result');
    Route::get('/admin/students-list', [StudentsListController::class,'index'])->name('admin.student.list');
    
 });
Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');
});