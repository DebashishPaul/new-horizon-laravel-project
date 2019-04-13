<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use app\http\requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Validator;

class UserController extends Controller
{
    public function index(){
		return view('backend/user-new');
	}

	public function save_data(Request $request)
	{

		$validator = Validator::make($request->all(), [

            'fname'           	=> 'required|max:190',
            'lname'    			=> 'required|max:1000',
            'email'          	=> 'required|email|unique:allusers',
            'password'			=> 'confirmed|required|min:6|max:8',
            'dob'				=> 'date_format:Y-m-d|required'
            
        ]);

        if ($validator->fails()) {
            return redirect('admin/user-create')
                            ->withErrors($validator)
                            ->withInput();
        } else {
		
		$data = array();

			//$data['id'] 	= $request->['id'];
			$data['fname'] 		= $request->fname;
			$data['lname'] 		= $request->lname;
			$data['email'] 		= $request->email;
			$data['password'] 	= $request->password;
			$data['password'] 	= md5($data['password']);
			$data['status'] 	= $request->status;

			DB::table('allusers')->insert($data);
			//Session::flush('msg','User Created Successfully !!');
			return Redirect::to('/admin/user-create')->with('msg','User Created Successfully !!');
		}
	}

	//public function user_view(){
	//	return view('backend/user-view');
	//}

	// Data view from database
	public function user_view(){
		$user_info=DB::table('allusers')
		->get();

		$namage_user = view('backend/user-view')
		->with('view_user_info', $user_info);

		return view('backend/admin-layout')
		->with('user_view', $namage_user);

	}

	// Data delete from database
	public function delete_data($id){
		DB::table('allusers')->where('id',$id)->delete();
		//Session::flash('green','Data Deleted Successfully !!');
		return Redirect::to('/admin/all-users')->with('msg2','Data Deleted Successfully !!');

	}


	//Data edit from database
	public function edit_data($id){
		$user_info=DB::table('allusers')->where('id', $id)->first();
		
		//echo "<pre>";
		//print_r($country_info);
		//exit;

		//Session::flash('green','Data Deleted Successfully !!');
		//return Redirect::to('/country-view');
		$namage_user = view('backend/user-edit')
		->with('edit_user_info', $user_info);

		return view('backend/admin-layout')
		->with('user_edit', $namage_user);
	}


	// Data Update into database table
	public function update_data(Request $request,$id){
		$data = array();

		//$data['cat_id'] 	= $request->['id'];
		$data['fname'] 	= $request->fname;
		$data['lname'] 	= $request->lname;
		

		DB::table('allusers')
		->where('id', $id)
		->update($data);
		//Session::flash('green','User Name Updated Successfully !!');
		return Redirect::to('/admin/all-users')->with('msg','User Updated Successfully !!');
	}


}
