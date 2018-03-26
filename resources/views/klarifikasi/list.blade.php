@extends('lapdu::operator.template')

@section('title', 'JAMWAS')

@section('judulhalaman', 'Tahap Klarifikasi')

@section('subjudul', 'PENGADUAN MASYARAKAT / WHISTLE BLOWER')

@section('stylesheets')
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('vendor/core/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{ asset('vendor/core/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
@endsection

@section('content')
    <!-- START CUSTOM TABS -->
    <div class="row">
        <div class="col-md-12">
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab"><span class="badge bg-yellow pull-right">{{ count($new) }}</span> BARU&nbsp;</a></li>
                    <li><a href="#tab_2" data-toggle="tab"><span class="badge bg-green pull-right">{{ count($advanced) }}</span>LANJUTAN INSPEKTUR&nbsp;</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <div class="box-header">
                            <h3 class="box-title">TAHAP KLARIFIKASI BARU</h3>

                            <div class="box-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->

                        <div class="box-body table-responsive no-padding">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="15%">Terlapor</th>
                                        <th width="15%">Jabatan</th>
                                        <th>Perihal</th>
                                        <th>Proses</th>
                                        <th width="10%">Tindakan</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($new as $d)
                                    <tr>
                                        <td>
                                            @foreach ($d->reporteds as $r)
                                                @if ($r['status'] == 'terlapor')
                                                {{ $r['name'] }}<br>
                                                {{--  [Pangkat] [Golongan]<br>  --}}
                                                {{ $r['nip'] . ' | ' . $r['nrp'] }}<br>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($d->reporteds as $r)
                                                @if ($r['status'] == 'terlapor')
                                                {{ $r['jobtitle'] . ' | '. $r['institute'] }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($d->reporters as $r)
                                                <strong>Dilaporkan oleh:</strong> {{ $r['name'] . ', '. $r['organization'] }}<br>
                                            @endforeach
                                            <br><strong>Perihal: </strong>{{ $d->title }}
                                        </td>
                                        <td>
                                            @if (!$d->disposition_ja && !$d->disposition_waja)
                                            JAKSA AGUNG
                                            @elseif (!$d->disposition_jamwas && !$d->disposition_sesjamwas)
                                            JAMWAS
                                            @elseif (!$d->disposition_inspector)
                                            {{ strtoupper($d->to_inspector) }}
                                            @elseif (!$d->disposition_young_inspector)
                                            {{ strtoupper($d->to_young_inspector) }}
                                            @elseif ($d->disposition_young_inspector)
                                            RIKSA
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                                            <a href="{{ route('lapdu.operator.klarifikasi.show', ['id' => $d->_id]) }}" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                                            <a href="{{ route('lapdu.operator.klarifikasi.edit', ['id' => $d->_id]) }}" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                                            <a href="{{ route('lapdu.operator.klarifikasi.action', ['id' => $d->_id]) }}" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th>Terlapor</th>
                                        <th>Jabatan</th>
                                        <th>Perihal</th>
                                        <th>Proses</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <!-- Date and time range -->
                            <div class="form-group">
                                <div class="input-group">
                                    <button type="button" class="btn btn-default btn-sm pull-right" id="daterange-btn">
                                        <span>
                                            <i class="fa fa-calendar"></i> Filter tanggal laporan
                                        </span>

                                        <i class="fa fa-caret-down"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.form group -->
                        </div>
                        <!-- /.box-footer-->
                    </div>

                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2">
                        <div class="box-header">
                            <h3 class="box-title">TAHAP KLARIFIKASI LANJUTAN</h3>

                            <div class="box-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->

                        <div class="box-body table-responsive no-padding">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="15%">Terlapor</th>
                                        <th width="15%">Jabatan</th>
                                        <th>Perihal</th>
                                        <th>Proses</th>
                                        <th width="10%">Tindakan</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($advanced as $d)
                                    <tr>
                                        <td>
                                            @foreach ($d->reporteds as $r)
                                                @if ($r['status'] == 'terlapor' && array_key_exists('nip', $r) && array_key_exists('nrp', $r))
                                                {{ $r['name'] }}<br>
                                                {{--  [Pangkat] [Golongan]<br>  --}}
                                                {{ $r['nip'] . ' | ' . $r['nrp'] }}<br>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($d->reporteds as $r)
                                                @if ($r['status'] == 'terlapor' && array_key_exists('jobtitle', $r) && array_key_exists('institute', $r))
                                                {{ $r['jobtitle'] . ' | '. $r['institute'] }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($d->reporters as $r)
                                                <strong>Dilaporkan oleh:</strong> {{ $r['name'] . ', '. $r['organization'] }}<br>
                                            @endforeach
                                            <br><strong>Perihal: </strong>{{ $d->title }}
                                        </td>
                                        <td>
                                            @if (!$d->disposition_ja && !$d->disposition_waja)
                                            JAKSA AGUNG
                                            @elseif (!$d->disposition_jamwas && !$d->disposition_sesjamwas)
                                            JAMWAS
                                            @elseif (!$d->disposition_inspector)
                                            {{ strtoupper($d->to_inspector) }}
                                            @elseif (!$d->disposition_young_inspector)
                                            {{ strtoupper($d->to_young_inspector) }}
                                            @elseif ($d->disposition_young_inspector)
                                            RIKSA
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                                            <a href="{{ route('lapdu.operator.klarifikasi.show', ['id' => $d->_id]) }}" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                                            <a href="{{ route('lapdu.operator.klarifikasi.edit', ['id' => $d->_id]) }}" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                                            <a href="{{ route('lapdu.operator.klarifikasi.action', ['id' => $d->_id]) }}" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th>Terlapor</th>
                                        <th>Jabatan</th>
                                        <th>Perihal</th>
                                        <th>Proses</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <!-- Date and time range -->
                            <div class="form-group">
                                <div class="input-group">
                                    <button type="button" class="btn btn-default btn-sm pull-right" id="daterange-btn">
                                        <span>
                                            <i class="fa fa-calendar"></i> Filter tanggal laporan
                                        </span>

                                        <i class="fa fa-caret-down"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.form group -->
                        </div>
                        <!-- /.box-footer-->
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- END CUSTOM TABS -->
@endsection

@section('scripts')
    <!-- date-range-picker -->
    <script src="{{ asset('vendor/core/moment/min/moment.min.js')}}"></script>
    <script src="{{ asset('vendor/core/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- bootstrap datepicker -->
    <script src="{{ asset('vendor/core/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

    <script>
        $(function () {
            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'DD/MM/YYYY h:mm A' })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                ranges   : {
                    'Hari ini'       : [moment(), moment()],
                    'Kemarin'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    '7 hari terakhir' : [moment().subtract(6, 'days'), moment()],
                    '30  hari terakhir': [moment().subtract(29, 'days'), moment()],
                    'Bulan ini'  : [moment().startOf('month'), moment().endOf('month')],
                    'Bulan Kemarin'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate  : moment()
            },
                function (start, end) {
                    $('#daterange-btn span').html(start.format('D MMMM, YYYY') + ' - ' + end.format('D MMMM, YYYY'))
                }
            )
            //Date range as a button
            $('#daterange-btn2').daterangepicker({
                ranges   : {
                    'Hari ini'       : [moment(), moment()],
                    'Kemarin'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    '7 hari terakhir' : [moment().subtract(6, 'days'), moment()],
                    '30  hari terakhir': [moment().subtract(29, 'days'), moment()],
                    'Bulan ini'  : [moment().startOf('month'), moment().endOf('month')],
                    'Bulan Kemarin'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate  : moment()
            },
                function (start, end) {
                    $('#daterange-btn2 span').html(start.format('D MMMM, YYYY') + ' - ' + end.format('D MMMM, YYYY'))
                }
            )

            //Date picker
            $('#datepicker').datepicker({
                autoclose: true
            })
        })
    </script>
@endsection
