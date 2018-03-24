<div class="box-header">
    <h1 class="box-title">2. Data Terlapor</h1>
</div>

<div class="box-body">
    <table id="terlapor" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Terlapor</th>
                <th>Jabatan</th>
                <th>Satuan Kerja</th>
                <th>Status Kepegawaian</th>
                {{--  <th>Tindakan</th>  --}}
            </tr>
        </thead>

        <tbody>
            @if (isset($data) && $data->reporters)
            @foreach ($data->reporteds as $k => $r)
            <tr>
                <td>{{ $k+1 }}.</td>
                <td>{{ $r['name'] }}</td>
                <td>{{ $r['position'] }}</td>
                <td>{{ $r['institute'] }}</td>
                <td>{{ $r['jobtitle'] }}</td>
                {{--  <td>
                    <div class="btn-group pull-right" role="group" aria-label="...">
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-edit"> </i></button>
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-remove"> </i></button>
                    </div>
                </td>  --}}
            </tr>
            @endforeach
            @endif
        </tbody>

        <tfoot>
            <tr>
                <th>No.</th>
                <th>Nama Terlapor</th>
                <th>Jabatan</th>
                <th>Satuan Kerja</th>
                <th>Status Kepegawaian</th>
                {{--  <th>Tindakan</th>  --}}
            </tr>
        </tfoot>
    </table>
</div>
