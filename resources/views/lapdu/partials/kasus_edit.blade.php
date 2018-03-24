<div class="row">
    <div class="box-body">
        <div class="col-xs-12">
            <div class="form-group">
                <label class="text-red">* Perihal</label>
                <input class="form-control" placeholder="Ringkasan Perbuatan, Subyek dan Obyek hukum" name="title" id="title" type="text" value="{{ $data->title }}">
            </div>
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.row-box-body -->

<div class="row">
    <div class="box-body">
        <div class="col-xs-12">
            <form>
                <textarea id="editor1" name="uraian_masalah" rows="10" cols="80" placeholder="Uraikan perbuatan / permasalahan yang singkat dan lengkap">
                    {{ $data->description }}
                </textarea>
            </form>
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.row-box-body -->

<hr>