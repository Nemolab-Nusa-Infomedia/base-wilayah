<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Imports\KabupatenImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $path = public_path('/base-wilayah-file/kabupaten.xlsx');
        // Membaca file Excel
        Excel::import(new KabupatenImport, $path);
    }
}
