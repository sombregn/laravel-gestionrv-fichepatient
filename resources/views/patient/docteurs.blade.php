<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Liste docteurs</title>

    <!-- Bootstrap -->
    <link href={{ asset('templateDashboard/vendors/bootstrap/dist/css/bootstrap.min.css') }} rel="stylesheet">

    <!-- Font Awesome -->
    <link href={{ asset('templateDashboard/vendors/font-awesome/css/font-awesome.min.css') }} rel="stylesheet">

    <!-- NProgress -->
    <link href={{ asset('templateDashboard/vendors/nprogress/nprogress.css') }} rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href={{ asset('templateDashboard/build/css/custom.min.css') }} rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            @include('layouts.sidebarpat')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="{{ asset(Auth::user()->photo) }}" alt="">{{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"  href="/profile"> Profile</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    <i class="fa-solid fa-right-from-bracket"></i> {{ __('Se deconnecter') }}
                                </x-dropdown-link>
                            </form>
                    </div>
                  </li>

                  <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-green">6</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <div class="text-center">
                          <a class="dropdown-item">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Departement {{ $departement->nom }}</h3>
                <h6>Description : {{ $departement->description }}</h6>
                <h6>Services proposés : {{ $departement->services_offerts }}</h6>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                  <div class="input-group">
                    <form action="{{ route('dashboard.search') }}" method="GET" class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Rechercher...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="subit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </span>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <div class="row">
                <div class="x_panel">
                  <div class="x_content">
                      <div class="col-md-12 col-sm-12  text-center">
                        <h2>Liste de docteurs</h2>
                      </div>

                      <div class="clearfix"></div>
                      @forelse ( $departement->docteurs as $docteur)
                      <div class="col-md-4 col-sm-4  profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <div class="left col-sm-7">
                              <h2>{{ $docteur->user->name }}</h2>
                              <p><strong>Sépcialité: </strong> {{ $docteur->specialite }} </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i> disponible à :{{ $docteur->horaires_de_consultation }} </li>
                                <li><i class="fa fa-phone"></i> Tel: {{ $docteur->user->telephone }} </li>
                              </ul>
                            </div>
                            <div class="right col-sm-5 text-center">
                              <img src="{{ asset($docteur->user->photo) }}" alt="" class="img-circle img-fluid">
                            </div>
                          </div>
                          <div class=" bottom text-center">
                            <div class=" col-sm-6 emphasis">
                              <p class="ratings">
                                <a>4.0</a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                            </div>
                            <div class=" col-sm-6 emphasis">
                              <button type="button" class="btn btn-success btn-sm"> <i class="fa fa-user">
                                </i> <i class="fa fa-comments-o"></i> </button>
                                <a href="#rdv" class="btn btn-primary prendre-rendezvous-btn" data-doctor-id="{{ $docteur->id }}" data-toggle="modal">Prendre rendez-vous</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      @empty
                            <div class="text-center">
                                <p class="text-center" style="font-weight:600; font-size:25px;">Aucun docteur disponible!</p>
                            </div>
                      @endforelse
                </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <!-- /footer content -->
      </div>
    </div>
    <div class="modal fade " id="rdv" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
            <div class="modal-header bg-secondary">
              <h5 class="modal-title text-white " id="exampleModalLabel">Motif</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="" method="POST">
                @csrf
                <div class="modal-body">
                    <input type="text" name="motif" class="form-control">
                    <input  name="docteur_id" id="doctor_id" hidden>
                    <input  name="patient_id" value="{{ Auth::user()->patient->id }}" hidden>
               </div>
               <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-secondary">Envoyer</button>
               </div>
            </form>
          </div>
        </div>
      </div>

    <!-- jQuery -->
    <script src="/templateDashboard/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="/templateDashboard/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="/templateDashboard/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/templateDashboard/vendors/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/templateDashboard/build/js/custom.min.js"></script>

    <!--Récupérer l'ID du médecin lors du clic sur le bouton "Prendre rendez-vous"-->
    <script>
        var buttons = document.getElementsByClassName('prendre-rendezvous-btn');
        for (var i = 0; i < buttons.length; i++) {
          buttons[i].addEventListener('click', function() {
            var doctorId = this.getAttribute('data-doctor-id');
            document.getElementById('doctor_id').value = doctorId;
          });
        }
      </script>
  </body>
</html>
