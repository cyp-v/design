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
    public function index() //page d'accueil
    {
    	$topics = DB::table('topics')->where('status', 'published')->latest()->limit(7)->get();
    	$projects = DB::table('projects')->where('status', 'published')->latest()->limit(3)->get();

    	return view('front.index', compact('topics', 'projects'));
    }

    public function showSocialDesign() //page "le design social"
    {
    	return view('front.social_design');
    }

    public function showTopics() //page "toutes les news"
    {
    	$topics = DB::table('topics')->where('status', 'published')->latest()->limit(7)->get();
    	//poursuivre la requête à +7 résultats lorsqu'on clique sur "voir plus de résultats"
    	
    	return view('front.topics_all', ['topics' => $topics]);
    }

    public function showTopicById($id) //page de la news sélectionnée
    {
    	$topic = Topic::find($id);


    	if ($topic->status != 'published') 
    	{
    		abort(403, 'Accès non autorisé.');
    	}
    	return view('front.topic_single', ['topic' => $topic]);
    }

    public function showProjects() //page "tous les projets"
    {
    	$projects = DB::table('projects')->where('status', 'published')->latest()->limit(4)->get();
    	//poursuivre la requête à +4 résultats lorsqu'on clique sur "voir plus de résultats"
    	
    	return view('front.projects_all', ['projects' => $projects]);
    }

    public function showProjectById($id) //page du projet sélectionné
    {
    	$project = Project::find($id);

    	if ($project->status != 'published') 
    	{
    		abort(403, 'Accès non autorisé.');
    	}
    	return view('front.project_single', ['project' =>$project]);
    }

    public function showProjectsByTag($id)
    {
    	$tag = Tag::find($id);
    	$name = $tag->name->where
    	// $projects = DB::table('projects')->where('status', 'published')->latest()->limit(4)->get();
    }
}