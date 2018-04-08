

<div class="col-sm-12">
    <table id="list-qna" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th width="5%">No.</th>
                <th width="35%">Pertanyaan</th>
                <th width="40%">Jawaban</th>
                <th width="20%">Keterangan</th>
                {{--  <th>Tindakan</th>  --}}
            </tr>
        </thead>

        <tbody>
            @if (array_key_exists('interviews', $data->$type))
                @foreach ($data->$type['interviews'] as $i)
                    @foreach ($i['qna'] as $l => $q)
                    <tr>
                        <td>{{ $l+1 }}</td>
                        <td>{{ $q['question'] }}</td>
                        <td>{!! $q['answer'] !!}</td>
                        <td></td>
                        {{--  <td>
                            <div class="btn-group pull-right" role="group" aria-label="...">
                            <button type="button" class="btn btn-default btn-xs"><i class="fa fa-edit"> </i> Edit</button>
                            <button type="button" class="btn btn-default btn-xs"><i class="fa fa-remove"> </i> Hapus</button>
                            </div>
                        </td>  --}}
                    </tr>
                    @endforeach
                @endforeach
            @endif
        </tbody>

        <tfoot>
            <tr>
                <th>No.</th>
                <th>Pertanyaan</th>
                <th>Jawaban</th>
                <th>Keterangan</th>
                {{--  <th>Tindakan</th>  --}}
            </tr>
        </tfoot>
    </table>
</div>
