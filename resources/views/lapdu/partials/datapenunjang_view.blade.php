<div class="box-header">
    <h1 class="box-title">3. Data Penunjang</h1>
</div>

<div class="box-body">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th width="30%">Nama File</th>
                <th>Jenis</th>
                <th>Kapasitas</th>
                {{--  <th width="30%">Keterangan</th>  --}}
                {{--  <th>Tindakan</th>  --}}
            </tr>
        </thead>

        <tbody>
            @foreach ($data->files as $k => $f)
            <tr>
                <td>{{ $f['filename'] }}</td>
                <td>{{ $f['extension'] }}</td>
                <td>{{ $f['size'] / 1000 . ' kB' }}</td>
                {{--  <td> 4</td>  --}}
                {{--  <td>
                    <div class="btn-group pull-right" role="group" aria-label="...">
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-eye"></i></a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-remove"></i></a>
                    </div>
                </td>  --}}
            </tr>
            @endforeach
        </tbody>

        <tfoot>
            <tr>
                <th width="30%">Nama File</th>
                <th>Jenis</th>
                <th>Kapasitas</th>
                <th width="30%">Keterangan</th>
                {{--  <th>Tindakan</th>  --}}
            </tr>
        </tfoot>
    </table>
</div>
