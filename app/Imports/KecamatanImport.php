<?php

namespace App\Imports;

use App\Models\Kecamatan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class KecamatanImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Kecamatan([
            'kode' => $row['kode'],
            'wilayah' => $row['wilayah'],
            'kabupaten_kode' => $row['kabupaten_kode'],
        ]);
    }

     public function chunkSize(): int
    {
        return 1000;
    }
}
