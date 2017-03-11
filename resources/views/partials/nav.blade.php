<nav class="transparent">
  <div class="nav-wrapper">
    <a href="{{route('home')}}" class="brand-logo">partageons le design</a>
    <ul id="nav-mobile" class="medium right hide-on-med-and-down">
      <li><a href="{{ route('projects_all') }}"><i class="material-icons left">visibility</i>les projets</a></li>
      <li><a href="{{ route('project.create') }}"><i class="large material-icons left">system_update_alt</i>proposer un projet</a></li>
      <li><a href="#!" class="dropdown-button" data-activates="burger_menu"><i class="material-icons">menu</i></a></li>
        <ul id="burger_menu" class="dropdown-content">
          <li><a href="{{ route('social_design') }}">le design social</a></li>
          <li><a href="{{ route('topics_all') }}">actualités</a></li>
          <li><a href="{{ route('projects_all') }}">les projets</a></li>
          <li><a href="{{ route('association') }}">l'association</a></li>
          <li><a href="{{ route('get_involved') }}">vous impliquer</a></li>
          <li><a href="{{ route('contact') }}">contact</a></li>
        </ul>

      @if(auth()->check())
        <li><a href="#!" class="dropdown-button" data-activates="user_menu"><i class="material-icons">perm_identity</i></a></li>

          <ul id="user_menu" class="dropdown-content">
          @if($user->isAdmin())
            <li><a href="{{ route('project.index') }}">éditer les projets</a></li>
            <li><a href="{{ route('topic.index') }}">éditer les actualités</a></li>
          @else
            <li><a href="{{ route('project.index') }}">mes projets</a></li>
          @endif
            <li><a href="{{ route('profile.index') }}">mon profil</a></li>
            <li class="divider"></li>
            <li><a href="{{ route('logout') }}">déconnexion</a></li>
          </ul>

      @else
        <li><a href="#!" class="dropdown-button" data-activates="user_menu"><i class="material-icons">power_settings_new</i></a></li>
          <ul id="user_menu" class="dropdown-content">
            <li><a href="{{ route('login') }}">connexion</a></li>
          </ul>
      @endif

    </ul>
  </div>
</nav>