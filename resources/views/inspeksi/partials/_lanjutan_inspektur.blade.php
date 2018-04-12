@if ($data->$type && (array_key_exists('interviews', $data->$type)))
<div class="box-header">
    <h3 class="box-title">LANJUTAN INSPEKTUR</h3>
</div>

<div class="panel-group" id="lanjutan" role="tablist" aria-multiselectable="true">
    @if (!$punishments->isEmpty() && $punishments[0]->opinion_jamwas)
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingJa">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#lanjutan" href="#collapseLanJa" aria-expanded="false" aria-controls="collapseLanJa">
                    <span class="pull-right">WAKIL JAKSA AGUNG <i class="fa fa-angle-double-left"></i></span> <i class="fa fa-angle-double-right"></i> JAKSA AGUNG
                </a>
            </h4>
        </div>

        <div id="collapseLanJa" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingLanJa">
            <div class="panel-body">
                @include('lapdu::inspeksi.partials._lanjutan_inspektur_ja')
            </div>
        </div>
    </div>
    @endif

    @if (!$punishments->isEmpty() && $punishments[0]->opinion_inspector)
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingJamwas">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#lanjutan" href="#collapseLanJamwas" aria-expanded="false" aria-controls="collapseLanJamwas">
                    <span class="pull-right">SESJAMWAS <i class="fa fa-angle-double-left"></i></span><i class="fa fa-angle-double-right"></i> J A M W A S
                </a>
            </h4>
        </div>

        <div id="collapseLanJamwas" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingLanJamwas">
            <div class="panel-body">
                @include('lapdu::inspeksi.partials._lanjutan_inspektur_jamwas')
            </div>
        </div>
    </div>
    @endif

    @if (!$punishments->isEmpty() && $punishments[0]->opinion_young_inspector)
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingInspektur">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#lanjutan" href="#collapseLanInspektur" aria-expanded="false" aria-controls="collapseLanInspektur">
                    <span class="label label-default pull-right">Detil</span> <i class="fa fa-angle-double-right"></i> I N S P E K T U R
                </a>
            </h4>
        </div>

        <div id="collapseLanInspektur" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingLanInspektur">
            <div class="panel-body">
                @include('lapdu::inspeksi.partials._lanjutan_inspektur_inspektur')
            </div>
        </div>
    </div>
    @endif

    @if (!$punishments->isEmpty())
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingIrmud">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#lanjutan" href="#collapseLanIrmud" aria-expanded="false" aria-controls="collapseLanIrmud">
                    <span class="label label-default pull-right">Detil</span> <i class="fa fa-angle-double-right"></i> I R M U D
                </a>
            </h4>
        </div>

        <div id="collapseLanIrmud" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingLanIrmud">
            <div class="panel-body">
                @include('lapdu::inspeksi.partials._lanjutan_inspektur_irmud')
            </div>
        </div>
    </div>
    @endif

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingRiksa">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#lanjutan" href="#collapseLanRiksa" aria-expanded="false" aria-controls="collapseLanRiksa">
                    <span class="label label-default pull-right">Detil</span> <i class="fa fa-angle-double-right"></i> R I K S A
                </a>
            </h4>
        </div>

        <div id="collapseLanRiksa" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingLanRiksa">
            <div class="panel-body">
                @include('lapdu::inspeksi.partials._lanjutan_inspektur_riksa')

                <div class="box-footer">
                    <br>
                    <a href="{{ route('lapdu.operator.inspeksi.interview', ['id' => $data->_id]) }}" class="btn btn-flat btn-info" data-toggle="tooltip" data-placement="top" title="FORM KARTU WAWANCARA" style="margin-right: 5px;"><i class="fa fa-plus"></i> Form Wawancara</a>
                    <a href="{{ route('lapdu.operator.inspeksi.report', ['id' => $data->_id]) }}" class="btn btn-flat btn-info" data-toggle="tooltip" data-placement="top" title="Rencana Penjatuhan Hukuman Disiplin" style="margin-right: 5px;"><i class="fa fa-plus"></i> L.WAS-2</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif