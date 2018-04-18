@extends('control-snitch::operator.template')

@section('title', 'Klarifikasi')

@section('judulhalaman', 'INSPEKSI KASUS')

@section('subjudul', 'Kejaksaan Agung Republik Indonesia')

@section('stylesheets')
 <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css')}}">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{ asset('/bower_components/admin-lte/plugins/iCheck/line/green.css')}}">

<link rel="stylesheet" href="{{ asset('/bower_components/admin-lte/plugins/iCheck/all.css')}}">

<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('/bower_components/select2/dist/css/select2.min.css')}}">

@endsection

@section('content')

<!-- Default box -->
<div class="box box-success">
  <div class="box-header with-border">
    <small class="col-xs-3 pull-right text-justify">Lampiran Petunjuk Pelaksanaan JAMWAS Nomor ; 01/H/Hjw/04//2011 tanggal 01 April 2011 tentang Teknis Penanganan Laporan dan Tata Kelola Administrasi Bidang Pengawasan<br><strong class="pull-right">WAS-16A</strong></small>
    <h1 class="box-title"><pre>table:users:institute</pre></h1>
  </div>

  <div class="box-body">
    <div class="row">
      <div class="col-md-6 col-md-offset-1">
        <div class="col-sm-2 text-right"><strong>No.:</strong></div>
        <div class="col-sm-10">
          <div class="input-group">
            <span class="input-group-addon">R -</span>
            <input type="text" class="form-control" placeholder="Nomor">
          </div>
        </div>
        <div class="col-sm-2 text-right"><strong>Sifat:</strong></div><div class="col-sm-10">Rahasia</div>
        <div class="col-sm-2 text-right"><strong>Lampiran:</strong></div><div class="col-sm-10">1 (satu) berkas</div>
        <div class="col-sm-2 text-right"><strong>Perihal:</strong></div>
        <div class="col-sm-10"><strong>Pemberitahuan Usulan Untuk Dijatuhi Hukuman Disiplin Berat terhadap Terlapor atas nama [Nama Terlapor] [Jabatan] .</strong> </div>

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
            <option selected="selected">KEPALA KEJAKSAAN</option>
            <optgroup label="KEJAKSAAN TINGGI">
              <option>DKI JAKARTA</option>
              <option>JAWA BARAT</option>
              <option>JAWA TENGAH</option>
              <option>JAWA TIMUR</option>
              <option>.....</option>
            </optgroup>
            <optgroup label="KEJAKSAAN NEGERI">
              <option>...</option>
              <option>...</option>
              <option>....</option>
            </optgroup>
          </select>
        </div>
      </div><!-- /.LEFT COLUMNT -->
    </div>
  </div>


  <div class="box-body">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <p style="margin-top: 30px">Sehubungan dengan laporan Hasil lnspeksi Kasus Terlapor atas nama [Nama Terlapor], [pangkat / Gol], [NIP/NRP], [jabatan] sesuai surat / Nota dinas Nomor: [no surat], tanggal [tanggal surat], dengan ini diberitahukan :</p>
        <p>
          <ol type="1" style="margin-left: -25px">
            <li>
              Jaksa Agung Muda Pengawasan telah mengusulkan kepada Jaksa Agung untuk
              menjatuhkan Hukuman Disiplin Berat berupa :
              <ul type="none" style="margin-left: 20px">
                <form>
                  <li style="text-indent: -30px;">
                    <label>
                      <input type="radio" name="saran" id="saran1">
                      &nbsp;Pemberhentian dengan hormat tidak atas permintaan sendiri sebagai PNS sebagalmana dimaksud dalam Pasal 7  ayat (4) ·huruf d Peraturan Pemerintah Nomor 53 Tahun · 2010 /
                    </label>
                  </li>
                <li style="text-indent: -30px;">
                <label>
                      <input type="radio" name="saran" id="saran2">
                    &nbsp;Pemberhentian tidak dengan hormat sebagai sebagai PNS sebagaimana dimaksud dalam Pasal 7 ayat (4) huruf e Peraturan Pemerintah Nomor 53 Tahun 2010/
                  </label>
                </li>
                <li style="text-indent: -30px;">
                <label>
                      <input type="radio" name="saran" id="saran3">
                    Pemberhentian dengan hormat tldak atas permlntaan sendiri dari jabatan Jaksa karena alasan sebagaimana dimaksud dalam Pasal 2 huruf e Peraturan Pemerintah Nomor 20 Tahun 2008/
                  </label>
                </li>
                <li style="text-indent: -30px;">
                <label>
                      <input type="radio" name="saran" id="saran4">
                    Pemberhentian tidak dengan hormat dari · jabatan Jaksa karena alasan sebagaimana dimaksud dalam Pasal 5 huruf b, huruf c, huruf d, atau huruf e Peraturan Pemerintah Nomor 20 Tahun 2008 *)
                  </label>
                </li>
            </li>
            </form>
            </ul>
                <p>terhadap Terlapor  atas nama [Nama Terlapor], [pangkat / Gol], [NIP/NRP], [jabatan] , karena telah terbukti melakukan pelanggaran disiplin yaitu : [Pelanggaran] Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint eum a porro nostrum inventore corrupti saepe accusamus, obcaecati vitae reiciendis consequatur repudiandae ipsum fugiat recusandae neque distinctio voluptas, cupiditate magni.</p>
              <li>Terhadap Terlapor diberikan kesempatan untuk mengajukan pembelaan diri di  hadapan Majelis Kehormatan Jaksa dengan berpedoman pada Pasal 16 ayat 2 Peraturan Pemerintah Nomor 20 Tahun 2008 Jo. Pasal 62 PERJA Nomor : PER-022/A/JA/03/2011 tentang Penyelenggaraan Pengawasan Kejaksaan Republik Indonesia.</li>
              <li>Agar saudara segera menyampaikan pemberitahuan ini kepada Terlapor dan pelaksanaannya dilaporkan kepada Jaksa Agung Muda Pengawasan</li>
            </ol>
        </p>
      </div>
    </div>
  </div>


  <div class="box-footer">
    <!-- this row will not appear when printing -->
    <div class="row no-print">
      <div class="col-xs-12">
        <a href='#' class="btn btn-info"><i class="fa fa-save"></i> Simpan
        </a>
        <a href='usulan_disposisi' class="btn btn-success pull-right"><i class="fa fa-check-square-o"></i> Lanjut
        </a>
        <a href='usulan_disposisi' class="btn btn-danger pull-right" style="margin-right: 5px;">
          <i class="fa fa-exclamation-triangle"></i> Batal
        </a>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.box-footer-->
</div>
<!-- /.box -->

@endsection

@section('scripts')
<!-- Select2 -->
<script src="{{ asset('/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{ asset('/bower_components/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- bootstrap datepicker -->
  <script src="{{ asset('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{ asset('/bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.id.min.js')}}"></script>

<script src="{{ asset('/bower_components/ckeditor/ckeditor.js')}}"></script>


<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
          //iCheck for checkbox and radio inputs
          //iCheck for checkbox and radio inputs
          $(document).ready(function(){
      $('input').iCheck({
        checkboxClass: 'icheckbox_flat-red',
        radioClass: 'iradio_flat-red'
      });
    });
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
            format: "dd MM yyyy",
          weekStart: 1,
          maxViewMode: 3,
          todayBtn: "linked",
          language: "id",
          daysOfWeekHighlighted: "0",
          autoclose: true,
          todayHighlight: true,
          toggleActive: true
          })

         // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()

      })
    </script>
    @endsection