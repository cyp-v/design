@section('title', 'tableau de bord')

@extends('layouts.master')

@section('lead_content')
	<div class="admin_lead">
		<h2 class="center-align">hello {{ $name }}!</h2>
	</div>
@endsection

@section('content')

	<section class="row">
	    <div class="col l6 offset-l3">
	    	<div class="row card-panel cyan accent-4">
	    		<div class="col l12">
	    			<div class="row">
	    				<div class="col l4 offset-l4">
	    					<img src="{{ url('img/users_thumbnails/'.$thumbnail) }}" alt="" class="profile_picture">
	    				</div>
	    			</div>

	    		@if($user->isAdmin())
	    			<div class="row">
						<a href="{{ route('project.index') }}" class="waves-effect waves-light btn col l12 cyan darken-2 lowercase">
							éditer les projets
						</a>
	    			</div>
	    			<div class="row">
						<a href="{{ route('topic.index') }}" class="waves-effect waves-light btn col l12 cyan darken-2 lowercase">
							éditer les actualités
						</a>	
	    			</div>
				@else	
	    			<div class="row">
						<a href="{{ route('project.index') }}" class="waves-effect waves-light btn col l12 cyan darken-2 lowercase">
							mes projets
						</a>
	    			</div>
				@endif
	    			<div class="row">
						<a href="{{ route('profile.show', $user->id) }}" class="waves-effect waves-light btn col l12 cyan darken-2 lowercase">
							mon profil
						</a>				
	    			</div>
	    			<div class="row">
						<a href="{{ route('logout') }}" class="waves-effect waves-light btn col l12 cyan darken-2 lowercase">
							déconnexion
						</a>
	    			</div>
	    		</div>
	        </div>
	    </div>
    </section>

@endsection