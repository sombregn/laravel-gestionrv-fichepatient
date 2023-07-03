@if (Route::has('login'))
    @auth

<!------------------------------------------------- Dashboard Admin ---------------------------------------------------->


        @if(Auth::user()->roles()->where('nom', 'admin')->exists())
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                <!-- Meta, title, CSS, favicons, etc. -->
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="icon" href="images/favicon.ico" type="image/ico" />

                <title>Accueil admin</title>

                <!-- Bootstrap -->
                <link href="templateDashboard/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
                <!-- Font Awesome -->
                <link href="templateDashboard/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
                <!-- NProgress -->
                <link href="templateDashboard/vendors/nprogress/nprogress.css" rel="stylesheet">
                <!-- iCheck -->
                <link href="templateDashboard/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

                <!-- bootstrap-progressbar -->
                <link href="templateDashboard/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
                <!-- JQVMap -->
                <link href="templateDashboard/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
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
                        @include('layouts.sidebaradmin')



                        <!-- /menu profile quick info -->



                        <!-- sidebar menu -->

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
                    @include('layouts.nav')
                    <!-- /top navigation -->

                    <!-- page content -->
                    <div class="right_col" role="main">
                    <!-- top tiles -->
                    <div class="row" style="display: inline-block;" >
                    <div class="tile_count">
                        <div class="col-md-3 col-sm-4  tile_stats_count">
                        <span class="count_top"> Total de rendez-vous programmés</span>
                        <div class="count">{{ $totalRendezVous }}</div>
                        <span class="count_bottom"><a href="" style="text-decoration: none;">Voir la liste</a></span>
                        </div>
                        <div class="col-md-3 col-sm-4  tile_stats_count">
                        <span class="count_top"> Nombre total de patients enregistrés.</span>
                        <div class="count">{{ $totalPatients }}</div>
                        <span class="count_bottom"><a href="/listepatient" style="text-decoration: none;">Voir la liste</a></span>
                        </div>
                        <div class="col-md-3 col-sm-4  tile_stats_count">
                        <span class="count_top"> Nombre total de médecins/docteurs.</span>
                        <div class="count green">{{ $totalMedecins }}</div>
                        <span class="count_bottom"><a href="/listedoctor" style="text-decoration: none;">Voir la liste</a></span>
                        </div>
                        <div class="col-md-3 col-sm-4  tile_stats_count">
                        <span class="count_top"> Nombre total de rendez-vous aujourd'hui.</span>
                        <div class="count">{{ $totalRendezVousAujourdhui }}</div>
                        <span class="count_bottom"><a href="" style="text-decoration: none;">Voir la liste</a></span>
                        </div>
                    </div>
                    </div>
                    <!-- /top tiles -->

                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">
                        <div class="dashboard_graph">

                            <div class="row x_title">
                            <div class="col-md-6">
                                <h3>Network Activities <small>Graph title sub-title</small></h3>
                            </div>
                            <div class="col-md-6">
                                <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                                </div>
                            </div>
                            </div>

                            <div class="col-md-9 col-sm-9 ">
                            <div id="chart_plot_01" class="demo-placeholder"></div>
                            </div>
                            <div class="col-md-3 col-sm-3  bg-white">
                            <div class="x_title">
                                <h2>Top Campaign Performance</h2>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-md-12 col-sm-12 ">
                                <div>
                                <p>Facebook Campaign</p>
                                <div class="">
                                    <div class="progress progress_sm" style="width: 76%;">
                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                                    </div>
                                </div>
                                </div>
                                <div>
                                <p>Twitter Campaign</p>
                                <div class="">
                                    <div class="progress progress_sm" style="width: 76%;">
                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 ">
                                <div>
                                <p>Conventional Media</p>
                                <div class="">
                                    <div class="progress progress_sm" style="width: 76%;">
                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                                    </div>
                                </div>
                                </div>
                                <div>
                                <p>Bill boards</p>
                                <div class="">
                                    <div class="progress progress_sm" style="width: 76%;">
                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                                    </div>
                                </div>
                                </div>
                            </div>

                            </div>

                            <div class="clearfix"></div>
                        </div>
                        </div>

                    </div>
                    <br />

                    <div class="row">


                        <div class="col-md-4 col-sm-4 ">
                        <div class="x_panel tile fixed_height_320">
                            <div class="x_title">
                            <h2>App Versions</h2>
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
                            <h4>App Usage across versions</h4>
                            <div class="widget_summary">
                                <div class="w_left w_25">
                                <span>0.1.5.2</span>
                                </div>
                                <div class="w_center w_55">
                                <div class="progress">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                                    <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                </div>
                                <div class="w_right w_20">
                                <span>123k</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="widget_summary">
                                <div class="w_left w_25">
                                <span>0.1.5.3</span>
                                </div>
                                <div class="w_center w_55">
                                <div class="progress">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                    <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                </div>
                                <div class="w_right w_20">
                                <span>53k</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="widget_summary">
                                <div class="w_left w_25">
                                <span>0.1.5.4</span>
                                </div>
                                <div class="w_center w_55">
                                <div class="progress">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                    <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                </div>
                                <div class="w_right w_20">
                                <span>23k</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="widget_summary">
                                <div class="w_left w_25">
                                <span>0.1.5.5</span>
                                </div>
                                <div class="w_center w_55">
                                <div class="progress">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                                    <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                </div>
                                <div class="w_right w_20">
                                <span>3k</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="widget_summary">
                                <div class="w_left w_25">
                                <span>0.1.5.6</span>
                                </div>
                                <div class="w_center w_55">
                                <div class="progress">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                                    <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                </div>
                                <div class="w_right w_20">
                                <span>1k</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            </div>
                        </div>
                        </div>

                        <div class="col-md-4 col-sm-4 ">
                        <div class="x_panel tile fixed_height_320 overflow_hidden">
                            <div class="x_title">
                            <h2>Device Usage</h2>
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
                            <table class="" style="width:100%">
                                <tr>
                                <th style="width:37%;">
                                    <p>Top 5</p>
                                </th>
                                <th>
                                    <div class="col-lg-7 col-md-7 col-sm-7 ">
                                    <p class="">Device</p>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 ">
                                    <p class="">Progress</p>
                                    </div>
                                </th>
                                </tr>
                                <tr>
                                <td>
                                    <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                                </td>
                                <td>
                                    <table class="tile_info">
                                    <tr>
                                        <td>
                                        <p><i class="fa fa-square blue"></i>IOS</p>
                                        </td>
                                        <td>30%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p><i class="fa fa-square green"></i>Android</p>
                                        </td>
                                        <td>10%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p><i class="fa fa-square purple"></i>Blackberry</p>
                                        </td>
                                        <td>20%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p><i class="fa fa-square aero"></i>Symbian</p>
                                        </td>
                                        <td>15%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p><i class="fa fa-square red"></i>Others</p>
                                        </td>
                                        <td>30%</td>
                                    </tr>
                                    </table>
                                </td>
                                </tr>
                            </table>
                            </div>
                        </div>
                        </div>


                        <div class="col-md-4 col-sm-4 ">
                        <div class="x_panel tile fixed_height_320">
                            <div class="x_title">
                            <h2>Quick Settings</h2>
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
                            <div class="dashboard-widget-content">
                                <ul class="quick-list">
                                <li><i class="fa fa-calendar-o"></i><a href="#">Settings</a>
                                </li>
                                <li><i class="fa fa-bars"></i><a href="#">Subscription</a>
                                </li>
                                <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                                <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                                </li>
                                <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                                <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                                </li>
                                <li><i class="fa fa-area-chart"></i><a href="#">Logout</a>
                                </li>
                                </ul>

                                <div class="sidebar-widget">
                                    <h4>Profile Completion</h4>
                                    <canvas width="150" height="80" id="chart_gauge_01" class="" style="width: 160px; height: 100px;"></canvas>
                                    <div class="goal-wrapper">
                                    <span id="gauge-text" class="gauge-value pull-left">0</span>
                                    <span class="gauge-value pull-left">%</span>
                                    <span id="goal-text" class="goal-value pull-right">100%</span>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-md-4 col-sm-4 ">
                        <div class="x_panel">
                            <div class="x_title">
                            <h2>Recent Activities <small>Sessions</small></h2>
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
                            <div class="dashboard-widget-content">

                                <ul class="list-unstyled timeline widget">
                                <li>
                                    <div class="block">
                                    <div class="block_content">
                                        <h2 class="title">
                                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                    </h2>
                                        <div class="byline">
                                        <span>13 hours ago</span> by <a>Jane Smith</a>
                                        </div>
                                        <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                        </p>
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="block">
                                    <div class="block_content">
                                        <h2 class="title">
                                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                    </h2>
                                        <div class="byline">
                                        <span>13 hours ago</span> by <a>Jane Smith</a>
                                        </div>
                                        <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                        </p>
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="block">
                                    <div class="block_content">
                                        <h2 class="title">
                                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                    </h2>
                                        <div class="byline">
                                        <span>13 hours ago</span> by <a>Jane Smith</a>
                                        </div>
                                        <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                        </p>
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="block">
                                    <div class="block_content">
                                        <h2 class="title">
                                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                    </h2>
                                        <div class="byline">
                                        <span>13 hours ago</span> by <a>Jane Smith</a>
                                        </div>
                                        <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                        </p>
                                    </div>
                                    </div>
                                </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        </div>


                        <div class="col-md-8 col-sm-8 ">



                        <div class="row">

                            <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">
                                <div class="x_title">
                                <h2>Visitors location <small>geo-presentation</small></h2>
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
                                <div class="dashboard-widget-content">
                                    <div class="col-md-4 hidden-small">
                                    <h2 class="line_30">125.7k Views from 60 countries</h2>

                                    <table class="countries_list">
                                        <tbody>
                                        <tr>
                                            <td>United States</td>
                                            <td class="fs15 fw700 text-right">33%</td>
                                        </tr>
                                        <tr>
                                            <td>France</td>
                                            <td class="fs15 fw700 text-right">27%</td>
                                        </tr>
                                        <tr>
                                            <td>Germany</td>
                                            <td class="fs15 fw700 text-right">16%</td>
                                        </tr>
                                        <tr>
                                            <td>Spain</td>
                                            <td class="fs15 fw700 text-right">11%</td>
                                        </tr>
                                        <tr>
                                            <td>Britain</td>
                                            <td class="fs15 fw700 text-right">10%</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    <div id="world-map-gdp" class="col-md-8 col-sm-12 " style="height:230px;"></div>
                                </div>
                                </div>
                            </div>
                            </div>

                        </div>
                        <div class="row">


                            <!-- Start to do list -->
                            <div class="col-md-6 col-sm-6 ">
                            <div class="x_panel">
                                <div class="x_title">
                                <h2>To Do List <small>Sample tasks</small></h2>
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

                                <div class="">
                                    <ul class="to_do">
                                    <li>
                                        <p>
                                        <input type="checkbox" class="flat"> Schedule meeting with new client </p>
                                    </li>
                                    <li>
                                        <p>
                                        <input type="checkbox" class="flat"> Create email address for new intern</p>
                                    </li>
                                    <li>
                                        <p>
                                        <input type="checkbox" class="flat"> Have IT fix the network printer</p>
                                    </li>
                                    <li>
                                        <p>
                                        <input type="checkbox" class="flat"> Copy backups to offsite location</p>
                                    </li>
                                    <li>
                                        <p>
                                        <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                                    </li>
                                    <li>
                                        <p>
                                        <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                                    </li>
                                    <li>
                                        <p>
                                        <input type="checkbox" class="flat"> Create email address for new intern</p>
                                    </li>
                                    <li>
                                        <p>
                                        <input type="checkbox" class="flat"> Have IT fix the network printer</p>
                                    </li>
                                    <li>
                                        <p>
                                        <input type="checkbox" class="flat"> Copy backups to offsite location</p>
                                    </li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End to do list -->

                            <!-- start of weather widget -->
                            <div class="col-md-6 col-sm-6 ">
                            <div class="x_panel">
                                <div class="x_title">
                                <h2>Daily active users <small>Sessions</small></h2>
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
                                    <div class="temperature"><b>Monday</b>, 07:30 AM
                                        <span>F</span>
                                        <span><b>C</b></span>
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                    <div class="weather-icon">
                                        <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                                    </div>
                                    </div>
                                    <div class="col-sm-8">
                                    <div class="weather-text">
                                        <h2>Texas <br><i>Partly Cloudy Day</i></h2>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="weather-text pull-right">
                                    <h3 class="degrees">23</h3>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div class="row weather-days">
                                    <div class="col-sm-2">
                                    <div class="daily-weather">
                                        <h2 class="day">Mon</h2>
                                        <h3 class="degrees">25</h3>
                                        <canvas id="clear-day" width="32" height="32"></canvas>
                                        <h5>15 <i>km/h</i></h5>
                                    </div>
                                    </div>
                                    <div class="col-sm-2">
                                    <div class="daily-weather">
                                        <h2 class="day">Tue</h2>
                                        <h3 class="degrees">25</h3>
                                        <canvas height="32" width="32" id="rain"></canvas>
                                        <h5>12 <i>km/h</i></h5>
                                    </div>
                                    </div>
                                    <div class="col-sm-2">
                                    <div class="daily-weather">
                                        <h2 class="day">Wed</h2>
                                        <h3 class="degrees">27</h3>
                                        <canvas height="32" width="32" id="snow"></canvas>
                                        <h5>14 <i>km/h</i></h5>
                                    </div>
                                    </div>
                                    <div class="col-sm-2">
                                    <div class="daily-weather">
                                        <h2 class="day">Thu</h2>
                                        <h3 class="degrees">28</h3>
                                        <canvas height="32" width="32" id="sleet"></canvas>
                                        <h5>15 <i>km/h</i></h5>
                                    </div>
                                    </div>
                                    <div class="col-sm-2">
                                    <div class="daily-weather">
                                        <h2 class="day">Fri</h2>
                                        <h3 class="degrees">28</h3>
                                        <canvas height="32" width="32" id="wind"></canvas>
                                        <h5>11 <i>km/h</i></h5>
                                    </div>
                                    </div>
                                    <div class="col-sm-2">
                                    <div class="daily-weather">
                                        <h2 class="day">Sat</h2>
                                        <h3 class="degrees">26</h3>
                                        <canvas height="32" width="32" id="cloudy"></canvas>
                                        <h5>10 <i>km/h</i></h5>
                                    </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                </div>
                            </div>

                            </div>
                            <!-- end of weather widget -->
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- /page content -->

                    <!-- footer content -->
                    <footer>
                    <div class="pull-right">
                        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                    <div class="clearfix"></div>
                    </footer>
                    <!-- /footer content -->
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
                <!-- Chart.js -->
                <script src="templateDashboard/vendors/Chart.js/dist/Chart.min.js"></script>
                <!-- gauge.js -->
                <script src="templateDashboard/vendors/gauge.js/dist/gauge.min.js"></script>
                <!-- bootstrap-progressbar -->
                <script src="templateDashboard/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
                <!-- iCheck -->
                <script src="templateDashboard/vendors/iCheck/icheck.min.js"></script>
                <!-- Skycons -->
                <script src="templateDashboard/vendors/skycons/skycons.js"></script>
                <!-- Flot -->
                <script src="templateDashboard/vendors/Flot/jquery.flot.js"></script>
                <script src="templateDashboard/vendors/Flot/jquery.flot.pie.js"></script>
                <script src="templateDashboard/vendors/Flot/jquery.flot.time.js"></script>
                <script src="templateDashboard/vendors/Flot/jquery.flot.stack.js"></script>
                <script src="templateDashboard/vendors/Flot/jquery.flot.resize.js"></script>
                <!-- Flot plugins -->
                <script src="templateDashboard/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
                <script src="templateDashboard/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
                <script src="templateDashboard/vendors/flot.curvedlines/curvedLines.js"></script>
                <!-- DateJS -->
                <script src="templateDashboard/vendors/DateJS/build/date.js"></script>
                <!-- JQVMap -->
                <script src="templateDashboard/vendors/jqvmap/dist/jquery.vmap.js"></script>
                <script src="templateDashboard/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
                <script src="templateDashboard/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
                <!-- bootstrap-daterangepicker -->
                <script src="templateDashboard/vendors/moment/min/moment.min.js"></script>
                <script src="templateDashboard/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

                <!-- Custom Theme Scripts -->
                <script src="templateDashboard/build/js/custom.min.js"></script>

            </body>
            </html>

        @endif



<!------------------------------------------------- Dashboard patient ---------------------------------------------------->



        @if(Auth::user()->roles()->where('nom', 'patient')->exists())

            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                <!-- Meta, title, CSS, favicons, etc. -->
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">

                <title>Accueil Patient</title>

                <!-- Bootstrap -->
                <link href={{ asset('templateDashboard/vendors/bootstrap/dist/css/bootstrap.min.css') }} rel="stylesheet">
                <!-- Font Awesome -->
                <link href={{ asset('templateDashboard/vendors/font-awesome/css/font-awesome.min.css') }} rel="stylesheet">
                <!-- NProgress -->
                <link href={{ asset('templateDashboard/vendors/nprogress/nprogress.css') }} rel="stylesheet">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

                <!-- Custom Theme Style -->
                <link href={{ asset('templateDashboard/build/css/custom.min.css') }} rel="stylesheet">
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
                    @include('layouts.nav')
                    <!-- /top navigation -->

                    <!-- page content -->
                    <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                        <div class="title_left">
                            <h3>Services cliniques</h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5   form-group pull-right top_search">
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

                        <div class="clearfix"></div>

                        <div class="row">
                        <div class="col-md-12 col-sm-12  ">
                            <div class="x_panel" style="height:600px;">
                            <div class="x_title">
                                <h2>Nos différents département</h2>
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
                                    <div class="col-md-12">
                                        <!-- price element -->
                                        <div class="row">
                                            @if(isset($searchResults))
                                                <!-- Afficher les résultats de recherche -->
                                                @foreach($searchResults as $departement)
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="pricing">
                                                            <div class="title" style="height: 40px;">
                                                                <h2>{{ $departement->nom }}</h2>
                                                            </div>
                                                            <div class="x_content">
                                                                <div class="">
                                                                    <div class="pricing_features">
                                                                        <ul class="list-unstyled text-left">
                                                                            <li> Heure de visite : <strong>{{ $departement->heures_de_visite }}</strong></li>
                                                                            <li> Contacts :
                                                                                <strong>
                                                                                    <ul style="list-style-type: none;">
                                                                                        <li style="text-decoration: none;">{{ $departement->telephone }}</li>
                                                                                        <li style="text-decoration: none;">{{ $departement->mail }}</li>
                                                                                    </ul>
                                                                                </strong>
                                                                            </li>
                                                                            <li> Statut :
                                                                                <strong>
                                                                                    @if($departement->etat == true)
                                                                                        Ouvert
                                                                                    @else
                                                                                        Fermé
                                                                                    @endif
                                                                                </strong>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="pricing_footer">
                                                                    @if($departement->etat == true)
                                                                    <a href="/departement/{{ $departement->id }}" class="btn btn-success btn-block" role="button" ><span>Prendre rendez-vous</span></a>
                                                                    @else
                                                                    <a href="" class="btn btn-success btn-block" role="button" style="pointer-events: none; opacity: 0.5;" disabled><span>Prendre rendez-vous</span></a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <!-- Afficher les départements par défaut -->
                                                @foreach($departements as $departement)
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="pricing">
                                                            <div class="title" style="height: 40px;">
                                                                <h2>{{ $departement->nom }}</h2>
                                                            </div>
                                                            <div class="x_content">
                                                                <div class="">
                                                                    <div class="pricing_features">
                                                                        <ul class="list-unstyled text-left">
                                                                            <li> Heure de visite : <strong>{{ $departement->heures_de_visite }}</strong></li>
                                                                            <li> Contacts :
                                                                                <strong>
                                                                                    <ul style="list-style-type: none;">
                                                                                        <li style="text-decoration: none;">{{ $departement->telephone }}</li>
                                                                                        <li style="text-decoration: none;">{{ $departement->mail }}</li>
                                                                                    </ul>
                                                                                </strong>
                                                                            </li>
                                                                            <li> Statut :
                                                                                <strong>
                                                                                    @if($departement->etat == true)
                                                                                        Ouvert
                                                                                    @else
                                                                                        Fermé
                                                                                    @endif
                                                                                </strong>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="pricing_footer">
                                                                    @if($departement->etat == true)
                                                                    <a href="/departement/{{ $departement->id }}" class="btn btn-success btn-block" role="button" ><span>Prendre rendez-vous</span></a>
                                                                    @else
                                                                    <a href="" class="btn btn-success btn-block" role="button" style="pointer-events: none; opacity: 0.5;" disabled><span>Prendre rendez-vous</span></a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                        <!-- price element -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-center">
                                            <ul class="pagination">
                                                {{-- Lien vers la page précédente --}}
                                                @if ($departements->currentPage() > 1)
                                                    <li class="page-item">
                                                        <a class="page-link" href="{{ $departements->previousPageUrl() }}" rel="prev">&laquo;</a>
                                                    </li>
                                                @endif

                                                {{-- Liens vers les pages --}}
                                                @for ($i = 1; $i <= $departements->lastPage(); $i++)
                                                    <li class="page-item {{ ($departements->currentPage() === $i) ? 'active' : '' }}">
                                                        <a class="page-link" href="{{ $departements->url($i) }}">{{ $i }}</a>
                                                    </li>
                                                @endfor

                                                {{-- Lien vers la page suivante --}}
                                                @if ($departements->hasMorePages())
                                                    <li class="page-item">
                                                        <a class="page-link" href="{{ $departements->nextPageUrl() }}" rel="next">&raquo;</a>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- /page content -->
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
            </body>
            </html>
        @endif





<!------------------------------------------------- Dashboard docteur ---------------------------------------------------->


        @if(Auth::user()->roles()->where('nom', 'docteur')->exists())
            <!DOCTYPE html>
            <html lang="en">

                <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                    <!-- Meta, title, CSS, favicons, etc. -->
                    <meta charset="utf-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1">

                    <title>Accueil docteur</title>

                    <!-- Bootstrap -->
                    <link href={{ asset('templateDashboard/vendors/bootstrap/dist/css/bootstrap.min.css') }} rel="stylesheet">
                    <!-- Font Awesome -->
                    <link href={{ asset('templateDashboard/vendors/font-awesome/css/font-awesome.min.css') }} rel="stylesheet">
                    <!-- NProgress -->
                    <link href={{ asset('templateDashboard/vendors/nprogress/nprogress.css') }} rel="stylesheet">
                    <!-- iCheck -->
                    <link href={{ asset('templateDashboard/vendors/iCheck/skins/flat/green.css') }} rel="stylesheet">
                    <!-- bootstrap-progressbar -->
                    <link href={{ asset('templateDashboard/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }} rel="stylesheet">
                    <!-- PNotify -->
                    <link href={{ asset('templateDashboard/vendors/pnotify/dist/pnotify.css') }} rel="stylesheet">
                    <link href={{ asset('templateDashboard/vendors/pnotify/dist/pnotify.buttons.css') }} rel="stylesheet">
                    <link href={{ asset('templateDashboard/vendors/pnotify/dist/pnotify.nonblock.css') }} rel="stylesheet">

                    <!-- Custom Theme Style -->
                    <link href={{ asset('templateDashboard/build/css/custom.min.css') }} rel="stylesheet">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                </head>

                <body class="nav-md">
                    <div class="container body">
                        <div class="main_container">
                            <div class="col-md-3 left_col">
                                <div class="left_col scroll-view">

                                    <!-- /menu profile quick info -->

                                    <br />

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
                                    <!-- /menu footer buttons -->
                                  </div>
                            </div>

                            @include('layouts.nav')

                              <div class="right_col" role="main">
                                <div class="">
                                    <div class="page-title">
                                      <div class="title_left">
                                        <h3>Listes de rendez-vous en attente</h3>
                                      </div>
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-center">
                                                <ul class="pagination">
                                                    {{-- Lien vers la page précédente --}}
                                                    @if ($rendezVousDocteur->currentPage() > 1)
                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $rendezVousDocteur->previousPageUrl() }}" rel="prev">&laquo;</a>
                                                        </li>
                                                    @endif

                                                    {{-- Liens vers les pages --}}
                                                    @for ($i = 1; $i <= $rendezVousDocteur->lastPage(); $i++)
                                                        <li class="page-item {{ ($rendezVousDocteur->currentPage() === $i) ? 'active' : '' }}">
                                                            <a class="page-link" href="{{ $rendezVousDocteur->url($i) }}">{{ $i }}</a>
                                                        </li>
                                                    @endfor

                                                    {{-- Lien vers la page suivante --}}
                                                    @if ($rendezVousDocteur->hasMorePages())
                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $rendezVousDocteur->nextPageUrl() }}" rel="next">&raquo;</a>
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                      <div class="col-md-12 col-sm-6  ">
                                        <div class="x_panel">
                                          <div class="x_title">
                                            <h2>Rendez-vous pour le docteur <small>{{ Auth::user()->name }}</small></h2>
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
                                            <ul class="list-unstyled timeline">
                                              @forelse ( $rendezVousDocteur as $rdv )
                                                <li>
                                                    <div class="block">
                                                    <div class="tags">
                                                        <a href="planifierrendezvous/{{ $rdv->id }}/{{ $rdv->patient->user->id }}" class="tag">
                                                        <span>Planifier</span>
                                                        </a>
                                                    </div>
                                                    <div class="block_content">
                                                        <h2 class="title">
                                                                        <p>{{ \Carbon\Carbon::parse($rdv->created_at)->locale('fr')->diffForHumans() }} par @if ($rdv->patient->user->genre == "Féminin") la patiente @else le patient @endif  {{  $rdv->patient->user->name }}</p>
                                                                    </h2>
                                                        <div class="byline">
                                                            <p>
                                                                Motif :
                                                            </p>
                                                        </div>
                                                        <p class="excerpt">
                                                            {{ $rdv->motif }}
                                                        </p>
                                                    </div>
                                                    </div>
                                                </li>
                                              @empty
                                                    <div class="text-center">
                                                        <p class="text-center" style="font-weight:600; font-size:25px;">Aucun rendez-vous disponible</p>
                                                    </div>
                                              @endforelse
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
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
                    <!-- bootstrap-progressbar -->
                    <script src="/templateDashboard/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
                    <!-- iCheck -->
                    <script src="/templateDashboard/vendors/iCheck/icheck.min.js"></script>
                    <!-- PNotify -->
                    <script src="/templateDashboard/vendors/pnotify/dist/pnotify.js"></script>
                    <script src="/templateDashboard/vendors/pnotify/dist/pnotify.buttons.js"></script>
                    <script src="/templateDashboard/vendors/pnotify/dist/pnotify.nonblock.js"></script>

                    <!-- Custom Theme Scripts -->
                    <script src="/templateDashboard/build/js/custom.min.js"></script>

                </body>
            </html>
        @endif
    @endauth
@endif
