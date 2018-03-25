@extends('elapdu.operator.template')

@section('title', 'Subyek Hukum')

@section('judulhalaman', 'Kejaksaan Agung')

@section('subjudul', 'Republik Indonesia')

@section('stylesheets')
  <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('content')
  
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-comments-o fa-2x"></i> Subyek Hukum Tahap Klarifikasi</h3>
        </div>

        @include('elapdu.partials.subyek')

        <div class="box-footer">
          Footer
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