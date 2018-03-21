<header id="header">
    <h1><a href="{{ route('lapdu.home') }}">eLAPDU</a> | J.A.M. PENGAWASAN</h1>

    <nav id="nav">
        <ul>
            <li><a href="{{ url('lapdu.home') }}">Awal</a></li>
            <li>
                <a href="#" class="icon fa-angle-down">Aplikasi</a>
                <ul>
                    <li><a href="{{ route('lapdu.howtolapdu') }}">Cara Pengaduan</a></li>
                    <li><a href="{{ route('lapdu.howtowhistle') }}">Whistle Blower</a></li>
                    <li><a href="{{ route('lapdu.howtowhistle') }}">Perlindungan Saksi</a></li>
                    <li><a href="{{ route('lapdu.question', ['page' => 1]) }}">Lapor..!</a></li>
                    <li><a href="{{ route('lapdu.trace') }}">Periksa Pengaduan</a></li>
                    {{-- <li>
                        <a href="#">Masuk</a>
                        <ul>
                            <li><a href="#">Option One</a></li>
                            <li><a href="#">Option Two</a></li>
                            <li><a href="#">Option Three</a></li>
                            <li><a href="#">Option Four</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </li>
            <li><a href="{{ route('lapdu.trace') }}" class="button">Masuk</a></li>
            <li><a href="{{ route('register') }}" class="button">Buat Akun</a></li>
        </ul>
    </nav>
</header>

