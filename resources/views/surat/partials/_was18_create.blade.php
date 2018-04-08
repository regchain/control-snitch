
  <div class="box-body">
    <div class="col-md-2"><label>Kepada Yth.</label></div>
      <div class="col-md-10">
      <div class="form-group">
        <select class="form-control select2" style="width: 100%;">
          <option selected="selected">J.A.M Bidang Pengawasan</option>
          <optgroup label="Bidang Teknis">
            <option>J.A.M Bidang Pembinaan</option>
            <option>J.A.M Bidang Intelijen</option>
            <option>J.A.M Bidang Pidum</option>
            <option>J.A.M Bidang Pidsus</option>
            <option>J.A.M Bidang Datun</option>
          </optgroup>
          <optgroup label="Kejaksan Tinggi">
            <option>Kepala Kejaksaan</option>
            <option>Asisten..</option>
            <option>Kasi..</option>
          </optgroup>
        </select>
      </div>
    </div>
      <div class="col-md-2"><label>Dari</label></div>
      <div class="col-md-10">
      <div class="form-group">
          <select class="form-control select2" style="width: 100%;">
            <option>J.A.M Bidang Pengawasan</option>
            <optgroup label="INSPEKTUR">
            <option selected="selected">INSPEKTUR I</option>
            <option>INSPEKTUR II</option>
            <option>INSPEKTUR III</option>
            <option>INSPEKTUR IV</option>
            <option>INSPEKTUR V</option>
            <option>INSPEKTUR VI</option>
          </optgroup>
          </select>
        </div>
      </div>
      <div class="col-md-2"><label>Tanggal</label></div>
      <div class="col-md-10">
      <!-- Date -->
      <div class="form-group">
        <div class="input-group date">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          <input type="text" class="form-control pull-right" id="datepicker">
        </div>
        <!-- /.input group -->
      </div>
      <!-- /.form group -->
    </div>
      <div class="col-md-2"><label>No.</label></div>
      <div class="col-md-10">
      <div class="input-group">
          <span class="input-group-addon">ND -</span>
          <input type="text" class="form-control" placeholder="Nomor">
        </div>
    </div>
      <div class="col-md-2"><label>Sifat</label></div>
      <div class="col-md-10"><p>: Rahasia</p></div>
      <div class="col-md-2"><label>Lampiran</label></div>
      <div class="col-md-10">
      <div class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="1">
            <span class="input-group-addon">berkas</span>
          </div>
        </div>
      </div>
      <div class="col-md-2"><label>Perihal</label></div><div class="col-md-10"><p>:  <strong>Penerbitan Surat Keputusan Penjatuhan Hukuman Disiplin Terhadap Terlapor atas nama [Nama Terlapor], [Jabatan] [Satuan Kerja], [NRP, [NIP] </strong> </p></div>
    </div>
<hr>
<div class="box-body">
<div class="col-md-10 col-md-offset-1">
<p>Sehubungan dengan disposisi Jaksa Agung tanggal [Tanggal Surat] pada Nota Dinas Jaksa Agung Muda Pengawasan Nomor : [Nomor Surat] tanggal [Tanggal Surat] telah memutuskan untuk menjatuhkan hukuman disiplin [ringan / sedang / berat] berupa [Hukuman] terhadap terlapor atas nama [Terlapor] , bersama ini dengan hormat diharapkan menandatangani Surat Keputusan Penjatuhan Hukuman Disiplin (terlampir), dengan penjelasan sebagai berikut :</p>
<p>
  <div class="box-body">
    @include('lapdu::lapdu.partials.terhukum_view')
    @include('lapdu::klarifikasi.partials._jaksapengawas')
    @include('lapdu::lapdu.partials.terlapor_view')
    @include('lapdu::lapdu.partials.kasus_view')
<ol style="list-style-type: lower-alpha; margin-left: -20px">
  <li>lsi laporan (nomor, tanggal/tahun laporan, pokok-pokok laporan);</li>
<li>Jenis pelanggaran disiplin yang dilakukan;</li>
<li>Pasal yang dilanggar;</li>
<li>Sanksi pasal yang dilanggar .</li>
</ol>
  </div>
</p>
<p>Demikian kami sampaikan, kiranya dapat dimaklumi .</p>
<p class="text-right">JAKSA AGUNG MUDA PENGAWASAN

</p>
</div>
</div>


<!-- /.box -->
