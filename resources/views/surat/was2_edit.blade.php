@extends('elapdu.operator.template')

@section('title', 'Nota Dinas')

@section('judulhalaman', 'Kejaksaan Agung')

@section('subjudul', 'Republik Indonesia')

@section('stylesheets')
<!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="{{ asset('/bower_components/admin-lte/plugins/iCheck/all.css')}}"> {{-- expr --}}
@endsection

@section('content')
  
      <!-- Default box -->
      <div class="box">
          <div class="box-header with-border">
    <small class="pull-right">WAS-2</small>
    <h3 class="box-title">NOTA DINAS</h3>
    </div>

              <div class="box-body">
                <div class="col-md-2"><label>Kepada Yth.</label></div>
                <div class="col-md-10">
                <div class="form-group">
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">J.A.M Bidang Pengawasan</option>
                    <optgroup label="Bidang Teknis">
                      <option>J.A.M Bidang Pembinaan</option>
                      <option>J.A.M Bidang Intelijen</option>
                      <option>J.A.M Bidang Pidum</option>
                      <option>J.A.M Bidang Pidsus</option>
                      <option>J.A.M Bidang Datun</option>
                    </optgroup>
                    <optgroup label="Kejaksan Tinggi">
                      <option>Kepala Kejaksaan</option>
                      <option>Asisten..</option>
                      <option>Kasi..</option>
                    </optgroup>
                  </select>
                </div>
              </div>
                <div class="col-md-2"><label>Dari</label></div>
                <div class="col-md-10">
                <div class="form-group">
                    <select class="form-control select2" style="width: 100%;">
                      <option>J.A.M Bidang Pengawasan</option>
                      <optgroup label="INSPEKTUR">
                      <option selected="selected">INSPEKTUR I</option>
                      <option>INSPEKTUR II</option>
                      <option>INSPEKTUR III</option>
                      <option>INSPEKTUR IV</option>
                      <option>INSPEKTUR V</option>
                      <option>INSPEKTUR VI</option>
                    </optgroup>
                    </select>
                  </div>
                </div>
                <div class="col-md-2"><label>Tanggal</label></div>
                <div class="col-md-10">
                <!-- Date -->
                <div class="form-group">
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>
                <div class="col-md-2"><label>No.</label></div>
                <div class="col-md-10">
                <div class="input-group">
                    <span class="input-group-addon">ND -</span>
                    <input type="text" class="form-control" placeholder="Nomor">
                  </div>
              </div>
                <div class="col-md-2"><label>Sifat</label></div><div class="col-md-10"><p>: Rahasia</p></div>
                <div class="col-md-2"><label>Lampiran</label></div>
                <div class="col-md-10">
                <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="1">
                      <span class="input-group-addon">berkas</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-2"><label>Perihal</label></div><div class="col-md-10"><p>:  <strong>Laporan Pengaduan atas nama [Nama Terlapor], [Jabatan] [Satuan Kerja], [NRP], [NIP]] </strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae quasi commodi officiis laboriosam, nemo beatae eius vel, pariatur dolore nisi ea quae excepturi cumque a consequuntur. Ex omnis, ipsam illo!</p></div>
              </div>
              <hr>
              <div class="box-body">
                  <div class="col-md-10 col-md-offset-2">
                      <p>Sehubungan dengan surat Laporan Pengaduan dari [Data Pelapor]  [tanggal surat] perihal [perihal] yang
                      ditujukan kepada [Jabatan / Institusi] dan tembusannya antara lain kepada [............] , dengan ini disampaikan hal-hal sebagai berikut :</p>
                      <p>
                          <ol>
                              <li>Laporan Pengaduan terse but .pada pokoknya mengenai ...... ... .......................... .............. .......... .</li>
                              <li>Setelah dilakukan penelitlan temyata materi yang dilaporkan merupakan ruang lingkup tugas dan kewenangan Saudara .</li>
                              <li>Sehubungan poin 2 di atas, surat Laporan Pengaduan tersebut kami teruskan kepada Saudara untuk ditindaklanjuti sesuai ketentuan yang berlaku.</li>
                              <li>Tindaklanjut atas Laporan Pengaduan tersebut disampaikan kepada. kami untuk selanjutnya akan diteruskan kepada Pelapor guna memenuhi prinsip transparansi sesuai Pasal 87 PERJA Nomor : PER-022/A/JA/03/2011 tentang Penyelenggaraan Pengawasan Kejaksaan Republik Indonesia.</li>
                          </ol>
                      </p>
                      <p>Demikian untuk menjadi maklum dan atas perhatiannya diucapkan terimakasih.
                      </p>
                  </div>
              </div>



        <div class="box-footer">
            <!-- this row will not appear when printing -->
            <div class="row no-print">
              <div class="col-xs-12">
                <a href='#' class="btn btn-flat btn-info pull-right"><i class="fa fa-save"></i> Simpan
                </a>
                
                <a href='laporan_disposisi' class="btn btn-flat btn-danger pull-right" style="margin-right: 5px;">
                  <i class="fa fa-exclamation-triangle"></i> Batal
                </a>
              </div>
            </div>
          </section>
          <!-- /.content -->
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

@endsection

@section('scripts')
    
<!-- iCheck 1.0.1 -->
    <script src="{{ asset('/bower_components/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- bootstrap datepicker -->
    <script src="{{ asset('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

      <script src="{{ asset('/bower_components/ckeditor/ckeditor.js')}}"></script>


      <script>
        $(function () {
          //iCheck for checkbox and radio inputs
          $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass   : 'iradio_minimal-blue'
          })
          //Red color scheme for iCheck
          $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass   : 'iradio_minimal-red'
          })
          //Flat red color scheme for iCheck
          $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass   : 'iradio_flat-green'
          })
          //Date picker
        $('#datepicker').datepicker({
          autoclose: true
        })
          //Date picker
        $('#datepicker2').datepicker({
          autoclose: true
        })
        //Date picker
        $('#notadinas').datepicker({
          autoclose: true
        })
        //Date picker
        $('#klarifikasi').datepicker({
          autoclose: true
        })

         // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()

        })
      </script>

@endsection