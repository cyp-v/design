@section('title', 'créer un projet')

@extends('layouts.master')

@section('lead_content')
	<div class="admin_lead">
		<h2 class="center-align">créer un nouveau projet</h2>
	</div>
@endsection

@section('content')

	<section class="row">
      <div class="col l12">
        <div class="row card-panel cyan accent-4">
			<form id="project_form" action="{{ route('project.store') }}" method="post" class="white-text col l12">
			{{csrf_field()}}
				<!-- title -->
				<div class="row"> 
					<div class="input-field">
						<input id="title" name="title" type="text" class="col l11">
						<label for="title">titre</label>				
					</div>
				</div>
				<!-- excerpt -->
				<div class="row"> 
					<div class="input-field">
						<textarea name="excerpt" id="excerpt" cols="30" rows="5" data-length="120" class="col l11"></textarea>
						<label for="excerpt">résumé</label>				
					</div>
				</div>
				<!-- objective -->
				<div class="row"> 
					<div class="input-field">
						<textarea name="objective" id="objective" cols="30" rows="5" data-length="120" class="col l11"></textarea>
						<label for="objective">objectif</label>				
					</div>
				</div>
				<!-- country -->
				<div class="row"> 
					<div class="input-field">
						<input id="country" name="country" type="text" class="col l11">
						<label for="country">pays</label>			
					</div>
				</div>
				<!-- tags -->
				<div class="row"> 
					<div class="input-field">
						<select multiple name="tag[]" id="tags" class="col l11">
							<option value="" disabled selected>choisir un (ou des) sujet(s)</option>
							@foreach($tags as $id => $tag)
								<option value="{{ $id }}">{{ $tag }}</option>
							@endforeach
						</select>
						<label for="tags">sujets abordés</label>				
					</div>
				</div>
				<!-- population -->
				<div class="row"> 
					<div class="input-field">
						<textarea name="population" id="population" cols="30" rows="5" data-length="120" class="col l11"></textarea>
						<label for="population">population concernée</label>				
					</div>
				</div>
				<!-- progression -->
				<div class="row"> 
					<div class="input-field">
						<select name="progresssion" id="progression" class="col l11">
								<option value="{{ $id }}">En attente de réalisation</option>
								<option value="{{ $id }}">A donné lieu à réalisation</option>
						</select>
						<label for="progression">état d'avancement du projet</label>				
					</div>
				</div>
				<!-- progression_details -->
				<div class="row"> 
					<div class="input-field">
						<textarea name="progression_details" id="progression_details" cols="30" rows="5" data-length="120" class="col l11"></textarea>
						<label for="progression_details">détails sur l'avancement du projet</label>				
					</div>
				</div>
				<!-- starting_date -->
				<div class="row"> 
					<div class="input-field">
						<input id="starting_date" name="starting_date" type="date" class="datepicker col l11">
						<label for="starting_date">date de lancement du projet</label>			
					</div>
				</div>
				<!-- context -->
				<div class="row"> 
					<div class="input-field">
						<textarea name="context" id="context" cols="30" rows="5" data-length="120" class="col l11"></textarea>
						<label for="context">contexte</label>				
					</div>
				</div>
				<!-- brief -->
				<div class="row"> 
					<div class="input-field">
						<textarea name="brief" id="brief" cols="30" rows="5" data-length="120" placeholder="la commande adressée aux concepteurs du projet" class="col l11"></textarea>
						<label for="brief">brief</label>				
					</div>
				</div>
				<!-- methodology -->
				<div class="row"> 
					<div class="input-field">
						<textarea name="methodology" id="methodology" cols="30" rows="5" data-length="120" class="col l11"></textarea>
						<label for="methodology">méthodologie</label>				
					</div>
				</div>
				<!-- contributors -->
				<div class="row"> 
					<div class="input-field">
						<textarea name="contributors" id="contributors" cols="30" rows="5" data-length="120" placeholder="designer (insister sur son rôle spécifique) / commanditaire / partenaires techniques, financiers, commerciaux..." class="col l11"></textarea>
						<label for="contributors">intervenants</label>				
					</div>
				</div>
				<!-- conception -->
				<div class="row"> 
					<div class="input-field">
						<textarea name="conception" id="conception" cols="30" rows="5" data-length="120" placeholder="caractéristiques techniques, esthétiques, humaines, commerciales, performances atteintes, avantages par rapport à l'offre antérieure" class="col l11"></textarea>
						<label for="conception">conception / fabrication du mixte produit-service</label>				
					</div>
				</div>
				<!-- status -->
				<div class="row"> 
					<div class="input-field col l11">
						<input type="checkbox" id="status" name="status">
						<label for="status">publier ce projet</label>
					</div>
				</div>
				<!-- priority -->
				<div class="row"> 
					<div class="input-field col l11">
						<input type="checkbox" id="priority" name="priority">
						<label for="priority">diffuser ce projet prioritairement</label>
					</div>
				</div>
				<!-- submit -->
				<div class="row"> 
					<div class="input-field col l10 offset-l1">
						<button class="btn waves-effect waves-light col l12 cyan darken-2 lowercase" type="submit" name="action">
							valider
	  					</button>
					</div>
				</div>
			</form>
        </div>

      </div>
    </section>

@endsection