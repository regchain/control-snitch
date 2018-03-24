@extends('elapdu.operator.template')

@section('title', 'Klarifikasi')

@section('judulhalaman', 'Permohonan Klarifikasi')

@section('subjudul', 'Kejaksaan AgungRepublik Indonesia')

@section('stylesheets')

<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('/bower_components/select2/dist/css/select2.min.css')}}">

@endsection

@section('content')

<!-- Default box -->
<div class="box">
  <div class="box-header with-border">
    <small class="pull-right">WAS-3</small>
    <h1 class="box-title">PERMINTAAN KLARIFIKASI</h1>

  </div>

  <div class="box-body">
    <div class="row">
    <div class="col-md-8 col-sm-8 col-xs-12">

      <div class="col-md-2 col-sm-3 col-xs-3 text-right"><strong>No.:</strong></div>
      <div class="col-md-10 col-sm-9 col-xs-9">
        <div class="input-group">
          <span class="input-group-addon">R -</span>
          <input type="text" class="form-control" placeholder="Nomor">
        </div>
      </div>
      <div class="col-md-2 col-sm-3 col-xs-3 text-right"><strong>Sifat:</strong></div>
      <div class="col-md-10 col-sm-9 col-xs-9">Rahasia</div>
      <div class="col-md-2 col-sm-3 col-xs-3 text-right"><strong>Lampiran:</strong></div>
      <div class="col-md-10 col-sm-9 col-xs-9">1 (satu) berkas</div>
      <div class="col-md-2 col-sm-3 col-xs-3 text-right"><strong>Perihal:</strong></div>
      <div class="col-md-10 col-sm-9 col-xs-9"><strong>Permintaan Klarifikasi Terhadap Lapdu an [Nama Terlapor] [Jabatan] .</strong><br> </div>

    </div><!-- /.LEFT COLUMNT -->
    


    <div class="col-md-4 col-sm-4  col-xs-12">

      <!-- Date -->
      <div class="form-group">
        <div class="input-group date">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          <input type="text" class="form-control pull-right" id="was3" placeholder="Tanggal">
        </div>
        <!-- /.input group -->
      </div>
      <!-- /.form group -->
      <div class="form-group">
        <label>Kepada Yth.</label>
        <select class="form-control select2" style="width: 100%;">
          <option selected="selected">KEPALA KEJAKSAAN</option>
          <optgroup label="KEJAKSAAN TINGGI">
            <option>DKI JAKARTA</option>
            <option>JAWA BARAT</option>
            <option>JAWA TENGAH</option>
            <option>JAWA TIMUR</option>
            <option>.....</option>
          </optgroup>
          <optgroup label="KEJAKSAAN NEGERI">
            <option>...</option>
            <option>...</option>
            <option>....</option>
          </optgroup>
        </select>
      </div>



    </div><!-- /.RIGHT columnt -->

    <div class="col-md-10 col-md-offset-2">
      <!-- /.b.bodox-header -->
      <p>Bersama ini disampaikan copy surat Laporan Pengaduan dari [Nama Pelapor] tanggal
          [Tanggal laporan] yang ditujukan kepada [............] dan tembusan antara lain kepada [......... . ,] yang
        pada pokoknya menyampaikan sebagai berikut :</p>
        <ul>
          <li>(identitas pegawai kejaksaan) : [Nama Lengkap], [Pangkat], [Jabatan], [NIP] | [NRP] </li>
          <li>lsi ringkas laporan [Perihal]</li>
        </ul>

        <p>Sehubungan dengan hal tersebut diminta Saudara untuk :</p>
        <ol>
          <li>Melakukan Klarifikasi terhadap Laporan Pengaduan dimaksud</li>
          <li>Apabila berdasarkan hasil Klarifikasi ditemukan bukti awal telah terjadi perbuatan
            pelanggaran disiplin, agar Saudara segera melakukan lnspeksi Kasus dengan
            ketentuan sebagai berikut :
            <ul>
              <li>Pelaksanaan lnspeksi Kasus agar berpedoman pada BAB IV Bagian
                Kesembilan dan BAB VI Bagian keempat PERJA Nomor : PER-
                022/A/JA/03/2011 tentang Penyelenggaraan Pengawasan Kejaksaan
              Republik Indonesia.</li>
              <li>Apabila Saudara tidak melaksanakan ketentuan poin a tersebut di atas,
              pemeriksaan akan dlambil ·alih oleh Kejaksaan Agung R.1./Kejati</li>
              <li>sesuai dengan Pasal 5 ayat (3) Nota Kesepahaman Jaksa Agung R.I.
                dengan Ketua Komisi Kejaksaan R.I., tembusan Surat Perintah lnspeksi
                Kasus disampaikan kepada Jaksa Agung R.I., Jaksa Agung Muda
              Pengawasan dan Ketua Komisi Kejaksaan R.I.</li>
              <li>Apabila tidak ditindaklanjuti tepat waktu akan mempengaruhi konduite
              Saudara</li>
            </ul>
          </li>
          <li>Tindak lanjut point 1 dan atau 2 agar diberitahukan kepada Jaksa Agung Muda
          Pengawasan/KAJA Tl *) dengan menggunakan sarana tercepat (faksimile / email)</li>
        </ol> 

        <p>Demikian untuk dilaksanakan.</p>

      <!-- /.box -->
    </div>


    
</div>
  </div>


  


<div class="box-footer">
  <!-- this row will not appear when printing -->
  <div class="row no-print">
    <div class="col-xs-12">
      <a href='#' class="btn btn-flat btn-info pull-right"><i class="fa fa-save"></i> Simpan
      </a>
      <a href='laporan_disposisi' class="btn btn-flat btn-danger pull-right" style="margin-right: 5px;">
        <i class="fa fa-exclamation-triangle"></i> Batal
      </a>
    </div>
  </div>
<!-- /.content -->
</div>
<!-- /.box-footer-->
</div>
<!-- /.box -->

@endsection

@section('scripts')
<!-- Select2 -->
<script src="{{ asset('/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{ asset('/bower_components/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

<script src="{{ asset('/bower_components/ckeditor/ckeditor.js')}}"></script>


<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
          //iCheck for checkbox and radio inputs
          $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass   : 'iradio_minimal-blue'
          })
          //Red color scheme for iCheck
          $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass   : 'iradio_minimal-red'
          })
          //Flat red color scheme for iCheck
          $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass   : 'iradio_flat-green'
          })
          //Date picker
          $('#datepicker').datepicker({
            autoclose: true
          })
          //Date picker
          $('#datepicker2').datepicker({
            autoclose: true
          })
        //Date picker
        $('#notadinas').datepicker({
          autoclose: true
        })
        //Date picker
        $('#klarifikasi').datepicker({
          autoclose: true
        })

         // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()

      })
    </script>
    @endsection