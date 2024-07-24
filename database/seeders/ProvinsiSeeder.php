<?php

namespace Database\Seeders;

use App\Imports\ProvinsiImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $path = public_path('/base-wilayah-file/provinsi.xlsx');
        // Membaca file Excel
        Excel::import(new ProvinsiImport, $path);
    }
}
