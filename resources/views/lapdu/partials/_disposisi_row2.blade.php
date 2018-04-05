<div class="panel-group" id="pengaduan" role="tablist" aria-multiselectable="true">
    {{-- <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#pengaduan" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <span class="pull-right">WAKIL JAKSA AGUNG <i class="fa fa-angle-double-left"></i></span> <i class="fa fa-angle-double-right"></i> JAKSA AGUNG
                </a>
            </h4>
        </div>

        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                @include('lapdu::lapdu.partials._disposisi_ja')

                @if ($data->analysis)
                <div class="box-footer">
                    <a href="{{ route('lapdu.operator.laporan.warrant', ['id' => $data->_id]) }}" for="spwas1" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="SURAT PERINTAH KLARIFIKASI" style="margin-right: 5px;"><i class="fa fa-plus"></i> SP.WAS-1</a>
                </div>
                @endif
            </div>
        </div>
    </div> --}}

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#pengaduan" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <span class="pull-right">SESJAMWAS <i class="fa fa-angle-double-left"></i></span><i class="fa fa-angle-double-right"></i> J A M W A S
                </a>
            </h4>
        </div>

        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
                @include('lapdu::lapdu.partials._disposisi_jamwas')

                {{-- @if ($data->$type['analysis'])
                <div class="box-footer">
                    <a href="{{ route('lapdu.operator.laporan.warrant', ['id' => $data->_id]) }}" for="spwas1" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="SURAT PERINTAH KLARIFIKASI" style="margin-right: 5px;"><i class="fa fa-plus"></i> SP.WAS-1</a>
                </div>
                @endif --}}
            </div>
        </div>
    </div>

    @if ($data->$type && (array_key_exists('disposition_jamwas', $data->$type) || array_key_exists('disposition_sesjamwas', $data->$type)))
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFive">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#pengaduan" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <span class="label label-default pull-right">Detil</span> <i class="fa fa-angle-double-right"></i> I N S P E K T U R
                </a>
            </h4>
        </div>

        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
            <div class="panel-body">
                @include('lapdu::lapdu.partials._disposisi_inspektur')
            </div>
        </div>
    </div>
    @endif

    @if ($data->$type && array_key_exists('disposition_inspector', $data->$type))
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingSix">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#pengaduan" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    <span class="label label-default pull-right">Detil</span> <i class="fa fa-angle-double-right"></i> I R M U D
                </a>
            </h4>
        </div>

        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
            <div class="panel-body">
                @include('lapdu::lapdu.partials._disposisi_irmud')
            </div>
        </div>
    </div>
    @endif

    @if ($data->$type && array_key_exists('disposition_young_inspector', $data->$type))
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingSeven">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#pengaduan" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    <span class="label label-default pull-right">Detil</span> <i class="fa fa-angle-double-right"></i> R I K S A
                </a>
            </h4>
        </div>

        <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
            <div class="panel-body">
                @include('lapdu::lapdu.partials._disposisi_riksa')

                <div class="box-footer">
                    <a href="{{ route('lapdu.operator.laporan.study', ['id' => $data->_id]) }}" class="btn btn-info pull-right" data-toggle="tooltip" data-placement="top" title="TELAAHAN" style="margin-right: 5px;"><i class="fa fa-plus"></i> WAS-1</a>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
