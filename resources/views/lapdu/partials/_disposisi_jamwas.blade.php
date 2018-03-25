<form action="{{ route('lapdu.operator.laporan.update', ['id' => $data->_id]) }}" method="post">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PUT">

    <div class="col-xs-6">
        @if ($data->disposition_jamwas)
        <p>
            <strong class="text-blue">JAMWAS : </strong>
            {{ $data->disposition_jamwas }}
        </p>
        @else
        <div class="box-footer">
            <div class="input-group">
                <input type="text" name="disposition_jamwas" placeholder="Disposisi ..." class="form-control">

                <span class="input-group-btn">
                    <button type="submit" class="btn btn-default btn-flat">Kirim</button>
                </span>
            </div>
        </div>
        @endif
    </div>

    <div class="col-xs-6">
        @if ($data->disposition_sesjamwas)
        <p>
            <strong class="text-blue">SESJAMWAS : </strong>
            {{ $data->disposition_sesjamwas }}
        </p>
        @else
        <div class="box-footer">
            <div class="input-group">
                <input type="text" name="disposition_sesjamwas" placeholder="Disposisi ..." class="form-control">

                <span class="input-group-btn">
                    <button type="submit" class="btn btn-default btn-flat">Kirim</button>
                </span>
            </div>
        </div>
        @endif
    </div>

    <div class="box-body">
        <div class="box-header">
            <h1 class="box-title">Diteruskan ke :</h1>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6">
            <label>
                <input type="radio" class="minimal-red" name="to_inspector" value="inspektur i" {{ $data->to_inspector ? ($data->to_inspector == 'inspektur i' ? 'checked' : '') : '' }}>
                Inspektur I
            </label><br>
        </div>

        <div class="col-md-2 col-sm-4">
            <label>
                <input type="radio" class="minimal-red" name="to_inspector" value="inspektur ii" {{ $data->to_inspector ? ($data->to_inspector == 'inspektur ii' ? 'checked' : '') : '' }}>
                Inspektur II
            </label><br>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6">
            <label>
                <input type="radio" class="minimal-red" name="to_inspector" value="inspektur iii" {{ $data->to_inspector ? ($data->to_inspector == 'inspektur iii' ? 'checked' : '') : '' }}>
                Inspektur III
            </label><br>
        </div>

        <div class="col-md-2 col-sm-4">
            <label>
                <input type="radio" class="minimal-red" name="to_inspector" value="inspektur iv" {{ $data->to_inspector ? ($data->to_inspector == 'inspektur iv' ? 'checked' : '') : '' }}>
                Inspektur IV
            </label><br>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6">
            <label>
                <input type="radio" class="minimal-red" name="to_inspector" value="inspektur v" {{ $data->to_inspector ? ($data->to_inspector == 'inspektur v' ? 'checked' : '') : '' }}>
                Inspektur V
            </label><br>
        </div>

        {{-- <div class="col-md-2 col-sm-4">
            <label>
                <input type="checkbox" class="minimal-red">
                Inspektur VI
            </label><br>
            </div> --}}
    </div>
</form>
