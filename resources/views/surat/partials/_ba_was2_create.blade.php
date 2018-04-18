<div class="description-block">
                    <span class="description-text">R A H A S I A</span>
                    <h5 class="description-header">BERITA ACARA HASIL WAWANCARA</h5>
                  </div>


<div class="box-body">
  <div class="col-sm-3">

  </div>
<div class="col-sm-6"></div>

  <div class="col-sm-3">
    <div class="form-group">
    <div class="input-group date">
      <div class="input-group-addon">
        <i class="fa fa-calendar"></i>
      </div>
      <input type="text" class="form-control pull-right" id="ba_was2" placeholder="Tanggal Berita Acara">
    </div>
    <!-- /.input group -->
  </div>
  <!-- /.form group -->
  </div>
</div>

<div class="box-body">
    <div id="tabs">
      <ul>
        <li><a href="#tabs-1">Pejabat Pemeriksa</a></li>
        <li><a href="#tabs-2">Pelapor /Saksi</a></li>
        <li><a href="#tabs-3">Terlapor / Saksi</a></li>
        <li><a href="#tabs-4">Hasil Wawancara</a></li>
      </ul>
      <div id="tabs-1">
        <div class="row">
          <p>Pada hari ini <b>[tanggal berita acara]</b> , bertempat di <b>[institusi]</b> saya / kami *) :</p>
          @include('control-snitch::klarifikasi.partials._jaksapengawas_create')
        </div>
      </div>
      <div id="tabs-2">
        <div class="row">
          <p>berdasarkan Surat Perintah <b>[Jabatan / institusi] [Nomor surat] [Tanggal Surat]</b>, telah melakukan wawancara terhadap :</p>
          @include('control-snitch::lapdu.partials.pelapor_edit')
        </div>
      </div>
      <div id="tabs-3">
        <div class="row">
          <p>berdasarkan Surat Perintah <b>[Jabatan / institusi] [Nomor surat] [Tanggal Surat]</b>, telah melakukan wawancara terhadap :</p>
          @include('control-snitch::lapdu.partials.terlapor_edit')
        </div>
      </div>
      <div id="tabs-4">
        <div class="row">
          <p>Dengan hasil sebagai berikut :</p>
          @include('control-snitch::surat.partials._ba_was2_list')
        </div>
      </div>
    </div>
    <br>
    <p>Demikian Berita Acara Wawancara ini dibuat dengan sebenarnya atas kekuatan Sumpah Jabatan, kemudian ditutup dan ditandatangani pada waktu dan tempat sebagaimana tersebut di atas.</p>
  </div>
