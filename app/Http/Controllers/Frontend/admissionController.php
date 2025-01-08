<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class admissionController extends Controller
{
    public function index(){
        return view('frontend.admission_paper');
    }
}
