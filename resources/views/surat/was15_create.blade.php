@extends('control-snitch::operator.template')

@section('title', 'Nota Dinas')

@section('judulhalaman', 'Kejaksaan Agung')

@section('subjudul', 'Republik Indonesia')

@section('stylesheets')
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{ asset('vendor/core/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css')}}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('vendor/core/admin-lte/plugins/iCheck/all.css')}}"> {{-- expr --}}
@endsection

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <small class="pull-right">WAS-15</small>
            <h3 class="box-title">NOTA DINAS</h3>
        </div>

        <div class="box-body">
            @include('control-snitch::surat.partials._was15_create')
        </div>

        <div class="box-footer">
            <!-- this row will not appear when printing -->
            <div class="row no-print">
                <div class="col-xs-12">
                    <a href="javascript:void(0)" id="save-btn" class="btn btn-info"><i class="fa fa-save"></i> Simpan</a>
                    <a href="{{ route('lapdu.operator.usulan.index') }}" class="btn btn-success pull-right">
                        <i class="fa fa-check-square-o"></i> Lanjut
                    </a>
                    <a href="{{ route('lapdu.operator.inspeksi.action', ['id' => $data->_id]) }}" class="btn btn-danger pull-right" style="margin-right: 5px;">
                        <i class="fa fa-exclamation-triangle"></i> Batal
                    </a>
                </div>
            </div>
        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->
@endsection

@section('scripts')
    <!-- iCheck 1.0.1 -->
    <script src="{{ asset('vendor/core/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('vendor/core/fastclick/lib/fastclick.js')}}"></script>
    <!-- bootstrap datepicker -->
    <script src="{{ asset('vendor/core/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ asset('vendor/core/bootstrap-datepicker/dist/locales/bootstrap-datepicker.id.min.js')}}"></script>
    <script src="{{ asset('vendor/core/ckeditor/ckeditor.js')}}"></script>

    <script>
        $(function () {
            //Flat red color scheme for iCheck
            $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass   : 'iradio_flat-green'
            })
            //Date picker
            $('.datepicker').datepicker({
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

        })
    </script>
@endsection