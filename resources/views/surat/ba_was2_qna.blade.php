@extends('lapdu::operator.template')

@section('title', 'Kartu Disposisi')

@section('judulhalaman', 'KARTU WAWANCARA')

@section('subjudul', 'Kejaksaan Agung Republik Indonesia')

@section('stylesheets')
    <!-- JQueryUI Tabs -->
    <link rel="stylesheet" href="{{ asset('vendor/core/jquery-ui/themes/humanity/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/core/jquery-ui/themes/humanity/theme.css')}}">
    <!-- UI Tool Tip -->
    <link rel="stylesheet" href="{{ asset('vendor/core/jquery-ui/themes/base/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/lapdu/templates/alpha/assets/css/tooltip.css')}}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('vendor/core/admin-lte/plugins/iCheck/all.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('vendor/core/select2/dist/css/select2.min.css')}}">
@endsection

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h1 class="box-title">KARTU WAWANCARA</h1>
        </div>

        {{-- <span class="description-text">(KLARIFIKASI)</span> --}}

        <div class="box-body">
            @include('lapdu::surat.partials._ba_was2_qna_create')
        </div>

        <div class="box-footer">
            <!-- this row will not appear when printing -->
            <div class="row no-print">
                <div class="col-xs-12">
                    <a href="javascript:void(0)" id="save-btn" class="btn btn-info">
                        <i class="fa fa-save"></i> Simpan
                    </a>

                    {{--  <a href='klarifikasi_proses' class="btn btn-success pull-right" data-toggle="tooltip" data-placement="top" title="Isi Kesimpulan atas wawancara subyek hukum terkait" style="margin-right: 5px;">
                        <i class="fa fa-check-square-o"></i> Lanjut
                    </a>  --}}

                    <a href="{{ route('lapdu.operator.klarifikasi.action', ['id' => $data->_id]) }}" class="btn btn-default pull-right" style="margin-right: 5px;">
                        <i class="fa fa-mail-reply"></i> Proses Klarifikasi
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
    <script src="{{ asset('vendor/core/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/core/jquery-ui/jquery-ui.js')}}"></script>
    <!-- iCheck 1.0.1 -->
    <script src="{{ asset('vendor/core/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('vendor/core/fastclick/lib/fastclick.js')}}"></script>
    <!-- bootstrap datepicker -->
    <script src="{{ asset('vendor/core/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

    <script src="{{ asset('vendor/core/ckeditor/ckeditor.js')}}"></script>
    <!-- Select2 -->
    <script src="{{ asset('vendor/core/select2/dist/js/select2.full.min.js')}}"></script>

    <script>
        $(function () {
            //-- JQueryUI Tabs
            $( "#tabs" ).tabs({
                collapsible: true
            })
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
            })

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
            $('#interview_date').datepicker({
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
            CKEDITOR.replace('answer')
            CKEDITOR.replace('kesimpulan')

            let counter = 1

            $('#save-btn').click(function() {
                let data = {
                    '_method': 'PUT',
                    'witness': $('#witness').val(),
                    'interview_date': $('#interview_date').val(),
                    'summary': CKEDITOR.instances.kesimpulan.getData(),
                    'interviewer': "{{ Auth::user()->name }}"
                }

                $.post("{{ route('api.lapdu.qna.update', ['id' => $data->_id]) }}", data)
                    .done(function(res) {
                        alert('Data berhasil disimpan!')
                    })
            })

            $('#add-qna').click(function() {
                let data = {
                    'id': "{{ $data->_id }}",
                    'witness': $('#witness').val(),
                    'interview_date': $('#interview_date').val(),
                    'question': $('#question').val(),
                    'answer': CKEDITOR.instances.answer.getData(),
                    'interviewer': "{{ Auth::user()->name }}"
                }

                $.post("{{ route('api.lapdu.qna.store') }}", data)
                    .done(function(res) {
                        $('<tr/>').append(
                            $('<td/>').html(counter),
                            $('<td/>').html(res.question),
                            $('<td/>').html(res.answer),
                            $('<td/>').html(res.witness)
                        ).appendTo($('#list-qna'))

                        $('#question').val('')
                        CKEDITOR.instances.answer.setData('')
                        counter++
                    })
            })
        })
    </script>
@endsection