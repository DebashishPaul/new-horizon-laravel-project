<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //
    public function index(){

    	return view('backend/add-category');
    }

    public function addcategory(Request $request){
    	//dd($request->all();
        $category                 = new categories;
    	$category->name           = $request->cat;
        $category->save();

    }

}
