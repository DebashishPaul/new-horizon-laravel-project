<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
    	echo "OKKKKKKK";
    }

    public function user_insert(){
    	return view('backend/user-new');
    }

    public function save_user(){
    	echo "OK";
    }
}
