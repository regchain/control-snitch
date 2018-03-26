<div class="box-header">
    <h1 class="box-title">1. Daftar Pelapor / Saksi</h1>
</div>

<div class="box-body">
    <table class="table table-bordered table-striped" id="pelapor">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Pelapor</th>
                <th>Organisasi</th>
                <th>Kontak</th>
                <th>Status</th>
                {{--  <th>Tindakan</th>  --}}
            </tr>
        </thead>

        <tbody>
            @if (isset($data) && $data->reporters)
            @foreach ($data->reporters as $k => $r)
            @if (array_key_exists('status', $r))
            <tr>
                <td>{{ $k+1 }}.</td>
                <td>{{ $r['name'] }}</td>
                <td>{{ $r['organization'] }}</td>
                <td>{{ $r['handphone'] . ' - ' . $r['phone'] . ' - ' . $r['email'] }}</td>
                <td><strong>{{ ucfirst($r['status']) }}</strong></td>
                {{--  <td>
                    <div class="btn-group pull-right" role="group" aria-label="...">
                        <a type="button" class="btn btn-default btn-sm"><i class="fa fa-edit"> </i></button>
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-remove"> </i></button>
                    </div>
                </td>  --}}
            </tr>
            @endif
            @endforeach
            @endif
        </tbody>

        <tfoot>
            <tr>
                <th>No.</th>
                <th>Nama Pelapor</th>
                <th>Organisasi</th>
                <th>Kontak</th>
                <th>Status</th>
                {{--  <th>Tindakan</th>  --}}
            </tr>
        </tfoot>
    </table>
</div>