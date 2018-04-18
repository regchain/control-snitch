@extends('control-snitch::templates.alpha.templatealt')

@section('title', 'Data Pelapor')

@section('judulhalaman', 'KEJAKSAAN AGUNG')

@section('subjudul', 'REPUBLIK INDONESIA')

@section('stylesheets')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('vendor/core/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="row">
            <div class="box-tools pull-right text-blue">
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                Data Terlapor
            </div>

            <h4 class="box-title">DATA PELAPOR</h4>

            <div class="box-body">
                <div class="col-xs-12">
                    <div class="progress">
                    <div class="progress-bar progress-bar-primary progress-bar-striped progress-sm" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%">
                        <span class="sr-only">5% Complete (success)</span>
                    </div>
                    </div>
                    <pre class="text-justify"><code>Masukkan identitas anda sebagai pelapor (Kerahasiaan data terjamin) Anda tidak perlu khawatir terungkapnya identitas diri anda karena kami akan MERAHASIAKAN IDENTITAS DIRI ANDA sebagai whistleblower. JAKSA AGUNG MUDA BIDANG PENGAWASAN menghargai informasi yang Anda laporkan. Fokus kami kepada materi informasi yang Anda Laporkan.</code></pre>
                </div>

                <form action="" method="POST" id="pelapor-form">
                    <input type="hidden" name="id" value="{{ $data->_id }}">

                    <div class="col-md-6 col-sm-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
                        </div>

                        <br>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" name="birthday" class="form-control" placeholder="Tanggal Lahir" id="tgllahir">
                            </div>
                            <!-- /.input group -->
                        </div><!-- /date -->
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
                            <input type="text" name="job" class="form-control" placeholder="Pekerjaan">
                        </div>

                        <br>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users"></i></span>
                            <input type="text" name="organization" class="form-control" placeholder="Organisasi">
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-id-badge"></i>
                                        </div>

                                        <input type="text" name="handphone" class="form-control" placeholder="HP..."
                                        data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </div>

                                        <input type="text" name="phone" class="form-control" placeholder="Telpon..."
                                        data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>

                                        <input type="email" name="email" class="form-control" placeholder="email ...">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label></label>
                            <textarea class="form-control" placeholder="Alamat lengkap : Jalan / Gg. ..." name="address" cols="0" rows="3"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label></label>
                                    <input class="form-control" name="zipcode" type="text" placeholder="Kode Pos">
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <!-- Kota -->
                                <div class="form-group">
                                    <label></label>
                                    <input class="form-control" name="city" type="text" placeholder="Kota">
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label></label>
                                    <input class="form-control" name="province" type="text" placeholder="Propinsi">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.row-box-body -->
        </div>

        <div class="box-footer">
            <a href="javascript:void(0)" class="btn btn-primary pull-right" id="submit-pelapor">
                <span class="fa fa-plus"></span> Pelapor / Saksi
            </a>
        </div>

        <div class="row">
            @include('control-snitch::guest.pages.pelapor_view')
        </div>

        <div class="box-footer">
            <!-- this row will not appear when printing -->
            <div class="row no-print">
                <div class="col-xs-12">

                    <a href='{{ route('lapdu.question', ['page' => 2, 'id' => $data->_id]) }}' class="button special small pull-right">
                        <i class="fa fa-check"></i> Lanjut
                    </a>

                    <a href='#' class="button alt small pull-right" style="margin-right: 5px;">
                        <i class="fa fa-exclamation-triangle"></i> Batal
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
    <!-- DataTables -->
    <script src="{{ asset('vendor/core/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('vendor/core/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <!-- SlimScroll -->
    <script src="{{ asset('vendor/core/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('vendor/core/fastclick/lib/fastclick.js')}}"></script>

    <!-- bootstrap datepicker -->
    <script src="{{ asset('vendor/core/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

    <!-- InputMask -->
    <script src="{{ asset('vendor/core/admin-lte/plugins/input-mask/jquery.inputmask.js')}}"></script>
    <script src="{{ asset('vendor/core/admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
    <script src="{{ asset('vendor/core/admin-lte/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>

    <script>
        $(function () {
            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
            //Date picker
            $('#tgllahir').datepicker({
                autoclose: true
            })
            //Money Euro
            $('[data-mask]').inputmask()

            let pelaporTbl = $('#pelapor').DataTable({
                'paging'      : false,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : false,
                'autoWidth'   : false
            })

            let counter = 1;

            $('#submit-pelapor').click(function() {
                let data = $('#pelapor-form').serialize();
                $.post("{{ route('api.lapdu.reporter.store') }}", data)
                    .done(function(res) {
                        pelaporTbl.row.add([
                            counter,
                            res.name,
                            res.organization,
                            res.handphone + ' - ' + res.phone + ' - ' + res.email
                        ]).draw(false)
                        counter++
                    })
            })
        })
    </script>
@endsection

