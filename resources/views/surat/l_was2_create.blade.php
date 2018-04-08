@extends('lapdu::operator.template')

@section('title', 'Laporan Hasil Inspeksi')

@section('judulhalaman', 'Laporan Hasil Inspeksi Kasus')

@section('subjudul', 'Kejaksaan Agung Republik Indonesia')

@section('stylesheets')
 <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('/bower_components/select2/dist/css/select2.min.css')}}">
<!-- UI Tool Tip -->
<link rel="stylesheet" href="{{ asset('bower_components/jquery-ui/themes/base/jquery-ui.css')}}">
<link rel="stylesheet" href="{{ asset('bower_components/templates/alpha/assets/css/tooltip.css')}}">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{ asset('/bower_components/admin-lte/plugins/iCheck/line/green.css')}}">

<link rel="stylesheet" href="{{ asset('/bower_components/admin-lte/plugins/iCheck/all.css')}}">

@endsection

@section('content')

<!-- Default box -->
<div class="box">
  <!-- Default box -->
  <div class="box-header with-border">
    <small class="col-xs-3 pull-right text-justify">Lampiran Petunjuk Pelaksanaan JAMWAS Nomor ; 01/H/Hjw/04//2011 tanggal 01 April 2011 tentang Teknis Penanganan Laporan dan Tata Kelola Administrasi Bidang Pengawasan<br><strong class="pull-right">L.WAS-2</strong></small>
    <h1 class="box-title"><pre>table:users:institute</pre></h1>
  </div>
  <div class="box-body">
    <div class="col-md-6 col-md-offset-3" style="padding-bottom: 30px">
      <h3 class="description-block" for="inputGroupSuccess2">R A H A S I A</h3>
      <h3 class="description-block" for="inputGroupSuccess2"><u>LAPORAN HASIL INSPEKSI KASUS</u></h3>
    </div>

  </div>

  <div class="box-body">
    <div class="col-md-10 col-md-offset-1">
      Berdasarkan Surat Perintah [id_sp.was2] Nomor: [no_sp.was2] tanggal [tgl_sp.was2], telah ditugaskan :
      <p>
        <ul style="list-style-type:none">
          <li>@include('lapdu::klarifikasi.partials._jaksapengawas')</li>
        </ul>
      </p>
      <p>untuk melakukan Klarifikasl terhadap :</p>
      <p>
        <ul style="list-style-type:none">
          <li>@include('lapdu::lapdu.partials.terlapor_view')</li>
          <li>@include('lapdu::lapdu.partials.pelapor_view')</li>
        </ul>
      </p>
      <p>Dengan hasil sebagai berikut :</p>


      <div class="box-body">
         <h3>PERMASALAHAN</h3>

          <form>
            <textarea id="permasalahan" name="pasal_rphd" rows="5" cols="80">
              <i>(Hal-hal yang ditemukan dalam pelaksanaan inspeksi atau informasi/pengaduan yang diterima).</i>
            </textarea>
          </form>

        <h3>DATA</h3>
        @include('lapdu::surat.partials._ba_was3_list')
        <h3>ANALISA</h3>

          <form>
            <textarea id="analisa" name="analisa_rphd" rows="10" cols="80">
              <i>(Analisa berdasarkan-data yang ada dikaitkan dengan ketentuan perundang-undangan yang berlaku)</i>
            </textarea>
          </form>


        <h3>KESIMPULAN</h3>

          <form>
            <textarea id="kesimpulan" name="kesimpulsn_rphd" rows="10" cols="80">
              <i>{berisi kesimpulan terhadap analisa mengenai terbukti atau tidaknya peristiwa/perbuatan yang dilaporkan</i>
            </textarea>
          </form>


          <h3>PERTIMBANGAN</h3>
          <ul>
            <li>
              <label>Hal-hal yang memberatkan:</label>
              <form>
                <textarea id="berat" name="berata_rphd" rows="10" cols="80">
                  <i>Uraikan hal-hal yang memberatkan yang singkat dan lengkap</i>
                </textarea>
              </form>
            </li>
            <li>
              <form>
                <label>Hal-hal yang meringankan:</label>
                <textarea id="ringan" name="ringan_rphd" rows="10" cols="80">
                  <i>Uraikan hal-hal yang memberatkan yang singkat dan lengkap</i>
                </textarea>
              </form>
            </li>
          </ul>

          <h3>RENCANA PENJATUHAN HUKUMAN DISIPLIN</h3>

          <ol type="1" style="margin-left: -20px">
            <h4><li>&nbsp;[Nama Terlapor] </li></h4>
            @include('lapdu::surat.partials._l_was2_terlapor')
            <hr>
            <h4><li>&nbsp; [Nama Terlapor] </li></h4>
            @include('lapdu::surat.partials._l_was2_terlapor')
            <hr>

          </ol>


      </div>
    {{-- @include('lapdu::lapdu.partials._telaahan_view') --}}


    <div class="box-footer">
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="box-body">
          <a href='inspeksi_disposisi' class="btn btn-flat btn-success pull-right"><i class="fa fa-check-square-o"></i> Lanjut
          </a>
          <a href='inspeksi_disposisi' class="btn btn-flat btn-danger pull-right" style="margin-right: 5px;">
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
<!-- iCheck 1.0.1 -->
<script src="{{ asset('/bower_components/admin-lte/plugins/iCheck/icheck.js')}}"></script>
<script src="{{ asset('/bower_components/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
  <!-- iCheck 1.0.1 -->
  <script src="{{ asset('/bower_components/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{ asset('/bower_components/fastclick/lib/fastclick.js')}}"></script>
  <!-- bootstrap datepicker -->
  <script src="{{ asset('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

  <script src="{{ asset('/bower_components/ckeditor/ckeditor.js')}}"></script>
  <!-- Select2 -->
<script src="{{ asset('/bower_components/select2/dist/js/select2.full.min.js')}}"></script>

  <script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

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
        CKEDITOR.replace('permasalahan')
        CKEDITOR.replace('analisa')
        CKEDITOR.replace('kesimpulan')
        CKEDITOR.replace('berat')
        CKEDITOR.replace('ringan')
        CKEDITOR.replace('perbuatan')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
      })
    </script>
    @endsection