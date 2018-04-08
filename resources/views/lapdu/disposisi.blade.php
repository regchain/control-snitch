@extends('lapdu::operator.template')

@section('title', 'Kartu Disposisi')

@section('judulhalaman', 'Kejaksaan Agung')

@section('subjudul', 'Republik Indonesia')

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
                @include('lapdu::lapdu.partials._disposisi_row1')
            </div>

            <div class="box-body">
                @include('lapdu::lapdu.partials._disposisi_row2')
            </div>

            <div class="box-body">
                @include('lapdu::lapdu.partials._lanjutan_inspektur')
            </div>
        </form>
    </div>

    @if ($data->$type && array_key_exists('analysis', $data->$type))
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <p class="pull-right"><strong>WAS-1</strong></p>
            <p><small class="col-xs-3 pull-right text-justify">Lampiran Petunjuk Pelaksanaan JAMWAS Nomor ; 01/H/Hjw/04//2011 tanggal 01 April 2011 tentang Teknis Penanganan Laporan dan Tata Kelola Administrasi Bidang Pengawasan<br></small></p>
            @foreach ($data->reporteds as $d)
                @if ($d['status'] == 'terlapor')
                    <h1 class="box-title">
                        {{ $d['institute'] }}
                    </h1>
                @endif
            @endforeach
        </div>

        <h3 class="description-block" for="inputGroupSuccess2"><u>T E L A A H A N</u></h3>

        <div class="box-body">
        </div>

        <!-- /.row -->
        <div class="box-body">
            <div class="col-md-12">
                @include('lapdu::lapdu.partials._pengaduan')
            </div>
        </div>

        <div class="box-footer">
            <!-- this row will not appear when printing -->
            <div class="row no-print">
                <div class="col-xs-12">
                    {{--  <a href="javascript:void(0)" class="btn btn-success pull-right" style="margin-right: 5px;">
                        <i class="fa fa-check-square-o"></i> Lanjut
                    </a>  --}}
                    <a href="{{ route('lapdu.operator.laporan.index') }}" class="btn btn-default pull-right" style="margin-right: 5px;">
                        <i class="fa fa-mail-reply"></i> Daftar Lapdu
                    </a>
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->
    @endif
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
                    .appendTo( this )
                }
                }
            })

            //Flat red color scheme for iCheck
            $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-red',
                radioClass   : 'iradio_flat-red'
            })

            $('#tgl_selesai').val(moment("{{ $data->$type['date_done']['date'] }}").format('DD MMMM YYYY'))
            $('#tgl_surat').val(moment("{{ $data->$type['date_letter']['date'] }}").format('DD MMMM YYYY'))

            //Date picker
            $('.datepicker').datepicker({
                format: "dd MM yyyy",
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
