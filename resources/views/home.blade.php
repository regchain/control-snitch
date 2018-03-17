@extends('vendor.lapdu.templates.alpha.template')

@section('title', 'Pengaduan Masyarakat')

@section('judulhalaman', 'KEJAKSAAN AGUNG')

@section('subjudul', 'REPUBLIK INDONESIA')

@section('stylesheets')
@endsection

@section('content')
    <section id="fitur" class="box">
        <header class="major">
            <h2>Pengaduan Masyarakat / Whistle Blowing System (WBS)</h2>
            <p>JAKSA AGUNG MUDA BIDANG PENGAWASAN</p>
        </header>

        <span  id="fitur" class="image featured"><img src="{{ asset('vendor/lapdu/templates/alpha/images/jam.jpg')}}" alt="" /></span>

        <div class="main">
            <section>
                <div class="inner">
                    <div class=" pull-right">
                        <a href="#info">
                            <i class="fa fa-arrow-down x2"> </i> ke bawah
                        </a>
                    </div>

                    <h3>Akuntabilitas Pengaduan Masyarakat</h3>
                </div>

                @include('vendor.lapdu.guest.pages.public_info1')
            </section>
        </div>
    </section>

    <section id="info" class="box special features">
        <div class="features-row">
            <section>
                <span class="icon major fa-bullhorn accent1"></span>
                <h3>PENGADUAN MASYARAKAT</h3>
                <ul class="actions">
                    <li><a href="{{ route('lapdu.howtolapdu') }}" class="button alt">Lihat Detil</a></li>
                </ul>
            </section>

            <section id='#whistle'>
                <span class="icon major fa-user-secret accent3"></span>
                <h3>WHISTLE BLOWER</h3>
                <ul class="actions">
                    <li><a href="{{ route('lapdu.howtowhistle') }}" class="button alt">Lihat Detil</a></li>
                </ul>
            </section>
        </div>

        <div class="features-row">
            <section>
                <span class="icon major fa-search-plus accent4"></span>
                <h3>KAWAL PENGADUAN</h3>
                <ul class="actions">
                    <li><a href="{{ route('lapdu.trace') }}" class="button alt">Lihat Detil</a></li>
                </ul>
            </section>

            <section>
                <span class="icon major fa-lock accent5"></span>
                <h3>PERLINDUNGAN SAKSI</h3>
                <ul class="actions">
                    <li><a href="#" class="button alt">Lihat Detil</a></li>
                </ul>
            </section>
        </div>
    </section>

    <div class="row">
        <div class="6u 12u(narrower)">

            <section class="box special">
                <span class="image featured"><img src="{{ asset('vendor/lapdu/templates/alpha/images/hormat.jpg')}}" alt="" /></span>
                <h3>Pengaduan Masyarakat</h3>
                {{-- <p>J.A.M BIDANG PENGAWASAN tidak akan menindaklanjuti:<br>
                        Pengaduan yang tidak jelas maupun pengaduan mengenai dugaan terjadinya suatu tindak pidana.
                    </p> --}}
                    <ul class="actions">
                    <li><a href="{{ route('lapdu.question', ['page' => 1]) }}" class="button special">Lapor!</a></li>
                    </ul>
            </section>

        </div>

        <div class="6u 12u(narrower)">

            <section class="box special">
                <span class="image featured"><img src="{{ asset('vendor/lapdu/templates/alpha/images/ja.jpg')}}" alt="" /></span>
                <h3>Whistle Blower</h3>
                {{-- <p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p> --}}
                <ul class="actions">
                    <li><a href="{{ route('lapdu.question', ['page' => 1]) }}" class="button special">Lapor!</a></li>
                </ul>
            </section>
        </div>
    </div>
@endsection

@section('scripts')
    </script>
@endsection
