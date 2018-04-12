<div class="row">
    <div class="col-sm-8">
        <div class="box-header with-border">
          <h3 class="box-title"><strong class="text-blue">Jaksa Agung Muda Bidang Pengawasan menyarankan : </strong></h3>
        </div>

        <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="5%">No.</th>
                        <th width="20%">Terlapor</th>
                        <th>Detail</th>
                        <th width="30%">Pasal yang dilanggar</th>
                        <th width="30%">Hukuman Disiplin</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($punishments as $k => $p)
                    <tr>
                        <td>{{ $k+1 }}.</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->detail }}</td>
                        <td>
                            {{ $p->violation ? $p->violation : '' }}
                            <input type="text" class="form-control" placeholder="Pendapat JAMWAS" name="opinion_jamwas[]" value="{{ $p->opinion_jamwas ? $p->opinion_jamwas : '' }}">
                        </td>
                        <td>
                            {!! $p->punishment ? $p->punishment : '' !!}
                            <input type="text" class="form-control" placeholder="Saran JAMWAS" name="suggestion_jamwas[]" value="{{ $p->suggestion_jamwas ? $p->suggestion_jamwas : '' }}">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="box-footer">
            <br>
            <a href="javascript:void(0)" id="update-jamwas" class="btn btn-flat btn-info pull-right" style="margin-right: 5px;"> Lanjut</a>
        </div>
    </div>

    @if (array_key_exists('decision_ja', $data->$type))
    <div class="col-sm-4">
        <div class="box-header with-border">
            <h3 class="box-title"><strong class="text-blue">SESJAMWAS</strong></h3>
        </div>

        <div class="box-body">
            <a href="{{ route('lapdu.operator.inspeksi.warrant', ['id' => $data->_id]) }}" for="spwas1" class="btn btn-flat btn-sm btn-info pull-right" data-toggle="tooltip" data-placement="top" title="Pemberitahuan Usulan Hukuman Disiplin" style="margin-right: 5px;"><i class="fa fa-plus"></i> WAS-15</a>
        </div>
    </div>
    @endif
</div>
