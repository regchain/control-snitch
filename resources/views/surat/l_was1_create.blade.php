@extends('lapdu::operator.template')

@section('title', 'Laporan Hasil Klarifikasi')

@section('judulhalaman', 'Laporan Hasil Klarifikasi')

@section('subjudul', 'Kejaksaan Agung Republik Indonesia')

@section('stylesheets')
<!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css')}}">
<!-- UI Tool Tip -->
<link rel="stylesheet" href="{{ asset('bower_components/jquery-ui/themes/base/jquery-ui.css')}}">
<link rel="stylesheet" href="{{ asset('bower_components/templates/alpha/assets/css/tooltip.css')}}">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{ asset('/bower_components/admin-lte/plugins/iCheck/line/green.css')}}">

<link rel="stylesheet" href="{{ asset('/bower_components/admin-lte/plugins/iCheck/all.css')}}">
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('/bower_components/select2/dist/css/select2.min.css')}}">
@endsection

@section('content')

<!-- Default box -->
<div class="box">
  <!-- Default box -->
  <div class="box-header with-border">
    <small class="col-xs-3 pull-right text-justify">Lampiran Petunjuk Pelaksanaan JAMWAS Nomor ; 01/H/Hjw/04//2011 tanggal 01 April 2011 tentang Teknis Penanganan Laporan dan Tata Kelola Administrasi Bidang Pengawasan<br><strong class="pull-right">L.WAS-1</strong></small>
<h1 class="box-title"><pre>table:users:institute</pre></h1>
</div>
<div class="box-body">
    <div class="col-md-6 col-md-offset-3" style="padding-bottom: 30px">
    <h4 class="description-block" for="inputGroupSuccess2">R A H A S I A</h4>
    <h3 class="description-block" for="inputGroupSuccess2"><u>LAPORAN HASIL KLARIFIKASI</u></h3>
    </div>

</div>

<div class="box-body">
  <div class="col-md-10 col-md-offset-1">
Sehubungan dengan Surat Perintah [id_sp.was1] Nomor: [no_sp.was1] tanggal [tgl_sp.was1], telah ditugaskan :
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

<div class="panel-group" id="klarivikasi_view" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingSPKlarifikasi">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#klarivikasi_view" href="#collapseSPKlarifikasi" aria-expanded="false" aria-controls="collapseSPKlarifikasi">
            <span class="label label-default pull-right">Detil</span> I. PERMASALAHAN
          </a>
        </h4>
      </div>
      <div id="collapseSPKlarifikasi" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSPKlarifikasi">
        <div class="panel-body">

          <div class="box-body">

            @include('lapdu::lapdu.partials.kasus_view')

          <div class="box box-success">

          @include('lapdu::surat.partials._was1_view')

          </div>

          </div>

        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingPermasalahan">
        <h4 class="panel-title">
          <a  class="collapsed" role="button" data-toggle="collapse" data-parent="#klarivikasi_view" href="#collapsePermasalahan" aria-expanded="false" aria-controls="collapsePermasalahan">
            <span class="label label-default pull-right">Detil</span> II. DATA
          </a>
        </h4>
      </div>
      <div id="collapsePermasalahan" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingPermasalahan">
        <div class="panel-body">

          <div class="box-body">

            @include('lapdu::lapdu.partials.pelapor_view')

          </div>

          <div class="box-body">

            @include('lapdu::lapdu.partials.terlapor_view')

          </div>

          <div class="box-body">

            @include('lapdu::lapdu.partials.datapenunjang_view')

          </div>
          <div class="box-body">
          {{-- @include('lapdu::surat.partials._was4_view') --}}

          @include('lapdu::surat.partials._ba_was2_list')
        </div>

        </div>
      </div>
    </div>
  <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            III. ANALISA
          </a>
        </h4>
      </div>
      <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
        <div class="panel-body">

          <form>
            <textarea id="analisa" name="analisa_telaahan" rows="10" cols="80">
              <i>Uraikan analisa yang singkat dan lengkap</i>
            </textarea>
          </form>

        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingFour">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
            IV. KESIMPULAN
          </a>
        </h4>
      </div>
      <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour">
        <div class="panel-body">

          <form>
            <textarea id="kesimpulan" name="analisa_telaahan" rows="10" cols="80">
              <i>Uraikan kesimpulan yang singkat dan lengkap</i>
            </textarea>
          </form>
          <div class="row">
          <div class="radio">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
              Belum ditemukan bukti awal adanya dugaan pelanggaran disiplin
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
              Ditemukan bukti awal adanya dugaan pelanggaran disiplin ringan atau sedang atau
              berat
            </label>
          </div>
          <div class="radio disabled">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
              Substansi permasalahannnya merupakan kewenangan bidang teknis
            </label>
          </div>
          </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingSaran">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSaran" aria-expanded="true" aria-controls="collapseSaran">
            III. SARAN
          </a>
        </h4>
      </div>
      <div id="collapseSaran" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingSaran">
        <div class="panel-body">
          <div class="row">
          <div class="radio">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
              Tidak perlu ditindak lanjuti
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
              Perlu ditindak lanjuti dengan melakukan Inspeksi Kasus oleh atasan
              langsung atau tim pemeriksa
            </label>
          </div>
          <div class="radio disabled">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
              Perlu ditindaklanjuti dengan meneruskan laporan pengaduan tersebut kepada bidang
              teknis terkait
            </label>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <p>Demikian kami laporkan, selanjutnya mohon petunjuk</p>
</div>




<div class="box-footer">
  <!-- this row will not appear when printing -->
  <div class="row no-print">
    <div class="col-xs-12">
      <a href='#' class="btn btn-info"><i class="fa fa-save"></i> Simpan
      </a>
      <a href='klarifikasi' class="btn btn-success pull-right"><i class="fa fa-check-square-o"></i> Lanjut
      </a>
      <a href='laporan_view' class="btn btn-danger pull-right" style="margin-right: 5px;">
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

<!-- Tool Tip -->
<script src="{{ asset('bower_components/jquery-3.2.1.min')}}"></script>
<script src="{{ asset('bower_components/jquery-ui/jquery-ui.js')}}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{ asset('/bower_components/admin-lte/plugins/iCheck/icheck.js')}}"></script>
<script src="{{ asset('/bower_components/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset('/bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.id.min.js')}}"></script>

<script src="{{ asset('/bower_components/ckeditor/ckeditor.js')}}"></script>
<!-- Select2 -->
<script src="{{ asset('/bower_components/select2/dist/js/select2.full.min.js')}}"></script>

<script>

  $(function () {
    $(document).ready(function(){
      $('input').iCheck({
        checkboxClass: 'icheckbox_flat-red',
        radioClass: 'iradio_flat-red'
      });
    });
          // Tooltip
          $( document ).tooltip({
            position: {
              my: "center bottom-20",
              at: "center top",
              using: function( position, feedback ) {
                $( this ).css( position );
                $( "<div>" )
                  .addClass( "arrow" )
                  .addClass( feedback.vertical )
                  .addClass( feedback.horizontal )
                  .appendTo( this );
              }
            }
          });
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
            checkboxClass: 'icheckbox_flat-aer',
            radioClass   : 'iradio_flat-aer'
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

        //Initialize Select2 Elements
        $('.select2').select2()

         // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('analisa')

        CKEDITOR.replace('kesimpulan')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
      })
    </script>
@endsection