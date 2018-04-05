<form action="{{ route('lapdu.operator.laporan.update', ['id' => $data->_id]) }}" method="post">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PUT">

    <!-- INFORMASI / INSTRUKSI -->
    <div class="col-xs-12">
        @if ($data->$type && array_key_exists('disposition_young_inspector', $data->$type))
        <p>
            <strong class="text-blue">Irmud {{ ucwords($data->$type['to_young_inspector']) }}: </strong>
            {{ $data->$type['disposition_young_inspector'] }}
        </p>
        @else
        <div class="box-footer">
            <div class="input-group">
                <input type="text" name="{{ $type }}[disposition_young_inspector]" placeholder="Disposisi ..." class="form-control">

                <span class="input-group-btn">
                    <button type="submit" class="btn btn-default btn-flat">Kirim</button>
                </span>
            </div>
        </div>
        @endif
    </div>

    <div class="col-xs-12">
        <div class="box-header">
            <h1 class="box-title">Diteruskan ke:</h1>
        </div>

        <br>

        <div class="row">
            @if ($data->$type && array_key_exists('to_young_inspector', $data->$type) && $data->$type['to_young_inspector'] == 'pegasum & kepbang')
            <div class="col-md-2 col-sm-3 col-xs-6">
                <label>
                    <input type="radio" class="flat-red" name="{{ $type }}[to_riksa]" value="riksa pegasum" {{ $data->$type ? (array_key_exists('to_riksa', $data->$type) ? ($data->$type['to_riksa'] == 'riksa pegasum' ? 'checked' : '') : '') : '' }}>
                    RIKSA PEGASUM
                </label><br>

                <label>
                    <input type="radio" class="flat-red" name="{{ $type }}[to_riksa]" value="riksa kepbang" {{ $data->$type ? (array_key_exists('to_riksa', $data->$type) ? ($data->$type['to_riksa'] == 'riksa kepbang' ? 'checked' : '') : '') : '' }}>
                    RIKSA KEPBANG
                </label><br>
            </div>
            @elseif ($data['to_young_inspector'] == 'pidum & datun')
            <div class="col-md-2 col-sm-3 col-xs-6">
                <label>
                    <input type="radio" class="flat-red" name="{{ $type }}[to_riksa]" value="riksa pidum" {{ $data->$type ? (array_key_exists('to_riksa', $data->$type) ? ($data->$type['to_riksa'] == 'riksa pidum' ? 'checked' : '') : '') : '' }}>
                    RIKSA PIDUM
                </label><br>

                <label>
                    <input type="radio" class="flat-red" name="{{ $type }}[to_riksa]" value="riksa datun" {{ $data->$type ? (array_key_exists('to_riksa', $data->$type) ? ($data->$type['to_riksa'] == 'riksa datun' ? 'checked' : '') : '') : '' }}>
                    RIKSA DATUN
                </label><br>
            </div>
            @elseif ($data['to_young_inspector'] == 'intel & pidsus')
            <div class="col-md-2 col-sm-3 col-xs-6">
                <label>
                    <input type="radio" class="flat-red" name="{{ $type }}[to_riksa]" value="riksa intel" {{ $data->$type ? (array_key_exists('to_riksa', $data->$type) ? ($data->$type['to_riksa'] == 'riksa intel' ? 'checked' : '') : '') : '' }}>
                    RIKSA INTEL
                </label><br>

                <label>
                    <input type="radio" class="flat-red" name="{{ $type }}[to_riksa]" value="riksa pidsus" {{ $data->$type ? (array_key_exists('to_riksa', $data->$type) ? ($data->$type['to_riksa'] == 'riksa pidsus' ? 'checked' : '') : '') : '' }}>
                    RIKSA PIDSUS
                </label><br>
            </div>
            @endif

            <div class="col-md-3 col-sm-3 col-xs-6">
                <label>
                    <input type="checkbox" class="flat-red" name="{{ $type }}[to_expert][]" value="satgas lapdu" {{ $data->$type ? (array_key_exists('to_expert', $data->$type) ? (in_array('satgas lapdu', $data->$type['to_expert']) ? 'checked' : '') : '') : '' }}>
                    SATGAS LAPDU
                </label><br>

                <label>
                    <input type="checkbox" class="flat-red" name="{{ $type }}[to_expert][]" value="jaksa fungsional" {{ $data->$type ? (array_key_exists('to_expert', $data->$type) ? (in_array('jaksa fungsional', $data->$type['to_expert']) ? 'checked' : '') : '') : '' }}>
                    JAKSA FUNGSIONAL
                </label><br>
            </div>

            <div class="col-md-3 col-sm-6">
                <label>
                    <input type="checkbox" class="flat-red" name="{{ $type }}[to_expert][]" value="operator komputer" {{ $data->$type ? (array_key_exists('to_expert', $data->$type) ? (in_array('operator komputer', $data->$type['to_expert']) ? 'checked' : '') : '') : '' }}>
                    OPERATOR KOMPUTER
                </label><br>

                <label>
                    <input type="checkbox" class="flat-red" name="{{ $type }}[to_expert][]" value="pengelola tata naskah" {{ $data->$type ? (array_key_exists('to_expert', $data->$type) ? (in_array('pengelola tata naskah', $data->$type['to_expert']) ? 'checked' : '') : '') : '' }}>
                    PENGELOLA TATA NASKAH
                </label><br>
            </div>
        </div>
    </div>
</form>
