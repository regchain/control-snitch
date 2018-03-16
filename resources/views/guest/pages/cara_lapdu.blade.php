@extends('vendor.lapdu.templates.alpha.templatealt')

@section('title', 'Pengaduan Masyarakat')

@section('judulhalaman', 'KEJAKSAAN AGUNG')

@section('subjudul', 'REPUBLIK INDONESIA')

@section('content')
    <header>
        <h2>Tata Cara</h2>
        <p>PENGADUAN MASYARAKAT</p>
    </header>

    <div class="box">
        <span class="image featured"><img src="{{ asset('vendor/lapdu/templates/alpha/images/pic01.jpg') }}" alt="" /></span>
        <h3>Kewenangan Jaksa Agung Muda Bidang Pengawasan</h3>
        <p>Perlu diinformasikan bahwa Kejaksaan RI hanya memiliki wewenang untuk melakukan penyidikan terhadap tindak pidana tertentu yang diatur secara khusus oleh undang-undang, di antaranya adalah tindak pidana korupsi, perikanan, dan pelanggaran HAM berat yang penyidikannya sudah mendapat persetujuan DPR. Setiap pengaduan yang diterima melalui website ini akan ditangani oleh Pejabat Pengawasan Fungsional dan Pegawai pada Jaksa Agung Muda Bidang Pengawasan. (JAMWAS)</p>
        <div class="row">
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
        </div>
        <div class="row"></div>
        <h3>Pertanyaan Umum</h3>
        <ol>
            <li><strong>Siapa yang boleh menyampaikan pengaduan melalui website ini?</strong>
                <ul>
                    <li>Siapa pun dapat menyampaikan laporan pengaduan mengenai dugaan pelanggaran perilaku atau dugaan perbuatan tercela yang dilakukan pegawai Kejaksaan RI baik jaksa maupun Tata Usaha.
                    </li><li>Sepanjang Anda memiliki pengetahuan, informasi atau keterangan mengenai suatu dugaan pelanggaran perilaku atau dugaan perbuatan tercela yang dilakukan pegawai Kejaksaan RI baik jaksa maupun Tata Usaha, Anda dapat menyampaikan pengaduan Anda, meskipun Anda bukan merupakan pihak yang terkait langsung dengan dugaan pelanggaran perilaku atau dugaan perbuatan tercela tersebut.
                </li></ul>
            </li>
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
            <li><strong>Bagaimana cara mengetahui bahwa Pengaduan yang disampaikan sudah diterima dan tersimpan dengan baik dalam database Pengaduan Kejaksaan?</strong> <br>
                Apabila Anda mencantumkan email Anda dengan benar ketika menyampaikan pengaduan, sistem teknologi informasi dari website Kejaksaan akan mengirimkan email konfirmasi apabila pengaduan sudah diterima dan tersimpan dalam database Pengaduan Kejaksaan. Email konfirmasi tersebut juga memuat nomor registrasi pengaduan Anda. Nomor registrasi tersebut akan berguna bagi Anda dalam memantau tindak lanjut terhadap pengaduan Anda melalui pengumuman dalam website. </li>

            <li><strong>Bagaimana cara untuk mengetahui tindak lanjut yang dilakukan terhadap pengaduan yang disampaikan?</strong> <br>
                Tindak lanjut yang dilakukan terhadap setiap pengaduan yang diterima akan diumumkan melalui fitur Perkembangan Penanganan Pengaduan yang ada pada website Kejaksaan, berdasarkan nomor registrasi masing-masing. Untuk itu, penting bagi Anda sebagai Pelapor untuk mengingat atau mencatat dengan baik nomor registrasi dari pengaduan yang Anda sampaikan.
            </li>
        </ol>
        <ul class="actions">
            <li><a href="{{ route('lapdu.question', ['page' => 1]) }}" class="button special">Lapor!</a></li>
        </ul>
    </div>
@endsection
