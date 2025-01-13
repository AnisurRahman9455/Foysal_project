<?php

namespace App\Http\Controllers\Frontend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherCVController extends Controller
{
    public function index(){
        return view('frontend.admin.create_teacher_cv');
    }
}
