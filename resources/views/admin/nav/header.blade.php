<header class="app-header"><a class="app-header__logo" style="font-family: Arial" href="{{route('home')}}"></a>
  <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
  <!-- Navbar Right Menu-->
  <ul class="app-nav">

    <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
      <ul class="dropdown-menu settings-menu dropdown-menu-right">

        <li><a href="#" class="dropdown-item" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">                   
        <i class="fa fa-sign-out fa-lg"></i> Déconnexion
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}
        </form>
      </a></li>
    </ul>
  </li>
</ul>
</header>