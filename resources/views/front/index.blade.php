@extends('layouts.master')

@section('title', 'Home')

@section('lead_content')
	<div class="row">
		<h2 class="center-align">redessinons le quotidien de ceux qui en ont le plus besoin</h2>
		<div>
			<i class="large material-icons col l1 offset-l5">replay</i>
		</div>
	</div>
@endsection

@section('content')

	<div class="row">	
		<h2>le design social au service des hommes partout dans le monde.</h2>
	</div>

	<section class="row">
		<h5>les actus</h5>
		@foreach ($topics as $topic)
			<div class="thumbnail col l3">
				<a href=""><img src="{{ url('img/projets_and_topics/thumbnails', $topic->thumbnail_link) }}" alt="news thumbnail image"></a>
			</div>
		@endforeach
		<div class="thumbnail col l3 valign-wrapper">
			<span class="see_more valign center-align">+</span>
		</div>
	</section>

	<section class="row">
		<h5>projets à la une</h5>
		@foreach ($projects as $project)
			<div class="thumbnail col l3">
				<a href=""><img src="{{ url('img/projets_and_topics/thumbnails', $project->thumbnail_link) }}" alt="project thumbnail image"></a>
			</div>
		@endforeach
	<div class="thumbnail col l3 valign-wrapper">
		<span class="see_more valign center-align">+</span>
	</div>
	</section>

	<section class="row">
		<h2>notre association se donne pour mission de promouvoir l'étude et la pratique du design social.</h2>
		<div class="row">
			<a href="" class="framed_link pink_link col l4 offset-l4 center-align">en savoir plus</a>
		</div>
	</section>

	<section class="row">
		<h2>designers, architetes, bénévoles...<br>
		venez découvrir comment soutenir le design social.</h2>
		<div class="row">
			<a href="" class="framed_link light_blue_link col l4 offset-l4 center-align">ça m'intéresse</a>
		</div>
	</section>

	<section class="row">
		<h2>ils nous soutiennent</h2>
		<div class="row frontpage_supports">
			<a href="" class="col l3"><img src="{{ url('img/supports_thumbnails/mcc.png') }}" alt=""></a>
			<a href="" class="col l3"><img src="{{ url('img/supports_thumbnails/medde.png') }}" alt=""></a>
			<a href="" class="col l3"><img src="{{ url('img/supports_thumbnails/mexico.png') }}" alt=""></a>
			<a href="" class="col l3"><img src="{{ url('img/supports_thumbnails/strate.jpg') }}" alt=""></a>
		</div>

	</section>

@endsection