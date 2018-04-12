<div class="box-body">
    <label for="">Pejabat Pengawas</label>

    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Lengkap</th>
                {{-- <th>Pangkat</th> --}}
                <th>NIP | NRP</th>
                <th>Jabatan</th>
                <th>Satuan Kerja</th>
            </tr>
        </thead>

        <tbody>
            @if (array_key_exists('examiners', $data->$previousType))
            @foreach ($data->$previousType['examiners'] as $k => $e)
            <tr>
                <td>{{ $k + 1 }}.</td>
                <td>{{ $e['name'] }}</td>
                {{-- <td>{{ $e['jobtitle'] }}</td> --}}
                <td>{{ $e['nip'] }} | {{ $e['nrp'] }}</td>
                <td>{{ $e['jobtitle'] }}</td>
                <td>{{ $e['institute'] }}</td>
                {{-- <td>
                    <div class="btn-group pull-right" role="group" aria-label="...">
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-edit"> </i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-remove"> </i></button>
                    </div>
                    </td> --}}
            </tr>
            @endforeach
            @endif
        </tbody>

        <tfoot>
            <tr>
                <th>No.</th>
                <th>Nama Lengkap</th>
                {{-- <th>Pangkat</th> --}}
                <th>NIP | NRP</th>
                <th>Jabatan</th>
                <th>Satuan Kerja</th>
            </tr>
        </tfoot>
    </table>
</div>