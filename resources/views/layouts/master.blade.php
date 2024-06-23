<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- judul web -->
    <title>Sistem Pengelola Data Pegawai</title>
    <!-- fontawesome -->
    <link href="{{ asset('master/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <!-- datatable -->
    <link rel="stylesheet" href="{{ asset('master/datatables/datatable.css') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link href="{{ asset('master/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!-- css custom -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- menyertakan sidebar -->
        @include('layouts.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- menyertakan navbar -->
                @include('layouts.navbar')
                <!-- isi content -->
                @yield('content')
            </div>
        </div>
    </div>
    <!-- jquery -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('master/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('master/js/sb-admin-2.min.js') }}"></script>
    <!-- datatable -->
    <script src="{{ asset('master/datatables/datatable.js') }}"></script>
    <!-- validation request -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('scripts')
</body>

</html>
