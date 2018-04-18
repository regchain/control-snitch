@extends('control-snitch::operator.template')

@section('title', 'Klarifikasi')

@section('judulhalaman', 'Tahap Klarifikasi ')

@section('subjudul', 'Kejaksaan Agung Republik Indonesia')

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-comments-o fa-3x"> </i> Tahap Klarifikasi</h3>
        </div>

        <div class="box-body">
            @include('control-snitch::klarifikasi.partials._klarifikasi_view')
        </div>

        <div class="box-footer">
            <!-- this row will not appear when printing -->
            <div class="row no-print">
                <div class="col-xs-12">
                    <a href="{{ route('lapdu.operator.klarifikasi.index') }}" class="btn btn-default pull-right">
                        <i class="fa fa-mail-reply"></i>&nbsp; KEMBALI
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
    <script src="{{ asset('vendor/core/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('vendor/core/fastclick/lib/fastclick.js')}}"></script>
    <!-- bootstrap datepicker -->
    <script src="{{ asset('vendor/core/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

    <script src="{{ asset('vendor/core/ckeditor/ckeditor.js')}}"></script>
@endsection