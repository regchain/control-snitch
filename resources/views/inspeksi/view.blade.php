@extends('lapdu::operator.template')

@section('title', 'Inspeksi Kasus')

@section('judulhalaman', 'Inspeksi Kasus ')

@section('subjudul', 'Kejaksaan Agung Republik Indonesia')

@section('stylesheets')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('vendor/core/select2/dist/css/select2.min.css')}}">
    <!-- JQueryUI Tabs -->
    <link rel="stylesheet" href="{{ asset('vendor/core/jquery-ui/themes/humanity/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/core/jquery-ui/themes/humanity/theme.css')}}">
@endsection

@section('content')
<!-- Default box -->
<div class="box">
  <div class="box-header with-border">
    <small class="pull-right">WAS-7</small>
          <h3 class="box-title">RENCANA INSPEKSI KASUS</h3>
        </div>



  <div class="box-body">
  <div class="panel-group" id="klarivikasi_view" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingSPKlarifikasi">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#klarivikasi_view" href="#collapseSPKlarifikasi" aria-expanded="false" aria-controls="collapseSPKlarifikasi">
            <span class="label label-default pull-right">Detil</span> I. SURAT PERINTAH INSPEKSI KASUS
          </a>
        </h4>
      </div>
      <div id="collapseSPKlarifikasi" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSPKlarifikasi">
        <div class="panel-body">

          <div class="box-body">

            @include('lapdu::surat.partials._sp_was2_view')

          </div>

        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingPermasalahan">
        <h4 class="panel-title">
          <a  class="collapsed" role="button" data-toggle="collapse" data-parent="#klarivikasi_view" href="#collapsePermasalahan" aria-expanded="false" aria-controls="collapsePermasalahan">
            <span class="label label-default pull-right">Detil</span> II. PERMASALAHAN
          </a>
        </h4>
      </div>
      <div id="collapsePermasalahan" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingPermasalahan">
        <div class="panel-body">

          @include('lapdu::lapdu.partials.kasus_view')

          <div class="box box-success">

          @include('lapdu::surat.partials._was1_view')

          </div>

        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#klarivikasi_view" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <span class="label label-default pull-right">Detil</span> III. DATA
          </a>
        </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">

          <div class="box-body">

            @include('lapdu::lapdu.partials.pelapor_view')

          </div>

          <div class="box-body">

            @include('lapdu::lapdu.partials.terlapor_view')

          </div>

          <div class="box-body">

            @include('lapdu::lapdu.partials.datapenunjang_view')

          </div>

        </div>
      </div>
    </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSix">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#klarivikasi_view" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
          <span class="label label-default pull-right">Detil</span>IV. RENCANA INSPEKSI KASUS <small>[WAS-7]</small>
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingSix">
      <div class="panel-body">
        <div class="row">
          @include('lapdu::inspeksi.partials._inspeksi_hasil')
          </div>
      </div>
    </div>
  </div>
</div>
</div>


<div class="box-footer">
  <!-- this row will not appear when printing -->
  <div class="row no-print">
    <div class="col-xs-12">
      <a href='inspeksi' class="btn btn-flat btn-info pull-right"><i class="fa fa-reply"></i> Kembali
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
<!-- JQueryUI Tabs -->
<script src="{{ asset('vendor/core/jquery-3.3.1.min/index.js')}}"></script>
  <script src="{{ asset('vendor/core/jquery-ui/jquery-ui.js')}}"></script>
<!-- Select2 -->
<script src="{{ asset('vendor/core/select2/dist/js/select2.full.min.js')}}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{ asset('vendor/core/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('vendor/core/fastclick/lib/fastclick.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('vendor/core/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

<script src="{{ asset('vendor/core/ckeditor/ckeditor.js')}}"></script>


<script>
  $(function () {
    //-- JQueryUI Tabs
      $( "#tabs" ).tabs({
      collapsible: true
    })
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