@section('title', 'projects')

@extends('layouts.master')

@section('lead_content')
	<div class="admin_lead">
		<h2 class="center-align">{{ $user->isAdmin() ? 'éditer les projets' : 'mes projets' }}</h2>
		@if($user->isAdmin())
		<p class="center-align">ici vous pouvez voir <i class="material-icons tiny">visibility</i> , modifier <i class="material-icons tiny">mode_edit</i>, publier <i class="material-icons tiny">done</i> ou supprimer <i class="material-icons tiny">delete</i> tous les projets existants.</p>
		@endif
	</div>
@endsection

@section('content')

	<div class="row">
	  <div class="container flash">
		@if($flash = session('flashMessage'))
		    <div class="col s12">
		      {{$flash}}
		    </div>
		@endif
	  </div>
	</div>

	<div class="row">
		<a href="{{route('project.create')}}" class="waves-effect waves-light btn left cyan darken-2 lowercase"><i class="material-icons left tiny">system_update_alt</i>nouveau projet</a>
		<a href="{{route('topic.index')}}" class="waves-effect waves-light btn right cyan darken-2 lowercase"><i class="material-icons right tiny">send</i>éditer les actualités</a>
	</div>

	<div class="center-align">
		{{ $projects->links() }}
	</div>

	<section class="row">
	    <div class="col l12">
	    	<div class="row card-panel cyan accent-4">
	    		<div class="col l12">
	    			<div class="row">
						<table class="striped">
							<thead class="white-text">
								<tr>
									<th data-field="thumbnail_link"></th>
									<th data-field="title">titre</th>
									<th data-field="user_id">auteur</th>
									<th data-field="tags">sujets</th>
									<th data-field="published_at">publication</th>
									<th data-field="action"></th>
								</tr>
							</thead>

							<tbody>

							@foreach($projects as $project)
								@can('view', $project)
									<tr>
										<td><img src="{{ url('img/projets_and_topics/thumbnails/', $project->thumbnail_link) }}" alt="" class="table_picture"></td>
										<td>{{ $project->title }}</td>
										<td>{{ $project->user->name }}</td>
										<td>
											@forelse($project->tags as $tag)
												{{$tag->title}}
											@empty
											@endforelse
										</td>
										<td>
											@if($project->published_at == null)
												<form action="{{ route('project.store') }}" method="post" class="checkable white-text col l12">
												{{csrf_field()}}
											      <input type="checkbox" id="publish" name="published_at" {{ $project->status == 'published' ? 'checked' : '' }}/>
											      <label for="publish">Publier?</label>
												</form>
											@else
												{{ $project->published_at }}
											@endif
										</td>
										<td>
											<button data-target="{{ 'modal'.$project->id }}" class="waves-effect waves-light btn cyan darken-2 lowercase"><i class="material-icons tiny">visibility</i></a></button>
											@can('update', $project)
												<a href="{{ route('project.edit', $project->id) }}" class="waves-effect waves-light btn cyan darken-2 lowercase"><i class="material-icons tiny">mode_edit</i></a>
											@endcan
											@can('delete', $project)
												<a href="{{ route('project.destroy', $project->id) }}" class="waves-effect waves-light btn cyan darken-2 lowercase"><i class="material-icons tiny">delete</i></a>
											@endcan
										</td>
									</tr>
								@endcan
							@endforeach

							</tbody>
						</table>

	    			</div>
	    		</div>
	        </div>
	    </div>
    </section>


	<div class="center-align">
		{{ $projects->links() }}
	</div>

@endsection




<!-- MODAL -->

@foreach($projects as $project)
	<div id="{{'modal'.$project->id}}" class="modal modal-fixed-footer">
		@include('back.project.project_overview')
	</div>
@endforeach

<!-- END MODAL -->


