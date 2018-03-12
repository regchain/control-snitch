<!-- Main Header -->
<header class="main-header">
    <!-- Logo -->
    <a href="{{ route('lapdu.home') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
            <h2 class="fa fa-arrow-right"> </h2>
        </span>

        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
            <img src="{{asset('vendor/core/admin-lte/dist/img/logo-kejaksaan-small.png')}}" height="50">
        </span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <!-- Notifications Menu -->
                <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-warning">3</span>
                    </a>
                    <ul class="dropdown-menu">
                    <li class="header">Anda memiliki 3 Notifikasi</li>
                    <li>
                        <!-- Inner Menu: contains the notifications -->
                        <ul class="menu">
                        <li><!-- start notification -->
                            <a href="#">
                            <i class="fa fa-envelope"></i> Pengaduan tahap karifikasi
                            </a>
                            <a href="#">
                            <i class="fa fa-envelope"></i> Pengaduan tahap wawancara
                            </a>
                            <a href="#">
                            <i class="fa fa-envelope"></i> Telaahan sudah selesai
                            </a>
                            <a href="#">
                            <i class="fa fa-envelope-open-o text-grey"></i> Pengaduan sedang ditelaah
                            </a>
                            <a href="#">
                            <i class="fa fa-envelope-open-o text-grey"></i> Pengaduan sedang kami periksa
                            </a>
                            <a href="#">
                            <i class="fa fa-envelope-open-o text-grey"></i> Pengaduan sudah kami terima
                            </a>
                        </li>
                        <!-- end notification -->
                        </ul>
                    </li>
                    <li class="footer"><a href="#">lihat semua</a></li>
                    </ul>
                </li>

                <!-- User Account Menu -->
                <!-- Authentication Links -->
                @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                @else
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="{{ asset('vendor/core/admin-lte/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="{{ asset('vendor/core/admin-lte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

                            <p>
                            {{ Auth::user()->name }} - [JABATAN]
                            <small>Organisasi</small>
                            </p>
                        </li>
                        <!-- Menu Body -->

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                            {{-- <a href="home#tab_3-2" class="btn btn-default btn-flat">Ubah Profil</a> --}}
                            </div>
                            <div class="pull-right">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">
                                Keluar
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            </div>
                        </li>
                    </ul>
                </li>
                @endif

                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gear"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>