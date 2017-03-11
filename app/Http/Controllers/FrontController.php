<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Project;
use App\Topic;
use App\User;
use App\Tag;
use Auth;

class FrontController extends Controller
{
    public function index() //page d'accueil
    {
        $user = Auth::user();
    	$topics = DB::table('topics')->where('status', 'published')->latest()->limit(7)->get();
    	$projects = DB::table('projects')->where('status', 'published')->latest()->limit(3)->get();

    	return view('front.index', compact('user', 'topics', 'projects'));
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

    public function showProjectsByTag($id) //page du tag sélectionné
    {
    	$tag = Tag::find($id);
    	$title = $tag->title;
        $projects = $tag->projects()->where('status', 'published')->latest()->get();
        
        return view('front.projects_tag', compact('title', 'projects')); 
    }

    public function showProjectsByUser($id) //page des projets de l'auteur sélectionné
    {
        $user = User::find($id);
        $name = $user->name;
        $projects = $user->projects()->where('status', 'published')->latest()->get();

        return view('front.projects_user', compact('name', 'projects'));
    }

    public function showAssociation() //page "l'association"
    {
        return view('front.organisation');
    }

    public function showGetInvolved() //page "vous impliquer"
    {
        return view('front.get_involved');
    }

    public function showContact() //page "contact"
    {   
        return view('front.contact');
    }
}