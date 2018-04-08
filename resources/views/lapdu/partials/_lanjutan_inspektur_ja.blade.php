<form action="{{ route('lapdu.operator.laporan.update', ['id' => $data->_id]) }}" method="post">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PUT">

    <div class="col-xs-6">
        @if ($data->$type && array_key_exists('opinion_ja', $data->$type))
        <p>
            <strong class="text-blue">J.A. : </strong>
            {{ $data->$type['opinion_ja'] }}
        </p>
        @else
        <div class="input-group">
            <input type="text" name="{{ $type }}[opinion_ja]" placeholder="Disposisi ..." class="form-control">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-default btn-flat">Kirim</button>
            </span>
        </div>
        @endif
    </div>

    <div class="col-xs-6">
        @if ($data->$type && array_key_exists('opinion_waja', $data->$type))
        <p>
            <strong class="text-blue">Wa J.A. : </strong>
            {{ $data->$type['opinion_waja'] }}
        </p>
        @else
        <div class="input-group">
            <input type="text" name="{{ $type }}[opinion_waja]" placeholder="Disposisi ..." class="form-control">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-default btn-flat">Kirim</button>
            </span>
        </div>
        @endif
    </div>

    <div class="col-xs-12">
        <div class="box-header">
            <h1 class="box-title">Informasi / Instruksi : </h1>
        </div>

        <div class="col-sm-3 col-xs-6">
            &nbsp;
        </div>

        <div class="col-sm-3 col-xs-6">
            &nbsp;
        </div>

        <div class="col-sm-6 col-xs-8">
            <div class="form-group">
                <label>
                    <input type="checkbox" class="flat-red">
                    &nbsp;
                </label>

                <select class="form-control select2" style="width: 90%;">
                    <option selected disabled>Dialihkan ke KEJATI : </option>
                    @foreach ($institutions as $i)
                    <option value="{{ $i->name }}">{{ $i->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>
                    <input type="checkbox" class="flat-red">
                    &nbsp;
                </label>

                <select class="form-control select2" style="width: 90%;">
                    <option selected disabled>Dialihkan ke Bidang Lain : </option>
                    <option value="J.A.M Bidang Pembinaan">J.A.M Bidang Pembinaan</option>
                    <option value="J.A.M Bidang Intelijen">J.A.M Bidang Intelijen</option>
                    <option value="J.A.M Bidang Pidum">J.A.M Bidang Pidum</option>
                    <option value="J.A.M Bidang Pidsus">J.A.M Bidang Pidsus</option>
                    <option value="J.A.M Bidang Datun">J.A.M Bidang Datun</option>
                </select>
            </div>

            <div class="form-group">
                <label>
                    <input type="checkbox" class="flat-red">
                    &nbsp;
                </label>

                <select class="form-control select2" style="width: 90%;">
                    <option selected disabled>Dihentikan karena :</option>
                    <option value="Belum ada Bukti Awal">Belum ada Bukti Awal</option>
                    <option value="Meninggal Dunia">Meninggal Dunia</option>
                    <option value="Pensiun">Pensiun</option>
                    <option value="Daluwarsa">Daluwarsa</option>
                    <option value="Sudah Dihukum">Sudah Dihukum</option>
                </select>
            </div>
        </div>
    </div>
</form>