<?php

namespace App\Imports;

use App\Models\Desa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DesaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Desa([
            'kode' => $row['kode'],
            'wilayah' => $row['wilayah'],
            'kecamatan_kode' => $row['kecamatan_kode'],
        ]);
    }

    public function chunkSize(): int
    {
        return 1000;
    }
}
