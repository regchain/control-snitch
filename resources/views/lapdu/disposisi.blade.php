@extends('lapdu::operator.template')

@section('title', 'Kartu Disposisi')

@section('judulhalaman', 'Kejaksaan Agung')

@section('subjudul', 'Republik Indonesia')

@section('stylesheets')
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
                @include('lapdu::lapdu.partials._disposisi_row1')
            </div>

            <div class="box-body">
                @include('lapdu::lapdu.partials._disposisi_row2')
            </div>

            <div class="box-body">
                @include('lapdu::lapdu.partials._pengaduan')
            </div>

            <div class="box-footer">
                <!-- this row will not appear when printing -->
                <div class="row no-print">
                    <div class="col-xs-12">
                        <a href="javascript:void(0)" class="btn btn-success pull-right" style="margin-right: 5px;">
                            <i class="fa fa-check-square-o"></i> Lanjut
                        </a>
                        <a href="{{ route('lapdu.operator.laporan.index') }}" class="btn btn-danger pull-right" style="margin-right: 5px;">
                            <i class="fa fa-exclamation-triangle"></i> Batal
                        </a>
                    </div>
                </div>
                <!-- /.content -->
            </div>
            <!-- /.box-footer-->
        </form>
    </div>
    <!-- /.box -->
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

    <script src="{{ asset('vendor/core/ckeditor/ckeditor.js')}}"></script>
    <!-- Select2 -->
    <script src="{{ asset('vendor/core/select2/dist/js/select2.full.min.js')}}"></script>

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
                    .appendTo( this )
                }
                }
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
            $('#was3').datepicker({
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

            $('#dialihkan_to').on('select2:select', function(e) {
                let item = e.params.data

                $.get("{{ route('api.core.institutions.index') }}/"+item.id, function(res) {
                    let units = res.unit

                    $('#dialihkan_bidang_to').select2({
                        data: units
                    },
                    true)
                })
            })
        })
    </script>
@endsection
