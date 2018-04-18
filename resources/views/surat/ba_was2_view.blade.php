@extends('control-snitch::operator.template')

@section('title', 'Kartu Disposisi')

@section('judulhalaman', 'KARTU WAWANCARA')

@section('subjudul', 'Kejaksaan Agung Republik Indonesia')

@section('stylesheets')
<!-- UI Tool Tip -->
    <link rel="stylesheet" href="{{ asset('vendor/core/jquery-ui/themes/base/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/core/templates/alpha/assets/css/tooltip.css')}}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('/vendor/core/admin-lte/plugins/iCheck/all.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('/vendor/core/select2/dist/css/select2.min.css')}}">
@endsection

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <small class="pull-right">RAHASIA | BA.WAS-2</small>
            <h1 class="box-title">BERITA ACARA HASIL WAWANCARA</h1><br>
        </div>

        <div class="box-body">
            <div class="col-sm-6">
                <p><label>Tanggal Wawancara:</label> {{ $item['date'] }} </p>
                <p><label>Pewawancara : </label> {{ $item['interviewer'] }}</p>
            </div>

            <div class="col-sm-6">
                <p><label>Subyek Wawancara :</label> {{ $item['witness'] }}</p>
                {{--  <p><label>Status : </label>[Saksi / Pelapor / Terlapor] </p>  --}}
            </div>

            <div class="col-sm-12">
                <table id="list-qna" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="5%">No.</th>
                            <th width="35%">Pertanyaan</th>
                            <th width="40%">Jawaban</th>
                            <th width="20%">Keterangan</th>
                            {{--  <th>Tindakan</th>  --}}
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($item['qna'] as $l => $q)
                            <tr>
                                <td>{{ $l+1 }}</td>
                                <td>{{ $q['question'] }}</td>
                                <td>{!! $q['answer'] !!}</td>
                                <td></td>
                                {{--  <td>
                                    <div class="btn-group pull-right" role="group" aria-label="...">
                                    <button type="button" class="btn btn-default btn-xs"><i class="fa fa-edit"> </i> Edit</button>
                                    <button type="button" class="btn btn-default btn-xs"><i class="fa fa-remove"> </i> Hapus</button>
                                    </div>
                                </td>  --}}
                            </tr>
                        @endforeach
                    </tbody>

                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Pertanyaan</th>
                            <th>Jawaban</th>
                            <th>Keterangan</th>
                            {{--  <th>Tindakan</th>  --}}
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <div class="box-footer">
            <!-- this row will not appear when printing -->
            <div class="row no-print">
                <div class="col-xs-12">
                    {{--  <a href='klarifikasi_proses' class="btn btn-success pull-right" data-toggle="tooltip" data-placement="top" title="Isi Kesimpulan atas wawancara subyek hukum terkait" style="margin-right: 5px;">
                        <i class="fa fa-check-square-o"></i> Lanjut
                    </a>  --}}
                    <a href="{{ route('lapdu.operator.klarifikasi.action', ['id' => $data->_id]) }}" class="btn btn-default pull-right" style="margin-right: 5px;">
                        <i class="fa fa-mail-reply"></i> Kembali
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
<script src="{{ asset('vendor/core/jquery-3.2.1.min')}}"></script>
<script src="{{ asset('vendor/core/jquery-ui/jquery-ui.js')}}"></script>
  <!-- iCheck 1.0.1 -->
    <script src="{{ asset('/vendor/core/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('/vendor/core/fastclick/lib/fastclick.js')}}"></script>
    <!-- bootstrap datepicker -->
    <script src="{{ asset('/vendor/core/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

      <script src="{{ asset('/vendor/core/ckeditor/ckeditor.js')}}"></script>
<!-- Select2 -->
<script src="{{ asset('/vendor/core/select2/dist/js/select2.full.min.js')}}"></script>

      <script>
        $(function () {
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
        //Initialize Select2 Elements
        $('.select2').select2()

         // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
        })
        CKEDITOR.replace('kesimpulan')

      </script>
@endsection