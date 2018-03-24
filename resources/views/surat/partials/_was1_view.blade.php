<div class="box-header with-border">
    <small class="pull-right">WAS-1</small>
    <h2 class="box-title">TELAAHAN</h2>
</div>

<div class="box-body">
    <div class="box-header">
        <h2 class="box-title">ANALISA</h2>
    </div>

    <div class="box-body">
        {!! $data->analysis !!}
    </div>

    <div class="box-header">
        <h2 class="box-title">KESIMPULAN</h2>
    </div>

    <div class="box-body">
        {!! $data->conclusion !!}

        <div class="box-body">
            <div class="box-header">
                <h3 class="box-title">1. Pendapat</h3>
            </div>

            {!! $data->opinion !!}
        </div>

        <div class="box-body">
            <div class="box-header">
                <h3 class="box-title">2. Saran</h3>
            </div>

            {!! $data->suggestion !!}
        </div>
    </div>
</div>

<div class="box-footer">
    <a href="{{ route('lapdu.operator.laporan.study', ['id' => $data->_id]) }}" class="btn btn-info btn-flat pull-right">
        <i class="fa fa-save"></i> Edit
    </a>
</div>