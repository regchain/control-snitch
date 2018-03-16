<!DOCTYPE HTML>
<!--
    This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <title>@yield('title') | e-LAPDU</title>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="csrf-token" content=" {{ csrf_token() }}">
    @include('vendor.lapdu.templates.alpha.head')
    @yield('stylesheets')
</head>

<body>
    <div id="page-wrapper">
        <!-- Header -->
        @include('vendor.lapdu.templates.alpha.headeralt')

        <!-- Banner -->
        {{--  @include('vendor.lapdu.guest.pages.banner')  --}}

        <!-- Main -->
        <section id="main" class="container">
            <!-- Your Page Content Here -->
            @yield('content')
        </section>

        <!-- Footer -->
        @include('vendor.lapdu.templates.alpha.footer')
    </div>

    <!-- REQUIRED JS SCRIPTS -->
    @include('vendor.lapdu.templates.alpha.scripts')

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
        Both of these plugins are recommended to enhance the
        user experience. -->
    @yield('scripts')
</body>
</html>