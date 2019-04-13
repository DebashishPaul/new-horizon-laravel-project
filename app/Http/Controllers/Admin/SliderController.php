<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use app\http\requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Validator;
use App\Slider;

class SliderController extends Controller
{
    public function addSlider(){

    	return view('backend/slider-new');
    }

    public function save(Request $request){

        //dd($request->all());

        $validator = Validator::make($request->all(), [

            'slider_desc'           => 'regex:/^[a-zA-Z]+$/u|required|max:190',
            'slider_image'          => 'mimes:jpeg,jpg,png|required'
            
        ]);

        if ($validator->fails()) {
            return redirect('admin/insert_slider')
                            ->withErrors($validator)
                            ->withInput();
        } else {
        	
        	if($request->hasFile('slider_image')) {
        		$original_name = $_FILES['slider_image']['name'];
                $slider_image = $request->file('slider_image');
                // file re name
                $enc_slider_image = time() . '.' . $slider_image->getClientOriginalExtension();
                // resize file destination path
                $destinationPath = public_path('backend/images');
                // Image upload method
                $slider_image->move($destinationPath, $enc_slider_image);
            }

            $slider                         = new Slider;
            $slider->slider_name 			= $original_name;
        	$slider->slider_desc           	= $request->slider_desc;
        	$slider->slider_incrpt_image    = $enc_slider_image;
            $slider->save();

        }
    }
}
