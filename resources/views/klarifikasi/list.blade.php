@extends('elapdu.operator.template')

@section('title', 'JAMWAS')

@section('judulhalaman', 'Tahap Klarifikasi')

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
            <h3 class="box-title">TAHAP KLARIFIKASI BARU</h3>

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
                  <th>Perihal</th>
                  <th>Proses</th>
                  <th width="10%">Tindakan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                  <td>[Jabatan]<br>[Satker]</td>
                  <td><strong>Dilaporkan oleh:</strong> [Nama Pelapor], [Organisasi] <br><strong>Perihal: </strong>Asperiores velit quis nostrum blanditiis, aliquid voluptatibus, accusantium iste quos, quod et ab sed. Iure labore ducimus nobis, a hic in, ut.</td>
                  <td>JAMWAS</td>
                  <td>
                    <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                      <a href="klarifikasi_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                      <a href="klarifikasi_edit" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                      <a href="klarifikasi_proses" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                  <td>[Jabatan]<br>[Satker]</td>
                  <td><strong>Dilaporkan oleh:</strong> [Nama Pelapor], [Organisasi] <br><strong>Perihal: </strong>Odio vero ullam, ad dicta cum aperiam vitae voluptatum. Tempora quas minima mollitia quae esse, ipsa tenetur ipsum? Dolorum velit tempore, illum!</td>
                  <td>SESJAMWAS</td>
                  <td>
                    <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                      <a href="klarifikasi_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                      <a href="klarifikasi_edit" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                      <a href="klarifikasi_proses" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                  <td>[Jabatan]<br>[Satker]</td>
                  <td><strong>Dilaporkan oleh:</strong> [Nama Pelapor], [Organisasi] <br><strong>Perihal: </strong>Beatae officia ratione in, ut dolorem ipsa, autem libero, accusantium a optio, sequi. Ea, sit consequuntur mollitia dolor libero voluptatum eveniet dolorum.</td>
                  <td>INSPEKTUR</td>
                  <td>
                    <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                      <a href="klarifikasi_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                      <a href="klarifikasi_edit" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                      <a href="klarifikasi_proses" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                  <td>[Jabatan]<br>[Satker]</td>
                  <td><strong>Dilaporkan oleh:</strong> [Nama Pelapor], [Organisasi] <br><strong>Perihal: </strong>Earum dolores dolor aut, perferendis ab laborum labore at, commodi, magni ratione nulla explicabo porro ipsam deserunt fuga officia doloribus tempore soluta!</td>
                  <td>IRMUD</td>
                  <td>
                    <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                      <a href="klarifikasi_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                      <a href="klarifikasi_edit" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                      <a href="klarifikasi_proses" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                  <td>[Jabatan]<br>[Satker]</td>
                  <td><strong>Dilaporkan oleh:</strong> [Nama Pelapor], [Organisasi] <br><strong>Perihal: </strong>Beatae consectetur tenetur nihil minus veritatis, minima nisi aperiam voluptas impedit earum aspernatur libero iure obcaecati reprehenderit sequi soluta rem sapiente nemo.</td>
                  <td>RIKSA</td>
                  <td>
                    <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                      <a href="klarifikasi_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                      <a href="klarifikasi_edit" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                      <a href="klarifikasi_proses" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                  <td>[Jabatan]<br>[Satker]</td>
                  <td><strong>Dilaporkan oleh:</strong> [Nama Pelapor], [Organisasi] <br><strong>Perihal: </strong>Est doloribus at repudiandae voluptas suscipit pariatur quas deserunt autem consequuntur, fugiat nulla voluptatem ad. Optio ipsa iusto quaerat ipsum! Quam, voluptatem?</td>
                  <td>JAMWAS</td>
                  <td>
                    <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                      <a href="klarifikasi_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                      <a href="klarifikasi_edit" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                      <a href="klarifikasi_proses" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                  <td>[Jabatan]<br>[Satker]</td>
                  <td><strong>Dilaporkan oleh:</strong> [Nama Pelapor], [Organisasi] <br><strong>Perihal: </strong>Perspiciatis quod, sequi, quaerat vero explicabo quidem error nam, illo nihil dolore, unde qui est iusto recusandae numquam ipsa consequatur deleniti porro.</td>
                  <td>SESJAMWAS</td>
                  <td>
                    <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                      <a href="klarifikasi_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                      <a href="klarifikasi_edit" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                      <a href="klarifikasi_proses" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                  <td>[Jabatan]<br>[Satker]</td>
                  <td><strong>Dilaporkan oleh:</strong> [Nama Pelapor], [Organisasi] <br><strong>Perihal: </strong>Dolore vel earum quis quae. Veniam ex fuga unde recusandae animi aut atque totam quod consequatur impedit ullam natus, minima, nobis accusamus.</td>
                  <td>JAMWAS</td>
                  <td>
                    <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                      <a href="klarifikasi_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                      <a href="klarifikasi_edit" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                      <a href="klarifikasi_proses" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                  <td>[Jabatan]<br>[Satker]</td>
                  <td><strong>Dilaporkan oleh:</strong> [Nama Pelapor], [Organisasi] <br><strong>Perihal: </strong>Odit a quas accusantium ea beatae. Quia fuga ut laboriosam, rem possimus distinctio veniam! Laboriosam necessitatibus neque, quos nobis officiis magnam a.</td>
                  <td>INSPEKTUR</td>
                  <td>
                    <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                      <a href="klarifikasi_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                      <a href="klarifikasi_edit" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                      <a href="klarifikasi_proses" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                  <td>[Jabatan]<br>[Satker]</td>
                  <td><strong>Dilaporkan oleh:</strong> [Nama Pelapor], [Organisasi] <br><strong>Perihal: </strong>Quam dolores similique nam iste voluptatem, voluptate fugiat. Nam atque aperiam quasi molestias architecto enim odit, deserunt accusantium ipsam delectus repudiandae facilis.</td>
                  <td>IRMUD</td>
                  <td>
                    <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                      <a href="klarifikasi_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                      <a href="klarifikasi_edit" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                      <a href="klarifikasi_proses" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                    </div>
                  </td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th>Terlapor</th>
                  <th>Jabatan</th>
                  <th>Perihal</th>
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
            <h3 class="box-title">TAHAP KLARIFIKASI LANJUTAN</h3>

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
                  <th>Perihal</th>
                  <th>Proses</th>
                  <th width="10%">Tindakan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                  <td>[Jabatan]<br>[Satker]</td>
                  <td><strong>Dilaporkan oleh:</strong> [Nama Pelapor], [Organisasi] <br><strong>Perihal: </strong>Earum dolores dolor aut, perferendis ab laborum labore at, commodi, magni ratione nulla explicabo porro ipsam deserunt fuga officia doloribus tempore soluta!</td>
                  <td>IRMUD</td>
                  <td>
                    <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                      <a href="klarifikasi_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                      <a href="klarifikasi_edit" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                      <a href="klarifikasi_proses" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                  <td>[Jabatan]<br>[Satker]</td>
                  <td><strong>Dilaporkan oleh:</strong> [Nama Pelapor], [Organisasi] <br><strong>Perihal: </strong>Beatae consectetur tenetur nihil minus veritatis, minima nisi aperiam voluptas impedit earum aspernatur libero iure obcaecati reprehenderit sequi soluta rem sapiente nemo.</td>
                  <td>RIKSA</td>
                  <td>
                    <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                      <a href="klarifikasi_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                      <a href="klarifikasi_edit" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                      <a href="klarifikasi_proses" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                  <td>[Jabatan]<br>[Satker]</td>
                  <td><strong>Dilaporkan oleh:</strong> [Nama Pelapor], [Organisasi] <br><strong>Perihal: </strong>Est doloribus at repudiandae voluptas suscipit pariatur quas deserunt autem consequuntur, fugiat nulla voluptatem ad. Optio ipsa iusto quaerat ipsum! Quam, voluptatem?</td>
                  <td>JAMWAS</td>
                  <td>
                    <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                      <a href="klarifikasi_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                      <a href="klarifikasi_edit" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                      <a href="klarifikasi_proses" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                  <td>[Jabatan]<br>[Satker]</td>
                  <td><strong>Dilaporkan oleh:</strong> [Nama Pelapor], [Organisasi] <br><strong>Perihal: </strong>Perspiciatis quod, sequi, quaerat vero explicabo quidem error nam, illo nihil dolore, unde qui est iusto recusandae numquam ipsa consequatur deleniti porro.</td>
                  <td>SESJAMWAS</td>
                  <td>
                    <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                      <a href="klarifikasi_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                      <a href="klarifikasi_edit" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                      <a href="klarifikasi_proses" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                  <td>[Jabatan]<br>[Satker]</td>
                  <td><strong>Dilaporkan oleh:</strong> [Nama Pelapor], [Organisasi] <br><strong>Perihal: </strong>Dolore vel earum quis quae. Veniam ex fuga unde recusandae animi aut atque totam quod consequatur impedit ullam natus, minima, nobis accusamus.</td>
                  <td>JAMWAS</td>
                  <td>
                    <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                      <a href="klarifikasi_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                      <a href="klarifikasi_edit" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                      <a href="klarifikasi_proses" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                  <td>[Jabatan]<br>[Satker]</td>
                  <td><strong>Dilaporkan oleh:</strong> [Nama Pelapor], [Organisasi] <br><strong>Perihal: </strong>Odit a quas accusantium ea beatae. Quia fuga ut laboriosam, rem possimus distinctio veniam! Laboriosam necessitatibus neque, quos nobis officiis magnam a.</td>
                  <td>INSPEKTUR</td>
                  <td>
                    <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                      <a href="klarifikasi_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                      <a href="klarifikasi_edit" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                      <a href="klarifikasi_proses" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>[Nama Lengkap]<br>[Pangkat] [Golongan]<br>[NIP] | [NRP]<br></td>
                  <td>[Jabatan]<br>[Satker]</td>
                  <td><strong>Dilaporkan oleh:</strong> [Nama Pelapor], [Organisasi] <br><strong>Perihal: </strong>Quam dolores similique nam iste voluptatem, voluptate fugiat. Nam atque aperiam quasi molestias architecto enim odit, deserunt accusantium ipsam delectus repudiandae facilis.</td>
                  <td>IRMUD</td>
                  <td>
                    <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                      <a href="klarifikasi_view" class="btn btn-default"><i class="fa fa-eye"></i> Lihat Detil</a>
                      <a href="klarifikasi_edit" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>
                      <a href="klarifikasi_proses" class="btn btn-default"><i class="fa fa-mail-forward"></i> Tindak Lanjut</a>
                    </div>
                  </td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th>Terlapor</th>
                  <th>Jabatan</th>
                  <th>Perihal</th>
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
            <h3 class="box-title">TAHAP KLARIFIKASI LANJUTAN</h3>

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
            <table class="table table-hover">
              <tr>
                <th>ID</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Terlapor</th>
                <th>Perihal</th>
                <th>Tindakan</th>
              </tr>
              <tr>
                <td>183</td>
                <td>11-7-2014</td>
                <td><span class="label label-success">Approved</span></td>
                <td>John Doe</td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                <td>
                  <div class="btn-group btn-xs">
                    <button type="button" class="btn btn-default btn-xs">Penyelesaian</button>
                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Teruskan</a></li>
                      <li><a href="#">Alihkan</a></li>
                      <li><a href="#">Lain-lain</a></li>
                    </ul>
                  </div>
                </td>
              </tr>
              <tr>
                <td>219</td>
                <td>11-7-2014</td>
                <td><span class="label label-warning">Pending</span></td>
                <td>Alexander Pierce</td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                <td>
                  <div class="btn-group btn-xs">
                    <button type="button" class="btn btn-default btn-xs">Penyelesaian</button>
                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Teruskan</a></li>
                      <li><a href="#">Alihkan</a></li>
                      <li><a href="#">Lain-lain</a></li>
                    </ul>
                  </div>
                </td>
              </tr>
              <tr>
                <td>657</td>
                <td>11-7-2014</td>
                <td><span class="label label-success">Approved</span></td>
                <td>Bob Doe</td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                <td>
                  <div class="btn-group btn-xs">
                    <button type="button" class="btn btn-default btn-xs">Penyelesaian</button>
                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Teruskan</a></li>
                      <li><a href="#">Alihkan</a></li>
                      <li><a href="#">Lain-lain</a></li>
                    </ul>
                  </div>
                </td>
              </tr>
              <tr>
                <td>175</td>
                <td>11-7-2014</td>
                <td><span class="label label-danger">Denied</span></td>
                <td>Mike Doe</td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                <td>
                  <div class="btn-group btn-xs">
                    <button type="button" class="btn btn-default btn-xs">Penyelesaian</button>
                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Teruskan</a></li>
                      <li><a href="#">Alihkan</a></li>
                      <li><a href="#">Lain-lain</a></li>
                    </ul>
                  </div>
                </td>
              </tr>
              <tr>
                <td>183</td>
                <td>11-7-2014</td>
                <td><span class="label label-success">Approved</span></td>
                <td>John Doe</td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                <td>
                  <div class="btn-group btn-xs">
                    <button type="button" class="btn btn-default btn-xs">Penyelesaian</button>
                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Teruskan</a></li>
                      <li><a href="#">Alihkan</a></li>
                      <li><a href="#">Lain-lain</a></li>
                    </ul>
                  </div>
                </td>
              </tr>
              <tr>
                <td>219</td>
                <td>11-7-2014</td>
                <td><span class="label label-warning">Pending</span></td>
                <td>Alexander Pierce</td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                <td>
                  <div class="btn-group btn-xs">
                    <button type="button" class="btn btn-default btn-xs">Penyelesaian</button>
                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Teruskan</a></li>
                      <li><a href="#">Alihkan</a></li>
                      <li><a href="#">Lain-lain</a></li>
                    </ul>
                  </div>
                </td>
              </tr>
              <tr>
                <td>657</td>
                <td>11-7-2014</td>
                <td><span class="label label-success">Approved</span></td>
                <td>Bob Doe</td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                <td>
                  <div class="btn-group btn-xs">
                    <button type="button" class="btn btn-default btn-xs">Penyelesaian</button>
                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Teruskan</a></li>
                      <li><a href="#">Alihkan</a></li>
                      <li><a href="#">Lain-lain</a></li>
                    </ul>
                  </div>
                </td>
              </tr>
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

