@extends('lapdu::operator.template')

@section('title', 'Kartu Disposisi')

@section('judulhalaman', 'KARTU WAWANCARA')

@section('subjudul', 'Kejaksaan Agung Republik Indonesia')

@section('stylesheets')
<!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css')}}">

<!-- JQueryUI Tabs -->
<link rel="stylesheet" href="{{ asset('/bower_components/jquery-ui/themes/humanity/jquery-ui.css')}}">
<link rel="stylesheet" href="{{ asset('/bower_components/jquery-ui/themes/humanity/theme.css')}}">
<!-- UI Tool Tip -->
<link rel="stylesheet" href="{{ asset('bower_components/jquery-ui/themes/base/jquery-ui.css')}}">
<link rel="stylesheet" href="{{ asset('bower_components/templates/alpha/assets/css/tooltip.css')}}">
  <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="{{ asset('/bower_components/admin-lte/plugins/iCheck/all.css')}}">
        <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('/bower_components/select2/dist/css/select2.min.css')}}">
@endsection

@section('content')

<!-- Default box -->
<!-- Default box -->
<div class="box">
<!-- Default box -->
  <!-- Default box -->
  <div class="box-header with-border">
    <small class="col-xs-3 pull-right text-justify">Lampiran Petunjuk Pelaksanaan JAMWAS Nomor; 01/H/Hjw/04//2011 tanggal 01 April 2011 tentang Teknis Penanganan Laporan dan Tata Kelola Administrasi Bidang Pengawasan<br><strong class="pull-right">BA.WAS-6</strong></small>
<h1 class="box-title"><pre>table:users:institute</pre></h1>
</div>


<div class=" col-md-6 col-md-offset-3">
  <h3 class="description-block" for="inputGroupSuccess2">
    <form class="form-inline">
      SURAT PERNYATAAN <br>
      <div class="form-group">
        <select class="form-control select2" style="width: 100%;">
          <option selected="selected">MENERIMA</option>
          <option>MENOLAK</option>
        </select>
      </div> DAN
      <div class="form-group">
        <select class="form-control select2" style="width: 100%;">
          <option selected="selected">TIDAK AKAN</option>
          <option>AKAN</option>
        </select>
      </div>
      <br>MENGAJUKAN KEBERATAN TERHADAP SURAT KEPUTUSAN PENJATUHAN HUKUMAN DISIPLIN
    </form>
    </h3>
  </div>

<div class="box-body">
  <div class="table-responsive col-md-10 col-md-offset-1" style="margin-top: 50px">
    <p>Saya yang bertanda tangan di bawah ini :</p>
    <table class="table table-bordered table-hover">
      <tr>
        <td width="20%">Nama</td>
        <td>: [Nama Terlapor] </td>
      </tr>
      <tr>
        <td>Pangkat</td>
        <td>: [Pangkat] </td>
      </tr>
      <tr>
        <td>NIP / NRP</td>
        <td>: [NIP | NRP] </td>
      </tr>
      <tr>
        <td>Jabatan</td>
        <td>: [Jabatan] </td>
      </tr>
    </table>
    <p>Sehubungand engan penyampaian Surat Keputusan [JABATAN] Nomor : [No_surat] tanggal [tgl_surat] tentang Penjatuhan Hukuman Disiplin [Sedang] berupa [<strong><i>Penundaan Kenaikan Gaji Berkala Selama 1 (satu) tahun / Penundaan Kenaikan Pangkat Selarna 1 (satu) Tahun</i></strong>] kepada diri saya, sesuai dengan Berita Acara Penyampaian Surat Keputusan Penjatuhan Hukuman Disiplin Berat tanggal [tgl_ba.was3], dengan ini saya menyatakan : [<i>MENERIMA / MENOLAK</i>] dan [<i>tidak akan / akan</i>] mengajukan Keberatan.</p>
    <p> Demikian Surat Pemyataan ini saya buat dengan sebenarnya dalam keadaan sehat jasmani dan rohani tanpa ada paksaan maupun  tekanan dari siapapun juga.</p>
  </div>
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
      <input type="text" class="form-control pull-right" id="ba_was6">
    </div>
    <!-- /.input group -->
  </div>
  <!-- /.form group -->
  </div>
</div>


   {{-- <span class="description-text">(KLARIFIKASI)</span> --}}
  <div class="box-body">
    {{-- @include('lapdu::surat.partials._ba_was2_create') --}}

  </div>

   <div class="box-footer">
    <!-- this row will not appear when printing -->
    <div class="row no-print">
      <div class="col-xs-12">
        <a href='usulan_disposisi' class="btn btn-success pull-right"style="margin-right: 5px;"><i class="fa fa-check-square-o"></i> Lanjut
        </a>
        <a href='usulan_disposisi' class="btn btn-danger pull-right" style="margin-right: 5px;">
          <i class="fa fa-exclamation-triangle"></i> Batal
        </a>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.box-footer-->

</div> <!-- /.box -->

@endsection

@section('scripts')
<!-- Tool Tip -->
<script src="{{ asset('bower_components/jquery-3.2.1.min')}}"></script>
<script src="{{ asset('bower_components/jquery-ui/jquery-ui.js')}}"></script>

  <!-- iCheck 1.0.1 -->
    <script src="{{ asset('/bower_components/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- bootstrap datepicker -->
  <script src="{{ asset('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{ asset('/bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.id.min.js')}}"></script>

      <script src="{{ asset('/bower_components/ckeditor/ckeditor.js')}}"></script>
<!-- Select2 -->
<script src="{{ asset('/bower_components/select2/dist/js/select2.full.min.js')}}"></script>

      <script>
        $(function () {
          //-- JQueryUI Tabs
   $( "#tabs" ).tabs({
      collapsible: true
    })
          // Tooltip
          $( document ).tooltip({
            position: {
              my: "center bottom-20",
              at: "center top",
              using: function( position, feedback ) {
                $( this ).css( position );
                $( "<div>" )
                  .addClass( "arrow" )
                  .addClass( feedback.vertical )
                  .addClass( feedback.horizontal )
                  .appendTo( this );
              }
            }
          });
          $(document).ready(function(){
              $('input').iCheck({
                checkboxClass: 'icheckbox_flat-red',
                radioClass: 'iradio_flat-red'
              });
            });
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
        $('#ba_was6').datepicker({
          format: "dd MM yyyy",
          weekStart: 1,
          maxViewMode: 3,
          todayBtn: "linked",
          language: "id",
          daysOfWeekHighlighted: "0",
          autoclose: true,
          todayHighlight: true,
          toggleActive: true
        })

        //Initialize Select2 Elements
        $('.select2').select2()

         // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
        })
        CKEDITOR.replace('kesimpulan')

      </script>
@endsection