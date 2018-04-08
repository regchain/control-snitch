  <div class="col-md-12">
        <div class="col-md-6">

          <!-- Sidebar user panel (optional) -->
               <div class="user-panel">
                 <div class="pull-left image">
                   <img src="{{ asset('bower_components/admin-lte/dist/img/user.png')}}" class="img-circle" alt="User Image">
                 </div>
                 <div class="pull-left info">
                   <p>{{ Auth::user()->name }}</p>
                   <!-- Status -->
                   <p>Pewawancara</p>
                 </div>
               </div>
        </div>
        <div class="col-md-6">
          <select class="form-control select2" style="width: 100%;">
            <option selected="selected">Pilih Saksi Pelapor / Terlapor?</option>
            <optgroup label="Saksi Pelapor">
                <option>Nama Saksi 1</option>
                <option>Nama Saksi 2</option>
                <option>Nama Saksi 3</option>
              </optgroup>
              <optgroup label="Saksi Terlapor">
                <option>Terlapor</option>
                <option>Nama Saksi 1</option>
                <option>Nama Saksi 2</option>
              </optgroup>
          </select>
          <div class="form-group">
          <br>
            <div class="input-group">
             <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              <input type="text" class="form-control" placeholder="Tgl Wawancara" id="datepicker">
            </div>
            <!-- /.input group -->
          </div><!-- /date --> 
        </div>
      </div>


        <div class="col-md-12">
              <!-- /.box-header -->
              <div class="box-body pad">
                <div class="form-group">
                  <label>Pertanyaan: </label>
                  <input type="text" class="form-control" placeholder="Kolom pertanyaan ...">
                </div>
                <label for="">Jawaban: </label>
                <form>
                      <textarea id="editor1" name="editor1" rows="10" cols="80">
                                              
                      </textarea>

                </form>
              </div>
              <div class="box-footer">
                  <a href='#' class="btn btn-info btn-flat"><i class="fa fa-save"></i> Simpan</a>
                </div>
        </div>