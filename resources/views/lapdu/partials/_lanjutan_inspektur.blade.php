@if ($data->$type && (array_key_exists('analysis', $data->$type) && (array_key_exists('instruction_young_inspector', $data->$type) && !$data->$type['instruction_young_inspector'])))
<div class="box-header">
    <h3 class="box-title">LANJUTAN INSPEKTUR</h3>
</div>

<div class="panel-group" id="lanjutan" role="tablist" aria-multiselectable="true">
    @if ($data->$type && array_key_exists('opinion_jamwas', $data->$type))
    <!-- JA -->
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#lanjutan" href="#lanjutanOne" aria-expanded="false" aria-controls="collapseOne">
                    <span class="pull-right">WAKIL JAKSA AGUNG <i class="fa fa-angle-double-left"></i></span> <i class="fa fa-angle-double-right"></i> JAKSA AGUNG
                </a>
            </h4>
        </div>

        <div id="lanjutanOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                @include('control-snitch::lapdu.partials._lanjutan_inspektur_ja')

                {{-- <div class="box-footer">
                    <a href="sp_was1_create" for="spwas1" class="btn btn-flat btn-info" data-toggle="tooltip" data-placement="top" title="SURAT PERINTAH KLARIFIKASI" style="margin-right: 5px;"><i class="fa fa-plus"></i> SP.WAS-1</a>
                </div> --}}
            </div>
        </div>
    </div>
    @endif

    @if ($data->$type && array_key_exists('opinion_inspector', $data->$type))
    <!-- JAMWAS -->
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#lanjutan" href="#lanjutanThree" aria-expanded="false" aria-controls="collapseThree">
                    <span class="pull-right">SESJAMWAS <i class="fa fa-angle-double-left"></i></span><i class="fa fa-angle-double-right"></i> J A M W A S
                </a>
            </h4>
        </div>

        <div id="lanjutanThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
                @include('control-snitch::lapdu.partials._lanjutan_inspektur_jamwas')
            </div>
        </div>
    </div>
    @endif

    @if ($data->$type && array_key_exists('opinion_young_inspector', $data->$type))
    <!-- INSPEKTUR -->
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFive">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#lanjutan" href="#lanjutanFive" aria-expanded="false" aria-controls="collapseFive">
                    <span class="label label-default pull-right">Detil</span> <i class="fa fa-angle-double-right"></i> I N S P E K T U R
                </a>
            </h4>
        </div>

        <div id="lanjutanFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
            <div class="panel-body">
                @include('control-snitch::lapdu.partials._lanjutan_inspektur_inspektur')
            </div>
        </div>
    </div>
    @endif

    <!-- IRMUD -->
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingSix">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#lanjutan" href="#lanjutanSix" aria-expanded="false" aria-controls="collapseSix">
                    <span class="label label-default pull-right">Detil</span> <i class="fa fa-angle-double-right"></i> I R M U D
                </a>
            </h4>
        </div>

        <div id="lanjutanSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
            <div class="panel-body">
                @include('control-snitch::lapdu.partials._lanjutan_inspektur_irmud')
            </div>
        </div>
    </div>

    <!-- RIKSA -->
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingSeven">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#lanjutan" href="#lanjutanSeven" aria-expanded="false" aria-controls="collapseSeven">
                    <span class="label label-default pull-right">Detil</span> <i class="fa fa-angle-double-right"></i> R I K S A
                </a>
            </h4>
        </div>

        <div id="lanjutanSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
            <div class="panel-body">
                @include('control-snitch::lapdu.partials._lanjutan_inspektur_riksa')
            </div>
        </div>
    </div>
</div>
@endif