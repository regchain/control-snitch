<div class="box-header with-border">
    <small class="pull-right">L.WAS-1</small>
    <h3 class="box-title">LAPORAN HASIL WAWANCARA</h3>
</div>

<div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th width="25%">Nama Lengkap</th>
                {{--  <th>Status</th>  --}}
                <th>Kesimpulan</th>
                <th>Pewawancara</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @if (array_key_exists('interviews', $data->$type))
            @foreach ($data->$type['interviews'] as $i)
            <tr>
                <td>{{ $i['date'] }}</td>
                <td>{{ $i['witness'] }}</td>
                {{--  <td>[Pelapor/ <br>
                Terlapor/ <br>
                Saksi]</td>  --}}
                <td>{!! array_key_exists('summary', $i) ? $i['summary'] : '' !!}</td>
                <td>{{ $i['interviewer'] }}</td>
                <td>
                    <div class="btn-group pull-right" role="group" aria-label="...">
                        <a href="{{ route('lapdu.operator.klarifikasi.interview', ['id' => $data->_id, 'subjek' => $i['witness'], 'tanggal' => $i['date']]) }}" class="btn btn-default btn-sm"><i class="fa fa-eye"> </i></a>
                        {{--  <a href="ba_was2_edit" class="btn btn-default btn-sm"><i class="fa fa-edit"> </i></a>  --}}
                    </div>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>

        <tfoot>
            <tr>
                <th>Tanggal</th>
                <th>Nama Lengkap</th>
                {{--  <th>Status</th>  --}}
                <th>Kesimpulan</th>
                <th>Pewawancara</th>
                <th></th>
            </tr>
        </tfoot>
    </table>
</div>