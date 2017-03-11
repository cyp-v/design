<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Partageons le Design | @yield('title')</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" href="{{ URL::asset('css/style_desktop.css') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

	<header class="g-b_gradient">
		@section('nav')
        	@include('partials.nav')
        @show
        @section('lead')
        	@yield('lead_content')
        @show
	</header>

	<div class="container">
		@yield('content')
	</div>
	
	<footer class="g-b_gradient_reverse">
		@section('footer')
			@include('partials.footer')
		@show
	</footer>
	
	
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <script src="{{ URL::asset('js/design.js') }}"></script>

</body>
</html>