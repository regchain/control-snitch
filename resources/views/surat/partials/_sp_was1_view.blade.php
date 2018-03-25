<div class="box-header with-border">
    <small class="col-xs-3 pull-right text-justify">Lampiran Petunjuk Pelaksanaan JAMWAS Nomor ; 01/H/Hjw/04//2011 tanggal 01 April 2011 tentang Teknis Penanganan Laporandan Tata Kelola Administrasi Bidang Pengawasan<br><strong class="pull-right">SP.WAS-1</strong></small>
    <h1 class="box-title">KEJAKSAAN AGUNG<br>REPUBLIK INDONESIA</h1>
</div>

<div class="box-body">
    <div class="description-block">
        <h2 class="widget-user-name">SURAT PERINTAH {{ strtoupper($data->warrant_by) }}</h2>
        {{-- <span class="description-text">(KLARIFIKASI)</span> --}}
    </div>

    <div class="col-sm-6 text-right">
        <p>NOMOR : PRIN-{{ $data->number_warrant }}</p>
    </div>

    <div class="col-sm-6">
        <p>Tanggal : {{ $data->date_warrant }} </p>
    </div>

    <div class="description-block">
        <h5 class="description-header">M E M E R I N T A H K A N</h5>
    </div>
</div>

<div class="box-body">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading"><label>Kepada :</label></div>

        <!-- List group -->
        <ul class="list-group">
            @foreach ($data->examiners as $k => $e)
            <li class="list-group-item">
                <div class="box-body table-responsive no-padding">
                    <table id="example2" class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <td width="5%">{{ $k+1 }}. </td>
                                <td width="15%"><strong>Nama</strong></td>
                                <td>: {{ $e['name'] }}</td>
                                <td width="10%">
                                    {{--  <a href="#" class="btn btn-flat btn-xs btn-default"><i class="fa fa-remove"></i></a>  --}}
                                </td>
                            </tr>

                            {{--  <tr>
                                <td></td>
                                <td><strong>Pangkat</strong></td>
                                <td>: [Pangkat], [Golongan] </td>
                                <td></td>
                            </tr>  --}}

                            <tr>
                                <td></td>
                                <td><strong>NIP / NRP</strong></td>
                                <td>: {{ $e['nip'] }} | {{ $e['nrp'] }} </td>
                                <td></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td><strong>Jabatan</strong></td>
                                <td>: {{ $e['jobtitle'] }}, {{ $e['institute'] }} </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>

