<div class="panel-group" id="pengaduan" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingJa">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#pengaduan" href="#collapseJa" aria-expanded="true" aria-controls="collapseJa">
          <span class="pull-right">WAKIL JAKSA AGUNG <i class="fa fa-angle-double-left"></i></span> <i class="fa fa-angle-double-right"></i> JAKSA AGUNG
        </a>
      </h4>
    </div>
    <div id="collapseJa" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingJa">
      <div class="panel-body">

        @include('lapdu::lapdu.partials._disposisi_ja')
        <div class="box-footer">
         <a href='sp_was1_create' for="spwas1" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="SURAT PERINTAH INSPEKSI KASUS" style="margin-right: 5px;"><i class="fa fa-plus"></i> SP.WAS-2</a>

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingJamwas">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#pengaduan" href="#collapseJamwas" aria-expanded="false" aria-controls="collapseJamwas">
          <span class="pull-right">SESJAMWAS <i class="fa fa-angle-double-left"></i></span><i class="fa fa-angle-double-right"></i> J A M W A S
        </a>
      </h4>
    </div>
    <div id="collapseJamwas" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingJamwas">
      <div class="panel-body">

        @include('lapdu::lapdu.partials._disposisi_jamwas')
         <div class="box-footer">
         <a href='sp_was1_create' for="spwas1" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="SURAT PERINTAH INSPEKSI KASUS" style="margin-right: 5px;"><i class="fa fa-plus"></i> SP.WAS-2</a>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingInspektur">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#pengaduan" href="#collapseInspektur" aria-expanded="false" aria-controls="collapseInspektur">
          <span class="label label-default pull-right">Detil</span> <i class="fa fa-angle-double-right"></i> I N S P E K T U R
        </a>
      </h4>
    </div>
    <div id="collapseInspektur" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingInspektur">
      <div class="panel-body">

        @include('lapdu::lapdu.partials._disposisi_inspektur')

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingIrmud">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#pengaduan" href="#collapseIrmud" aria-expanded="false" aria-controls="collapseIrmud">
          <span class="label label-default pull-right">Detil</span> <i class="fa fa-angle-double-right"></i> I R M U D
        </a>
      </h4>
    </div>
    <div id="collapseIrmud" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingIrmud">
      <div class="panel-body">

        @include('lapdu::lapdu.partials._disposisi_irmud')

      </div>
    </div>
  </div>
    <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingRiksa">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#pengaduan" href="#collapseRiksa" aria-expanded="false" aria-controls="collapseRiksa">
          <span class="label label-default pull-right">Detil</span> <i class="fa fa-angle-double-right"></i> R I K S A
        </a>
      </h4>
    </div>
    <div id="collapseRiksa" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingRiksa">
      <div class="panel-body">

        @include('lapdu::inspeksi.partials._disposisi_riksa')
        <!-- Single button -->
        <div class="btn-group dropup pull-right">
          <button type="button" class="btn btn-info btn-flat dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tindak Lanjut <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <li><a href="#">WAS-7</a></li>
            <li><a href="#">WAS-8</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">WAS-14b</a></li>
            <li><a href="#">WAS-14d</a></li>
            <li><a href="#">L.WAS-2</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">WAS-24a</a></li>
            <li><a href="#">WAS-24b</a></li>
          </ul>
        </div>
  </ul>
</div>

      </div>
    </div>
  </div>
</div>