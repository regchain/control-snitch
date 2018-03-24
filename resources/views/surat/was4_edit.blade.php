@extends('elapdu.operator.template')

@section('title', 'Dashboard')

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
          <small class="pull-right">WAS-4</small>
          <h3 class="box-title">TINDAK LANJUT KLARIFIKASI</h3>
        </div>
        

          <div class="box-body">


         
           <div class="box-body">
             <div class="row">
               <div class="col-md-8">
                 <div class="col-sm-2 text-right"><strong>No.:</strong></div>
                 <div class="col-sm-10">
                   <div class="input-group">
                   <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                   <input type="text" class="form-control" placeholder="Nomor R -...">
                 </div>
               </div>
               <div class="col-sm-2 text-right"><strong>Sifat:</strong></div><div class="col-sm-10">Rahasia</div>
               <div class="col-sm-2 text-right"><strong>Lampiran:</strong></div><div class="col-sm-10">1 (satu) berkas</div>
               <div class="col-sm-2 text-right"><strong>Perihal:</strong></div>
               <div class="col-sm-10"><strong>Pemberitahuan Tindak Lanjut hasil klarifikasi terhadap Lapdu an. [Nama Terlapor] [Pangkat] [Jabatan] [Institusi] </strong></div>

             </div><!-- /.LEFT COLUMNT -->


             <div class="col-md-4">
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
               <div class="form-group">
                 <label>Kepada Yth.</label>
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
             </div><!-- /.RIGHT columnt -->
           </div>
           <div class="box-body">
             <div class="col-md-11 col-md-offset-1">
                 <p>Menindaklanjuti surat<b> [JAMWAS/KAJATI] [No Surat] [tanggal [perihal: <i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia commodi dignissimos itaque nesciunt eos, quia quas dolores laborum esse, illum rem sequi accusantium voluptate quaerat possimus, debitis, modi deleniti impedit</i>]</b></p>

                 <p>Permintaan Klarifikasi terhadap laporan pengaduan atas nama [Nama Terlapor], bersama inidilaporkan bahwa setelah dilakukan klarifikasi, ternyata terhadap laporan pengaduan dimaksud:</p>

                 <p>tidak diperoleh bukti awal adanya pelanggaran disiplin, sehingga klarifikasi dihentikan, dengan alasan :</p>
                 <p>
                   <form>
                             <textarea id="tindaklanjut" name="tindaklanjut" rows="10" cols="80">
                                                    Cantumkan alasan penghentian pengaduan.
                             </textarea>
                       </form>
                 </p>
                 <p> kecuali dikemudian hari terdapat data baru, maka klarifikasi akan dilanjutkan</p>
                 <p class="text-center">atau *)</p>
                 <p>diperoleh bukti awal adanya pelanggaran disiplin, sehingga dilanjutkan dengan inspeksl kasus (surat perintah inspeksi kasus terlampir) .</p>
                 <p>Demikian untuk menjadl maklum</p>
               </div>
           </div>



         <!-- /.box -->



        </div>


        <div class="box-footer">
            <!-- this row will not appear when printing -->
            <div class="row no-print">
              <div class="col-xs-12">
                <a href='#' class="btn btn-info btn-flat pull-right"><i class="fa fa-save"></i> Simpan
                </a>
                <a href='klarifikasi_proses' class="btn btn-danger btn-flat pull-right" style="margin-right: 5px;">
                  <i class="fa fa-exclamation-triangle"></i> Batal
                </a>
              </div>
            </div>
          </section>
          <!-- /.content -->
        </div>
        <!-- /.box-footer-->
        </div>
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
        CKEDITOR.replace('tindaklanjut')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()

        })
      </script>

@endsection