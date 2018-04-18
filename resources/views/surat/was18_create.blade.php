@extends('control-snitch::operator.template')

@section('title', 'Nota Dinas')

@section('judulhalaman', 'Kejaksaan Agung')

@section('subjudul', 'Republik Indonesia')

@section('stylesheets')
<!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css')}}">
<!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="{{ asset('/bower_components/admin-lte/plugins/iCheck/all.css')}}"> {{-- expr --}}
@endsection

@section('content')

<!-- Default box -->
<div class="box">
  <!-- Default box -->
  <div class="box-header with-border">
    <small class="col-xs-3 pull-right text-justify">Lampiran Petunjuk Pelaksanaan JAMWAS Nomor ; 01/H/Hjw/04//2011 tanggal 01 April 2011 tentang Teknis Penanganan Laporan dan Tata Kelola Administrasi Bidang Pengawasan<br><strong class="pull-right">WAS-18</strong></small>
    <h1 class="box-title"><pre>table:users:institute</pre></h1>
  </div>
  <h3 class="description-block" for="inputGroupSuccess2">N O T A &nbsp;&nbsp;&nbsp;D I N A S</h3>

          <div class="box-body">

          @include('control-snitch::surat.partials._was18_create')

          </div>



        <div class="box-footer">
            <!-- this row will not appear when printing -->
            <div class="row no-print">
              <div class="col-xs-12">
                <a href='#' class="btn btn-info"><i class="fa fa-save"></i> Simpan
                </a>
                <a href='subyek_putusan' class="btn btn-success pull-right"><i class="fa fa-check-square-o"></i> Lanjut
                </a>
                <a href='usulan_disposisi' class="btn btn-danger pull-right" style="margin-right: 5px;">
                  <i class="fa fa-exclamation-triangle"></i> Batal
                </a>
              </div>
            </div>
          </section>
          <!-- /.content -->
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

@endsection

@section('scripts')

<!-- iCheck 1.0.1 -->
    <script src="{{ asset('/bower_components/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- bootstrap datepicker -->
    <script src="{{ asset('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ asset('/bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.id.min.js')}}"></script>

      <script src="{{ asset('/bower_components/ckeditor/ckeditor.js')}}"></script>


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
           format: "dd MM yyyy",
        weekStart: 1,
        todayBtn: true,
        language: "id-ID",
        multidate: true,
        multidateSeparator: "-",
        forceParse: false,
        daysOfWeekHighlighted: "0",
        autoclose: true,
        todayHighlight: true
        })

         // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()

        })
      </script>

@endsection