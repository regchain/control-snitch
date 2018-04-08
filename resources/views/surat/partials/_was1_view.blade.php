<div class="box-body">
    <div class="box-header">
        <h2 class="box-title">ANALISA</h2>
    </div>

    <div class="box-body">
        {!! $data->$type['analysis'] !!}
    </div>

    <div class="box-header">
        <h2 class="box-title">KESIMPULAN</h2>
    </div>

    <div class="box-body">
        {!! $data->$type['conclusion'] !!}
    </div>

    <div class="box-header">
        <h2 class="box-title">PENDAPAT</h2>
    </div>

    <div class="box-body">
        <ul style="list-style: none;">
            <li>
                <div class="radio">
                <label>
                    <input type="radio" class="flat-red" name="pendapat" {{ $data->$type['opinion'] == "Belum ditemukan bukti awal adanya dugaan pelanggaran disiplin" ? 'checked' : 'disabled' }}>
                    Belum ditemukan bukti awal adanya dugaan pelanggaran disiplin
                </label>
                </div>
                <div class="radio">
                <label>
                    <input type="radio" class="flat-red" name="pendapat" {{ $data->$type['opinion'] == "Ditemukan bukti awal adanya dugaan pelanggaran disiplin ringan atau sedang atau berat" ? 'checked' : 'disabled' }}>
                    Ditemukan bukti awal adanya dugaan pelanggaran disiplin ringan atau sedang atau berat
                </label>
                </div>
                <div class="radio disabled">
                <label>
                    <input type="radio" class="flat-red" name="pendapat" {{ $data->$type['opinion'] == "Substansi permasalahannnya merupakan kewenangan bidang teknis" ? 'checked' : 'disabled' }}>
                    Substansi permasalahannnya merupakan kewenangan bidang teknis
                </label>
                </div>
            </li>
        </ul>
    </div>

    <div class="box-header">
        <h2 class="box-title">SARAN</h2>
    </div>

    <div class="box-body">
        <ul style="list-style: none;">
            <li>
                <div class="radio">
                    <label>
                        <input type="radio" class="flat-red" {{ $data->$type['suggestion'] == "Tidak perlu ditindak lanjuti" ? 'checked' : 'disabled' }}>
                        Tidak perlu ditindak lanjuti
                    </label>
                </div>

                <div class="radio">
                    <label>
                        <input type="radio" class="flat-red" {{ $data->$type['suggestion'] == "Perlu ditindak lanjuti dengan melakukan Klarifikasi atau Inspeksi Kasus oleh atasan langsung atau tim pemeriksa" ? 'checked' : 'disabled' }}>
                        Perlu ditindak lanjuti dengan melakukan Klarifikasi atau Inspeksi Kasus oleh atasan langsung atau tim pemeriksa
                    </label>
                </div>

                <div class="radio disabled">
                    <label>
                        <input type="radio" class="flat-red" {{ $data->$type['suggestion'] == "Perlu ditindaklanjuti dengan meneruskan laporan pengaduan tersebut kepada bidang teknis terkait" ? 'checked' : 'disabled' }}>
                        Perlu ditindaklanjuti dengan meneruskan laporan pengaduan tersebut kepada bidang teknis terkait
                    </label>
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="col-md-5 col-md-offset-7 text-center">
    {{ \Carbon\Carbon::parse($data->$type['date_riksa']['date'])->format('d F Y') }}<br><br><br>
</div>

<div class="col-md-5 col-md-offset-7 text-center">
    <strong>
        {{ $data->$type['riksa_by']['name'] }}
        <br>
        {{ $data->$type['riksa_by']['jobtitle'].', '.$data->$type['riksa_by']['institute'] }}
    </strong>
</div>

<div class="box-footer">
    <a href="{{ route('lapdu.operator.laporan.study', ['id' => $data->_id]) }}" class="btn btn-info btn-flat pull-right">
        <i class="fa fa-save"></i> Edit
    </a>
</div>