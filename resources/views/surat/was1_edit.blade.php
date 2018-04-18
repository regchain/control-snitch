@extends('control-snitch::operator.template')

@section('title', 'Dashboard')

@section('judulhalaman', 'Kejaksaan Agung')

@section('subjudul', 'Republik Indonesia')

@section('stylesheets')
  {{-- expr --}}
@endsection

@section('content')

<!-- Default box -->
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">EDIT TELAAHAN</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
      title="Collapse">
      <i class="fa fa-minus"></i></button>
      <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
        <i class="fa fa-times"></i></button>
      </div>
    </div>
{{--     <div class="box-header with-border">
      <div class="col-xs-12">

        <h4>I. PERMASALAHAN</h4>
        @include('control-snitch::lapdu.partials.kasus_view')

        <h4>II. DATA</h4>
        <h4>1. Data Pelapor</h4>
        @include('control-snitch::lapdu.partials.pelapor_view')

        <h4>2. Data Terlapor</h4>
        @include('control-snitch::lapdu.partials.terlapor_view')

        <h4>3. Data Penunjang</h4>
        @include('control-snitch::lapdu.partials.datapenunjang_view')
      </div>
    </div>
        <div class="box-footer">
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href='laporan_edit' class="btn btn-default pull-right" style="margin-right: 5px;">
            <i class="fa fa-edit"></i> edit
          </a>
        </div>
      </div>
    <!-- /.content -->
  </div> --}}
    <div class="box-header with-border">
      <div class="col-xs-12">

         @include('control-snitch::surat.partials._was1_edit')
    </div>

    {{-- @include('control-snitch::lapdu.partials._telaahan_view') --}}


    <div class="box-footer">
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href='#' class="btn btn-info pull-right"><i class="fa fa-save"></i> Simpan
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

  <!-- iCheck 1.0.1 -->
    <script src="{{ asset('/vendor/core/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('/vendor/core/fastclick/lib/fastclick.js')}}"></script>
    <!-- bootstrap datepicker -->
    <script src="{{ asset('/vendor/core/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

      <script src="{{ asset('/vendor/core/ckeditor/ckeditor.js')}}"></script>


      <script>
        $(function () {
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
        CKEDITOR.replace('analisa')
        CKEDITOR.replace('kesimpulan')
        CKEDITOR.replace('pendapat')
        CKEDITOR.replace('saran')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()

        })
      </script>
@endsection