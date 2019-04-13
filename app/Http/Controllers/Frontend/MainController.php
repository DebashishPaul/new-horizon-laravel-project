<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;

class MainController extends Controller
{
    public function index(){
        $slider = Slider::all();
    	return view('frontend.home',compact('slider'));
    }

    public function receipe(){
    	return view('frontend/receipes');
    }


     public function receipe_details(){
    	return view('frontend/receipe-details');
    }

    public function blog_show(){
    	return view('frontend/blog');
    }

    public function contact_show(){
    	return view('frontend/contact');
    }
}
