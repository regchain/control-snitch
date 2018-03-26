<div class="row">
    <div class="box-body">
        <div class="col-xs-12">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="25%">Nama Lengkap</th>
                        <th width="50%">Uraian Singkat Perbuatan</th>
                        <th>Keterangan</th>
                        {{--  <th>Tindakan</th>  --}}
                    </tr>
                </thead>

                <tbody>
                    @if ($data)
                        @foreach ($data as $d)
                            @foreach ($d->reporteds as $r)
                                @if ($r['status'] == 'terlapor' && array_key_exists('nip', $r) && array_key_exists('nrp', $r) && array_key_exists('jobtitle', $r) && array_key_exists('institute', $r))
                                <tr>
                                    <td>
                                        <span class="label bg-green pull-right">Jaksa</span>
                                        {{ $r['name'] }}
                                        <br>{{ $r['jobtitle'] }} - {{ $r['institute'] }}
                                    </td>
                                    <td>{{ $r['position'] }}</td>
                                    <td>
                                        {{--  Berat  --}}
                                    </td>
                                    {{--  <td>
                                        <div class="btn-group pull-right" role="group" aria-label="...">
                                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></a>
                                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-remove"></i></a>
                                        </div>
                                    </td>  --}}
                                </tr>
                                @endif
                            @endforeach
                        @endforeach
                    @endif
                </tbody>

                <tfoot>
                    <tr>
                        <th>Nama Lengkap</th>
                        <th>Uraian Singkat Perbuatan</th>
                        <th>Keterangan</th>
                        {{--  <th>Tindakan</th>  --}}
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.row-box-body -->

