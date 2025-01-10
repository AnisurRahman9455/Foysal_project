<?php

namespace App\Http\Controllers\Frontend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Pass the variable name 'student_info' to the compact function
        return view('frontend.admin.dashboard');
    }
}
