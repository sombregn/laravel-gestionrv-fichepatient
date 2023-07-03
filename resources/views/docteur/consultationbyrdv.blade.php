<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Consultation</title>

    <link rel="stylesheet" href="{{ asset('templateDashboard/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templateDashboard/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templateDashboard/vendors/nprogress/nprogress.css') }}">
    <link rel="stylesheet" href="{{ asset('templateDashboard/build/css/custom.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
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

        <!-- top navigation -->
        @include('layouts.nav')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Consultation</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- Smart Wizard -->

                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                Étape 1<br/>
                                <small>Information du patient</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                Étape 2<br/>
                                          <small>Symptômes et Diagnostic</small>
                                      </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                Étape 3<br />
                                              <small>Prescription et ordonnance</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                                Étape 4<br />
                                <small>Facturation</small>
                            </span>
                          </a>
                        </li>
                      </ul>
                    <form class="form-horizontal form-label-left" method="POST">
                        @csrf
                      <div id="step-1">
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" >Nom complet
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input name="name" type="text"  required="required" class="form-control" value={{ $rendezvous->patient->user->name }}>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" >Adreese
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input name="adresse" type="text"   required="required" class="form-control" value={{ $rendezvous->patient->user->adresse }}>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Date de naissance</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input name="date_de_naissance"  class="form-control col" type="date" value={{ $rendezvous->patient->user->date_de_naissance }}>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Groupe snaguin</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input  class="form-control col" type="text" name="groupe_sanguin" value={{ $rendezvous->patient->user->groupe_sanguin }}>
                              </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Assurance maladie
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input name="assurance_maladie" class="date-picker form-control"  type="text" value={{ $rendezvous->patient->assurance_maladie }}>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Antecedents medicaux
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input name="antecedents_medicaux" id="birthday" class="date-picker form-control"  type="text" value={{ $rendezvous->patient->antecedents_medicaux }}>
                            </div>
                          </div>

                      </div>
                      <div id="step-2">
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" >Symptomes
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input name="symptomes" type="text"  required="required" class="form-control">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" >Diagnostic
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input name="diagnostic" type="text"   required="required" class="form-control">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Traitements</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input name="traitements"  class="form-control col" type="text">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Suivi</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input  class="form-control col" type="text" name="suivi">
                              </div>
                          </div>
                          <div class="form-group row">
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input name="rendez_vous_id" class="date-picker form-control"  type="text" value={{ $rendezvous->id }} hidden>
                            </div>
                          </div>
                      </div>
                      <div id="step-3">
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" >Medicament
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input name="medicament" type="text"  required="required" class="form-control">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" >Posologie
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input name="posologie" type="text"   required="required" class="form-control">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Durée du traitement</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input name="duree_traitement"  class="form-control col" type="number">
                            </div>
                          </div>
                      </div>
                      <div id="step-4">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" >Montant
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                <input name="montant" type="number" step="0.01"  required="required" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" >Statut du paiement
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input name="statut_paiement" type="text"   required="required" class="form-control">
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <button class="btn btn-primary" type="submit">Valider</a>
                            </div>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
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
    <script src="{{ asset('templateDashboard/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js') }}"></script>
    <script src="{{ asset('templateDashboard/build/js/custom.min.js') }}"></script>


  </body>
</html>
