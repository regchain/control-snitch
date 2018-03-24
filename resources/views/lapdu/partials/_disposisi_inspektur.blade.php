<form action="{{ route('lapdu.operator.laporan.update', ['id' => $data->_id]) }}" method="post">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PUT">

    <div class="row">    <!-- INFORMASI / INSTRUKSI -->
        <div class="col-sm-6 col-xs-5">
            @if ($data->disposition_inspector)
            <p>
                <strong class="text-blue">{{ strtoupper($data->to_inspector) }}: </strong>
                {{ $data->disposition_inspector }}
            </p>
            @else
            <div class="box-footer">
                <div class="input-group">
                    <input type="text" name="disposition_inspector" placeholder="Disposisi ..." class="form-control">

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
                    <input type="radio" class="minimal-red" name="to_young_inspector" value="pegasum & kepbang" {{ $data->to_young_inspector ? ($data->to_young_inspector == 'pegasum & kebang' ? 'checked' : '') : '' }}>
                    IRMUD PEGASUM & KEPBANG
                </label><br>

                <label>
                    <input type="radio" class="minimal-red" name="to_young_inspector" value="pidum & datun" {{ $data->to_young_inspector ? ($data->to_young_inspector == 'pidum & datun' ? 'checked' : '') : '' }}>
                    IRMUD PIDUM & DATUN
                </label><br>

                <label>
                    <input type="radio" class="minimal-red" name="to_young_inspector" value="intel & pidsus" {{ $data->to_young_inspector ? ($data->to_young_inspector == 'intel & pidsus' ? 'checked' : '') : '' }}>
                    IRMUD INTEL & PIDSUS
                </label><br>
            </div>
        </div>
    </div>
</form>
