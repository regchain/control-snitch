
      
      <div class="box-header">
      <h4 class="box-title">Data Terlapor</h4>
        </div>

        <div class="box-body">
        <div class="col-md-5 col-sm-12 col-xs-12">
           <div class="row">
                <div class="input-group">
                <span class="input-group-addon">N.R.P</span>
                <input type="text" class="form-control" placeholder="N.R.P">
              </div><br>
              <div class="input-group">
                <span class="input-group-addon">&nbsp;<i class="fa fa-user">&nbsp;</i>&nbsp;</span>
                <input type="email" class="form-control" placeholder="Nama Lengkap Terlapor..." disabled="">
              </div>
              <br>
                <div class="input-group">
                <span class="input-group-addon">N.I.P</span>
                <input type="text" class="form-control" placeholder="N.I.P" disabled="">
              </div>
          </div>
        </div><!-- /.left column -->

      <div class="col-md-7 col-sm-12 col-xs-12">

          <div class="form-group">
            <textarea class="form-control" placeholder="Jelaskan posisi terlapor saat dalam permasalahan. ..." name="alamat" cols="0" rows="2"></textarea>
          </div>
          <div class="row">
          <div class="col-xs-4">
            <!-- Kota -->
            <div class="form-group">
              <select class="form-control select2" style="width: 100%;" disabled="">
                <optgroup label="Kejaksan Agung">
                  <option selected="selected">Kejaksaan Agung</option>
                </optgroup>
                <optgroup label="Kejaksan Tinggi">
                  <option>Aceh</option>
                  <option>Sumatera Utara</option>
                  <option>Jawa Barat</option>
                  <option>Jawa Tengah</option>
                  <option>DKI Jakarta</option>
                </optgroup>
              </select>
            </div>
          </div>
          <div class="col-xs-4">
            <div class="form-group">
              <select class="form-control select2" style="width: 100%;" disabled="">
                <option selected="selected">Kejaksaan Negeri</option>
                <optgroup label="Kejaksaan Negeri">
                  <option>Kejari ...</option>
                  <option>Kejari ...</option>
                  <option>Kejari ...</option>
                  <option>Kejari ...</option>
                  <option>Kejari ...</option>
                  <option>Kejari ...</option>
                </optgroup>
              </select>
            </div>
          </div>
          <div class="col-xs-4">
            <div class="form-group">
              <select class="form-control select2" style="width: 100%;" disabled="">
                <option selected="selected">Kejaksaan Cabang</option>
                <option>Kecapjari ...</option>
                <option>Kecapjari ...</option>
                <option>Kecapjari ...</option>
                <option>Kecapjari ...</option>
                <option>Kecapjari ...</option>
                <option>Kecapjari ...</option>
              </select>
            </div>
          </div>

          <div class="col-xs-4">
            <div class="form-group">
              <select class="form-control select2" style="width: 100%;">
                <option selected="selected">- Status -</option>
                <option>Terlapor</option>
                <option>Saksi</option>
              </select>
            </div>
          </div>
          <div class="col-xs-4">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-mobile"></i>
                </div>
                <input type="text" class="form-control"  placeholder="HP"
                data-inputmask="'mask': ['999-999-9999-99999', '+099 99 99 9999[9]-9999']" data-mask>
              </div>
              <!-- /.input group -->
            </div>
          </div>
          <div class="col-xs-4">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-phone"></i>
                </div>
                <input type="text" class="form-control" placeholder="Telpon"
                data-inputmask="'mask': ['999-9999-9999-9999', '+099 99 99 9999[9]-9999']" data-mask>
              </div>
              <!-- /.input group -->
            </div>
          </div>
        </div>
        <a href="#" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Terlapor</a>
       </div><!-- /.right column -->

      </div>
      <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No.</th>
              <th>Nama Terlapor</th>
              <th>Jabatan</th>
              <th>Satuan Kerja</th>
              <th>Status Kepegawaian</th>
              <th>Tindakan</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1.</td>
              <td>[Nama Lengkap Terlapor]</td>
              <td>[Jabatan]</td>
              <td>Kejaksaan Tinggi...</td>
              <td>PEGAWAI T.U</td>
              <td>
                <div class="btn-group btn-xs pull-right" role="group" aria-label="...">
                <button type="button" class="btn btn-default"><i class="fa fa-edit"> </i></button>
                <button type="button" class="btn btn-default"><i class="fa fa-remove"> </i></button>
              </div>
                </td>
            </tr>
            <tr>
              <td>2.</td>
              <td>[Nama Lengkap Terlapor]</td>
              <td>[Jabatan]</td>
              <td>Kejaksaan Negeri...</td>
              <td>JAKSA</td>
              <td>
                <div class="btn-group btn-xs pull-right" role="group" aria-label="...">
                <button type="button" class="btn btn-default"><i class="fa fa-edit"> </i></button>
                <button type="button" class="btn btn-default"><i class="fa fa-remove"> </i></button>
              </div>
                </td>
            </tr>
            
            </tbody>
            <tfoot>
            <tr>
              <th>No.</th>
              <th>Nama Terlapor</th>
              <th>Jabatan</th>
              <th>Satuan Kerja</th>
              <th>Status Kepegawaian</th>
              <th>Tindakan</th>
            </tr>
            </tfoot>
          </table>
        </div>


   

