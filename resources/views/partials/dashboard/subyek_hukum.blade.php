<div class="col-md-12">
    <div class="box-header">
        {{-- <a href="subyek_putusan" class="btn btn-default pull-right"><i class="fa fa-user"> </i>&nbsp;Tahap Putusan</a> --}}
        <h3 class="box-title"><strong>TERLAPOR</strong></h3>
    </div>

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <p></p>
                <h3>{{ $data['terlapor'] }}<sup style="font-size: 20px">orang</sup></h3>

                <strong>TERLAPOR</strong>
            </div>

            <div class="icon">
                <i class="fa fa-user"></i>
            </div>

            <a href="{{ route('lapdu.operator.subject', ['type' => 'terlapor']) }}" class="small-box-footer">Lihat Daftar <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        {{-- <div class="small-box bg-aqua">
        <div class="inner">
            <p></p>
            <h3>13<sup style="font-size: 20px"> orang</sup></h3>

            <strong>KLARIFIKASI</strong>
        </div>
        <div class="icon">
            <i class="fa fa-user"></i>
        </div>
        <a href="subyek_klarifikasi" class="small-box-footer">Lihat Daftar <i class="fa fa-arrow-circle-right"></i></a>
        </div> --}}
    </div>
    <!-- ./col -->

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        {{-- <div class="small-box bg-yellow">
        <div class="inner">
            <p></p>
            <h3>6<sup style="font-size: 20px"> orang</sup></h3>

            <strong>INSPEKSI KASUS</strong>
        </div>
        <div class="icon">
            <i class="fa fa-user"></i>
        </div>
        <a href="subyek_inspeksi" class="small-box-footer">Lihat Daftar <i class="fa fa-arrow-circle-right"></i></a>
        </div> --}}
    </div>
    <!-- ./col -->

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        {{-- <div class="small-box bg-red">
        <div class="inner">
            <p></p>
            <h3>8<sup style="font-size: 20px"> orang</sup></h3>

            <strong>USULAN HUKUM</strong>
        </div>
        <div class="icon">
            <i class="fa fa-user"></i>
        </div>
        <a href="subyek_usulan" class="small-box-footer">Lihat Daftar <i class="fa fa-arrow-circle-right"></i></a>
        </div> --}}
    </div>
    <!-- ./col -->
</div>