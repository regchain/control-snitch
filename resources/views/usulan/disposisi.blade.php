@extends('elapdu.operator.template')

@section('title', 'Kartu Disposisi')

@section('judulhalaman', 'USULAN HUKUMAN DISIPLIN')

@section('subjudul', 'Kejaksaan Agung Republik Indonesia')

@section('stylesheets')
 <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css')}}">
<!-- JQueryUI Tabs -->
<link rel="stylesheet" href="{{ asset('/bower_components/jquery-ui/themes/humanity/jquery-ui.css')}}">
<link rel="stylesheet" href="{{ asset('/bower_components/jquery-ui/themes/humanity/theme.css')}}">
<!-- UI Tool Tip -->
<link rel="stylesheet" href="{{ asset('bower_components/jquery-ui/themes/base/jquery-ui.css')}}">
<link rel="stylesheet" href="{{ asset('bower_components/templates/alpha/assets/css/tooltip.css')}}">
  <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="{{ asset('/bower_components/admin-lte/plugins/iCheck/all.css')}}">
        <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('/bower_components/select2/dist/css/select2.min.css')}}">
@endsection

@section('content')
  
<!-- Default box -->
<div class="box">
  <div class="box-header with-border">
    <h1 class="box-title">KARTU PENERUS DISPOSISI</h1><br>
  </div>

  <div class="box-body">
   @include('elapdu.lapdu.partials._disposisi_register')
 </div>

 <div class="box-header with-border">
  <h3 class="box-title">DISPOSISI</h3><br>
</div>
<div class="box-body">

 @include('elapdu.usulan.partials._disposisi_row2')

</div>
<div class="box-header with-border">
  <h3 class="box-title">LANJUTAN INSPEKTUR</h3><br>
</div>
<div class="box-body">

 @include('elapdu.usulan.partials._lanjutan_inspektur')

</div>
<!-- /.row -->
</div>
<div class="box">
<div class="box-header with-border">
  <h3 class="box-title">RENCANA PENJATUHAN HUKUMAN DISIPLIN</h3><br>
</div>
<div class="box-body">
  @include('elapdu.usulan.partials._usulan_view')
</div>



   <div class="box-footer">
    <!-- this row will not appear when printing -->
    <div class="row no-print">
      <div class="col-xs-12">
        <a href='usulan' class="btn btn-success pull-right" style="margin-right: 5px;"><i class="fa fa-check-square-o"></i> Lanjut
        </a>
        <a href='usulan' class="btn btn-danger pull-right" style="margin-right: 5px;">
          <i class="fa fa-exclamation-triangle"></i> Batal
        </a>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.box-footer-->
</div>

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
    //Date picker
          $('#datepicker').datepicker({
            format: "dd MM yyyy",
            weekStart: 1,
            todayBtn: true,
            language: "id-ID",
            multidate: true,
            multidateSeparator: "-",
            forceParse: false,
            daysOfWeekHighlighted: "0",
            autoclose: true,
            todayHighlight: true
          })
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
          $('#datepicker2').datepicker({
            format: "dd MM yyyy",
                        weekStart: 1,
                        todayBtn: true,
                        language: "id-ID",
                        multidate: true,
                        multidateSeparator: "-",
                        forceParse: false,
                        daysOfWeekHighlighted: "0",
                        autoclose: true,
                        todayHighlight: true
          })
        //Date picker
        $('#was3').datepicker({
          format: "dd MM yyyy",
                      weekStart: 1,
                      todayBtn: true,
                      language: "id-ID",
                      multidate: true,
                      multidateSeparator: "-",
                      forceParse: false,
                      daysOfWeekHighlighted: "0",
                      autoclose: true,
                      todayHighlight: true
        })
        //Date picker
        $('#notadinas').datepicker({
          format: "dd MM yyyy",
                      weekStart: 1,
                      todayBtn: true,
                      language: "id-ID",
                      multidate: true,
                      multidateSeparator: "-",
                      forceParse: false,
                      daysOfWeekHighlighted: "0",
                      autoclose: true,
                      todayHighlight: true
        })
        //Date picker
        $('#klarifikasi').datepicker({
          format: "dd MM yyyy",
                      weekStart: 1,
                      todayBtn: true,
                      language: "id-ID",
                      multidate: true,
                      multidateSeparator: "-",
                      forceParse: false,
                      daysOfWeekHighlighted: "0",
                      autoclose: true,
                      todayHighlight: true
        })
        //Initialize Select2 Elements
        $('.select2').select2()

         // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
      })
    </script>
    @endsection