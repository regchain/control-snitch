
<div class="box-body">
    <div class="col-md-2"><label>Kepada Yth.</label></div>
        <div class="col-md-10">
            <div class="form-group">
                <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">J.A.M Bidang Pengawasan</option>
                    <optgroup label="Bidang Teknis">
                        <option>J.A.M Bidang Pembinaan</option>
                        <option>J.A.M Bidang Intelijen</option>
                        <option>J.A.M Bidang Pidum</option>
                        <option>J.A.M Bidang Pidsus</option>
                        <option>J.A.M Bidang Datun</option>
                    </optgroup>
                    <optgroup label="Kejaksan Tinggi">
                        <option>Kepala Kejaksaan</option>
                        <option>Asisten..</option>
                        <option>Kasi..</option>
                    </optgroup>
                </select>
            </div>
        </div>

        <div class="col-md-2"><label>Dari</label></div>

        <div class="col-md-10">
            <div class="form-group">
                <select class="form-control select2" style="width: 100%;">
                    <option>J.A.M Bidang Pengawasan</option>
                    <optgroup label="INSPEKTUR">
                    <option selected="selected">INSPEKTUR I</option>
                    <option>INSPEKTUR II</option>
                    <option>INSPEKTUR III</option>
                    <option>INSPEKTUR IV</option>
                    <option>INSPEKTUR V</option>
                    <option>INSPEKTUR VI</option>
                    </optgroup>
                </select>
            </div>
        </div>

        <div class="col-md-2"><label>Tanggal</label></div>

        <div class="col-md-10">
            <!-- Date -->
            <div class="form-group">
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right datepicker">
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->
        </div>

        <div class="col-md-2"><label>No.</label></div>

        <div class="col-md-10">
            <div class="input-group">
                <span class="input-group-addon">ND -</span>
                <input type="text" class="form-control" placeholder="Nomor">
            </div>
        </div>

        <div class="col-md-2"><label>Sifat</label></div>

        <div class="col-md-10"><p>: Rahasia</p></div>

        <div class="col-md-2"><label>Lampiran</label></div>

        <div class="col-md-10">
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="1">
                    <span class="input-group-addon">berkas</span>
                </div>
            </div>
        </div>

        <div class="col-md-2"><label>Perihal</label></div><div class="col-md-10"><p>:  <strong>Pertimbangan terhadap hukuman disiplin yang akan dijatuhkan kepada Terlapor atas nama [Nama Terlapor], [Jabatan] [Satuan Kerja], [NRP, [NIP] </strong> </p></div>
    </div>

    <hr>

    <div class="box-body">
        <div class="col-md-10 col-md-offset-1">
            <p>Sehubungan dengan Laporan Hasil lnspeksi Kasus [tanggal] sesuai Surat Perintah [Jabatan] Nomor : [Nomor Surat] Tanggal [tanggal Surat]  , dengan hormat dilaporkan hal-hal sebagai berikut :</p>

            <p>
                <div class="box-header">
                    <h3 class="box-title">Terlapor</h3>
                </div>

                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th width="5%">No.</th>
                            <th>Terlapor</th>
                            <th>Jabatan</th>
                            <th>Pelanggaran</th>
                            <th>Keterangan</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>1.</td>
                            <td>[Nama Lengkap Terlapor]<br>[Pangkat][Gol][NRP/NIP] </td>
                            <td>[Jabatan]<br>[Institusi] </td>
                            <td>[Pasal]</td>
                            <td>[Ringan / Sedang / Berat]</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="box-body">
                    @include('control-snitch::lapdu.partials.pelapor_view')
                </div>

                <div class="box-body">
                    @include('control-snitch::lapdu.partials.kasus_view')
                </div>

                <div class="box-body">
                    @include('control-snitch::surat.partials._l_was2_view')
                </div>

            </p>

            <p class="text-right">Demiklan untuk dilaksanakan.</p>

            <p class="text-right">JAKSA AGUNG MUDA PENGAWASAN</p>
        </div>
    </div>
</div>
