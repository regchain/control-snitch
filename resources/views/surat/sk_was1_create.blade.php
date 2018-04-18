@extends('control-snitch::operator.template')

@section('title', 'Surat Keputusan')

@section('judulhalaman', 'Surat Keputusan')

@section('subjudul', 'Kejaksaan Agung Republik Indonesia')

@section('stylesheets')
  <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
<!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

<!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('/bower_components/select2/dist/css/select2.min.css')}}">

@endsection

@section('content')

<!-- Default box -->
<div class="box">
  <!-- Default box -->
  <div class="box-header with-border">
    <small class="col-xs-3 pull-right text-justify">Lampiran Petunjuk Pelaksanaan JAMWAS Nomor ; 01/H/Hjw/04//2011 tanggal 01 April 2011 tentang Teknis Penanganan Laporan dan Tata Kelola Administrasi Bidang Pengawasan<br><strong class="pull-right">SK.WAS-1</strong></small>
<h1 class="box-title"><pre>table:users:institute</pre></h1>
</div>
    <div class="col-md-6 col-md-offset-3" style="padding-bottom: 30px">
    <h3 class="description-block" for="inputGroupSuccess2">SURAT KEPUTUSAN<br>
      <div class="form-group">
        <select class="form-control select2" style="width: 100%;">
          <option selected="">JAKSA AGUNG REPUBLIK INDONESIA</option>
          <option>JJAKSA AGUNG MUDA BIDANG PENGAWASAN</option>
              <option>KEPALA Kejaksaan TINGGI</option>
              <option>KEPALA Kejaksaan NEGERI</option>
        </select>
      </div>
    </h3>
    </div>


<div class="box-body">
  <div class="col-sm-3">
     <div class="input-group">
    <span class="input-group-addon">NO :</span>
    <input type="text" class="form-control" placeholder="[no_sk.was1]">
  </div>
  </div>
<div class="col-sm-6"></div>

  <div class="col-sm-3">
    <div class="form-group">
    <div class="input-group date">
      <div class="input-group-addon">
        <i class="fa fa-calendar"></i>
      </div>
      <input type="text" class="form-control pull-right" id="datepicker" placeholder="tgl_sk.was1">
    </div>
    <!-- /.input group -->
  </div>
  <!-- /.form group -->
  </div>
</div>
   {{-- <span class="description-text">(KLARIFIKASI)</span> --}}
<div class="box-body">
  <div class="col-md-10 col-md-offset-1">
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
      <tr>
        <td>Melanggar Pasal</td>
        <td>: [Pendapat] </td>
      </tr>
      <tr>
        <td>Hukuman yang dijatuhkan</td>
        <td>: [Saran] </td>
      </tr>
    </table>
  </div>
</div>



<div class="box-footer">
  <!-- this row will not appear when printing -->
  <div class="row no-print">
    <div class="col-xs-12">
      <a href='#' class="btn btn-info"><i class="fa fa-save"></i> Simpan
      </a>
      <a href='subyek_putusan' class="btn btn-success pull-right"><i class="fa fa-check-square-o"></i> Lanjut
      </a>
      <a href='usulan' class="btn btn-danger pull-right" style="margin-right: 5px;">
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

<script src="{{ asset('/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{ asset('/bower_components/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- bootstrap datepicker -->
<!-- date-range-picker -->
  <script src="{{ asset('/bower_components/moment/min/moment.min.js')}}"></script>
  <script src="{{ asset('/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <!-- bootstrap datepicker -->
  <script src="{{ asset('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{ asset('/bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.id.min.js')}}"></script>


<script src="{{ asset('/bower_components/ckeditor/ckeditor.js')}}"></script>
<!-- DataTables -->
  <script src="{{ asset('/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <!-- SlimScroll -->
  <script src="{{ asset('/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{ asset('/bower_components/fastclick/lib/fastclick.js')}}"></script>


<script>

  $(function () {
 //Initialize Select2 Elements
      $('.select2').select2()

    $('#example1').DataTable()
          $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
          })


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
                   // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()

      })
    </script>
    @endsection