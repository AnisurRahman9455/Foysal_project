<?php

use App\Http\Controllers\Frontend\addressController;
use App\Http\Controllers\Frontend\admissionController;
use App\Http\Controllers\Frontend\attendanceController;
use App\Http\Controllers\Frontend\classRoutineController;
use App\Http\Controllers\Frontend\contactController;
use App\Http\Controllers\Frontend\etcController;
use App\Http\Controllers\Frontend\homeWorkController;
use App\Http\Controllers\Frontend\memorizeController;
use App\Http\Controllers\Frontend\noticeBoardController;
use App\Http\Controllers\Frontend\payController;
use App\Http\Controllers\Frontend\resultSheetController;
use App\Http\Controllers\Frontend\returnAllResultController;
use App\Http\Controllers\Frontend\someInfoController;
use App\Http\Controllers\Frontend\someWarningController;
use App\Http\Controllers\Frontend\studentsInfoController;
use App\Http\Controllers\Frontend\takeLeaveController;
use App\Http\Controllers\Frontend\teacherCVController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// My Own Routes 
Route::get('admission',[admissionController::class,'index'])->name('admission');
Route::get('address',[addressController::class,'index'])->name('address');
Route::get('attendance',[attendanceController::class,'index'])->name('attendance');
Route::get('routine',[classRoutineController::class,'index'])->name('routine');
Route::get('contact',[contactController::class,'index'])->name('contact');
Route::get('etc',[etcController::class,'index'])->name('etc');
Route::get('home-work',[homeWorkController::class,'index'])->name('home.work');
Route::get('memorize',[memorizeController::class,'index'])->name('memorize');
Route::get('notice-board',[noticeBoardController::class,'index'])->name('notice.board');
Route::get('pay',[payController::class,'index'])->name('pay');
//Return to all result sheet from here

Route::get('result',[resultSheetController::class,'index'])->name('result');
Route::get('six',[returnAllResultController::class,'six'])->name('six');
Route::get('seven',[returnAllResultController::class,'seven'])->name('seven');
Route::get('eight',[returnAllResultController::class,'eight'])->name('eight');
Route::get('nine',[returnAllResultController::class,'nine'])->name('nine');
Route::get('ten',[returnAllResultController::class,'ten'])->name('ten');

// result sheet end here
Route::get('some-info',[someInfoController::class,'index'])->name('some.info');
Route::get('some-warning',[someWarningController::class,'index'])->name('some.warning');
Route::get('students-info',[studentsInfoController::class,'index'])->name('students.info');
Route::get('take-leave',[takeLeaveController::class,'index'])->name('take.leave');
Route::get('teacher-cv',[teacherCVController::class,'index'])->name('teacher.cv');

require __DIR__.'/auth.php';
