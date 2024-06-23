<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- icon css -->
    <link href="{{ asset('master/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <!-- judul pada webiste -->
    <title>Sistem Pengelola Data Pegawai</title>
</head>

<body>

    <!-- isi content -->
    @yield('content')

    <!-- bootstrap js -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- icon js -->
    <script src="{{ asset('assets/js/icons.min.js') }}"></script>
    @stack('scripts')
</body>

</html>