<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pegawai::create([
            'nama' => 'Arman',
            'telepon' => '082290762799',
            'email' => 'arman@gmail.com',
            'alamat' => 'Sabang subik',
            'tanggal_lahir' => Date::now(),
        ]);
    }
}
