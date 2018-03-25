<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingMasalah">
            <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseMasalah" aria-expanded="false" aria-controls="collapseMasalah">
                <span class="label label-default pull-right">Detil</span> I. PERMASALAHAN
            </a>
            </h4>
        </div>

        <div id="collapseMasalah" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingMasalah">
            <div class="panel-body">
                <div class="box-body">
                    @include('lapdu::lapdu.partials.kasus_view')
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingData">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseData" aria-expanded="false" aria-controls="collapseData">
                    <span class="label label-default pull-right">Detil</span> II. DATA
                </a>
            </h4>
        </div>

        <div id="collapseData" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingData">
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

    @if ($data->analysis)
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTelaahan">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTelaahan" aria-expanded="FALSE" aria-controls="collapseTelaahan">
                    <span class="label label-default pull-right">Detil</span> III. TELAAHAN
                </a>
            </h4>
        </div>

        <div id="collapseTelaahan" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTelaahan">
            <div class="panel-body">
                <div class="row">
                    @include('lapdu::surat.partials._was1_view')
                </div>
            </div>
        </div>
    </div>
    @endif

    @if ($data->memo)
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingNotadinas">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNotadinas" aria-expanded="FALSE" aria-controls="collapseNotadinas">
                    <span class="label label-default pull-right">Detil</span> IV. NOTA DINAS
                </a>
            </h4>
        </div>

        <div id="collapseNotadinas" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNotadinas">
            <div class="panel-body">
                <div class="row">
                    @include('lapdu::surat.partials._was2_view')
                </div>
            </div>
        </div>
    </div>
    @endif

    @if ($data->clarification)
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingKlarifikasi">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseKlarifikasi" aria-expanded="FALSE" aria-controls="collapseKlarifikasi">
                    <span class="label label-default pull-right">Detil</span> V. PERMINTAAN KLARIFIKASI
                </a>
            </h4>
        </div>

        <div id="collapseKlarifikasi" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingKlarifikasi">
            <div class="panel-body">
                <div class="row">
                    @include('lapdu::lapdu.partials._was3_create')
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
