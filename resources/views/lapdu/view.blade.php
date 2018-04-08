@extends('lapdu::operator.template')

@section('title', 'Lapdu Baru')

@section('judulhalaman', 'Laporan Pengaduan')

@section('subjudul', 'Kejaksaan Agung Republik Indonesia')

@section('stylesheets')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('vendor/core/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('vendor/core/admin-lte/plugins/iCheck/all.css')}}">
@endsection

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-commenting fa-3x"> </i> Laporan Baru </h3>
        </div>

        <div class="box-body">
            @include('lapdu::lapdu.partials._pengaduan', $data)
        </div>

        <div class="box-footer">
            <!-- this row will not appear when printing -->
            <div class="row no-print">
                <div class="col-xs-12">
                    <a href="{{ route('lapdu.operator.laporan.index') }}" class="btn btn-default pull-right">
                        <i class="fa fa-mail-reply"></i>&nbsp; KEMBALI
                    </a>
                </div>
            </div>
        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->
@endsection

@section('scripts')
    <!-- DataTables -->
    <script src="{{ asset('vendor/core/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('vendor/core/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <!-- SlimScroll -->
    <script src="{{ asset('vendor/core/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('vendor/core/fastclick/lib/fastclick.js')}}"></script>
    <!-- iCheck 1.0.1 -->
    <script src="{{ asset('vendor/core/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>

    <script>
        $(function () {
            //Flat red color scheme for iCheck
            $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-red',
                radioClass   : 'iradio_flat-red'
            })
        })
    </script>
@endsection