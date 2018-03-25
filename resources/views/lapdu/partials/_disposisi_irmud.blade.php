<form action="{{ route('lapdu.operator.laporan.update', ['id' => $data->_id]) }}" method="post">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PUT">

    <!-- INFORMASI / INSTRUKSI -->
    <div class="col-xs-12">
        @if ($data->disposition_young_inspector)
        <p>
            <strong class="text-blue">Irmud {{ ucwords($data->to_young_inspector) }}: </strong>
            {{ $data->disposition_young_inspector }}
        </p>
        @else
        <div class="box-footer">
            <div class="input-group">
                <input type="text" name="disposition_young_inspector" placeholder="Disposisi ..." class="form-control">

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
            @if ($data->to_young_inspector == 'pegasum & kepbang')
            <div class="col-md-2 col-sm-3 col-xs-6">
                <label>
                    <input type="radio" class="minimal-red" name="to_riksa" value="riksa pegasum" {{ $data->to_riksa ? ($data->to_riksa == 'riksa pegasum' ? 'checked' : '') : '' }}>
                    RIKSA PEGASUM
                </label><br>

                <label>
                    <input type="radio" class="minimal-red" name="to_riksa" value="riksa kepbang" {{ $data->to_riksa ? ($data->to_riksa == 'riksa kepbang' ? 'checked' : '') : '' }}>
                    RIKSA KEPBANG
                </label><br>
            </div>
            @elseif ($data->to_young_inspector == 'pidum & datun')
            <div class="col-md-2 col-sm-3 col-xs-6">
                <label>
                    <input type="radio" class="minimal-red" name="to_riksa" value="riksa pidum" {{ $data->to_riksa ? ($data->to_riksa == 'riksa pidum' ? 'checked' : '') : '' }}>
                    RIKSA PIDUM
                </label><br>

                <label>
                    <input type="radio" class="minimal-red" name="to_riksa" value="riksa datun" {{ $data->to_riksa ? ($data->to_riksa == 'riksa datun' ? 'checked' : '') : '' }}>
                    RIKSA DATUN
                </label><br>
            </div>
            @elseif ($data->to_young_inspector == 'intel & pidsus')
            <div class="col-md-2 col-sm-3 col-xs-6">
                <label>
                    <input type="radio" class="minimal-red" name="to_riksa" value="riksa intel" {{ $data->to_riksa ? ($data->to_riksa == 'riksa intel' ? 'checked' : '') : '' }}>
                    RIKSA INTEL
                </label><br>

                <label>
                    <input type="radio" class="minimal-red" name="to_riksa" value="riksa pidsus" {{ $data->to_riksa ? ($data->to_riksa == 'riksa pidsus' ? 'checked' : '') : '' }}>
                    RIKSA PIDSUS
                </label><br>
            </div>
            @endif

            <div class="col-md-3 col-sm-3 col-xs-6">
                <label>
                    <input type="checkbox" class="minimal-red" name="to_expert[]" value="satgas lapdu" {{ $data->to_expert ? (in_array('satgas lapdu', $data->to_expert) ? 'checked' : '') : '' }}>
                    SATGAS LAPDU
                </label><br>

                <label>
                    <input type="checkbox" class="minimal-red" name="to_expert[]" value="jaksa fungsional" {{ $data->to_expert ? (in_array('jaksa fungsional', $data->to_expert) ? 'checked' : '') : '' }}>
                    JAKSA FUNGSIONAL
                </label><br>
            </div>

            <div class="col-md-3 col-sm-6">
                <label>
                    <input type="checkbox" class="minimal-red" name="to_expert[]" value="operator komputer" {{ $data->to_expert ? (in_array('operator komputer', $data->to_expert) ? 'checked' : '') : '' }}>
                    OPERATOR KOMPUTER
                </label><br>

                <label>
                    <input type="checkbox" class="minimal-red" name="to_expert[]" value="pengelola tata naskah" {{ $data->to_expert ? (in_array('pengelola tata naskah', $data->to_expert) ? 'checked' : '') : '' }}>
                    PENGELOLA TATA NASKAH
                </label><br>
            </div>
        </div>
    </div>
</form>
