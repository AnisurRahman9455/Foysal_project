<?php

namespace App\Http\Controllers\Frontend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentsListController extends Controller
{
    public function index(){
        return view('frontend.admin.students_list');
    }
}
