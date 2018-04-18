@extends('control-snitch::operator.template')

@section('title', 'Dashboard')

@section('judulhalaman', 'Kejaksaan Agung')

@section('subjudul', 'Republik Indonesia')

@section('stylesheets')
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('vendor/core/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('vendor/core/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('vendor/core/Ionicons/css/ionicons.min.css')}}">
@endsection

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h2 class="box-title">EXECUTIVE INFORMATION SYSTEM</h2>
        </div>

        <div class="box-body">
            <div class="row">
                @include('control-snitch::partials.dashboard.putusan')

                @include('control-snitch::partials.dashboard.subyek_hukum')

                @include('control-snitch::partials.dashboard.kasus')
            </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            &nbsp;
        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->
@endsection
