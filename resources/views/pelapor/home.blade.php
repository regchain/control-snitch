@extends('lapdu::pelapor.template')

@section('title', 'Pelapor')

@section('judulhalaman', 'J.A.M. PENGAWASAN')

@section('subjudul', 'Kejaksan Agung R.I')

@section('stylesheets')
@endsection

@section('content')

<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h2 class="box-title">HALAMAN PELAPOR</h2>
    </div>

    <div class="row">
        <div class="col-md-12">
            <!-- Custom Tabs (Pulled to the right) -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                    <li class="active"><a href="#tab_1-1" data-toggle="tab"><i class="fa fa-2x fa-home"></i></a></li>
                    <li><a href="#tab_2-2" data-toggle="tab"><i class="fa fa-fw fa-database"></i> Data Penunjang</a></li>
                    <li><a href="#tab_3-2" data-toggle="tab"><i class="fa fa-fw fa-gear"></i> Ubah Profil</a></li>
                    <li class="pull-left header"><i class="fa fa-bullhorn"></i> Laporan Pengaduan</li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1-1">
                        <div class="row">
                            <div class="box-body">
                                @include('lapdu::pelapor.partials.progress')
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.row-box-body -->
                    </div>

                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2-2">
                        <div class="box-body">
                            <div class="col-xs-12">
                                <div class="input-group margin">
                                    <input class="form-control" type="text">

                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-info btn-flat">Unggah!</button>
                                    </span>
                                </div>

                                <p>&nbsp;&nbsp;&nbsp;<code>&nbsp;* Jenis data yang dapat diunggah: .doc .docx .jpg .png .mp4 .mp3</code></p>
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="col-xs-12">
                                <div class="box-header">
                                    <h3 class="box-title">List Data Penunjang</h3>
                                </div>
                                <!-- /.box-header -->

                                <div class="box-body">
                                    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                        <div class="row">
                                            <div class="col-sm-6"></div>
                                            <div class="col-sm-6"></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="example2" class="table table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="example2_info">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nama File: activate to sort column descending" width="30%">Nama File</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Jenis: activate to sort column ascending">Jenis</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Kapasitas: activate to sort column ascending">Kapasitas</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Keterangan: activate to sort column ascending" width="30%">Keterangan</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Tindakan: activate to sort column ascending">Tindakan</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">Gecko</td>
                                                            <td>.docx</td>
                                                            <td>76 kb</td>
                                                            <td>1.8</td>
                                                            <td>
                                                            <div class="btn-group pull-right" role="group" aria-label="...">
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-eye"></i></a>
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-edit"></i></a>
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-remove"></i></a>
                                                            </div>
                                                        </td>
                                                        </tr><tr role="row" class="even">
                                                            <td class="sorting_1">Gecko</td>
                                                            <td>.docx</td>
                                                            <td>76 kb</td>
                                                            <td>1.9</td>
                                                            <td>
                                                            <div class="btn-group pull-right" role="group" aria-label="...">
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-eye"></i></a>
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-edit"></i></a>
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-remove"></i></a>
                                                            </div>
                                                        </td>
                                                        </tr><tr role="row" class="odd">
                                                            <td class="sorting_1">Gecko</td>
                                                            <td>.mp4</td>
                                                            <td>6 mb</td>
                                                            <td>1.8</td>
                                                            <td>
                                                            <div class="btn-group pull-right" role="group" aria-label="...">
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-eye"></i></a>
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-edit"></i></a>
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-remove"></i></a>
                                                            </div>
                                                        </td>
                                                        </tr><tr role="row" class="even">
                                                            <td class="sorting_1">Gecko</td>
                                                            <td>.mp4</td>
                                                            <td>4 mb</td>
                                                            <td>1.8</td>
                                                            <td>
                                                            <div class="btn-group pull-right" role="group" aria-label="...">
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-eye"></i></a>
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-edit"></i></a>
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-remove"></i></a>
                                                            </div>
                                                        </td>
                                                        </tr><tr role="row" class="odd">
                                                            <td class="sorting_1">Trident</td>
                                                            <td>.jpg
                                                            </td>
                                                            <td>3 mb </td>
                                                            <td> 4</td>
                                                            <td>
                                                            <div class="btn-group pull-right" role="group" aria-label="...">
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-eye"></i></a>
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-edit"></i></a>
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-remove"></i></a>
                                                            </div>
                                                        </td>
                                                        </tr><tr role="row" class="even">
                                                            <td class="sorting_1">Trident</td>
                                                            <td>.jpg
                                                            </td>
                                                            <td>3 mb </td>
                                                            <td>5</td>
                                                            <td>
                                                            <div class="btn-group pull-right" role="group" aria-label="...">
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-eye"></i></a>
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-edit"></i></a>
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-remove"></i></a>
                                                            </div>
                                                        </td>
                                                        </tr><tr role="row" class="odd">
                                                            <td class="sorting_1">Trident</td>
                                                            <td>.jpg
                                                            </td>
                                                            <td>3 mb </td>
                                                            <td>5.5</td>
                                                            <td>
                                                            <div class="btn-group pull-right" role="group" aria-label="...">
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-eye"></i></a>
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-edit"></i></a>
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-remove"></i></a>
                                                            </div>
                                                        </td>
                                                        </tr><tr role="row" class="even">
                                                            <td class="sorting_1">Trident</td>
                                                            <td>.jpg
                                                            </td>
                                                            <td>9 mb</td>
                                                            <td>6</td>
                                                            <td>
                                                            <div class="btn-group pull-right" role="group" aria-label="...">
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-eye"></i></a>
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-edit"></i></a>
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-remove"></i></a>
                                                            </div>
                                                        </td>
                                                        </tr><tr role="row" class="odd">
                                                            <td class="sorting_1">Trident</td>
                                                            <td>.mp3</td>
                                                            <td>800 kb</td>
                                                            <td>7</td>
                                                            <td>
                                                            <div class="btn-group pull-right" role="group" aria-label="...">
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-eye"></i></a>
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-edit"></i></a>
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-remove"></i></a>
                                                            </div>
                                                        </td>
                                                        </tr><tr role="row" class="even">
                                                            <td class="sorting_1">Trident</td>
                                                            <td>.mp3</td>
                                                            <td>800 kb</td>
                                                            <td>6</td>
                                                            <td>
                                                            <div class="btn-group pull-right" role="group" aria-label="...">
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-eye"></i></a>
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-edit"></i></a>
                                                            <a href="#" class="btn btn-default bt-xs"><i class="fa fa-remove"></i></a>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-5">
                                                <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 10 entries</div>
                                            </div>

                                            <div class="col-sm-7">
                                                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button previous disabled" id="example2_previous">
                                                            <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a>
                                                        </li>

                                                        <li class="paginate_button active">
                                                            <a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">
                                                                1
                                                            </a>
                                                        </li>

                                                        <li class="paginate_button next disabled" id="example2_next">
                                                            <a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">
                                                                Next
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>

                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3-2">
                        <div class="row">
                        <div class="box-body">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <label>Nama Lengkap</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="email" class="form-control">
                            </div>
                            <label>Organisasi</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                <input type="email" class="form-control">
                            </div>
                            <label>Kontak</label>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-id-badge"></i>
                                    </div>
                                    <input type="text" class="form-control" placeholder="HP..."
                                    data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Telpon..."
                                    data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input class="form-control" placeholder="email ..." name="kontak_email" type="text">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">

                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" placeholder="Jalan / Gg. ..." name="alamat" cols="0" rows="3"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label>Kode Pos</label>
                                    <input class="form-control" name="kodepos" type="text">
                                </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                <!-- Kota -->
                                <div class="form-group">
                                    <label>Kota</label>
                                    <input class="form-control" name="kota" type="text">
                                </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label>Propinsi</label>
                                    <input class="form-control" name="propinsi" type="text">
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.row-box-body -->
                        </div>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

{{-- <div class="row">
  <div class="box-body">
    <div class="col-xs-12">Row Box 1</div>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.row-box-body --> --}}

{{-- <div class="box-footer">
  Footer
</div>
 /.box-footer
</div>
<!-- /.box --> --}}
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

