<div class="navbar nav_title" style="border: 0;">
    <a href="/dashboard" class="site_title"><i class="fa-sharp fa-solid fa-house-medical"></i> <span>HOPITAL APP</span></a>
  </div>

  <div class="clearfix"></div>

  <!-- menu profile quick info -->
  <div class="profile clearfix">
    <div class="profile_pic">
      <img src="{{ asset(Auth::user()->photo) }}" alt="..." class="img-circle profile_img">
    </div>
    <div class="profile_info">
      <span>Bonjour et bienvenue</span>
      <h2>{{ Auth::user()->name }}</h2>
    </div>
  </div>
  <br />
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <h3>Général</h3>
      <ul class="nav side-menu">
        <li><a><i class="fa fa-home"></i> Accueil <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="/dashboard">Tableau de Bord</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-edit"></i> Création et ajouts <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
          <li><a href="/ajoutpatientD">Patient</a></li>
          </ul>
      </li>
      <li><a><i class="fa fa-table"></i> Listes et gestion <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
              <li><a href="/listepatientD">Liste des patients</a></li>
              <li><a href="/listerendezvousD">Liste des rendez-vous</a></li>
          </ul>
      </li>
      <li>
        <a><i class="fa fa-envelope"></i> Messageries <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="/listemessages">Méssages reçus</a></li>
            <li><a href="/listerendezvousD">Méssages envoyés</a></li>
        </ul>
      </li>
    </div>
  </div>
  <!-- /sidebar menu -->
