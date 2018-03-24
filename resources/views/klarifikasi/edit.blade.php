@extends('elapdu.operator.template')

@section('title', 'Edit Klarifikasi')

@section('judulhalaman', 'Edit Klarifikasi')

@section('subjudul', 'Kejaksaan Agung Republik Indonesia')

@section('stylesheets')
<!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="{{ asset('/bower_components/admin-lte/plugins/iCheck/all.css')}}"> {{-- expr --}}
@endsection

@section('content')
  
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">EDIT HASIL KLARIFIKASI</h3>
          </div>
          <div class="box-body">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      <span class="label label-success pull-right">Detil</span> I. PERMASALAHAN
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">

                    <div class="box-body">
                      @include('elapdu.lapdu.partials.kasus_edit')
                    </div>

                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <span class="label label-success pull-right">Detil</span> II. DATA
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    <div class="box-body">
                      @include('elapdu.lapdu.partials.pelapor_edit')

                      @include('elapdu.lapdu.partials.terlapor_edit')

                       @include('elapdu.lapdu.partials.datapenunjang_edit')

                       {{-- @include('elapdu.lapdu.partials._telaahan') --}}

                    </div>

                  </div>
                </div>
              </div>
              {{-- <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFive">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      <span class="label label-success pull-right">Detil</span>III. TELAAHAN
                    </a>
                  </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                  <div class="panel-body">

                   @include('elapdu.lapdu.partials._telaahan')

                 </div>
               </div>
             </div> --}}
             
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingEight">
                <h4 class="panel-title">
                  <arole="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                  <span class="label label-success pull-right">Detil</span> III. HASIL KLARIFIKASI
                </a>
              </h4>
            </div>
            <div id="collapseEight" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingEight">
              <div class="panel-body">

                <div class="box-body">
                  {{-- @include('elapdu.surat.partials._was4_create') --}}
                  @include('elapdu.surat.partials._ba_was2_list')
                </div>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
              {{-- <div class="panel-heading" role="tab" id="headingSix">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    <span class="label label-success pull-right">Detil</span> IV. NOTA DINAS
                  </a>
                </h4>
              </div>
              <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                <div class="panel-body">

                  @include('elapdu.surat.partials._was5b_view')

                </div>
              </div>
            </div> --}}
            {{-- <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingSeven">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    <span class="label label-success pull-right">Detil</span> V. SURAT PERMINTAAN INSPEKSI KASUS
                  </a>
                </h4>
              </div>
              <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                <div class="panel-body">

                  <div class="box-body">
                    @include('elapdu.surat.partials._was5a_view')
                  </div>
              </div>
            </div>
      </div> --}}


      <div class="box-footer">
        <!-- this row will not appear when printing -->
        <div class="row no-print">
          <div class="col-xs-12">

            <a href='klarifikasi' class="btn btn-success pull-right"><i class="fa fa-check-square-o"></i> Lanjut
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
        CKEDITOR.replace('uraian_masalah')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()

        })
      </script>

@endsection