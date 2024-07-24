<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Imports\DesaImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $path = public_path('/base-wilayah-file/desa.xlsx');
        // Membaca file Excel
        Excel::import(new DesaImport, $path);
    }
}
