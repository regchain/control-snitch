<div class="col-md-12">
    <div class="box-header">
        <a href="{{ route('lapdu.operator.putusan.index', ['status' => '-semua-']) }}" class="btn btn-default pull-right"><i class="fa fa-list"> </i>&nbsp;Lihat Semua</a>
        <h2 class="box-title"><strong>TERHUKUM</strong></h2>
    </div>

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <p></p>
                <h3>{{ $data['ringan'] }}<sup style="font-size: 20px">&nbsp;orang</sup></h3>

                <strong>RINGAN</strong>
                <p></p>
            </div>
            <div class="icon">
                <i class="ion-alert"></i>
            </div>
            <a href="{{ route('lapdu.operator.putusan.index', ['status' => 'ringan']) }}" class="small-box-footer">Lihat Daftar <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <p></p>
                <h3>{{ $data['sedang'] }}<sup style="font-size: 20px"> orang</sup></h3>

                <strong>SEDANG</strong>
                <p></p>
            </div>
            <div class="icon">
                <i class="ion-android-alert"></i>
            </div>
            <a href="{{ route('lapdu.operator.putusan.index', ['status' => 'sedang']) }}" class="small-box-footer">Lihat Daftar <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <p></p>
                <h3>{{ $data['berat'] }}<sup style="font-size: 20px"> orang</sup></h3>

                <strong>BERAT</strong>
                <p></p>
            </div>
            <div class="icon">
                <i class="ion-android-warning"></i>
            </div>
            <a href="{{ route('lapdu.operator.putusan.index', ['status' => 'berat']) }}" class="small-box-footer">Lihat Daftar <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <p></p>
                <h3>{{ $data['berhenti'] }}<sup style="font-size: 20px"> orang</sup></h3>

                <strong>BERHENTI SEMENTARA</strong>
                <p></p>
            </div>
            <div class="icon">
                <i class="ion-close-circled"></i>
            </div>
            <a href="{{ route('lapdu.operator.putusan.index', ['status' => 'berhenti']) }}" class="small-box-footer">Lihat Daftar <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>