<div class="panel-group" id="pengaduan" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingJa">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#pengaduan" href="#collapseJa" aria-expanded="false" aria-controls="collapseJa">
          <span class="pull-right">WAKIL JAKSA AGUNG <i class="fa fa-angle-double-left"></i></span> <i class="fa fa-angle-double-right"></i> JAKSA AGUNG 
        </a>
      </h4>
    </div>
    <div id="collapseJa" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingJa">
      <div class="panel-body">

        {{-- @include('elapdu.inspeksi.partials._disposisi_ja') --}}
        
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
        
       <div class="box-footer">
        <br>
        <a href='sk_was1_create' class="btn btn-flat btn-info" data-toggle="tooltip" data-placement="top" title="SURAT KEPUTUSAN HUKUMAN DISIPLIN" style="margin-right: 5px;"><i class="fa fa-plus"></i> Surat Keputusan PHD</a>
      </div>
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

      {{-- @include('elapdu.inspeksi.partials._disposisi_inspektur') --}}

    </div>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingIrmud">
    <h4 class="panel-title">
      <a role="button" data-toggle="collapse" data-parent="#pengaduan" href="#collapseIrmud" aria-expanded="true" aria-controls="collapseIrmud">
        <span class="label label-default pull-right">Detil</span> <i class="fa fa-angle-double-right"></i> I R M U D
      </a>
    </h4>
  </div>
  <div id="collapseIrmud" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingIrmud">
    <div class="panel-body">

      {{-- @include('elapdu.inspeksi.partials._disposisi_irmud') --}}
      <div class="box-footer">
        <br>
        <a href='was17_create' class="btn btn-flat btn-info" data-toggle="tooltip" data-placement="top" title="Usul Penunjukan Majelis Kehormatan Jaksa" style="margin-right: 5px;"><i class="fa fa-plus"></i> WAS-17</a>
        <a href='was18_create' class="btn btn-flat btn-info" data-toggle="tooltip" data-placement="top" title="Usulan Surat Keputusan Penjatuhan Hukuman Disiplin" style="margin-right: 5px;"><i class="fa fa-plus"></i> WAS-18</a>
      </div>

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

      {{-- @include('elapdu.inspeksi.partials._disposisi_riksa') --}}
      

    </div>
  </div>
</div>
</div>
