<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- judul pada webiste -->
    <title>Sistem Pengelola Data Pegawai</title>
</head>

<body>

    @if (!Request::is('/'))
        <!-- sidebar menu -->
        @include('layouts.sidebar')
    @endif

    <!-- isi content -->
    <div class="container-fluid mt-4">
        @yield('content')
    </div>

    <!-- bootstrap js -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- jquery -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('scripts')
</body>

</html>
