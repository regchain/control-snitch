<div class="row">
	<div class="box-body">
		<div class="col-xs-12">
		<div class="nav-tabs-custom">
          <ul class="nav nav-tabs pull-right">
            <li class="active"><a href="#tab_1-1" data-toggle="tab"><i class="fa fa-bullhorn"></i> Permasalahan</a></li>
            <li><a href="#tab_2-2" data-toggle="tab"><i class="fa fa-cubes"></i> Data Penunjang</a></li>
            <li><a href="#tab_3-2" data-toggle="tab"><i class="fa fa-user"></i> Subyek Hukum</a></li>
            <li class="pull-left header"></i> Laporan Pengaduan</li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1-1">

            	@include('elapdu.partials.kasus')

            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_2-2">

            	@include('elapdu.partials.datapenunjang')
              
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_3-2">

              @include('elapdu.partials.terlapor_view')

              @include('elapdu.partials.pelapor_view')

            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>
    </div>
	</div>
	<!-- /.box-body -->
</div>
<!-- /.row-box-body -->
