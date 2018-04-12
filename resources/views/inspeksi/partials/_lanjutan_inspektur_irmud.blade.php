<div class="box-header">
    <h2 class="box-title">SARAN IRMUD</h2>
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
                    <input type="text" class="form-control" placeholder="Pendapat IRMUD" name="opinion_young_inspector[]" value="{{ $p->opinion_young_inspector ? $p->opinion_young_inspector : '' }}">
                </td>
                <td>
                    {!! $p->punishment ? $p->punishment : '' !!}
                    <input type="text" class="form-control" placeholder="Saran IRMUD" name="suggestion_young_inspector[]" value="{{ $p->suggestion_young_inspector ? $p->suggestion_young_inspector : '' }}">
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="box-footer">
    <br>
    <a href="javascript:void(0)" id="update-irmud" class="btn btn-flat btn-info pull-right" style="margin-right: 5px;"> Lanjut</a>
</div>

