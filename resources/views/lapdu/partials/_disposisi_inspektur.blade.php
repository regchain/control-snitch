<form action="{{ route('lapdu.operator.laporan.update', ['id' => $data->_id]) }}" method="post">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PUT">

    <div class="row">    <!-- INFORMASI / INSTRUKSI -->
        <div class="col-sm-6 col-xs-5">
            @if ($data->$type && array_key_exists('disposition_inspector', $data->$type) && array_key_exists('to_young_inspector', $data->$type))
            <p>
                <strong class="text-blue">{{ strtoupper($data->$type['to_inspector']) }}: </strong>
                {{ $data->$type['disposition_inspector'] }}
            </p>
            @else
            <div class="box-footer">
                <div class="input-group">
                    <input type="text" name="{{ $type }}[disposition_inspector]" placeholder="Disposisi ..." class="form-control" value="{{ ($data->$type && array_key_exists('disposition_inspector', $data->$type)) ? $data->$type['disposition_inspector'] : ''}}">

                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default btn-flat">Kirim</button>
                    </span>
                </div>
            </div>
            @endif
        </div>
        <!-- /.box-header -->

        <div class="row">
            <div class="col-sm-5 col-xs-7">
                <p class="box-title">Diteruskan ke :</p><br>

                <label>
                    <input type="radio" class="flat-red" name="{{ $type }}[to_young_inspector]" value="pegasum & kepbang" {{ $data->$type ? (array_key_exists('to_young_inspector', $data->$type) ? ($data->$type['to_young_inspector'] == 'pegasum & kebang' ? 'checked' : '') : '') : '' }}>
                    IRMUD PEGASUM & KEPBANG
                </label><br>

                <label>
                    <input type="radio" class="flat-red" name="{{ $type }}[to_young_inspector]" value="pidum & datun" {{ $data->$type ? (array_key_exists('to_young_inspector', $data->$type) ? ($data->$type['to_young_inspector'] == 'pidum & datun' ? 'checked' : '') : '') : '' }}>
                    IRMUD PIDUM & DATUN
                </label><br>

                <label>
                    <input type="radio" class="flat-red" name="{{ $type }}[to_young_inspector]" value="intel & pidsus" {{ $data->$type ? (array_key_exists('to_young_inspector', $data->$type) ? ($data->$type['to_young_inspector'] == 'intel & pidsus' ? 'checked' : '') : '') : '' }}>
                    IRMUD INTEL & PIDSUS
                </label><br>
            </div>
        </div>
    </div>
</form>
