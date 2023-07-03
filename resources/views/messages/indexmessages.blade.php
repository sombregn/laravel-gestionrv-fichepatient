<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Liste des messages</title>

    <link rel="stylesheet" href={{ asset('templateDashboard/vendors/bootstrap/dist/css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('templateDashboard/vendors/font-awesome/css/font-awesome.min.css') }}>
    <link rel="stylesheet" href={{ asset('templateDashboard/vendors/nprogress/nprogress.css') }}>
    <link rel="stylesheet" href={{ asset('templateDashboard/vendors/google-code-prettify/bin/prettify.min.css') }}>
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
            @if (Auth::user()->roles()->where('nom', 'admin')->exists())
                @include('layouts.sidebaradmin')
            @endif

            @if(Auth::user()->roles()->where('nom', 'docteur')->exists())
                @include('layouts.sidebardoc')
            @endif

            @if(Auth::user()->roles()->where('nom', 'patient')->exists())
                    @include('layouts.sidebarpat')
            @endif
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
                <h3>Boîte de réception</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tous les méssages</h2>
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
                      <div class="col-sm-3 mail_list_column" id="message-container">
                        <a href="" class="btn btn-sm btn-success btn-block text-white"><i class="fa-solid fa-pen"></i> Nouveau message</a>
                        @forelse ($messages as $message)
                            <a href="{{ route('messages.index', $message->id) }}">
                                @if ($message->read_at == null)
                                    <div class="mail_list bg-" style="background-color: rgb(215, 215, 215);">
                                        <div class="left">
                                            <i class="fa fa-circle"></i> <i class="fa fa-edit"></i>
                                        </div>
                                        <div class="right">
                                            <h3>{{ $message->sender->name }} <small style="color: rgb(105, 105, 105);">{{ \Carbon\Carbon::parse($message->created_at)->locale('fr')->diffForHumans() }}</small></h3>
                                            <p>{{ Str::limit($message->message, 73, '...') }}</p>
                                        </div>
                                    </div>
                                @else
                                    <div class="mail_list" >
                                        <div class="left">
                                            <i class="fa fa-circle"></i> <i class="fa fa-edit"></i>
                                        </div>
                                        <div class="right">
                                            <h3>{{ $message->sender->name }} <small>{{ \Carbon\Carbon::parse($message->created_at)->locale('fr')->diffForHumans() }}</small></h3>
                                            <p>{{ Str::limit($message->message, 73, '...') }}</p>
                                        </div>
                                    </div>
                                @endif
                            </a>
                        @empty
                            <div class="text-center">
                                <a href="#">Aucun message</a>
                            </div>
                        @endforelse
                      </div>
                      <!-- /MAIL LIST -->

                      <!-- CONTENT MAIL -->
                        <div class="col-sm-9 mail_view" id="message-details">
                            @if ($selectedMessage)
                            <div class="inbox-body">
                                <div class="mail_heading row">
                                    <div class="col-md-8">
                                    <div class="btn-group">
                                        <a href="" class="btn btn-sm btn-primary"><i class="fa fa-reply"></i> Répendre</a>
                                    </div>
                                    </div>
                                    <div class="col-md-4 text-right">
                                    <p class="date"></p>
                                    </div>
                                    <div class="col-md-12">
                                    <h4>{{ $selectedMessage->subject }}</h4>
                                    </div>
                                </div>
                                <div class="sender-info">
                                    <div class="row">
                                    <div class="col-md-12">
                                        <strong>{{$selectedMessage->sender->name  }}</strong>
                                        <span>{{$selectedMessage->sender->email  }}</span> à
                                        <strong>moi</strong>
                                        <a class="sender-dropdown"><i class="fa fa-chevron-down"></i></a>
                                    </div>
                                    </div>
                                </div>
                                <div class="view-mail" style="padding-top: 5%;">
                                    <p>{{ $selectedMessage->message }}</p>
                                    <p>{{ $selectedMessage->cliquesurlurl }}</p><a href="/historiquerendez-vous">mon historiques</a>
                                </div>
                                <div class="attachment">
                                    <p>
                                    <span><i class="fa fa-paperclip"></i> 3 pièces jointes — </span>
                                    <a href="#">Télécharger toutes les images</a> |
                                    <a href="#">Visionner toutes les images</a>
                                    </p>
                                    <ul>
                                    <li>
                                        <a href="#" class="atch-thumb">
                                        <img src="images/inbox.png" alt="img" />
                                        </a>

                                        <div class="file-name">
                                        image-name.jpg
                                        </div>
                                        <span>12KB</span>


                                        <div class="links">
                                        <a href="#">Visionner</a> -
                                        <a href="#">Télécharger</a>
                                        </div>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                            @endif
                        </div>
                      <!-- /CONTENT MAIL -->
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


    <script src="{{ asset('templateDashboard/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('templateDashboard/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('templateDashboard/vendors/fastclick/lib/fastclick.js') }}"></script>
    <script src="{{ asset('templateDashboard/vendors/nprogress/nprogress.js') }}"></script>
    <script src="{{ asset('templateDashboard/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
    <script src="{{ asset('templateDashboard/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
    <script src="{{ asset('templateDashboard/vendors/google-code-prettify/src/prettify.js') }}"></script>
    <script src="{{ asset('templateDashboard/build/js/custom.min.js') }}"></script>

    <script>
        // Écoute l'événement de clic sur les liens des messages
        document.querySelectorAll('#message-container a').forEach(function(link) {
            link.addEventListener('click', function(e) {
                // Empêche le comportement par défaut du lien
                e.preventDefault();

                // Récupère l'URL du lien
                var url = link.getAttribute('href');

                // Effectue la redirection vers l'URL
                window.location.href = url;
            });
        });
    </script>
  </body>
</html>


