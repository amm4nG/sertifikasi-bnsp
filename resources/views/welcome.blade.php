@extends('layouts.app')
@section('content')
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <h1 class="mb-4 text-primary">Sistem Pengelolaan Data Pegawai</h1>
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        // pindah ke halaman login setelah 3 detik
        setTimeout(() => {
            window.location.href = "/login"
        }, 3000);
    </script>
@endpush