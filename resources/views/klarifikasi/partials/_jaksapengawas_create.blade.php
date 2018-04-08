<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">
        <div class="input-group">
            {{-- <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> --}}
            <span id="inputGroupSuccess1Status" class="sr-only">(success)</span>

            <select class="form-control select2" style="width: 100%;" id="ja">
                <option selected="selected">Pilih Pemeriksa</option>
                @foreach ($users as $u)
                <option value="{{ $u->_id }}">{{ $u->nrp }} | {{ $u->name }}</option>
                @endforeach
            </select>

            <span class="input-group-addon btn btn-default">
                <a href="javascript:void(0)" id="add-pemeriksa"><i class="fa fa-plus"></i> Tambah</a>
            </span>
        </div>
    </div>
    <!-- List group -->

    <ul class="list-group" id="list-pemeriksa">
        @if (array_key_exists('examiners', $data->$type))
        @foreach ($data->$type['examiners'] as $k => $e)
        <li class="list-group-item">
            <div class="box-body table-responsive no-padding">
                <table id="example2" class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <td width="5%">{{ $k+1 }}. </td>
                            <td width="15%"><strong>Nama</strong></td>
                            <td>: {{ $e['name'] }}</td>
                            <td width="10%">
                                {{--  <a href="#" class="btn btn-flat btn-xs btn-default"><i class="fa fa-remove"></i></a>  --}}
                            </td>
                        </tr>

                        {{--  <tr>
                            <td></td>
                            <td><strong>Pangkat</strong></td>
                            <td>: [Pangkat], [Golongan] </td>
                            <td></td>
                        </tr>  --}}

                        <tr>
                            <td></td>
                            <td><strong>NIP / NRP</strong></td>
                            <td>: {{ $e['nip'] }} | {{ $e['nrp'] }} </td>
                            <td></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td><strong>Jabatan</strong></td>
                            <td>: {{ $e['jobtitle'] }}, {{ $e['institute'] }} </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </li>
        @endforeach
        @endif
    </ul>
</div>
