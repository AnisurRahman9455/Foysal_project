<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class studentsInfoController extends Controller
{
    public function index(){
        return view('frontend.students_info');
    }
}
