@extends('lapdu::operator.template')

@section('title', 'Kartu Disposisi')

@section('judulhalaman', 'KARTU WAWANCARA')

@section('subjudul', 'Kejaksaan Agung Republik Indonesia')

@section('stylesheets')
<!-- JQueryUI Tabs -->
<link rel="stylesheet" href="{{ asset('vendor/core/jquery-ui/themes/humanity/jquery-ui.css')}}">
<link rel="stylesheet" href="{{ asset('vendor/core/jquery-ui/themes/humanity/theme.css')}}">
<!-- UI Tool Tip -->
<link rel="stylesheet" href="{{ asset('vendor/core/jquery-ui/themes/base/jquery-ui.css')}}">
<link rel="stylesheet" href="{{ asset('vendor/core/templates/alpha/assets/css/tooltip.css')}}">
  <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="{{ asset('vendor/core/admin-lte/plugins/iCheck/all.css')}}">
        <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('vendor/core/select2/dist/css/select2.min.css')}}">
@endsection

@section('content')

<!-- Default box -->
<!-- Default box -->
<div class="box">
  <div class="box-header with-border">
    <small class="col-xs-3 pull-right text-justify">Lampiran Petunjuk Pelaksanaan JAMWAS Nomor ; 01/H/Hjw/04//2011 tanggal 01 April 2011 tentang Teknis Penanganan Laporandan Tata Kelola Administrasi Bidang Pengawasan<br><strong class="pull-right">BA.WAS-2</strong></small>
<h1 class="box-title">[institusi]</h1>
</div>


   {{-- <span class="description-text">(KLARIFIKASI)</span> --}}
  <div class="box-body">
    @include('lapdu::surat.partials._ba_was2_create')

  </div>

   <div class="box-footer">
    <!-- this row will not appear when printing -->
    <div class="row no-print">
      <div class="col-xs-12">
        <a href='klarifikasi_proses' class="btn btn-success pull-right"style="margin-right: 5px;"><i class="fa fa-check-square-o"></i> Lanjut
        </a>
        <a href='klarifikasi_proses' class="btn btn-danger pull-right" style="margin-right: 5px;">
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
<script src="{{ asset('vendor/core/jquery-3.2.1.min')}}"></script>
<script src="{{ asset('vendor/core/jquery-ui/jquery-ui.js')}}"></script>
  <!-- iCheck 1.0.1 -->
    <script src="{{ asset('/vendor/core/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('/vendor/core/fastclick/lib/fastclick.js')}}"></script>
    <!-- bootstrap datepicker -->
    <script src="{{ asset('/vendor/core/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

      <script src="{{ asset('/vendor/core/ckeditor/ckeditor.js')}}"></script>
<!-- Select2 -->
<script src="{{ asset('/vendor/core/select2/dist/js/select2.full.min.js')}}"></script>

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
        $('#ba_was2').datepicker({
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