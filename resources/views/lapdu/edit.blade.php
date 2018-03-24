@extends('lapdu::operator.template')

@section('title', 'Edit LapDu')

@section('judulhalaman', 'Kejaksaan Agung')

@section('subjudul', 'Republik Indonesia')

@section('stylesheets')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('vendor/core/select2/dist/css/select2.min.css')}}">
    <!-- selectpicker -->
    <link rel="stylesheet" href="{{ asset('vendor/core/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('vendor/core/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">EDIT LAPORAN PENGADUAN</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i>
                </button>

                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>

        <div class="box-body">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span class="label label-success pull-right">Detil</span> PERMASALAHAN
                            </a>
                        </h4>
                    </div>

                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <div class="box-body">
                                @include('lapdu::lapdu.partials.kasus_edit')
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="label label-success pull-right">Detil</span> DATA PELAPOR
                            </a>
                        </h4>
                    </div>

                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <div class="box-body">
                                @include('lapdu::lapdu.partials.pelapor_create')
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="label label-success pull-right">Detil</span> DATA TERLAPOR
                            </a>
                        </h4>
                    </div>

                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <div class="box-body">
                                @include('lapdu::lapdu.partials.terlapor_create')
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <span class="label label-success pull-right">Detil</span> DATA PENUNJANG
                            </a>
                        </h4>
                    </div>

                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                            <div class="box-body">
                                @include('lapdu::lapdu.partials.datapenunjang_create')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-footer">
            <!-- this row will not appear when printing -->
            <div class="row no-print">
                <div class="col-xs-12">
                    <a href='javascript:void(0)' id="btn-lanjut" class="btn btn-success pull-right">
                        <i class="fa fa-check-square-o"></i> Lanjut
                    </a>

                    <a href="{{ route('lapdu.operator.laporan.index') }}" class="btn btn-danger pull-right" style="margin-right: 5px;">
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
    <!-- bootstrap datepicker -->
    <script src="{{ asset('vendor/core/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <!-- DataTables -->
    <script src="{{ asset('vendor/core/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('vendor/core/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <!-- SlimScroll -->
    <script src="{{ asset('vendor/core/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>

    <!-- FastClick -->
    <script src="{{ asset('vendor/core/fastclick/lib/fastclick.js')}}"></script>

    <!-- InputMask -->
    <script src="{{ asset('vendor/core/admin-lte/plugins/input-mask/jquery.inputmask.js')}}"></script>
    <script src="{{ asset('vendor/core/admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
    <script src="{{ asset('vendor/core/admin-lte/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>

    <!-- Select2 -->
    <script src="{{ asset('vendor/core/select2/dist/js/select2.full.min.js')}}"></script>

    <!-- CK Editor -->
    <script src="{{ asset('vendor/core/ckeditor/ckeditor.js')}}"></script>

    <script>
        $(function () {
            //Date picker
            $('#tgllahir').datepicker({
                autoclose: true
            })

            //Initialize Select2 Elements
            $('.select2').select2()
            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
            //Money Euro
            $('[data-mask]').inputmask()
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1')

            let counterPelapor = counterTerlapor = 1;

            let pelaporTbl = $('#pelapor').DataTable({
                'paging'      : false,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : false,
                'autoWidth'   : false
            })

            let terlaporTbl = $('#terlapor').DataTable({
                'paging'      : false,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : false,
                'autoWidth'   : false
            })

            $.get("{{ route('api.core.users.index') }}", function(res) {
                let items = res.map(function(i) {
                    return {id: i._id, text: i.nrp}
                })

                $('#nrp').select2({
                    minimumInputLength: 3,
                    data: items
                },
                true)
            })

            $('#nrp').on('select2:select', function(e) {
                let item = e.params.data

                $.get("{{ route('api.core.users.index') }}/"+item.id, function(res) {
                    $('#reported-id').val(res._id)
                    $('#reported-name').val(res.name)
                    $('#reported-nip').val(res.nip)
                    $('#reported-position').html(res.jobtitle)
                    $('#satker').append($('<option>', {value:res.institute, text:res.institute, selected:true}))
                })
            })

            $('#submit-pelapor').click(function() {
                let data = $('#pelapor-form').serialize()
                $.post("{{ route('api.lapdu.reporter.store') }}", data)
                    .done(function(res) {
                        pelaporTbl.row.add([
                            counterPelapor,
                            res.name,
                            res.organization,
                            res.handphone + ' - ' + res.phone + ' - ' + res.email,
                            res.status
                        ]).draw(false)
                        counterPelapor++
                    })
            })

            $('#submit-terlapor').click(function() {
                let data = $('#terlapor-form').serialize()
                $.post("{{ route('api.lapdu.reported.store') }}", data)
                    .done(function(res) {
                        terlaporTbl.row.add([
                            counterTerlapor,
                            res.name,
                            res.institute,
                            res.status,
                            res.jobtitle
                        ]).draw(false)
                        counterTerlapor++
                    })
            })

            $('#btn-lanjut').click(function() {
                let data = {
                    '_method': 'PUT',
                    'title': $('#name').val(),
                    'description': CKEDITOR.instances.editor1.getData()
                }

                $.post("{{ route('api.lapdu.report.update', ['id' => $data->_id]) }}", data)
                    .done(function(res) {
                        window.location.replace("{{ env('APP_URL') }}/lapdu/operator/laporan")
                    })
            })
        })
    </script>
@endsection
