<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\alluser;
use Session;

class SigninController extends Controller
{
    //

	public function loginCheck(Request $request){

		//dd($request->all());
		$password 		= md5($request->password);

        $admin 			= alluser::where('email', $request->email)
				                ->where('password', $password)
				                ->get();


        if($admin->isEmpty() == false) {
            session(['loginStatus' => 'yes']);
            session(['email' => $request->email]);
            return redirect('admin/dashboard');
        }else {
            $request->session()->flash('error', 'User name or password not match');
            return redirect('login');
        }
	}

    public function index()
	{
		return view('backend/signin');
	}

	public function show_dashboard(){
		return view('backend/dashboard');
	}

	
	public function dashboard(Request $request){
		//$data['cat_id'] 	= $request->['id'];

		$user_email 	= $request->email;
		$user_pass 		= $request->password;

		$result = DB::table('allusers')
		->where('email',$user_email)
		->where('password',$user_pass)
		->first();

		//echo "<pre>";
		//print_r($result);
		//exit();

		if($result){
			Session::put('fname', $result->user_fname);
			Session::put('lname', $result->user_lname);
			Session::put('id', $result->user_id);
			return redirect::to('/admin/dashboard');
		}
		else
		{
			Session::flash('red', 'Email or Password Invalid');
			return redirect::to('/admin');
		}
	
	}

	public function signout(){
		Session::put('fname', 	null);
		Session::put('lname', 	null);
		Session::put('id', 	null);
		Session::flash('green','Signout Successfully !!');
		return redirect::to('/admin');
	}
}
