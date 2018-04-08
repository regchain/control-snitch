<form action="{{ route('lapdu.operator.laporan.update', ['id' => $data->_id]) }}" method="post">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PUT">

    <div class="col-xs-6">
        <div class="form-group">
            <input type="radio" name="{{ $type }}[forwarded]" class="flat-red" value="true">

            <label>
                &nbsp;
            </label>

            <select class="form-control select2" style="width: 90%" name="{{ $type }}[forwarded_to]">
                <option selected disabled>Diteruskan ke Kejaksaan Tinggi : </option>
                @foreach ($data->reporteds as $reported)
                <option value="{{ $reported['institute'] }}">{{ $reported['institute'] }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <input type="radio" class="flat-red" name="{{ $type }}[diverted]" value="true">

            <label>
                &nbsp;
            </label>

            <select class="form-control select2" style="width: 90%;" name="{{ $type }}[diverted_to]">
                <option selected disabled>Dialihkan ke Bidang Lain : </option>
                <option value="J.A.M Bidang Pembinaan">J.A.M Bidang Pembinaan</option>
                <option value="J.A.M Bidang Intelijen">J.A.M Bidang Intelijen</option>
                <option value="J.A.M Bidang Pidum">J.A.M Bidang Pidum</option>
                <option value="J.A.M Bidang Pidsus">J.A.M Bidang Pidsus</option>
                <option value="J.A.M Bidang Datun">J.A.M Bidang Datun</option>
            </select>
        </div>

        <div class="form-group">
            <input type="radio" class="flat-red" name="{{ $type }}[stopped]" value="true">

            <label>
                &nbsp;
            </label>

            <select class="form-control select2" style="width: 90%;" name="{{ $type }}[stopped_reason]">
                    <option selected disabled>Dihentikan karena :</option>
                    <option value="Belum ada Bukti Awal">Belum ada Bukti Awal</option>
                    <option value="Meninggal Dunia">Meninggal Dunia</option>
                    <option value="Pensiun">Pensiun</option>
                    <option value="Daluwarsa">Daluwarsa</option>
                    <option value="Sudah Dihukum">Sudah Dihukum</option>
                </optgroup>
            </select>
        </div>

        @if ($data->$type && array_key_exists('opinion_jamwas', $data->$type))
        <p>
            <strong class="text-blue">JAMWAS : </strong>
            {{ $data->$type['opinion_jamwas'] }}
        </p>
        @else
        <div class="input-group">
            <input type="text" name="{{ $type }}[opinion_jamwas]" placeholder="Disposisi ..." class="form-control">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-default btn-flat">Kirim</button>
            </span>
        </div>
        @endif
    </div>

    {{-- <div class="col-xs-6">
        @if ($data->$type && array_key_exists('opinion_sesjamwas', $data->$type))
        <p>
            <strong class="text-blue">SESJAMWAS : </strong>
            {{ $data->$type['opinion_sesjamwas'] }}
        </p>
        @else
        <div class="input-group">
            <input type="text" name="{{ $type }}[opinion_sesjamwas]" placeholder="Disposisi ..." class="form-control">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-default btn-flat">Kirim</button>
            </span>
        </div>
        @endif
    </div> --}}

    @if ($data->$type && array_key_exists('opinion_ja', $data->$type))
    <div class="box-footer">
        <a href="{{ route('lapdu.operator.klarifikasi.warrant', ['id' => $data->_id]) }}" class="btn btn-info btn-flat pull-right" data-toggle="tooltip" data-placement="top" title="SURAT PERINTAH INSPEKSI KASUS" style="margin-right: 5px;"><i class="fa fa-plus"></i> SP.WAS-2</a>
    </div>
    @endif
</form>
