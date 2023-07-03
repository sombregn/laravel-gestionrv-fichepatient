<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Liste docteur</title>

        <!-- Bootstrap -->
        <link href={{ asset('templateDashboard/vendors/bootstrap/dist/css/bootstrap.min.css') }} rel="stylesheet">
        <!-- Font Awesome -->
        <link href={{ asset('templateDashboard/vendors/font-awesome/css/font-awesome.min.css') }} rel="stylesheet">
        <!-- NProgress -->
        <link href={{ asset('templateDashboard/vendors/nprogress/nprogress.css') }} rel="stylesheet">
        <!-- iCheck -->
        <link href={{ asset('templateDashboard/vendors/iCheck/skins/flat/green.css') }} rel="stylesheet">
        <!-- bootstrap-wysiwyg -->
        <link href={{ asset('templateDashboard/vendors/google-code-prettify/bin/prettify.min.css') }} rel="stylesheet">
        <!-- Select2 -->
        <link href={{ asset('templateDashboard/vendors/select2/dist/css/select2.min.css') }} rel="stylesheet">
        <!-- Switchery -->
        <link href={{ asset('templateDashboard/vendors/switchery/dist/switchery.min.css') }} rel="stylesheet">
        <!-- starrr -->
        <link href={{ asset('templateDashboard/vendors/starrr/dist/starrr.css') }} rel="stylesheet">
        <!-- bootstrap-daterangepicker -->
        <link href={{ asset('templateDashboard/vendors/bootstrap-daterangepicker/daterangepicker.css') }} rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href={{ asset('templateDashboard/build/css/custom.min.css') }} rel="stylesheet">
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
                                <img src="{{ asset(Auth::user()->photo) }}" alt="..." class="img-circle profile_img">
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
                                <img src="{{ asset(Auth::user()->photo) }}" alt="">{{ Auth::user()->name; }}
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
                                <h3>Liste des docteurs</h3>
                            </div>
                            <div class="title_right">
                                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                                <div class="input-group">
                                    <form action="{{ route('docteur.search') }}" method="GET" class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="Rechercher...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-secondary" type="subit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                        </span>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row">
                        <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Default Example <small>Users</small></h2>
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
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>NOM COMPLET</th>
                          <th>EMAIL</th>
                          <th>ADRESSE</th>
                          <th>TELEPHONE</th>
                          <th>GENRE</th>
                          <th>DATE NAISSANCE</th>
                          <th>GROUPE SANGUIN</th>
                          <th>HORAIRE CONSULTATION</th>
                          <th>DEPARTEMENT</th>
                          <th>SPECIALITE</th>
                          <th>ACTION</th>
                        </tr>
                      </thead>


                      <tbody>
                        @if(isset($searchResults))
                            <!-- Afficher les résultats de recherche -->
                            @foreach($searchResults as $doc)
                            <tr>
                                <td>{{$doc->id}}</td>
                                <td>{{$doc->user->name}}</td>
                                <td>{{$doc->user->email}}</td>
                                <td>{{$doc->user->adresse}}</td>
                                <td>{{$doc->user->telephone}}</td>
                                <td>{{$doc->user->genre}}</td>
                                <td>{{$doc->user->date_de_naissance}}</td>
                                <td>{{$doc->user->groupe_sanguin}}</td>
                                <td>{{$doc->horaires_de_consultation}}</td>
                                <td>{{$doc->departement_id}}</td>
                                <td>{{$doc->specialite}}</td>
                                <td>
                                    <a href="{{ route('editdocteur',$doc->id)}}" class="btn btn-success">✏</a>
                                    <form method="POST" action="{{route('deletedocteur',$doc->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger " title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <ul class="pagination">
                                            {{-- Lien vers la page précédente --}}
                                            @if ($searchResults->currentPage() > 1)
                                                <li class="page-item">
                                                    <a class="page-link" href="{{ $searchResults->previousPageUrl() }}" rel="prev">&laquo;</a>
                                                </li>
                                            @endif

                                            {{-- Liens vers les pages --}}
                                            @for ($i = 1; $i <= $searchResults->lastPage(); $i++)
                                                <li class="page-item {{ ($searchResults->currentPage() === $i) ? 'active' : '' }}">
                                                    <a class="page-link" href="{{ $searchResults->url($i) }}">{{ $i }}</a>
                                                </li>
                                            @endfor

                                            {{-- Lien vers la page suivante --}}
                                            @if ($searchResults->hasMorePages())
                                                <li class="page-item">
                                                    <a class="page-link" href="{{ $searchResults->nextPageUrl() }}" rel="next">&raquo;</a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @else
                            @foreach($docteur as $doc)
                                <tr>
                                    <td style="padding-top: 40px"><img src={{ asset($doc->user->photo) }} alt="" width="50px" height="50px"></td>
                                    <td>{{$doc->user->name}}</td>
                                    <td>{{$doc->user->email}}</td>
                                    <td>{{$doc->user->adresse}}</td>
                                    <td>{{$doc->user->telephone}}</td>
                                    <td>{{$doc->user->genre}}</td>
                                    <td>{{$doc->user->date_de_naissance}}</td>
                                    <td>{{$doc->user->groupe_sanguin}}</td>
                                    <td>{{$doc->horaires_de_consultation}}</td>
                                    <td>{{$doc->departement->nom}}</td>
                                    <td>{{$doc->specialite}}</td>
                                    <td>
                                        <a href="{{ route('editdocteur',$doc->id)}}" class="btn btn-success">✏</a>
                                        <form method="POST" action="{{route('deletedocteur',$doc->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger " title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <ul class="pagination">
                                            {{-- Lien vers la page précédente --}}
                                            @if ($docteur->currentPage() > 1)
                                                <li class="page-item">
                                                    <a class="page-link" href="{{ $docteur->previousPageUrl() }}" rel="prev">&laquo;</a>
                                                </li>
                                            @endif

                                            {{-- Liens vers les pages --}}
                                            @for ($i = 1; $i <= $docteur->lastPage(); $i++)
                                                <li class="page-item {{ ($docteur->currentPage() === $i) ? 'active' : '' }}">
                                                    <a class="page-link" href="{{ $docteur->url($i) }}">{{ $i }}</a>
                                                </li>
                                            @endfor

                                            {{-- Lien vers la page suivante --}}
                                            @if ($docteur->hasMorePages())
                                                <li class="page-item">
                                                    <a class="page-link" href="{{ $docteur->nextPageUrl() }}" rel="next">&raquo;</a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif
                      </tbody>
                    </table>
                  </div>
                  </div>
                </div>
            </div>


            </div>
        </div>

        <!-- jQuery -->
        <script src={{ asset('templateDashboard/vendors/jquery/dist/jquery.min.js') }}></script>
        <!-- Bootstrap -->
        <script src={{ asset('templateDashboard/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}></script>
        <!-- FastClick -->
        <script src={{ asset('templateDashboard/vendors/fastclick/lib/fastclick.js') }}></script>
        <!-- NProgress -->
        <script src={{ asset('templateDashboard/vendors/nprogress/nprogress.js') }}></script>
        <!-- bootstrap-progressbar -->
        <script src={{ asset('templateDashboard/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}></script>
        <!-- iCheck -->
        <script src={{ asset('templateDashboard/vendors/iCheck/icheck.min.js') }}></script>
        <!-- bootstrap-daterangepicker -->
        <script src="templateDashboard/vendors/moment/min/moment.min.js"></script>
        <script src={{ asset('templateDashboard/vendors/bootstrap-daterangepicker/daterangepicker.js') }}></script>
        <!-- bootstrap-wysiwyg -->
        <script src={{ asset('templateDashboard/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}></script>
        <script src={{ asset('templateDashboard/vendors/jquery.hotkeys/jquery.hotkeys.js') }}></script>
        <script src={{ asset('templateDashboard/vendors/google-code-prettify/src/prettify.js') }}></script>
        <!-- jQuery Tags Input -->
        <script src={{ asset('templateDashboard/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}></script>
        <!-- Switchery -->
        <script src={{ asset('templateDashboard/vendors/switchery/dist/switchery.min.js') }}></script>
        <!-- Select2 -->
        <script src={{ asset('templateDashboard/vendors/select2/dist/js/select2.full.min.js') }}></script>
        <!-- Parsley -->
        <script src={{ asset('templateDashboard/vendors/parsleyjs/dist/parsley.min.js') }}></script>
        <!-- Autosize -->
        <script src={{ asset('templateDashboard/vendors/autosize/dist/autosize.min.js') }}></script>
        <!-- jQuery autocomplete -->
        <script src={{ asset('templateDashboard/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}></script>
        <!-- starrr -->
        <script src={{ asset('templateDashboard/vendors/starrr/dist/starrr.js') }}></script>
        <!-- Custom Theme Scripts -->
        <script src={{ asset('templateDashboard/build/js/custom.min.js') }}></script>

        <script src={{ asset('templateDashboard/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js') }}></script>

    </body>
</html>
