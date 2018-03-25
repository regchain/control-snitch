  <div class="col-md-12">
    <div class="col-md-6">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('vendor/core/admin-lte/dist/img/user.png')}}" class="img-circle" alt="User Image">
            </div>

            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <p>Pewawancara</p>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <select class="form-control select2" style="width: 100%;" id="witness">
            <option selected="selected">Pilih Saksi Pelapor / Terlapor</option>
            <optgroup label="Saksi Pelapor">
                @foreach ($data->reporters as $r)
                <option value="{{ $r['name'] }}">{{ $r['name'] }}</option>
                @endforeach
            </optgroup>
            <optgroup label="Saksi Terlapor">
                @foreach ($data->reporteds as $r)
                <option value="{{ $r['name'] }}">{{ $r['name'] }}</option>
                @endforeach
            </optgroup>
        </select>

        <div class="form-group">
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input type="text" class="form-control" placeholder="Tgl Wawancara" id="interview_date">
            </div>
            <!-- /.input group -->
        </div><!-- /date -->
    </div>
</div>


<div class="col-md-12">
    <!-- /.box-header -->
    <div class="box-body pad">
        <div class="form-group">
            <label>Pertanyaan: </label>
            <input type="text" class="form-control" placeholder="Kolom pertanyaan ..." name="question" id="question">
        </div>

        <label for="">Jawaban: </label>
        <textarea id="answer" rows="10" cols="80">
        </textarea>
    </div>

    <div class="box-footer">
        <button type="submit" id="add-qna" class="btn btn-primary pull-right">Kirim</button>
    </div>

    @include('lapdu::surat.partials._ba_was2_detail')
</div>

<div class="col-md-12">
    <label for="">Kesimpulan : </label>
    <textarea id="kesimpulan" rows="10" cols="80" placeholder="Silahkan masukkan kesimpulan">
    </textarea>
</div>