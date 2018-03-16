@extends('vendor.lapdu.templates.alpha.templatealt')

@section('title', 'Data Penunjang')

@section('judulhalaman', 'KEJAKSAAN AGUNG')

@section('subjudul', 'REPUBLIK INDONESIA')

@section('stylesheets')

<!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('vendor/core/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

@endsection

@section('content')

      <!-- Default box -->
      <div class="box">
          <div class="box-tools pull-right text-blue">
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
            Buat Akun Pelapor
          </div>
          <h3>DATA PENUNJANG</h3>
        <div class="row">
          <div class="col-xs-12">
            <div class="progress">
              <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75" style="width: 75%">
                <span class="sr-only">100% Complete (success)</span>
              </div>
            </div>
            <pre><code>Unggah data penunjang yang anda miliki sebagai alat bukti</code></pre>
          </div>
        <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->

        <div class="row">
          <div class="col-xs-12">
          <form method="post" action="#">
                    <div class="row uniform 50%">
                      <div class="9u 12u(mobilep)">
                        <input type="text" name="query" id="query" value="" placeholder="Unggah data penunjang yang anda miliki sebagai alat bukti">
                      </div>
                      <div class="3u 12u(mobilep)">
                        <input type="submit" value="Unggah File" class="fit alt">
                      </div>
                    </div>
                  </form>
            <p class="text-red">* Jenis data yang dapat diunggah: .doc .docx .jpg .png .mp4 .mp3</p>
          </div>
        <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->

        <div class="row">
          <div class="col-xs-12">
            <h3 class="box-title">List Data Penunjang</h3>
          <!-- /.box-header -->
          <div class="table-wrapper">
            <table id="example2" class="alt" width="100%">
              <thead>
              <tr>
                <th{{--  width="30%"> --}}Nama File</th>
                <th>Jenis</th>
                <th>Kapasitas</th>
                <th width="30%">Keterangan</th>
                <th>Tindakan</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>Trident</td>
                <td>.jpg
                </td>
                <td>3 mb </td>
                <td> 4</td>
                <td>
                <div class="btn-group pull-right" role="group" aria-label="...">
                  <a href="#" class="btn btn-default btn-xs"><i class="fa fa-eye"></i></a>
                  <a href="#" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a>
                  <a href="#" class="btn btn-default btn-xs"><i class="fa fa-remove"></i></a>
                </div>
              </td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>.jpg
                </td>
                <td>3 mb </td>
                <td>5</td>
                <td>
                <div class="btn-group pull-right" role="group" aria-label="...">
                  <a href="#" class="btn btn-default btn-xs"><i class="fa fa-eye"></i></a>
                  <a href="#" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a>
                  <a href="#" class="btn btn-default btn-xs"><i class="fa fa-remove"></i></a>
                </div>
              </td>
              </tr>

              <tr>
                <td>Trident</td>
                <td>.mp3</td>
                <td>800 kb</td>
                <td>7</td>
                <td>
                <div class="btn-group pull-right" role="group" aria-label="...">
                  <a href="#" class="btn btn-default btn-xs"><i class="fa fa-eye"></i></a>
                  <a href="#" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a>
                  <a href="#" class="btn btn-default btn-xs"><i class="fa fa-remove"></i></a>
                </div>
              </td>
              </tr>

              <tr>
                <td>Gecko</td>
                <td>.docx</td>
                <td>76 kb</td>
                <td>1.8</td>
                <td>
                <div class="btn-group pull-right" role="group" aria-label="...">
                  <a href="#" class="btn btn-default btn-xs"><i class="fa fa-eye"></i></a>
                  <a href="#" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a>
                  <a href="#" class="btn btn-default btn-xs"><i class="fa fa-remove"></i></a>
                </div>
              </td>
              </tr>

              <tr>
                <td>Gecko</td>
                <td>.mp4</td>
                <td>6 mb</td>
                <td>1.8</td>
                <td>
                <div class="btn-group pull-right" role="group" aria-label="...">
                  <a href="#" class="btn btn-default btn-xs"><i class="fa fa-eye"></i></a>
                  <a href="#" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a>
                  <a href="#" class="btn btn-default btn-xs"><i class="fa fa-remove"></i></a>
                </div>
              </td>
              </tr>
              <tr>
                <td>Gecko</td>
                <td>.mp4</td>
                <td>4 mb</td>
                <td>1.8</td>
                <td>
                <div class="btn-group pull-right" role="group" aria-label="...">
                  <a href="#" class="btn btn-default btn-xs"><i class="fa fa-eye"></i></a>
                  <a href="#" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a>
                  <a href="#" class="btn btn-default btn-xs"><i class="fa fa-remove"></i></a>
                </div>
              </td>
              </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->

        <div class="row no-print">
          <div class="col-xs-12">

            <a href='register' class="button special pull-right"><i class="fa fa-check-square-o"></i> Lanjut
            </a>
            <a href='#' class="button alt pull-right" style="margin-right: 5px;">
              <i class="fa fa-exclamation-triangle"></i> Batal
            </a>
          </div>
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
<!-- DataTables -->
<script src="{{ asset('vendor/core/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('vendor/core/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{ asset('vendor/core/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('vendor/core/fastclick/lib/fastclick.js')}}"></script>

<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

@endsection

