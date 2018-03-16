@extends('vendor.lapdu.templates.alpha.templatealt')

@section('title', 'Pengaduan Masyarakat')

@section('judulhalaman', 'KEJAKSAAN AGUNG')

@section('subjudul', 'REPUBLIK INDONESIA')

@section('content')
    <header>
        <h2>Tata Cara</h2>
        <p>WHISTLE BLOWER</p>
    </header>

    <div class="box">
        <span class="image featured"><img src="{{ asset('vendor/lapdu/templates/alpha/images/pic01.jpg') }}" alt="" /></span>
        <h3>Siapa Whistle Blower?</h3>
        <p><blockquote><br><br><br><br><br><br></blockquote></p>
        {{-- <div class="row">
            <div class="6u 12u(mobilep)">
            <h4>JAMWAS Dapat Menerima</h4>
            <blockquote>Penerimaan pengaduan masyarakat / Whistle Blowing System (WBS) melalui website ini adalah untuk pengaduan yang berkaitan dengan dugaan <strong class="text-red">PELANGGARAN PERILAKU</strong> ataupun <strong class="text-red">KETIDAK-PROFESIONALAN <u><i>JAKSA</i></u> dan <u><i>PEGAWAI T.U.</i></u></strong> dalam melaksanakan tugas.</blockquote>
            </div>
            <div class="6u 12u(mobilep)">
            <h4>JAMWAS Tidak akan menindaklanjuti</h4>
            <blockquote><ol>
                    <li><strong>Pengaduan yang tidak jelas.</strong></li>
                    <li><strong>Pengaduan mengenai dugaan terjadinya suatu tindak pidana.</strong>
                        <br>Pengaduan atau informasi mengenai dugaan terjadinya tindak pidana tertentu tersebut dapat Anda sampaikan kepada Kejaksaan Tinggi maupun Kejaksaan Negeri di wilayah di mana tindak pidana tersebut terjadi.
                    </li>
                </ol></blockquote>
            </div>
        </div> --}}
        <div class="row"></div>
        <h3>Pertanyaan Umum</h3>
        <ol>
            <li><strong>Bagaimana cara menyampaikan pengaduan?</strong>
                <ul>
                    <li>Isilah kolom-kolom yg tersedia pada fitur pengaduan yang tersedia dalam website ini.</li>
                    <li>Uraikan tindakan/perbuatan Jaksa atau Pegawai Kejaksaan yang Anda laporkan pada kolom Pengaduan. Upayakan Anda menuliskannya dalam bahasa Indonesia yang baik dan jelas, dengan memuat peristiwa yang berkaitan dengan tindakan/perbuatan yang dilaporkan secara kronologis dan sistematis.</li>
                    <li>Untuk memudahkan tindak lanjut terhadap pengaduan Anda, pastikan Anda mencantumkan informasi-informasi sebagai berikut:
                        <ol>
                            <li>Nama Terlapor (Jaksa/Pegawai Kejaksaan yang Anda laporkan),
                            </li><li>Satuan kerja (Kejaksaan Tinggi/Kejaksaan Negeri/Cabang Kejaksaan Negeri) tempat Terlapor bertugas, dan
                            </li><li>Nama Tersangka/Terdakwa/materi perkara yang berkaitan dengan pengaduan yang Anda sampaikan (jika tindakan/perbuatan yang dilaporkan berkaitan dengan penanganan suatu perkara).
                        </li></ol>
                    </li>
                    <li>Anda juga dapat melampirkan dokumen-dokumen dalam bentuk file elektronik sebagai bukti/keterangan dari pengaduan yang Anda sampaikan dengan fasilitas upload dokumen yang tersedia pada fitur Pengaduan.</li>
                </ul>
            </li>
        </ol>

        <ul class="actions">
            <li><a href="{{ route('lapdu.question', ['page' => 1]) }}" class="button special">Lapor!</a></li>
        </ul>
    </div>
@endsection
