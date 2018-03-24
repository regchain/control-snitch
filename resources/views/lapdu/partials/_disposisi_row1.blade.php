<div class="col-sm-3 col-xs-6">
    <!-- Kode -->
    <div class="input-group">
        <!-- /btn-group -->
        <span class="input-group-addon">No.</span>
        <input type="text" class="form-control" placeholder="Kode / Index" name="number_disposition" value="{{ $data->number_disposition ? $data->number_disposition : '' }}">
    </div>
    <!-- /kode -->
    &nbsp;

    <!-- Date -->
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
            <input type="text" class="form-control" placeholder="Tgl Penyelesaian" id="datepicker" name="date_done" value="{{ $data->date_done ? $data->date_done : '' }}">
        </div>
        <!-- /.input group -->
    </div>
    <!-- /date -->
</div>

<div class="col-sm-3 col-xs-6">
    <div class="input-group">
        <span class="input-group-addon">No.</span>
        <!-- /btn-group -->
        <input type="text" class="form-control" placeholder="Surat" name="number_letter" value="{{ $data->number_letter ? $data->number_letter : '' }}">
    </div>
    &nbsp;

    <!-- Date -->
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
            <input type="text" class="form-control" id="datepicker2" placeholder="Tanggal Surat" name="date_letter" value="{{ $data->date_letter ? $data->date_letter : '' }}">
        </div>
        <!-- /.input group -->
    </div>
</div>

<div class="col-sm-6 col-xs-12">
    <!-- checkbox -->
    <div class="form-group btn">
        <label>
            <input type="radio" class="minimal-red" name="importance" value="segera" {{ $data->importance ? ($data->importance == 'segera' ? 'checked' : '') : '' }}>
            SEGERA
        </label>
        &nbsp;
        <label>
            <input type="radio" class="minimal-red" name="importance" value="rahasia" {{ $data->importance ? ($data->importance == 'rahasia' ? 'checked' : '') : '' }}>
            RAHASIA
        </label>
        &nbsp;
        <label>
            <input type="radio" class="minimal-red" name="importance" value="penting" {{ $data->importance ? ($data->importance == 'penting' ? 'checked' : '') : '' }}>
            PENTING
        </label>
        &nbsp;
        <label>
            <input type="radio" class="minimal-red" name="importance" value="biasa" {{ $data->importance ? ($data->importance == 'biasa' ? 'checked' : '') : '' }}>
            BIASA
        </label>
    </div>
</div>