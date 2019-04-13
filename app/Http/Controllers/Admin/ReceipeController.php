<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Receipe;
use App\category;
use Validator;

class ReceipeController extends Controller
{
    //
    public function index(){
        $category = category::all();
    	return view('backend/add-receipe',compact('category'));
    }

    public function addReceipe(Request $request){
        //dd($request->all());
        $validator = Validator::make($request->all(), [

            'receipe_name'           => 'regex:/^[a-zA-Z]+$/u|required|max:190',
            'receipe_description'    => 'required|max:1000',
           // 'receipe_image'        => 'mimes:jpeg,jpg,png|required'
            
        ]);

        if ($validator->fails()) {
            return redirect('admin/receipe-create')
                            ->withErrors($validator)
                            ->withInput();
        } else {

            $image = $request->file('receipe_image');
            for($i =0;$i<= count($image)-1; $i++){
                $original_name = $_FILES['receipe_image']['name'][$i];
                move_uploaded_file($_FILES['receipe_image']['tmp_name'][$i], "backend/images/".$original_name);
            }

            $receipe                         = new Receipe;
        	$receipe->receipe_name           = $request->receipe_name;
        	$receipe->receipe_price          = $request->receipe_price;
        	$receipe->receipe_cat            = $request->receipe_cat;
        	$receipe->receipe_scat           = $request->receipe_scat;
        	$receipe->receipe_description    = $request->receipe_description;
        	$receipe->receipe_image          = $original_name;
            $receipe->save();

        }
    }

}
