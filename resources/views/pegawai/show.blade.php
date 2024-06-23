@extends('layouts.master')
@section('content')
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('pegawai.index') }}" class="btn btn-secondary mb-4"><i class="fas fa-arrow-left me-1"></i>
                    Kembali</a>
                <a href="{{ route('pegawai.edit', $pegawai->id) }}" class="btn btn-warning mb-4"><i
                        class="fas fa-pen me-1"></i> Edit</a>
                <div class="card p-3">
                    <div class="row">
                        <div class="col-md-4 mb-3 mt-3">
                            <div class="row justify-content-center">
                                <div class="col-md-7 text-center">
                                    <img src="{{ $pegawai->foto ? asset('storage/' . $pegawai->foto) : asset('assets/img/profil-kosong.jpg') }}"
                                        class="rounded-circle img-thumbnail mb-3 mt-3" style="width: 190px; height: 190px;"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <tr>
                                        <th>Nama</th>
                                        <td>{{ $pegawai->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td>{{ ($pegawai->jenis_kelamin == 'l') ? 'Laki-laki' : 'Perempuan' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $pegawai->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>No. Telepon</th>
                                        <td>{{ $pegawai->telepon }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jabatan</th>
                                        <td class="badge text-bg-secondary ms-2">{{ $pegawai->jabatan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td class="badge text-bg-info ms-2">{{ $pegawai->status }}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>{{ $pegawai->alamat }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
