<form action="" method="POST" id="terlapor-form">
    <input type="hidden" name="id" value="{{ $data->_id }}">
    <input type="hidden" name="reported-id" id="reported-id">

    <div class="box-header">
        <h4 class="box-title">Data Terlapor</h4>
    </div>

    <div class="box-body">
        <div class="col-md-5 col-sm-12 col-xs-12">
            <div class="row">
                <div class="input-group">
                    <span class="input-group-addon">N.R.P</span>
                    <select name="nrp" id="nrp" class="form-control select2" style="width: 100%;" >
                        <option disabled selected>Pilih N.R.P</option>
                    </select>
                </div><br>

                <div class="input-group">
                    <span class="input-group-addon">&nbsp;<i class="fa fa-user">&nbsp;</i>&nbsp;</span>
                    <input type="text" class="form-control" placeholder="Nama Lengkap Terlapor..." readonly name="name" id="reported-name">
                </div>
                <br>

                <div class="input-group">
                    <span class="input-group-addon">N.I.P</span>
                    <input type="text" class="form-control" placeholder="N.I.P" readonly name="nip" id="reported-nip">
                </div>
            </div>
        </div><!-- /.left column -->

        <div class="col-md-7 col-sm-12 col-xs-12">
            <div class="form-group">
                <textarea class="form-control" placeholder="Jelaskan posisi terlapor saat dalam permasalahan. ..." name="position" cols="0" rows="2" id="reported-position"></textarea>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <!-- Kota -->
                    <div class="form-group">
                        <select class="form-control" style="width: 100%;" readonly id="satker">
                            <option selected="selected">Institusi</option>
                        </select>
                    </div>
                </div>

                {{--  <div class="col-xs-4">
                    <div class="form-group">
                        <select class="form-control select2" style="width: 100%;" readonly id="kejari">
                            <option selected="selected">Kejaksaan Negeri</option>
                        </select>
                    </div>
                </div>  --}}

                {{--  <div class="col-xs-4">
                    <div class="form-group">
                        <select class="form-control select2" style="width: 100%;" readonly id="kecabjari">
                            <option selected="selected">Kejaksaan Cabang</option>
                        </select>
                    </div>
                </div>  --}}

                <div class="col-xs-4">
                    <div class="form-group">
                        <select class="form-control select2" style="width: 100%;" name="status">
                            <option selected="selected" value="terlapor">Terlapor</option>
                            <option value="saksi">Saksi</option>
                        </select>
                    </div>
                </div>

                <div class="col-xs-4">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-mobile"></i>
                            </div>

                            <input type="text" class="form-control"  placeholder="HP"
                            data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask name="handphone">
                        </div>
                        <!-- /.input group -->
                    </div>
                </div>

                <div class="col-xs-4">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-phone"></i>
                            </div>

                            <input type="text" class="form-control" placeholder="Telpon"
                            data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask name="phone">
                        </div>
                        <!-- /.input group -->
                    </div>
                </div>
            </div>

            <a href="javascript:void(0)" id="submit-terlapor" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Terlapor</a>
        </div><!-- /.right column -->
    </div>
</form>

@include('lapdu::lapdu.partials.terlapor_view')
