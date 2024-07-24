<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Imports\KecamatanImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $path = public_path('/base-wilayah-file/kecamatan.xlsx');
        // Membaca file Excel
        Excel::import(new KecamatanImport, $path);
    }
}
