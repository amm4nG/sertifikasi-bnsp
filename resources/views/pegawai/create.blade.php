@extends('layouts.master')
@section('content')
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-3">
                    <h3>Form Tambah Pegawai</h3>
                    <form class="ajax-form" data-url="{{ route('pegawai.store') }}" method="post">
                    <div class="row mt-3">
                            @csrf
                            <div class="col-md-4 mb-3">
                                <label for="nama" class="mb-2">Nama<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="telepon" class="mb-2">Telepon<sup class="text-danger">*</sup></label>
                                <input type="number" class="form-control" name="telepon" id="telepon">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="email" class="mb-2">Email<sup class="text-danger">*</sup></label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="jenis_kelamin" class="mb-2">Jenis Kelamin<sup class="text-danger">*</sup></label>
                                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                    <option value="l">Laki-laki</option>
                                    <option value="p">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="jabatan" class="mb-2">Jabatan<sup class="text-danger">*</sup></label>
                                <select class="form-control" name="jabatan" id="jabatan">
                                    <option value="karyawan">Karyawan</option>
                                    <option value="manager">Manager</option>
                                    <option value="direktur">Direktur</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="status" class="mb-2">Status<sup class="text-danger">*</sup></label>
                                <select class="form-control" name="status" id="status">
                                    <option value="active">Active</option>
                                    <option value="cuti">cuti</option>
                                    <option value="resign">Resign</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="alamat" class="mb-2">Alamat<sup class="text-danger">*</sup></label>
                                <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="5"></textarea>
                            </div>
                            <div class="col-md-3 mt-3 mb-2">
                                <label for="foto" class="mb-2">Foto Pegawai</label>
                                <div class="file-upload">
                                    <i id="icon" class="fas fa-cloud-upload-alt fa-2x"></i>
                                    <span id="file-title" class="ms-2">Pilih gambar</span>
                                    <input type="file" name="foto" id="foto" accept="image/*">
                                    <img id="preview" src="#" alt="Image Preview" />
                                </div>
                            </div>
                            <div class="row mt-3 mb-2">
                                <div class="col-md-3">
                                    <a href="{{ route('pegawai.index') }}" class="btn btn-secondary"><i
                                            class="fas fa-times"></i> Batal</a>
                                    <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Simpan
                                        <div class="ms-1 spinner-border text-white spinner-border-sm d-none" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
