<div class="box-header">
    <h3 class="box-title">Tim Pemeriksa menyarankan agar terlapor dijatuhi hukuman disiplin sebagai berikut:</h3>
</div>

<div class="box-body table-responsive">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th width="5%">No.</th>
                <th width="20%">Terlapor</th>
                <th>Detail</th>
                <th width="40%">Pasal yang dilanggar</th>
                <th width="20%">Hukuman Disiplin</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($punishments as $k => $p)
            <tr>
                <td>{{ $k+1 }}.</td>
                <td>{{ $p->name }}</td>
                <td>{{ $p->detail }}</td>
                <td>{{ $p->violation ? $p->violation : '' }}</td>
                <td>{!! $p->punishment ? $p->punishment : '' !!}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
