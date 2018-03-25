<div class="panel-group" id="klarivikasi_view" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingSPKlarifikasi">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#klarivikasi_view" href="#collapseSPKlarifikasi" aria-expanded="false" aria-controls="collapseSPKlarifikasi">
                    <span class="label label-default pull-right">Detil</span> I. SURAT PERINTAH KLARIFIKASI
                </a>
            </h4>
        </div>

        <div id="collapseSPKlarifikasi" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSPKlarifikasi">
            <div class="panel-body">
                <div class="box-body">
                    @include('lapdu::surat.partials._sp_was1_view')
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingPermasalahan">
            <h4 class="panel-title">
                <a  class="collapsed" role="button" data-toggle="collapse" data-parent="#klarivikasi_view" href="#collapsePermasalahan" aria-expanded="false" aria-controls="collapsePermasalahan">
                    <span class="label label-default pull-right">Detil</span> II. PERMASALAHAN
                </a>
            </h4>
        </div>

        <div id="collapsePermasalahan" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingPermasalahan">
            <div class="panel-body">
                @include('lapdu::lapdu.partials.kasus_view')

                <div class="box box-success">
                    @include('lapdu::surat.partials._was1_view')
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#klarivikasi_view" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <span class="label label-default pull-right">Detil</span> III. DATA
                </a>
            </h4>
        </div>

        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <div class="box-body">
                    @include('lapdu::lapdu.partials.pelapor_view')
                </div>

                <div class="box-body">
                    @include('lapdu::lapdu.partials.terlapor_view')
                </div>

                <div class="box-body">
                    @include('lapdu::lapdu.partials.datapenunjang_view')
                </div>
            </div>
        </div>
    </div>

    @if ($data->interviews)
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingSix">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#klarivikasi_view" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                <span class="label label-default pull-right">Detil</span>IV. HASIL KLARIFIKASI
                </a>
            </h4>
        </div>

        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
            <div class="panel-body">
                <div class="box-body">
                    {{-- @include('elapdu.surat.partials._was4_view') --}}
                    @include('lapdu::surat.partials._ba_was2_list')
                </div>
            </div>
        </div>
    </div>
    @endif

    {{-- <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFour">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#klarivikasi_view" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            <span class="label label-default pull-right">Detil</span> V. NOTA DINAS
            </a>
        </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
        <div class="panel-body">

            @include('elapdu.surat.partials._was5b_view')

        </div>
        </div>
    </div> --}}

    {{-- <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFive">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#klarivikasi_view" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            <span class="label label-default pull-right">Detil</span> VI. PERMINTAAN INSPEKSI KASUS
            </a>
        </h4>
        </div>
        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
        <div class="panel-body">

            <div class="box-body">
            @include('elapdu.surat.partials._was5a_view')
            </div>

        </div>
        </div>
    </div> --}}
</div>