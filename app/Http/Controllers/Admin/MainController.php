<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function dashboard_show(){
    	return view('backend/dashboard');
    }


     public function receipe_details(){
    	return view('backend/receipe-details');
    }
}
