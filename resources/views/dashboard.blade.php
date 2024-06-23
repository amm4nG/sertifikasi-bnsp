@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-2 text-center shadow-lg">
                <h5 class="mt-2">
                    <i class="fas fa-users-cog fa-4x"></i>
                    <p class="mt-3">Total Pegawai</p>
                    <p>{{ $totalPegawai }} Orang</p>
                </h5>
            </div>
        </div>
    </div>
</div>
@endsection
