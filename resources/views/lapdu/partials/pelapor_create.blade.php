<div class="box-header with-border">
    <h1 class="box-title">II. DATA</h1>
</div>

<form action="" method="POST" id="pelapor-form">
    <input type="hidden" name="id" value="{{ $data->_id }}">

    <div class="box-header">
        <a href="javascript:void(0)" class="btn btn-primary pull-right" id="submit-pelapor"><span class="fa fa-plus"></span> Pelapor / Saksi</a>
        <h2 class="box-title">1. Data Pelapor</h2>
    </div>

    <div class="col-md-6 col-sm-6">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Nama Lengkap" name="name">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input type="text" class="form-control" placeholder="Tanggal Lahir" id="tgllahir" name="birthday">
            </div>
            <!-- /.input group -->
        </div><!-- /date -->
    </div>

    <div class="col-md-6 col-sm-6">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
                <input type="email" class="form-control" placeholder="Pekerjaan" name="job">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <input type="email" class="form-control" placeholder="Organisasi" name="organization">
            </div>
        </div>
    </div>

    <div class="col-md-12 col-sm-12">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-id-badge"></i>
                        </div>

                        <input type="text" class="form-control" placeholder="HP..."
                        data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask name="handphone">
                    </div>
                    <!-- /.input group -->
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>

                        <input type="text" class="form-control" placeholder="Telpon..."
                        data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask name="phone">
                    </div>
                    <!-- /.input group -->
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input class="form-control" placeholder="email ..." name="email" type="text">
                    </div>
                <!-- /.input group -->
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 col-sm-12">
        <div class="form-group">
            <textarea class="form-control" placeholder="Alamat lengkap : Jalan / Gg. ..." name="address" cols="0" rows="3"></textarea>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                    <input class="form-control" name="zipcode" type="text" placeholder="Kode Pos">
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <!-- Kota -->
                <div class="form-group">
                    <input class="form-control" name="city" type="text" placeholder="Kota">
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                    <input class="form-control" name="province" type="text" placeholder="Propinsi">
                </div>
            </div>
        </div>
    </div>
</form>

@include('lapdu::lapdu.partials.pelapor_view')
