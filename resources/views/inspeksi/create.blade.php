@extends('lapdu::operator.template')

@section('title', 'Klarifikasi')

@section('judulhalaman', 'INSPEKSI KASUS')

@section('subjudul', 'Kejaksaan AgungRepublik Indonesia')

@section('stylesheets')

<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('vendor/core/select2/dist/css/select2.min.css')}}">

@endsection

@section('content')

<!-- Default box -->
<div class="box">
  <div class="box-header with-border">
    <small class="pull-right">WAS-5A</small>
    <h3 class="box-title">PERMINTAAN INSPEKSI KASUS</h3>
    </div>

  <div class="box-body">
    @include('lapdu::inspeksi.partials._spinspeksi_create')
  </div>


  <div class="box-body">
   <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <span class="pull-right"> <i class="fa fa-angle-double-left"></i></span><i class="fa fa-angle-double-right"> </i> I. PERMASALAHAN
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">

          @include('lapdu::lapdu.partials.kasus_view')

        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <span class="pull-right"> <i class="fa fa-angle-double-left"></i></span><i class="fa fa-angle-double-right"> </i> II. DATA
          </a>
        </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
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

        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <span class="pull-right"> <i class="fa fa-angle-double-left"></i></span><i class="fa fa-angle-double-right"> </i> III. TELAAHAN
          </a>
        </h4>
      </div>
      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
        <div class="panel-body">

         @include('lapdu::lapdu.partials._telaahan')

       </div>
     </div>
   </div>
   <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <span class="pull-right"> <i class="fa fa-angle-double-left"></i></span><i class="fa fa-angle-double-right"> </i> IV. NOTA DINAS
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">

        @include('lapdu::lapdu.partials._notadinas_view')

      </div>
    </div>
  </div>
  {{-- <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          <span class="pull-right"> <i class="fa fa-angle-double-left"></i></span><i class="fa fa-angle-double-right"> </i> V. SURAT PERINTAH
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div> --}}
  {{-- <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSix">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          <span class="pull-right"> <i class="fa fa-angle-double-left"></i></span><i class="fa fa-angle-double-right"> </i> VII. JAKSA FUNGSIONAL
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div> --}}
</div>
</div>


<div class="box-footer">
  <!-- this row will not appear when printing -->
  <div class="row no-print">
    <div class="col-xs-12">
      <a href='#' class="btn btn-info"><i class="fa fa-save"></i> Simpan
      </a>
      <a href='inspeksi' class="btn btn-success pull-right"><i class="fa fa-check-square-o"></i> Lanjut
      </a>
      <a href='klarifikasi' class="btn btn-danger pull-right" style="margin-right: 5px;">
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
<script src="{{ asset('vendor/core/select2/dist/js/select2.full.min.js')}}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{ asset('vendor/core/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('vendor/core/fastclick/lib/fastclick.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('vendor/core/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

<script src="{{ asset('vendor/core/ckeditor/ckeditor.js')}}"></script>


<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
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