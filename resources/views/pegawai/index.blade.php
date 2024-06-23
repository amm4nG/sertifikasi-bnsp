@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="card p-3">
            <div class="row">
                <div class="col-md-3">
                    <a href="{{ route('pegawai.create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus me-1"></i> Tambah Pegawai</a>
                </div>
            </div>
            <div class="table-responsive">
                {{ $dataTable->table(['class' => 'table table-bordered table-sm']) }}
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    {{ $dataTable->scripts() }}
@endpush
