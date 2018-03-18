@extends('vendor.lapdu.templates.alpha.templatealt')

@section('title', 'Data Terlapor')

@section('judulhalaman', 'KEJAKSAAN AGUNG')

@section('subjudul', 'REPUBLIK INDONESIA')

@section('stylesheets')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('vendor/core/select2/dist/css/select2.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('vendor/core/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('content')
    <div class="box">
        <div class="box-tools pull-right text-blue">
          <i class="fa fa-angle-double-right" aria-hidden="true"></i>
          Uraian Permasalahan
        </div>

        <h4 class="box-title">DATA TERLAPOR</h4>

        <div class="progress">
            <div class="progress-bar progress-bar-primary progress-sm progress-bar-striped" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                <span class="sr-only">25% Complete (success)</span>
            </div>
        </div>

        <pre><code>Masukkan identitas data pegawai (yang dilaporkan)</code></pre>

        <form action="" method="POST" id="terlapor-form">
            <input type="hidden" name="id" value="{{ $data->_id }}">

            <div class="row">
                <!-- column -->
                <div class="col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <!-- Kota -->
                            <div class="form-group">
                                <label>Satuan Kerja</label>

                                <select class="form-control select2" id="satker" style="width: 100%;">
                                    <option disabled selected>Pilih Institusi</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Kejaksaan Negeri</label>

                                <select class="form-control select2" id="kejari" style="width: 100%;">
                                    <option disabled selected>Pilih Institusi</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Kejaksaan Cabang</label>

                                <select class="form-control select2" id="kecabjari" style="width: 100%;">
                                    <option disabled selected>Pilih Institusi</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <label>Status</label>

                            <select class="form-control select2" style="width: 100%;" name="status">
                                <option selected="selected" value="terlapor">TERLAPOR</option>
                                <option value="saksi">SAKSI</option>
                            </select>
                        </div>

                    </div>
                </div>
                <!-- column -->

                <div class="col-sm-12 col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>

                        <select name="reported-id" id="reported-name" class="form-control select2">
                            <option disabled selected>Pilih Terlapor</option>
                        </select>
                    </div>

                    <label></label>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Jelaskan posisi terlapor saat dalam permasalahan. ..." name="position" cols="0" rows="2" id="reported-position"></textarea>
                    </div>
                </div>
            </div>
            <!-- row -->
        </form>

        <div class="box-footer">
            <a href="javascript:void(0)" id="submit-terlapor" class="btn btn-primary pull-right">
                <span class="fa fa-plus"></span> Terlapor / Saksi
            </a>
        </div>

        <div class="row">
            @include('vendor.lapdu.guest.pages.terlapor_view')
        </div>

        <div class="row">
            <div class="col-xs-12">
                <a href='{{ route('lapdu.question', ['page' => 3, 'id' => $data->_id]) }}' class="button special small pull-right">
                    <i class="fa fa-check"></i> Lanjut
                </a>

                <a href='#' class="button alt small pull-right" style="margin-right: 5px;">
                    <i class="fa fa-exclamation-triangle"></i> Batal
                </a>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
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
    <!-- SlimScroll -->
    <script src="{{ asset('vendor/core/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('vendor/core/fastclick/lib/fastclick.js')}}"></script>

    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()
            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
            //Money Euro
            $('[data-mask]').inputmask()
            $('#example1').DataTable()
            let terlaporTbl = $('#terlapor').DataTable({
                'paging'      : false,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : false,
                'autoWidth'   : false
            })

            let counter = 1;

            $.get("{{ route('api.core.institutions.index') }}", function(res) {
                let items = res.map(function(i) {
                    return {id: i._id, text: i.name}
                })

                $('#satker').select2({data: items}, true)
            })

            $('#satker').on('select2:select', function(e) {
                let item = e.params.data

                $.get("{{ route('api.core.institutions.index') }}/"+item.id, function(res) {
                    let slugName = $.trim(res.name).toLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,'')

                    if ('region' in res) {
                        let items = res.region.map(function(i) {
                            let slug = $.trim(i.name).toLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,'')
                            return {id: slug, text: i.name}
                        })
                        $('#kejari').html('').select2({data: items}, true)
                    }

                    loadPersons('?institution='+slugName)
                })
            })

            $('#kejari').on('select2:select', function(e) {
                let head = $('#satker').val()
                let item = e.params.data

                $.get("{{ route('api.core.institutions.index') }}/"+head+"?region="+item.id, function(res) {
                    $.each(res, function(i, v) {
                        if ('branch' in v) {
                            let items = v.branch.map(function(k) {
                                let slug = $.trim(k.name).toLowerCase().replace(/ /g,'_').replace(/[^\w-]+/g,'')
                                return {id: slug, text: k.name}
                            })

                            $('#kecabjari').html('').select2({data: items}, true)
                        }
                    })

                })
            })

            function loadPersons(params = '') {
                $.get("{{ route('api.core.users.index') }}"+params, function(res) {
                    let items = res.map(function(i) {
                        return {id: i._id, text: i.name}
                    })

                    $('#reported-name').select2({
                        minimumInputLength: 3,
                        data: items
                    },
                    true)
                })
            }

            $('#reported-name').on('select2:select', function(e) {
                let item = e.params.data

                $.get("{{ route('api.core.users.index') }}/"+item.id, function(res) {
                    $('#reported-position').html(res.jobtitle)
                })
            })

            $('#submit-terlapor').click(function() {
                let data = $('#terlapor-form').serialize();
                $.post("{{ route('api.lapdu.reported.store') }}", data)
                    .done(function(res) {
                        terlaporTbl.row.add([
                            counter,
                            res.name,
                            res.institute,
                            res.status
                        ]).draw(false)
                        counter++
                    })
            })
        })
    </script>
@endsection
