<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
  <div class="app-sidebar__user" style="background: #000; margin: 0px; margin-top:-1.5em;">
    <div>
      <p class="app-sidebar__user-name">{{Auth::user()->Name}}</p>
      <p class="app-sidebar__user-designation">ADMINISTRATEUR</p>
    </div>
  </div>
  <ul class="app-menu">
    <li><a class="app-menu__item active" href="{{route('home')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">TABLEAU DE BORD</span></a></li>
    <style>
      /* The container <div> - needed to position the dropdown content */
      .dropdown {
        position: relative;
        display: inline-block;
      }

      /* Dropdown Content (Hidden by Default) */
      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }

      /* Links inside the dropdown */
      .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }

      /* Show the dropdown menu on hover */
      .dropdown:hover .dropdown-content {display: block;}
    </style>
    {{-- <div class="dropdown">
      <li><a class="app-menu__item dropbtn" href="#"><i class="app-menu__icon fa fa-pencil"></i><span class="app-menu__label">Plan et coût de construction</span></a></li>
      <div class="dropdown-content">
        <a href="/managment/groupOri/dimensionTerrain">Par dimensions de terrains</a>
        <a href="/managment/groupOri/TypeProjet">Par type de projet</a>
      </div>
    </div> --}}

    <li><a class="app-menu__item" href="/managment/groupOri/ModelOfHouse"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label">Nos modèles de maison</span></a></li>

    <!--<li><a class="app-menu__item" href="/managment/groupOri/construction"><i class="app-menu__icon fa fa-file"></i><span class="app-menu__label">Constructions</span></a></li>-->

    <li><a class="app-menu__item" href="/managment/groupOri/realisations"><i class="app-menu__icon fa fa-file"></i><span class="app-menu__label">Réalisations</span></a></li>

    <li><a class="app-menu__item" href="/managment/groupOri/offre"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label">Offre spéciale</span></a></li>

   {{--  <li><a class="app-menu__item" href="/managment/groupOri/temoignage"><i class="app-menu__icon fa fa-file"></i><span class="app-menu__label">Témoignages</span></a></li> --}}

    <li><a class="app-menu__item" href="/managment/groupOri/message"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Messages</span></a></li>
    <br>
    <li><a class="app-menu__item" target="_blank" href="/"><i class="app-menu__icon fa fa-globe"></i><span class="app-menu__label">SITE INTERNET</span></a></li>
  </ul>
</aside>