<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ajout section</title>

        <!-- Bootstrap -->
        <link href="templateDashboard/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="templateDashboard/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="templateDashboard/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="templateDashboard/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- bootstrap-wysiwyg -->
        <link href="templateDashboard/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
        <!-- Select2 -->
        <link href="templateDashboard/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
        <!-- Switchery -->
        <link href="templateDashboard/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
        <!-- starrr -->
        <link href="templateDashboard/vendors/starrr/dist/starrr.css" rel="stylesheet">
        <!-- bootstrap-daterangepicker -->
        <link href="templateDashboard/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="templateDashboard/build/css/custom.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="/dashboard" class="site_title"><i class="fa-sharp fa-solid fa-house-medical"></i> <span>HOSPITAL APP</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Bonjour et bienvenue</span>
                                <h2>{{ Auth::user()->name; }}</h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>Général</h3>
                                <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i> Accueil <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                    <li><a href="/dashboard">Tableau de bord</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-edit"></i> Création et ajouts <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                    <li><a href="/ajoutservice">Services</a></li>
                                    <li><a href="/ajoutbatiment">Batiments</a></li>
                                    <li><a href="/ajoutdepartement">Département</a></li>
                                    <li><a href="/ajoutdocteur">Docteur</a></li>
                                    <li><a href="/ajoutpatient">Patient</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-table"></i> Listes et gestion <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="listeservices">Liste des services</a></li>
                                        <li><a href="/listebatiment">Liste des batiment</a></li>
                                        <li><a href="/listedepartement">Liste des departements</a></li>
                                        <li><a href="/listepatient">Liste des patients</a></li>
                                        <li><a href="/listedoctor">Liste des docteurs</a></li>
                                        <li><a href="/listerendezvous">Liste des rendez-vous</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-bar-chart-o"></i> Rapports et statistiques<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                    <li><a href="chartjs.html">Chart JS</a></li>
                                    <li><a href="chartjs2.html">Chart JS2</a></li>
                                    <li><a href="morisjs.html">Moris JS</a></li>
                                    <li><a href="echarts.html">ECharts</a></li>
                                    <li><a href="other_charts.html">Other Charts</a></li>
                                    </ul>
                                </li>
                            </div>
                            <div class="menu_section">
                                <h3>Live On</h3>
                                <ul class="nav side-menu">
                                <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                    <li><a href="e_commerce.html">E-commerce</a></li>
                                    <li><a href="projects.html">Projects</a></li>
                                    <li><a href="project_detail.html">Project Detail</a></li>
                                    <li><a href="contacts.html">Contacts</a></li>
                                    <li><a href="profile.html">Profile</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                    <li><a href="page_403.html">403 Error</a></li>
                                    <li><a href="page_404.html">404 Error</a></li>
                                    <li><a href="page_500.html">500 Error</a></li>
                                    <li><a href="plain_page.html">Plain Page</a></li>
                                    <li><a href="login.html">Login Page</a></li>
                                    <li><a href="pricing_tables.html">Pricing Tables</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="#level1_1">Level One</a>
                                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                                            </li>
                                            <li><a href="#level2_1">Level Two</a>
                                            </li>
                                            <li><a href="#level2_2">Level Two</a>
                                            </li>
                                        </ul>
                                        </li>
                                        <li><a href="#level1_2">Level One</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                                </ul>
                            </div>

                            </div>
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

                        </div>
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
                                <img src="images/img.jpg" alt="">{{ Auth::user()->name; }}
                            </a>
                            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item"  href="javascript:;"> Profile</a>
                                <a class="dropdown-item"  href="javascript:;">
                                    <span class="badge bg-red pull-right">50%</span>
                                    <span>Settings</span>
                                </a>
                            <a class="dropdown-item"  href="javascript:;">Help</a>
                                <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
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
                <div class="right_col" role="main" style="display: flex; flex-direction: column;">
                    <div class="">
                      <div class="page-title">
                        <div class="title_left">
                          <h3>Liste des rendez-vous</h3>
                        </div>

                        <div class="title_right">
                          <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Search for...">
                              <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>

                        <div class="col-md-12 col-sm-6  ">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Rendez-vous planifiés aujourd'hui</h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#">Settings 1</a>
                                      <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                              </ul>
                              <div class="clearfix"></div>
                            </div>

                            <div class="x_content">
                              <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>Heure</th>
                                    <th>Motif</th>
                                    <th >Docteur</th>
                                    <th >Patient</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @forelse ($RendezVousAujourdhui as $rdva)
                                        <tr>
                                        <td>{{ \Carbon\Carbon::parse($rdva->date_et_heure)->format('H:i') }}</td>
                                        <td>{{ $rdva->motif }}</td>
                                        <td>{{ $rdva->docteur->user->name }} | {{ $rdva->docteur->user->telephone }}</td>
                                        <td>{{ $rdva->patient->user->name }} | {{ $rdva->patient->user->telephone }}</td>
                                      </tr>
                                    @empty
                                      <h4>Aucun rendez-vous planifié pour aujourd'hui</h4>
                                    @endforelse
                                </tbody>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-center">
                                            <ul class="pagination">
                                                {{-- Lien vers la page précédente --}}
                                                @if ($RendezVousAujourdhui->currentPage() > 1)
                                                    <li class="page-item">
                                                        <a class="page-link" href="{{ $RendezVousAujourdhui->previousPageUrl() }}" rel="prev">&laquo;</a>
                                                    </li>
                                                @endif

                                                {{-- Liens vers les pages --}}
                                                @for ($i = 1; $i <= $RendezVousAujourdhui->lastPage(); $i++)
                                                    <li class="page-item {{ ($RendezVousAujourdhui->currentPage() === $i) ? 'active' : '' }}">
                                                        <a class="page-link" href="{{ $RendezVousAujourdhui->url($i) }}">{{ $i }}</a>
                                                    </li>
                                                @endfor

                                                {{-- Lien vers la page suivante --}}
                                                @if ($RendezVousAujourdhui->hasMorePages())
                                                    <li class="page-item">
                                                        <a class="page-link" href="{{ $RendezVousAujourdhui->nextPageUrl() }}" rel="next">&raquo;</a>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                              </table>
                            </div>
                          </div>
                        </div>

                      <div class="clearfix"></div>

                      <div class="row" style="display: block;">
                        <div class="col-md-12 col-sm-6  ">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Rendez-vous planifiés</h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#">Settings 1</a>
                                      <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                              </ul>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>Date et heure</th>
                                    <th>Motif</th>
                                    <th>Durée</th>
                                    <th>Statut</th>
                                    <th >Docteur</th>
                                    <th >Patient</th>
                                    <th>Plus</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @forelse ($rendezVousAdmin as $rdvp)
                                        <tr>
                                            <td>le {{ \Carbon\Carbon::parse($rdvp->date_et_heure)->format('d F') }} à {{ \Carbon\Carbon::parse($rdvp->date_et_heure)->format('H:i') }}</td>
                                            <td>{{ $rdvp->motif }}</td>
                                            <td>{{ $rdvp->duree }} min</td>
                                            <td>{{ $rdvp->statut }}</td>
                                            <td>{{ $rdvp->docteur->user->name }} | {{ $rdvp->docteur->user->telephone }}</td>
                                            <td>{{ $rdvp->patient->user->name }} | {{ $rdvp->patient->user->telephone }}</td>
                                            <td><a href="/listerendezvous/{{ $rdvp->id }}"> <i class="fa-solid fa-plus fa-2x"></i> </a></td>
                                        </tr>
                                    @empty
                                        <h4>Aucun rendez-vous planifié</h4>
                                    @endforelse
                                </tbody>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-center">
                                                <ul class="pagination">
                                                    {{-- Lien vers la page précédente --}}
                                                    @if ($rendezVousAdmin->currentPage() > 1)
                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $rendezVousAdmin->previousPageUrl() }}" rel="prev">&laquo;</a>
                                                        </li>
                                                    @endif

                                                    {{-- Liens vers les pages --}}
                                                    @for ($i = 1; $i <= $rendezVousAdmin->lastPage(); $i++)
                                                        <li class="page-item {{ ($rendezVousAdmin->currentPage() === $i) ? 'active' : '' }}">
                                                            <a class="page-link" href="{{ $rendezVousAdmin->url($i) }}">{{ $i }}</a>
                                                        </li>
                                                    @endfor

                                                    {{-- Lien vers la page suivante --}}
                                                    @if ($rendezVousAdmin->hasMorePages())
                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $rendezVousAdmin->nextPageUrl() }}" rel="next">&raquo;</a>
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                              </table>

                            </div>
                          </div>
                        </div>


                        <div class="col-md-12 col-sm-6  ">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Rendez-vous confirmé</h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#">Settings 1</a>
                                      <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                              </ul>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                              <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th>Motif</th>
                                    <th >Patient</th>
                                    <th>Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @forelse ($RendezVousconfirme as $rdvconf)
                                        <tr>
                                            <td>{{ $rdvconf->motif }}</td>
                                            <td>{{ $rdvconf->patient->user->name }} | {{ $rdvconf->patient->user->telephone }}</td>
                                            <td><a href="{{ url('emailview', $rdvconf->patient->user->id) }}" class="btn btn-secondary" title="Envoyer un mail"> <i class="fa-solid fa-paper-plane"></i></a></td>
                                            <td>
                                                <form method="POST" action="{{route('deleterdv',$rdvconf->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger " title="Supprimer" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <h4>Aucun rendez-vous confirmé</h4>
                                    @endforelse
                                </tbody>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-center">
                                            <ul class="pagination">
                                                {{-- Lien vers la page précédente --}}
                                                @if ($RendezVousconfirme->currentPage() > 1)
                                                    <li class="page-item">
                                                        <a class="page-link" href="{{ $RendezVousconfirme->previousPageUrl() }}" rel="prev">&laquo;</a>
                                                    </li>
                                                @endif

                                                {{-- Liens vers les pages --}}
                                                @for ($i = 1; $i <= $RendezVousconfirme->lastPage(); $i++)
                                                    <li class="page-item {{ ($RendezVousconfirme->currentPage() === $i) ? 'active' : '' }}">
                                                        <a class="page-link" href="{{ $RendezVousconfirme->url($i) }}">{{ $i }}</a>
                                                    </li>
                                                @endfor

                                                {{-- Lien vers la page suivante --}}
                                                @if ($RendezVousconfirme->hasMorePages())
                                                    <li class="page-item">
                                                        <a class="page-link" href="{{ $RendezVousconfirme->nextPageUrl() }}" rel="next">&raquo;</a>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                              </table>

                            </div>
                          </div>
                        </div>

                        <div class="col-md-12 col-sm-6  ">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>Rendez-vous en attentes de confirmation</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                  <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                        <a class="dropdown-item" href="#">Settings 2</a>
                                      </div>
                                  </li>
                                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                                  </li>
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content">

                                <table class="table table-striped">
                                  <thead>
                                    <tr>
                                      <th>Motif</th>
                                      <th >Patient</th>
                                      <th>Actions</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      @forelse ($rendezVousAttente as $rdvat)
                                          <tr>
                                              <td>{{ $rdvat->motif }}</td>
                                              <td>{{ $rdvat->patient->user->name }} | {{ $rdvat->patient->user->telephone }}</td>
                                              <td>
                                                <form action="{{ route('confrdv', $rdvat->id) }}" method="post">
                                                    @csrf
                                                    <input type="text" name="statut" id="" value="confirmé" hidden>
                                                    <button class="btn btn-primary" title="Confrimer" type="submit"> <i class="fa-solid fa-thumbs-up"></i></button>
                                                </form>
                                              </td>
                                              <td>
                                                  <form method="POST" action="{{route('deleterdv',$rdvat->id) }}" accept-charset="UTF-8" style="display:inline">
                                                      {{ method_field('DELETE') }}
                                                      {{ csrf_field() }}
                                                      <button type="submit" class="btn btn-danger " title="Supprimer" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                  </form>
                                              </td>
                                          </tr>
                                      @empty
                                          <h4>Aucun rendez-vous en attentes de confirmation</h4>
                                      @endforelse
                                  </tbody>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="text-center">
                                              <ul class="pagination">
                                                  {{-- Lien vers la page précédente --}}
                                                  @if ($rendezVousAttente->currentPage() > 1)
                                                      <li class="page-item">
                                                          <a class="page-link" href="{{ $rendezVousAttente->previousPageUrl() }}" rel="prev">&laquo;</a>
                                                      </li>
                                                  @endif

                                                  {{-- Liens vers les pages --}}
                                                  @for ($i = 1; $i <= $rendezVousAttente->lastPage(); $i++)
                                                      <li class="page-item {{ ($rendezVousAttente->currentPage() === $i) ? 'active' : '' }}">
                                                          <a class="page-link" href="{{ $rendezVousAttente->url($i) }}">{{ $i }}</a>
                                                      </li>
                                                  @endfor

                                                  {{-- Lien vers la page suivante --}}
                                                  @if ($rendezVousAttente->hasMorePages())
                                                      <li class="page-item">
                                                          <a class="page-link" href="{{ $rendezVousAttente->nextPageUrl() }}" rel="next">&raquo;</a>
                                                      </li>
                                                  @endif
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                                </table>

                              </div>
                            </div>
                          </div>

                      </div>
                    </div>
                  </div>
            </div>

            </div>
        </div>

        <!-- jQuery -->
        <script src="templateDashboard/vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="templateDashboard/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- FastClick -->
        <script src="templateDashboard/vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="templateDashboard/vendors/nprogress/nprogress.js"></script>
        <!-- bootstrap-progressbar -->
        <script src="templateDashboard/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <!-- iCheck -->
        <script src="templateDashboard/vendors/iCheck/icheck.min.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="templateDashboard/vendors/moment/min/moment.min.js"></script>
        <script src="templateDashboard/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!-- bootstrap-wysiwyg -->
        <script src="templateDashboard/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
        <script src="templateDashboard/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
        <script src="templateDashboard/vendors/google-code-prettify/src/prettify.js"></script>
        <!-- jQuery Tags Input -->
        <script src="templateDashboard/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
        <!-- Switchery -->
        <script src="templateDashboard/vendors/switchery/dist/switchery.min.js"></script>
        <!-- Select2 -->
        <script src="templateDashboard/vendors/select2/dist/js/select2.full.min.js"></script>
        <!-- Parsley -->
        <script src="templateDashboard/vendors/parsleyjs/dist/parsley.min.js"></script>
        <!-- Autosize -->
        <script src="templateDashboard/vendors/autosize/dist/autosize.min.js"></script>
        <!-- jQuery autocomplete -->
        <script src="templateDashboard/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
        <!-- starrr -->
        <script src="templateDashboard/vendors/starrr/dist/starrr.js"></script>
        <!-- Custom Theme Scripts -->
        <script src="templateDashboard/build/js/custom.min.js"></script>

        <script src="templateDashboard/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>

    </body>
</html>
