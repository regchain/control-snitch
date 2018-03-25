@extends('elapdu.operator.template')

@section('title', 'Subyek Hukum')

@section('judulhalaman', 'Kejaksaan Agung')

@section('subjudul', 'Republik Indonesia')

@section('stylesheets')
  <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

  <!-- selectpicker -->
          <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css')}}">

@section('content')

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
            <div class="btn-group bootstrap-select pull-right">
              <button type="button" class="btn dropdown-toggle btn-primary" data-toggle="dropdown" role="button" title="Kejaksaan Negeri"><span class="filter-option pull-left">JENIS HUKUMAN</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button>
              <div class="dropdown-menu open" role="combobox">
                <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                  <li data-original-index="0" class="selected"><a href="{{ url('subyek_putusan?status=berat') }}" tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">BERAT</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                  <li data-original-index="1"><a href="{{ url('subyek_putusan?status=sedang') }}" tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">SEDANG</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                  <li data-original-index="2"><a href="{{ url('subyek_putusan?status=ringan') }}" tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">RINGAN</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                  <li data-original-index="2"><a href="{{ url('subyek_putusan?status=berhenti') }}" tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">BERHENTI SEMENTARA</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                </ul></div><select class="selectpicker" tabindex="-98">
              <option value="volvo">Sedang</option>
              <option value="saab">Ringan</option>
              <option value="mercedes">Pemberhentian Sementara</option>
            </select>
          </div>
          &nbsp;
          <h1 class="box-title"><i class="fa fa-gavel fa-2x"></i> TERHUKUM</h1>
          <div class="col-xs-12">


            {{-- <div class="btn-group bootstrap-select">
              <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" title="Kejaksaan Tinggi"><span class="filter-option pull-left">Kejaksaan Tinggi</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button>
              <div class="dropdown-menu open" role="combobox">
                <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                  <li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Kejaksaan Tinggi</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                  <li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">...</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                  <li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">...</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker" tabindex="-98">
                <option value="volvo">Kejaksaan Tinggi</option>
                <option value="saab">...</option>
                <option value="mercedes">...</option>
              </select></div>
 --}}
            {{-- <div class="btn-group bootstrap-select">
              <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" title="Kejaksaan Negeri"><span class="filter-option pull-left">Kejaksaan Negeri</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button>
              <div class="dropdown-menu open" role="combobox">
                <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                  <li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Kejaksaan Negeri</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                  <li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">...</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                  <li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">...</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                </ul></div><select class="selectpicker" tabindex="-98">
              <option value="volvo">Kejaksaan Negeri</option>
              <option value="saab">...</option>
              <option value="mercedes">...</option>
            </select></div>
          </div> --}}
          {{-- <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
            title="Collapse">
            <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
            </div> --}}
          </div>

        @include('elapdu.partials.subyek_putusan')

        <div class="box-footer">
            <!-- this row will not appear when printing -->
            <div class="row no-print">
              <div class="col-xs-12">
                <a href="subyek_putusanprint" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Cetak</a>
                <button type="button" class="btn btn-default" style="margin-left: 5px;">
                  <i class="fa fa-download"></i> Buat PDF
                </button>
              </div>
            </div>
          </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

@endsection

@section('scripts')
  <!-- DataTables -->
  <script src="{{ asset('/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <!-- SlimScroll -->
  <script src="{{ asset('/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{ asset('/bower_components/fastclick/lib/fastclick.js')}}"></script>

  <!-- page script -->
  <script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
@endsection