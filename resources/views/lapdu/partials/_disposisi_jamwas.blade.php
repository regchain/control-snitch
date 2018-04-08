<form action="{{ route('lapdu.operator.laporan.update', ['id' => $data->_id]) }}" method="post">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PUT">

    <div class="col-xs-12">
        <div class="box-header">
            <h1 class="box-title">Informasi / Instruksi : </h1>
        </div>

        <div class="col-sm-3 col-xs-6">
            <input type="checkbox" class="flat-red" name="{{ $type }}[information/instruction][]" value="telaahan" {{ $data->$type ? (array_key_exists('information/instruction', $data->$type) ? (in_array('telaahan', $data->$type['information/instruction']) ? 'checked' : '') : '') : '' }}>
            <label>
                Telaahan
            </label><br>

            <input type="checkbox" class="flat-red" name="{{ $type }}[information/instruction][]" value="monitor & evaluasi" {{ $data->$type ? (array_key_exists('information/instruction', $data->$type) ? (in_array('monitor & evaluasi', $data->$type['information/instruction']) ? 'checked' : '') : '') : '' }}>
            <label>
                Monitor & Evaluasi
            </label>
        </div>

        <div class="col-sm-3 col-xs-6">
            <input type="checkbox" class="flat-red" name="{{ $type }}[information/instruction][]" value="setuju, saran" {{ $data->$type ? (array_key_exists('information/instruction', $data->$type) ? (in_array('setuju, saran', $data->$type['information/instruction']) ? 'checked' : '') : '') : '' }}>
            <label>
                Setuju, Saran
            </label><br>

            <input type="checkbox" class="flat-red" name="{{ $type }}[information/instruction][]" value="teliti/cermati" {{ $data->$type ? (array_key_exists('information/instruction', $data->$type) ? (in_array('teliti/cermati', $data->$type['information/instruction']) ? 'checked' : '') : '') : '' }}>
            <label>
                Teliti / Cermati
            </label>
        </div>

        <div class="col-sm-3 col-xs-6">
            <input type="checkbox" class="flat-red" name="{{ $type }}[information/instruction][]" value="pendapat" {{ $data->$type ? (array_key_exists('information/instruction', $data->$type) ? (in_array('pendapat', $data->$type['information/instruction']) ? 'checked' : '') : '') : '' }}>
            <label>
                Pendapat
            </label><br>

            <input type="checkbox" class="flat-red" name="{{ $type }}[information/instruction][]" value="usp/udk" {{ $data->$type ? (array_key_exists('information/instruction', $data->$type) ? (in_array('usp/udk', $data->$type['information/instruction']) ? 'checked' : '') : '') : '' }}>
            <label>
                USP /UDK
            </label><br>
        </div>

        <div class="col-sm-3 col-xs-6">
            <input type="checkbox" class="flat-red" name="{{ $type }}[information/instruction][]" value="tindak lanjut" {{ $data->$type ? (array_key_exists('information/instruction', $data->$type) ? (in_array('tindak lanjut', $data->$type['information/instruction']) ? 'checked' : '') : '') : '' }}>
            <label>
                Tindak lanjut
            </label><br>

            <input type="checkbox" class="flat-red" name="{{ $type }}[information/instruction][]" value="temui jamwas" {{ $data->$type ? (array_key_exists('information/instruction', $data->$type) ? (in_array('temui jamwas', $data->$type['information/instruction']) ? 'checked' : '') : '') : '' }}>
            <label>
                Temui JAM WAS
            </label><br>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="box-header">
            <h1 class="box-title">Diteruskan ke :</h1>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6">
            <label>
                <input type="radio" class="flat-red" name="{{ $type }}[to_inspector]" value="inspektur i" {{ $data->$type ? (array_key_exists('to_inspector', $data->$type) ? ($data->$type['to_inspector'] == 'inspektur i' ? 'checked' : '') : '') : '' }}>
                Inspektur I
            </label><br>
        </div>

        <div class="col-md-2 col-sm-4">
            <label>
                <input type="radio" class="flat-red" name="{{ $type }}[to_inspector]" value="inspektur ii" {{ $data->$type ? (array_key_exists('to_inspector', $data->$type) ? ($data->$type['to_inspector'] == 'inspektur ii' ? 'checked' : '') : '') : '' }}>
                Inspektur II
            </label><br>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6">
            <label>
                <input type="radio" class="flat-red" name="{{ $type }}[to_inspector]" value="inspektur iii" {{ $data->$type ? (array_key_exists('to_inspector', $data->$type) ? ($data->$type['to_inspector'] == 'inspektur iii' ? 'checked' : '') : '') : '' }}>
                Inspektur III
            </label><br>
        </div>

        <div class="col-md-2 col-sm-4">
            <label>
                <input type="radio" class="flat-red" name="{{ $type }}[to_inspector]" value="inspektur iv" {{ $data->$type ? (array_key_exists('to_inspector', $data->$type) ? ($data->$type['to_inspector'] == 'inspektur iv' ? 'checked' : '') : '') : '' }}>
                Inspektur IV
            </label><br>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6">
            <label>
                <input type="radio" class="flat-red" name="{{ $type }}[to_inspector]" value="inspektur v" {{ $data->$type ? (array_key_exists('to_inspector', $data->$type) ? ($data->$type['to_inspector'] == 'inspektur v' ? 'checked' : '') : '') : '' }}>
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

    <div class="col-xs-6">
        @if ($data->$type && array_key_exists('disposition_jamwas', $data->$type) && array_key_exists('to_inspector', $data->$type))
        <p>
            <strong class="text-blue">JAMWAS : </strong>
            {{ $data->$type['disposition_jamwas'] }}
        </p>
        @else
        <div class="box-footer">
            <div class="input-group">
                <input type="text" name="{{ $type }}[disposition_jamwas]" placeholder="Disposisi ..." class="form-control" value="{{ ($data->$type && array_key_exists('disposition_jamwas', $data->$type)) ? $data->$type['disposition_jamwas'] : ''}}">

                <span class="input-group-btn">
                    <button type="submit" class="btn btn-default btn-flat">Kirim</button>
                </span>
            </div>
        </div>
        @endif
    </div>

    <div class="col-xs-6">
        @if ($data->$type && array_key_exists('disposition_sesjamwas', $data->$type))
        <p>
            <strong class="text-blue">SESJAMWAS : </strong>
            {{ $data->$type['disposition_sesjamwas'] }}
        </p>
        @else
        <div class="box-footer">
            <div class="input-group">
                <input type="text" name="{{ $type }}[disposition_sesjamwas]" placeholder="Disposisi ..." class="form-control" value="{{ ($data->$type && array_key_exists('disposition_sesjamwas', $data->$type)) ? $data->$type['disposition_sesjamwas'] : ''}}">

                <span class="input-group-btn">
                    <button type="submit" class="btn btn-default btn-flat">Kirim</button>
                </span>
            </div>
        </div>
        @endif
    </div>
</form>
