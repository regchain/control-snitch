<div class="box-body">
    <div class="table-responsive">
        <p>Berdasarkan kesimpulan diatas, kami berpendapat bahwa</p>
        <table class="table table-bordered table-hover">
            {{-- <tr>
                <td width="20%">Pangkat</td>
                <td>: [Pangkat] </td>
            </tr> --}}
            <tr>
                <td>NIP / NRP</td>
                <td>: {{ $reported['nip'] }} | {{ $reported['nrp'] }} </td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>: {{ $reported['jobtitle'] }} </td>
            </tr>
        </table>
    </div>

    <ol type="A" style="margin-left: -25px">
        {{-- <h4><li>Uraian Singkat Perbuatan :</li></h4>
            <textarea id="editor1" name="perbuatan" rows="10" cols="80">
                                    Jelaskan secara Singkat Perbuatan.
            </textarea> --}}
        <h4>
            <li>Pelanggaran :</li>
        </h4>

        <div class="radio">
            <input type="radio" name="{{ $type }}[proven]" id="pelanggaran1" value="tidak terbukti">
            <label>
                tidak terbukti melakukan pelanggaran disiplin.
            </label>
        </div>

        <div class="input-group">
            <span class="input-group-addon">
                <input type="radio" name="{{ $type }}[proven]" id="pelanggaran2" aria-label="..." value="terbukti">
            </span>

            <span class="input-group-addon" id="basic-addon1">terbukti melakukan pelanggaran disiplin yaitu :</span>
            <input type="text" class="form-control" aria-label="..." placeholder="Uraian singkat perbuatan" name="{{ $type }}[description]" id="description">
        </div><!-- /input-group -->

        <p>
            <div class="form-inline">
                <label for="">Melanggar Pasal : </label>
                <div class="form-group">
                    <select class="form-control select2"  data-placeholder="Pasal" style="width: 100%;" id="pasal">
                        <option disabled selected>Pilih Pasal</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                    </select>
                </div>

                <div class="form-group">
                    <select class="form-control select2"  data-placeholder="ayat / Angka" style="width: 100%;" id="ayat">
                        <option disabled selected>Pilih Ayat</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                    </select>
                </div>

                <div class="form-group">
                    <select class="form-control select2"  data-placeholder="huruf" style="width: 100%;" id="huruf">
                        <option disabled selected>Pilih Huruf</option>
                        <option>a</option>
                        <option>b</option>
                        <option>c</option>
                        <option>d</option>
                        <option>e</option>
                        <option>f</option>
                        <option>g</option>
                    </select>
                </div>

                <div class="form-group">
                    <select class="form-control select2"  data-placeholder="PP / UU" style="width: 100%;" id="uu">
                        <option disabled selected>Pilih UU / PP</option>
                        <option>UU No. 35 / 2009 tentang Narkotika.</option>
                        <option>PP No. 53 / 2010 Tentang Disiplin Pegawai Negeri Sipil</option>
                    </select>
                </div>

                <span class="form-group-btn">
                    <button class="btn btn-info btn-flat" type="button" id="add-uu"><i class="fa fa-plus"></i></button>
                </span>
            </div>
        </p>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover" id="list-uu">
            </table>
        </div>

        <h4>
            <li>Hukuman Disiplin :</li>
        </h4>

        <div class="radio">
            <input type="radio" name="{{ $type }}[punish]" id="hukuman1" value="tidak terbukti">
            <label>
                tidak terbukti melakukan pelanggaran disiplin.
            </label>
        </div>

        <div class="input-group">
            <span class="input-group-addon">
                <input type="radio" name="{{ $type }}[punish]" id="hukuman2" aria-label="..." value="terbukti">
            </span>

            <span class="input-group-addon" id="basic-addon1">menyarankan agar dijatuhi hukuman disiplin berupa:</span>
            <input type="text" class="form-control" aria-label="..." placeholder="Penundaan Kenaikan Pangkat Selama 1 (satu) Tahun" name="{{ $type }}[punishment]" id="punishment">
        </div><!-- /input-group -->

        <p>
            <div class="form-inline">
                <label for="">Melanggar Pasal : </label>

                <div class="form-group">
                    <select class="form-control select2"  data-placeholder="Pasal"
                    style="width: 100%;" id="punishment_pasal">
                        <option disabled selected>Pilih Pasal</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                    </select>
                </div>

                <div class="form-group">
                    <select class="form-control select2"  data-placeholder="ayat / Angka"
                        style="width: 100%;" id="punishment_ayat">
                        <option disabled selected>Pilih Ayat</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                    </select>
                </div>

                <div class="form-group">
                    <select class="form-control select2"  data-placeholder="huruf"
                        style="width: 100%;" id="punishment_huruf">
                        <option disabled selected>Pilih Huruf</option>
                        <option>a</option>
                        <option>b</option>
                        <option>c</option>
                        <option>d</option>
                        <option>e</option>
                        <option>f</option>
                        <option>g</option>
                    </select>
                </div>

                <div class="form-group">
                    <select class="form-control select2"  data-placeholder="PP / UU"
                        style="width: 100%;" id="punishment_uu">
                        <option disabled selected>Pilih UU / PP</option>
                        <option>UU No. 35 / 2009 tentang Narkotika.</option>
                        <option>PP No. 53 / 2010 Tentang Disiplin Pegawai Negeri Sipil</option>
                    </select>
                </div>

                <span class="form-group-btn">
                    <button class="btn btn-info btn-flat" type="button" id="add-punish"><i class="fa fa-plus"></i></button>
                </span>
            </div>
        </p>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover" id="list-punishment">
            </table>
       </div>
    </ol>
</div>
