<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Admin\AdminController;
use App\Http\Controllers\Frontend\Admin\HomeworkController;
use App\Http\Controllers\Frontend\Admin\ProfileController;


// Multi Auth System Route is here start
Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('/admin/home-work',[HomeworkController::class,'index'])->name('admin.homework');
    Route::delete('/homework/{id}', [HomeworkController::class, 'destroy'])->name('homework.destroy');
    
 });
Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');
});