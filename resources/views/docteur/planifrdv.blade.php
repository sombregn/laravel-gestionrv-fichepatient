<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Planification rendez-vous</title>

        <link rel="stylesheet" href={{ asset('templateDashboard/vendors/bootstrap/dist/css/bootstrap.min.css') }}>
        <link rel="stylesheet" href={{ asset('templateDashboard/vendors/font-awesome/css/font-awesome.min.css') }}>
        <link rel="stylesheet" href={{ asset('templateDashboard/vendors/nprogress/nprogress.css') }}>
        <link rel="stylesheet" href={{ asset('templateDashboard/vendors/iCheck/skins/flat/green.css') }}>
        <link rel="stylesheet" href={{ asset('templateDashboard/vendors/google-code-prettify/bin/prettify.min.css') }}>
        <link rel="stylesheet" href={{ asset('templateDashboard/vendors/select2/dist/css/select2.min.css') }}>
        <link rel="stylesheet" href={{ asset('templateDashboard/vendors/switchery/dist/switchery.min.css') }}>
        <link rel="stylesheet" href={{ asset('templateDashboard/vendors/starrr/dist/starrr.css') }}>
        <link rel="stylesheet" href={{ asset('templateDashboard/vendors/bootstrap-daterangepicker/daterangepicker.css') }}>
        <link rel="stylesheet" href={{ asset('templateDashboard/build/css/custom.min.css') }}>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">

                        <!-- /menu profile quick info -->

                        

                        <!-- sidebar menu -->
                        @include('layouts.sidebardoc')
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
                                <h3>Planification du rendez-vous</h3>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Veuillez saisir la date et l'heure</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a class="dropdown-item" href="#">Settings 1</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <br />
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ url('planifierrendezvous', [$datardv->id, $datauser->id]) }}">
                                            @csrf
                                            <div class="item form-group">
                                                <div class="col-md-12 col-sm-12">
                                                    <textarea class="form-control" name="message" style="width: 100%;" hidden>
                                                        Bonjour {{ $datauser->genre == "Masculin" ? "Monsieur" : "Madame" }} {{ $datauser->name }} c'est le docteur {{ $datardv->docteur->user->name }}!
                                                        Je viens de valider votre demande de rendez-vous.
                                                        Voici la date et l'heure de notre rendez-vous :
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Date du rendez-vous <span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="datetime-local" class="form-control" name="date_et_heure">
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="text" class="form-control" name="statut" value="planifié" hidden>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="text" class="form-control" name="cliquesurlurl" value="Vous pouvez vous référer à votre historique de rendez-vous pour vérifier" hidden>
                                                </div>
                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="item form-group text-center">
                                                <div class="col-md-6 col-sm-6 offset-md-3">
                                                    <button class="btn btn-primary" type="reset">Effacer</button>
                                                    <button type="submit" class="btn btn-success">Planifier</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>

        <script src="{{ asset('templateDashboard/vendors/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('templateDashboard/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('templateDashboard/vendors/fastclick/lib/fastclick.js') }}"></script>
        <script src="{{ asset('templateDashboard/vendors/nprogress/nprogress.js') }}"></script>
        <script src="{{ asset('templateDashboard/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
        <script src="{{ asset('templateDashboard/vendors/iCheck/icheck.min.js') }}"></script>
        <script src="{{ asset('templateDashboard/vendors/moment/min/moment.min.js') }}"></script>
        <script src="{{ asset('templateDashboard/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('templateDashboard/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
        <script src="{{ asset('templateDashboard/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
        <script src="{{ asset('templateDashboard/vendors/google-code-prettify/src/prettify.js') }}"></script>
        <script src="{{ asset('templateDashboard/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>
        <script src="{{ asset('templateDashboard/vendors/switchery/dist/switchery.min.js') }}"></script>
        <script src="{{ asset('templateDashboard/vendors/select2/dist/js/select2.full.min.js') }}"></script>
        <script src="{{ asset('templateDashboard/vendors/parsleyjs/dist/parsley.min.js') }}"></script>
        <script src="{{ asset('templateDashboard/vendors/autosize/dist/autosize.min.js') }}"></script>
        <script src="{{ asset('templateDashboard/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}"></script>
        <script src="{{ asset('templateDashboard/vendors/starrr/dist/starrr.js') }}"></script>
        <script src="{{ asset('templateDashboard/build/js/custom.min.js') }}"></script>
    </body>
</html>
