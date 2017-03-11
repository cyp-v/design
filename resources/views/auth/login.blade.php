@section('title', 'connexion')

@extends('layouts.master')

@section('lead_content')
	<div class="admin_lead">
		<h2 class="center-align">connexion</h2>
	</div>
@endsection

@section('content')

	<section class="row">
      <div class="col l6 offset-l3">
        <div class="row card-panel cyan accent-4">
			<form action="{{ route('login') }}" method="post" class="white-text col l12">
			{{csrf_field()}}
				<div class="row">
					<div class="input-field col l10 offset-l1">
						<input id="username" name="name" type="text">
						<label for="username">nom</label>				
					</div>
				</div>
				<div class="row">
					<div class="input-field col l10 offset-l1">
						<input id="password" name="password" type="text">
						<label for="password">mot de passe</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col l5 offset-l1">
						<input type="checkbox" id="remember" name="remember">
						<label for="remember">se souvenir de moi</label>
					</div>
					<div class="input-field col l4 offset-l1">
						<a href="#" class="input_link">mot de passe oublié?</a>
					</div>
				</div>
				<div class="row">
					<div class="input-field col l10 offset-l1">
						<button class="btn waves-effect waves-light col l12 cyan darken-2 lowercase" type="submit" name="action">
							me connecter
	  					</button>
					</div>
				</div>
			</form>
        </div>

        <div class="row card-panel grey lighten-5">
				<div class="row">
					<h5 class="center-align">pas encore inscrit?</h5>
					<p class="center-align">vous souhaitez proposer un projet de design social et solidaire</p>
				</div>
				<div class="row">
						<button class="btn waves-effect waves-light col l10 offset-l1 cyan darken-2 lowercase" type="submit" name="action">
							inscription
	  					</button>
					</div>
				</div>
        </div>
      </div>
    </section>

@endsection

