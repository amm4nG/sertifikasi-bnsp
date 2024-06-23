@extends('layouts.master')
@section('content')
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-3">
                    <h3>Form Edit Data Pegawai</h3>
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <img id="foto-profil" src="{{ $pegawai->foto ? asset('storage/' . $pegawai->foto) : asset('assets/img/profil-kosong.jpg') }}"
                                class="rounded-circle img-thumbnail mb-3 mt-3" style="width: 150px; height: 150px;"
                                alt="">
                        </div>
                    </div>
                    <form class="ajax-form" data-url="{{ route('pegawai.update', $pegawai->id) }}" method="post">
                        <div class="row mt-3">
                            @csrf
                            @method('put')
                            <div class="col-md-4 mb-3">
                                <label for="nama" class="mb-2">Nama<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" value="{{ $pegawai->nama }}" name="nama"
                                    id="nama">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="telepon" class="mb-2">Telepon<sup class="text-danger">*</sup></label>
                                <input type="number" class="form-control" value="{{ $pegawai->telepon }}" name="telepon"
                                    id="telepon">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="email" class="mb-2">Email<sup class="text-danger">*</sup></label>
                                <input type="email" class="form-control" value="{{ $pegawai->email }}" name="email"
                                    id="email">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="jenis_kelamin" class="mb-2">Jenis Kelamin<sup
                                        class="text-danger">*</sup></label>
                                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                    <option value="l" @if ($pegawai->jenis_kelamin === 'l') selected @endif>Laki-laki
                                    </option>
                                    <option value="p" @if ($pegawai->jenis_kelamin === 'p') selected @endif>Perempuan</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="jabatan" class="mb-2">Jabatan<sup class="text-danger">*</sup></label>
                                <select class="form-control" name="jabatan" id="jabatan">
                                    <option value="karyawan" @if ($pegawai->jabatan === 'karyawan') selected @endif>Karyawan</option>
                                    <option value="manager" @if ($pegawai->jabatan === 'manager') selected @endif>Manager</option>
                                    <option value="direktur" @if ($pegawai->jabatan === 'direktur') selected @endif>Direktur</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="status" class="mb-2">Status<sup class="text-danger">*</sup></label>
                                <select class="form-control" name="status" id="status">
                                    <option value="active" @if ($pegawai->status === 'active') selected @endif>Active</option>
                                    <option value="cuti" @if ($pegawai->status === 'cuti') selected @endif>Cuti</option>
                                    <option value="resign" @if ($pegawai->status === 'resign') selected @endif>Resign</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="alamat" class="mb-2">Alamat<sup class="text-danger">*</sup></label>
                                <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="5">{{ $pegawai->alamat }}</textarea>
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
