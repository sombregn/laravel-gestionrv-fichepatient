<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MODIFIER section</title>

        <!-- Bootstrap -->
        <link href={{asset('templateDashboard/vendors/bootstrap/dist/css/bootstrap.min.css')}} rel="stylesheet">
        <!-- Font Awesome -->
        <link href={{asset('templateDashboard/vendors/font-awesome/css/font-awesome.min.css')}} rel="stylesheet">
        <!-- NProgress -->
        <link href={{asset('templateDashboard/vendors/nprogress/nprogress.css')}} rel="stylesheet">
        <!-- iCheck -->
        <link href={{asset('templateDashboard/vendors/iCheck/skins/flat/green.css')}} rel="stylesheet">
        <!-- bootstrap-wysiwyg -->
        <link href={{asset('templateDashboard/vendors/google-code-prettify/bin/prettify.min.css')}} rel="stylesheet">
        <!-- Select2 -->
        <link href={{asset('templateDashboard/vendors/select2/dist/css/select2.min.css')}} rel="stylesheet">
        <!-- Switchery -->
        <link href={{asset('templateDashboard/vendors/switchery/dist/switchery.min.css')}} rel="stylesheet">
        <!-- starrr -->
        <link href={{asset('templateDashboard/vendors/starrr/dist/starrr.css')}} rel="stylesheet">
        <!-- bootstrap-daterangepicker -->
        <link href={{asset('templateDashboard/vendors/bootstrap-daterangepicker/daterangepicker.css')}} rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href={{asset('templateDashboard/build/css/custom.min.css')}} rel="stylesheet">
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
                                <h3>Formulaire d'ajout de services</h3>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Veuillez remplir le formulaire</h2>
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
                                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{route('edit',['id'=>$service->id])}}">
                                            @csrf
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nom du service <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" id="first-name" class="form-control" name="nom" value="{{$service->nom}}">
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Numéro de éléphone <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" data-inputmask="'mask' : '(+221) 99-999-9999'" name="telephone" value="{{$service->telephone}}">
                                                </div>
                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="item form-group text-center">
                                                <div class="col-md-6 col-sm-6 offset-md-3">
                                                    <button class="btn btn-primary" type="reset">Effacer</button>
                                                    <button type="submit" class="btn btn-success">Modifier</button>
                                                </div>
                                            </div>
                                        </form>
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
        <script src={{ asset('templateDashboard/vendors/moment/min/moment.min.js') }}></script>
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
