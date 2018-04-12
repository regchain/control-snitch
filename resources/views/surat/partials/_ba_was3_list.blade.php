<div class="box-header with-border">
    <small class="pull-right">L.WAS-1</small>
    <h3 class="box-title">Keterangan Saksi Pelapor & Terlapor</h3>
</div>

<div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th width="25%">Nama Lengkap</th>
                {{-- <th>Status</th> --}}
                <th>Kesimpulan</th>
                <th>Pewawancara</th>
                {{-- <th></th> --}}
            </tr>
        </thead>

        <tbody>
            @foreach ($data->$type['interviews'] as $i)
            <tr>
                <td>{{ $i['date'] }}</td>
                <td>{{ $i['witness'] }}<br>
                {{-- [Pangkat] [Golongan]<br>
                [NIP] | [NRP]<br>
                [Jabatan], [Satker] </td> --}}
                {{-- <td>[Pelapor/ <br>
                Terlapor/ <br>
                Saksi]</td> --}}
                <td>{!! $i['summary'] !!}</td>
                <td>{{ $i['interviewer'] }}</td>
                {{-- <td>
                    <div class="btn-group pull-right" role="group" aria-label="...">
                        <a href="ba_was3_view" class="btn btn-default btn-sm"><i class="fa fa-eye"> </i></a>
                        <a href="ba_was3_edit" class="btn btn-default btn-sm"><i class="fa fa-edit"> </i></a>
                    </div>
                </td> --}}
            </tr>
            @endforeach
        </tbody>

        <tfoot>
            <tr>
                <th>Tanggal</th>
                <th>Nama Lengkap</th>
                {{-- <th>Status</th> --}}
                <th>Kesimpulan</th>
                <th>Pewawancara</th>
                {{-- <th></th> --}}
            </tr>
        </tfoot>
    </table>
</div>