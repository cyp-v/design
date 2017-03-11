<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
	public function showLogin(Request $request)
  	{
  		if ($request->isMethod('post') == true) 
  		{
  			$this->validate($request,[
        		'name' => 'required',
        		'password' => 'required'
        	]);

      		$credentials = $request->only('name', 'password');
      		$remember = true;
      
      		if(Auth::attempt($credentials, $remember))
      		{
        		return redirect()->intended('admin/dashboard');

      		}else{

      			return back()->withInput($request->only('email')); //redirige vers la page login
      		}
    	}

    	return view('auth.login');
  	} //end showDashboard
  
	public function logout()
  	{
    	auth()->logout();

    	return redirect()->route('home');
  	} //end logout

}
