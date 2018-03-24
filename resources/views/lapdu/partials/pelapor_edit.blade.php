<div class="row">

		<div class="box-header">
      <a href="#" class="btn btn-primary pull-right"><span class="fa fa-plus"></span> Pelapor / Saksi</a>
      <h4 class="box-title">Data Pelapor</h4>
    </div>

     <div class="col-md-6 col-sm-6">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input type="email" class="form-control" placeholder="Nama Lengkap">
        </div><br>
        <div class="form-group">
         <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
          <input type="text" class="form-control" placeholder="Tanggal Lahir" id="tgllahir">
        </div>
        <!-- /.input group -->
      </div><!-- /date -->
    </div>
    <div class="col-md-6 col-sm-6">
      <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
        <input type="email" class="form-control" placeholder="Pekerjaan">
      </div><br>
      <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-users"></i></span>
        <input type="email" class="form-control" placeholder="Organisasi">
      </div>
    </div>
    <div class="col-md-12 col-sm-12">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-id-badge"></i>
              </div>
              <input type="text" class="form-control" placeholder="HP..."
              data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
            </div>
            <!-- /.input group -->
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-phone"></i>
              </div>
              <input type="text" class="form-control" placeholder="Telpon..."
              data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
            </div>
            <!-- /.input group -->
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
              <input class="form-control" placeholder="email ..." name="kontak_email" type="text">
            </div>
            <!-- /.input group -->
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 col-sm-12">

      <div class="form-group">
        <textarea class="form-control" placeholder="Alamat lengkap : Jalan / Gg. ..." name="alamat" cols="0" rows="3"></textarea>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="form-group">
            <input class="form-control" name="kodepos" type="text" placeholder="Kode Pos">
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <!-- Kota -->
          <div class="form-group">
            <input class="form-control" name="kota" type="text" placeholder="Kota">
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="form-group">
            <input class="form-control" name="propinsi" type="text" placeholder="Propinsi">
          </div>
        </div>
      </div>
    </div>


</div>
	<!-- /.box-body -->

    @include('lapdu::lapdu.partials.pelapor_view')
