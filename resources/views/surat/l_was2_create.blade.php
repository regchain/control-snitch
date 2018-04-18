@extends('control-snitch::operator.template')

@section('title', 'Laporan Hasil Inspeksi')

@section('judulhalaman', 'Laporan Hasil Inspeksi Kasus')

@section('subjudul', 'Kejaksaan Agung Republik Indonesia')

@section('stylesheets')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('vendor/core/select2/dist/css/select2.min.css')}}">
    <!-- UI Tool Tip -->
    <link rel="stylesheet" href="{{ asset('vendor/core/jquery-ui/themes/base/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/lapdu/templates/alpha/assets/css/tooltip.css')}}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('vendor/core/admin-lte/plugins/iCheck/line/green.css')}}">

    <link rel="stylesheet" href="{{ asset('vendor/core/admin-lte/plugins/iCheck/all.css')}}">
@endsection

@section('content')
<form action="{{ route('lapdu.operator.laporan.update', ['id' => $data->_id]) }}" id="form-punish" method="post">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PUT">

    <!-- Default box -->
    <div class="box">
        <!-- Default box -->
        <div class="box-header with-border">
            <small class="col-xs-3 pull-right text-justify">Lampiran Petunjuk Pelaksanaan JAMWAS Nomor ; 01/H/Hjw/04//2011 tanggal 01 April 2011 tentang Teknis Penanganan Laporan dan Tata Kelola Administrasi Bidang Pengawasan<br><strong class="pull-right">L.WAS-2</strong></small>
            <h1 class="box-title">
                @foreach ($data->reporteds as $reported)
                    @if ($reported['status'] == 'terlapor')
                        {{ $reported['institute'] }}
                    @endif
                @endforeach
            </h1>
        </div>

        <div class="box-body">
            <div class="col-md-6 col-md-offset-3" style="padding-bottom: 30px">
                <h3 class="description-block" for="inputGroupSuccess2">R A H A S I A</h3>
                <h3 class="description-block" for="inputGroupSuccess2"><u>LAPORAN HASIL INSPEKSI KASUS</u></h3>
            </div>
        </div>

        <div class="box-body">
            <div class="col-md-10 col-md-offset-1">
                Berdasarkan Surat Perintah {{ strtoupper($data->klarifikasi['warrant_by']) }} Nomor: {{ $data->klarifikasi['number_warrant'] }} tanggal {{ \Carbon\Carbon::parse($data->klarifikasi['date_warrant']['date'])->format('d F Y') }}, telah ditugaskan :
                <p>
                    <ul style="list-style-type:none">
                        <li>@include('control-snitch::klarifikasi.partials._jaksapengawas', ['previousType' => 'klarifikasi'])</li>
                    </ul>
                </p>
                <p>untuk melakukan Klarifikasi terhadap :</p>
                <p>
                    <ul style="list-style-type:none">
                        <li>@include('control-snitch::lapdu.partials.pelapor_view')</li>
                        <li>@include('control-snitch::lapdu.partials.terlapor_view')</li>
                    </ul>
                </p>
                <p>Dengan hasil sebagai berikut :</p>

                <div class="box-body">
                    <h3>PERMASALAHAN</h3>

                    <textarea id="permasalahan" name="{{ $type }}[problem]" rows="5" cols="80">
                    </textarea>

                    <h3>DATA</h3>

                    @include('control-snitch::surat.partials._ba_was3_list')

                    <h3>ANALISA</h3>

                    <textarea id="analisa" name="{{ $type }}[analysis]" rows="10" cols="80">
                    </textarea>

                    <h3>KESIMPULAN</h3>

                    <textarea id="kesimpulan" name="{{ $type }}[summary]" rows="10" cols="80">
                    </textarea>

                    <h3>PERTIMBANGAN</h3>

                    <ul>
                        <li>
                            <label>Hal-hal yang memberatkan:</label>
                            <textarea id="berat" name="{{ $type }}[incriminate]" rows="10" cols="80">
                            </textarea>
                        </li>

                        <li>
                            <label>Hal-hal yang meringankan:</label>
                            <textarea id="ringan" name="{{ $type }}[relieve]" rows="10" cols="80">
                            </textarea>
                        </li>
                    </ul>

                    <h3>RENCANA PENJATUHAN HUKUMAN DISIPLIN</h3>

                    <ol type="1" style="margin-left: -20px">
                        @foreach ($data->reporteds as $r)
                            @if ($r['status'] == 'terlapor')
                            <h4><li>&nbsp;{{ $r['name'] }} </li></h4>
                            @include('control-snitch::surat.partials._l_was2_terlapor', ['reported' => $r, 'type' => 'punishment'])
                            <hr>
                            @endif
                        @endforeach
                    </ol>
                </div>
                {{-- @include('control-snitch::lapdu.partials._telaahan_view') --}}
            </div>
        </div>

        <div class="box-footer">
            <!-- this row will not appear when printing -->
            <div class="row no-print">
                <div class="box-body">
                    <a href="javascript:void(0)" id="save" class="btn btn-flat btn-success pull-right">
                        <i class="fa fa-check-square-o"></i> Lanjut
                    </a>

                    <a href="{{ route('lapdu.operator.inspeksi.index') }}" class="btn btn-flat btn-danger pull-right" style="margin-right: 5px;">
                        <i class="fa fa-exclamation-triangle"></i> Batal
                    </a>
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.box-footer-->
    </div>
</form>
@endsection

@section('scripts')
    <!-- iCheck 1.0.1 -->
    <script src="{{ asset('vendor/core/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('vendor/core/fastclick/lib/fastclick.js')}}"></script>

    <script src="{{ asset('vendor/core/ckeditor/ckeditor.js')}}"></script>
    <!-- Select2 -->
    <script src="{{ asset('vendor/core/select2/dist/js/select2.full.min.js')}}"></script>

    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Flat red color scheme for iCheck
            $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass   : 'iradio_flat-green'
            })

            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('permasalahan', {'placeholder': 'Hal-hal yang ditemukan dalam pelaksanaan inspeksi atau informasi/pengaduan yang diterima'})
            CKEDITOR.replace('analisa', {'placeholder': 'Analisa berdasarkan-data yang ada dikaitkan dengan ketentuan perundang-undangan yang berlaku'})
            CKEDITOR.replace('kesimpulan', {'placeholder': 'berisi kesimpulan terhadap analisa mengenai terbukti atau tidaknya peristiwa/perbuatan yang dilaporkan'})
            CKEDITOR.replace('berat', {'placeholder': 'Uraikan hal-hal yang memberatkan yang singkat dan lengkap'})
            CKEDITOR.replace('ringan', {'placeholder': 'Uraikan hal-hal yang meringankan yang singkat dan lengkap'})

            let pelanggaran = 0

            $('#add-uu').click(function() {
                let text = ''

                if (pelanggaran > 0) {
                    text += 'Jo '
                }

                text += 'Pasal '+$('#pasal').val()+' angka '+$('#ayat').val()

                if ($('#huruf').val()) {
                    text += ' huruf '+$('#huruf').val()
                }

                text += ' | '+$('#uu').val()

                $('#list-uu').append(
                    $('<tr/>').append(
                        $('<td/>').html(text),
                    )
                )

                $('#description').val("")
                $('#pasal').val("-1").trigger("change")
                $('#ayat').val("-1").trigger("change")
                $('#huruf').val("-1").trigger("change")
                $('#uu').val("-1").trigger("change")
                pelanggaran++
            })

            $('#add-punish').click(function() {
                let text = $('#punishment').val()+'<br>'
                text += 'Pasal '+$('#punishment_pasal').val()+' angka '+$('#punishment_ayat').val()

                if ($('#punishment_huruf').val()) {
                    text += ' huruf '+$('#punishment_huruf').val()
                }

                text += ' | '+$('#punishment_uu').val()

                $('#list-punishment').append(
                    $('<tr/>').append(
                        $('<td/>').html(text),
                    )
                )

                $('#punishment').val("")
                $('#punishment_pasal').val("-1").trigger("change")
                $('#punishment_ayat').val("-1").trigger("change")
                $('#punishment_huruf').val("-1").trigger("change")
                $('#punishment_uu').val("-1").trigger("change")
            })

            $('#save').click(function() {
                event.preventDefault()

                @foreach ($data->reporteds as $r)
                    @if ($r['status'] == 'terlapor')
                        let data = {
                            'report_id': "{{ $data->_id }}",
                            'name': "{{ $r['name'] }}",
                            'detail': "{{ $r['nip'].' | '.$r['nrp'].' | '.$r['jobtitle'] }}",
                            'violation': "",
                            'punishment': ""
                        }

                        $('#list-uu > tr').each(function() {
                            $(this).find('td').each(function() {
                                data['violation'] += $(this).html()
                            })
                        })

                        $('#list-punishment > tr').each(function() {
                            $(this).find('td').each(function() {
                                data['punishment'] += $(this).html()
                            })
                        })

                        $.post("{{ route('api.lapdu.punishment.store') }}", data, function(res) {
                            alert('Data berhasil disimpan')
                        })
                    @endif
                @endforeach

                $('#form-punish').submit()
            })
        })
    </script>
@endsection