@extends('vendor.lapdu.templates.alpha.templatealt')

@section('title', 'Uraian Permasalahan')

@section('judulhalaman', 'KEJAKSAAN AGUNG')

@section('subjudul', 'REPUBLIK INDONESIA')

@section('stylesheets')
@endsection

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-tools pull-right text-blue">
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
            Data Penunjang
        </div>

        <h4 class="box-title">URAIAN PERMASALAHAN</h4>

        <div class="row">
            <div class="col-xs-12">
                <div class="progress">
                    <div class="progress-bar progress-bar-primary progress-bar-striped progress-sm" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="50" style="width: 50%">
                        <span class="sr-only">100% Complete (success)</span>
                    </div>
                </div>
                <pre><code>Uraikan perbuatan / permasalahan yang singkat dan lengkap</code></pre>
            </div>
            <!-- /.box-header -->
        </div>
        <!-- /.row-box-header -->

        <form action="{{ route('lapdu.report.update', ['report' => $data->_id]) }}" method="POST" id="description-form">
            <input name="_method" type="hidden" value="PUT">

            <div class="row">
                <div class="6u$ 12u$(small)">
                    <div class="form-group">
                        <label class="text-red">* Perihal</label>
                        <input class="form-control" placeholder="Ringkasan Perbuatan, Subyek dan Obyek hukum" name="title" type="text">
                    </div>
                </div>
                <!-- /.box-header -->
            </div>
            <!-- /.row-box-header -->

            <div class="12u$">
                {{-- <textarea name="uraian-masalah" id="uraian-masalah" placeholder="Uraikan perbuatan / permasalahan yang singkat dan lengkap" rows="6"></textarea> --}}
                <textarea id="description" name="description" rows="10" cols="80" placeholder="Uraikan perbuatan / permasalahan yang singkat dan lengkap."></textarea>
            </div>

            <div class="box-footer">
                <!-- this row will not appear when printing -->
                <div class="row no-print">
                    <div class="col-xs-12">
                        <a href="javascript:void(0)" id="submit-description" class="button special small pull-right">
                            <i class="fa fa-check-square-o"></i> Lanjut
                        </a>

                        <a href="#" class="button alt small pull-right" style="margin-right: 5px;">
                            <i class="fa fa-exclamation-triangle"></i> Batal
                        </a>
                    </div>
                </div>
                <!-- /.content -->
            </div>
        </form>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->
@endsection

@section('scripts')
    <!-- FastClick -->
    <script src="{{ asset('vendor/core/fastclick/lib/fastclick.js')}}"></script>
    <!-- CK Editor -->
    <script src="{{ asset('vendor/core/ckeditor/ckeditor.js')}}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('description')
            //bootstrap WYSIHTML5 - text editor
            // $('.textarea').wysihtml5()

            $('#submit-description').click(function() {
                $('#description-form').submit()
            })
        })
    </script>
@endsection
