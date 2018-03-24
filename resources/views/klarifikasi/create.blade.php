@extends('elapdu.operator.template')

@section('title', 'Klarifikasi')

@section('judulhalaman', 'Klarifikasi')

@section('subjudul', 'Kejaksaan AgungRepublik Indonesia')

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
  <div class="box-header with-border">
    <small class="col-xs-3 pull-right text-justify">Lampiran Petunjuk Pelaksanaan JAMWAS Nomor ; 01/H/Hjw/04//2011 tanggal 01 April 2011 tentang Teknis Penanganan Laporandan Tata Kelola Administrasi Bidang Pengawasan<br><strong class="pull-right">SP.WAS-1</strong></small>
<h1 class="box-title">KEJAKSAAN AGUNG<br>REPUBLIK INDONESIA</h1>
</div>

<div class="col-sm-3">
 
</div>
<div class="col-sm-6">

  <div class="form-group has-success has-feedback">
    <h4 class="control-label col-sm-4 text-right no-padding" for="inputGroupSuccess2">SURAT PERINTAH</h4>
    <div class="col-sm-8">
       <h4>
      <div class="input-group" style="width: 95%">
        <select class="form-control select2 no-border">
        <option selected="selected">JAKSA AGUNG</option>
        <option>JAKSA AGUNG MUDA BIDANG PENGAWASAN</option>
        <option>KEPALA KEJAKSAAN TINGGI</option>
        <option>KEPALA KEJAKSAAN NEGERI</option>
      </select>
        <span class="input-group-addon btn-default"><a href="#"><i class="fa fa-check-square-o"></i> </a></span>
      </div>
    </h4>
    </div>
  </div>
</div>
<div class="col-sm-3">
  
</div>


<div class="box-body">
  <div class="col-sm-3">
     <div class="input-group">
    <span class="input-group-addon">NO :</span>
    <input type="text" class="form-control" placeholder="PRIN -">
  </div>
  </div>
<div class="col-sm-6"></div>

  <div class="col-sm-3">
    <div class="form-group">
    <div class="input-group date">
      <div class="input-group-addon">
        <i class="fa fa-calendar"></i>
      </div>
      <input type="text" class="form-control pull-right" id="spklarifikasi">
    </div>
    <!-- /.input group -->
  </div>
  <!-- /.form group -->
  </div>
</div>
   {{-- <span class="description-text">(KLARIFIKASI)</span> --}}


  <div class="box-body">
    @include('elapdu.klarifikasi.partials._spklarifikasi_create')
  </div>


  <div class="box-body">
   <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <span class="pull-right"> <i class="fa fa-angle-double-left"></i></span><i class="fa fa-angle-double-right"> </i> I. PERMASALAHAN
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">

          @include('elapdu.lapdu.partials.kasus_view')

        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <span class="pull-right"> <i class="fa fa-angle-double-left"></i></span><i class="fa fa-angle-double-right"> </i> II. DATA
          </a>
        </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">

          <div class="box-body">

            @include('elapdu.lapdu.partials.pelapor_view')

          </div>

          <div class="box-body">

            @include('elapdu.lapdu.partials.terlapor_view')

          </div>

          <div class="box-body">

            @include('elapdu.lapdu.partials.datapenunjang_view')

          </div>

        </div>
      </div>
    </div>
    {{-- <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <span class="pull-right"> <i class="fa fa-angle-double-left"></i></span><i class="fa fa-angle-double-right"> </i> III. HASIL KLARIFIKASI
          </a>
        </h4>
      </div>
      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
        <div class="panel-body">

        @include('elapdu.klarifikasi.partials._spklarifikasi_view')

        @include('elapdu.klarifikasi.partials._wawancara_view')

       </div>
     </div>
   </div>
   <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <span class="pull-right"> <i class="fa fa-angle-double-left"></i></span><i class="fa fa-angle-double-right"> </i> IV. NOTA DINAS
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">

        @include('elapdu.klarifikasi.partials._notadinas_view')

        
      </div>
    </div>
  </div>
   --}}
</div>
</div>


<div class="box-footer">
  <!-- this row will not appear when printing -->
  <div class="row no-print">
    <div class="col-xs-12">
      <a href='#' class="btn btn-info"><i class="fa fa-save"></i> Simpan
      </a>
      <a href='klarifikasi' class="btn btn-success pull-right"><i class="fa fa-check-square-o"></i> Lanjut
      </a>
      <a href='laporan_disposisi' class="btn btn-danger pull-right" style="margin-right: 5px;">
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
      $('#spklarifikasi').datepicker({
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