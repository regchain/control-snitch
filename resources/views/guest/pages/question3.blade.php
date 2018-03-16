@extends('vendor.lapdu.templates.alpha.templatealt')

@section('title', 'Uraian Permasalahan')

@section('judulhalaman', 'KEJAKSAAN AGUNG')

@section('subjudul', 'REPUBLIK INDONESIA')

@section('stylesheets')

<!-- selectpicker -->
        {{-- <link rel="stylesheet" href="{{ asset('vendor/core/bootstrap-select/dist/css/bootstrap-select.min.css')}}"> --}}

@endsection

@section('content')

      <!-- Default box -->
      <div class="box">
          <div class="box-tools pull-right text-blue">
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
            Data Penunjang
          </div>
          <h3 class="box-title">URAIAN PERMASALAHAN</h3>
        <div class="row">
          <div class="col-xs-12">
            <div class="progress">
              <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="50" style="width: 50%">
                <span class="sr-only">100% Complete (success)</span>
              </div>
            </div>
            <pre><code>Uraikan perbuatan / permasalahan yang singkat dan lengkap</code></pre>
          </div>
        <!-- /.box-header -->
        </div>
        <!-- /.row-box-header -->

        <div class="row">
          <div class="6u$ 12u$(small)">
          <div class="form-group">
                <label class="text-red">* Perihal</label>
                <input class="form-control" placeholder="Ringkasan Perbuatan, Subyek dan Obyek hukum" name="judul_kasus" type="text">

              </div>
            </div>
        <!-- /.box-header -->
        </div>
        <!-- /.row-box-header -->
        <div class="12u$">
          {{-- <textarea name="uraian-masalah" id="uraian-masalah" placeholder="Uraikan perbuatan / permasalahan yang singkat dan lengkap" rows="6"></textarea> --}}
          <form>
                    <textarea id="editor1" name="editor1" rows="10" cols="80">Uraikan perbuatan / permasalahan yang singkat dan lengkap.
                    </textarea>
              </form>
        </div>
        <div class="row">
        <div class="box-header">
          <div class="12u$">

          {{-- <form>
                <textarea id="editor1" name="uraian_masalah" rows="10" cols="80">

                </textarea>
          </form> --}}
        </div>
        </div>
        <!-- /.box-header -->
        </div>
        <!-- /.row-box-header -->

        <div class="box-footer">
            <!-- this row will not appear when printing -->
            <div class="row no-print">
              <div class="col-xs-12">

                <a href='{{ route('lapdu.question', ['page' => 4]) }}' class="button special pull-right"><i class="fa fa-check-square-o"></i> Lanjut
                </a>
                <a href='#' class="button alt pull-right" style="margin-right: 5px;">
                  <i class="fa fa-exclamation-triangle"></i> Batal
                </a>
              </div>
            </div>
          </section>
          <!-- /.content -->
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

@endsection

@section('scripts')
<!-- FastClick -->
<script src="{{ asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('vendor/core/admin-lte/dist/js/demo.js')}}"></script>
  <!-- CK Editor -->
  <script src="{{ asset('vendor/core/ckeditor/ckeditor.js')}}"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1')
      //bootstrap WYSIHTML5 - text editor
      $('.textarea').wysihtml5()
    })
  </script>

@endsection

