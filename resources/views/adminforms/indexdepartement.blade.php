<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Liste departement</title>

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
                        @include('layouts.sidebaradmin')
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
                @include('layouts.nav')
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>Liste des batiments</h3>
                            </div>
                            <div class="title_right">
                                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                                <div class="input-group">
                                    <form action="{{ route('departement.search') }}" method="GET" class="input-group">
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
                    <p class="text-muted font-13 m-b-30">
                      DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                    </p>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>NOM DEPARTEMENTS</th>
                          <th>TELEPHONE DEPARTEMENTS</th>
                          <th>EMAIL DEPARTEMENTS</th>
                          <th>HEURE VISITE</th>
                          <th>SERVICES</th>
                          <th>BATIMENTS</th>
                          <th>DESCRIPTIONS</th>
                          <th>SERVICES OFFERTS</th>
                          <th>ACTION</th>
                        </tr>
                      </thead>


                      <tbody>
                        @if (isset($searchResults))
                            @foreach($searchResults as $dep)
                            <tr>
                                <td>{{$dep->id}}</td>
                                <td>{{$dep->nom}}</td>
                                <td>{{$dep->telephone}}</td>
                                <td>{{$dep->mail}}</td>
                                <td>{{$dep->heures_de_visite}}</td>
                                <td>{{$dep->service->nom}}</td>
                                <td>{{ $dep->batiment->nom }}</td>
                                <td>{{$dep->description}}</td>
                                <td>{{$dep->services_offerts}}</td>
                                <td>
                                    <a href="{{ route('editdepartement',$dep->id)}}" class="btn btn-success">✏</a>
                                    <form method="POST" action="{{route('deletedepartement',$dep->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger " title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>🗑</button>
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
                            @foreach($departement as $dep)
                            <tr>
                                <td>{{$dep->id}}</td>
                                <td>{{$dep->nom}}</td>
                                <td>{{$dep->telephone}}</td>
                                <td>{{$dep->mail}}</td>
                                <td>{{$dep->heures_de_visite}}</td>
                                <td>{{$dep->service->nom}}</td>
                                <td>{{ $dep->batiment->nom }}</td>
                                <td>{{$dep->description}}</td>
                                <td>{{$dep->services_offerts}}</td>
                                <td>
                                    <a href="{{ route('editdepartement',$dep->id)}}" class="btn btn-success">✏</a>
                                    <form method="POST" action="{{route('deletedepartement',$dep->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger " title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>🗑</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <ul class="pagination">
                                            {{-- Lien vers la page précédente --}}
                                            @if ($departement->currentPage() > 1)
                                                <li class="page-item">
                                                    <a class="page-link" href="{{ $departement->previousPageUrl() }}" rel="prev">&laquo;</a>
                                                </li>
                                            @endif

                                            {{-- Liens vers les pages --}}
                                            @for ($i = 1; $i <= $departement->lastPage(); $i++)
                                                <li class="page-item {{ ($departement->currentPage() === $i) ? 'active' : '' }}">
                                                    <a class="page-link" href="{{ $departement->url($i) }}">{{ $i }}</a>
                                                </li>
                                            @endfor

                                            {{-- Lien vers la page suivante --}}
                                            @if ($departement->hasMorePages())
                                                <li class="page-item">
                                                    <a class="page-link" href="{{ $departement->nextPageUrl() }}" rel="next">&raquo;</a>
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
