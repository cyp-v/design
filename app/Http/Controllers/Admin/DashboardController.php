<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function showDashboard()
    {
    	$user = Auth::user();
    	$name = $user->name;
    	$userdetails = $user->userdetails;
    	$thumbnail = '';

    	if ( is_null($userdetails) ) 
    	{
    		$thumbnail = 'default_user.png';
    	
    	}else{

    		$thumbnail = $userdetails->thumbnail_link;
    	}

    	return view( 'back.dashboard', compact('user', 'name', 'thumbnail') );
    }
}
