<div class="col-sm-3 col-xs-6">
    <!-- Kode -->
    <div class="input-group">
        <!-- /btn-group -->
        <span class="input-group-addon">No.</span>
        <input type="text" class="form-control" placeholder="Kode / Index" name="{{ $type }}[number_disposition]" value="{{ $data->$type ? (array_key_exists('number_disposition', $data->$type) ? $data->$type['number_disposition'] : '') : '' }}">
    </div>
    <!-- /kode -->
    &nbsp;

    <!-- Date -->
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
            <input type="text" class="form-control datepicker" placeholder="Tgl Penyelesaian" name="{{ $type }}[date_done]" value="{{ $data->$type ? (array_key_exists('date_done', $data->$type) ? $data->$type['date_done'] : '') : '' }}">
        </div>
        <!-- /.input group -->
    </div>
    <!-- /date -->
</div>

<div class="col-sm-3 col-xs-6">
    <div class="input-group">
        <span class="input-group-addon">No.</span>
        <!-- /btn-group -->
        <input type="text" class="form-control" placeholder="Surat" name="{{ $type }}[number_letter]" value="{{ $data->$type ? (array_key_exists('number_letter', $data->$type) ? $data->$type['number_letter'] : '') : '' }}">
    </div>
    &nbsp;

    <!-- Date -->
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
            <input type="text" class="form-control datepicker" placeholder="Tanggal Surat" name="{{ $type }}[date_letter]" value="{{ $data->$type ? (array_key_exists('date_letter', $data->$type) ? $data->$type['date_letter'] : '') : '' }}">
        </div>
        <!-- /.input group -->
    </div>
</div>

<div class="col-sm-3 col-xs-6" style="padding-bottom: 3px">
    <input type="radio" class="flat-red" name="{{ $type }}[importance]" value="segera" {{ $data->$type ? (array_key_exists('importance', $data->$type) ? ($data->$type['importance'] == 'segera' ? 'checked' : '') : '') : '' }}>
    <label>SEGERA</label>
</div>

<div class="col-sm-3 col-xs-6" style="padding-bottom: 3px">
    <input type="radio" class="flat-red" name="{{ $type }}[importance]" value="rahasia" {{ $data->$type ? (array_key_exists('importance', $data->$type) ? ($data->$type['importance'] == 'rahasia' ? 'checked' : '') : '') : '' }}>
    <label>RAHASIA</label>
</div>

<div class="col-sm-3 col-xs-6" style="padding-bottom: 3px">
    <input type="radio" class="flat-red" name="{{ $type }}[importance]" value="penting" {{ $data->$type ? (array_key_exists('importance', $data->$type) ? ($data->$type['importance'] == 'penting' ? 'checked' : '') : '') : '' }}>
    <label>PENTING</label>
</div>

<div class="col-sm-3 col-xs-6" style="padding-bottom: 3px">
    <input type="radio" class="flat-red" name="{{ $type }}[importance]" value="biasa" {{ $data->$type ? (array_key_exists('importance', $data->$type) ? ($data->$type['importance'] == 'biasa' ? 'checked' : '') : '') : '' }}>
    <label>BIASA</label>
</div>
