<div class="box-header">
    <h2 class="box-title">3. Data Penunjang</h2>
</div>

<form method="POST" action="{{ route('lapdu.operator.laporan.update', ['id' => $data->_id]) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PUT">

    <div class="box-body">
        <div class="input-group margin">
            <input type="file" name="files[]" id="files" value="" placeholder="Unggah data penunjang yang anda miliki sebagai alat bukti">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-info btn-flat">Unggah!</button>
            </span>
        </div>

        <p>&nbsp;&nbsp;&nbsp;<code>&nbsp;* Jenis data yang dapat diunggah: .doc .docx .jpg </code></p>

        <table id="list-files" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th width="30%">Nama File</th>
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
                    <td>{{ $f['filename'] }}</td>
                    <td>{{ $f['extension'] }}</td>
                    <td>{{ $f['size']/1000 . ' kB' }}</td>
                    <td></td>
                </tr>
                @endforeach
                @endif
            </tbody>

            <tfoot>
                <tr>
                    <th width="30%">Nama File</th>
                    <th>Jenis</th>
                    <th>Kapasitas</th>
                    <th width="30%">Keterangan</th>
                    <th>Tindakan</th>
                </tr>
            </tfoot>
        </table>
    </div>
</form>
