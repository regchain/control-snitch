<form action="{{ route('lapdu.operator.laporan.update', ['id' => $data->_id]) }}" method="post">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PUT">

    <div class="col-xs-6">
        @if ($data->disposition_ja)
        <p>
            <strong class="text-blue">J.A.: </strong>
            {{ $data->disposition_ja }}
        </p>
        @else
        <div class="box-footer">
            <div class="input-group">
                <input type="text" name="disposition_ja" placeholder="Disposisi ..." class="form-control">

                <span class="input-group-btn">
                    <button type="submit" class="btn btn-default btn-flat">Kirim</button>
                </span>
            </div>
        </div>
        @endif
    </div>

    <div class="col-xs-6">
        @if ($data->disposition_waja)
        <p>
            <strong class="text-blue">Wa J.A.: </strong>
            {{ $data->disposition_waja }}
        </p>
        @else
        <div class="box-footer">
            <div class="input-group">
                <input type="text" name="disposition_waja" placeholder="Disposisi ..." class="form-control">

                <span class="input-group-btn">
                    <button type="submit" class="btn btn-default btn-flat">Kirim</button>
                </span>
            </div>
        </div>
        @endif
    </div>
</form>
