<?php

namespace App\Http\Controllers\Frontend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeaveInfoController extends Controller
{
    public function index(){
        return view('frontend.admin.show_leave_info');
    }
}
