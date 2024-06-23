<?php

namespace App\Http\Controllers;

use App\DataTables\PegawaiDataTable;
use App\Http\Requests\PegawaiRequest;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Storage;

class PegawaiController extends Controller
{
    // funsi untuk menampilkan halaman utama data pegawai
    public function index(PegawaiDataTable $dataTable)
    {
        return $dataTable->render('pegawai.index');
    }
    
    // funsi untuk menampilkan form create pegawai
    public function create()
    {
        return view('pegawai.create');
    }
    
    // funsi untuk menyimpan data pegawai
    public function store(PegawaiRequest $request)
    {
        try {
            $pegawai = new Pegawai();
            $pegawai->nama = $request->nama;
            $pegawai->telepon = $request->telepon;
            $pegawai->email = $request->email;
            $pegawai->jenis_kelamin = $request->jenis_kelamin;
            $pegawai->jabatan = $request->jabatan;
            $pegawai->status = $request->status;
            $pegawai->alamat = $request->alamat;
            $path = '';
            if ($request->file('foto')) {
                $path = $request->file('foto')->store('foto-profil', 'public');
            }
            $pegawai->foto = $path;
            $pegawai->save();

            return response()->json(
                [
                    'message' => 'Berhasil menambahkan data pegawai',
                ],
                200,
            );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'message' => $th->getMessage(),
                ],
                500,
            );
        }
    }

    // funsi untuk menampilkan detail pegawai
    public function show($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.show', compact('pegawai'));
    }
    
    // funsi untuk menampilkan form edit data pegawai
    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.edit', compact('pegawai'));
    }
    
    // funsi untuk mengupdate data pegawai
    public function update(PegawaiRequest $request, $id)
    {
        try {
            $pegawai = Pegawai::findOrFail($id);
            $pegawai->nama = $request->nama;
            $pegawai->telepon = $request->telepon;
            $pegawai->email = $request->email;
            $pegawai->jenis_kelamin = $request->jenis_kelamin;
            $pegawai->jabatan = $request->jabatan;
            $pegawai->status = $request->status;
            $pegawai->alamat = $request->alamat;
            $file = $request->file('foto');
            if ($file) {
                if ($pegawai->foto) {
                    Storage::disk('public')->delete($pegawai->foto);
                }
                $path = $file->store('foto-profil', 'public');
                $pegawai->foto = $path;
            }
            $pegawai->update();

            return response()->json(
                [
                    'message' => 'Berhasil update data pegawai',
                ],
                200,
            );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'message' => $th->getMessage(),
                ],
                500,
            );
        }
    }

    // fungsi untuk menghapus data pegawai
    public function destroy($id)
    {
        try {
            $pegawai = Pegawai::find($id);
            Storage::disk('public')->delete($pegawai->foto);
            $pegawai->delete();
            return response()->json(
                [
                    'message' => 'Pegawai berhasil dihapus',
                ],
                200,
            );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'message' => $th->getMessage(),
                ],
                500,
            );
        }
    }
}
