@extends('control-snitch::operator.template')

@section('title', 'Kartu Disposisi')

@section('judulhalaman', 'TAHAP KLARIFIKASI')

@section('subjudul', 'Kejaksaan Agung Republik Indonesia')

@section('stylesheets')
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{ asset('vendor/core/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css')}}">
    <!-- UI Tool Tip -->
    <link rel="stylesheet" href="{{ asset('vendor/core/jquery-ui/themes/base/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/lapdu/templates/alpha/assets/css/tooltip.css')}}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('vendor/core/admin-lte/plugins/iCheck/all.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('vendor/core/select2/dist/css/select2.min.css')}}">
@endsection

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h1 class="box-title">KARTU PENERUS DISPOSISI</h1><br>
        </div>

        <form action="{{ route('lapdu.operator.laporan.update', ['id' => $data->_id]) }}" method="post">
            <div class="box-body">
                @include('control-snitch::klarifikasi.partials._disposisi_register')
            </div>

            <div class="box-header with-border">
                <h3 class="box-title">DISPOSISI</h3><br>
            </div>

            <div class="box-body">
                @include('control-snitch::klarifikasi.partials._disposisi_row2')
            </div>
            <!-- /.row -->

            <div class="box-body">
                @include('control-snitch::klarifikasi.partials._lanjutan_inspektur')
            </div>
        </form>
    </div>

    <div class="box">
        <div class="box-header with-border">
            <small class="pull-right">L.WAS-1</small>
            <h3 class="box-title">LAPORAN KLARIFIKASI</h3><br>
        </div>

        <div class="box-body">
            @include('control-snitch::klarifikasi.partials._klarifikasi_view')
        </div>
    </div>

   <div class="box-footer">
        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-xs-12">
                {{--  <a href="{{ route('lapdu.operator.klarifikasi.index') }}" class="btn btn-success pull-right" style="margin-right: 5px;">
                    <i class="fa fa-check-square-o"></i> Lanjut
                </a>  --}}
                <a href="{{ route('lapdu.operator.klarifikasi.index') }}" class="btn btn-default pull-right" style="margin-right: 5px;">
                    <i class="fa fa-mail-reply"></i> Daftar Klarifikasi
                </a>
            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.box-footer-->
@endsection

@section('scripts')
    <!-- Tool Tip -->
    <script src="{{ asset('vendor/core/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/core/jquery-ui/jquery-ui.js')}}"></script>
    <!-- iCheck 1.0.1 -->
    <script src="{{ asset('vendor/core/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('vendor/core/fastclick/lib/fastclick.js')}}"></script>
    <!-- bootstrap datepicker -->
    <script src="{{ asset('vendor/core/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ asset('vendor/core/bootstrap-datepicker/dist/locales/bootstrap-datepicker.id.min.js')}}"></script>

    <script src="{{ asset('vendor/core/ckeditor/ckeditor.js')}}"></script>
    <!-- Select2 -->
    <script src="{{ asset('vendor/core/select2/dist/js/select2.full.min.js')}}"></script>

    <script src="{{ asset('vendor/core/moment/min/moment.min.js')}}"></script>

    <script>
        $(function () {
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

            //Flat red color scheme for iCheck
            $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass   : 'iradio_flat-green'
            })

            @if ($data->$type && array_key_exists('date_done', $data->$type))
            $('#tgl_selesai').val(moment("{{ $data->$type['date_done']['date'] }}").format('DD MMMM YYYY'))
            @endif

            @if ($data->$type && array_key_exists('date_letter', $data->$type))
            $('#tgl_surat').val(moment("{{ $data->$type['date_letter']['date'] }}").format('DD MMMM YYYY'))
            @endif

            //Date picker
            $('.datepicker').datepicker({
                format: "d MM yyyy",
                weekStart: 1,
                todayBtn: true,
                language: "id-ID",
                // multidate: true,
                // multidateSeparator: "-",
                forceParse: false,
                daysOfWeekHighlighted: "0",
                autoclose: true,
                todayHighlight: true
            })

            //Initialize Select2 Elements
            $('.select2').select2()
        })
    </script>
@endsection
