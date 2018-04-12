@extends('lapdu::operator.template')

@section('title', 'Kartu Disposisi')

@section('judulhalaman', 'INSPEKSI KASUS')

@section('subjudul', 'Kejaksaan Agung Republik Indonesia')

@section('stylesheets')
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{ asset('vendor/core/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css')}}">
    <!-- JQueryUI Tabs -->
    <link rel="stylesheet" href="{{ asset('vendor/core/jquery-ui/themes/humanity/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/core/jquery-ui/themes/humanity/theme.css')}}">
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
                @include('lapdu::inspeksi.partials._disposisi_register')
            </div>

            <div class="box-header with-border">
                <h3 class="box-title">DISPOSISI</h3><br>
            </div>

            <div class="box-body">
                @include('lapdu::inspeksi.partials._disposisi_row2')
            </div>

            <div class="box-body">
                @include('lapdu::inspeksi.partials._lanjutan_inspektur')
            </div>
        </form>
        <!-- /.row -->

        <div class="box-header with-border">
            <h3 class="box-title">LAPORAN PENGADUAN</h3><br>
        </div>

        <div class="box-body">
            @include('lapdu::inspeksi.partials._inspeksi_view')
        </div>
    </div>

    <div class="box-footer">
        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-xs-12">
                {{-- <a href="" class="btn btn-success pull-right" style="margin-right: 5px;">
                    <i class="fa fa-check-square-o"></i> Lanjut
                </a> --}}

                <a href="{{ route('lapdu.operator.inspeksi.index') }}" class="btn btn-default pull-right" style="margin-right: 5px;">
                    <i class="fa fa-mail-reply"></i> Daftar Inspeksi
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

            //Flat red color scheme for iCheck
            $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-blue',
                radioClass   : 'iradio_flat-blue'
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

            $('#update-irmud').click(function() {
                let data = {
                    '_method': 'PUT',
                    'report_id': "{{ $data->_id }}",
                    'opinion_young_inspector': [],
                    'suggestion_young_inspector': []
                }

                $('input[name="opinion_young_inspector[]"]').each(function(index) {
                    data['opinion_young_inspector'].push($(this).val())
                })

                $('input[name="suggestion_young_inspector[]"]').each(function(index) {
                    data['suggestion_young_inspector'].push($(this).val())
                })

                $.post("{{ route('api.lapdu.inspection.update', ['id' => $data->_id]) }}", data)
                    .done(function(res) {
                        alert('Data berhasil disimpan!')
                        window.location.replace("{{ env('APP_URL') }}/lapdu/operator/inspeksi")
                    })
            })

            $('#update-inspektur').click(function() {
                let data = {
                    '_method': 'PUT',
                    'report_id': "{{ $data->_id }}",
                    'opinion_inspector': [],
                    'suggestion_inspector': []
                }

                $('input[name="opinion_inspector[]"]').each(function(index) {
                    data['opinion_inspector'].push($(this).val())
                })

                $('input[name="suggestion_inspector[]"]').each(function(index) {
                    data['suggestion_inspector'].push($(this).val())
                })

                $.post("{{ route('api.lapdu.inspection.update', ['id' => $data->_id]) }}", data)
                    .done(function(res) {
                        alert('Data berhasil disimpan!')
                        window.location.replace("{{ env('APP_URL') }}/lapdu/operator/inspeksi")
                    })
            })

            $('#update-jamwas').click(function() {
                let data = {
                    '_method': 'PUT',
                    'report_id': "{{ $data->_id }}",
                    'opinion_jamwas': [],
                    'suggestion_jamwas': []
                }

                $('input[name="opinion_jamwas[]"]').each(function(index) {
                    data['opinion_jamwas'].push($(this).val())
                })

                $('input[name="suggestion_jamwas[]"]').each(function(index) {
                    data['suggestion_jamwas'].push($(this).val())
                })

                $.post("{{ route('api.lapdu.inspection.update', ['id' => $data->_id]) }}", data)
                    .done(function(res) {
                        alert('Data berhasil disimpan!')
                        window.location.replace("{{ env('APP_URL') }}/lapdu/operator/inspeksi")
                    })
            })
        })
    </script>
@endsection