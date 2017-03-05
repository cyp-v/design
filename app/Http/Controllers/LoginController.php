<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function authenticate()
    {
    	if(Auth::attempt(['email' => $email, 'password' => $password]))
    	{
    		// authentification réussie...
    		
    		return redirect()->intended('home');
    	}
    }
}
