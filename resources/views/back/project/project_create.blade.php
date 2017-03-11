@section('title', 'créer un projet')

@extends('layouts.master')

@section('lead_content')
	<div class="admin_lead">
		<h2 class="center-align">créer un nouveau projet</h2>
	</div>
@endsection

@section('content')

	@if(count($errors) > 0)
	    <div class="alert alert-danger">
	      <p>un erreur est survenue dans le formulaire</p>
	    </div>
	@endif

	<p>les champs marqués d'un <span class="compulsory black-text">*</span> sont obligatoires.</p>

	<section class="row">
    	<div class="col l12">
	        <div class="row card-panel cyan accent-4">
				<form id="project_form" action="{{ route('project.store') }}" method="post" class="white-text col l12">
				{{csrf_field()}}
					<!-- title -->
					<div class="row"> 
						<div class="input-field">
							<input id="title" name="title" type="text" value="{{old('title')}}" data-length="100" class="col l11">
							<label for="title">titre</label>
							<div class="col l1">
								<span class="compulsory">*</span>
							</div>				
						</div>
					</div>
					@if($errors->has('title')) <p>{{$errors->first('title')}}</p>@endif
					<!-- excerpt -->
					<div class="row"> 
						<div class="input-field">
							<textarea name="excerpt" id="excerpt" cols="30" rows="5" data-length="150" class="col l11">
								{{old('except')}}
							</textarea>
							<label for="excerpt">accroche</label>
							<div class="col l1">
								<span class="compulsory">*</span>
							</div>				
						</div>
					</div>
					@if($errors->has('excerpt')) <p>{{$errors->first('excerpt')}}</p>@endif
					<!-- objective -->
					<div class="row"> 
						<div class="input-field">
							<textarea name="objective" id="objective" cols="30" rows="5" data-length="500" class="col l11">
								{{old('objective')}}
							</textarea>
							<label for="objective">objectif</label>	
							<div class="col l1">
								<span class="compulsory">*</span>
							</div>			
						</div>
					</div>
					@if($errors->has('objective')) <p>{{$errors->first('objective')}}</p>@endif
					<!-- country -->
					<div class="row"> 
						<div class="input-field">
							<input id="country" name="country" type="text" value="{{old('country')}}" data-length="100" class="col l11">
							<label for="country">pays</label>			
						</div>
						<div class="col l1">
							<span class="compulsory">*</span>
						</div>
					</div>
					@if($errors->has('country')) <p>{{$errors->first('country')}}</p>@endif
					<!-- tags -->
					@if($user->isAdmin()) 
						<div class="row">
							<div class="input-field">
								<select multiple name="tag[]" id="tags" value="{{$id}}" class="col l11">
									<option value="" disabled selected>choisir un (ou des) sujet(s)</option>
									@foreach($tags as $id => $tag)
										<option value="{{ $id }}">{{ $tag }}</option>
									@endforeach
								</select>
								<label for="tags">sujets abordés</label>				
							</div>
						</div>
					@endif
					@if($errors->has('tags')) <p>{{$errors->first('tags')}}</p>@endif
					<!-- population -->
					<div class="row"> 
						<div class="input-field">
							<input id="population" name="population" type="text" value="{{old('population')}}" class="col l11">	
							<label for="population">population concernée</label>				
						</div>
					</div>
					@if($errors->has('population')) <p>{{$errors->first('population')}}</p>@endif
					<!-- progression -->
					<div class="row"> 
						<div class="input-field">
							<select name="progresssion" id="progression" class="col l11">
									<option value="En attente de réalisation">en attente de réalisation</option>
									<option value="A donné lieu à réalisation">a donné lieu à réalisation</option>
							</select>
							<label for="progression">état d'avancement du projet</label>				
						</div>
					</div>
					@if($errors->has('progression')) <p>{{$errors->first('progression')}}</p>@endif
					<!-- progression_details -->
					<div class="row"> 
						<div class="input-field">
							<textarea name="progression_details" id="progression_details" cols="30" rows="5" data-length="400" class="col l11">
								{{old('progression_details')}}
							</textarea>
							<label for="progression_details">détails sur l'avancement du projet</label>				
						</div>
					</div>
					@if($errors->has('progression_details')) <p>{{$errors->first('progression_details')}}</p>@endif
					<!-- starting_date -->
					<div class="row"> 
						<div class="input-field">
							<input id="starting_date" name="starting_date" type="date" class="datepicker col l11">
							<label for="starting_date">date de lancement du projet</label>			
						</div>
					</div>
					@if($errors->has('starting_date')) <p>{{$errors->first('starting_date')}}</p>@endif
					<!-- context -->
					<div class="row"> 
						<div class="input-field">
							<textarea name="context" id="context" cols="30" rows="5" data-length="400" class="col l11">
								{{old('context')}}
							</textarea>
							<label for="context">contexte</label>				
						</div>
					</div>
					@if($errors->has('context')) <p>{{$errors->first('context')}}</p>@endif
					<!-- brief -->
					<div class="row"> 
						<div class="input-field">
							<textarea name="brief" id="brief" cols="30" rows="5" data-length="1000" placeholder="la commande adressée aux concepteurs du projet" class="col l11">
								{{old('brief')}}
							</textarea>
							<label for="brief">brief</label>				
						</div>
					</div>
					@if($errors->has('brief')) <p>{{$errors->first('brief')}}</p>@endif
					<!-- methodology -->
					<div class="row"> 
						<div class="input-field">
							<textarea name="methodology" id="methodology" cols="30" rows="5" data-length="1000" class="col l11">
								{{old('methodology')}}
							</textarea>
							<label for="methodology">méthodologie</label>				
						</div>
					</div>
					@if($errors->has('methodology')) <p>{{$errors->first('methodology')}}</p>@endif
					<!-- contributors -->
					<div class="row"> 
						<div class="input-field">
							<textarea name="contributors" id="contributors" cols="30" rows="5" data-length="400" placeholder="designer (insister sur son rôle spécifique) / commanditaire / partenaires techniques, financiers, commerciaux..." class="col l11">
								{{old('contributors')}}
							</textarea>
							<label for="contributors">intervenants</label>				
						</div>
					</div>
					@if($errors->has('contributors')) <p>{{$errors->first('contributors')}}</p>@endif
					<!-- conception -->
					<div class="row"> 
						<div class="input-field">
							<textarea name="conception" id="conception" cols="30" rows="5" data-length="1500" placeholder="caractéristiques techniques, esthétiques, humaines, commerciales, performances atteintes, avantages par rapport à l'offre antérieure" class="col l11">
								{{old('conception')}}
							</textarea>
							<label for="conception">conception / fabrication du mixte produit-service</label>				
						</div>
					</div>
					@if($errors->has('conception')) <p>{{$errors->first('conception')}}</p>@endif
					<!-- supports -->
					<div class="row"> 
						<div class="input-field">
							<input id="supports" name="supports" type="text" value="{{old('supports')}}" class="col l5">	
							<label for="supports">soutiens / partenaires du projet</label>				
						</div>
						<div class="col l6">
							<div class="row">
								<div class="file-field input-field col l12">
									<div class="btn waves-effect waves-light cyan darken-2">
										<span>ouvrir</span>
										<input type="file" multiple>
									</div>
									<div class="file-path-wrapper">
										<input id="support_links" name="support_links" class="file-path validate col l12" type="text" placeholder="choisir des images">
										<label for="support_links">logos des partenaires</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					@if($errors->has('supports')) <p>{{$errors->first('supports')}}</p>@endif
					<!-- thumbnail_image -->
					@if($user->isAdmin())
						<div class="row">
						    <div class="file-field input-field col l11">
								<div class="btn waves-effect waves-light cyan darken-2 col l1">
									<span>ouvrir</span>
									<input type="file">
								</div>
								<div class="file-path-wrapper">
									<input id="thumbnail_image" name="thumbnail_image" class="file-path validate col l12" type="text" placeholder="cette image apparaitra en page d'accueil">
									<label for="thumbnail_image">image d'onglet</label>
								</div>
						    </div>
						</div>
					@endif
					@if($errors->has('thumbnail_image')) <p>{{$errors->first('thumbnail_image')}}</p>@endif
					<!-- pictures -->
					<div class="row">
					    <div class="file-field input-field col l11">
							<div class="btn waves-effect waves-light cyan darken-2 col l1">
								<span>ouvrir</span>
								<input type="file" multiple>
							</div>
							<div class="file-path-wrapper">
								<input id="pictures" name="pictures" class="file-path validate col l12" type="text" placeholder="ces images apparaitrons dans la page du projet">
								<label for="pictures">images</label>
							</div>
					    </div>
					</div>
					@if($errors->has('pictures')) <p>{{$errors->first('pictures')}}</p>@endif
					<!-- project_link -->
					<div class="row"> 
						<div class="input-field">
							<input id="project_link" name="project_link" type="text" value="{{old('project_link')}}" class="col l11">
							<label for="project_link">site web du projet</label>				
						</div>
					</div>
					@if($errors->has('project_link')) <p>{{$errors->first('project_link')}}</p>@endif
					<!-- video_link -->
					<div class="row"> 
						<div class="input-field">
							<input id="video_link" name="video_link" type="text" value="{{old('video_link')}}" class="col l11">
							<label for="video_link">lien vidéo</label>				
						</div>
					</div>
					@if($errors->has('video_link')) <p>{{$errors->first('video_link')}}</p>@endif
					<!-- status -->
					@if($user->isAdmin())
						<div class="row"> 
							<input type="checkbox" id="status" name="status" {{ (!empty(old('status')) ) ? 'checked' : '' }} value="on">
							<label for="status">publier ce projet</label>
						</div>
						@if($errors->has('status')) <p>{{$errors->first('status')}}</p>@endif
						<!-- priority -->
						<div class="row"> 
							<input type="checkbox" id="priority" name="priority" {{ (!empty(old('priority')) ) ? 'checked' : '' }} value="on">
							<label for="priority">diffuser ce projet prioritairement</label>
						</div>
						@if($errors->has('priority')) <p>{{$errors->first('priority')}}</p>@endif
					@endif
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