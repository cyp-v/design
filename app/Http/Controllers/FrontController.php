<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Project;
use App\Topic;
use App\User;
use App\Tag;

class FrontController extends Controller
{
    public function index()
    {
    	$topics = DB::table('topics')->where('status', 'published')->latest()->limit(7)->get();
    	$projects = DB::table('projects')->where('status', 'published')->latest()->limit(3)->get();

    	return view('front.index', compact('topics', 'projects'));
    }

}
