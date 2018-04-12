<div class="box-header with-border">
    <h3 class="box-title"><strong class="text-blue">KEPUTUSAN JAKSA AGUNG : </strong></h3>
    @if (array_key_exists('decision_ja', $data->$type))
    <p class="lead">{{ $data->$type['decision_ja'] }}</p>
    @endif
</div>

@if (!array_key_exists('decision_ja', $data->$type))
<div class="box-footer">
    <form action="{{ route('lapdu.operator.laporan.update', ['id' => $data->_id]) }}" method="post">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PUT">

        <div class="input-group">
            <input type="text" name="{{ $type }}[decision_ja]" placeholder="Keputusan ..." class="form-control">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-default btn-flat">Kirim</button>
            </span>
        </div>
    </form>
</div>
@endif
