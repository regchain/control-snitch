@extends('lapdu::operator.template')

@section('title', 'Dashboard')

@section('judulhalaman', 'Kejaksaan Agung')

@section('subjudul', 'Republik Indonesia')

@section('content')
<!-- Default box -->
<form action="{{ route('lapdu.operator.laporan.update', ['id' => $data->_id]) }}" method="post" id="analisa-form">
    <input type="hidden" name="_method" value="PUT">

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">TELAAHAN</h3>
        </div>

        <div class="box-body">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                I. PERMASALAHAN
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
                                II. DATA
                            </a>
                        </h4>
                    </div>

                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <h4>1. Data Pelapor</h4>

                            @include('lapdu::lapdu.partials.pelapor_view')

                            <h4>2. Data Terlapor</h4>
                            @include('lapdu::lapdu.partials.terlapor_view')

                            <h4>3. Data Penunjang</h4>
                            @include('lapdu::lapdu.partials.datapenunjang_view')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-body">
            <h4>ANALISA</h4>

            <textarea id="analisa" rows="10" cols="80" placeholder="Uraikan analisa yang singkat dan lengkap">
                {{ $data->analysis ? $data->analysis : '' }}
            </textarea>

            <h4>KESIMPULAN</h4>

            <textarea id="kesimpulan" rows="10" cols="80" placeholder="Uraikan kesimpulan yang singkat dan lengkap">
                {{ $data->conclusion ? $data->conclusion : '' }}
            </textarea>

            <div class="col-md-11 col-md-offset-1">
                <label>Pendapat:</label>

                <textarea id="pendapat" rows="10" cols="80" placeholder="Uraikan pendapat yang singkat dan lengkap">
                    {{ $data->opinion ? $data->opinion : '' }}
                </textarea>

                <label>Saran:</label>

                <textarea id="saran" rows="10" cols="80" placeholder="Uraikan saran yang singkat dan lengkap">
                    {{ $data->suggestion ? $data->suggestion : '' }}
                </textarea>
            </div>
        </div>
        {{--  @include('lapdu::lapdu.partials._telaahan_view')  --}}

        <div class="box-footer">
            <!-- this row will not appear when printing -->
            <div class="row no-print">
                <div class="box-body">
                    <a href="javascript:void(0)" id="submit-was" class="btn btn-info">
                        <i class="fa fa-save"></i> Simpan
                    </a>

                    {{--  <a href="{{ route('lapdu.operator.laporan.index') }}" class="btn btn-success pull-right">
                        <i class="fa fa-check-square-o"></i> Lanjut
                    </a>  --}}

                    <a href="{{ route('lapdu.operator.laporan.action', ['id' => $data->_id]) }}" class="btn btn-danger pull-right" style="margin-right: 5px;">
                        <i class="fa fa-exclamation-triangle"></i> Kartu Penerus Disposisi
                    </a>
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->
</form>
@endsection

@section('scripts')

<!-- iCheck 1.0.1 -->
<script src="{{ asset('vendor/core/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('vendor/core/fastclick/lib/fastclick.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('vendor/core/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

<script src="{{ asset('vendor/core/ckeditor/ckeditor.js')}}"></script>


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
        CKEDITOR.replace('analisa')
        CKEDITOR.replace('kesimpulan')
        CKEDITOR.replace('pendapat')
        CKEDITOR.replace('saran')
        //bootstrap WYSIHTML5 - text editor
        // $('.textarea').wysihtml5()

        $('#submit-was').click(function() {
            let data = {
                '_method': 'PUT',
                'analysis': CKEDITOR.instances.analisa.getData(),
                'conclusion': CKEDITOR.instances.kesimpulan.getData(),
                'opinion': CKEDITOR.instances.pendapat.getData(),
                'suggestion': CKEDITOR.instances.saran.getData()
            }

            $.post("{{ route('api.lapdu.report.update', ['id' => $data->_id]) }}", data)
                .done(function(res) {
                    alert('Data sudah berhasil disimpan')
                    // window.location.replace("{{ env('APP_URL') }}/lapdu/operator/laporan")
                })
        })

      })
    </script>
    @endsection