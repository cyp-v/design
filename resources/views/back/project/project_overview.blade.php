
<div class="modal-content">

<!-- header -->	
	<div class="g-b_gradient white-text lowercase">

		<div class="container valign-wrapper">
			<div class="row">
				<h2>{{ $project->title }}</h2>
				<h4>{{ $project->objective }}</h4>
			</div>
		</div>

	</div>

<!-- content -->

	<div class="container">
		
		<div class="row">
			<div class="col l6">
				<img src="{{ url('img/projets_and_topics', $project->pictures->first()->link) }}" alt="{{ $project->title }}" class="col l12">
				<small>
					tags: 
					@forelse($project->tags as $tag)
						{{ ''.$tag->title.'/' }}
					@empty
						non classé
					@endforelse
				</small>
			</div>
			<div class="col l6">
				<h2>contexte</h2>
				<p>{{ $project->context }}</p>
			</div>	
		</div>
		<div class="row">
			<div class="col l2 valign-wrapper">
				<i class="material-icons medium">my_location</i>
			</div>
			<div class="col l10">
				<h2>brief</h2>
				<p>{{ $project->brief }}</p>
			</div>
		</div>
		<div class="row">
			<div class="col l2 valign-wrapper">
				<i class="material-icons medium">search</i>
			</div>
			<div class="col l10">
				<h2>solution</h2>
				<p>{{ $project->conception }}</p>
			</div>
		</div>
		<div class="row">
			<div class="col l2 valign-wrapper">
				<i class="material-icons medium">supervisor_account</i>
			</div>
			<div class="col l10">
				<h2>intervenants</h2>
				<p>{{ $project->contributors }}</p>
			</div>
		</div>

	{{-- 	@if( count($project->project_link) > 0 ) --}}
			<div class="row">
				<div class="right">
					<h5 class="">en savoir plus</h5>
					<p class=""><a href="{{ $project->project_link }}"> {{ $project->project_link }} </a></p>	
				</div>
				
			</div>
	{{-- 	@endif --}}

	</div>

</div> <!-- end modal-content -->

<!-- footer -->
<div class="modal-footer">
	<div>
		<a href="#!" class="col l2 modal-action modal-close waves-effect waves-light btn right cyan darken-2 lowercase">fermer</a>
	</div>	
</div>