@extends('vendor.lapdu.templates.alpha.templatealt')

@section('title', 'Data Penunjang')

@section('judulhalaman', 'KEJAKSAAN AGUNG')

@section('subjudul', 'REPUBLIK INDONESIA')

@section('stylesheets')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('vendor/core/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-tools pull-right text-blue">
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
            Buat Akun Pelapor
        </div>

        <h4>DATA PENUNJANG</h4>

        <div class="row">
            <div class="col-xs-12">
                <div class="progress">
                    <div class="progress-bar progress-bar-primary progress-bar-striped progress-sm" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75" style="width: 75%">
                        <span class="sr-only">100% Complete (success)</span>
                    </div>
                </div>

                <pre><code>Unggah data penunjang yang anda miliki sebagai alat bukti</code></pre>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->

        <div class="row">
            <div class="col-xs-12">
                <form method="POST" action="{{ route('lapdu.report.update', ['report' => $data->_id]) }}" enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PUT">

                    <div class="row uniform 50%">
                        <div class="9u 12u(mobilep)">
                            <input type="file" name="files[]" id="files" value="" placeholder="Unggah data penunjang yang anda miliki sebagai alat bukti">
                        </div>

                        <div class="3u 12u(mobilep)">
                            <input type="submit" value="Unggah File" class="fit alt">
                        </div>
                    </div>
                </form>

                <p class="text-red">* Jenis data yang dapat diunggah: .doc .docx .jpg .png .mp4 .mp3</p>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->

        <div class="row">
            <div class="col-xs-12">
                <h3 class="box-title">List Data Penunjang</h3>
                <!-- /.box-header -->
                <div class="table-wrapper">
                    <table id="list-files" class="alt" width="100%">
                        <thead>
                            <tr>
                                <th{{--  width="30%"> --}}>Nama File</th>
                                <th>Jenis</th>
                                <th>Kapasitas</th>
                                <th width="30%">Keterangan</th>
                                {{--  <th>Tindakan</th>  --}}
                            </tr>
                        </thead>

                        <tbody>
                            @if ($data->files)
                            @foreach ($data->files as $f)
                            <tr>
                                <td>{{ $f }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>

                        <tfoot>
                            <tr>
                                <th{{--  width="30%"> --}}>Nama File</th>
                                <th>Jenis</th>
                                <th>Kapasitas</th>
                                <th width="30%">Keterangan</th>
                                {{--  <th>Tindakan</th>  --}}
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->

        <div class="row no-print">
            <div class="col-xs-12">
                <a href="{{ route('lapdu.home') }}" class="button special small pull-right">
                    <i class="fa fa-check-square-o"></i> Lanjut
                </a>

                <a href='#' class="button alt small pull-right" style="margin-right: 5px;">
                    <i class="fa fa-exclamation-triangle"></i> Batal
                </a>
            </div>
        </div>
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
        $('#list-files').DataTable({
            'paging'      : false,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
    </script>

@endsection
