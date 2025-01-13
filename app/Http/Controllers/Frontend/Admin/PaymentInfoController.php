<?php

namespace App\Http\Controllers\Frontend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentInfoController extends Controller
{
    public function index(){
        return view('frontend.admin.show_payments');
    }
}
