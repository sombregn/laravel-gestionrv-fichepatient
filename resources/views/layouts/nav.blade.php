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
                <span class="badge bg-green">{{ $totalMailsRecu }}</span>
            </a>
            @php $count = 0 @endphp
            <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                @foreach($mailrecuNonlus as $mailrecuNonlu)
                    @if($count < 4)
                        <li class="nav-item">
                            <a class="dropdown-item">
                                <span class="image"><img src="{{ asset($mailrecuNonlu->sender->photo) }}" alt="Profile Image" /></span>
                                <span>
                                <span>{{ $mailrecuNonlu->sender->name}}</span>
                                <span class="time">{{ \Carbon\Carbon::parse($mailrecuNonlu->created_at)->locale('fr')->diffForHumans() }}</span>
                                </span>
                                <span class="message">
                                    {{ Str::limit($mailrecuNonlu->message, 73, '...') }}
                                </span>
                            </a>
                        </li>
                    @endif
                    @php $count++ @endphp
                @endforeach

                @if(count($mailrecuNonlus) > 4)
                    <li class="nav-item">
                        <div class="text-center">
                            <a href="/listemessages" class="dropdown-item">
                            <strong>Voir tous les messages</strong>
                            <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </li>
                @endif
            </ul>
            </li>
        </ul>
        </nav>
    </div>
</div>
