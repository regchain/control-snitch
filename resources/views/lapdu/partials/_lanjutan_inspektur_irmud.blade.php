<form action="{{ route('lapdu.operator.laporan.update', ['id' => $data->_id]) }}" method="post">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PUT">

    <!-- INFORMASI / INSTRUKSI -->
    <div class="col-sm-6 col-xs-12">
        <label>PENDAPAT / SARAN</label>
        <div class="radio">
            <input type="radio" class="flat-red" name="{{ $type }}[suggestion_young_inspector]" value="Tidak perlu ditindak lanjuti" {{ array_key_exists('suggestion_young_inspector', $data->$type) ? ($data->$type['suggestion_young_inspector'] == "Tidak perlu ditindak lanjuti" ? 'checked' : '') : '' }}>
            <label>
                Tidak perlu ditindak lanjuti
            </label>
        </div>

        <div class="radio">
            <input type="radio" class="flat-red" name="{{ $type }}[suggestion_young_inspector]" value="Tindak lanjuti dengan Klarifikasi oleh atasan langsung atau tim pemeriksa" {{ array_key_exists('suggestion_young_inspector', $data->$type) ? ($data->$type['suggestion_young_inspector'] == "Tindak lanjuti dengan Klarifikasi oleh atasan langsung atau tim pemeriksa" ? 'checked' : '') : '' }}>
            <label>
                Tindak lanjuti dengan Klarifikasi oleh atasan langsung atau tim pemeriksa
            </label>
        </div>

        <div class="radio">
            <input type="radio" class="flat-red" name="{{ $type }}[suggestion_young_inspector]" value="Meneruskan laporan pengaduan tersebut kepada bidang teknis terkait" {{ array_key_exists('suggestion_young_inspector', $data->$type) ? ($data->$type['suggestion_young_inspector'] == "Meneruskan laporan pengaduan tersebut kepada bidang teknis terkait" ? 'checked' : '') : '' }}>
            <label>
                Meneruskan laporan pengaduan tersebut kepada bidang teknis terkait
            </label>
        </div>

        @if ($data->$type && array_key_exists('opinion_young_inspector', $data->$type))
        <p>
            <strong class="text-blue">{{ strtoupper($data->$type['to_young_inspector']) }}: </strong>
            {{ $data->$type['opinion_young_inspector'] }}
        </p>
        @else
        <div class="input-group">
            <input type="text" name="{{ $type }}[opinion_young_inspector]" placeholder="Pendapat / Saran ..." class="form-control">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-default btn-flat">Lanjut</button>
            </span>
        </div>
        @endif
    </div>

    <!-- /.box-header -->
    <div class="col-sm-6 col-xs-12">
    </div>

    <div class="col-sm-6">
        <label>INFORMASI / INSTRUKSI :</label>
        @if ($data->$type && array_key_exists('opinion_young_inspector', $data->$type))
        <p>
            <strong class="text-blue">{{ strtoupper($data->$type['to_young_inspector']) }}: </strong>
            {{ $data->$type['instruction_young_inspector'] }}
        </p>
        @else
        <div class="input-group" style="padding-bottom: 5px">
            <input type="text" name="{{ $type }}[instruction_young_inspector]" placeholder="Instruksi ..." class="form-control">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-danger btn-flat">Perbaiki Telaahan</button>
            </span>
        </div>
        <a href="{{ route('lapdu.operator.laporan.study', ['_id' => $data->_id]) }}" class="btn btn-info btn-block">Edit Telaahan</a>
        @endif
    </div>
</form>
