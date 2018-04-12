@extends('elapdu.operator.template')

@section('title', 'JAMWAS')

@section('judulhalaman', 'Tahap Usulan Hukuman Disiplin')

@section('subjudul', 'PENGADUAN MASYARAKAT / WHISTLE BLOWER')

@section('stylesheets')
  <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
@endsection

@section('content')

<!-- START CUSTOM TABS -->

<div class="row">
  <div class="col-md-12">
    <!-- Custom Tabs -->
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab"><span class="badge bg-yellow pull-right">10</span> BARU&nbsp;</a></li>
        <li><a href="#tab_2" data-toggle="tab"><span class="badge bg-green pull-right">7</span>LANJUTAN INSPEKTUR&nbsp;</a></li>

        <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab_1">
          <div class="box-header">
                    <h3 class="box-title">DAFTAR USULAN HUKUMAN BARU</h3>

                    <div class="box-tools">
                      <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                        <div class="input-group-btn">
                          <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th width="15%">Terlapor</th>
                            <th width="15%">Jabatan</th>
                            <th>Uraian Singkat Perbuatan</th>
                            <th>Proses Oleh</th>
                            <th width="10%">Tindakan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                            <td>[Jabatan]<br>[Satker]</td>
                            <td>
                              <strong>KESIMPULAN </strong><small>[WAS-15]</small> : Asperiores velit quis nostrum blanditiis, aliquid voluptatibus, accusantium iste quos, quod et ab sed. Iure labore ducimus nobis, a hic in, ut. <br>
                              <strong>Pasal yang dilanggar: </strong> [Pasal, Angka, Huruf], [Peraturan / UU]
                            </td>
                            <td>JAMWAS</td>
                            <td>
                              <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                                <a href="usulan_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                                <a href="#" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                                <a href="usulan_disposisi" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                            <td>[Jabatan]<br>[Satker]</td>
                            <td>
                              <strong>KESIMPULAN </strong><small>[WAS-15]</small> : Odio vero ullam, ad dicta cum aperiam vitae voluptatum. Tempora quas minima mollitia quae esse, ipsa tenetur ipsum? Dolorum velit tempore, illum! <br>
                              <strong>Pasal yang dilanggar: </strong> [Pasal, Angka, Huruf], [Peraturan / UU]
                            </td>
                            <td>SESJAMWAS</td>
                            <td>
                              <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                                <a href="usulan_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                                <a href="#" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                                <a href="usulan_disposisi" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                            <td>[Jabatan]<br>[Satker]</td>
                            <td>
                              <strong>KESIMPULAN </strong><small>[WAS-15]</small> : Beatae officia ratione in, ut dolorem ipsa, autem libero, accusantium a optio, sequi. Ea, sit consequuntur mollitia dolor libero voluptatum eveniet dolorum. <br>
                              <strong>Pasal yang dilanggar: </strong> [Pasal, Angka, Huruf], [Peraturan / UU]
                            </td>
                            <td>INSPEKTUR</td>
                            <td>
                              <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                                <a href="usulan_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                                <a href="#" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                                <a href="usulan_disposisi" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                            <td>[Jabatan]<br>[Satker]</td>
                            <td>
                              <strong>KESIMPULAN </strong><small>[WAS-15]</small> : Earum dolores dolor aut, perferendis ab laborum labore at, commodi, magni ratione nulla explicabo porro ipsam deserunt fuga officia doloribus tempore soluta! <br>
                              <strong>Pasal yang dilanggar: </strong> [Pasal, Angka, Huruf], [Peraturan / UU]
                            </td>
                            <td>IRMUD</td>
                            <td>
                              <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                                <a href="usulan_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                                <a href="#" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                                <a href="usulan_disposisi" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                            <td>[Jabatan]<br>[Satker]</td>
                            <td>
                              <strong>KESIMPULAN </strong><small>[WAS-15]</small> : Beatae consectetur tenetur nihil minus veritatis, minima nisi aperiam voluptas impedit earum aspernatur libero iure obcaecati reprehenderit sequi soluta rem sapiente nemo. <br>
                              <strong>Pasal yang dilanggar: </strong> [Pasal, Angka, Huruf], [Peraturan / UU]
                            </td>
                            <td>RIKSA</td>
                            <td>
                              <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                                <a href="usulan_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                                <a href="#" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                                <a href="usulan_disposisi" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                            <td>[Jabatan]<br>[Satker]</td>
                            <td>
                              <strong>KESIMPULAN </strong><small>[WAS-15]</small> : Est doloribus at repudiandae voluptas suscipit pariatur quas deserunt autem consequuntur, fugiat nulla voluptatem ad. Optio ipsa iusto quaerat ipsum! Quam, voluptatem? <br>
                              <strong>Pasal yang dilanggar: </strong> [Pasal, Angka, Huruf], [Peraturan / UU]
                            </td>
                            <td>JAMWAS</td>
                            <td>
                              <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                                <a href="usulan_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                                <a href="#" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                                <a href="usulan_disposisi" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                            <td>[Jabatan]<br>[Satker]</td>
                            <td>
                              <strong>KESIMPULAN </strong><small>[WAS-15]</small> : Perspiciatis quod, sequi, quaerat vero explicabo quidem error nam, illo nihil dolore, unde qui est iusto recusandae numquam ipsa consequatur deleniti porro. <br>
                              <strong>Pasal yang dilanggar: </strong> [Pasal, Angka, Huruf], [Peraturan / UU]
                            </td>
                            <td>SESJAMWAS</td>
                            <td>
                              <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                                <a href="usulan_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                                <a href="#" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                                <a href="usulan_disposisi" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                            <td>[Jabatan]<br>[Satker]</td>
                            <td>
                              <strong>KESIMPULAN </strong><small>[WAS-15]</small> : Dolore vel earum quis quae. Veniam ex fuga unde recusandae animi aut atque totam quod consequatur impedit ullam natus, minima, nobis accusamus. <br>
                              <strong>Pasal yang dilanggar: </strong> [Pasal, Angka, Huruf], [Peraturan / UU]
                            </td>
                            <td>JAMWAS</td>
                            <td>
                              <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                                <a href="usulan_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                                <a href="#" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                                <a href="usulan_disposisi" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                            <td>[Jabatan]<br>[Satker]</td>
                            <td>
                              <strong>KESIMPULAN </strong><small>[WAS-15]</small> : Odit a quas accusantium ea beatae. Quia fuga ut laboriosam, rem possimus distinctio veniam! Laboriosam necessitatibus neque, quos nobis officiis magnam a. <br>
                              <strong>Pasal yang dilanggar: </strong> [Pasal, Angka, Huruf], [Peraturan / UU]
                            </td>
                            <td>INSPEKTUR</td>
                            <td>
                              <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                                <a href="usulan_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                                <a href="#" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                                <a href="usulan_disposisi" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                            <td>[Jabatan]<br>[Satker]</td>
                            <td>
                              <strong>KESIMPULAN </strong><small>[WAS-15]</small> : Quam dolores similique nam iste voluptatem, voluptate fugiat. Nam atque aperiam quasi molestias architecto enim odit, deserunt accusantium ipsam delectus repudiandae facilis. <br>
                              <strong>Pasal yang dilanggar: </strong> [Pasal, Angka, Huruf], [Peraturan / UU]
                            </td>
                            <td>IRMUD</td>
                            <td>
                              <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                                <a href="usulan_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                                <a href="#" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                                <a href="usulan_disposisi" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>Terlapor</th>
                            <th>Jabatan</th>
                            <th>Uraian Singkat Perbuatan</th>
                            <th>Proses</th>
                            <th>Tindakan</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                      <!-- Date and time range -->
                      <div class="form-group">

                        <div class="input-group">
                          <button type="button" class="btn btn-default btn-sm pull-right" id="daterange-btn">
                            <span>
                              <i class="fa fa-calendar"></i> Filter tanggal laporan
                            </span>
                            <i class="fa fa-caret-down"></i>
                          </button>
                        </div>
                      </div>
                      <!-- /.form group -->
                    </div>
                    <!-- /.box-footer-->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    <div class="box-header">
                      <h3 class="box-title">TAHAP USULAN HUKUMAN LANJUTAN</h3>

                      <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                          <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th width="15%">Terlapor</th>
                            <th width="15%">Jabatan</th>
                            <th>Uraian Singkat Perbuatan</th>
                            <th>Proses Oleh</th>
                            <th width="10%">Tindakan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                            <td>[Jabatan]<br>[Satker]</td>
                            <td>
                              <strong>KESIMPULAN </strong><small>[WAS-15]</small> : Earum dolores dolor aut, perferendis ab laborum labore at, commodi, magni ratione nulla explicabo porro ipsam deserunt fuga officia doloribus tempore soluta! <br>
                              <strong>Pasal yang dilanggar: </strong> [Pasal, Angka, Huruf], [Peraturan / UU]
                            </td>
                            <td>IRMUD</td>
                            <td>
                              <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                                <a href="usulan_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                                <a href="#" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                                <a href="usulan_disposisi" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                            <td>[Jabatan]<br>[Satker]</td>
                            <td>
                              <strong>KESIMPULAN </strong><small>[WAS-15]</small> : Beatae consectetur tenetur nihil minus veritatis, minima nisi aperiam voluptas impedit earum aspernatur libero iure obcaecati reprehenderit sequi soluta rem sapiente nemo. <br>
                              <strong>Pasal yang dilanggar: </strong> [Pasal, Angka, Huruf], [Peraturan / UU]
                            </td>
                            <td>RIKSA</td>
                            <td>
                              <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                                <a href="usulan_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                                <a href="#" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                                <a href="usulan_disposisi" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                            <td>[Jabatan]<br>[Satker]</td>
                            <td>
                              <strong>KESIMPULAN </strong><small>[WAS-15]</small> : Est doloribus at repudiandae voluptas suscipit pariatur quas deserunt autem consequuntur, fugiat nulla voluptatem ad. Optio ipsa iusto quaerat ipsum! Quam, voluptatem? <br>
                              <strong>Pasal yang dilanggar: </strong> [Pasal, Angka, Huruf], [Peraturan / UU]
                            </td>
                            <td>JAMWAS</td>
                            <td>
                              <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                                <a href="usulan_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                                <a href="#" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                                <a href="usulan_disposisi" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                            <td>[Jabatan]<br>[Satker]</td>
                            <td>
                              <strong>KESIMPULAN </strong><small>[WAS-15]</small> : Perspiciatis quod, sequi, quaerat vero explicabo quidem error nam, illo nihil dolore, unde qui est iusto recusandae numquam ipsa consequatur deleniti porro. <br>
                              <strong>Pasal yang dilanggar: </strong> [Pasal, Angka, Huruf], [Peraturan / UU]
                            </td>
                            <td>SESJAMWAS</td>
                            <td>
                              <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                                <a href="usulan_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                                <a href="#" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                                <a href="usulan_disposisi" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                          <td>[Jabatan]<br>[Satker]</td>
                          <td>
                            <strong>KESIMPULAN </strong><small>[WAS-15]</small> : Dolore vel earum quis quae. Veniam ex fuga unde recusandae animi aut atque totam quod consequatur impedit ullam natus, minima, nobis accusamus. <br>
                            <strong>Pasal yang dilanggar: </strong> [Pasal, Angka, Huruf], [Peraturan / UU]
                          </td>
                          <td>JAMWAS</td>
                          <td>
                            <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                              <a href="usulan_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                              <a href="#" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                              <a href="usulan_disposisi" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                            <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                        <td>[Jabatan]<br>[Satker]</td>
                        <td>
                          <strong>KESIMPULAN </strong><small>[WAS-15]</small> : Odit a quas accusantium ea beatae. Quia fuga ut laboriosam, rem possimus distinctio veniam! Laboriosam necessitatibus neque, quos nobis officiis magnam a. <br>
                          <strong>Pasal yang dilanggar: </strong> [Pasal, Angka, Huruf], [Peraturan / UU]
                        </td>
                        <td>INSPEKTUR</td>
                        <td>
                          <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                            <a href="usulan_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                            <a href="#" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                            <a href="usulan_disposisi" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                            <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                      <td>[Jabatan]<br>[Satker]</td>
                      <td>
                        <strong>KESIMPULAN </strong><small>[WAS-15]</small> : Quam dolores similique nam iste voluptatem, voluptate fugiat. Nam atque aperiam quasi molestias architecto enim odit, deserunt accusantium ipsam delectus repudiandae facilis. <br>
                        <strong>Pasal yang dilanggar: </strong> [Pasal, Angka, Huruf], [Peraturan / UU]
                      </td>
                      <td>IRMUD</td>
                      <td>
                        <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                          <a href="usulan_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                          <a href="#" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                          <a href="usulan_disposisi" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Terlapor</th>
                      <th>Jabatan</th>
                      <th>Uraian Singkat Perbuatan</th>
                      <th>Proses</th>
                      <th>Tindakan</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <!-- Date and time range -->
                  <div class="form-group">

                    <div class="input-group">
                      <button type="button" class="btn btn-default btn-sm pull-right" id="daterange-btn2">
                        <span>
                          <i class="fa fa-calendar"></i> Filter tanggal laporan
                        </span>
                        <i class="fa fa-caret-down"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.form group -->
              </div>
              <!-- /.box-footer-->
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
<!-- END CUSTOM TABS -->
  


@endsection

@section('scripts')
<!-- date-range-picker -->
<script src="{{ asset('/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{ asset('/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

  <script>
      $(function () {
        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'DD/MM/YYYY h:mm A' })
        //Date range as a button
        $('#daterange-btn').daterangepicker(
          {
            ranges   : {
              'Hari ini'       : [moment(), moment()],
              'Kemarin'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
              '7 hari terakhir' : [moment().subtract(6, 'days'), moment()],
              '30  hari terakhir': [moment().subtract(29, 'days'), moment()],
              'Bulan ini'  : [moment().startOf('month'), moment().endOf('month')],
              'Bulan Kemarin'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate  : moment()
          },
          function (start, end) {
            $('#daterange-btn span').html(start.format('D MMMM, YYYY') + ' - ' + end.format('D MMMM, YYYY'))
          }
        )
        //Date range as a button
        $('#daterange-btn2').daterangepicker(
          {
            ranges   : {
              'Hari ini'       : [moment(), moment()],
              'Kemarin'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
              '7 hari terakhir' : [moment().subtract(6, 'days'), moment()],
              '30  hari terakhir': [moment().subtract(29, 'days'), moment()],
              'Bulan ini'  : [moment().startOf('month'), moment().endOf('month')],
              'Bulan Kemarin'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate  : moment()
          },
          function (start, end) {
            $('#daterange-btn2 span').html(start.format('D MMMM, YYYY') + ' - ' + end.format('D MMMM, YYYY'))
          }
        )

        //Date picker
        $('#datepicker').datepicker({
          autoclose: true
        })

      })
    </script>
@endsection

