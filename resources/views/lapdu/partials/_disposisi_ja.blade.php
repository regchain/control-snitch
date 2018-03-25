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

    <div class="col-xs-12">
        <div class="box-header">
            <h1 class="box-title">Informasi / Instruksi : </h1>
        </div>

        <div class="col-sm-3 col-xs-6">
            <label>
                <input type="checkbox" class="minimal-red" name="information/instruction[]" value="telaahan" {{ $data['information/instruction'] ? (in_array('telaahan', $data['information/instruction']) ? 'checked' : '') : '' }}>
                Telaahan
            </label><br>

            <label>
                <input type="checkbox" class="minimal-red" name="information/instruction[]" value="monitor & evaluasi" {{ $data['information/instruction'] ? (in_array('monitor & evaluasi', $data['information/instruction']) ? 'checked' : '') : '' }}>
                Monitor & Evaluasi
            </label><br>

            <label>
                <input type="checkbox" class="minimal-red" name="information/instruction[]" value="setuju, saran" {{ $data['information/instruction'] ? (in_array('setuju, saran', $data['information/instruction']) ? 'checked' : '') : '' }}>
                Setuju, Saran
            </label><br>

            <label>
                <input type="checkbox" class="minimal-red" name="information/instruction[]" value="teliti/cermati" {{ $data['information/instruction'] ? (in_array('teliti/cermati', $data['information/instruction']) ? 'checked' : '') : '' }}>
                Teliti / Cermati
            </label><br>
        </div>

        <div class="col-sm-3 col-xs-6">
            <label>
                <input type="checkbox" class="minimal-red" name="information/instruction[]" value="pendapat" {{ $data['information/instruction'] ? (in_array('pendapat', $data['information/instruction']) ? 'checked' : '') : '' }}>
                Pendapat
            </label><br>

            <label>
                <input type="checkbox" class="minimal-red" name="information/instruction[]" value="usp/udk" {{ $data['information/instruction'] ? (in_array('usp/udk', $data['information/instruction']) ? 'checked' : '') : '' }}>
                USP /UDK
            </label><br>

            <label>
                <input type="checkbox" class="minimal-red" name="information/instruction[]" value="tindak lanjut" {{ $data['information/instruction'] ? (in_array('tindak lanjut', $data['information/instruction']) ? 'checked' : '') : '' }}>
                Tindak lanjut
            </label><br>

            <label>
                <input type="checkbox" class="minimal-red" name="information/instruction[]" value="temui jamwas" {{ $data['information/instruction'] ? (in_array('temui jamwas', $data['information/instruction']) ? 'checked' : '') : '' }}>
                Temui JAM WAS
            </label><br>
        </div>

        <div class="col-sm-6 col-xs-8">
            <div class="form-group">
                <label>
                    <input type="checkbox" class="minimal-red" name="dialihkan" id="dialihkan">
                    &nbsp;
                </label>

                <select class="form-control select2" style="width: 90%;" name="dialihkan_to" id="dialihkan_to">
                    <option disbled selected="selected">Dialihkan ke KEJATI : </option>
                    @foreach ($institutions as $i)
                    <option value="{{ $i->_id }}">{{ $i->name }}</option>
                    @endforeach
                </select>
            </div>

            @if ($data->analysis)
            <div class="form-group">
                <label>
                    <input type="checkbox" class="minimal-red" name="dialihkan_bidang" id="dialihkan_bidang">
                    &nbsp;
                </label>

                <select class="form-control select2" style="width: 90%;" name="dialihkan_bidang_to" id="dialihkan_bidang_to">
                    <option disabled selected="selected">Dialihkan ke Bidang Lain : </option>
                </select>
            </div>

            <div class="form-group">
                <label>
                    <input type="checkbox" class="minimal-red" name="stop" id="stop">
                    &nbsp;
                </label>

                <select class="form-control select2" style="width: 90%;" name="stop_reason" id="stop_reason">
                    <option disabled selected="selected">Dihentikan karena :</option>
                    <option value="belum ada bukti awal">Belum ada Bukti Awal</option>
                    <option value="meninggal dunia">Meninggal Dunia</option>
                    <option value="pensiun">Pensiun</option>
                    <option value="daluwarsa">Daluwarsa</option>
                    <option value="sudah dihukum">Sudah Dihukum</option>
                </select>
            </div>
            @endif
        </div>
    </div>
</form>
