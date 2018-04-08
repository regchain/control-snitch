<div class="row">
    <div class="col-sm-12">
        <label>KESIMPULAN</label>
        {!! $data->$type['conclusion'] !!}
    </div>

    <div class="col-sm-6 col-xs-12">
        <label>PENDAPAT</label>
        <div class="radio">
            <input type="radio" class="flat-red" {{ $data->$type['opinion'] == 'Belum ditemukan bukti awal adanya dugaan pelanggaran disiplin' ? 'checked' : 'disabled' }}>
            <label>
                Belum ditemukan bukti awal adanya dugaan pelanggaran disiplin
            </label>
        </div>

        <div class="radio">
            <input type="radio" class="flat-red" {{ $data->$type['opinion'] == 'Ditemukan bukti awal adanya dugaan pelanggaran disiplin ringan atau sedang atau berat' ? 'checked' : 'disabled' }}>
            <label>
                Ditemukan bukti awal adanya dugaan pelanggaran disiplin ringan atau sedang atau berat
            </label>
        </div>

        <div class="radio">
            <input type="radio" class="flat-red" {{ $data->$type['opinion'] == 'Substansi permasalahannnya merupakan kewenangan bidang teknis' ? 'checked' : 'disabled' }}>
            <label>
                Substansi permasalahannnya merupakan kewenangan bidang teknis
            </label>
        </div>
    </div>

    <div class="col-sm-6 col-xs-12">
        <label>SARAN</label>

        <div class="radio">
            <input type="radio" class="flat-red" {{ $data->$type['suggestion'] == 'Tidak perlu ditindak lanjuti' ? 'checked' : 'disabled' }}>
            <label>
                Tidak perlu ditindak lanjuti
            </label>
        </div>

        <div class="radio">
            <input type="radio" class="flat-red" {{ $data->$type['suggestion'] == 'Perlu ditindak lanjuti dengan melakukan Klarifikasi atau Inspeksi Kasus oleh atasan langsung atau tim pemeriksa' ? 'checked' : 'disabled' }}>
            <label>
                Perlu ditindak lanjuti dengan melakukan Klarifikasi atau Inspeksi Kasus oleh atasan langsung atau tim pemeriksa
            </label>
        </div>

        <div class="radio">
            <input type="radio" class="flat-red" {{ $data->$type['suggestion'] == 'Perlu ditindaklanjuti dengan meneruskan laporan pengaduan tersebut kepada bidang teknis terkait' ? 'checked' : 'disabled' }}>
            <label>
                Perlu ditindaklanjuti dengan meneruskan laporan pengaduan tersebut kepada bidang teknis terkait
            </label>
        </div>
    </div>
</div>
