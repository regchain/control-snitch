@extends('control-snitch::operator.template')

@section('title', 'Dashboard')

@section('judulhalaman', 'Kejaksaan Agung')

@section('subjudul', 'Republik Indonesia')

@section('stylesheets')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
@endsection

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
                        @include('control-snitch::lapdu.partials.kasus_view')

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

                            @include('control-snitch::lapdu.partials.pelapor_view')

                            <h4>2. Data Terlapor</h4>
                            @include('control-snitch::lapdu.partials.terlapor_view')

                            <h4>3. Data Penunjang</h4>
                            @include('control-snitch::lapdu.partials.datapenunjang_view')
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                III. ANALISA
                            </a>
                        </h4>
                    </div>

                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <textarea id="analisa" rows="10" cols="80" placeholder="Uraikan analisa yang singkat dan lengkap">
                                {{ array_key_exists('analysis', $data->$type) ? $data->$type['analysis'] : '' }}
                            </textarea>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                IV. KESIMPULAN
                            </a>
                        </h4>
                    </div>

                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                            <textarea id="kesimpulan" rows="10" cols="80" placeholder="Uraikan kesimpulan yang singkat dan lengkap">
                                {{ array_key_exists('conclusion', $data->$type) ? $data->$type['conclusion'] : '' }}
                            </textarea>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="opinion" value="Belum ditemukan bukti awal adanya dugaan pelanggaran disiplin" {{ array_key_exists('opinion', $data->$type) ? ($data->$type['opinion'] == "Belum ditemukan bukti awal adanya dugaan pelanggaran disiplin" ? 'checked' : '') : '' }}>
                                    Belum ditemukan bukti awal adanya dugaan pelanggaran disiplin
                                </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="opinion" value="Ditemukan bukti awal adanya dugaan pelanggaran disiplin ringan atau sedang atau berat" {{ array_key_exists('opinion', $data->$type) ? ($data->$type['opinion'] == "Ditemukan bukti awal adanya dugaan pelanggaran disiplin ringan atau sedang atau berat" ? 'checked' : '') : '' }}>
                                    Ditemukan bukti awal adanya dugaan pelanggaran disiplin ringan atau sedang atau berat
                                </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="opinion" value="Substansi permasalahannnya merupakan kewenangan bidang teknis" {{ array_key_exists('opinion', $data->$type) ? ($data->$type['opinion'] == "Substansi permasalahannnya merupakan kewenangan bidang teknis" ? 'checked' : '') : '' }}>
                                    Substansi permasalahannnya merupakan kewenangan bidang teknis
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFive">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFour">
                                V. SARAN
                            </a>
                        </h4>
                    </div>

                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                        <div class="panel-body">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="suggestion" value="Tidak perlu ditindak lanjuti" {{ array_key_exists('suggestion', $data->$type) ? ($data->$type['suggestion'] == "Tidak perlu ditindak lanjuti" ? 'checked' : '') : '' }}>
                                    Tidak perlu ditindak lanjuti
                                </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="suggestion" value="Perlu ditindak lanjuti dengan melakukan Klarifikasi atau Inspeksi Kasus oleh atasan langsung atau tim pemeriksa" {{ array_key_exists('suggestion', $data->$type) ? ($data->$type['suggestion'] == "Perlu ditindak lanjuti dengan melakukan Klarifikasi atau Inspeksi Kasus oleh atasan langsung atau tim pemeriksa" ? 'checked' : '') : '' }}>
                                    Perlu ditindak lanjuti dengan melakukan Klarifikasi atau Inspeksi Kasus oleh atasan langsung atau tim pemeriksa
                                </label>
                            </div>

                            <div class="radio disabled">
                                <label>
                                    <input type="radio" name="suggestion" value="Perlu ditindaklanjuti dengan meneruskan laporan pengaduan tersebut kepada bidang teknis terkait" {{ array_key_exists('suggestion', $data->$type) ? ($data->$type['suggestion'] == "Perlu ditindaklanjuti dengan meneruskan laporan pengaduan tersebut kepada bidang teknis terkait" ? 'checked' : '') : '' }}>
                                    Perlu ditindaklanjuti dengan meneruskan laporan pengaduan tersebut kepada bidang teknis terkait
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- iCheck 1.0.1 -->
<script src="{{ asset('vendor/core/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('vendor/core/fastclick/lib/fastclick.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('vendor/core/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

<script src="{{ asset('vendor/core/ckeditor/ckeditor.js')}}"></script>

<script src="{{ asset('vendor/core/moment/min/moment.min.js')}}"></script>

<script>
    $(function () {
        $("input[type='radio']" ).checkboxradio()

        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('analisa')
        CKEDITOR.replace('kesimpulan')

        $('#submit-was').click(function() {
            let data = {
                '_method': 'PUT',
                'lapdu': {
                    'analysis': CKEDITOR.instances.analisa.getData(),
                    'conclusion': CKEDITOR.instances.kesimpulan.getData(),
                    'opinion': $("input[name='opinion']:checked").val(),
                    'suggestion': $("input[name='suggestion']:checked").val(),
                    'riksa_by': {
                        'name': "{{ Auth::user()->name }}",
                        'institute': "{{ Auth::user()->institute }}",
                        'jobtitle': "{{ Auth::user()->jobtitle }}",
                        'nip': "{{ Auth::user()->nip }}",
                        'nrp': "{{ Auth::user()->nrp }}",
                        'unit': "{{ Auth::user()->unit }}"
                    },
                    'date_riksa': moment().format('DD-MM-YYYY'),
                    'instruction_young_inspector': null,
                    'instruction_inspector': null
                }
            }

            console.log(data)

            $.post("{{ route('api.lapdu.report.update', ['id' => $data->_id]) }}", data)
                .done(function(res) {
                    alert('Data sudah berhasil disimpan')
                    // window.location.replace("{{ env('APP_URL') }}/lapdu/operator/laporan")
                })
        })
    })
</script>
@endsection