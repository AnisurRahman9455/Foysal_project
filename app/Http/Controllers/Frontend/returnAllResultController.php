<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class returnAllResultController extends Controller
{
    public function six(){
        return view('frontend.result_sheet.six_result_sheet');
    }
    public function seven(){
        return view('frontend.result_sheet.seven_result_sheet');
    }
    public function eight(){
        return view('frontend.result_sheet.eight_result_sheet');
    }
    public function nine(){
        return view('frontend.result_sheet.nine_result_sheet');
    }
    public function ten(){
        return view('frontend.result_sheet.ten_result_sheet');
    }
}
