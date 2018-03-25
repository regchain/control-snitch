@extends('lapdu::operator.template')

@section('title', 'Subyek Hukum')

@section('judulhalaman', 'Kejaksaan Agung')

@section('subjudul', 'Republik Indonesia')

@section('stylesheets')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('vendor/core/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-bullhorn fa-2x"></i> Subyek Hukum Tahap Terlapor</h3>
        </div>

        @include('lapdu::partials.subyek')

        <div class="box-footer">
            {{--  Footer  --}}
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

    <!-- page script -->
    <script>
        $(function () {
            $('#example1').DataTable()
        })
    </script>
@endsection