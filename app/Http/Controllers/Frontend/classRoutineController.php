<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class classRoutineController extends Controller
{
    public function index(){
        return view('frontend.class_routine');
    }
}
